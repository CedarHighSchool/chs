<?php $thisPage="gallery"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High Schools</title>

    	<?php include("../assets/inc/headtag.php") ?>

  	</head>

  	<body>

		<?php include("../assets/inc/navbar.php") ?>

		

    	<!-- Let the container begin! -->

		<div class="container">

			<div class="row">

				

				<?php include("../assets/inc/navlist.php") ?>

				

                <?php

					if(isset($_GET['passyear'])) {

						$year = $_GET['passyear'];

					}else {

						$year = "16-17";

					}

				?>

                

	   			<div class="span9">		

	       			<div class="well">

          				<h3>Gallery <?php echo "// Year $year"; ?></h3>

           			</div>

         		</div>

	   				

	   			<!--teacher grid -->

				<div class="row span9">

                	<div class="row-fluid">

                    	<div class="row span8" style="margin-top: 0;">

                            <ul class="thumbnails" style="text-align:center;">

                                <li class="span2">

                                  <a href="./<?php echo $year;?>/1/gallerylist.php" class="thumbnail">

                                        <img src="Q1_<?php echo $year;?>.jpg" alt="" width="160" height="200">

                  <div class="imglabel">

                                            Quarter 1

                                  </div>

                                  </a>

                                </li>
                                
                                <li class="span2">

                                  <a href="./<?php echo $year;?>/2/gallerylist.php" class="thumbnail">

                                        <img src="Q2_<?php echo $year;?>.jpg" width="160px" height="200px" alt="">

                  <div class="imglabel">

                                            Quarter 2

                                        </div>

                                    </a>

                                </li>
                                
                                <li class="span2">

                                  <a href="./<?php echo $year;?>/3/gallerylist.php" class="thumbnail">

                                        <img src="Q3_<?php echo $year;?>.jpg" width="160px" height="200px" alt="">

                  <div class="imglabel">

                                            Quarter 3

                                  </div>

                                  </a>

                                </li>
                                
                                <li class="span2">

                                  <a href="./<?php echo $year;?>/4/gallerylist.php" class="thumbnail">

                                        <img src="Q4_<?php echo $year;?>.jpg" width="160" height="160" alt="">

                  <div class="imglabel">

                                            Quarter 4

                                  </div>

                                  </a>

                              </li>
                                

                          </ul>

                        </div>

                        <div class="span4">

                       <div class="well">
                        <h5>Choose a year</h5>
                      	<ul class="nav nav-list">
                      		<?php 
                      		$qyearsResults = mysqli_stmt_init($mysqli);
                      		mysqli_stmt_prepare($qyearsResults, "SELECT * FROM photoYears");
                      		mysqli_stmt_execute($qyearsResults);
                      		$qyearsResults = mysqli_stmt_get_result($qyearsResults);
                      		while($qyearsResult = mysqli_fetch_assoc($qyearsResults)){
                      			$years[] = $qyearsResult;
                      		} foreach ($years as $year){?>
                      			<li><a href="/gallery/allPhotos/index.php?yearStart=<?=$year['yearstart']?>"><?=$year['yearstart']?>-<?=$year['yearend']?></a></li>
                      		<?php }?>
                      		<li><a href="/gallery/index.php?passyear=16-17">2016-2017</a></li>
                      		<li><a href="/gallery/index.php?passyear=15-16">2015-2016</a></li>
                      		<li><a href="/gallery/index.php?passyear=14-15">2014-2015</a></li>
                      		<li><a href="/gallery/index.php?passyear=13-14">2013-2014</a></li>
                      		<li><a href="/gallery/index.php?passyear=12-13">2012-2013</a></li>
                      	</ul>
                      </div>

   							<div class="well">

   								<h5>Sports</h5>

   								<ul class="nav nav-list">

                                	<li><a href="../../athletics/baseball/">Baseball</a></li>
                                    <li><a href="../../athletics/basketball-boys/">Basketball - Boys</a></li>
                                    <li><a href="../../athletics/basketball-girls/">Basketball - Girls</a></li>
                                    <li><a href="../../athletics/cheer/">Cheer</a></li>
                                    <li><a href="../../athletics/crosscountry-boys/">Cross Country - Boys</a></li>
                                    <li><a href="../../athletics/crosscountry-girls/">Cross Country - Girls</a></li>
                                    <li><a href="../../athletics/football/">Football</a></li>
                                    <li><a href="../../athletics/golf-boys/">Golf - Boys</a></li>
                                    <li><a href="../../athletics/golf-girls/">Golf - Girls</a></li>
                                    <li><a href="../../athletics/moheytawa/">Mohey Tawa</a></li>
                                    <li><a href="../../athletics/soccer-boys/">Soccer - Boys</a></li>
                                    <li><a href="../../athletics/soccer-girls/">Soccer - Girls</a></li>
                                    <li><a href="../../athletics/softball/">Softball</a></li>
                                    <li><a href="../../athletics/swimming/">Swimming</a></li>
                                    <li><a href="../../athletics/tennis-boys/">Tennis - Boys</a></li>
                                    <li><a href="../../athletics/tennis-girls/">Tennis - Girls</a></li>
                                    <li><a href="../../athletics/track-boys/">Track - Boys</a></li>
                                    <li><a href="../../athletics/track-girls/">Track - Girls</a></li>
                                    <li><a href="../../athletics/volleyball/">Volleyball</a></li>
                                    <li><a href="../../athletics/water polo-girls/">Waterpolo</a></li>
                                    <li><a href="../../athletics/wrestling/">Wrestling</a></li>

						 		</ul>

   							</div>

   							<div class="well">

   								<h5>Clubs</h5>

   								<ul class="nav nav-list">

                                	<li><a href="../../clubs/athena/">Athena</a></li>
                                    <li><a href="../../clubs/cedar-post/">Cedar Post</a></li>
                                    <li><a href="../../clubs/debate/">Debate</a></li>
                                    <li><a href="../../clubs/drama/">Drama</a></li>
                                    <li><a href="../../clubs/fbla/">FBLA</a></li>
                                    <li><a href="../../clubs/fccla/">FCCLA</a></li>
                                    <li><a href="../../clubs/ffa/">FFA</a></li>
                                    <li><a href="../../clubs/french/">French</a></li>
                                    <li><a href="../../clubs/german/">German</a></li>
                                    <li><a href="../../clubs/honor-socety/">Honor Society</a></li>
                                    <li><a href="../../clubs/math-science/">Math and Science</a></li>
                                    <li><a href="../../clubs/ping-pong/">Ping Pong</a></li>
                                    <li><a href="../../clubs/rodeo/">Rodeo</a></li>
                                    <li><a href="../../clubs/spanish/">Spanish</a></li>
                                    <li><a href="../../clubs/student-government/">Student Government</a></li>
                                    <li><a href="../../clubs/yearbook/">Yearbook</a></li>
                                    <li><a href="../../clubs/web-services/">Cyber Corps</a></li>

						 		</ul>

   							</div>

   						</div>


                	</div>

           		</div><!--/teacher grid --> 

			</div><!--/row-->



      		<?php include("../assets/inc/footer.php") ?>



    	</div> <!-- /container -->



    	<!-- Yummy JavaScrips

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="/assets/js/jquery.js"></script>

    	<script src="/assets/js/bootstrap.js"></script>

    	

  	</body>

</html>

