<?php
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['username'])){
	header("location: /db/login.php");
}
?>
<?php $thisPage="dbs"; ?>

    <!DOCTYPE html>

    <html lang="en">

    <head>

        <title>Cedar High School</title>

        <?php include("../assets/inc/headtag.php") ?>
    </head>

    <body>

         <?php include("../assets/inc/navbar.php") ?>

            <!-- Let the container begin! -->

			<div class="container">
				<div class="row">

					<?php include("../assets/inc/navlist.php") ?>
					<span class="span6">

						<div class="row-fluid">

							<div class="well">
								Sorry, you don't have permission to do that.
							</div>
						</div>
						<!--/row-fluid -->

					</span>
					<!--/span6 -->
				</div>
				<!--/row -->

				<?php include("assets/inc/footer.php") ?>

			</div>
                <!-- /container -->

                <!-- Placed at the end of the document so the pages load faster -->

                <script src="//chs.ironk12.org/assets/js/jquery.js"></script>

                <script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
    </body>

    </html>