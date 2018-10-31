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
		<?php 
		if(isset($_POST["submit"])){
			$yearStart=$_POST["yearStart"];
			$yearId=$_POST["yearId"];
			$photoUrl=$_POST["photoUrl"];
			$quarter=$_POST["quarter"];
			$res=mysqli_stmt_init($mysqli);
			mysqli_stmt_prepare($res, "INSERT INTO `photoQuarters` (`yearId`,`photoUrl`,`quarter`) VALUES (?, ?, ?)");
			mysqli_stmt_bind_param($res, "isi", $yearId, $photoUrl, $quarter);
			mysqli_stmt_execute($res);
			
		}
		?>
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
						<h3>Create New Quarter <?=$year['yearstart']?>-<?=$year['yearend']?></h3>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="editQuarter.php?yearStart=<?=$year['yearstart']?>" class="btn btn-default pull-right absTR">Close</a><?php } ?>
					</div>
				</div>
				
				
				<div class="span9">
					<div class="well">
						<form enctype="multipart/form-data" action="newQuarter.php" method="POST">
							<input type="hidden" name="yearStart" value="<?php echo $yearStart?>">
							<input type="hidden" name="yearId" value="<?php echo $year["id"]?>">
							<input type="text" name="photoUrl" placeholder="Add Photo URL">
							<select name="quarter">
								<option value="">Select Quarter</option>
								<option value="1">Quarter 1</option>
								<option value="2">Quarter 2</option>
								<option value="3">Quarter 3</option>
								<option value="4">Quarter 4</option>
							</select>
							<input type="submit" name="submit" value="Submit">
						</form>
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

