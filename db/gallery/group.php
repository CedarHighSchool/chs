<?php $thisPage="gallery"; $yearStart= $_GET['yearStart']?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High Schools</title>

    	<?php include("../../assets/inc/headtag.php") ?>

  	</head>

  	<body>

		<?php include("../../assets/inc/navbar.php") ?>


    	<!-- Let the container begin! -->

		<div class="container">

			<div class="row">
				<?php 
				$yearR = mysqli_stmt_init($mysqli);
				mysqli_stmt_prepare($yearR, "SELECT * FROM photoYears where yearstart = ?");
				mysqli_stmt_bind_param($yearR, "i", $yearStart);
				mysqli_stmt_execute($yearR);
				$yearR = mysqli_stmt_get_result($yearR);
				$year = $yearR->fetch_array();
				$quarterResults = mysqli_stmt_init($mysqli);
				mysqli_stmt_prepare($quarterResults, "SELECT * FROM `photoGroups` where `yearId` = ? and `id` = ?");
				mysqli_stmt_bind_param($quarterResults, "ii", $year['id'], $_GET['group']);
				mysqli_stmt_execute($quarterResults);
				$quarterResults = mysqli_stmt_get_result($quarterResults);
				$quarter = $quarterResults->fetch_array();
				?>
				<?php include("../../assets/inc/navlist.php") ?>
				<div class="span9 rel">
					<div class="well">
						<h3><?=$quarter['name']?></h3>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="quarters.php?yearStart=<?=$yearStart?>" class="btn btn-default pull-right absTR">Close</a><?php } ?>
					</div>
				</div>
		    		<div class="span9">
		    			<div class="well">
		    				<?=$quarter['quarter']?>
		    				<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="photos.php?yearStart=<?=$yearStart?>&group=<?=$quarter["id"]?>" class="btn btn-default pull-right absTR">Add Photo</a><?php } ?>
		    			</div>
		    		</div>
		    		<div class="span9">
					<div class="well">
		    		<?php
				$photoResults = mysqli_stmt_init($mysqli);
					mysqli_stmt_prepare($photoResults, "SELECT * FROM `photoAll` where `yearId` = ? and `group` = ?");
					mysqli_stmt_bind_param($photoResults, "ii", $year['id'], $_GET['group']);
					mysqli_stmt_execute($photoResults);
					$photoResults = mysqli_stmt_get_result($photoResults);
					while($photoResult = mysqli_fetch_assoc($photoResults)){
						$photos[] = $photoResult;
					} 
					foreach($photos as $photo){
					?>
						<img src="<?=$photo["photoUrl"]?>" width="210px" height="140px">
				<?php }?>
				</div>
				</div>
				
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

