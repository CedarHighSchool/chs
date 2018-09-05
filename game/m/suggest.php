<?php session_start(); if(!isset($_SESSION['game_username'])){header("Location: about.php");} include("top.php"); ?>

<div data-role="page">

	<div data-role="header">
	   <a href="index.php">Home</a>
		<h1>Suggestion</h1>
		<?php if(!isset($_SESSION['game_username'])) { ?>
		<a href="login.php" class="ui-btn-right">Log In</a>
		<?php }else{ ?>
		<a href="profile.php" class="ui-btn-right"><?=$_SESSION['game_username']?></a>
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
			You need to log in to your game profile to submit a suggestion.
			<?php } ?>
	
</div>

</body>
</html>