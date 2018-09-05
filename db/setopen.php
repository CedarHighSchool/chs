<?php
// $pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
session_start();
if(!isset($_SESSION['username'])){
	die("You need to log in to do this.");
}
include("../assets/inc/include.php");
$manage = new Manager();

$manage->require_perm("bugger");

$status = $_GET['status'];
$id = $_GET['id'];

$conn = $manage->database();


$stmt = $conn->prepare("UPDATE `reports` SET `done`=? WHERE `id`=?");
$stmt->bind_param("ii", $status, $id);
$stmt->execute();

if($conn->error){
	echo "Error: ".$conn->error;
}else{
	switch($status) {
		case 0:
			$manage->activity("Set report as open", "report", $id);
			break;
		case 1:
			$manage->activity("Set report as closed", "report", $id);
			break;
	}
	header("location: /db/seereport.php?id=$id");
}

$stmt->close();