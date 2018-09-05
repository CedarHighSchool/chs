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

				<?php include "../assets/inc/navlist.php";
				
				if(isset($_POST['fname']) && isset($_GET['id'])){
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$picture = $_POST['picture'];
					$website = $_POST['website'];
					$a1 = $_POST['a1'];
					$b1 = $_POST['b1'];
					$a2 = $_POST['a2'];
					$b2 = $_POST['b2'];
					$a4 = $_POST['a4'];
					$b4 = $_POST['b4'];
					$a5 = $_POST['a5'];
					$b5 = $_POST['b5'];
					$a1u = $_POST['a1u'];
					$b1u = $_POST['b1u'];
					$a2u = $_POST['a2u'];
					$b2u = $_POST['b2u'];
					$a4u = $_POST['a4u'];
					$b4u = $_POST['b4u'];
					$a5u = $_POST['a5u'];
					$b5u = $_POST['b5u'];
					$education = $_POST['education'];
					$email = $_POST['email'];
					$room = $_POST['room'];
					$extras = $_POST['extras'];
					
					$query = $mysqli->prepare("UPDATE `faculty` SET `fname`=?,`lname`=?,`picture`=?,`website`=?,`a1`=?,`b1`=?,`a2`=?,`b2`=?,`a4`=?,`b4`=?,`a5`=?,`b5`=?,`a1u`=?,`b1u`=?,`a2u`=?,`b2u`=?,`a4u`=?,`b4u`=?,`a5u`=?,`b5u`=?,`education`=?,`email`=?,`room`=?,`extras`=? WHERE `id`=?");
					$query->bind_param("ssssssssssssssssssssssssi",$fname,$lname,$picture,$website,$a1,$b1,$a2,$b2,$a4,$b4,$a5,$b5,$a1u,$b1u,$a2u,$b2u,$a4u,$b4u,$a5u,$b5u,$education,$email,$room,$extras,$_GET['id']);
					$query->execute();
					//$manage->activity("Updated faculty", "fac", $_GET['id']);
					echo "<span class=\"span9\"><div class=\"well\">Saved</div></span>";
				}
				
				if ($mysqli->error) {
					die($mysqli->error);
				}

				if (isset($_GET['id'])) {
					$person = $mysqli->query("SELECT * FROM `faculty` WHERE `id`=" . $_GET['id']);
					$person = $person->fetch_array();
				} else {
					die("<span class=\"span9\"><div class=\"well\">This person was not found.</div></span>");
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

						<div class="span9">

							<div class="well">

								<h3><input type="text" name="fname" placeholder="First Name" value="<?=$person['fname']?>"><input type="text" name="lname" placeholder="Last Name" value="<?=$person['lname']?>"></h3><button type="submit" id="saver" class="btn btn-success pull-right">Save</button><a href="/faculty/<?=$person['slug']?>/" class="btn btn-default pull-right">Close</a>

							</div>

						</div>

						<script>
							$(function() {
								$("input[name=picture]").on("change", function() {
									$("#picture").attr("src", $(this).val());
								});
							});
						</script>

						<div class="span2">

							<div class="thumbnail">

								<input type="text" name="picture" placeholder="Photo URL" class="input-medium" value="<?=$person['picture']?>">
								<img src="<?=$person['picture']?>" alt="" id="picture">

							</div>

						</div>
						<br />



						<div class="span4">

							<div class="well">

								<h3>Schedule</h3>
								<h5><a href="<?=$person['website'] ?>">&nbsp;Main Website</a></h5>
								<input type="text" name="website" placeholder="Main URL" value="<?=$person['website']?>">

								<table class="table table-condensed">

									<tr>

										<th width="21%">Period</th>

										<th width="40%">A Day</th>

										<th width="39%">B Day</th>

									</tr>
									<?php
									function per_info($num,$person) {
										echo '
										<td>
											<input type="text" name="a'.$num.'" placeholder="A'.$num.'" class="input-small" value="'.htmlspecialchars($person['a'.$num.'']).'"><br>
											<input type="text" name="a'.$num.'u" placeholder="A'.$num.' URL" class="input-small" value="'.$person['a'.$num.'u'].'">
										</td>
										<td>
											<input type="text" name="b'.$num.'" placeholder="B'.$num.'" class="input-small" value="'.htmlspecialchars($person['b'.$num.'']).'"><br>
											<input type="text" name="b'.$num.'u" placeholder="B'.$num.' URL" class="input-small" value="'.$person['b'.$num.'u'].'">
										</td>
										';
									}
									?>
									<tr>
										<td>1st</td>
										<?=per_info(1,$person)?>
									</tr>
									<tr>
										<td>2nd</td>
										<?=per_info(2,$person)?>
									</tr>
									<tr>
										<td>4th</td>
										<?=per_info(4,$person)?>
									</tr>
									<tr>
										<td>5th</td>
										<?=per_info(5,$person)?>
									</tr>
								</table>

							</div>

							<div class="well">

								<h5>Education</h5>

							  <textarea name="education" style="width:100%;height:200px;"><?=$person['education']?></textarea>

							</div>
							<div class="well">

								<h5>Extras</h5>

							  <textarea name="extras" style="width:100%;height:200px;"><?=$person['extras']?></textarea>

							</div>

						</div>



						<div class="span3">

							<div class="well">

								<h5>Contact</h5>

								<ul class="nav nav-list">

									<input type="text" name="email" placeholder="Email" value="<?=$person['email']?>">

									<li>Room: <input type="text" name="room" class="input-small" value="<?=$person['room']?>"></li>

								</ul>

							</div>

						</div>

				</div>
				<!--/row-->
				</form>


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