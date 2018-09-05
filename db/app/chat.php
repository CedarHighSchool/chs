<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <h1 class="title">Chat</h1>
</header>
<div class="bar bar-standard bar-footer-secondary" style="padding-left:0;bottom:51px;">
  <input type="text" id="text" placeholder="Message" style="width:calc(100% - 61px); background-color:rgba(0,0,0,0); border:none; padding-top: 7px;">
  <button id="add" class="btn btn-link" style="width:55px; margin-top:-1px;">Send</button>
</div>

<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded" style="padding-bottom: 84px;">
  <div class="comments">
		<div class="list">
			
		</div>
	</div>
</div>

<?php include("bottom.php"); ?>