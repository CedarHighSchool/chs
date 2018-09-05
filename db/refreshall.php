<?php
include("../assets/inc/include.php");
$manage = new Manager();
$conn = $manage->database();

$manage->require_perm("admin");

$conn->query("UPDATE `users` SET `changed`=1");