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
				$photoUrl=$_POST["photoUrl"];
				$quarter=$_POST["quarter"];
				$res=mysqli_stmt_init($mysqli);
				mysqli_stmt_prepare($res, "update `photoQuarters` SET `photoUrl`=? where `yearId`=? and `quarter`=?");
				mysqli_stmt_bind_param($res, "sii", $photoUrl, $yearId, $quarter);
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
						<h3>Quarters <?=$year['yearstart']?>-<?=$year['yearend']?></h3>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="quarters.php?yearStart=<?=$yearStart?>" class="btn btn-default pull-right absTR">Close</a><?php } ?>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="newQuarter.php?yearStart=<?=$yearStart?>" class="btn btn-default pull-right absTR">Add</a><?php } ?>
					</div>
				</div>
				<?php 
      		$quarterResults = mysqli_stmt_init($mysqli);
					mysqli_stmt_prepare($quarterResults, "SELECT * FROM photoQuarters where yearId = ?");
					mysqli_stmt_bind_param($quarterResults, "i", $year['id']);
					mysqli_stmt_execute($quarterResults);
					$quarterResults = mysqli_stmt_get_result($quarterResults);
					while($quarterResult = mysqli_fetch_assoc($quarterResults)){
						$quarters[] = $quarterResult;
					} 
					foreach ($quarters as $quarter){
      		?>
		    		<div class="span9">
		    			<div class="well">
		    				Quarter <?=$quarter['quarter']?>
		    				<form enctype="multipart/form-data" action="editQuarter.php" method="POST">
									<input type="hidden" name="yearStart" value="<?php echo $yearStart?>">
									<input type="hidden" name="yearId" value="<?php echo $year["id"]?>">
									<input type="hidden" name="quarter" value="<?php echo $quarter["quarter"]?>">
									<input type="text" name="photoUrl" value="<?php echo $quarter["photoUrl"]; ?>">
									<input type="submit" name="submit" value="Save">
									<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="deleteQuarter.php?yearStart=<?=$year['yearstart']?>&quarter=<?=$quarter['id']?>" class="btn btn-default pull-right absTR">Delete</a><?php } ?>
								</form>
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

