<?php
session_start();
if(!isset($_SESSION['game_username'])){ 
   header("Location: /game/login.php");
}
?>
<?php $thisPage="clubs"; ?>

<!DOCTYPE html>

<html lang="en">
   
   <head>
      
      <title>Cedar High School</title>
      
      <?php include("../assets/inc/headtag.php"); 
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
      </div><?php if($guser['enabled']==0){die("Your account is disabled. Go see Mr. Swallow for help if you think this is in error.");} ?>
      <style>
         #heyy h6 {
            color: black;
         }
      </style>
      <?php
	 		$stuff = $mysqli->query("SELECT * FROM `game_codes` WHERE `id`='".$_GET['id']."'");
	 		$item = $stuff->fetch_array();
	 		
	 		$hint = $mysqli->query("SELECT * FROM `game_hints` WHERE `code`=".$item['id']);
	 		$hint = $hint->fetch_array()['id'];
	 		$uses = $mysqli->query("SELECT * FROM `game_uses` WHERE `code`=".$item['id']);
      ?>
      <div class="span6">
         <div class="well" id="heyy">
            <h2><?=$item['code']?></h2>
            <p>Used <?=$uses->num_rows?> times</p>
            <p>
            	<ol>
            		<?php
            	  while($use = $uses->fetch_array()) {
            	  	$player = $mysqli->query("SELECT * FROM `game_users` WHERE `id`=".$use['user']);
            	  	$player = $player->fetch_array();
            		?>
            		<li><a href="player.php?id=<?=$player['id']?>" title="<?=$player['fname']?> <?=$player['lname']?>"><?=$player['username']?></a><span class="pull-right"><?=date("l, jS \of F Y @ h:i:s A",$use['when'])?></span></li>
            		<?php
            	  }
            	  ?>
            	</ol>
            </p>
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

