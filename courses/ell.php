<?php $thisPage="home"; ?>

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
                            	<h3>English Language Learning</h3>
                                <hr />
                                
                                <div class="classContainer">
                                	<!--className-->
                                	<h4>ELL Study Skills (EL) Course# 4602</h4>
                                    <!--classDescritption-->
                                    <p>When determined necessary through a student's IEP, study hall provides an opportunity for students to complete homework at school.</p>
									<!--moreDetails-->
									<a href="#" class="moreDetails">More Details</a><div class="classDetails">
                                    <!--moreDescription-->
                                    <p>tudents are expected to bring homework from classes with them and to be prepared to work. If a student does not have homework, English assignments will be provided to help students improve English and study skills.
										<ul>
                                        	<!--info-->
                                        	<li><strong>Credit(s): </strong>1.0 Credit</li>
                                            <li><strong>Grade: </strong>9-12</li>
                                            <li><strong>Fee: </strong>None</li>
                                            <li><strong>Prerequisite: </strong>IEP, 504</li>
                                            <li><strong>Subject Area: </strong>EL</li>
                                      	</ul>
                               		</p>
                                    </div><!--moreDetails-->
                         		</div><!--classContainer-->
                         		
                                <div class="classContainer">
                                	<!--className-->
                                	<h4>ELL Study Skills (EL) Course# 4602</h4>
                                    <!--classDescritption-->
                                    <p>When determined necessary through a student's IEP, study hall provides an opportunity for students to complete homework at school.</p>
									<!--moreDetails-->
									<a href="#" class="moreDetails">More Details</a><div class="classDetails">
                                    <!--moreDescription-->
                                    <p>tudents are expected to bring homework from classes with them and to be prepared to work. If a student does not have homework, English assignments will be provided to help students improve English and study skills.
										<ul>
                                        	<!--info-->
                                        	<li><strong>Credit(s): </strong>1.0 Credit</li>
                                            <li><strong>Grade: </strong>9-12</li>
                                            <li><strong>Fee: </strong>None</li>
                                            <li><strong>Prerequisite: </strong>IEP, 504</li>
                                            <li><strong>Subject Area: </strong>EL</li>
                                      	</ul>
                               		</p>
                                    </div><!--moreDetails-->
                         		</div><!--classContainer-->
                                
         <!--                       <div class="classContainer">-->
                                	<!--className-->
         <!--                       	<h4>Secondary Reading (EL) Course#LAELG102Y</h4>-->
                                    <!--classDescritption-->
         <!--                           <p>This class is designed for 9-12 students whose first language is any other than English, or who have a language other than English spoken in the home.</p>-->
									<!--moreDetails-->
									<!--<a href="#" class="moreDetails">More Details</a><div class="classDetails">-->
                                    <!--moreDescription-->
         <!--                           <p>The focus of the class is twofold; reading skills, such as comprehension, fluency, and the use of strategies, and language skills, such as grammar, words in context, and the use of academic language will be worked on simultaneously. The course will fill an elective credit.-->
									<!--	<ul>-->
                                        	<!--info-->
         <!--                               	<li><strong>Credit(s): </strong>1.0 Credit</li>-->
         <!--                                   <li><strong>Grade: </strong>9-12</li>-->
         <!--                                   <li><strong>Fee: </strong>None</li>-->
         <!--                                   <li><strong>Prerequisite: </strong>None</li>-->
         <!--                                   <li><strong>Subject Area: </strong>EL</li>-->
         <!--                             	</ul>-->
         <!--                      		</p>-->
         <!--                           </div><!--moreDetails-->-->
         <!--                		</div><!--classContainer-->-->
                                
                                
                			</div><!--well-->
                		</div><!--span8-->
                        
                        <div class="span4">
                        	<div class="well">
                				<ul class="nav nav-list">
                    				<li><a href="career.php">Career & Technical Education</a></li>
                        			<li><a href="comp.php">Computer Technology</a></li>
                        			<li><a href="elective.php">Elective</a></li>
                        			<li><a href="ell.php">English Language Learners</a></li>
                        			<li><a href="finlit.php">Financial Literacy</a></li>
                        			<li><a href="art.php">Fine Arts</a></li>
                        			<li><a href="foreign.php">Foreign Language</a></li>
                        			<li><a href="english.php">Language Arts</a></li>
                        			<li><a href="math.php">Mathematics</a></li>
                        			<li><a href="pe.php">P.E.</a></li>
                        			<li><a href="schoolrel.php">School Release</a></li>
                        			<li><a href="science.php">Science</a></li>
                        			<li><a href="socsci.php">Social Studies</a></li>
                        			<li><a href="special.php">Special Courses</a></li>
                        			<li><a href="swatc_index.php">Southwest ATC</a></li>
                    			</ul>
                			</div><!--well-->
                		</div><!--span4-->

	   				</div><!--row-fluid-->

	   			</div><!--span9-->

   			</div><!--row-->

   			<?php include("../assets/inc/footer.php") ?>

    	</div> <!--container-->

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

