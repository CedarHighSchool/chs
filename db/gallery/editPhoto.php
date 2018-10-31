<?php $thisPage="gallery"; $yearStart= $_GET['yearStart']?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High Schools</title>

    	<?php include("../../assets/inc/headtag.php") ?>

  	</head>

  	<body>

		<?php include("../../assets/inc/navbar.php") ?>

		<?php 
			if(isset($_POST["submit"])){
				$_GET['yearStart'] = $_POST['yearStart'];
				$yearStart= $_POST['yearStart'];
				$res = mysqli_stmt_init($mysqli);
				mysqli_stmt_prepare($res, "update `photoAll` SET `group`=?, `quarter`= ? where `id` = ?");
				mysqli_stmt_bind_param($res, "iii", $_POST['group'], $_POST['quarter'], $_POST['id']);
				mysqli_stmt_execute($res);
			}
		?>

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
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="quarters.php?yearStart=<?=$yearStart?>" class="btn btn-default pull-right absTR">Close</a><?php } ?>
					</div>
				</div>
				<?php 
      		$photoResults = mysqli_stmt_init($mysqli);
					mysqli_stmt_prepare($photoResults, "SELECT * FROM photoAll where yearId = ?");
					mysqli_stmt_bind_param($photoResults, "i", $year['id']);
					mysqli_stmt_execute($photoResults);
					$photoResults = mysqli_stmt_get_result($photoResults);
					while($photoResult = mysqli_fetch_assoc($photoResults)){
						$photos[] = $photoResult;
					} 
					foreach ($photos as $photo){
      		?>
		    		<div class="span9">
		    			<div class="well">
		    				Photos <?=$photo['id']?>
		    				<form enctype="multipart/form-data" action="editPhoto.php" method="POST">
									<input type="hidden" name="yearStart" value="<?php echo $yearStart?>">
									<input type="hidden" name="yearId" value="<?php echo $year["id"]?>">
									<input type="hidden" name="id" value="<?php echo $photo["id"]?>">
									<select name="quarter">
										<?php if($photo['quarter'] == ""){?>
											<option value="">Select Quarter to add to</option>
											<option value="1">Quarter 1</option>
											<option value="2">Quarter 2</option>
											<option value="3">Quarter 3</option>
											<option value="4">Quarter 4</option>
											<option value="">None</option>
										<?php }
										elseif($photo['quarter'] == "1"){?>
											<option value="1">Quarter 1</option>
											<option value="2">Quarter 2</option>
											<option value="3">Quarter 3</option>
											<option value="4">Quarter 4</option>
											<option value="">None</option>
										<?php }
										elseif($photo['quarter'] == "2"){?>
											<option value="2">Quarter 2</option>
											<option value="1">Quarter 1</option>
											<option value="3">Quarter 3</option>
											<option value="4">Quarter 4</option>
											<option value="">None</option>
										<?php }
										elseif($photo['quarter'] == "3"){?>
											<option value="3">Quarter 3</option>
											<option value="1">Quarter 1</option>
											<option value="2">Quarter 2</option>
											<option value="4">Quarter 4</option>
											<option value="">None</option>
										<?php }
										elseif($photo['quarter'] == "4"){?>
											<option value="4">Quarter 4</option>
											<option value="1">Quarter 1</option>
											<option value="2">Quarter 2</option>
											<option value="3">Quarter 3</option>
											<option value="">None</option>
										<?php }?>
										
									</select>
									<select name="group">
										<?php if($photo['group'] == ""){?>
											<option value="">Select group to add to</option>
										<?php }else{
											$groupR = mysqli_stmt_init($mysqli);
											mysqli_stmt_prepare($groupR, "SELECT * FROM `photoGroups` where `id` = ?");
											mysqli_stmt_bind_param($groupR, "i", $photo['group']);
											mysqli_stmt_execute($groupR);
											$groupR = mysqli_stmt_get_result($groupR);
											$groupR = $groupR->fetch_array();
											?>
											<option value="<?=$groupR['id']?>"><?=$groupR['name']?></option>
										<?php 
										}?>
										<?php 
										$groupResults = mysqli_stmt_init($mysqli);
										mysqli_stmt_prepare($groupResults, "SELECT * FROM `photoGroups` where `yearId` = ?");
										mysqli_stmt_bind_param($groupResults, "i", $year['id']);
										mysqli_stmt_execute($groupResults);
										$groupResults = mysqli_stmt_get_result($groupResults);
										while($groupResult = mysqli_fetch_assoc($groupResults)){
											$groups[] = $groupResult;
										}
										foreach($groups as $group){ if($photo['group'] != $group['id']){?> 
											<option value="<?=$group['id']?>"><?=$group['name']?></option>
										<?php }}?>
										<option value="">None</option>
									</select>
									<input type="submit" name="submit" value="Save">
								</form>
								<img src="<?=$photo['photoUrl']?>">
		    			</div>
		    		</div>
      		<?php }?>
				
				
				
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

