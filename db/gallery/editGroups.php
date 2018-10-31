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
				$yearStart=$_POST["yearStart"];
				$yearId=$_POST["yearId"];
				$thumb=$_POST["thumb"];
				$id=$_POST["id"];
				$res=mysqli_stmt_init($mysqli);
				mysqli_stmt_prepare($res, "update `photoGroups` SET `thumb`=? where `yearId`=? and `id`=?");
				mysqli_stmt_bind_param($res, "sii", $thumb, $yearId, $id);
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
						<h3>Groups <?=$year['yearstart']?>-<?=$year['yearend']?></h3>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="quarters.php?yearStart=<?=$year['yearstart']?>" class="btn btn-default pull-right absTR">Close</a><?php } ?>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="newGroup.php?yearStart=<?=$year['yearstart']?>" class="btn btn-default pull-right absTR">Create</a><?php } ?>
					</div>
				</div>
				<?php 
      		$groupResults = mysqli_stmt_init($mysqli);
					mysqli_stmt_prepare($groupResults, "SELECT * FROM photoGroups where yearId = ?");
					mysqli_stmt_bind_param($groupResults, "i", $year['id']);
					mysqli_stmt_execute($groupResults);
					$groupResults = mysqli_stmt_get_result($groupResults);
					while($groupResult = mysqli_fetch_assoc($groupResults)){
						$groups[] = $groupResult;
					}
					foreach ($groups as $group){
      		?>
		    		<div class="span9">
		    			<div class="well">
		    				<?=$group['name']?>
		    				<form enctype="multipart/form-data" action="editGroups.php" method="POST">
									<input type="hidden" name="yearStart" value="<?php echo $yearStart?>">
									<input type="hidden" name="yearId" value="<?php echo $year["id"]?>">
									<input type="hidden" name="id" value="<?php echo $group["id"]?>">
									Thumbnail Url:<br><input type="text" name="thumb" value="<?php echo $group["thumb"]; ?>">
									<input type="submit" name="submit" value="Save">
								</form>
								<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="deleteGroup.php?yearStart=<?=$year['yearstart']?>&group=<?=$group['id']?>" class="btn btn-default pull-right absTR">Delete</a><?php } ?>
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

