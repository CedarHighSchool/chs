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
                @font-face {
	    font-family: secretFont;
	    src: url("http://chs.ironk12.org/assets/secretfont.ttf");
	}
	.secretFont {
		font-family: secretFont;
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
      <?php
	 		$stuff = $mysqli->query("SELECT * FROM `game_users` WHERE `username`='".$_SESSION['game_username']."'");
	 		$item = $stuff->fetch_array();
      ?>
      <div class="span6">
         <?php
         	if($mysqli->error){
         		echo $mysqli->error;
         	}
         	$nnm = time();
         	$stuff = $mysqli->query("SELECT * FROM `game_hints` ORDER BY `level` DESC");
         	if($stuff->num_rows <= 0){
         	   ?>
         	   <div class="well">
         	      <center>
         	         Oops! There was an error!
         	      </center>
         	   </div>
         	   <?php
         	}
	      	$hints = false;
         	while($hint = $stuff->fetch_array()){
         		$count = $mysqli->query("SELECT * FROM `game_hint_done` WHERE `hint`=".$hint['id']."");
	      			$hints = true;
      				?>
      				<div class="well"><center>
      				<h3><?=$hint['title']?></h3>
      				<?=nl2br($hint['text'])?>
      				</center><span style="position:absolute;opacity:0.5;"><?=$count->num_rows?> completed</span>
      				<span style="opacity:0.5;" class="pull-right"><?=$hint['after']?></span></div>
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
	      		<center><h3>First Place</h3></center>
	      		<?php
			      $link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs");
				 		if(!$link){
				 			echo mysqli_error($link);
				 		}
				 		$stuff = mysqli_query($link, "SELECT * FROM `game_users` WHERE `hidden`=0 ORDER BY `score` DESC, `level` DESC");
				 		$item = mysqli_fetch_array($stuff);
			      ?>
			      <center>
			      	<img src="https://api.adorable.io/avatars/285/<?=$item['username']?>.png" id="icon_img" style="max-width: 120px; border-radius: 30%;" class="img-circle"><br>
			      	<h3><?=$item['username']?></h3>
			      	with
			      	<h3><?=number_format($item['score'])?> points!</h3>
			      	<?php
			      	$high = $item['score'];
			      	$item = mysqli_fetch_array($stuff);
			      	?>
			      	followed by <b><?=$item['username']?></b>, at <?=$high-$item['score']?> points away
		      	</center>
	    	</div>
         <div class="well">
            <?php include("scores.php"); ?>
         </div>
      </div>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>
			
			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

