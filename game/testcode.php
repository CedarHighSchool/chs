<?php
include("../assets/inc/gameinfo.php");
if(!$GAME_UP){
	die("Sorry, the Hunt is down for maintenance.");
}
session_start();
if(!isset($_SESSION['game_username'])){
	die("You are not logged in.");
}
// Connect to database
$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
$mysqli = new mysqli("schoolsites", "chscyberweb", $pwwd, "chs");
if ($mysqli->connect_error) { // Connection error handling
	die("<div class=\"alert alert-danger\"><b>Connection failed</b><br> " . $mysqli->connect_error . "</div>"); 
}
$code = strtolower($_POST['code']);
$code = str_replace(' ', '', $code);

$stmt = $mysqli->prepare("SELECT * FROM `game_codes` WHERE `code` = ?"); // Query to get the code entered
$stmt->bind_param('s', $code); // Bind the code parameter
$stmt->execute(); // Execute!
$userdata = $stmt->get_result(); // Get current code
$us = $_SESSION['game_username']; // Get username
$userdd = $mysqli->query("SELECT * FROM `game_users` WHERE `username`='$us'"); // Get the user's info
$userdd = $userdd->fetch_array();
$usid = $userdd['id']; // Get the user's ID

if($userdata->num_rows>0){
	$row = $userdata->fetch_array(MYSQLI_ASSOC); // Get code information from database
	$ccdd = $row['id']; // Code ID
	$checker = $mysqli->query("SELECT * FROM `game_uses` WHERE `user`='$usid' && `code`='$ccdd'"); // Check if the user has used it before
	$checker2 = $mysqli->query("SELECT * FROM `game_uses` WHERE `code`=$ccdd"); // Check if is has been used by anyone at all
	if($row['single']==1) { // Special code, or not?
		echo "Congrats! You found a special code";
		if($checker2->num_rows<=0){ // Code wasn't used yet
			tellme("Special Code",$_SESSION['game_username']." found special code $code!");
			echo " first! Here's 1000 points! <script>setTimeout(function(){window.location.reload();},2000)</script>"; // SPECIAL CODE!
			$codid = $row['id']; // Get the code's ID
			$t = time(); // Current time for reference
			$pts = 10000; // Special code worth
			// Add the points!
			$p = $mysqli->query("UPDATE `game_users` SET `score`=(`score`+$pts) WHERE `username`='$us'");
			if($mysqli->error){ // Error handling
				die($mysqli->error);
			}
			// Tell the database the code was used
			$p = $mysqli->query("INSERT INTO `game_uses` (`user`,`code`,`when`,`pts`) VALUES ('$usid', '$ccdd', '$t', $pts)");
			if($mysqli->error){ // Error handling
				die($mysqli->error);
			}
		}else{ // Code has been used.
			tellme("Special Code",$_SESSION['game_username']." refound special code $code!");
			echo ", but it's already been used. Sorry!"; // Tell user it's used
		}
	}else{
		if($checker->num_rows > 0){ // Have they used the code before?
			echo "Sorry, you've already used that code before."; // Sad day.
		}else{ // Nope, they haven't
			$stmt2 = $mysqli->prepare("SELECT * FROM game_questions WHERE `id` = ?"); // Get the point data
			$stmt2->bind_param('i', $row['question']); // Bind variables to query
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
			
			$_hint = $mysqli->query("SELECT * FROM `game_hints` WHERE `code`=$ccdd"); // Get any hint for the code
			if($_hint->num_rows > 0){ // Is there a hint?
				$poo = $_hint->fetch_array(); // Get hint info
				if($poo['level'] > $userdd['level']) {
					echo "You cannot use this yet!";
				}else{
					$p = $mysqli->query("UPDATE `game_users` SET `score`=(`score`+$pts) WHERE `username`='$us'");
					if($mysqli->error){ // Error handling
						die($mysqli->error);
					}
					$mysqli->query("UPDATE `game_users` SET `level`=`level`+1 WHERE `id`=$usid"); // Increment level
					$t = time(); // Current time
					$codid = $row['id']; // Code ID
					$p = $mysqli->query("INSERT INTO `game_uses` (`user`,`code`,`when`, `pts`) VALUES ($usid, $ccdd, '$t', $pts)");
					if($mysqli->error){ // Error handling
						die($mysqli->error);
					}
					$mysqli->query("INSERT INTO `game_hint_done` (`hint`,`who`,`code`) VALUES (".$poo['id'].", $usid, $ccdd)"); // Add row to mark hint as done for user
					echo "You got $pts points! <script>setTimeout(function(){window.location.reload();},2000)</script>"; // Tell user they got the points and refresh the page
					tellme("Code Used",$_SESSION['game_username']." got $pts pts with $code!");
				}
			}else{
				$p = $mysqli->query("UPDATE `game_users` SET `score`=(`score`+$pts) WHERE `username`='$us'");
				if($mysqli->error){ // Error handling
					die($mysqli->error);
				}
				$mysqli->query("UPDATE `game_users` SET `level`=`level`+1 WHERE `id`=$usid"); // Increment level
				$t = time(); // Current time
				$codid = $row['id']; // Code ID
				$p = $mysqli->query("INSERT INTO `game_uses` (`user`,`code`,`when`, `pts`) VALUES ($usid, $ccdd, '$t', $pts)");
				if($mysqli->error){ // Error handling
					die($mysqli->error);
				}
				$mysqli->query("INSERT INTO `game_hint_done` (`hint`,`who`,`code`) VALUES (".$poo['id'].", $usid, $ccdd)"); // Add row to mark hint as done for user
				echo "You got $pts points! <script>setTimeout(function(){window.location.reload();},2000)</script>"; // Tell user they got the points and refresh the page after 2 seconds
			}
			
		}
	}
	
}else{
	echo "Invalid code!"; // Code wasn't found
}