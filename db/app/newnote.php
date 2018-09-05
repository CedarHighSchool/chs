<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<a href="notes.php" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Notes
  </a>
  <h1 class="title">New Note</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded">
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

 			$userid = $cuser['id'];

			$res = $mysqli->query("INSERT INTO `notes` (`title`,`content`,`private`,`user`) VALUES ('$title','$cont','$private','$userid')");

			if(!$res->error){
				$mynote = $mysqli->insert_id;
				$manage->activity("Created note", "note", $mynote);
				header("location: /db/app/note.php?id=".$mynote);
				echo "<div class='alert alert-success'>Creating note...</div><script>window.location.href='note.php?id=".$mynote."';</script>";
			}else{
				echo mysqli_error($link);
			}
		}
	?>
	<form class="form-horizontal" action="newnote.php" method="post">
	  <div class="control-group">
	    <label class="control-label" for="title">Title</label>
	    <div class="controls">
	      <input type="text" id="title" placeholder="Title" name="title" value="<?=$_POST['title']?>">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="content">Content</label>
	    <div class="controls">
	      <textarea name="content" id="content" style="width: 100%;height: 100px;max-width:100%;"><?=$_POST['content']?></textarea>
	    </div>
	  </div>
	  <div class="control-group">
	    <div class="controls">
	      <label class="checkbox">
	        <input type="checkbox" <?=$_POST['private']?"checked":""?> name="private"> Private
	      </label><br>
	      <button type="submit" class="btn btn-block"><i class="fa fa-plus"></i> Create Note</button>
	    </div>
	  </div>
	</form>
</div>
<?php include("bottom.php"); ?>