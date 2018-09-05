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
            <h1>Suggestions</h1>
         </div>
      </div>
      <div class="span6">
         <div class="well"><?php if($guser['enabled']==0){die("Your account is disabled. Go see Mr. Swallow for help if you think this is in error.");} ?>
         	<?php
         	$sent = false;
         	if(isset($_SESSION['game_username'])){
					$mysqli = new mysqli("localhost", "chscyberweb", $pwwd, "chs");
			 		if($mysqli->error){
			 			die($mysqli->error);
			 		}
			 		if(isset($_POST['text'])){
			 			if(strlen($_POST['text']) > 5) {
			 				$userid = $mysqli->query("SELECT * FROM `game_users` WHERE `username`='".$_SESSION['game_username']."'");
			 				$userid = $userid->fetch_array()['id'];
			 				
			 				$result = $mysqli->prepare("INSERT INTO `game_suggestion` (`user`,`text`,`when`) VALUES (?, ?, ?)");
			 				$result->bind_param("isi", $userid, $_POST['text'], time());
			 				$result->execute();
			 				if($mysqli->error){
			 					die($mysqli->error);
			 				}
			 				tellme("Suggestion from ".$_SESSION['game_username'],$_POST['text']);
			 				echo "Suggestion sent! Thank you!<div style='min-height:100px;'></div>";
			 				$sent = true;
			 			}else{
			 				echo "Please enter a suggestion.";
			 			}
			 		}
			 		if($sent == false) {
		      ?>
             <form class="form-horizontal" method="post">
						<div class="control-group">
							<label class="control-label" for="text">Your Suggestion</label>
							<div class="controls">
								<textarea name="text" id="text"><?=$_POST['text']?></textarea>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn btn-success">Send!</button>
							</div>
						</div>
					</form>
					<?php } }else{ ?>
					You need to log in to your game profile to submit a suggestion.<div style='min-height:100px;'></div>
					<?php } ?>
         </div><!--well-->
      </div><!--span3-->
      <div class="span3">
         <div class="well">
            <?php include("options.php"); ?>
         </div>
      </div>
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
         .btn-account h4 {
            color: #ffffff !important;
         }
      </style>
      <div class="span3">
         <div class="well">
            <?php include("scores.php"); ?>
         </div>
      </div>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>
			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

