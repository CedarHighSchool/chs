<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['username'])){
	header("location: /db/login.php");
}
?>
<?php $thisPage="notes"; ?>

<!DOCTYPE html>

<html lang="en">

   <head>

      <title>Cedar High School</title>

      <?php include("../assets/inc/headtag.php");
      $manage->require_perm("banners");
       ?>
      <style>
         .imglabel {
         	font-size: 12px;
         }

         @media (min-width: 768px) and (max-width: 979px) {
	         .imglabel {
	         	font-size: 40px;
	         }
         }

      </style>

   </head>

   <body>

      <?php include("../assets/inc/navbar.php") ?>


      <style type="text/css">
      a.thumbnail { height: 205px; }
      </style>

      <!-- Let the container begin! -->

      <div class="container">

      <div class="row">



      <?php include("../assets/inc/navlist.php") ?>
			<?php mustLogIn(); ?>
      <div class="span9">
         <div class="well">
            <h1><i class="fa fa-picture-o"></i> Banners</h1>
         </div>
      </div>

			<div class="span9">
				<div class="well">
					<?php
					$target_dir = "../assets/img/Banner/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
					if(isset($_POST["send"])) {
						$num = $_POST['number'];
						// Allow certain image size
						list($width, $height) = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
						if($width != 875 || $height != 300) {
						    echo "Please upload a banner image. This file doesn't look right.<br>";
						    $uploadOk = 0;
						}
						
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif" ) {
						    echo "Sorry, only JPG, PNG & GIF files are allowed.<br>";
						    $uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
						    echo "Sorry, your file was not uploaded.<br>";
						// if everything is ok, try to upload file
						} else {
							if(file_exists($target_dir.$num.".gif")) {
								unlink($target_dir.$num.".gif");
							}else{
								if(file_exists($target_dir.$num.".png")) {
									unlink($target_dir.$num.".png");
								}else{
									if(file_exists($target_dir.$num.".jpg")) {
										unlink($target_dir.$num.".jpg");
									}
								}
							}
							
						    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$num.".".$imageFileType)) {
						        echo "The file ".$num.".".$imageFileType." has been uploaded.<br>";
						    } else {
						        echo "Sorry, there was an error uploading your file.<br>";
						    }
						}
					}
					?>
					<script>
						$(function() {
							$("#number").on("change",function() {
								$("#replacing").attr("src",$("#"+$(this).val()).attr("src"));
							});
							$("#replacing").attr("src",$("#"+$("#number").val()).attr("src"));
						});
					</script>
					<form action="" method="post" enctype="multipart/form-data">
					<img src="#" class="pull-right" id="replacing" style="max-width: 30%;">
						<select name="number" id="number" class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
						</select><br>
						<input name="fileToUpload" id="fileToUpload" type="file" /><br />
						<input name="send" hidden style="display:none;">
						<button type="submit" class="btn btn-default">Upload</button>
					</form>
					<hr>
					<h3>Current Banners</h3><br>
					<?php
					$files1 = scandir($target_dir);
					$num = 0;
					$ignore = array(".","..",".DS_Store",".htaccess","uploads");
					foreach($files1 as $file) {
						if(in_array($file, $ignore)) {
							continue;
						}
						$num += 1;
						echo "<div style='border:1px solid black; margin-bottom:2px;'>".$file."<br><img id='$num' src='/assets/img/Banner/$file' style='max-height:100px;'><br></div>";
					}
					?>
				</div><!--well-->

			</div><!--span3-->
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
      </style>
      <?php include("assets/inc/footer.php") ?>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>

			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

