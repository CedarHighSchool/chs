<?php
include("../assets/inc/include.php");
$manage = new Manager();
if(!isset($_SESSION)){
	session_start();
}
$manage->logout();

header("location: /db/");