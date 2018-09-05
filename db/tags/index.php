<?php include("head.php"); ?>
<?php
if(!isset($_SESSION[$pre.'username'])) {
  die("<script>window.location.href='".$c['url']."login.php';</script>Please enable JavaScript.");
}
?>
<h3>Welcome, <?=$u['fname']?> <?=$u['lname']?></h3>
<h5>You have <b>0</b> students tagged for today.</h5>
<h4>Actions</h4>
<a href="tag.php" class="btn btn-default">Tag a Student</a>
<a href="upload_list.php" class="btn btn-default">Upload Student List</a>
<?php include("foot.php"); ?>
