<?php

include("../assets/inc/include.php");
$manage = new Manager();
$conn = $manage->database();

$manage->require_perm("edit");

$name = $_POST['name'];
$value = $_POST['value'];

$stmt = $conn->prepare("UPDATE `variables` SET `value`=? WHERE `name`=?");

$stmt->bind_param("ss", $value, $name);
$stmt->execute();

if(!$stmt){
	die("Could not update.");
}else{
	$manage->activity("Updated variables");
	die("true");
}
?> 