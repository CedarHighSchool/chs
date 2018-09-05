<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<a href="javascript:window.history.back()" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Back
  </a>
  <h1 class="title">Image</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
	<img src="<?=$_GET['u']?>" style="width:100%;">
</div>
<?php include("bottom.php"); ?>