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
                                                    
                                                    <div class="well">

                                                      <b><p>CCR Week Bell Schedule</p></b>

                                                      1st  7:50 - 9:01 (54 min.)<BR>
                                                      
      												                        2nd  9:06 - 10:17 (54 min.)<BR>
      
      												                        3rd  10:22 - 11:33 (54 min.)<BR>

                                                      Lunch  11:33 - 12:19 (45 min.)<BR>    

                                                      4th  12:19 - 1:30 (54 min.)<BR>
                                                      <BR>
                                 
                                       				  (Buses will run @ 1:30)<BR>
                                 
                                                      No Late Start & No CCR Class on Wednesday<BR>
                                                      <BR>
                                                    
                                                    </div>
                      
                      		<div class="well">

                                                    <b><p>A.M. Shortened Schedule</p></b>

                                                    1st 7:50 - 9:06 (76 min.)<BR>

                                                    Assembly 9:12 - 9:55 (43 min.)<BR>

                                                    2nd  10:00 - 11:16 (76   min.)<BR>

                                                    Lunch 11:16 - 12:03 (47 min.)<BR>

                                                    3rd  12:03 - 1:19 (76   min.)<BR>

                                                    4th  1:24 - 2:40   (76 min.)<BR>
                                                    <BR>
                                                    
                                                    </div>
                          
                          		<div class="well">
                                                      
                                                      <b><p>A.M. "Split Assembly" Schedule</p></b>    
                                                      
                                                      1st per 7:50 - 9:11 (81 min.)<BR>  
                                                      
                                                      Group 1 Assembly/2nd per 9:16 - 10:00(44 min.)<BR>
                                                      
                                                      Group 2 Assembly/2nd per 10:20 - 11:06 (46 min.)<BR>       

                                                      Lunch 11:06 - 11:53 (48 min.)<BR>

                                                      3rd per 11:53 - 1:14 (81 min.)<BR>

                                                      4th per 1:19 - 2:40 (81 min.)<BR>
                                                      <BR>
                            
                      </div><!--well-->
                          
                          		<div class="well">
                                                      
                                                      <b><p>P.M. Shortened Schedule</p></b>    
                                                      
                                                      1st per 7:50 - 9:08 (78 min.)<BR>     
                                                      
                                                      2nd per 9:13 - 10:31 (78 Min.)<BR>              

                                                      Lunch 10:31 - 11:19 (48 min.)<BR>

                                                      3rd  11:19 - 12:37 (78 min.)<BR>

                                                      4th  12:42 - 2:00 (78 min.)<BR>

                                                      Assembly 2:05 - 2:40 (35 min.)<BR>
                                                      <BR>
                            
                         </div><!--well-->
                            
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

