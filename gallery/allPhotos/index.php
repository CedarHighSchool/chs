<?php $thisPage="gallery"; $yearStart=$_GET['yearStart']; if($yearStart == ""){$yearStart = "2018"; /*this is setting the year at begining so change it at begining of school year*/}?>

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
				?>
				<?php include("../../assets/inc/navlist.php") ?>
				<div class="span9 rel">
					<div class="well">
						<h3>Photos <?=$year['yearstart']?>-<?=$year['yearend']?></h3>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="../../db/gallery/quarters.php?yearStart=2018" class="btn btn-default pull-right absTR">Edit</a><?php } ?>
					</div>
				</div>
				
				
				<div class="row span9">
					<div class="row-fluid">
						<div class="row span8" style="margin-top: 0;">
							<div class="well">
								<h3>Quarter <?=$year['yearstart']?>-<?=$year['yearend']?></h3>
							</div>
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
										<a href="/gallery/allPhotos/quarter.php?yearStart=<?=$yearStart?>&quarter=<?=$quarter["id"]?>" class="thumbnail">
											<?php if($quarter['photoUrl'] == ""){?>
												<img src="../../../assets/img/logo.png" alt="" width="160" height="200">
											<?php }else{?>
												<img src="<?=$quarter['photoUrl']?>" alt="" width="160" height="200">
											<?php }?>
											<div class="imglabel">Quarter <?=$quarter['quarter']?></div>
										</a>
									</li>
								<?php }?>
							</ul>
							<div class="well">
								<h3>Groups <?=$year['yearstart']?>-<?=$year['yearend']?></h3>
							</div>
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
										<a href="/gallery/allPhotos/group.php?yearStart=<?=$yearStart?>&group=<?=$group["id"]?>" class="thumbnail">
											<?php if($group['thumb'] == ""){?>
												<img src="../../../assets/img/logo.png" alt="" width="160" height="200">
											<?php }else{?>
												<img src="<?=$group['thumb']?>" alt="" width="160px" height="200px">
											<?php }?>
											<div class="imglabel"><?=$group['name']?></div>
										</a>
									</li>
								<?php }?>
							</ul>
						</div>
						<div class="span4">
							<div class="well">
								<h5>Choose a year</h5>
								<ul class="nav nav-list">
									<li><a href="/gallery/index.php?passyear=16-17">2016-2017</a></li>
									<li><a href="/gallery/index.php?passyear=15-16">2015-2016</a></li>
									<li><a href="/gallery/index.php?passyear=14-15">2014-2015</a></li>
									<li><a href="/gallery/index.php?passyear=13-14">2013-2014</a></li>
									<li><a href="/gallery/index.php?passyear=12-13">2012-2013</a></li>
									<?php 
									$qyearsResults = mysqli_stmt_init($mysqli);
									mysqli_stmt_prepare($qyearsResults, "SELECT * FROM photoYears");
									mysqli_stmt_execute($qyearsResults);
									$qyearsResults = mysqli_stmt_get_result($qyearsResults);
									while($qyearsResult = mysqli_fetch_assoc($qyearsResults)){
										$years[] = $qyearsResult;
									} foreach ($years as $year){?>
										<li class="<?php if($yearStart == $year['yearstart']){echo "active";}?>"><a href="/gallery/allPhotos/index.php?yearStart=<?=$year['yearstart']?>"><?=$year['yearstart']?>-<?=$year['yearend']?></a></li>
									<?php }?>
								</ul>
							</div>
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

