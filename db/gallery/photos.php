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
				$_GET["quarter"]=$_POST["quarter"];
				$_GET["group"]=$_POST["group"];
				$yearId=$_POST["yearId"];
				$id=$_POST["id"];
				$quarter=$_POST["quarter"];
				$group = $_POST['group'];
				if($_GET['group'] != ""){
					$res=mysqli_stmt_init($mysqli);
					mysqli_stmt_prepare($res, "update `photoAll` SET `group`=? where `yearId`=? and `id`=?");
					mysqli_stmt_bind_param($res, "iii", $group, $yearId, $id);
					mysqli_stmt_execute($res);
				}elseif($_GET['quarter'] != ""){
					$res=mysqli_stmt_init($mysqli);
					mysqli_stmt_prepare($res, "update `photoAll` SET `quarter`=? where `yearId`=? and `id`=?");
					mysqli_stmt_bind_param($res, "iii", $quarter, $yearId, $id);
					mysqli_stmt_execute($res);
				}
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
						<?php if($_GET['quarter'] != ""){
						if($cuser['edit'] == 1 || $editor == true){ ?><a href="quarter.php?yearStart=<?=$yearStart?>&quarter=<?=$_GET['quarter']?>" class="btn btn-default pull-right absTR">Close</a><?php }
						}else{
						if($cuser['edit'] == 1 || $editor == true){ ?><a href="group.php?yearStart=<?=$yearStart?>&group=<?=$_GET['group']?>" class="btn btn-default pull-right absTR">Close</a><?php }
						}?>
						
					</div>
				</div>
				<?php 
      		$photoResults = mysqli_stmt_init($mysqli);
					mysqli_stmt_prepare($photoResults, "SELECT * FROM `photoAll` where `yearId` = ?");
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
		    				Photo <br>
		    				<img src="<?=$photo["photoUrl"]?>" width="210px" height="140px">
		    				<form enctype="multipart/form-data" action="photos.php" method="POST">
									<input type="hidden" name="yearStart" value="<?php echo $yearStart?>">
									<input type="hidden" name="yearId" value="<?php echo $year["id"]?>">
									<input type="hidden" name="quarter" value="<?php echo $_GET["quarter"]?>">
									<input type="hidden" name="group" value="<?php echo $_GET["group"]?>">
									<input type="hidden" name="id" value="<?php echo $photo["id"]?>">
									<input type="submit" name="submit" value="Add">
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

