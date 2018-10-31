<?php $thisPage="gallery"; $yearStart=$_GET['yearStart']?>

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
			if(isset($_POST["submit"])) {
			$_GET['yearStart']=$_POST["yearStart"];
			$year = $_POST['year'];
			$yearStart = $_POST['yearStart'];
			$quarter = $_POST['quarter'];
			$group = $_POST['group'];
			
			$target_dir = "../../gallery/sample/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			$uploadOk = 1;
			$uploaded = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			    //Check if already exits
			    
			    $check = getimagesize($_FILES["file"]["tmp_name"]);
			    if($check !== false) {
			        //header("location: //eth189hunt.host-gsoft.ga/MagicTGathering/addCards.php?upload=error");
			        $uploadOk = 1;
			    } else {
			        $uploadOk = 0;
			        $uploaded = 0;
			    }
			
			    // Check if file already exists
			    if (file_exists($target_file)) {
			        echo "Sorry, file already exists.";
			        $uploadOk = 0;
			        $uploaded = 0;
			    }
			    // Allow certain file formats
			    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			    && $imageFileType != "gif" ) {
			        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			        //header("location: upload.php?yearStart=" . $yearStart);
			        $uploadOk = 0;
			        $uploaded = 0;
			    }
			    
			    // Check if $uploadOk is set to 0 by an error
			    if($uploaded == 1){
			    	
					
					
				    if ($uploadOk == 0) {
				        echo "Sorry, your file was not uploaded.";
				    // if everything is ok, try to upload file
				    } else {
				        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
			            $photoUrl = "/gallery/sample/" . basename($_FILES["file"]["name"]);
			            if($group == ""){
			                $group = 0;
			            }
			            if($quarter == ""){
			                $quarter = 0;
			            }
			            $res = mysqli_stmt_init($mysqli);
			            mysqli_stmt_prepare($res, "INSERT INTO `photoAll` (`photoUrl`, `group`, `quarter`, `yearId`) VALUES (?, ?, ?, ?);");
			            mysqli_stmt_bind_param($res, "siii", $photoUrl, $group, $quarter, $year);
			            mysqli_stmt_execute($res);
				        	
				            
				            $uploaded = 1;
				            
				            
				        } else {
				            
				            $uploaded = 0;
				        }
			
				    }
			    }
			?>
			<script>
				alert("Uploaded <?php echo basename($_FILES['file']['name']);?>");
			</script>
			<?php }?>
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
						<h3>Upload Photo</h3>
						<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="quarters.php?yearStart=<?=$yearStart?>" class="btn btn-default pull-right absTR">Close</a><?php } ?>
					</div>
				</div>
				
				
				<div class="span9">
					<div class="well">
						<p>Make sure photo name is not the same</p>
						<form class="flex flex-col" enctype="multipart/form-data" action="upload.php" method="POST">
							<input type="hidden" name="year" value="<?=$year['id']?>">
							<input type="hidden" name="yearStart" value="<?=$yearStart?>">
							<div class="file"><input name="file" class="center" type='file' onchange="readURL(this);" /></div>
							<img class="preview" id="blah" src="img/filler.png" alt="your image" width="200px"/>
							<select name="quarter">
								<option value="">Select Quarter to add to</option>
								<option value="1">Quarter 1</option>
								<option value="2">Quarter 2</option>
								<option value="3">Quarter 3</option>
								<option value="4">Quarter 4</option>
							</select>
							<select name="group">
								<option value="">Select group to add to</option>
								<?php 
								$groupResults = mysqli_stmt_init($mysqli);
								mysqli_stmt_prepare($groupResults, "SELECT * FROM `photoGroups` where `yearId` = ?");
								mysqli_stmt_bind_param($groupResults, "i", $year['id']);
								mysqli_stmt_execute($groupResults);
								$groupResults = mysqli_stmt_get_result($groupResults);
								while($groupResult = mysqli_fetch_assoc($groupResults)){
									$groups[] = $groupResult;
								}
								foreach($groups as $group){?> 
									<option value="<?=$group['id']?>"><?=$group['name']?></option>
								<?php }?>
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
    	<script src="photo.js"></script>

    	<script src="/assets/js/bootstrap.js"></script>

    	

  	</body>

</html>

