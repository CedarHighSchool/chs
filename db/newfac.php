<?php $thisPage = "directory"; ?>

	<!DOCTYPE html>

	<html lang="en">

	<head>

		<title>Cedar High School</title>

		<?php include "../assets/inc/headtag.php";
		$manage->require_perm("edit");?>

	</head>

	<body>

		<?php include "../assets/inc/navbar.php" ?>



			<!-- Let the container begin! -->

			<div class="container">
				<form action="" method="post">
				<div class="row">
					<?php
					if(isset($_POST['fname'])){
						$fname = $_POST['fname'];
						$lname = $_POST['lname'];
						$picture = $_POST['picture'];
						$website = $_POST['website'];
						$a1 = $_POST['a1'];
						$b1 = $_POST['b1'];
						$a2 = $_POST['a2'];
						$b2 = $_POST['b2'];
						$a3 = $_POST['a3'];
						$b3 = $_POST['b3'];
						$a4 = $_POST['a4'];
						$b4 = $_POST['b4'];
						$a5 = $_POST['a5'];
						$b5 = $_POST['b5'];
						$a1u = $_POST['a1u'];
						$b1u = $_POST['b1u'];
						$a2u = $_POST['a2u'];
						$b2u = $_POST['b2u'];
						$a3u = $_POST['a3u'];
						$b3u = $_POST['b3u'];
						$a4u = $_POST['a4u'];
						$b4u = $_POST['b4u'];
						$a5u = $_POST['a5u'];
						$b5u = $_POST['b5u'];
						$subject = $_POST['subject'];
						$education = $_POST['education'];
						$email = $_POST['email'];
						$room = $_POST['room'];
						$extras = $_POST['extras'];
						
						$query = $mysqli->prepare("INSERT INTO `faculty` (`fname`,`lname`,`picture`,`website`,`a1`,`b1`,`a2`,`b2`,`a4`,`b4`,`a5`,`b5`,`a1u`,`b1u`,`a2u`,`b2u`,`a4u`,`b4u`,`a5u`,`b5u`,`education`,`email`,`room`,`extras`,`subject`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
						$query->bind_param("sssssssssssssssssssssssss",$fname,$lname,$picture,$website,$a1,$b1,$a2,$b2,$a4,$b4,$a5,$b5,$a1u,$b1u,$a2u,$b2u,$a4u,$b4u,$a5u,$b5u,$education,$email,$room,$extras,$subject);
						$query->execute();
						//$manage->activity("Created faculty item", "fac", $mysqli->insert_id);
						echo "$fname $lname added to faculty list";
					}
					?>
					
					<script>
						$(function() {
							$(window).bind('keydown', function(event) {
								if (event.ctrlKey || event.metaKey) {
									switch (String.fromCharCode(event.which).toLowerCase()) {
									case 's':
										event.preventDefault();
										$("#saver").click();
										break;
									}
								}
							});
						})
					</script>

					<?php include "../assets/inc/navlist.php" ?>

						<div class="span9">

							<div class="well">

								<h3><input type="text" name="fname" placeholder="First Name"><input type="text" name="lname" placeholder="Last Name"></h3><button type="submit" id="saver" class="btn btn-success pull-right">Save</button><a href="/faculty/" class="btn btn-default pull-right">Close</a>
								<!--<input type="text" name="subject" placeholder="Subject" style="display:none;">-->
								<select name="subject">
									<option selected disabled value="">Subject</option>
									<option>Math</option>
									<option>English</option>
									<option>CTE</option>
									<option>Physical Education</option>
									<option>Fine Arts</option>
									<option>Social Science</option>
									<option>Foreign Language</option>
									<option>Special Education</option>
									<option>Media Center</option>
									<option>Science</option>
								</select>

							</div>

						</div>



						<div class="span2">

							<div class="thumbnail">

								<input type="text" name="picture" placeholder="Photo URL" class="input-medium">

							</div>

						</div>
						<br />



						<div class="span4">

							<div class="well">

								<h3>Schedule</h3>
								<h5> Main Website</h5>
								<input type="text" name="website" placeholder="Main URL">

								<table class="table table-condensed">

									<tr>

										<th width="21%">Period</th>

										<th width="40%">A Day</th>

										<th width="39%">B Day</th>

									</tr>

									<tr>
										<td>1st</td>
										<td>
											<input type="text" name="a1" placeholder="A1" class="input-small"><br>
											<input type="text" name="a1u" placeholder="A1 URL" class="input-small">
										</td>
										<td>
											<input type="text" name="b1" placeholder="B1" class="input-small"><br>
											<input type="text" name="b1u" placeholder="B1 URL" class="input-small">
										</td>
									</tr>
									<tr>
										<td>2nd</td>
										<td>
											<input type="text" name="a2" placeholder="A2" class="input-small"><br>
											<input type="text" name="a2u" placeholder="A2 URL" class="input-small">
										</td>
										<td>
											<input type="text" name="b2" placeholder="B2" class="input-small"><br>
											<input type="text" name="b2u" placeholder="B2 URL" class="input-small">
										</td>
									</tr>
									<tr>
										<td>4rd</td>
										<td>
											<input type="text" name="a4" placeholder="A4" class="input-small"><br>
											<input type="text" name="a4u" placeholder="A4 URL" class="input-small">
										</td>
										<td>
											<input type="text" name="b4" placeholder="B4" class="input-small"><br>
											<input type="text" name="b4u" placeholder="B4 URL" class="input-small">
										</td>
									</tr>
									<tr>
										<td>5th</td>
										<td>
											<input type="text" name="a5" placeholder="A5" class="input-small"><br>
											<input type="text" name="a5u" placeholder="A5 URL" class="input-small">
										</td>
										<td>
											<input type="text" name="b5" placeholder="B5" class="input-small"><br>
											<input type="text" name="b5u" placeholder="B5 URL" class="input-small">
										</td>
									</tr>
								</table>

							</div>

							<div class="well">

								<h5>Education</h5>

							  <textarea name="education" style="width:100%;height:200px;"></textarea>

							</div>

							<div class="well">

								<h5>Extras</h5>

							  <textarea name="extras" style="width:100%;height:200px;"></textarea>

							</div>

						</div>



						<div class="span3">

							<div class="well">

								<h5>Contact</h5>

								<ul class="nav nav-list">

									<input type="text" name="email" placeholder="Email">

									<li>Room: <input type="text" name="room" class="input-small"></li>

								</ul>

							</div>

						</div>

				</div>
				</form>
				<!--/row-->



				<?php include "../assets/inc/footer.php" ?>



			</div>
			<!-- /container -->



			<!-- Yummy JavaScrips

    	================================================== -->

			<!-- Placed at the end of the document so the pages load faster -->

			<script src="/assets/js/jquery.js"></script>

			<script src="/assets/js/bootstrap.js"></script>



	</body>

	</html>