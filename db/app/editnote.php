<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<a href="note.php?id=<?=$_GET['id']?>" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Cancel
  </a>
  <h1 class="title">Edit Note</h1>
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

			// $userid = mysqli_query($link,"SELECT * FROM `users` WHERE `username`='".$_SESSION['username']."'");
 			// $userid = mysqli_fetch_array($userid)['id'];

			$res = $mysqli->query("UPDATE `notes` SET `title`='$title', `content`='$cont', `private`='$private' WHERE `id`=".$_GET['id']);

			if(!$res->error){
				$manage->activity("Updated note", "note", $_GET['id']);
				echo "<div class='alert alert-success'>Note saved! See it <a href='/db/app/note.php?id=".$_GET['id']."'>here</a>.</div>";
			}else{
				echo "<div class='alert alert-danger'>".$mysqli->error($link)."</div>";
			}
		}
		$res = $mysqli->query("SELECT * FROM `notes` WHERE `id`=".$_GET['id']);
		if($res->error){
			echo "<div class='alert alert-danger'>Error: ".$res->error."</div>";
		}
		$note = $res->fetch_array();
	?>
	<form class="form-horizontal" action="editnote.php?id=<?=$_GET['id']?>" method="post">
	  <div class="control-group">
	    <label class="control-label" for="title">Title</label>
	    <div class="controls">
	      <input type="text" id="title" placeholder="Title" name="title" value="<?=$note['title']?>">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="content">Content</label>
	    <div class="controls">
	      <textarea name="content" id="content" style="width: 100%;height: 100px;max-width:100%;"><?=$note['content']?></textarea>
	    </div>
	  </div>
	  <div class="control-group">
	    <div class="controls">
	      <label class="checkbox">
	        <input type="checkbox" <?=$note['private']?"checked":""?> name="private"> Private
	      </label><hr>
	      <button type="submit" class="btn btn-block"><i class="fa fa-save"></i> Save</button>
	    </div>
	  </div>
	</form>
</div>
<?php include("bottom.php"); ?>