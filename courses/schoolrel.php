<?php $thisPage = "home"; ?>

	<!DOCTYPE html>

	<html lang="en">

	<head>

		<title>Cedar High School</title>

		<?php include "../assets/inc/headtag.php" ?>

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

		<?php include "../assets/inc/navbar.php" ?>

			<!-- Let the container begin! -->

			<div class="container">
				<div class="row">

					<?php include "../assets/inc/navlist.php" ?>

						<div class="span9">
							<div class="row-fluid">

								<div class="span8">
									<div class="well">

										<h3>School Release</h3>

										<hr />



										<div class="classContainer">
											<!--className-->
											<h4>Release – College (SR)</h4>
											<!--classDescritption-->
											<p>Students who meet the college entrance requirements and are accepted by SUU for concurrent enrollment may be released during school hours.</p>
											<!--moreDetails-->
											<a href="#" class="moreDetails">More Details</a>
											<div class="classDetails">
												<!--moreDescription-->
												<p>They may receive both high school and college credit for concurrent enrollment classes. Administrative and guidance counselor approval is required.
													<ul>
														<!--info-->
														<li><strong>Credit(s): </strong>0.0 Credit</li>
														<li><strong>Grade: </strong>11-12</li>
														<li><strong>Fee: </strong>None</li>
														<li><strong>Prerequisite: </strong>None</li>
														<li><strong>Subject Area: </strong>SR</li>
													</ul>
												</p>
											</div>
											<!--moreDetails-->
										</div>
										<!--classContainer-->



										<div class="classContainer">
											<!--className-->
											<h4>Release - Home (SR)</h4>
											<!--classDescritption-->
											<p>Students may have a reduced schedule of classes, which must be approved by parent or guardian and advisor. Students wishing a reduced schedule who will not be graduating from high school must have administrative approval.</p>
											<!--moreDetails-->
											<a href="#" class="moreDetails">More Details</a>
											<div class="classDetails">
												<!--moreDescription-->
												<p>
													<ul>
														<!--info-->
														<li><strong>Credit(s): </strong>0.0 Credit</li>
														<li><strong>Grade: </strong>11-12</li>
														<li><strong>Fee: </strong>None</li>
														<li><strong>Prerequisite: </strong>None</li>
														<li><strong>Subject Area: </strong>SR</li>
													</ul>
												</p>
											</div>
											<!--moreDetails-->
										</div>
										<!--classContainer-->



										<div class="classContainer">
											<!--className-->
											<h4>Released Time (Seminary) (SR)</h4>
											<!--classDescritption-->
											<p>Requires a signed parent request slip. Can be one period of released time for religious instruction. High school credit is not given for these classes..</p>
											<!--moreDetails-->
											<a href="#" class="moreDetails">More Details</a>
											<div class="classDetails">
												<!--moreDescription-->
												<p>
													<ul>
														<!--info-->
														<li><strong>Credit(s): </strong>0.0 Credit</li>
														<li><strong>Grade: </strong>9-12</li>
														<li><strong>Fee: </strong>None</li>
														<li><strong>Prerequisite: </strong>None</li>
														<li><strong>Subject Area: </strong>SR</li>
													</ul>
												</p>
											</div>
											<!--moreDetails-->
										</div>
										<!--classContainer-->



									</div>
									<!--span8-->
								</div>
								<!--well-->

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
									</div>
									<!--well-->
								</div>
								<!--span4-->

							</div>
							<!--/row-fluid -->

						</div>
						<!--/span9 -->

				</div>
				<!--/row -->

				<?php include "../assets/inc/footer.php" ?>

			</div>
			<!-- /container -->

			<!-- Yummy JavaScrips

    	================================================== -->

			<!-- Placed at the end of the document so the pages load faster -->

			<script src="../assets/js/jquery.js"></script>

			<script src="../assets/js/bootstrap.js"></script>

			<script src="../assets/js/bootstrap-carousel.js"></script>

			<script type="text/javascript">
				$(".moreDetails").click(function(e) {
					$(this).nextAll(".classDetails").slideToggle('fast', function() {

					});

					e.preventDefault();
				});
			</script>

	</body>

	</html>