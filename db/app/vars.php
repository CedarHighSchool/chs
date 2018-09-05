<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <h1 class="title">Variables</h1>
</header>

<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded">
	<?php
	if($cuser['edit'] != 1){
		die("<div class=\"alert alert-danger\"><b>Sorry!</b> You do not have permission to do this!</div>");
	}
	$varlist = $mysqli->query("select * from variables");
	while($item = $varlist->fetch_array()){
		?>
		<form class="form-horizontal">
			<div class="control-group">
		    <label class="control-label" for="<?=$item['name']?>"><?=$item['friendly_name']?></label>
		    <div class="controls">
		      <input type="text" id="<?=$item['name']?>" data-var="<?=$item['name']?>" placeholder="value for <?=$item['name']?>" value="<?=$item['value']?>">
		      <?php if($cuser['coder'] == 1){ ?>
		      <button type="submit" class="btn btn-primary btn-copy" id="<?=$item['name']?>_copy" data-var="<?=$item['name']?>"><i class="fa fa-copy"></i></button>&nbsp;
		      <?php } ?>
		      <button type="submit" class="btn btn-success btn-save" id="<?=$item['name']?>_save" data-var="<?=$item['name']?>"><i class="fa fa-save"></i></button>&nbsp;
		      <span style="color: green;" id="<?=$item['name']?>_tt" data-var="<?=$item['name']?>"></span>&nbsp;
		      <span style="color: red;" id="<?=$item['name']?>_te" data-var="<?=$item['name']?>"></span>
		    </div>
		  </div>
		</form><hr>
		<?php
	}
	?>

<?php include("bottom.php"); ?>