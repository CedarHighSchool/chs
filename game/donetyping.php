<?php
include("../assets/inc/include.php");
include("../assets/inc/gameinfo.php");
$manage = new Manager();
$mysqli = $manage->database();

if(!$GAME_UP){
	die("Sorry, the Hunt is down for maintenance.");
}
if(!$TYPING_UP && $_SESSION['username']!="andersmmg") {
	die("The typing contest is not open.");
}
if(!isset($_SESSION['game_username'])){
	die("You are not logged in.");
}

$res = $mysqli->prepare("INSERT INTO `game_typing` (`player`, `wpm`, `errors`) VALUES (?, ?, ?)");
$res->bind_param("iii",$manage->get_user()['id'],$_POST['wpm'],$_POST['errors']);
$res->execute();

if($res->error) {
	die($res->error);
}else{
	echo "Score uploaded! Wait a bit and we'll see if you won!";
}

?>