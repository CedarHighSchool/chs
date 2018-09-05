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

		<?php mustLogIn(); ?>

      <div class="span9">
         <div class="well">
            <h1>Notes</h1>
         </div>
      </div>

			<div class="span6">
				<div class="well">
					<h3>Edit Note</h3>
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

							// $userid = mysqli_query($link,"SELECT * FROM `users` WHERE `username`='".$_SESSION['username']."'");
 							// $userid = mysqli_fetch_array($userid)['id'];

							$res = $mysqli->query("UPDATE `notes` SET `title`='$title', `content`='$cont', `private`='$private' WHERE `id`=".$_GET['id']);

							if(!$mysqli->error){
								$manage->activity("Updated note", "note", $_GET['id']);
								echo "<div class='alert alert-success'>Note saved! See it <a href='/db/seenote.php?id=".$_GET['id']."'>here</a>.</div>";
							}else{
								echo "<div class='alert alert-danger'>".$mysqli->error."</div>";
							}
						}
						$res = $mysqli->query("SELECT * FROM `notes` WHERE `id`=".$_GET['id']);
						if($mysqli->error){
							echo "<div class='alert alert-danger'>Error: ".$mysqli->error."</div>";
						}
						$note = $res->fetch_array();
					?>
								<script>
									$(function() {
										$(window).bind('keydown', function(event) {
											if (event.ctrlKey || event.metaKey) {
												switch (String.fromCharCode(event.which).toLowerCase()) {
												case 's':
													event.preventDefault();
													$("#saver").click();
													break;
												}
											}
										});
									})
								</script>
					<form class="form-horizontal" action="" method="post">
					  <div class="control-group">
					    <label class="control-label" for="title">Title</label>
					    <div class="controls">
					      <input type="text" id="title" placeholder="Title" name="title" value="<?=$note['title']?>">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="content">Content</label>
					    <div class="controls">
					      <textarea name="content" id="content" style="background: none;border: none;box-shadow:none;width: 100%;height: 100px;max-width:100%;"><?=$note['content']?></textarea>
					    </div>
					  </div>
					  <div class="control-group">
					    <div class="controls">
					      <label class="checkbox">
					        <input type="checkbox" <?=$note['private']?"checked":""?> name="private"> Private
					      </label>
					      <button type="submit" class="btn" id="saver"><i class="fa fa-floppy-o"></i> Save</button>
					    </div>
					  </div>
					</form>
				</div><!--well-->
			</div><!--span3-->
      <div class="span3">
         <div class="well">
            <?php include("mininotes.php"); ?>
         </div>
      </div>
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

