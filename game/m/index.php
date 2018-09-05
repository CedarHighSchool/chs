<?php session_start(); if(!isset($_SESSION['game_username'])){header("Location: about.php");} include("top.php"); ?>

<div data-role="page">

	<div data-role="header">
	   <a href="scores.php">Scoreboard</a>
		<h1>CHS Hunt</h1>
		<?php if(!isset($_SESSION['game_username'])) { ?>
		<a href="login.php" class="ui-btn-right">Log In</a>
		<?php }else{ ?>
		<a href="profile.php" class="ui-btn-right"><?=$_SESSION['game_username']?></a>
		<?php } ?>
	</div>

	<div data-role="content">	
		<div class="well">
		  <script>
		     $(document).ready(function() {
		        $('#code_input').keyup(function(e){
		           if(e.keyCode == 13) {
		              $.post( "../testcode.php", { code: $("#code_input").val() })
		                .done(function( data ) {
		                  $("#code_output").html(data);
		                });
		           }
		        });
		     });
		  </script>
		  <h4>Enter your codes:</h4>
		  <p id="code_output"></p>
		  <input type="text" class="input-block-level" placeholder="Enter a code" id="code_input">
		</div>
		<?php
			$mysqli = new mysqli("localhost", "chscyberweb", $pwwd, "chs");
      function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
          $url = 'https://www.gravatar.com/avatar/';
          $url .= md5( strtolower( trim( $email ) ) );
          $url .= "?s=$s&d=$d&r=$r";
          if ( $img ) {
              $url = '<img src="' . $url . '"';
              foreach ( $atts as $key => $val )
                  $url .= ' ' . $key . '="' . $val . '"';
              $url .= ' />';
          }
          return $url;
      }
 		if($mysqli->error){
 			echo $mysqli->error;
 		}
 		$stuff = $mysqli->query("SELECT * FROM `game_users` WHERE `username`='".$_SESSION['game_username']."'");
 		$item = $stuff->fetch_array();
      ?>
      <div class="span6">
         <div id="heyy">
            <h3>
               <img src="https://api.adorable.io/avatars/285/<?=$_SESSION['game_username']?>.png" id="icon_img" style="max-width: 40px; border-radius: 40%;" class="img-circle">
               <?=$item['fname']?> <?=$item['lname']?>
            </h3>
            <p>Email: <?=$item['email']?></p>
            <p>Score: <?=$item['score']?></p>
            <p>ID: <?=$item['number']?></p>
            <p>Level: <?=$item['level']?></p>
            <br>
            <h4>Remember:<br>
            All clues can be found in Cedar High School (the building), or on the website<br>
            You MUST be logged in in order to see any of the easter eggs on the website</h4>
             <h4><br>
         <a href="https://goo.gl/forms/hBwMfHGTwFnZimbg2">1 question survey, please fill it out!</a></h4>
         </div><!--well-->
         <ul data-role="listview">
         <?php
      	if($mysqli->error){
      		echo $mysqli->error;
      	}
      	$lvl = $mysqli->query("SELECT `level` FROM `game_users` WHERE `username`='".$_SESSION['game_username']."'");
      	$lvl = $lvl->fetch_array()['level'];
      	
      	$stuff = $mysqli->query("SELECT * FROM `game_hints` WHERE `level`<=$lvl AND `after`<$nnm ORDER BY `level` DESC");
      	if($stuff->num_rows <= 0){
      	   ?>
      	   <div class="well">
      	      <center>
      	         You've done all you can! Come back later for more hints.
      	      </center>
      	   </div>
      	   <?php
      	}
      	while($hint = $stuff->fetch_array()){
      		$done = $mysqli->query("SELECT * FROM `game_hint_done` WHERE `hint`=".$hint['id']." AND `who`=".$item['id']);
      		if($done->num_rows > 0){
      		   // This task is done
      		}else{
   				?>
   				<li><center>
   				<?=nl2br($hint['text'])?>
   				</center></li>
   				<?php
      		}
      	}
      	
      	$stuff = $mysqli->query("SELECT * FROM `game_hints` WHERE `level`<=$lvl ORDER BY `level` DESC");
      	while($hint = $stuff->fetch_array()){
      		$done = $mysqli->query("SELECT * FROM `game_hint_done` WHERE `hint`=".$hint['id']." AND `who`=".$item['id']);
      		if($done->num_rows > 0){
   				?>
   				<li style="opacity: 0.6;"><s><center>
   				<?=nl2br($hint['text'])?>
   				</center></s></li>
   				<?php
      		}else{
      		   // This task isn't done
      		}
      	}
      	?>
      </ul><!--span3-->
	</div>
	
</div>

</body>
</html>