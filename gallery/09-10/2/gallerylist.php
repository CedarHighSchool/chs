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

          				<h3>Gallery Year 2009-2010 Quarter 2</h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                          <a href="../../../Slideshows_2009-2010/FCCLA_Dance/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/FCCLA_Dance/bin/images/thumb/DSC_0182.jpg" width="160px" height="200px" alt="">
							  <div class="imglabel">FCCLA Dance</div>
                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/storybook.parade/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/storybook.parade/bin/images/thumb/IMG_7398.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Story Book Parade</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/prostart_gingerbread_houses/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/prostart_gingerbread_houses/bin/images/thumb/DSC_0558.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Pro Start Ginger Bread</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/redmen_ruckus_2009/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/redmen_ruckus_2009/bin/images/thumb/DSC_0055.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Redmen Ruckus 2010</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/pepassembly_1_27_10/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/pepassembly_1_27_10/bin/images/thumb/DSC_0316.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Pep Assembly 1/27/10</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowdpics_cvgame/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowdpics_cvgame/bin/images/thumb/DSC_0858.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd Pics CV Game</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/one_act_plays/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/one_act_plays/bin/images/thumb/IMG_4332.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">One Act Plays 2010</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/sadie_hawkins_2009/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/sadie_hawkins_2009/bin/images/thumb/DSC_1087.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Sadie Hawkins</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/artshow_2010/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/artshow_2010/bin/images/thumb/DSC_0404.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Artshow </div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/orchestra_12_8_09/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/orchestra_12_8_09/bin/images/thumb/DSC_0403.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Orchestra 12/8/09</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/choir_concert_12_14_09/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/choir_concert_12_14_09/bin/images/thumb/DSC_0911.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Choir  12/14/09</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/battle of the bell/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/battle of the bell/bin/images/thumb/DSC_0178.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Battle of the Bell</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/band-palyoffs/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/band-palyoffs/bin/images/thumb/DSC_6556.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Band Playoffs</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/pepband_1_13_10/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/pepband_1_13_10/bin/images/thumb/DSC_0163.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Pep Band 1/13/10</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd_1_5_10/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/crowd_1_5_10/bin/images/thumb/DSC_0329.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Crowd 1/5/10</div>

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

