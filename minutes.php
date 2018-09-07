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
	font-weight: normal;
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
                            

<div class="span9">		

	       			<div class="well">

          				<h3 align="center">School Land Trust 2016-2017</h3>

       			  </div>

         		</div>
                </div>
                </div>

   <div class="well">
		  <h3 align = "center"> Minutes<br></h3>
		  <p><center><a href ="trustland/2016_2017/minutes/Minutes (draft) 11-15-16.pdf"> Draft </a></h3>
   	<p><center><a href ="trustland/2016_2017/minutes/Approved Minutes 10-5-16.pdf"> Approved </a></h3>

				              			
        
	  <!-- /container -->



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
