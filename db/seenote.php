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
      $manage->require_perm("notes");
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
            <h1>Note</h1>
         </div>
      </div>

			<div class="span6">
				<div class="well">
    				<?php
    				$stuff = $mysqli->query("SELECT * FROM `notes` WHERE `id`=".$_GET['id']);
    				$item = $stuff->fetch_array();
    				$userone = $mysqli->query("SELECT * FROM `users` WHERE `id`=".$item['user']);
 					$userone = $userone->fetch_array()['username'];
    				?>
    					<a href="editnote.php?id=<?=$item['id']?>" class="btn btn-default pull-right">Edit</a>
    					<h4><?=$item['title']?></h4>
    					<b>By</b>: <?=$userone?><br>
    					<b>Note content:</b><br>
    					<p><?=nl2br($item['content'])?></p><br>
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
            <?php include("mininotes.php"); ?>
         </div>
      </div>
      <?php include("assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

