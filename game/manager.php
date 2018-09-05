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
      <div class="span9">
         <div class="well">
            <script>
               $(document).ready(function() {
                  $('#code_input').keyup(function(e){
                     if(e.keyCode == 13) {
                        $.post( "admincode.php", { code: $("#code_input").val() })
                          .done(function( data ) {
                            $("#code_output").html(data);
                          });
                     }
                  });
                  $(".moreDetails").click(function(e) {
	                    $(this).next(".classDetails").slideToggle('fast');
	                    e.preventDefault();
	                });
               });
            </script>
            <h4>Code tester:</h4>
            <p id="code_output"></p>
            <input type="text" class="input-block-level" placeholder="Enter a code" id="code_input">
         </div>
      </div>
      <style>
         #heyy h6 {
            color: black;
         }
      </style>
      <?php
			$mysqli = new mysqli("localhost", "chscyberweb", $pwwd, "chs");
	 		if($mysqli->error){
	 			echo $mysqli->error;
	 		}
	 		$stuff = $mysqli->query("SELECT * FROM `game_users` WHERE `username`='".$_SESSION['game_username']."'");
	 		$item = $stuff->fetch_array();
      ?>
      <div class="span6">
         <?php
	      	if($mysqli->error){
	      		echo $mysqli->error;
	      	}
	      	$lvl = $mysqli->query("SELECT `level` FROM `game_users` WHERE `username`='".$_SESSION['game_username']."'");
	      	$lvl = $lvl->fetch_array()['level'];
	      	
	      	$stuff = $mysqli->query("SELECT * FROM `game_hints` WHERE `level`<=$lvl ORDER BY `level` DESC");
	      	if($stuff->num_rows <= 0){
	      	   ?>
	      	   <div class="well">
	      	      <center>
	      	         Oops! There was an error!
	      	      </center>
	      	   </div>
	      	   <?php
	      	}
	      	
	      	while($hint = $stuff->fetch_array()){
	   				?>
	   				<div class="well"><center>
		   				<?=nl2br($hint['text'])?>
		   				</center>
		   				<a href="#" class="moreDetails">More Details</a>
              <div class="classDetails" style="display: none;">
                  <p>
                  	<?php
                  	$uses = $mysqli->query("SELECT * FROM `game_uses` WHERE `code`=".$hint['code']);
                  	$usesNum = $uses->num_rows;
                  	?>
                  	Used <?=$usesNum?> time(s):
                  	<ol>
                  		<?php
                  		while($user = $uses->fetch_array()){
                  			$person = $mysqli->query("SELECT * FROM `game_users` WHERE `id`=".$user['user']);
                  			$person = $person->fetch_array();
	                  		?>
	                  		<li><a href="player.php?id=<?=$person['id']?>"><?=$person['username']?></a></li>
	                  		<?php
                  		}
                  		?>
                  	</ol>
                  </p>
              </div>
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

