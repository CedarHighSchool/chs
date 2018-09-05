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
            <h1>Password Reset</h1>
         </div>
      </div>
      
      <div class="span6">
         <div class="well">
            <?php
            if($GAME_UP){
            // Check connection
            if ($mysqli->connect_error) {
            	die("<div class=\"alert alert-danger\"><b>Connection failed</b><br> " . $mysqli->connect_error . "</div>"); 
            }
            
            if(isset($_POST['password2'])) {
            
               $password1 = $_POST['password1'];
               $password2 = $_POST['password2'];
               $password3 = $_POST['password3'];
            
            	if(password_verify($password1, $guser['password']) || $guser['reset'] == 1) {
   					if($password2 == $password3) {
   						
   						$password2 = password_hash($password2, PASSWORD_DEFAULT);
   						$res = $mysqli->query("UPDATE `game_users` SET `password`='$password2', `reset`=0 WHERE `id`=".$guser['id']);
   
   						if(!$mysqli->error){
   							echo "<div class='alert alert-success'>Password has been changed!</div>";
   							$done = true;
   						}else{
   							echo "<div class='alert alert-danger'>".$mysqli->error."</div>";
   						}
   					}else{
   						echo "<div class='alert alert-danger'>New passwords do not match.</div>";
   					}
   				}else{
   					echo "<div class='alert alert-danger'>Incorrect current password.</div>";
   				}
            }if(!$done) {
            
            ?>
					<form class="form-horizontal" action="" method="post">
						<?php if($guser['reset'] == 0){ ?>
					  <div class="control-group">
					    <label class="control-label" for="password1">Current Password</label>
					    <div class="controls">
					      <input type="password" id="password1" placeholder="Current Password" name="password1">
					    </div>
					  </div>
					  <?php } ?>
					  <div class="control-group">
					    <label class="control-label" for="password2">New Password</label>
					    <div class="controls">
					      <input type="password" id="password2" placeholder="New Password" name="password2">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="password3">New Password Again</label>
					    <div class="controls">
					      <input type="password" id="password3" placeholder="New Password Again" name="password3">
					    </div>
					  </div>
					  <div class="control-group">
					    <div class="controls">
					      <button type="submit" class="btn"><i class="fa fa-floppy-o"></i> Update</button>
					    </div>
					  </div>
					</form>
					<?php } } else { ?>
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

