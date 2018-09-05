<?php $thisPage="home"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("assets/inc/headtag.php") ?>
<style type="text/css">
<!--
.style9 {color: #990000}
.style10 {font-size: 24px}
.style12 {font-size: 13px; color: #333333; }
.style13 {font-size: 18px}
.style14 {
	font-size: 24px;
	font-weight: bold;
}
.hr2 {
	width: 50%;
}
-->
</style>
</head>

  	<body>

		<?php include("assets/inc/navbar.php") ?>

    	<!-- Let the container begin! -->

		<div class="container">
			<div class="row">
            
			  <?php include("assets/inc/navlist.php") ?>
			  <span class="span9">	

	   				<!-- Perdy slide show -->

	    			<div id="myCarousel" class="carousel slide">

	            		<div class="carousel-inner">

	              			<div class="item active">
                            
                            	 <img src="assets/img/Banner/HomePagePic1.jpg" alt="">	              			</div>
                                 <div class="item">

	                			<img src="assets/img/Banner/HomePagePic2.jpg" alt="">	              			</div>

<div class="item">

	                			<img src="assets/img/Banner/HomePagePic3.jpg" alt="">	              			</div>

<div class="item">

	                			<img src="assets/img/Banner/HomePagePic4.jpg" alt="">	              			</div>

<div class="item">

	                			<img src="assets/img/Banner/HomePagePic5.jpg" alt="">	              			</div>

<div class="item">

	                			<img src="assets/img/Banner/HomePagePic6.jpg" alt="" width="875" height="300">	              			</div>

            		  </div>
                      
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>

	            		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                        
	    			</div><!--/slideshow -->

      				<!-- Begin content below slideshow -->

					<div class="row-fluid">

					  <div class="span6">
						  
                
                     	
               
                        
	        			</div>

	   				</div><!--/row-fluid -->

	       			

   			  </span><!--/span9 -->

	    </div><!--/row -->

   			<?php include("assets/inc/footer.php") ?>
            
            



    	</div> <!-- /container -->



    	<!-- Yummy JavaScrips

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="assets/js/jquery.js"></script>

    	<script src="assets/js/bootstrap.js"></script>

    	<script src="assets/js/bootstrap-carousel.js"></script>
        
        <center>
        <script type="text/javascript">
		
		$(document).ready(function() {
			getCount("Freshmen.avi");
			getCount("10-11-12.mov");
			getCount("CHS - What Every Senior Must Know.avi");
		});
		
		function getCount(url) {
			console.log("Calling : " + url);
			$.ajax({
				url: "http://www.noahroufus.com/chs/getCounter.php",
				type: "POST",
				data: {"url": url}
			}).success(function(data){
				console.log(data);
				$("a[href=\"" + url + "\"]").text($("a[href=\"" + url + "\"]").html() + " (" + data + " views)");
			});
			
			$("a[href=\"" + url + "\"]").click(function(e) {
				
				$.ajax({
					url: "http://www.noahroufus.com/chs/addCounter.php",
					type: "POST",
					data: {"url": url}
				}).success(function() {
					window.location.href = "http://chs.ironk12.org/" + url;
				});
				
				e.preventDefault();
			});
		}
		</script>
		</center>
</body>
</html>
