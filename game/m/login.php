<?php include("top.php"); ?>

<div data-role="page">

	<div data-role="header">
		<a href="about.php">About</a>
		<h1>Hunt Login</h1>
		<a href="register.php" class="ui-btn-right">Register</a>
	</div>

	<div data-role="content">	
		<?php
    if($GAME_UP){
    $mysqli = new mysqli("schoolsites", "chscyberweb", $pwwd, "chs");
    // Check connection
    if ($mysqli->connect_error) {
    	die("<div class=\"alert alert-danger\"><b>Connection failed</b><br> " . $mysqli->connect_error . "</div>"); 
    }
    
    if(isset($_POST['username']) && isset($_POST['password'])) {
    
        $username = $_POST['username'];
        $password = $_POST['password'];
    
    	if(!($stmt = $mysqli->prepare("SELECT * FROM game_users WHERE username = ?"))){
    		echo "<div class=\"alert alert-danger\"><b>Login Failed</b> Prepare failed: (" . $stmt->errno .")" . $stmt->error . "</div>";
    	}
    	if(!$stmt->bind_param('s', $username)){
    		echo "<div class=\"alert alert-danger\"><b>Login Failed</b> Bind failed: (" . $stmt->errno .")" . $stmt->error . "</div>";
    	}
    	if(!$stmt->execute()){
    		echo "<div class=\"alert alert-danger\"><b>Login Failed</b> Execute failed: (" . $stmt->errno .")" . $stmt->error . "</div>";
    	}
    	$userdata = $stmt->get_result();
    	if($userdata->num_rows <=0 ){
    		echo "<div class=\"alert alert-danger\"><b>Invalid Login</b> User does not exist. See Mr. Swallow if you forgot your account information.</div>";
    	}else{
    		$row = $userdata->fetch_array(MYSQLI_ASSOC);
    		$stmt->bind_result($username, $password);
    		$stmt->store_result();
    		//if($password == $row['password']){
    		if(password_verify($password, $row['password'])){
    			$_SESSION['game_username'] = $row['username'];
    			$t = time();
    			$uid = $row['id'];
    			$mysqli->query("INSERT INTO `game_logins` (`who`,`when`) VALUES ($uid,$t)");
    			echo "<div class=\"alert alert-success\"><b>Logged In</b> You will be redirected.</div><script>setTimeout(function(){ window.location.href='index.php'; }, 1000);</script>";
    			// exit();
    		}else{
    			echo "<div class=\"alert alert-danger\"><b>Invalid Login</b> Password is incorrect. See Mr. Swallow if you forgot your account information.</div>";
    		}
    	}
    	$stmt->close();
    }
    }else{
    	die("Sorry, the Hunt is down for maintenance.");
    }
    ?>
		<form class="form-horizontal" method="post">
			<div class="control-group">
				<label for="inputUsername">Username</label>
				<div class="controls">
					<input type="text" id="inputUsername" name="username" placeholder="your username">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
					<input type="password" id="inputPassword" name="password" placeholder="the password you chose">
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn">Sign in</button>
				</div>
			</div>
		</form>
	</div>
	
</div>

</body>
</html>