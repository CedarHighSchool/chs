<?php
session_start();
if(!isset($_SESSION['game_username'])){ 
   header("Location: /game/about.php");
}
?>
<?php $thisPage="clubs"; ?>

<!DOCTYPE html>

<html lang="en">
   
   <head>
      
      <title>Cedar High School</title>
      
      <?php include("../assets/inc/headtag.php"); if(!$GAME_UP){die("<script>window.location.href='/game/down.php';</script>Sorry, the Hunt is down for the moment! Please check back later.");}
      //if not logged in
      
      ?>
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
      <style>
         #heyy h6 {
            color: black;
         }
      </style>
      <div class="span6">
         <?php
	      	$stuff = $mysqli->query("SELECT * FROM `game_uses` ORDER BY `when` DESC LIMIT 50");
	      	
	      	while($item = $stuff->fetch_array()){
                	$code = $mysqli->query("SELECT * FROM `game_codes` WHERE `id`=".$item['code']);
                	$code = $code->fetch_array();
                	$user = $mysqli->query("SELECT * FROM `game_users` WHERE `id`=".$item['user']);
                	$user = $user->fetch_array();
                	$hint = $mysqli->query("SELECT * FROM `game_hints` WHERE `code`=".$item['code']);
                	$hint = $hint->fetch_array();
                	if($user['hidden'] == 1){
                	   continue;
                	}
                	$check = $mysqli->query("SELECT * FROM `game_uses` WHERE `code`=".$code['id']." AND `user`=".$guser['id']);
                	$used = false;
                	if($check->num_rows > 0) {
                		$used = true;
                	}
                	?>
	   				<div class="well"><center>
		   				</center>
                <p>
                	<b><?=$user['username']?></b> got <?=$item['pts']?$item['pts']:"some"?> points with <b><?=$hint['title']?></b><br>
                	<span class="pull-right"><?=date("l, jS \of F Y @ h:i:s A",$item['when'])?></span>
                </p>
            </div>
	   				<?php
	      	}
      	?>
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

