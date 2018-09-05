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

							$year = "11-12";

							$quarter = "2";

                        }

                    }

                ?>

                

	   			<div class="span9">		

	       			<div class="well">

          				<h3>Gallery <?php echo "// Year $year Quarter $quarter"; ?></h3>

           			</div>
                    <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/challengedayphotos/index.html" class="thumbnail">

                            <img src="../../../Slideshows2011_12/challengedayphotos/bin/images/large/110111094718.jpg" width="140" height="200px" alt="">
								<div class="imglabel">Challenge Day</div>
                      </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/Bye_Bye_Birdie/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/Bye_Bye_Birdie/bin/images/large/DSC_2046.jpg" width="160" height="200" alt="">
                                <div class="imglabel">Bye Bye Birdie</div>
                      </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/Sadies/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/Sadies/bin/images/large/DSC_8812.jpg" width="160px" height="200px" alt="">
                                <div class="imglabel">Sadies</div>
                      </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/ProStart_Cakes_2011/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/ProStart_Cakes_2011/bin/images/large/DSC_8945.jpg" width="160" height="200" alt="">
                                <div class="imglabel">Prostart cakes</div>
                      </a>                        </li>
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/Redmen_Ruckus_2011/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/Redmen_Ruckus_2011/bin/images/large/DSC_9157.jpg" width="160" height="200" alt="">
                                <div class="imglabel">Redmen Ruckus</div>
                      </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/redmen_Pride.9.28.11/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/Redmen Pride Breakfast 2_29_12/bin/images/large/DSC_1788.jpg" width="160" height="200" alt="">
                                <div class="imglabel">Redmen Pride</div>
                      </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/Sterling_Scholar_2012/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/Sterling_Scholar_2012/bin/images/large/DSC_8774.jpg" width="160" height="650" alt="">
                                <div class="imglabel">Sterling Scholar</div>
                      </a>                        </li>
                        
                        <li class="span2">

                            <a href="../../../Slideshows2011_12/One_Act_Play/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/One_Act_Play/bin/images/large/DSC_3892.jpg" width="160" height="200" alt="">
                                <div class="imglabel">One Act Plays</div>
                      </a>                        </li>
                        
                      <li class="span2">

                            <a href="../../../Slideshows2011_12/Birthday_Dance/index.html" class="thumbnail">

                                <img src="../../../Slideshows2011_12/Birthday_Dance/bin/images/large/DSC_3726.jpg" width=160" height="200" alt="">
                                <div class="imglabel">CHS Birthday Dance</div>
                      </a></li>
                      
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

