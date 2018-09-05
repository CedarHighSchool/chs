<?php
// include("userdata.php");
session_start();
if(!isset($_SESSION['username'])){ // Must be logged in
	die("You need to log in to do this.");
}
include("../../assets/inc/include.php");
$manage = new Manager();

$status = $_GET['status'];
$id = $_GET['id'];

$cuser = $manage->get_user();

$conn = $manage->database(); // connection

if($status == 1){
	$stmt = $conn->prepare("UPDATE `todo` SET `done`=1, `done_at`=?, `done_by`=? WHERE `id`=?");
	$stmt->bind_param("iii", time(), $cuser['id'], $id);
	$stmt->execute(); // Update the task to current status
	
	if($stmt->error){ // Error handling
		die("ERROR! ".$stmt->error);
	}
	
	$report = $conn->query("SELECT * FROM `todo` WHERE `id`=$id"); // Get the task info
	$report = $report->fetch_array();
	$report = $report['report_ref']; // Get report referenced
	if($report != 0){ // If there is a report
		$stmt = $conn->prepare("UPDATE `reports` SET `done`=? WHERE `id`=?"); // Update the report
		$stmt->bind_param("ii", $status, $report); // Bind info
		$stmt->execute(); // Execute
	}
	$manage->activity("Set task as done", "task", $id);
}else{
	$stmt = $conn->prepare("UPDATE `todo` SET `done`=0 WHERE `id`=?");
	$stmt->bind_param("i", $id);
	$stmt->execute(); // Update the task to current status
	
	if($stmt->error){ // Error handling
		die("ERROR! ".$stmt->error);
	}
	
	$report = $conn->query("SELECT * FROM `todo` WHERE `id`=$id"); // Get the task info
	$report = $report->fetch_array();
	$report = $report['report_ref']; // Get report referenced
	if($report != 0){ // If there is a report
		$stmt = $conn->prepare("UPDATE `reports` SET `done`=? WHERE `id`=?"); // Update the report
		$stmt->bind_param("ii", $status, $report); // Bind info
		$stmt->execute(); // Execute
	}
	$manage->activity("Set task as not done", "task", $id);
}

if($stmt->error){
	echo "Error: ".$stmt->error;
}else{
	header("location: /db/app/task.php?id=$id");
}

$stmt->close();