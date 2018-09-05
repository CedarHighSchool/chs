<?php session_start(); if(!isset($_SESSION['game_username'])){header("Location: about.php");} include("top.php"); ?>

<div data-role="page">

	<div data-role="header">
		<a href="index.php">Home</a>
		<h1>Scoreboard</h1>
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
      <script>
      	$(function() {
      		function reload() {
      			$.get( "../scores.php", function( data ) {
						  $("#hoo").html(data);
						});
      		}
      		setInterval(reload, 5000);
      	})
      </script>
					<div id="hoo">
					<?php include("../scores.php"); ?>
					</div><!--span3-->
	
</div>

</body>
</html>