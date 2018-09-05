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

      <?php include("../../assets/inc/headtag.php");
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

      <?php include("../../assets/inc/navbar.php") ?>


      <style type="text/css">
      a.thumbnail { height: 205px; }
      </style>

      <!-- Let the container begin! -->

      <div class="container">

      <div class="row">



      <?php include("../../assets/inc/navlist.php") ?>
			<?php mustLogIn(); ?>
			<?php
			$res = $mysqli->query("SELECT * FROM `knowledge` WHERE `id`=".$_GET['id']);
			$t = $res->fetch_array();
			?>
      <div class="span9">
         <div class="well">
            <h1><?=$t['title']?></h1>
         </div>
      </div>

			<div class="span6">
				<div class="well">
					<p><?=$t['content']?></p>
					<?php
					if($t['image'] != "") {
						?>
						<br><img src="/db/kb/img/<?=$t['image']?>.png">
						<?php
					}
					?>
				</div><!--well-->
				<?php include("bottom.php"); ?>
			</div><!--span3-->
			
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
      </style>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

