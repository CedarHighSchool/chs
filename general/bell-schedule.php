<?php $thisPage="faculty"; ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../assets/inc/headtag.php") ?>

  	<style type="text/css">

<!--

.style21 {color: #990000}

-->

    </style>

</head>

  	<body data-spy="scroll">

		<?php include("../assets/inc/navbar.php") ?>

				

    	<!-- Let the container begin! -->

		<div class="container">

			

			<div class="row">
            
            	

				

				<?php include("../assets/inc/navlist.php") ?>

				

				<div class="span9">
                    
                    <div class="well">

          				<h3>Bell Schedule</h3>

           			</div>
                    
               	</div>
                
                <div class="span9">
                
                	<div class="row-fluid">

	   				<div class="span8" style="text-align:center;">

	   					  <div class="well">
                                                       
                                                       <?=area('bellschedule');?>
                                                      
                                                      </div>
                        
                        	<div class="well">

                                                      <?=area('wednesdaySchedule');?>
                                                    
                                                    </div>
                                                    
                                                    <?=area('bellScheduleBottom');?>
                            
                      </div><!--span8-->
                            
	   					<!--facstaff navlist-->

   						<!--student navlist-->
                  
                  		<?php include("../assets/inc/stuparnav.php") ?>

					</div><!--row-fluid-->
                  
                 </div><!--span9-->
                 
              </div><!--row-->

      		<?php include("../assets/inc/footer.php") ?>


    	</div> <!-- /container -->


    	<!-- Yummy JavaScrips

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="../assets/js/jquery.js"></script>

    	<script src="../assets/js/bootstrap.js"></script>

    	<script src="../assets/js/bootstrap-carousel.js"></script>

    	<script src="../assets/js/bootstrap-scrollspy.js"></script>



  	</body>

</html>

