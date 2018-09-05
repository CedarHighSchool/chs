<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<?php
	if(!isset($_GET['yes'])) {
	?>
	<a href="note.php?id=<?=$_GET['id']?>" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Cancel
  </a>
  <?php
	}else{
	?>
	<a href="notes.php" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Notes
  </a>
	<?php
	}
	?>
  <h1 class="title">Confirm</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded">
	<?php
	if(!isset($_GET['yes'])) {
	$stuff = $mysqli->query("SELECT * FROM `notes` WHERE `id`=".$_GET['id']);
  $note = $stuff->fetch_array();
  ?>
  <h4><?=$note['title']?></h4>
	Are you sure you want to delete this note? This action wil be irreversible.<br>
	<a href="delnote.php?id=<?=$_GET['id']?>&yes=1" class="btn btn-block btn-negative">Delete</a>
	<a href="note.php?id=<?=$_GET['id']?>" class="btn btn-block btn-positive">Cancel</a>
	<?php
	}else{
	$res = $mysqli->query("DELETE FROM `notes` WHERE `id`=".$_GET['id']);
	$manage->activity("Deleted note", "note", $_GET['id'], true);
	?>
	Note deleted!
	<a href="notes.php" class="btn btn-block">Return to List</a>
	<?php
	}
	?>
</div>
<?php include("bottom.php"); ?>