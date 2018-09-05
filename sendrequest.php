<?php
$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");

if(!empty($_POST['email'])){
	if(((strpos($_POST['email'],"johnny") !== false) && (strpos($_POST['email'],"johnson") !== false)) || (strpos($_POST['email'],"haha") !== false) || (strpos($_POST['email'],"123") !== false) || (strpos($_POST['email'],"johnny") !== false)) {
		die("Please use the task sheet to add tasks.");
	}
	if(!empty($_POST['desc'])){
		if(!empty($_POST['name'])){
			$email = $_POST['email'];
			$name = $_POST['name'];
			$desc = $_POST['desc'];
			$type = $_POST['type'];

			$conn = new mysqli("schoolsites", "chscyberweb", $pwwd, "chs");

			$stmt = $conn->prepare("INSERT INTO `reports` (`email`, `name`, `desc`, `type`, `when`) VALUES (?, ?, ?, ?, ?)");
			$stmt->bind_param("sssii", $email, $name, $desc, $type, time());
			$stmt->execute();

			if($conn->error){
				echo "Error: ".$conn->error;
			}else{
				$emm = "A message has been recieved from $name ($email).\nHere's the message:\n\t$desc";
				$emails = $conn->query("SELECT * FROM `users` WHERE `emails`=1 and `bugger`=1");
				while($helper = $emails->fetch_array()) {
					mail($helper['email'],"New CHS Message","Hello, ".$helper['fname']."!\n".$emm, "Reply-To:$name <$email>");
				}
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