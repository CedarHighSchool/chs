<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<a href="notes.php" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Notes
  </a>
  <h1 class="title">Note</h1>
  <a class="icon fa fa-pencil-square pull-right" href="editnote.php?id=<?=$_GET['id']?>"></a>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded">
	<?php
	$stuff = $mysqli->query("SELECT * FROM `notes` WHERE `id`=".$_GET['id']);
  $note = $stuff->fetch_array();
  ?>
  <h4><?=$note['title']?></h4>
	<p><?=him($note['user'],"fullname")?></p><br>
	<br>
	<?=nl2br($note['content'])?><br><br>
	<a href="delnote.php?id=<?=$_GET['id']?>" class="btn btn-block btn-negative">Delete Note</a>
</div>
<?php include("bottom.php"); ?>