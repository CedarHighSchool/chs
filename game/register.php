<?php $thisPage="clubs"; ?>

<!DOCTYPE html>

<html lang="en">
   
   <head>
      
      <title>Cedar High School</title>
      
      <?php include("../assets/inc/headtag.php") ?>
      <style>
				.imglabel {
					font-size: 12px;
				}
         
				@media (min-width: 768px) and (max-width: 979px) {
					.imglabel {
						font-size: 40px;
					}
				}
	         
      </style>
      
   </head>
   
   <body>
      
      <?php include("../assets/inc/navbar.php") ?>
      
      
      <style type="text/css">
      a.thumbnail { height: 205px; }
      </style>
      
      <!-- Let the container begin! -->
      
      <div class="container">
      
      <div class="row">
      
      
      
      <?php include("../assets/inc/navlist.php") ?>
      
      
      
      <div class="span9">	
         <div class="well">
            <h1>The Hunt Begins!</h1>
         </div>
      </div>
      
      <div class="span6">
         <div class="well">
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
                            			tellme("New Player","$username joined the Hunt!");
                            			echo "<div class=\"alert alert-success\"><b>Registered</b> You will be logged in and redirected.</div><script>setTimeout(function(){ window.location.href='/game/'; }, 1000);</script>";
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
				<h3>Sign up for the challenge!</h3><br>
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
         </div><!--well-->
      </div><!--span3-->
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
      </style>
      <div class="span3">
         <div class="well">
            <?php include("options.php"); ?>
         </div>
      </div>
      <div class="span3">
         <div class="well">
            <?php include("scores.php"); ?>
         </div>
      </div>   
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>
			
			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>      
   </body>

</html>

