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
      $manage->require_perm("messages");
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
	      <div class="span9">
	         <div class="well">
	            <h1><i class="fa fa-edit"></i> Compose Message</h1>
	         </div>
	      </div>
			<div class="span6">
				<div class="well">
					<?php
					if(isset($_POST['to'])){
						$message = $_POST['message'];
						$subject = $_POST['subject'];
						$from = $cuser['id'];
						$to = $_POST['to'];
						$when = time();
						
						$res = $mysqli->query("INSERT INTO `msg` (`from`, `to`, `subject`, `message`, `when`) VALUES ($from, $to, '$subject', '$message', $when)");
						
						$manage->activity("Sent message", "message", $mysqli->insert_id);
						echo "<div class=\"alert alert-success\">Message sent!</div>";
					}
					?>
					<form action="" method="post">
						<label for="to">To</label>
						<select name="to" id="to">
						<?php
			      	$res = $mysqli->query("SELECT * FROM `users` WHERE `messages`=1");
			      	while($usr = $res->fetch_array()) {
			      	?>
			      		<option value="<?=$usr['id']?>"<?=($usr['id']==$_GET['who'])?" selected":""?>><?=$usr['fname']?> <?=$usr['lname']?></option>
			      	<?php
			      	}
			      	?>
						</select><br>
						<label for="subject">Subject</label><input type="text" id="subject" name="subject" style="width:100%;"><br>
						<label for="message">Body <b class="infoer" title="No HTML, plaintext only!"></b></label><textarea id="message" name="message" style="width:100%;max-width:100%;height: 200px;"></textarea><br>
						<button type="submit" class="btn btn-default"><i class="fa fa-paper-plane"></i> Send</button>
					</form>
				</div><!--well-->

			</div><!--span3-->
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
      </style></div>
      <?php include("../assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

