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

          				<h3>Year 2010-2011 Quarter 3</h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.1.25.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.1.20.11/bin/images/thumb/DSC_1133.jpg" width="160px" height="200px" alt="">
								<div class="imglabel">Crowd 1/20/11</div>
                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/FreedomAssembly/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/FreedomAssembly/bin/images/thumb/DSC_2213.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Freedom Assembly</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.1.25.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.1.25.11/bin/images/thumb/DSC_2010.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 1/25/11</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.1.26.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.1.26.11/bin/images/thumb/DSC_0314.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 1/26/11</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.1.28.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.1.28.11/bin/images/thumb/DSC_0003.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 1/28/11</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Most Preferred/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/Most Preferred/bin/images/thumb/DSC_0206.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Most Preferred</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.2.9.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.2.9.11/bin/images/thumb/DSC_0353.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 2/9/11</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Sweethearts/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/Sweethearts/bin/images/thumb/sweethearts_065.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Sweethearts</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Pepassembly.2.10.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/Pepassembly.2.10.11/bin/images/thumb/DSC_0540.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Pep Assembly 2/10/11</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.2.18.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.2.18.11/bin/images/thumb/DSC_1194.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 2/18/11</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd.2.19.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd.2.19.11/bin/images/thumb/DSC_1649.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 2/19/11</div>

                          </a>

                      </li>
                        
                        
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/playoff crowd/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/playoff crowd/bin/images/thumb/DSC_5136.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Playoff Crowd</div>

                          </a>

                      </li>
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

