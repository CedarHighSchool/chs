<?php
include("../../assets/inc/include.php");
$manage = new Manager();
$mysqli = $manage->database();

$message = "You have unfinished tasks! Be sure to mark them as completed when you finish them!";
$subject = "Unfinished Tasks";
$tasks = $mysqli->query("SELECT * FROM `todo` WHERE `done`=0");
while($one = $tasks->fetch_array()){
	if($one['assigned_to']){
		$email = $mysqli->prepare("SELECT * FROM `users` WHERE `id`=?");
		$email->bind_param("i",$one['assigned_to']);
		$email->execute();
		$email = $email->fetch_array();
		$email = $email['email'];
		$test = mail($email,$subject,$message,"From: CHS <notify@chs.ironk12.org>\nReply-To: andersmmg@gmail.com");
		if(!$test){
			die("Mail failed at ($email)\t");
		}
	}else{
		// Nobody assigned exists
	}
}
echo "Good";
?>