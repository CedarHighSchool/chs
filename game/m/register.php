<?php include("top.php"); ?>

<div data-role="page">

	<div data-role="header">
		<a href="about.php">About</a>
		<h1>Registration</h1>
		<a href="login.php" class="ui-btn-right">Log In</a>
	</div>

	<div data-role="content">	
		<?php
         	$open = true;
            $mysqli = new mysqli("schoolsites", "chscyberweb", $pwwd, "chs");
            // Check connection
            if ($mysqli->connect_error) {
            	die("<div class=\"alert alert-danger\"><b>Connection failed</b><br> " . $mysqli->connect_error . "</div>"); 
            }
            if(!$open){
               echo "<div class=\"alert alert-danger\"><b>Sorry!</b> Registration is not open yet!</div>";
            }
            if(isset($_POST['username'])) {
               if($open == true || $_SESSION['username']=="andersmmg"){
                  $fname = $_POST['fname'];
                  $lname = $_POST['lname'];
                  $number = $_POST['number'];
                  $username = $_POST['username'];
                  $email = $_POST['email'];
                  $password = $_POST['password'];
                  $password2 = $_POST['password2'];
                  
                  if(!empty($username)){
                     if(!empty($fname) && !empty($lname)){
                        if(!empty($email)){
                           if(!empty($password) && $password == $password2){
                              if(!empty($number) && strlen($number)==8){
                              	if(!($stmt = $mysqli->prepare("SELECT * FROM game_users WHERE username = ?"))){
                              		echo "<div class=\"alert alert-danger\"><b>Register Failed</b> Prepare failed: (" . $stmt->errno .")" . $stmt->error . "</div>";
                              	}
                              	if(!$stmt->bind_param('s', $username)){
                              		echo "<div class=\"alert alert-danger\"><b>Register Failed</b> Bind failed: (" . $stmt->errno .")" . $stmt->error . "</div>";
                              	}
                              	if(!$stmt->execute()){
                              		echo "<div class=\"alert alert-danger\"><b>Register Failed</b> Execute failed: (" . $stmt->errno .")" . $stmt->error . "</div>";
                              	}
                              	$userdata = $stmt->get_result();
                              	if($userdata->num_rows >0 ){
                              		echo "<div class=\"alert alert-danger\"><b>Invalid Registration</b> User exists.</div>";
                              	}else{
                              	   $password = password_hash($password, PASSWORD_DEFAULT);
                              		$p = $mysqli->prepare("INSERT INTO `game_users` (`fname`, `lname`, `number`, `username`, `email`, `password`) VALUES (?, ?, ?, ?, ?, ?)");
                              		$p->bind_param("ssisss",$fname,$lname,$number,$username,$email,$password);
                              		$p->execute();
                              		//if($password == $row['password']){
                            			$_SESSION['game_username'] = $username;
                            			echo "<div class=\"alert alert-success\"><b>Registered</b> You will be logged in and redirected.</div><script>setTimeout(function(){ window.location.href='index.php'; }, 1000);</script>";
                            			// exit();
                              	}
                              	$stmt->close();
                              }else{
                                 echo "<div class=\"alert alert-danger\"><b>Oops!</b> Enter a valid ID/Lunch #.</div>";
                              }
                           }else{
                              echo "<div class=\"alert alert-danger\"><b>Oops!</b> Must have matching passwords.</div>";
                           }
                        }else{
                           echo "<div class=\"alert alert-danger\"><b>Oops!</b> Input your email!</div>";
                        }
                     }else{
                        echo "<div class=\"alert alert-danger\"><b>Oops!</b> Input your name!</div>";
                     }
                  }else{
                     echo "<div class=\"alert alert-danger\"><b>Oops!</b> Choose a username.</div>";
                  }
               }
            }
          ?>
		<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputFname">First Name</label>
				<div class="controls">
					<input type="text" id="inputFname" name="fname" placeholder="your first name" value="<?=$_POST['fname']?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputLname">Last Name</label>
				<div class="controls">
					<input type="text" id="inputLname" name="lname" placeholder="your last name" value="<?=$_POST['lname']?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputNumber">Lunch #</label>
				<div class="controls">
					<input type="number" id="inputNumber" name="number" placeholder="your student ID" value="<?=$_POST['number']?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputUsername">Username</label>
				<div class="controls">
					<input type="text" id="inputUsername" name="username" placeholder="must be school appropriate" value="<?=$_POST['username']?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmails">Email</label>
				<div class="controls">
					<input type="email" id="inputEmails" name="email" placeholder="the one you check most" value="<?=$_POST['email']?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
					<input type="password" id="inputPassword" name="password" placeholder="secure, but memorable">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword2">Repeat Password</label>
				<div class="controls">
					<input type="password" id="inputPassword2" name="password2" placeholder="repeat it, just in case">
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn">Register</button>
				</div>
			</div>
		</form>
	</div>
	
</div>

</body>
</html>