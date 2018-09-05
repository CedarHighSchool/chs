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
            if($GAME_UP){
            $mysqli = new mysqli("schoolsites", "chscyberweb", $pwwd, "chs");
            // Check connection
            if ($mysqli->connect_error) {
            	die("<div class=\"alert alert-danger\"><b>Connection failed</b><br> " . $mysqli->connect_error . "</div>"); 
            }
            
            if(isset($_POST['username']) && isset($_POST['password'])) {
            
                $username = $_POST['username'];
                $password = $_POST['password'];
            
            	if(!($stmt = $mysqli->prepare("SELECT * FROM game_users WHERE username = ?"))){
            		echo "<div class=\"alert alert-danger\"><b>Login Failed</b> Prepare failed: (" . $stmt->errno .")" . $stmt->error . "</div>";
            	}
            	if(!$stmt->bind_param('s', $username)){
            		echo "<div class=\"alert alert-danger\"><b>Login Failed</b> Bind failed: (" . $stmt->errno .")" . $stmt->error . "</div>";
            	}
            	if(!$stmt->execute()){
            		echo "<div class=\"alert alert-danger\"><b>Login Failed</b> Execute failed: (" . $stmt->errno .")" . $stmt->error . "</div>";
            	}
            	$userdata = $stmt->get_result();
            	if($userdata->num_rows <=0 ){
            		echo "<div class=\"alert alert-danger\"><b>Invalid Login</b> User does not exist. See Mr. Swallow if you forgot your account information.</div>";
            	}else{
            		$row = $userdata->fetch_array(MYSQLI_ASSOC);
            		$stmt->bind_result($username, $password);
            		$stmt->store_result();
            		//if($password == $row['password']){
            		if($row['reset'] == 1) {
            		   $_SESSION['game_username'] = $row['username'];
            		   echo "<div class=\"alert alert-success\"><b>Password is Reset</b> You will be redirected.</div><script>setTimeout(function(){ window.location.href='/game/passreset.php'; }, 1000);</script>";
            		}else{
               		if(password_verify($password, $row['password'])){
               			$_SESSION['game_username'] = $row['username'];
               			$t = time();
               			$uid = $row['id'];
               			$mysqli->query("INSERT INTO `game_logins` (`who`,`when`) VALUES ($uid,$t)");
               			echo "<div class=\"alert alert-success\"><b>Logged In</b> You will be redirected.</div><script>setTimeout(function(){ window.location.href='/game/'; }, 1000);</script>";
               			// exit();
               		}else{
               			echo "<div class=\"alert alert-danger\"><b>Invalid Login</b> Password is incorrect. See Mr. Swallow if you forgot your account information.</div>";
               		}
            		}
            	}
            	$stmt->close();
            }
            
            ?>
					<h3>Sign in</h3><br>
					<form class="form-horizontal" method="post">
						<div class="control-group">
							<label class="control-label" for="inputUsername">Username</label>
							<div class="controls">
								<input type="text" id="inputUsername" name="username" autofocus placeholder="your username">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">Password</label>
							<div class="controls">
								<input type="password" id="inputPassword" name="password" placeholder="the password you chose">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn">Sign in</button>
							</div>
						</div>
					</form>
					<?php } else { ?>
					<h5>Sorry, the Hunt is down for maintenance.</h5>
					<?php } ?>
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
       <?php include("assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>
			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

