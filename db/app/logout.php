<?php
include("../../assets/inc/include.php");
$manage = new Manager();
if(!isset($_SESSION)){
	session_start();
}
$manage->activity("Logged out", "login");
$manage->logout();

header("location: /db/app/login.php");