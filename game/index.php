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
      <div class="span9">
         <div class="well">
            <?php if($guser['enabled']==0){die("Your account is disabled. Go see Mr. Swallow for help if you think this is in error.");} ?>
            <script>
               $(document).ready(function() {
                  $('#code_input').keyup(function(e){
                     if(e.keyCode == 13) {
                        $("#code_output").html("Checking...");
                        $.post( "testcode.php", { code: $("#code_input").val() })
                          .done(function( data ) {
                            $("#code_output").html(data);
                          });
                     }
                  });
               });
            </script>
            <p class="visible-phone">Wanna try our mobile version? Click <a href="/game/m/">here</a>!</p>
            <p>You can make suggestions <a href="/game/suggest.php">here</a>.</p>
            <h4>Enter your codes:</h4>
            <p id="code_output"></p>
            <input type="text" class="input-block-level" placeholder="Enter a code" id="code_input" autofocus>
         </div>
      </div>
      <style>
         #heyy h6 {
            color: black;
         }
      </style>
      <?php
 		$stuff = $mysqli->query("SELECT * FROM `game_users` WHERE `username`='".$_SESSION['game_username']."'");
 		$item = $stuff->fetch_array();
      ?>
      <div class="span6">
         <div class="well" id="heyy">
            <h3>
               <img src="https://api.adorable.io/avatars/285/<?=$item['username']?>.png" id="icon_img" style="max-width: 40px; border-radius: 40%;" class="img-circle">
               <?=$item['fname']?> <?=$item['lname']?> (<?=$item['username']?>)
            </h3>
            <h6>Email: <?=$item['email']?></h6>
            <h6>Score: <?=$item['score']?></h6>
            <h6>ID: <?=$item['number']?></h6>
            <h6>Level: <?=$item['level']?></h6>
            <br>
            <h4>Remember:<br>
            All clues can be found in Cedar High School (or somewhere on campus), or somewhere on the website.<br>
            You MUST be logged in in order to see any of the easter eggs on the website</h4>
            <br>
          <a href="https://goo.gl/forms/hBwMfHGTwFnZimbg2">1 question survey, please fill it out!</a></h4>
         
         
         </div><!--well-->
         <?php
         	if($mysqli->error){
         		echo $mysqli->error;
         	}
         	$lvl = $mysqli->query("SELECT `level` FROM `game_users` WHERE `username`='".$_SESSION['game_username']."'");
         	$lvl = $lvl->fetch_array()['level'];
         	$nnm = time();
         	$stuff = $mysqli->query("SELECT * FROM `game_hints` WHERE `level`<=$lvl AND `after`<$nnm ORDER BY `level` DESC");
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
         		$done = $mysqli->query("SELECT * FROM `game_hint_done` WHERE `hint`=".$hint['id']." AND `who`=".$item['id']);
         		$count = $mysqli->query("SELECT * FROM `game_hint_done` WHERE `hint`=".$hint['id']."");
         		if($done->num_rows > 0){
         		   // This task is done
         		}else{
	      			$hints = true;
      				?>
      				<div class="well"><center>
      				<h3><?=$hint['title']?></h3>
      				<?=nl2br($hint['text'])?>
      				</center><span style="position:absolute;opacity:0.5;"><?=$count->num_rows?> completed</span></div>
      				<?php
         		}
         	}
   	      	
         	if($hints == false){
         		?>
   					<div class="well">
   						<center>
   							You've done all you can! Come back later for more hints.
   						</center>
   					</div>
         		<?php
         	}
         	
         	$stuff = $mysqli->query("SELECT * FROM `game_hints` WHERE `level`<=$lvl ORDER BY `level` DESC");
         	while($hint = $stuff->fetch_array()){
         		$done = $mysqli->query("SELECT * FROM `game_hint_done` WHERE `hint`=".$hint['id']." AND `who`=".$item['id']);
         		$count = $mysqli->query("SELECT * FROM `game_hint_done` WHERE `hint`=".$hint['id']."");
         		if($done->num_rows > 0){
      				?>
      				<div class="well muted" style="opacity: 0.7;"><s><center>
      				<h3><?=$hint['title']?></h3>
      				<?=nl2br($hint['text'])?>
      				</center></s><span style="position:absolute;opacity:0.5;"><?=$count->num_rows?> completed</span></div>
      				<?php
         		}else{
         		   // This task isn't done
         		}
         	}
      	?>
      </div><!--span3-->
      <div class="span3">
         <div class="well">
            <?php include("options.php"); ?>
         </div>
      </div>
      <div class="span3">
         <div class="well">
            <h4>Hunt ends in</h4>
            <h3 id="demo"></h3>
            <script>
            // Set the date we're counting down to
            var countDownDate = new Date("April 20, 2018 15:00:00").getTime();
            
            // Update the count down every 1 second
            var x = setInterval(function() {
            
              // Get todays date and time
              var now = new Date().getTime();
            
              // Find the distance between now an the count down date
              var distance = countDownDate - now;
            
              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
              // Display the result in the element with id="demo"
              document.getElementById("demo").innerHTML = days + "d " + hours + "h "
              + minutes + "m " + seconds + "s ";
            
              // If the count down is finished, write some text 
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
              }
            }, 1000);
            </script>
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

