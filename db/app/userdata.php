<?php
session_start();

$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");

if(isset($_SESSION['username'])){
	$mysqli = new mysqli("schoolsites", "chscyberweb", $pwwd, "chs");
	$stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ?");
	$stmt->bind_param('s', $_SESSION['username']);
	$stmt->execute();
	$userdata = $stmt->get_result();
	$cuser = $userdata->fetch_array();
	$mysqli->close();
}
?>