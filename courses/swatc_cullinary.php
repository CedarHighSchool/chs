	
<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Cedar High School</title>

    	<?php include("../assets/inc/headtag.php") ?>
        
        <style>
			.classContainer {
				margin-bottom: 15px;
			}
			.classDetails {
				display: none;
			}
		</style>
</head>

  	<body>

		<?php include("../assets/inc/navbar.php") ?>

		

    	<!-- Let the container begin! -->

		<div class="container">
			<div class="row">

				

				<?php include("../assets/inc/navlist.php") ?>

				

	   			<div class="span9">	

					<div class="row-fluid">

						<div class="span8">
                        	
                       <div class="well">
                            
                       	   <h3>Cullinary</h3>
                                <hr />
                               
                               
                               
       					 <div class="classContainer">
  
  <h4>Food Service/Culinary Arts — CTFCG170Y— CULA 1001</h4>
  
  <p>This High School Culinary program will focus on the development of fundamental cooking skills and techniques, taking what the students have learned in Pro­ Start, putting it to practical use as well as learning advanced techniques. Students will be trained for career opportunities in the food service/culinary arts industry. Students will have the opportunity to practice safety and sanitation procedures that were learned in Pro­Start, and use and maintain commercial food service equipment. They will perform quantity food preparation as it relates to catering, bakery, restaurant, hospitality, and fast food business operations.</p>
  
  <a href="#" class="moreDetails">More Details</a><div class="classDetails"><p>The High school program will also give students a “Head Start” if they plan on taking our adult program, they will be advanced to Intro to Professional cuisine saving 40 hours of class time.
<ul>

<li><strong>Credit(s): </strong>1.0</li>

<li><strong>Grade: </strong>11-12</li>

<li><strong>Fee: </strong>SWATC Registration Fee</li>

<li><strong>Prerequisite:</strong>Students must have either taken Pro­Start 1 or 2 prior to or are enrolled concurrently in Pro­start 1 or 2 while enrolled in SWATC Culinary program. </li>
<li><strong>Subject Area: </strong>CTE/AT</li></ul></p></div></div>
                
                	
                     

                	
                          </div>
                        </div>
                        
                          <div class="span4"><div class="well">
                	<ul class="nav nav-list">
                    	<li><a href="swatc_index.php">SWATC</a></li>
                        <li><a href="swatc_comp.php">SWATC Computer Technology</a></li>
                        <li><a href="swatc_cullinary.php">SWATC Cullinary</a></li>
                        <li><a href="swatc_health.php">SWATC Health Science</a></li>
                       <li><a href="swatc_proserv.php">SWATC Protective Services</a></li>
                        <li><a href="swatc_trade.php">SWATC Trade and Industry</a></li>  
                    </ul>
                </div></div>


	   				</div><!--/row-fluid -->

	       			

	   			</div><!--/span9 -->

   			</div><!--/row -->

   			<?php include("../assets/inc/footer.php") ?>



    	</div> <!-- /container -->



    	<!-- Yummy JavaScrips

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="../assets/js/jquery.js"></script>

    	<script src="../assets/js/bootstrap.js"></script>

    	<script src="../assets/js/bootstrap-carousel.js"></script>
        
        <script type="text/javascript">
			$(".moreDetails").click(function(e){
				$(this).nextAll(".classDetails").slideToggle('fast', function(){
					
				});
				
				e.preventDefault();
			});
		</script>

  	</body>

</html>
