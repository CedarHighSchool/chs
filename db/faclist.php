<?php $thisPage = "faculty"; ?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Cedar High School
		</title>
		<?php include "../assets/inc/headtag.php" ?>
			<style type="text/css">
				a.thumbnail {
					height: 250px;
				}
				
				.imglabel {
					font-size: 12px;
				}
				.rel{
					position: relative;
				}
				.absTR{
					position: absolute;
					top: 0;
					right: 0;
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
						<div class="span8 rel">
							<div class="well">
								<h3>Faculty</h3>
								<?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="/db/newfac.php" class="btn btn-default pull-right absTR">Add</a><?php } ?>
								<nav aria-label="Letters" id="newletters">
									<ul class="pagination">
										<?php
										$people = $mysqli->query("SELECT * FROM `faculty` WHERE `current`=1 ORDER BY `lname` ASC");
										while($person = $people->fetch_array()){
											$my_letter = strtolower(substr($person['lname'],0,1));
											if($letter != $my_letter) {
												$letter = $my_letter;
												?>
												<li class="page-item"><a class="page-link" href="#<?=$letter?>"><?=ucfirst($letter)?></a></li>
												<?php
											}
										}
										?>
										<li class="page-item"><a class="page-link" href="/db/preps.php">Preps</a></li>
									</ul>
								</nav>
								<span id="oldletters">
									<?php
									$people = $mysqli->query("SELECT * FROM `faculty` WHERE `current`=1 ORDER BY `lname` ASC");
									while($person = $people->fetch_array()){
										$my_letter = strtolower(substr($person['lname'],0,1));
										if($letter != $my_letter) {
											$letter = $my_letter;
											?>
											<a href="#<?=$letter?>"><?=ucfirst($letter)?></a>&nbsp;
											<?php
										}
									}
									?>
								</span>
							</div>
						</div>
						<!--teacher grid -->
						<div class="row span9">
							<ul class="thumbnails">
								<?php
								
								if ($mysqli->error) {
									die($mysqli->error);
								}
								$letter = ".";
								
								$people = $mysqli->query("SELECT * FROM `faculty` WHERE `current`=1 ORDER BY `lname` ASC");
								while($person = $people->fetch_array()){
									$my_letter = strtolower(substr($person['lname'],0,1));
									if($letter != $my_letter) {
										$letter = $my_letter;
										echo "<a name='".$letter."'></a>";
									}
									?>
									<li class="span2">
										<a href="/faculty/<?=$person['slug']?>/" class="thumbnail">
											<img src="<?=($person['picture']=="")?(($person['gender']==0)?"/male_placeholder.jpg":"/female placeholder.jpg"):$person['picture']?>" alt="">
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
