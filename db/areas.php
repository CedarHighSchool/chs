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

        <?php include("../assets/inc/headtag.php");
        $manage->require_perm("edit");
        ?>
    </head>

    <body>

         <?php include("../assets/inc/navbar.php") ?>

            <!-- Let the container begin! -->

			<div class="container">
				<div class="row">

					<?php include("../assets/inc/navlist.php") ?>
					<?php mustLogIn(); ?>
					<script>
					$(function() {
						$(".btn-save").click(function() {
							var obid = $(this);
							$.post("/db/savearea.php?ajax=1", { name: obid.data("var"), content: $("#"+obid.data("var")).val() })
						  .done(function( stuff ) {
						  	if(stuff == "true"){
									$("#"+obid.data("var")+"_tt").text("Saved!");
									$("#"+obid.data("var")+"_te").text("");
									var it = obid;
									setTimeout(function() {
										$("#"+it.data("var")+"_tt").text("");
									}, 500);
						  	}else{
						  		$("#"+obid.data("var")+"_te").text("Error! "+stuff);
						  	}
						  });
							return false;
						});
						$(".btn-copy").click(function() {
							prompt("Copy this to use in code:","\<\?\=area\(\""+$(this).data("var")+"\"\)\?\>");
							return false;
						});
					});
					</script>
					<span class="span9">

						<div class="row-fluid">

							<div class="well">
								<h1><i class="fa fa-microchip"></i> Variables</h1>
							</div>
							<div class="well">
								<?php
								if($cuser['edit'] != 1){
									die("<div class=\"alert alert-danger\"><b>Sorry!</b> You do not have permission to do this!</div>");
								}
								$conn = $manage->database();
								// Check connection
								if ($conn->connect_error) {
									die("<div class=\"alert alert-danger\"><b>Connection failed</b><br> " . $conn->connect_error . "</div>");
								}else{
									echo "<div class=\"alert alert-success\">Connected</div>";
								}
								$varlist = $conn->query("select * from areas");
								while($item = $varlist->fetch_array()){
									?>
									<form class="form-horizontal">
										<div class="control-group">
									    <label class="control-label" for="<?=$item['name']?>"><?=$item['name']?></label>
									    <div class="controls">
									      <textarea id="<?=$item['name']?>" data-var="<?=$item['name']?>" placeholder="value for <?=$item['name']?>"><?=$item['content']?></textarea>
									      <?php if($cuser['coder'] == 1){ ?>
									      <button type="submit" class="btn btn-primary btn-copy" id="<?=$item['name']?>_copy" data-var="<?=$item['name']?>"><i class="fa fa-copy"></i></button>&nbsp;
									      <?php } ?>
									      <button type="submit" class="btn btn-success btn-save" id="<?=$item['name']?>_save" data-var="<?=$item['name']?>"><i class="fa fa-save"></i></button>&nbsp;
									      <span style="color: green;" id="<?=$item['name']?>_tt" data-var="<?=$item['name']?>"></span>&nbsp;
									      <span style="color: red;" id="<?=$item['name']?>_te" data-var="<?=$item['name']?>"></span>
									    </div>
									  </div>
									</form>
									<?php
								}
								?>
							</div>
						</div>
						<!--/row-fluid -->

					</span>
					<!--/span6 -->
					<?php $conn->close(); ?>
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