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

          				<h3>Gallery :: Year 2010 - 2011 Q1</h3>

       			  </div>
                  <ul class="thumbnails">
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/FCCLA_Dance/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/FCCLA_Dance/bin/images/thumb/DSC_0134.jpg" width="160px" height="200px" alt="">
                          <div class="imglabel">FCCLA Dance</div>
                          </a>                        </li>
                        
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/Welcome back assembly/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/Welcome back assembly/bin/images/thumb/DSC_0331.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Welcome Back Assembly</div>
                          </a>                        </li>
                        
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/b2sassemb_8_25_10/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/b2sassemb_8_25_10/bin/images/thumb/DSC_0258.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Homecoming week 2010</div>
                          </a>                        </li>
                        
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/white wash C/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/white wash C/bin/images/thumb/DSC_00019.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Washing the &quot;C&quot; 2010</div>
                          </a>                        </li>
                        
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/powder puff/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/powder puff/bin/images/thumb/DSC_0006.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">PowderPuff 2010</div>
                          </a>                        </li>
                        
                      <li class="span2">

                        <a href="../../../Slideshows_2009-2010/homecoming assembly/index.html" class="thumbnail">

                        <img src="../../../Slideshows_2009-2010/homecoming assembly/bin/images/thumb/DSC_0400.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Homecoming</div>
                    </a>                        </li>
                        
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/HC.crowd/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/HC.crowd/bin/images/thumb/DSC_0741.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">H.C. Crowd</div>
                          </a>                        </li>
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/spirit night/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/spirit night/bin/images/thumb/DSC_0040.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Spirit Night</div>
                          </a>                        </li>
                        
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/Wizard of Oz/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/Wizard of Oz/bin/images/thumb/DSC_0007.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Wizard of Oz</div>
                          </a>                        </li>
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/crowd_10_12_10/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/crowd_10_12_10/bin/images/thumb/DSC_0033.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Crowd 10/12/10</div>
                          </a>                        </li>
                        
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/crowd_9_9_10/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/crowd_9_9_10/bin/images/thumb/DSC_0930.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Crowd 9/9/10</div>
                          </a>                        </li>
                        
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/crowd_9_24_10/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/crowd_9_24_10/bin/images/thumb/DSC_0202.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Crowd 9/24/10</div>
                          </a>                        </li>
                        
                      <li class="span2">

                          <a href="../../../Slideshows_2009-2010/assembly 11_8_10/index.html" class="thumbnail">

                              <img src="../../../Slideshows_2009-2010/assembly 11_8_10/bin/images/thumb/DSC_0407.jpg" width="160px" height="200px" alt="">
                              <div class="imglabel">Assembly 11/8/10</div>
                    </a>                        </li>
                            
                          <li class="span2">

                            <a href="../../../Slideshows_2009-2010/back2schoolbash_9_8_10/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2009-2010/back2schoolbash_9_8_10/bin/images/thumb/DSC_0020.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Back to School Bash</div>
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

