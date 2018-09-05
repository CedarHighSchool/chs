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

          				<h3>Gallery // Year 2011-12 Quarter 3</h3>

           			</div>
                  <ul class="thumbnails">
                      <li class="span2">

                          <a href="../../../Slideshows2011_12/Birthday_Dance/index.html" class="thumbnail">

                              <img src="../../../Slideshows2011_12/Birthday_Dance/bin/images/thumb/DSC_3733.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Birthday Dance</div>
                          </a>                        </li>
                        
                      <li class="span2">

                          <a href="../../../Slideshows2011_12/Bye_Bye_Birdie/index.html" class="thumbnail">

                              <img src="../../../Slideshows2011_12/Bye_Bye_Birdie/bin/images/thumb/DSC_1960.jpg" width="70px" height="200px" alt="">
                              <div class="imglabel">Bye Bye Birdie</div>
                    </a>                        </li>
                        
                      <li class="span2">
                      
                      		<a href="../../../Slideshows2011_12/Redmen_Pride_Breakfast/index.html" class="thumbnail"><img src="../../../Slideshows2011_12/January_Redmen_Pride_Breakfast/bin/images/thumb/DSC_1354.jpg" width="70px" height="200px" alt="">
                          <div class="imglabel">Redmen Pride Breakfast</div>
                    </a>                        </li>
                        
                      <li class="span2">

                          <a href="../../../Slideshows2011_12/challengedayphotos/index.html" class="thumbnail">

                              <img src="../../../Slideshows2011_12/challengedayphotos/bin/images/thumb/110111113153.jpg" width="140px" height="200px" alt="">
                              <div class="imglabel">Challenge Day</div>
                          </a>                        </li>
                  </ul>
	   			</div>

	   			<!--teacher grid -->		

				<div class="row span9">

                	<div class="row-fluid">

                    	<div class="row span9">

                            <div class="well">

                                Go <a href="./index.php?passyear=<?=$year;?>">back</a>.

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

