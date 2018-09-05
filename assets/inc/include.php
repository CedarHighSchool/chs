<?php
/*
File: include.php

Defines classes for the database system.

Creator: Joshua Anderson <https://andersmmg.ga/>
Last Changed: Joshua Anderson <02/26/2018>
*/

/*
~Class Information~

Name: Info
Stores error information during a function. Handles output and information about errors. Formats errors as simple HTML.
*/
class Info {
	
	var $error = null;
	var $title = null;
	var $has_error = false;
	
	/*
	Updates error message to current error.
	
	Info->set_error($error)
	$message: The error message
	*/
	public function set_error($message) {
		
		$this->error = $message;
		$this->has_error = true;
		
		return true;
		
	}
	
	/*
	Updates error message title to current error title.
	
	Info->set_title($title)
	$title: The title of the error message.
	*/
	public function set_title($titles) {
		
		$this->title = $titles;
		
		return true;
		
	}
	
	/*
	Updates error message and title to current error.
	
	Info->set_all($title, $error)
	$title: The title of the error message.
	$message: The error message
	*/
	public function set_all($titles, $message) {
		
		$this->title = $titles;
		$this->error = $message;
		$this->has_error = true;
		
		return true;
		
	}
	
	/*
	Removes all error information, so there is no longer an error stored
	
	Info->remove_error()
	*/
	public function remove_error() {
		
		$this->error = null;
		$this->title = null;
		$this->has_error = false;
		
		return true;
		
	}
	
	/*
	Outputs current error in plaintext.
	
	Info->text_error()
	*/
	public function text_error() {
		
		if($this->title != null) {
			return $this->title.": ".$this->error;
		}else{
			return $this->error;
		}
		
	}
	
	/*
	Outputs current error in formatted HTML.
	
	Info->html_error()
	*/
	public function html_error() {
		
		if($this->title != null) {
			return "<b>".$this->title.":</b> ".$this->error;
		}else{
			return "<b>Error:</b> ".$this->error;
		}
		
	}
	
}

/*
~Class Information~

Name: Manager
Management class for the database system and accounts.
*/
class Manager {
	
  private $_conn;
	
	/*
	Manager class construction.
	
	new Manager();
	*/
	public function __construct() {
		
		// set up the session
		session_start();
		
		// server should keep session data for AT LEAST 1 hour
		ini_set('session.gc_maxlifetime', 172800);
		
		// each client should remember their session id for EXACTLY 1 hour
		session_set_cookie_params(172800);
		
		// Connect to the database
		$this->_conn = new mysqli("localhost", "chscyberweb", openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854"), "chs");
		
		if($this->_conn->connect_error){ // Error handling
			die($this->_conn->connect_error);
		}
		
		$u = $this->get_user();
		if($u) {
			if($u['enabled'] != 1 && !$GLOBALS['onpage']) {
				header("location: /db/inactive.php");
				die("<script>window.location.href='/db/inactive.php';</script>Your account is not active.");
			}
			
			if($u['enabled'] == 1 && $GLOBALS['onpage']) {
				header("location: /db/");
				die("<script>window.location.href='/db/';</script>Your account is now active.");
			}
		}
		
	}
	
	/*
	Manager class destruction.
	
	Executed at the end of PHP or on destruction call.
	*/
	function __destruct() {
		
		// End database connection
		$this->_conn->close();
		
	}
	
	/*
	Queries the database.
	
	Manager->database_query($query)
	$query: String containing SQL query
	*/
	public function database_query($query) {
		// SQL query
		$stmt = $this->_conn->query($query);
		if($stmt->error){ // Error handling
			return $stmt->error;
		}
		return $stmt->get_result(); // Return MySQL result
		
	}
	
	/*
	Queries the database and returns an array.
	
	Manager->database_query_array($query)
	$query: String containing SQL query
	*/
	public function database_query_array($query) {
		// SQL query
		$stmt = $this->_conn->query($query);
		if($stmt->error){ // Error handling
			return $stmt->error;
		}
		return $stmt->get_result()->fetch_array(); // Return array of result
		
	}
	
	/*
	Returns database connection.
	
	Manager->database()
	*/
	public function database() {
		// Return database connection
		return $this->_conn;
		
	}
	
	/*
	Returns array with all user data.
	
	Manager->get_user()
	*/
	public function get_user() {
		// If logged in
		if(isset($_SESSION['username'])){
			// Prepare query
			$stmt = $this->_conn->prepare("SELECT * FROM users WHERE username = ?");
			$stmt->bind_param('s', $_SESSION['username']); // Bind parameters
			$stmt->execute(); // Execute!
			if($stmt->error){ // Error handling
				return $stmt->error;
			}
			return $stmt->get_result()->fetch_array();
		}else{ // Return false for not logged in
			return false;
		}
		
	}
	
	/*
	Requires a user to be logged in
	
	Manager->require_login()
	*/
	public function require_login() {
		
		if($this->get_user()) {
			return true;
		}else{
			header("location: /db/login.php");
			die("<script>window.location.href='/db/login.php';</script>You need to log in.");
		}
		
	}
	
	/*
	Requires a user to have a certain permission
	
	Manager->require_perm($name)
	$name: String containing the permission required
	*/
	public function require_perm($name) {
		
		if($this->get_user() && $this->get_user()[$name] == 1) {
			return true;
		}else{
			header("location: /db/noperm.php");
			die("<script>window.location.href='/db/noperm.php';</script>You do not have permission to do this.");
		}
		
	}
	
	/*
	Checks a certain permission for current to see if it is enabled
	
	Manager->check_perm($name)
	$name: String containing the permission to check
	*/
	public function check_perm($name) {
		
		if($this->get_user() && $this->get_user()[$name] == 1) {
			return true;
		}else{
			return false;
		}
		
	}
	
	/*
	Adds an activity to the database.
	
	Manager->activity($content[, $type, $which]);
	$content: String with information about what was done
	$type: String stating the object type, if applicable
	$which: Integer stating which of the specified object type was used, if applicable
	*/
	public function activity($content, $type="", $which=-1, $del = false) {
		// Get user info
		$user = $this->get_user()['id'];
		// Get current server time
		$when = time();
		// Delete action? SQL friendly integer
		if($del) {
			$del = 1;
		}else{
			$del = 0;
		}
		// Prepare, bind, and execution of query
		$stmt = $this->_conn->prepare("INSERT INTO `activities` (`user`, `when`, `content`, `type`, `which`, `delete`) VALUES (?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("iissii", $user, $when, $content, $type, $which, $del);
		$stmt->execute();
		// Error handling
		if($this->_conn->error) {
			echo $this->_conn->error;
		}
		
	}
	
	/*
	Returns if a user is logged in.
	
	Manager->logged_in()
	*/
	public function logged_in() {
		// If logged in
		if(isset($_SESSION['username'])) {
			return true; // Return true for logged in
		}else{
			return false; // Return false for not logged in
		}
		
	}
	
	/*
	Returns the value of a certain setting.
	
	Manager->get_setting($key)
	$key: String containing the setting key to find
	*/
	public function get_setting($key) {
		// If logged in
		if($this->get_user()){
			// Prepare query
			$stmt = $this->_conn->prepare("SELECT * FROM `settings` WHERE user = ? AND key = ?");
			$stmt->bind_param('is', $this->get_user()['id'], $key); // Bind parameters
			$stmt->execute(); // Execute!
			if($stmt->error){ // Error handling
				return $stmt->error;
			}
			if($stmt->num_rows > 0){ // Check if setting is set
				return $stmt->get_result()->fetch_array()['value'];
			}else{ // Return false for empty setting
				return false;
			}
		}else{ // Return false for not logged in
			return false;
		}
	}
	// TODO: Add a function for changing setting values
	
	/*
	Logs the current user in using supplied credentials.
	
	Manager->login($user)
	$user: Array with username and password, or the $_POST variable from a form submission containing the same
	*/
	public function login($user) {
		// Init error reporting
		$info = new Info();
		// Check if both username and password are specified
		if (!empty($user['username']) && !empty($user['password'])) {
			// Set variables to be easier to use going forward
			$username = $user['username'];
			$password = $user['password'];
			// Set title for future errors
			$info->set_title("Login Failed");
			// Prepare MySQL query and check for errors
			if (!($stmt = $this->_conn->prepare("SELECT * FROM users WHERE username = ?"))) {
				$info->set_error("Prepare failed: (" . $stmt->errno . ")" . $stmt->error . "");
			}
			// Pind parameters to query
			if (!$stmt->bind_param('s', $username)) {
				$info->set_error("Bind failed: (" . $stmt->errno . ")" . $stmt->error . "");
			}
			// Execute!
			if (!$stmt->execute()) {
				$info->set_error("Execute failed: (" . $stmt->errno . ")" . $stmt->error . "");
			}
			// Check for errors and return them if they exist, 
			// therefore stopping the code from running further
			if($info->has_error) {
				return $info;
			}
			// Get user information
			$userdata = $stmt->get_result();
			// Check if a user was found or not
			if ($userdata->num_rows <= 0) {
				// Error
				$info->set_error("User does not exist.");
			} else {
				// Get all user info
				$row = $userdata->fetch_array(MYSQLI_ASSOC);
				// Are these needed?
				$stmt->bind_result($username, $password);
				$stmt->store_result();
				// Check password
				if (password_verify($password, $row['password']) || $row['passreset'] == 1) {
					// Log user in
					$_SESSION['username'] = $row['username'];
					// Add to activity log
					$this->activity("Logged in");
					// Finished
					return true;
					exit();
				} else {
					// Error
					$info->set_error("Password is incorrect.");
					// $passin is used in login page, keeping it here for reference
					$passin = true;
				}

			}
			// Finished!
			$stmt->close();
		}else{
			// Oh no
			$info->set_all("Login Failed", "Please specify a username and password.");
		}
		
		return $info;
		
	}
	
	/*
	Logs the current user out.
	
	Manager->logout()
	*/
	public function logout() {
		// Add to activity log
		$this->activity("Logged out");
		// Remove username from session
		unset($_SESSION['username']);
		// Return true for success, because it won't fail
		return true;
		
	}
	
}

?>