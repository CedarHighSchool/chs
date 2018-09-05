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

          				<h3>Gallery Year 2009-2010 Quarter 3</h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/arsenci_OldLace/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb1.png" width="96" height="64" alt="">
								<div class="imglabel">Arsenic &amp; Old Lace</div>
                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/orchestra_concert_3_12_10/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb2.png" width="96" height="64" alt="">
                                <div class="imglabel">Orchestra 3/12/10</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/upay_dance_2009/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb3.png" width="96" height="64" alt="">
                                <div class="imglabel">U'Pay Dance</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/battle_of_sexes_2010/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb4.png" width="96" height="64" alt="">
                                <div class="imglabel">Battle of the Sexes</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/sterlingscholar_assembly_2009/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb5.png" width="96" height="64" alt="">
                                <div class="imglabel">Sterling Scholar</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Most Preferred/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb6.png" width="96" height="64" alt="">
                                <div class="imglabel">Most Preferred</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Sweethearts/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb7.png" width="96" height="64" alt="">
                                <div class="imglabel">Sweethearts</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/fbla2010/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb8.png" width="96" height="64" alt="">
                                <div class="imglabel">FBLA 2010</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/jazzband_concert_Spring2010/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb9.png" width="96" height="64" alt="">
                                <div class="imglabel">Jazz Band Concert</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/choir_3_17_10/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb10.png" width="96" height="64" alt="">
                                <div class="imglabel">Choir 3/17/10</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/construction_3_19_10/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb11.png" width="96" height="64" alt="">
                                <div class="imglabel">Construction </div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Cross Country 2009/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb12.png" width="96" height="64" alt="">
                                <div class="imglabel">Cross Country</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd_2_3_10/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb13.png" width="96" height="64" alt="">
                                <div class="imglabel">Crowd 2/3/10</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/ProstartNationals/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb14.png" width="96" height="64" alt="">
                                <div class="imglabel">ProStart Nationals</div>

                          </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/MORP/index.html" class="thumbnail">

                                <img src="09-10qu3/thumb15.png" width="96" height="64" alt="">
                                <div class="imglabel">Morp</div>

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

