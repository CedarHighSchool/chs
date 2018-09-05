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

        <?php include("../assets/inc/headtag.php"); $manage->require_perm("edit"); ?>
    </head>

    <body>

         <?php include("../assets/inc/navbar.php") ?>

            <!-- Let the container begin! -->

			<div class="container">
				<div class="row">

					<?php include("../assets/inc/navlist.php") ?>
					<script>
					$(document).ready(function() {
						var type = 0;
						$("#0url").hide();
						$("#preview-1").hide();
						$("#type").on("change", function() {
							type = $("#type").val();
							if(type==1){
								$("#0url").show();
								$("#0content").hide();
								$("#preview-1").show();
								$("#preview-0").hide();
								$("#preview-2").hide();
								$("#preview-link").html($("#title").val());
							}else if(type==2){
								$("#0url").show();
								$("#0content").show();
								$("#preview-0").hide();
								$("#preview-1").hide();
								$("#preview-2").show();
								$("#preview-title2").html($("#title").val());
							}else{
								$("#0url").hide();
								$("#0content").show();
								$("#preview-0").show();
								$("#preview-1").hide();
								$("#preview-2").hide();
								$("#preview-title0").html($("#title").val());
							}
						});
						$("#title").on("keyup", function() {
							if(type == 1){
								$("#preview-link").html($(this).val());
							}else if(type == 2){
								$("#preview-title2").html($(this).val());
							}else{
								$("#preview-title0").html($(this).val());
							}
						});
						$("#content").on("keyup", function() {
							$("#preview-content").html($(this).val());
						});
						$("#url").on("keyup", function() {
							$("#preview-link").attr("href",$(this).val());
						});
						$("#type").trigger("change");
						$("#url").trigger("keyup");
						$("#content").trigger("keyup");
						$("#title").trigger("keyup");
					});
					</script>
					<span class="span6">

						<div class="row-fluid">

							<div class="well">
								<?php
								if($cuser['edit'] != 1){
									echo("<div class=\"alert alert-danger\"><b>Sorry!</b> You do not have permission to do this!</div>");
								}
								$conn = $manage->database();
								
								$ordr = $_POST['order'];
								
								if(isset($_POST['type'])) {
									// prepare and bind
									$type = $_POST['type'];
									$title = $_POST['title'];
									$content = $_POST['content'];
									$url = $_POST['url'];
									
									$stmt = $mysqli->prepare("UPDATE `homepage` SET type=?, title=?, content=?, url=? WHERE `order`=$ordr");
									if($mysqli->error){
										die("Error: ".$mysqli->error);
									}
									$stmt->bind_param("ssss", $type, $title, $content, $url);
									$stmt->execute();
									if($stmt){
										$manage->activity("Updated homepage item", "homepage", $ordr);
										alertbox("Saved!","success");
									}else{
										alertbox("Error: ".$stmt->error,"danger");
									}
									$stmt->close();
								}
								$sql = "SELECT * FROM `homepage` WHERE `order`=$ordr";
								$result = $mysqli->query($sql);
		
								if ($result->num_rows > 0) {
									// good so far
									$box1 = $result->fetch_assoc();
								} else {
									die("Item does not exist. If you think this is in error, contact Joshua Anderson."); // nope!
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
								<form action="" method="post">
									<div class="form-group" id="0type">
										<label for="type">Type</label>
										<select name="type" id="type">
											<option value="0" <?php if($box1['type']=="0"){echo "selected";}else{echo "";} ?>>Box</option>
											<option value="1" <?php if($box1['type']=="1"){echo "selected";}else{echo "";} ?>>Link</option>
											<!--<option value="2" <?php if($box1['type']=="2"){echo "selected";}else{echo "";} ?>>Link with Box</option>-->
										</select>
									</div>
									<input type="text" name="order" value="<?=$box1['order']?>" hidden style="display:none !important;">
									<div class="form-group" id="0title">
										<label for="title">Title</label>
										<input type="text" class="form-control" name="title" id="title" value='<?=$box1['title']?>'>
									</div>
									<div class="form-group" id="0content">
										<label for="content">Content</label>
										<textarea name="content" id="content" style="display:none;"><?=$box1['content']?></textarea>
										<div id="editor2"><?=$box1['content']?></div>
									</div>
									<style type="text/css" media="screen">
									    #editor2 { 
								        width: 100%;
								        height: 200px;
									    }
									    form {
									    	width: 100%;
									    	display: inline-block;
									    }
									    #content {
									    	width: 100%;
									    	height: 200px;
									    }
									</style>
									
									<script>
									    var editor = ace.edit("editor2");
									    editor.setTheme("ace/theme/chrome");
									    editor.getSession().setMode("ace/mode/html");
									    editor.renderer.setShowGutter(false);
									    editor.setValue($("#content").val(), 1);
									    editor.getSession().on('change', function(e) {
											    $("#content").val(editor.getValue());
											    $("#content").trigger("keyup");
											});
									</script>
									<div class="form-group" id="0url">
										<label for="url">Link URL</label>
										<input type="url" class="form-control" name="url" id="url" value="<?=$box1['url']?>">
									</div>
									<input type="submit" value="Save" class="btn btn-success" id="saver">
								</form>
							</div>
							<div class="well" id="preview-1">
								<h3 id="preview-title1"><center><a href="#" id="preview-link"></a></center></h3>
							</div>
							<div class="well" id="preview-0">
								<h3 id="preview-title0"></h3>
								<p id="preview-content"></p>
							</div>
							<div class="well" id="preview-2">
								<h3 id="preview-title2"><center><a href="#" id="preview-link-2"></a></center></h3>
								<p id="preview-content2"></p>
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