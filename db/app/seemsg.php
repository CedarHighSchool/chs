<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<a href="messages.php" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Back
  </a>
  <h1 class="title">Message</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded">
	<?php
	$stuff = $mysqli->query("SELECT * FROM `msg` WHERE `id`=".$_GET['id']);
  $msg = $stuff->fetch_array();
  
  if($msg['to'] == $cuser['id']){
		$res = $mysqli->query("UPDATE `msg` SET `read`=1 WHERE `id`=".$_GET['id']);
	}
  ?>
  <h4>Message #<?=$msg['id']?></h4>
	<b>From</b>: <?=him($msg['from'],"fullname")?> (<?=him($msg['from'],"username")?>)<br>
	<b>At</b>: <?=date("l, jS \of F Y @ h:i:s A",$msg['when'])?><hr>
	<b><?=$msg['subject']?></b><br>
	<?=nl2br($msg['message'])?><br>
</div>
<?php include("bottom.php"); ?>