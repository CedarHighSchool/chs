<?php $thisPage="clubs"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>
		<?php include("../../assets/inc/headtag.php");
    	if(!isset($_SESSION)){
    		session_start();
    	}
    	?>
    	
 </head>

  	<body>

		<?php include("../../assets/inc/navbar.php") ?>

		

    	<!-- Let the container begin! -->

		<div class="container">

			<div class="row">

				

				<?php include("../../assets/inc/navlist.php") ?>

				

	   			<div class="span9">		

	       			<div class="well">

          				<h3>Star Wars</h3>

           			</div>

         		</div>

		           	

		       <div class="span2">	

					<div class="thumbnail">				      		

						<img src="Star.Wars.jpg" alt="thumbnail">					</div>

			  </div><br />

					  

				<div class="span4">
				
				
				

				

			    	<div class="well">

			      		<h3>Club Information</h3>

			      		<p>The world and history of Star Wars is vast and deep. Our goal is to study and create an understanding of all things pertaining to Star Wars.<br> Activities like social service is an objective of ours, not just fun. </p>

			    	</div>

			    	<div class="well">

			      		<h3>How to Join</h3>

		      		  <p>Anyone, new fan or old, experts to novices, padawans to jedi, are all welcome to join the studying and fun of our club. </p>

			    	</div>
					
					<div class="well">

   		<h3>When we meet</h3>

		      		  <p> <strong><u>Star Wars Club</u></strong> - Be a part of the Star Wars Club! Meetings are each 
					  <strong>Wednesday at 3:00 p.m.</strong> in Mr. Chidester's classroom (#507). 
					  <br>
			    	</div>
				
					
<div class="well">

   		<h3>Meetings</h3>

		      		  <p>To be announced.</p>

			    	</div>
				</div>

		           			

				<div class="span3">
					<div class="well">
						<h5>Advisor</h5>
						<ul class="nav nav-list">
							<li><a href="../../faculty/Chidester-Johnathan/index.php">Mr. Chidester</a></li>	
				 		</ul>
				 	</div>
				  <div class="well">
					<h5>Club Presindency</h5>
					  <ul class="nav nav-list">
						  <li>
						    <div align="left">Presidents- <br><strong>Trevalyn Larson</strong><br><strong>Maxwell Arter</strong></div>
						  </li>
						  
					  </ul>
					</div>
				</div>
					<?php if(isset($_SESSION['game_username'])){ ?>
<!--Easter Egg -->
				<style>
					.star {
						width: 52px;
						height: 67px;
					}
				</style>
				
        <div class="span1">
            <a href="/game/eggs/swimmingeggs10234.php"><img class="star" src="/game/img/deathstar.png"></a>
        </div>
        <?php } ?>
     <!--End Easter Egg -->
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

