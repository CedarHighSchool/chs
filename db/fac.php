<?php $thisPage = "directory"; ?>

	<!DOCTYPE html>

	<html lang="en">

	<head>

		<title>Cedar High School</title>

		<?php include "../assets/inc/headtag.php" ?>

	</head>

	<body>

		<?php include "../assets/inc/navbar.php" ?>



			<!-- Let the container begin! -->

			<div class="container">

				<div class="row">



					<?php include "../assets/inc/navlist.php";
				$mysqli = new mysqli("localhost", "chscyberweb", $pwwd, "chs");

				if ($mysqli->error) {
					die($mysqli->error);
				}

				
				if(isset($_GET['id'])) {
					$person = $mysqli->query("SELECT * FROM `faculty` WHERE `id`=" . $_GET['id']);
				}else if(isset($_GET['slug'])) {
					$person = $mysqli->query("SELECT * FROM `faculty` WHERE `slug`='".$_GET['slug']."'");
				}else{
					die("No teacher specified.");
				}
				if($person->num_rows <= 0){
					die("<span class=\"span9\"><div class=\"well\">This person was not found.</div></span>");
				}
				$person = $person->fetch_array();
				
				$editor = $mysqli->query("SELECT * FROM `fac_owners` WHERE `user`=".$cuser['id']." AND `fac`=".$_GET['id']);
				if($editor->num_rows > 0){
					$editor = true;
				}else{
					$editor = false;
				}
				
				function per_link($it,$person) {
					if($person[$it.'u'] != ""){
						return "<div align=\"left\"><a href=\"".$person[$it.'u']."\">".$person[$it]."</a></div>";
					}else{
						return "<div align=\"left\">".$person[$it]."</div>";
					}
				}

				?>

						<div class="span9">

							<div class="well">

								<h3><a href="<?=$person['website'] ?>"><?=$person['fname'] ?> <?=$person['lname'] ?></a></h3><?php if($cuser['edit'] == 1 || $editor == true){ ?><a href="/db/editfac.php?id=<?=$person['id']?>" class="btn btn-default pull-right">Edit</a><?php } ?>

							</div>

						</div>



						<div class="span2">

							<div class="thumbnail">

								<img src="<?=($person['picture']=="")?(($person['gender']==0)?"/male_placeholder.jpg":"/female placeholder.jpg"):$person['picture']?>" alt="">

							</div>

						</div>
						<br />



						<div class="span4">

							<div class="well">

								<h3>Schedule</h3>
								<?php if($person['website']!=""){ ?><h5>&nbsp;<a href="<?=$person['website'] ?>">Main Website</a></h5><?php } ?>

								<table class="table table-condensed">

									<tr>

										<th width="21%">Period</th>

										<th width="40%">A Day</th>

										<th width="39%">B Day</th>

									</tr>

									<tr>
										<td>1st</td>
										<td>
											<?=per_link('a1',$person)?>
										</td>
										<td>
											<?=per_link('b1',$person)?>
										</td>
									</tr>
									<tr>
										<td>2nd</td>
										<td>
											<?=per_link('a2',$person)?>
										</td>
										<td>
											<?=per_link('b2',$person)?>
										</td>
									</tr>
									<tr>
										<td>3rd (XLT)</td>
										<td>
											
										</td>
										<td>
											
										</td>
									</tr>
									<tr>
										<td>4th</td>
										<td>
											<?=per_link('a4',$person)?>
										</td>
										<td>
											<?=per_link('b4',$person)?>
										</td>
									</tr>
									<tr>
										<td>5th</td>
										<td>
											<?=per_link('a5',$person)?>
										</td>
										<td>
											<?=per_link('b5',$person)?>
										</td>
									</tr>
								</table>

							</div>

							<div class="well">

								<h5>Education</h5>

								<p><?=nl2br($person['education']?$person['education']:"No education information")?></p>

							</div>
							
							<?php
							if(!empty($person['extras'])) {
								?>
								<div class="well">
	
									<h5>Extras</h5>
	
									<p><?=nl2br($person['extras'])?></p>
	
								</div>
								<?php
							}
							?>

						</div>



						<div class="span3">

							<div class="well">

								<h5>Contact</h5>

								<ul class="nav nav-list">

									<li><a href="mailto:<?=$person['email']?>"><?=$person['email']?></a></li>

									<li><b>Room:</b> <?=$person['room']?></li>

								</ul>

							</div>

						</div>

				</div>
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