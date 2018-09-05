<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['username'])){
	header("location: /db/login.php");
}
?>
<?php $thisPage="clubs";
?>

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
      </style>

      <!-- Let the container begin! -->

      <div class="container">

      <div class="row">



      <?php include("../assets/inc/navlist.php") ?>

      <div class="span9">
         <div class="well">
            <h1>Message</h1>
         </div>
      </div>

			<div class="span6">
				<div class="well">
    				<?php
    				$stuff = $mysqli->query("SELECT * FROM `msg` WHERE `id`=".$_GET['id']);
    				$item = $stuff->fetch_array();
    				
    				if($item['to'] == $cuser['id']){
    					$res = $mysqli->query("UPDATE `msg` SET `read`=1 WHERE `id`=".$_GET['id']);
    				}
    				?>
    					<h4><?=$item['subject']?></h4>
    					<b>From</b>: <?=him($item['from'],"fullname")?><br>
    					<?php
    					if($item['to'] != $cuser['id']) {
    					?>
    					<b>To</b>: <?=him($item['to'],"fullname")?><br>
    					<?php
    					}
    					?>
    					<br>
    					<p><?=nl2br($item['message'])?></p><br><br>
    					<a href="/db/compose.php?who=<?=$item['from']?>" class="btn btn-default">Send a Message</a>
    				<?php
						
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
      <div class="span3">
         <div class="well">
            <?php include("minimsg.php"); ?>
         </div>
      </div>
      <?php include("assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

