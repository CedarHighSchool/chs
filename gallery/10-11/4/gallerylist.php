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

          				<h3>Year 2010-2011 Quarter 4</h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Sterling.Scholar.Banquet/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/Sterling.Scholar.Banquet/bin/images/thumb/DSC_0002.jpg" width="160px" height="200px" alt="">
							<div class="imglabel">Sterling Scholar Banquet</div>
                          </a>                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/BattleOfTheSexes/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/BattleOfTheSexes/bin/images/thumb/DSC_0468.jpg" width="160px" height="200px" alt="">
                            <div class="imglabel">Battle of the Sexes</div>
                          </a>                      </li>
                        
<li class="span2">

                            <a href="../../../Slideshows_2009-2010/Elections.assembly/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/Elections.assembly/bin/images/thumb/DSC_1605.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Elections Assembly</div>
                      </a></li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/SterlingScholarAwards/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/SterlingScholarAwards/bin/images/thumb/DSC_0071.jpg" width="160px" height="200px" alt="">
                            <div class="imglabel">Sterling Scholar Awards</div>
                            </a>                        </li>
                        
<li class="span2">

                            <a href="../../../Slideshows_2009-2010/Harvy/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/Harvy/bin/images/thumb/DSC_0280.jpg" width="160px" height="200px" alt="">
                            <div class="imglabel">Harvey</div>
                            </a>                        </li>
                        
                  <li class="span2">

                            <a href="../../../Slideshows_2009-2010/SUU.GraphicArtsFair/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/SUU.GraphicArtsFair/bin/images/thumb/IMG_7079.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">SUU Graphics Arts Fair</div>
                            </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/ProstartNationals/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/ProstartNationals/bin/images/thumb/ResizedImage.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Pro Start Nationals</div>
    </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Grads Dance/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/Grads Dance/bin/images/thumb/DSC_0407.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Grads Dance 2011</div>
                            </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/graduation_2011/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/graduation_2011/bin/images/thumb/DSC_4019.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Graduation 2011</div>
    </a>                        </li>
                        
                        

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

