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

          				<h3>Year 2010-2011 Q2</h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/MORP/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/MORP/bin/images/thumb/DSC_0300.jpg" width="160px" height="200px" alt="">
								<div class="imglabel">Morp</div>
                          </a>                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/storybook.parade/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/storybook.parade/bin/images/thumb/IMG_7386.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Story Book Parade</div>
                          </a>                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Sadie Hawkins/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/Sadie Hawkins/bin/images/thumb/DSC_0415.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Sadie Hawkins 2010</div>
                      </a>                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/redmen.ruckus/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/redmen.ruckus/bin/images/thumb/DSC_1023.jpg" width="160" height="160" alt="">
                                <div class="imglabel">Redmen Ruckus 2010</div>
                      </a>                      </li>
                        
                        <li class="span2">
                            <a href="../../../Slideshows_2009-2010/crowd_10_30_10/index.html" class="thumbnail"><img src="../../../Slideshows_2009-2010/crowd_10_30_10/bin/images/thumb/DSC_0826.jpg" width="160px" height="200px" alt="">
                            <div class="imglabel">Crowd 10/30/10</div></a>                   </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/pep rally_10_28_10/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/pep rally_10_28_10/bin/images/thumb/DSC_0009.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Pep Assembly 10/28/10</div>
                            </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.11_30_10/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.11_30_10/bin/images/thumb/DSC_0912.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 11/30/10</div>
                            </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd_10_25_10/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd_10_25_10/bin/images/thumb/DSC_0235.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 10/25/10</div>
                      </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd_10_21_10/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd_10_21_10/bin/images/thumb/DSC_0391.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 10/21/10</div>
                            </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowdpics_cvgame/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowdpics_cvgame/bin/images/thumb/DSC_0645.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd Pics CV Game 2010</div>
                            </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.12.14.10/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.12.14.10/bin/images/thumb/DSC_0495.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 12/14/10</div>
                            </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/sterlingscholar_assembly_2009/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/sterlingscholar_assembly_2009/bin/images/thumb/DSC_0716.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Sterling Scholar Assembly</div>
                            </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Gingerbread Houses/index.html" class="thumbnail">

                            <img src="../../../Slideshows_2009-2010/Gingerbread Houses/bin/images/thumb/DSC_0005.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Gingerbread Houses </div>
                            </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.1.5.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.1.5.11/bin/images/thumb/DSC_0088.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 1/5/11</div>
                            </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.1.6.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.1.6.11/bin/images/thumb/DSC_0332.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 1/6/11</div>
                      </a>                        </li>
                            
                            <li class="span2">

                            <a href="../../../Slideshows_2009-2010/AfterGameDance.1.7.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/AfterGameDance.1.7.11/bin/images/thumb/DSC_0726.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">After Game Dance 1/7/11</div>
                      </a>                        </li>
                            
                      <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.1.7.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.1.7.11/bin/images/thumb/DSC_0494.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 1/7/11</div>
                      </a>                        </li>
                            
                            
                            <li class="span2">

                            <a href="../../../Slideshows_2009-2010/pep assembly.1.5.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/pep assembly.1.5.11/bin/images/thumb/DSC_0003.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Pep Assembly </div>
                      </a>                        </li>
                            
                            <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.1.12.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.1.12.11/bin/images/thumb/DSC_0533.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 1/12/11</div>
                      </a>                        </li>
                            
                            <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.1.11.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.1.11.11/bin/images/thumb/DSC_0040.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 1/11/11</div>
                      </a>                        </li>
                            
                            <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.1.14.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.1.14.11/bin/images/thumb/DSC_0912.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 1/14/11</div>
                      </a>                        </li>
                            
                            <li class="span2">

                            <a href="../../../Slideshows_2009-2010/sterling scholar/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/sterling scholar/bin/images/thumb/DSC_0002.jpg" width="70px" height="180px" alt="">
                                <div class="imglabel">Sterling Scholars </div>
                      </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/pepassembly.2.25.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/pepassembly.2.25.11/bin/images/thumb/DSC_1692.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Pep Assembly 2/25/11</div>
                      </a>                        </li>
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

