<?php include("top.php"); ?>

<div data-role="page">

	<div data-role="header">
		<a href="register.php">Register</a>
		<h1>About the Hunt</h1>
		<?php if(!isset($_SESSION['game_username'])) { ?>
		<a href="login.php" class="ui-btn-right">Log In</a>
		<?php }else{ ?>
		<a href="index.php" class="ui-btn-right"><?=$_SESSION['game_username']?></a>
		<?php } ?>
	</div>

	<div data-role="content">
		<div class="well">
      <hr> 
      <center><h1 class="animated tada">Congratulations!</h1>
      <h4><p>                        
      <hr>
      <p>You found the first easter egg!</p>
      <p>There is a new game happening in Cedar High School!</p>
      </center></h4>
      <p>Inspired from the book "Ready Player One" Josh A. and Kirby M. have created a competition to find easter eggs, and perform tasks. You need to create your account by clicking <a href="register.php">here</a>! 
      The points will be visible live to all those who wish to keep track of the people in the lead. All game elements can be found at Cedar High School.</p>
      </p>
      <p></p>
      <p><h2><center>Prize!</h2></p></center>
      <p><center>The prize for winning this treasure hunt will be:</p>
      <p><b>1. $50 Amazon Gift Card</p>
      <p>2. Custom 3D printed trophy with your name on it</center></p></b>
      <center>
      <p><H2>First Clue</H2></p>
      <p>Go where the knowledge is kept</p>
      <p>Where minds are enlightened</p>
      <p>And where silence abounds</p>
      <p>158.1</p>
      </center>
       <hr>
      <center>
        <a href="faq.php">Frequently Asked Questions</a>
      </center>
   </div>
	</div>
	
</div>

</body>
</html>