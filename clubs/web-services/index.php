<?php $thisPage="clubs"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../../assets/inc/headtag.php") ?>

  	</head>

  	<body>

		<?php include("../../assets/inc/navbar.php") ?>

		

    	<!-- Let the container begin! -->

		<div class="container">

			<div class="row">

				

				<?php include("../../assets/inc/navlist.php") ?>

			
				<?=area("cybercoreClubTop")?>
				
						<?php if($GAME_UP == true) { ?>
			    	<div class="well">

			      		<h4>Hunt High Score</h4>
			      		<?php
					      $link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs");
						 		if(!$link){
						 			echo mysqli_error($link);
						 		}
						 		$stuff = mysqli_query($link, "SELECT * FROM `game_users` WHERE `hidden`=0 ORDER BY `score` DESC, `level` DESC");
						 		$item = mysqli_fetch_array($stuff);
					      ?>
					      <center>
					      	<img src="https://api.adorable.io/avatars/285/<?=$item['username']?>.png" id="icon_img" style="max-width: 150px; border-radius: 30%;" class="img-circle">
					      	<h3><?=$item['username']?></h3>
				      	</center>

			    	</div>
			    	<?php } ?>

				<?=area("cybercoreClubBottom")?>
				

			</div><!--/row-->

	       

      		<?php include("../../assets/inc/footer.php") ?>



    	</div> <!-- /container -->



    	<!-- Yummy JavaScrips

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="/assets/js/jquery.js"></script>

    	<script src="/assets/js/bootstrap.js"></script>



  	</body>

</html>

