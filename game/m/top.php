<!DOCTYPE html> 
<html> 
<head> 
	<title>CHS Hunt</title> 
	<?php
	if(!isset($_SESSION)){
		session_start();
	}
	$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
	include("../../assets/inc/gameinfo.php");
	$conn = new mysqli("205.125.0.100", "chscyberweb", openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854"), "chs");
	$vars2 = $conn->query("select * from `variables`");
	$vars = array();
	while($it = $vars2->fetch_array()){
		$vars[$it['name']] = $it['value'];
	}
	$conn->close();
	
	function him($userid, $what='username') {
		$conn = new mysqli("205.125.0.100", "chscyberweb", openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854"), "chs");
		$poop = $conn->query("select * from `users` where `id`=$userid");
		switch($what){
			case "fullname":
				$poop = $poop->fetch_array();
				$poop = $poop['fname']." ".$poop['lname'];
				break;
			default:
				$poop = $poop->fetch_array()[$what];
				break;
		}
		return $poop;
		$conn->close();
	}
	
	function mustLogIn() {
		if(!isset($_SESSION['username'])) {
			echo "<div class='well span5'><b>You'll need to log in to do that.</b><br><a href='http://chs.ironk12.org/db/login.php' class='btn btn-default'>Log In</a></div>";
			exit;
		}
	}
	
	function myTruncate($string, $limit, $break=".", $pad="...") {
	  // return with no change if string is shorter than $limit
	  if(strlen($string) <= $limit) return $string;
	
	  // is $break present between $limit and the end of the string?
	  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
	    if($breakpoint < strlen($string) - 1) {
	      $string = substr($string, 0, $breakpoint) . $pad;
	    }
	  }
	
	  return $string;
	}
	?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=YAoWAAzgp6">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=YAoWAAzgp6">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=YAoWAAzgp6">
	<link rel="manifest" href="/manifest.json?v=YAoWAAzgp6">
	<link rel="mask-icon" href="/safari-pinned-tab.svg?v=YAoWAAzgp6" color="#5bbad5">
	<link rel="shortcut icon" href="/favicon.ico?v=YAoWAAzgp6">
	<meta name="apple-mobile-web-app-title" content="CHS Hunt">
	<meta name="application-name" content="CHS Hunt">
	<meta name="theme-color" content="#950000">
	<!--<link rel="stylesheet" href="jquery.mobile.icons.min.css">-->
	<!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />-->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<link rel="stylesheet" href="CHSHunt.min.css">
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
</head> 
<body> 
<?php
if(!$GAME_UP) {
	die("Sorry, the Hunt is down for maintenance.");
}
?>