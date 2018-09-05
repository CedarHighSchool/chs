<?php $thisPage="gallery"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../../../assets/inc/headtag.php") ?>

  	</head>

  	<body>

		<?php include("../../../assets/inc/navbar.php") ?>

		<style type="text/css">
a.thumbnail { height: 130px; }
</style>

    	<!-- Let the container begin! -->

		<div class="container">

			<div class="row">

				

				<?php include("../../../assets/inc/navlist.php") ?>



                <?php

                    if(isset($_GET)) {

                        if (isset($_GET['year']) && isset($_GET['quarter'])) {

							$year = $_GET['year'];

							$quarter = $_GET['quarter'];

                        }else {

							$year = "14-15";

							$quarter = "1";

                        }

                    }

                ?>

                

	   			<div class="span9">		

	       			<div class="well">

          				<h3>2017 Quarter 4</h3>

           			</div>
                                        <ul class="thumbnails">
                        <li class="span2">
                         <a href="Prom_Assembly/index.html" class="thumbnail">
						  <img src="PromAssembly_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">Prom Assembly</div></a>
                          
                          <li class="span2">
                         <a href="../../../slideshows_2016_17/ElectionsAssembly/index.html" class="thumbnail">
						  <img src="ElectionsAssembly_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">Elections Assembly</div></a>
                          
                          <li class="span2">
                         <a href="HonorsSociety/index.html" class="thumbnail">
						  <img src="NHS_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">Honors Society</div></a>
                          <li class="span2">
                         <a href="HonorsSociety_Seniors/index.html" class="thumbnail">
						  <img src="NHS_Seniors_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">NHS New Seniors</div></a>
                          
                          <li class="span2">
                         <a href="HonorsSociety_Juniors/index.html" class="thumbnail">
						  <img src="NHS_Juniors_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">NHS New Juniors</div></a>
                          
                          <li class="span2">
                         <a href="HonorsSociety_Sophomores/index.html" class="thumbnail">
						  <img src="NHS_Sophomores_Thumb.jpg" width="130px" height="87px" alt=""><div class="imglabel">NHS New Sophomores</div></a>
                          
                           <li class="span2">
                         <a href="../../../slideshows_2016_17/graduation2017/index.html" class="thumbnail">
						  <img src="../graduation_thumbnail.png" width="130px" height="87px" alt="graduation 2017">
						  <div class="imglabel">Graduation 2017</div></a>
                        
                  </ul>
	   			</div>

	   			<!--teacher grid -->		

				<div class="row span9">

                	<div class="row-fluid">

                    	<div class="row span9">

                            <div class="well">

                               Go <a href="http://chs.ironk12.org/gallery/">back</a>.
                                <!--<ul class="thumbnails">

                                    <li class="span2">

                                        <a href="./gallerylist.php?year=1213&quarter=1" class="thumbnail">

                                            <img src="../assets/img/logo.png" width="160px" height="200px" alt="">

                                        </a>

                                    </li>

                                </ul>/-->

                            </div>

                        </div>

                	</div>
           		</div><!--/teacher grid --> 
			</div><!--/row-->



      		<?php include("../../../assets/inc/footer.php") ?>
            
        </div><!-- /container -->



    	<!-- Yummy JavaScrips

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="../../../assets/js/jquery.js"></script>

    	<script src="../../../assets/js/bootstrap.js"></script>

    	

  	</body>

</html>

