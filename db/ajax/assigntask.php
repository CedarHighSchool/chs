<?php
include("../../assets/inc/include.php");
$manage = new Manager();
$mysqli = $manage->database();
if(isset($_GET['id'])) {
	if(isset($_GET['user'])) {
		// All is well
		$res = $mysqli->query("UPDATE `todo` SET `assigned_to`=".$_GET['user']." WHERE `id`=".$_GET['id']);
	}else{
		echo "No user specified.";
	}
}else{
	echo "No task specified.";
}
?>