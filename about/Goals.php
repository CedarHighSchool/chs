<?php $thisPage="about"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../assets/inc/headtag.php") ?>

  	    <style type="text/css">
<!--
.style2 {color: #660000}
-->
        </style>
</head>

  	<body>

		<?php include("../assets/inc/navbar.php") ?>

		

    	<!-- Let the container begin! -->

		<div class="container">

			<div class="row">

				

				<?php include("../assets/inc/navlist.php") ?>

				

				<div class="span9">		

	       			<div class="well">

          				<h3>Goals</h3>

           			</div>

         		</div>


			<div class="span9">		

   			  <div class="well">
				<ul class="nav">
                    <br>
                    <h4>
                   <li  <?php if ($thisPage=="Mission") echo " class=\"active\""; ?>><a href="index.php">About</a></li>  
   				  <li <?php if ($thisPage=="Mission") echo " class=\"active\""; ?>><a href="Mission.php">Mission</a></li>

				  <li  <?php if ($thisPage=="Belief") echo " class=\"active\""; ?>><a href="Belief.php">Belief</a></li>

				  <li  <?php if ($thisPage=="Goals") echo " class=\"active\""; ?>><a href="Goals.php">Goals</a></li>

              	  <li  <?php if ($thisPage=="Framework") echo " class=\"active\""; ?>><a href="Framework.php">Framework</a></li></h4></ul>
                  </div>
       			</div>
   			  <div class="span6">

       			<div class="well">

		          				<h3>Our Goals</h3>

		           				
		           				<p>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; TBA
                                 </p>
		                </div>
   			  </div>

		           		

	   					<!--facstaff navlist-->

   						<div class="span3">

   							<div class="well">

   								<h5>Resources</h5>

   								<ul class="nav nav-list">

   									<li><a href="../academics/">Administration</a></li>	

									<li><a href="map.php">Map</a></li>	

						 		</ul>

   							</div>
                            <div class="well">
                            <h5> Past Accomplishments</h5>
                            <ul class="nav nav-list">
                            <li><a href="2016-2017.php">2016 - 2017</a></li>
                            <li><a href="2015-2016.php">2015 - 2016</a></li>                           
                            <li><a href="2014-2015.php">2014 - 2015</a></li>
                            <li><a href="2013-2014.php">2013 - 2014</a></li>
                            <li><a href="2012-2013.php">2012 - 2013</a></li>
                            <li><a href="2011-2012.php">2011 - 2012</a></li>
                            <li><a href="2010-2011.php">2010 - 2011</a></li>
                            <li><a href="2009-2010.php">2009 - 2010</a></li>
                            <li><a href="2008-2009.php">2008 - 2009</a></li>
                            <li><a href="200-2008.php">2007 - 2008</a></li>
                            </ul>
                            </div>
   						</div>

	   					<!--/facstaff navlist-->	

   						

					</div><!--/row-->

	       			

	   			</div><!--/span9 -->

   			</div><!--/row -->



      		<?php include("../assets/inc/footer.php") ?>



    	</div> <!-- /container -->



    	<!-- Yummy JavaScrips

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="assets/js/jquery.js"></script>

    	<script src="assets/js/bootstrap.js"></script>

    	<script src="assets/js/bootstrap-carousel.js"></script>



  	</body>

</html>

