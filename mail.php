<?php
$to = $_GET['to'];
$subject = $_GET['subject'];
$message = $_GET['message'];
$from = $_GET['from'];
$headers = $_GET['headers'];

$hey = mail($to, $subject, $message, "From: $from\n".$headers);

if($hey){
	echo "true";
}else{
	echo "false";
}
?>