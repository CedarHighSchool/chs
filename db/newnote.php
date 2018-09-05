<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['username'])){
	header("location: /db/login.php");
}
?>
<?php $thisPage="clubs" ?>

<!DOCTYPE html>

<html lang="en">

   <head>

      <title>Cedar High School</title>

      <?php include("../assets/inc/headtag.php");
      $manage->require_perm("notes");
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

      <div class="span9">
         <div class="well">
            <h1>Notes</h1>
         </div>
      </div>

			<div class="span6">
				<div class="well">
					<h3>New Note</h3>
					<?php
						if(isset($_POST['title'])){
							$title = $_POST['title'];
							$cont = $_POST['content'];
							$private = $_POST['private'];
							if($private){
								$private = 1;
							}else{
								$private = 0;
							}


							$userid = $mysqli->query("SELECT * FROM `users` WHERE `username`='".$_SESSION['username']."'");
 							$userid = $userid->fetch_array()['id'];

							$res = $mysqli->query("INSERT INTO `notes` (`title`,`content`,`private`,`user`) VALUES ('$title','$cont','$private','$userid')");

							if(!$mysqli->error){
								$manage->activity("Created note", "note", $mysqli->insert_id);
								echo "Note created! See it <a href='/db/seenote.php?id=".$mysqli->insert_id."'>here</a>.";
							}else{
								echo $mysqli->error($link);
							}
						}
					?>
					<form class="form-horizontal" action="" method="post">
					  <div class="control-group">
					    <label class="control-label" for="title">Title</label>
					    <div class="controls">
					      <input type="text" id="title" placeholder="Title" name="title" value="<?=$_POST['title']?>">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="content">Content</label>
					    <div class="controls">
					      <textarea name="content" id="content" style="background: none;border: none;box-shadow:none;width: 100%;height: 100px;max-width:100%;"><?=$_POST['content']?></textarea>
					    </div>
					  </div>
					  <div class="control-group">
					    <div class="controls">
					      <label class="checkbox">
					        <input type="checkbox" <?=$_POST['private']?"checked":""?> name="private"> Private
					      </label>
					      <button type="submit" class="btn"><i class="fa fa-plus"></i> Create Note</button>
					    </div>
					  </div>
					</form>
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

