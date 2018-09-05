<?php
$c = array();
$c['name'] = "iTag";
$c['url'] = "http://chs.ironk12.org/db/tags/";

$pre = "tag_";

$pri = array();
$pri['mon'] = "Math";
$pri['tue'] = "Science";
$pri['wed'] = "English";
$pri['thu'] = "Social Science";
$pri['fri'] = "CTE";

session_start();
include("../../assets/inc/include.php");
$manage = new Manager();
$mysqli = $manage->database();

if(isset($_SESSION[$pre.'username'])) {
	$u = $mysqli->query("SELECT * FROM `faculty` WHERE `email`='".$_SESSION[$pre.'username']."@ironmail.org'");
	$u = $u->fetch_array();
}
?> 