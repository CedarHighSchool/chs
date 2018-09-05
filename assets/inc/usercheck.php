<?php
include("include.php");
$manage = new Manager();
$mysqli = $manage->database();

$cuser = $manage->get_user();

if($cuser['changed'] == 1) {
	die("<script>window.location.reload();</script>Account is updated.");
}
?>