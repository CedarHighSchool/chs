<?php
include("../../assets/inc/include.php");
$manage = new Manager();
$mysqli = $manage->database();
$res = $mysqli->query("SELECT * FROM `users` WHERE `username`='".$_GET['username']."'");
$user = $res->fetch_array();
unset($user['password']);
unset($user[5]);
echo json_encode($user);
?>