<?php $thisPage="finearts"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cedar High School</title>
    	<?php include("../assets/inc/headtag.php") ?>
  	</head>
  	<body>
		<?php include("../assets/inc/navbar.php") ?>
		
    	<!-- Let the container begin! -->
		<div class="container">
			<div class="row">
				
				<?php include("../assets/inc/navlist.php") ?>
				
	   			<div class="span9">		
	       			<div class="well">
          				<h3>Fine Arts</h3>
           			</div>
         		</div>
		
				<!-- art grid -->
				<div class="row span6">	
       				<ul class="thumbnails">
						<li class="span2">
							<a href="3d-animation/index.php" class="thumbnail">
					      		<img src="3d-animation/profile.jpg" alt="">
					      		<div class="imglabel">
					      			3D Animation
					      		</div>
					      	</a>
						</li>
						<li class="span2">
							<a href="art/index.php" class="thumbnail">
					      		<img src="art/profile.jpg" alt="">
					      		<div class="imglabel">
					      			Art
					      		</div>
					      	</a>
						</li>
						<li class="span2">
							<a href="band/index.php" class="thumbnail">
					      		<img src="band/profile.jpg" alt="">
					      		<div class="imglabel">
					      			Band
					      		</div>
					      	</a>
						</li>
                        <li class="span2">
							<a href="ceramics/index.php" class="thumbnail">
					      		<img src="ceramics/profile.jpg" alt="">
					      		<div class="imglabel">
					      			Ceramics
					      		</div>
					      	</a>
						</li>
                        <li class="span2">
							<a href="choir/index.php" class="thumbnail">
					      		<img src="choir/profile.jpg" alt="">
					      		<div class="imglabel">
					      			Choir
					      		</div>
					      	</a>
						</li>
                        <li class="span2">
							<a href="drama/index.php" class="thumbnail">
					      		<img src="drama/profile.jpg" alt="">
					      		<div class="imglabel">
					      			Drama
					      		</div>
					      	</a>
						</li>
                        <li class="span2">
							<a href="graphics/index.php" class="thumbnail">
					      		<img src="graphics/profile.jpg" alt="">
					      		<div class="imglabel">
					      			Graphics
					      		</div>
					      	</a>
						</li>
                        <li class="span2">
							<a href="orchestra/index.php" class="thumbnail">
					      		<img src="orchestra/profile.jpg" alt="">
					      		<div class="imglabel">
					      			Orchestra
					      		</div>
					      	</a>
						</li>
					</ul>	
           		</div>
				<!--/art grid -->   
				
				<!--sort-->
				<div class="span3">
					<div class="well">
						<h5>Sorting Options</h5>
						<ul class="nav nav-list">
							<li><a href="#">Alphebetical</a></li>
							<li><a href="#">Something Else?</a></li>		
				 		</ul>
					</div>
				</div>
				<!--/sort-->

   			</div><!--/row -->

      		<?php include("../assets/inc/footer.php") ?>

    	</div> <!-- /container -->

    	<!-- Yummy JavaScrips
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="assets/js/jquery.js"></script>
    	<script src="assets/js/bootstrap.js"></script>

  	</body>
</html>
