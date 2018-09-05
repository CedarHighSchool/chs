<?php $thisPage="gallery"; ?>
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
          				<h3>Cool Building</h3>
           			</div>
         		</div>
				
	   			<div class="span9">	
	   				<!-- Perdy slide show -->
	    			<div id="myCarousel" class="carousel slide">
	            		<div class="carousel-inner">
	              			<div class="item active">
	                			<img src="/assets/img/bootstrap-mdo-sfmoma-01.jpg" alt="">
	                			<div class="carousel-caption">
	                  				<h4>First Thumbnail label</h4>
	                  				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	                			</div>
	              			</div>
	              			<div class="item">
	                			<img src="/assets/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
	                			<div class="carousel-caption">
	                  				<h4>Second Thumbnail label</h4>
	                  				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	                			</div>
	              			</div>
	              			<div class="item">
	                			<img src="/assets/img/bootstrap-mdo-sfmoma-03.jpg" alt="">
	                			<div class="carousel-caption">
	                  				<h4>Third Thumbnail label</h4>
	                  				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	                			</div>
	              			</div>
	            		</div>
	            		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	            		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	       			</div><!--/slideshow -->
	       
      				<!-- Begin content below slideshow -->
					<div class="row-fluid">    
	        			<div class="span9">
	        				<div class="well">
		          				<h5>Details</h5>
		           				<p>
		           					Duis egestas porta consectetur. Quisque euismod nisi vitae orci imperdiet euismod. Nulla ut varius tellus. Maecenas vehicula eleifend sollicitudin. Nam non fermentum enim. Vestibulum 
		           					ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque lacinia semper arcu quis ultricies. Sed vel tellus non odio dignissim interdum.
		           				</p>
		           			</div>
	        			</div>
	        			<div class="span3">
	        				<div class="well">
		          				<h5>Navigation</h5>
		           				<ul class="nav nav-list">
		           					<li><a href="/gallery/">Back to Gallery</a></li>
		           					<li><a href="/#">More "Event Type"</a></li>
		           				</ul>
		           			</div>
	        			</div>  
	        			
	   				</div><!--/row-fluid -->
	       			
	   			</div><!--/span9 -->
   			</div><!--/row -->

      		<?php include("../../assets/inc/footer.php") ?>

    	</div> <!-- /container -->

    	<!-- Yummy JavaScrips
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="/assets/js/jquery.js"></script>
    	<script src="/assets/js/bootstrap.js"></script>
    	<script src="/assets/js/bootstrap-carousel.js"></script>

  	</body>
</html>
