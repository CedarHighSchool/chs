<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<a href="messages.php" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Inbox
  </a>
  <h1 class="title">Compose Message</h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded">
	<?php
		if(isset($_POST['to'])){
			$message = $_POST['message'];
			$subject = $_POST['subject'];
			$from = $cuser['id'];
			$to = $_POST['to'];
			$when = time();
			
			$res = $mysqli->query("INSERT INTO `msg` (`from`, `to`, `subject`, `message`, `when`) VALUES ($from, $to, '$subject', '$message', $when)");
			
			$manage->activity("Sent message", "message", $mysqli->insert_id);
			echo "<div class=\"alert alert-success\">Message sent!</div>";
		}
	?>
	<style>
		.input-select {
			width: 100%;
	    height: 35px;
	    -webkit-appearance: none;
	    padding: 0 15px;
	    margin-bottom: 15px;
	    line-height: 21px;
	    background-color: #fff;
	    border: 1px solid #ddd;
	    border-radius: 3px;
	    outline: none;
		}
	</style>
	<form class="form-horizontal" action="compose.php" method="post">
	  <div class="control-group">
	    <label class="control-label" for="to">To</label>
	    <div class="controls">
	      <select type="text" id="to" placeholder="To" name="to" class="input-select">
	      	<?php
	      	$res = $mysqli->query("SELECT * FROM `users` WHERE `messages`=1");
	      	while($usr = $res->fetch_array()) {
	      	?>
	      		<option value="<?=$usr['id']?>"><?=$usr['fname']?> <?=$usr['lname']?></option>
	      	<?php
	      	}
	      	?>
      	</select>
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="subject">Subject</label>
	    <div class="controls">
	      <input type="text" id="subject" placeholder="Subject" name="subject" value="<?=$_POST['subject']?>">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="message">Message</label>
	    <div class="controls">
	      <textarea name="message" id="message" style="width: 100%;height: 100px;max-width:100%;"><?=$_POST['message']?></textarea>
	    </div>
	  </div>
	  <div class="control-group">
	    <div class="controls">
	      <button type="submit" class="btn btn-block"><i class="fa fa-send"></i> Send</button>
	    </div>
	  </div>
	</form>
</div>
<?php include("bottom.php"); ?>