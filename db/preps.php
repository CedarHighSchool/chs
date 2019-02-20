<?php $thisPage = "faculty"; ?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Cedar High School
		</title>
		<?php include "../assets/inc/headtag.php"; ?>
			<style type="text/css">
				a.thumbnail {
					height: 250px;
				}
				
				.imglabel {
					font-size: 12px;
				}
				
				@media (min-width: 768px) and (max-width: 979px) {
					.imglabel {
						font-size: 40px;
					}
				}
				
				.imglabel1 {
					font-size: 12px;
				}
				
				.imglabel1 {
					font-size: 40px;
				}
				
				a.thumbnail1 {
					height: 250px;
				}
			</style>
	</head>

	<body>
		<?php include "../assets/inc/navbar.php" ?>
			<style type="text/css">
				a.thumbnail {
					height: 250px;
				}
				
				#oldletters {
					display: none;
				}
				
				@media (max-width: 641px) {
					#oldletters {
						display: inline-block;
					}
					#newletters {
						display: none;
					}
				}
			</style>
			<!-- Let the container begin! -->
			<div class="container">
				<div class="row">
					<?php include "../assets/inc/navlist.php" ?>
						<div class="span8">
							<div class="well">
								<h3>Faculty Preps</h3>
								<a href="#a1" class="btn btn-default btn-mini">A1</a><a href="#a2" class="btn btn-default btn-mini">A2</a><a href="#a3" class="btn btn-default btn-mini">A3</a><a href="#a4" class="btn btn-default btn-mini">A4</a>
								<a href="#b1" class="btn btn-default btn-mini">B1</a><a href="#b2" class="btn btn-default btn-mini">B2</a><a href="#b3" class="btn btn-default btn-mini">B3</a><a href="#b4" class="btn btn-default btn-mini">B4</a> 
							</div>
						</div>
						<!--teacher grid -->
						<div class="row span9">
							<a name="a1"></a>
							<h2>A1</h2>
							<ul class="thumbnails">
								<?php
								
								if ($mysqli->error) {
									die($mysqli->error);
								}
								$letter = ".";
								
								$people = $mysqli->query("SELECT * FROM `faculty` WHERE `a1`='Prep' ORDER BY `lname` ASC");
								while($person = $people->fetch_array()){
									$my_letter = strtolower(substr($person['lname'],0,1));
									if($letter != $my_letter) {
										$letter = $my_letter;
										echo "<a name='".$letter."'></a>";
									}
									?>
									<li class="span2">
										<a href="fac.php?id=<?=$person['id']?>" class="thumbnail">
											<img src="<?=$person['picture']?>" alt="">
											<div class="imglabel">
												<p><?=$person['fname']?> <?=$person['lname']?>
												<br><?=$person['subject']?>
											</div>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
							<a name="a2"></a>
							<h2>A2</h2>
							<ul class="thumbnails">
								<?php
								
								if ($mysqli->error) {
									die($mysqli->error);
								}
								$letter = ".";
								
								$people = $mysqli->query("SELECT * FROM `faculty` WHERE `a2`='Prep' ORDER BY `lname` ASC");
								while($person = $people->fetch_array()){
									$my_letter = strtolower(substr($person['lname'],0,1));
									if($letter != $my_letter) {
										$letter = $my_letter;
										echo "<a name='".$letter."'></a>";
									}
									?>
									<li class="span2">
										<a href="fac.php?id=<?=$person['id']?>" class="thumbnail">
											<img src="<?=$person['picture']?>" alt="">
											<div class="imglabel">
												<p><?=$person['fname']?> <?=$person['lname']?>
												<br><?=$person['subject']?>
											</div>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
							<a name="a3"></a>
							<h2>A3</h2>
							<ul class="thumbnails">
								<?php
								
								if ($mysqli->error) {
									die($mysqli->error);
								}
								$letter = ".";
								
								$people = $mysqli->query("SELECT * FROM `faculty` WHERE `a3`='Prep' ORDER BY `lname` ASC");
								while($person = $people->fetch_array()){
									$my_letter = strtolower(substr($person['lname'],0,1));
									if($letter != $my_letter) {
										$letter = $my_letter;
										echo "<a name='".$letter."'></a>";
									}
									?>
									<li class="span2">
										<a href="fac.php?id=<?=$person['id']?>" class="thumbnail">
											<img src="<?=$person['picture']?>" alt="">
											<div class="imglabel">
												<p><?=$person['fname']?> <?=$person['lname']?>
												<br><?=$person['subject']?>
											</div>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
							<a name="a4"></a>
							<h2>A4</h2>
							<ul class="thumbnails">
								<?php
								
								if ($mysqli->error) {
									die($mysqli->error);
								}
								$letter = ".";
								
								$people = $mysqli->query("SELECT * FROM `faculty` WHERE `a4`='Prep' ORDER BY `lname` ASC");
								while($person = $people->fetch_array()){
									$my_letter = strtolower(substr($person['lname'],0,1));
									if($letter != $my_letter) {
										$letter = $my_letter;
										echo "<a name='".$letter."'></a>";
									}
									?>
									<li class="span2">
										<a href="fac.php?id=<?=$person['id']?>" class="thumbnail">
											<img src="<?=$person['picture']?>" alt="">
											<div class="imglabel">
												<p><?=$person['fname']?> <?=$person['lname']?>
												<br><?=$person['subject']?>
											</div>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
							<a name="b1"></a>
							<h2>B1</h2>
							<ul class="thumbnails">
								<?php
								
								if ($mysqli->error) {
									die($mysqli->error);
								}
								$letter = ".";
								
								$people = $mysqli->query("SELECT * FROM `faculty` WHERE `b1`='Prep' ORDER BY `lname` ASC");
								while($person = $people->fetch_array()){
									$my_letter = strtolower(substr($person['lname'],0,1));
									if($letter != $my_letter) {
										$letter = $my_letter;
										echo "<a name='".$letter."'></a>";
									}
									?>
									<li class="span2">
										<a href="fac.php?id=<?=$person['id']?>" class="thumbnail">
											<img src="<?=$person['picture']?>" alt="">
											<div class="imglabel">
												<p><?=$person['fname']?> <?=$person['lname']?>
												<br><?=$person['subject']?>
											</div>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
							<a name="b2"></a>
							<h2>B2</h2>
							<ul class="thumbnails">
								<?php
								
								if ($mysqli->error) {
									die($mysqli->error);
								}
								$letter = ".";
								
								$people = $mysqli->query("SELECT * FROM `faculty` WHERE `b2`='Prep' ORDER BY `lname` ASC");
								while($person = $people->fetch_array()){
									$my_letter = strtolower(substr($person['lname'],0,1));
									if($letter != $my_letter) {
										$letter = $my_letter;
										echo "<a name='".$letter."'></a>";
									}
									?>
									<li class="span2">
										<a href="fac.php?id=<?=$person['id']?>" class="thumbnail">
											<img src="<?=$person['picture']?>" alt="">
											<div class="imglabel">
												<p><?=$person['fname']?> <?=$person['lname']?>
												<br><?=$person['subject']?>
											</div>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
							<a name="b3"></a>
							<h2>B3</h2>
							<ul class="thumbnails">
								<?php
								
								if ($mysqli->error) {
									die($mysqli->error);
								}
								$letter = ".";
								
								$people = $mysqli->query("SELECT * FROM `faculty` WHERE `b3`='Prep' ORDER BY `lname` ASC");
								while($person = $people->fetch_array()){
									$my_letter = strtolower(substr($person['lname'],0,1));
									if($letter != $my_letter) {
										$letter = $my_letter;
										echo "<a name='".$letter."'></a>";
									}
									?>
									<li class="span2">
										<a href="fac.php?id=<?=$person['id']?>" class="thumbnail">
											<img src="<?=$person['picture']?>" alt="">
											<div class="imglabel">
												<p><?=$person['fname']?> <?=$person['lname']?>
												<br><?=$person['subject']?>
											</div>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
							<a name="b4"></a>
							<h2>B4</h2>
							<ul class="thumbnails">
								<?php
								
								if ($mysqli->error) {
									die($mysqli->error);
								}
								$letter = ".";
								
								$people = $mysqli->query("SELECT * FROM `faculty` WHERE `b4`='Prep' ORDER BY `lname` ASC");
								while($person = $people->fetch_array()){
									$my_letter = strtolower(substr($person['lname'],0,1));
									if($letter != $my_letter) {
										$letter = $my_letter;
										echo "<a name='".$letter."'></a>";
									}
									?>
									<li class="span2">
										<a href="fac.php?id=<?=$person['id']?>" class="thumbnail">
											<img src="<?=$person['picture']?>" alt="">
											<div class="imglabel">
												<p><?=$person['fname']?> <?=$person['lname']?>
												<br><?=$person['subject']?>
											</div>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
						</div>
						<!--/teacher grid -->
				</div>
				<!--/row-->
				<?php include "../assets/inc/footer.php" ?>
			</div>
			<!-- /container -->
			<!-- Yummy JavaScrips
================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="../assets/js/jquery.js">
			</script>
			<script src="../assets/js/bootstrap.js">
			</script>
	</body>

	</html>