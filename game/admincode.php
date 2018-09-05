<?php
session_start();
// Connect to database
$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
$mysqli = new mysqli("schoolsites", "chscyberweb", $pwwd, "chs");
if ($mysqli->connect_error) { // Connection error handling
	die("<div class=\"alert alert-danger\"><b>Connection failed</b><br> " . $mysqli->connect_error . "</div>"); 
}
$code = strtolower($_POST['code']);

$stmt = $mysqli->prepare("SELECT * FROM `game_codes` WHERE `code` = ?"); // Query to get the code entered
$stmt->bind_param('s', $code); // Bind the code parameter
$stmt->execute(); // Execute!
$userdata = $stmt->get_result(); // Get current code
$us = $_SESSION['game_username']; // Get username
$usid = $mysqli->query("SELECT `id` FROM `game_users` WHERE `username`='$us'")->fetch_array()['id']; // Get the user's ID

if($userdata->num_rows>0){
	$row = $userdata->fetch_array(MYSQLI_ASSOC); // Get code information from database
	$ccdd = $row['id']; // Code ID
	$checker = $mysqli->query("SELECT * FROM `game_uses` WHERE `user`='$usid' && `code`='$ccdd'"); // Check if the user has used it before
	$checker2 = $mysqli->query("SELECT * FROM `game_uses` WHERE `code`=$ccdd"); // Check if is has been used by anyone at all
	if($row['single']==1) { // Special code, or not?
		echo "This is a special code. ";
		if($checker2->num_rows<=0){ // Code wasn't used yet
			echo "Nobody has used it yet."; // SPECIAL CODE!
			$codid = $row['id']; // Get the code's ID
			$t = time(); // Current time for reference
			$pts = 1000; // Special code worth
		}else{ // Code has been used.
			$usss = $checker2->fetch_array();
			$usss = $usss['who'];
			echo "It was used by ".$usss; // Tell user it's used
		}
	}else{
		if(false){ // Never use lol
			echo "Sorry, you've already used that code before."; // Sad day.
		}else{ // Always
			$stmt2 = $mysqli->prepare("SELECT * FROM game_questions WHERE `id` = ?"); // Get the point data
			$stmt2->bind_param('i', $row['question']); // Bind variabled to query
			$stmt2->execute(); // Execute!
			$userdata2 = $stmt2->get_result(); // Save data to variable
			$row2 = $userdata2->fetch_array(MYSQLI_ASSOC); // Create an array
			if($checker2->num_rows > 10){ // Everyone else
				$pts = $row2['worth'];
			}else if($checker2->num_rows > 0){ // First 10 people to use the code
				$pts = $row2['worth']*1.5;
			}else{ // First person to use the code
				$pts = $row2['worth']*2.0;
			}
			echo "This code is worth <b>$pts</b> points right now. Normally worth <b>".$row2['worth']."</b> points, used <b>".$checker2->num_rows."</b> times"; // How many points
		}
	}
	
}else{
	echo "This code doesn't exist!"; // Code wasn't found
}