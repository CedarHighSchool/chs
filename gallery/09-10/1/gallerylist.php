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

          				<h3>Gallery Year 2009-2010 Quarter 1 </h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/homecoming_2009/index.html" class="thumbnail">

                                <img src="thumb/TH1.png" width="96" height="64" alt="">
								<div class="imglabel">Homecoming Dance</div>
                          </a>

                      </li>
                        
          <li class="span2">

                            <a href="../../../Slideshows_2009-2010/homecoming.dress up/index.html" class="thumbnail">

                                <img src="thumb/TH2.png" width="96" height="64" alt="">
                            <div class="imglabel">Homecoming Dress-up</div>

            </a>

                      </li>
                        
          <li class="span2">

                            <a href="../../../Slideshows_2009-2010/powderpuff_2009/index.html" class="thumbnail">

                                <img src="thumb/TH3.png" width="96" height="64" alt="">
                                <div class="imglabel">PowderPuff 2009</div>

            </a>

                      </li>
                        
<li class="span2">

                            <a href="../../../Slideshows_2009-2010/white_wash_C_2009/index.html" class="thumbnail">

                                <img src="thumb/TH4.png" width="96" height="64" alt="">
                            <div class="imglabel">White Washing the 'C'</div>

          </a>

                      </li>
                        
          <li class="span2">

                            <a href="../../../Slideshows_2009-2010/joseph_fall2009/index.html" class="thumbnail">

                                <img src="thumb/TH5.png" width="96" height="64" alt="">
                            <div class="imglabel">Musical 2009</div>

            </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/HC.crowd/index.html" class="thumbnail">

                                <img src="thumb/TH6.png" width="96" height="64" alt="">
                            <div class="imglabel">Homecoming Crowd</div>

                          </a>

                      </li>
                        
          <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Construction 10-2/index.html" class="thumbnail">

                                <img src="thumb/TH7.png" width="96" height="64" alt="">
                            <div class="imglabel">Construction 2009</div>

            </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/homecoming_decorating_2009/index.html" class="thumbnail">

                                <img src="thumb/TH8.png" width="96" height="64" alt="">
                            <div class="imglabel">Homecoming Decor</div>

                          </a>

                      </li>
                        
          <li class="span2">

                            <a href="../../../Slideshows_2009-2010/spirit_night_2009/index.html" class="thumbnail">

                                <img src="thumb/TH9.png" width="96" height="64" alt="">
                            <div class="imglabel">Spirit Night 2009</div>

            </a>

                      </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows_2009-2010/homecoming assembly/index.html" class="thumbnail">

                                <img src="thumb/TH10.png" width="96" height="64" alt="">
                            <div class="imglabel">Homecoming Assembly</div>

                          </a>

                      </li>
                        
<li class="span2">

                            <a href="../../../Slideshows_2009-2010/back_to_school_bash_2009/index.html" class="thumbnail">

                                <img src="thumb/TH11.png" width="96" height="64" alt="">
                            <div class="imglabel">Back to School Bash</div>

          </a>

                      </li>
                        
          <li class="span2">

                            <a href="../../../Slideshows_2009-2010/Welcome back assembly/index.html" class="thumbnail">

                                <img src="thumb/TH12.png" width="96" height="64" alt="">
                            <div class="imglabel">Welcome Back</div>

            </a>

                      </li>
                        
          <li class="span2">

                            <a href="../../../Slideshows_2009-2010/crowd_9_14_09/index.html" class="thumbnail">

                                <img src="thumb/TH13.png" width="96" height="64" alt="">
                            <div class="imglabel">9/14/09 Crowd</div>

            </a>

                      </li>
                        
          <li class="span2">

                            <a href="../../../Slideshows_2009-2010/pep assembly_9_4_09/index.html" class="thumbnail">

                                <img src="thumb/TH14.png" width="96" height="64" alt="">
                            <div class="imglabel">Pep Assembly 9/4/09</div>

            </a>

                      </li>
                        
          <li class="span2">

                            <a href="../../../Slideshows_2009-2010/homecoming_royalty_2009/index.html" class="thumbnail">

                                <img src="thumb/TH15.png" width="96" height="64" alt="">
                            <div class="imglabel">Homecoming Royalty</div>

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

