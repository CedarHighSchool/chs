<?php $thisPage="clubs"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../../assets/inc/headtag.php") ?>

  	</head>

  	<body>

		<?php include("../../assets/inc/navbar.php") ?>

		

    	<!-- Let the container begin! -->

		<div class="container">

			<div class="row">

				

				<?php include("../../assets/inc/navlist.php") ?>

				

	   			<div class="span9">		

	       			<div class="well">

          				<h3><a href="./">Cyber Corps</a></h3>

           			</div>

         		</div>

	

				<div class="span2">	

					<div class="thumbnail">				      		

						<img src="cyber_corps.jpg" alt="thumbnail">
						</div>

				</div><br />

					  

				<div class="span4">

			    	<div class="well">

			      		<h3>Club Information</h3>

			      		<p>We operate the technology of the school. You could say that we're the Stephen Hawkings of the Technology field. We only accept the best of the best so try and stand out. Submit a request to join if you're looking to join the elite group of technology nerds.
			      		</p>

			    	</div>

			    	<div class="well">

			      		<h3>How to Join</h3>

			      		<p>If you are interested in joining Cyber Corps then contact Mr. Swallow. </p>

			    	</div>
						<?php if($GAME_UP == true) { ?>
			    	<div class="well">

			      		<h4>Hunt High Score</h4>
			      		<?php
					      $link = mysqli_connect("schoolsites","chscyberweb",$pwwd,"chs");
						 		if(!$link){
						 			echo mysqli_error($link);
						 		}
						 		$stuff = mysqli_query($link, "SELECT * FROM `game_users` WHERE `hidden`=0 ORDER BY `score` DESC, `level` DESC");
						 		$item = mysqli_fetch_array($stuff);
					      ?>
					      <center>
					      	<img src="https://api.adorable.io/avatars/285/<?=$item['username']?>.png" id="icon_img" style="max-width: 150px; border-radius: 30%;" class="img-circle">
					      	<h3><?=$item['username']?></h3>
				      	</center>

			    	</div>
			    	<?php } ?>

				</div>

		           			

				<div class="span3">

					<div class="well">

						<h5>Advisor</h5>

						<ul class="nav nav-list">

							<li><a href="../../faculty/swallow-caleb/">Caleb Swallow</a></li>	

			 		  </ul>

				 	</div>

					<div class="well">

						<h5>Roster</h5>

						<ul class="nav nav-list">
						  <li>Josh</li>
						  <li>Kirby</li>
						  <li>Dominique</li>
						  <li>Charles</li>
						  <li>Alex</li>
						 
						</ul>

			 	  </div>
                  
                  <div class="well">

				 		<h5>Pages</h5>

						<ul class="nav nav-list">

							<li class="active"><a href="./">Home</a></li>

							<li><a href="//chs.ironk12.org/game/">The Hunt</a></li>

							<li><a href="//chs.ironk12.org/db/">Admin Login</a></li>

							<!--<li><a href="request.php">Submit a Request</a></li>-->


				 		</ul>

					</div>

				</div>

			</div><!--/row-->

	       

      		<?php include("../../assets/inc/footer.php") ?>



    	</div> <!-- /container -->



    	<!-- Yummy JavaScrips

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="/assets/js/jquery.js"></script>

    	<script src="/assets/js/bootstrap.js"></script>



  	</body>

</html>

