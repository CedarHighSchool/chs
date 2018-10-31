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
			$thumb=$_POST["thumb"];
			$name=$_POST["name"];
			$res=mysqli_stmt_init($mysqli);
			mysqli_stmt_prepare($res, "INSERT INTO `photoYears` (`yearstart`,`yearend`) VALUES (?, ?)");
			mysqli_stmt_bind_param($res, "ii", $_POST['start'], $_POST['end']);
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
						<h3>Create New Year</h3>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="quarters.php?yearStart=<?=$year['yearstart']?>" class="btn btn-default pull-right absTR">Close</a><?php } ?>
					</div>
				</div>
				
				
				<div class="span9">
					<div class="well">
						<form enctype="multipart/form-data" action="year.php" method="POST">
							<input type="hidden" name="yearStart" value="<?php echo $yearStart?>">
							<input type="hidden" name="yearId" value="<?php echo $year["id"]?>">
							<input type="text" name="start" placeholder="Year Start">
							<input type="text" name="end" placeholder="Year End">
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

