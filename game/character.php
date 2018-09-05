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
            <h1>Your Pet</h1>
         </div>
      </div>
      <div class="span9">
         <div class="well">
            <?php if($guser['enabled']==0){die("Your account is disabled. Go see Mr. Swallow for help if you think this is in error.");} ?>
            If you want to risk some points to go against other players, you'll need a pet. You have a limited amount of points to spend on attributes for it, so choose wisely!
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
         <div class="well" id="heyy">
         	<script>
         		$(function() {
         			var total = 20; // Max points
         			var good = false;
         			$("#total").text(total);
         			$(".attr .plus").click(function() {
         				$("#info").text("");
         				good = false;
         				$("#done").removeClass("btn-success");
         				$number = $("#"+$(this).parent().attr("id")+" .number");
         				$number.text(+($number.text())+1);
         				$("#total").text(+($("#total").text())-1);
         				if(+($("#total").text()) < 0){
         					$("#total").css("color","red");
         				}else{
         					$("#total").css("color","black");
         				}
         			});
         			$(".attr .minus").click(function() {
         				$("#info").text("");
         				good = false;
         				$("#done").removeClass("btn-success");
         				$number = $("#"+$(this).parent().attr("id")+" .number");
         				if(+($number.text()) <= 0){
         					// Minimum
         				}else{
         					$number.text(Math.abs(+($number.text())-1));
         					$("#total").text(+($("#total").text())+1);
         				}
         				if(+($("#total").text()) < 0){
         					$("#total").css("color","red");
         				}else{
         					$("#total").css("color","black");
         				}
         			});
         			$("#check").click(function() {
         				var mytotal = 0;
         				$(".number").each(function() {
         					mytotal += +($(this).text());
         				});
         				if(mytotal > 20) {
         					$("#info").text("You sly dog, you can't use more than 20 points!");
         				}else if(mytotal == 20){
         					$("#info").text("Your pet is good to go! Click done when you are satisfied.");
         					good = true;
         					$("#done").addClass("btn-success");
         				}else{
         					$("#info").text("You still have some points left! You should use them to improve your pet!");
         				}
         			});
         			$("#done").click(function() {
         				if(good){
         					alert("Submit here");
         				}else{
         					$("#info").text("You aren't ready to submit just yet. Be sure to click \"Check\" when you're ready!");
         				}
         			});
         			$("#random").click(function() {
         				$.ajax({
								  url: 'https://randomuser.me/api/',
								  dataType: 'json',
								  success: function(data) {
								    console.log(data.results[0]);
								    var caps = data.results[0].name.first;
						        caps = caps.charAt(0).toUpperCase() + caps.slice(1);
						        this.value = caps;
								    $("#name").val(caps);
								    $("#gender").val(data.results[0].gender);
								    options = $("#race > option")
										options[Math.floor(Math.random() * options.length)].selected = true
								  }
								});
         			});
         		});
         	</script>
         	<style>
         		.attr {
         			margin-right: 10px;
         		}
         	</style>
         		<h4>About Pet</h4>
         		<button id="random" class="btn btn-mini">Randomize</button><br>
         		Name: 
         		<input type="text" id="name" class="input-small"><br>
         		Gender: 
         		<select class="input-small" id="gender">
         			<option value="male">Male</option>
         			<option value="female">Female</option>
         		</select><br>
         		Race: 
         		<select class="input-small" id="race">
         			<option>Rabbit</option>
         			<option>Squirrel</option>
         			<option>Mouse</option>
         			<option>Rat</option>
         			<option>Cat</option>
         			<option>Dog</option>
         			<option>Frog</option>
         			<option>Wolf</option>
         			<option>Elephant</option>
         			<option>Hamster</option>
         			<option>Fish</option>
         			<option>Unicorn</option>
         			<option>Golem</option>
         			<option>Kirabbat</option>
         		</select>
            <h4>Attributes</h4>
            <b>Points left:</b> <span id="total"></span><br><br>
            <span class="attr col-md-5" id="str"><b>Str</b> <button class="btn btn-default btn-mini plus">+</button> <span class="number">0</span> <button class="btn btn-default btn-mini minus">-</button></span>
            <span class="attr col-md-5" id="int"><b>Int</b> <button class="btn btn-default btn-mini plus">+</button> <span class="number">0</span> <button class="btn btn-default btn-mini minus">-</button></span>
            <span class="attr col-md-5" id="cha"><b>Cha</b> <button class="btn btn-default btn-mini plus">+</button> <span class="number">0</span> <button class="btn btn-default btn-mini minus">-</button></span>
            <span class="attr col-md-5" id="dex"><b>Dex</b> <button class="btn btn-default btn-mini plus">+</button> <span class="number">0</span> <button class="btn btn-default btn-mini minus">-</button></span>
            <br><br><button id="check" class="btn btn-default">Check</button>&nbsp;<span id="info"></span><br/>
            <button class="btn btn-default" id="done">Done</button>
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

