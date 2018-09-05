<?php
include("config.php");
session_start();
unset($_SESSION[$pre.'username']);
header("location: login.php");
?>