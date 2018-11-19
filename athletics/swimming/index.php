<?php $thisPage="athletics"; ?>

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

          				<h3><a href="./">Swimming</a></h3>

           			</div>

         		</div>
                
               <div class="span9">
                	
                    <div id="myCarousel" class="carousel slide">

	            		<div class="carousel-inner">

	              			<div class="item active">

	                			<img src="Swim_Team_2016.jpg" alt="">	              			</div>

<div class="item">

	                			<img src="Swim_Girls_2016.jpg" alt="">	              			</div>

<div class="item">

	                			<img src="Swim_Boys_2016.jpg" alt="">	              			</div> 
                                
            		  </div>
                      
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>

	            		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                        
	    			</div>
                    
                 </div>
		         <div class="span2">	

					<div class="thumbnail">	

						<img src="swimthumb.jpg" alt="" width="160">					</div>

			  </div><br />

				

				<div class="span4">

			    	<div class="well">

			      		<h3>Sports Information </h3>

			      		<p>High School Articles</p>

	      		  </div>

			    	<div class="well">

			      		<h3>About</h3>

			      		<p>Swimming is a winter sport. For more information email coach Coston.</p>

	      		  </div>
                  <div class="well">

		      		<h3>Congratulations </h3><p><strong>2nd Place State Champions!</strong>

			      		</strong>
		      		<p><strong>State Swim Winners</strong> <p><strong>2nd Place Women's 4x100 Free Relay</strong>--Aspen, Amanda, Katrina, Elisa<br> 
			      		  <strong>2nd Place Men's Medley Relay</strong>--Calvin Alex, Jedd, Felix<br>
			      		  <strong>5th Place 100 Free</strong>--Calvin<br> 
			      		  <strong>3rd Place 100 Breast</strong>--Garret Dotson<br>
			      		  <strong>3rd Place 400 Men's 4 x 100 Free Relay</strong>--Alex, Garrett, Carson, Jedd<br>
			      		  <strong>1st Place 100 Breast</strong>--Felix<br>
			      		  <strong>1st Place 100 Fly</strong>--Kate<br>
			      		  <strong>1st Place 200 IM</strong>--Kate<br>
			      		  <strong>2nd Place Women's Medley Relay</strong>--Elisa, Kate, Kristen, Brei<br>
			      		  <strong>2nd Place Women's 200 Free Relay</strong>--Brei, Kate, Kristen, Amanda<br>
			      		  <strong>2nd Place 50 Free</strong>--Kristen<br> 
			      		  <strong>3rd Place 100 Free</strong>--Kristen<br>
			      		  <strong>4th Place 200 IM</strong>--Alex<br>
			      		  <strong>3rd Place 100 Back</strong>--Alex<br>
			      		  <strong>6th Place 50 Free</strong>--Brei<br>
			      		  <strong>3rd Place 100 Breast</strong>--Brei<br>
			      		  <strong>4th Place 100 Back</strong>--Elisa<br>
			      		  <strong>6th Place 100 Back</strong>--Katrina<br> 
			      		  <strong>4th Place 100 Free</strong>--Amanda</p>
			      		<p>Go Redmen!	      		  </p>
                  </div>

				</div>

		           			

				<div class="span3">

					<div class="well">

						<h5>Pages</h5>

						<ul class="nav nav-list">

							<li class="active"><a href="./">Home</a></li>

							<li><a href="https://drive.google.com/file/d/1L75E_dAgJxKsmblTwUws8g3pntUYMeHY/view?usp=sharing" target="_blank">Schedule</a></li>

						  <li><a href="https://docs.google.com/a/ironmail.org/document/d/1H_eaSoLBxP47DvF47R2ZS0_XiEpcGY9BIHQkU-c8faw/edit">Boys Roster</a></li>

						  <li><a href="https://docs.google.com/a/ironmail.org/document/d/1pbj4hoFEC-uK_uQYkwfKRaX740yHYcQkUgU1gxVDE3c/edit">Girls Roster</a></li>

						  <li><a href="gallery.php">Pictures</a></li>
						  <li><a href="http://www.uhsaa.org/swim/">UHSAA Swim</a></li>

						  <li><a href="http://cedarswim.blogspot.com/" target="_blank">Website</a></li>

				 		</ul>

				 	</div>

                    <div class="well">

						<h5>Coaches</h5>

						<ul class="nav nav-list">

							<li>Richard Coston</li>	

				 		    <li><a href="mailto:richard.coston@ironmail.org">richard.coston@ironmail.org</a></li>
						</ul>

			 	  </div>

				</div>
				<?php if(isset($_SESSION['game_username'])){ ?>
					<!-- egg begins -->
					<div class="span1">
						<a href="/game/eggs/numerouno.php"><img src="/game/img/yoshiegg.png"></a>
					</div>
					<!-- finish egg -->
				<?php } ?>
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

