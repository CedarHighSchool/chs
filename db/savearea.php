<?php
include("../assets/inc/include.php");
$manage = new Manager();

$manage->require_perm("edit");
$mysqli = $manage->database();

$url = $_POST['url'];
$name = $_POST['name'];
$content = $_POST['content'];

$res = $mysqli->query("UPDATE `areas` SET `content`='$content' WHERE `name`='$name'");
if($_GET['ajax']==1) {
	echo "true";
}else{
	header("location: $url");
}
?>