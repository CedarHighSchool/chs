<?php $thisPage="gallery"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../../../assets/inc/headtag.php") ?>

  	</head>

  	<body>

		<?php include("../../../assets/inc/navbar.php") ?>

				<style type="text/css">
a.thumbnail { height: 130px; }
</style>

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

          				<h3>2014 Quarter 2</h3>

           			</div>
                                        <ul class="thumbnails">
                        <li class="span2">

                            <a href="../../../Slideshows_2013_14/grads_dance/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/sadies/content/images/large/DSC_3223.jpg" width="160px" height="200px" alt=""><div class="imglabel">Grads Dance</div></a></li>
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2013_14/jrProm2014" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/jrProm2014/content/images/large/DSC_1882.jpg" width="160px" height="200px" alt=""><div class="imglabel">Junior Prom</div></a></li>
                                
                                <li class="span2">

                            <a href="../../../Slideshows_2013_14/matchmaker_schoolplay" class="thumbnail">

                            <img src="../../../Slideshows_2013_14/matchmaker_schoolplay/content/images/large/DSC_0706.jpg" width="160px" height="200px" alt=""><div class="imglabel">Matchmaker</div></a></li>
								
								<li class="span2">

                            <a href="../../../Slideshows_2013_14/studentbodyelections/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/studentbodyelections/content/images/large/DSC_8812.jpg" width="160px" height="200px" alt=""><div class="imglabel">Student Body Elections</div></a></li>
								
								<li class="span2">

                            <a href="../../../Slideshows_2013_14/sterlingscholarawards__" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/sterling_scholar_assmebly/content/images/thumb/DSC_0056.jpg" width="160px" height="200px" alt=""><div class="imglabel">Sterling Scholar Awards</div></a></li>
								<li class="span2">

                            <a href="../../../Slideshows_2013_14/graduation2014/index.html" class="thumbnail">

                                <img src="../../../Slideshows_2013_14/graduation2014/content/images/thumb/DSC_8523.jpg" width="160px" height="200px" alt=""><div class="imglabel">Graduation 2014</div></a></li>
                                </ul>
                                </ul>
	   			</div>

	   			<!--teacher grid -->		

				<div class="row span9">

                	<div class="row-fluid">

                    	<div class="row span9">

                            <div class="well">

                                Go <a href="../../index.php?passyear=<?php echo $year;?>">back</a>.

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

