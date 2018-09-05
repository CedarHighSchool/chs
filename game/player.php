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
      // OOP is always better!
      $mysqli = new mysqli("localhost", "chscyberweb", $pwwd, "chs");
 		if($mysqli->error){
 			die($mysqli->error);
 		}
 		$stuff = $mysqli->query("SELECT * FROM `game_users` WHERE `id`='".$_GET['id']."'");
 		$item = $stuff->fetch_array();
 		$logins = $mysqli->query("SELECT * FROM `game_logins` WHERE `who`=".$item['id']);
 		$logins = $logins->num_rows;
 		if($item['username'] == $_SESSION['game_username']){
 		   ?>
 		   <script>
 		      window.location.href="/game/";
 		   </script>
 		   <noscript>
 		      This is you.
 		   </noscript>
 		   <?php
 		}
      ?>
      <div class="span6">
         <div class="well" id="heyy">
            <?php if(!isset($_SESSION['username'])) { ?>
            <h3>
               <img src="https://api.adorable.io/avatars/285/<?=$item['username']?>.png" id="icon_img" style="max-width: 40px; border-radius: 40%;" class="img-circle">
               <?=$item['fname']?>
            </h3>
            <h6>Username: <?=$item['username']?></h6>
            <h6>Score: <?=$item['score']?></h6>
            <h6>Level: <?=$item['level']?></h6>
            <?php }else{ ?>
            <h3>
               <img src="https://api.adorable.io/avatars/285/<?=$item['username']?>.png" id="icon_img" style="max-width: 40px; border-radius: 40%;" class="img-circle">
               <?=$item['fname']?> <?=$item['lname']?> (<?=$item['username']?>)
            </h3>
            <h6>Email: <a href="mailto:<?=$item['email']?>"><?=$item['email']?></a></h6>
            <h6>Score: <?=$item['score']?></h6>
            <h6>ID: <?=$item['number']?></h6>
            <h6>Level: <?=$item['level']?></h6>
            <h6>Logins: <?=$logins?></h6><br>
            <a href="#" class="moreDetails">More Details</a>
              <div class="classDetails" style="display: none;">
               <h5>Codes used:</h5>
               <ul>
                  <?php
                  $uses = $mysqli->query("SELECT * FROM `game_uses` WHERE `user`=".$item['id']);
                  while($use = $uses->fetch_array()){
                     $code = $mysqli->query("SELECT * FROM `game_codes` WHERE `id`=".$use['code']);
                     $code = $code->fetch_array();
                  ?>
                  <li><?=$code['code']?></li>
                  <?php } ?>
               </ul><br>
               <h5>Hints done:</h5>
               <ul>
                  <?php
                  $uses = $mysqli->query("SELECT * FROM `game_hint_done` WHERE `who`=".$item['id']);
                  while($use = $uses->fetch_array()){
                     $code = $mysqli->query("SELECT * FROM `game_hints` WHERE `id`=".$use['hint']);
                     $code = $code->fetch_array();
                  ?>
                  <li><?=$code['text']?></li>
                  <?php } ?>
               </ul>
            </div>
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

