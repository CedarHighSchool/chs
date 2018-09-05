<?php $thisPage="gallery"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../../../assets/inc/headtag.php") ?>

  	</head>

  	<body>

		<?php include("../../../assets/inc/navbar.php") ?>

		

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

							$year = "12-13";

							$quarter = "1";

                        }

                    }

                ?>

                

	   			<div class="span9">		

	       			<div class="well">

          				<h3>Gallery // Year 2012-13 Quarter 4</h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../slideshows_2012_13/jr_prom/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/jr_prom/content/images/thumb/DSC_1495.jpg" width="160px" height="200px" alt="">
								<div class="imglabel">Junior Prom</div>
                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../slideshows_2012_13/jr.prom.royalty.2013/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/jr.prom.royalty.2013/content/images/thumb/DSC_9778.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Junior Prom Royalty</div>

                          </a>

                      </li>
                        
                        
                        <li class="span2">

                            <a href="../../../slideshows_2012_13/sterling_scholars_2012-2013/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/sterling_scholars_2012-2013/content/images/thumb/DSC_8581.jpg" width="70px" height="200px" alt="">
                                <div class="imglabel">Sterling Scholar</div>

                          </a>

                      </li>
                      
                      <li class="span2">

                            <a href="../../../slideshows_2012_13/End of Year/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/End of Year/content/images/thumb/IMG_8189.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">
                                  <div class="imglabel">End of Year Slideshow</div>
                                </div>

                        </a>

                      </li>
                        <li class="span2">

                            <a href="../../../slideshows_2012_13/graduation2013/index.html" class="thumbnail">

                                <img src="../../../slideshows_2012_13/graduation2013/content/images/thumb/DSC_1814.jpg" width="160px" height="200px" alt="">
                            <div class="imglabel">
                                  <div class="imglabel">Graduation 2013</div>
                            </div>

                        </a>

                      </li>
                      
                      <li class="span2">

                            <a href="../../../Slideshows_2013_14/streling scholar/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/streling scholar/content/images/thumb/DSC_6283.jpg" width="70px" height="200px" alt="">
                                <div class="imglabel">Sterling Scholar</div>

                          </a>

                      </li>
                      
                      
                    </ul>
	   			</div>

	   			<!--teacher grid -->		

				<div class="row span9">

                	<div class="row-fluid">

                    	<div class="row span9">

                            <div class="well">

                                Go <a href="../../index.php?passyear=12-13">back</a>.

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

