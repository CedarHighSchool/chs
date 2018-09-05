<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['username'])){
	header("location: /db/login.php");
}
?>
<?php $thisPage="notes"; ?>

<!DOCTYPE html>

<html lang="en">

   <head>

      <title>Cedar High School</title>

      <?php include("../assets/inc/headtag.php");
      if(!isset($_SESSION['username'])){
      	header("location: /db/login.php");
      }
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
      .infoer::before {
      	font-family: FontAwesome;
      	content: "\f05a";
      	margin-left: 5px;
      	cursor: help;
      	font-weight: normal;
      }
      </style>

      <!-- Let the container begin! -->

      <div class="container">

      <div class="row">

      	<?php include("../assets/inc/navlist.php") ?>
			<?php mustLogIn(); ?>
	      <div class="span9">
	         <div class="well">
	            <h1><i class="fa fa-bullhorn"></i> Hunt Emailer</h1>
	         </div>
	      </div>
			<div class="span6">
				<div class="well">
					<?php
					if($cuser['announcer'] == 1){
					if(isset($_POST['users'])){
						$message = $_POST['message']."\n\nCheck out the Hunt here: http://chs.ironk12.org/game/";
						$subject = $_POST['subject'];
						foreach($_POST['users'] as $one){
							$test = mail($one,$subject,$message,"From: Cedar High Hunt <hunt@chs.ironk12.org>\nReply-To: ".$cuser['email']."");
							if(!$test){
								die("<div class=\"alert alert-danger\">Mail failed at ($one)</div>");
							}
						}
						echo "<div class=\"alert alert-success\">Sent email to ".sizeof($_POST['users'])." user(s)</div>";
					}
					?>
					<script>
						$(function() {
							$("#all").click(function() {
								$('#users option').prop('selected', true);
								return false;
							});
							$("#none").click(function() {
								$('#users option').prop('selected', false);
								return false;
							});
							$("#searcher").on("keyup",function() {
							    // Declare variables
							    var $input = $("#searcher");
							    
							    $.each($("#users option"), function() {
							    	var val = $(this).text().toUpperCase();
							    	var search = $input.val().toUpperCase();
							    	if(val.indexOf(search) > -1){
							    		$(this).show();
							    	}else{
							    		$(this).hide();
							    	}
							    });
							});
						});
					</script>
					<form action="" method="post">
						<button id="all" class="btn btn-default btn-mini">all</button><button id="none" class="btn btn-default btn-mini">none</button><b class="infoer" title="Use CTRL to select multiple"></b><br>
						<input type="text" class="input-medium search-query" id="searcher"><br>
						<select name="users[]" id="users" multiple>
						<?php
			      	$res = $mysqli->query("SELECT * FROM `game_users`");
			      	while($usr = $res->fetch_array()) {
			      	?>
			      		<option value="<?=$usr['email']?>"><?=$usr['fname']?> <?=$usr['lname']?></option>
			      	<?php
			      	}
			      	?>
						</select><br>
						<label for="subject">Subject</label><input type="text" id="subject" name="subject"><br>
						<label for="message">Body <b class="infoer" title="No HTML, plaintext only!"></b></label><textarea id="message" name="message"></textarea><br>
						<button type="submit" class="btn btn-default"><i class="fa fa-paper-plane"></i> Send</button>
					</form>
					<?php
					}else{
					?>
					Sorry, you cannot send announcements.
					<?php
					}
					?>
				</div><!--well-->

			</div><!--span3-->
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
      </style>
      <?php include("assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

