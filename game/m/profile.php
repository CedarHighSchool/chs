<?php session_start(); if(!isset($_SESSION['game_username'])){header("Location: about.php");} include("top.php"); ?>

<div data-role="page">

	<div data-role="header">
	   <a href="scores.php">Scoreboard</a>
		<h1>My Profile</h1>
		<?php if(!isset($_SESSION['game_username'])) { ?>
		<a href="login.php" class="ui-btn-right">Log In</a>
		<?php }else{ ?>
		<a href="index.php" class="ui-btn-right">Home</a>
		<?php } ?>
	</div>

	<div data-role="content">	
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
            <a href="suggest.php" data-role="button" data-theme="a">Suggest Something</a>
            <a href="logout.php" data-role="button" data-theme="a">Log Out</a>
         </div><!--well-->
	</div>
	
</div>

</body>
</html>