<?php
// $pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
session_start();
if(!isset($_SESSION['username'])){
	die("You need to log in to do this.");
}
include("../assets/inc/include.php");
$manage = new Manager();

$manage->require_perm("bugger");

if(!empty($_POST['email'])){
	if(!empty($_POST['desc'])){
		if(!empty($_POST['name'])){
			$email = $_POST['email'];
			$name = $_POST['name'];
			$desc = $_POST['desc'];
			$type = $_POST['type'];

			$conn = $manage->database();

			$stmt = $conn->prepare("INSERT INTO `reports` (`email`, `name`, `desc`, `type`, `when`) VALUES (?, ?, ?, ?, ?)");
			$stmt->bind_param("sssii", $email, $name, $desc, $type, time());
			$stmt->execute();

			if($conn->error){
				echo "Error: ".$conn->error;
			}else{
				echo "true";
			}

			$stmt->close();
		}else{
			echo "Please enter your name.";
		}
	}else{
		echo "Please enter a description.";
	}
}else{
	echo "Please enter your email address.";
}