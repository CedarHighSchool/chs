<?php $thisPage="gallery"; $yearStart= $_GET['yearStart']?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High Schools</title>

    	<?php include("../../assets/inc/headtag.php") ?>
			<style type="text/css">
				
			</style>
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
				?>
				<?php include("../../assets/inc/navlist.php") ?>
				<div class="span9 rel">
					<div class="well">
						<h3>Photos <?=$year['yearstart']?>-<?=$year['yearend']?></h3>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="editPhoto.php?yearStart=<?=$year['yearstart']?>" class="btn btn-default pull-right absTR">Edit Photos</a><?php } ?>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="upload.php?yearStart=<?=$year['yearstart']?>" class="btn btn-default pull-right absTR">Upload Photo</a><?php } ?>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="/gallery/allPhotos" class="btn btn-default pull-right absTR">Close</a><?php } ?>
					</div>
				</div>
				
				
				<div class="row span9">
					<div class="row-fluid">
						<div class="row span8" style="margin-top: 0;">
							<ul class="thumbnails" style="text-align:center;">
								<?php 
								$quarterResults = mysqli_stmt_init($mysqli);
								mysqli_stmt_prepare($quarterResults, "SELECT * FROM photoQuarters where yearId = ?");
								mysqli_stmt_bind_param($quarterResults, "i", $year['id']);
								mysqli_stmt_execute($quarterResults);
								$quarterResults = mysqli_stmt_get_result($quarterResults);
								while($quarterResult = mysqli_fetch_assoc($quarterResults)){
									$quarters[] = $quarterResult;
								} foreach ($quarters as $quarter){?>
									<li class="span2">
										<a href="quarter.php?yearStart=<?=$yearStart?>&quarter=<?=$quarter["quarter"]?>" class="thumbnail">
											<img src="<?=$quarter['photoUrl']?>" alt="" width="160px" height="200px">
											<div class="imglabel">Quarter <?=$quarter['quarter']?></div>
										</a>
									</li>
								<?php }?>
							</ul>
							<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="editQuarter.php?yearStart=<?=$year['yearstart']?>" class="btn btn-default pull-right absTR">Edit Quarters</a><?php } ?>
						</div>
						<div class="span4">
							<div class="well">
								<ul class="nav nav-list">
								<?php 
								$yearR = mysqli_stmt_init($mysqli);
								mysqli_stmt_prepare($yearR, "SELECT * FROM photoYears");
								mysqli_stmt_execute($yearR);
								$yearR = mysqli_stmt_get_result($yearR);
								while($yearRs = mysqli_fetch_assoc($yearR)){
									$years[] = $yearRs;
								} 
								foreach ($years as $yearsItem){?>
									<li class="<?php if($yearStart == $yearsItem["yearstart"]){echo "active";}?>"><a href="quarters.php?yearStart=<?php echo $yearsItem["yearstart"];?>">Photos <?=$yearsItem["yearstart"]?>-<?=$yearsItem["yearend"]?></a></li>
								<?php }?>
								</ul>
							</div>
						</div>
						<div class="span8 rel">
							<div class="well">
								<h3>Groups <?=$year['yearstart']?>-<?=$year['yearend']?></h3>
							</div>
						</div>
						<div class="row span8" style="margin-top: 0;">
							<ul class="thumbnails" style="text-align:center;">
								<?php 
								$groupResults = mysqli_stmt_init($mysqli);
								mysqli_stmt_prepare($groupResults, "SELECT * FROM photoGroups where yearId = ?");
								mysqli_stmt_bind_param($groupResults, "i", $year['id']);
								mysqli_stmt_execute($groupResults);
								$groupResults = mysqli_stmt_get_result($groupResults);
								while($groupResult = mysqli_fetch_assoc($groupResults)){
									$groups[] = $groupResult;
								} foreach ($groups as $group){?>
									<li class="span2">
										<a href="group.php?yearStart=<?=$yearStart?>&group=<?=$group["id"]?>" class="thumbnail">
											<img src="<?=$group['thumb']?>" alt="" width="160px" height="200px">
											<div class="imglabel"><?=$group['name']?></div>
										</a>
									</li>
								<?php }?>
							</ul>
							<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="editGroups.php?yearStart=<?=$year['yearstart']?>" class="btn btn-default pull-right absTR">Edit Groups</a><?php } ?>
						</div>
						
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

