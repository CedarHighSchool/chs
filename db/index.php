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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.6.0/Sortable.min.js"></script>
    </head>

    <body>

         <?php include("../assets/inc/navbar.php") ?>

            <!-- Let the container begin! -->
            
            <style>
							ul {
								list-style-type: none;
							}
						</style>

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
								$("#preview-link").html($("#title").val());
							}else{
								$("#0url").hide();
								$("#0content").show();
								$("#preview-0").show();
								$("#preview-1").hide();
								$("#preview-title0").html($("#title").val());
							}
						});
						$("#title").on("keyup", function() {
							if(type == 1){
								$("#preview-link").text($(this).val());
							}else{
								$("#preview-title0").text($(this).val());
							}
						});
						$("#content").on("keyup", function() {
							$("#preview-content").html($(this).val());
						});
						$("#url").on("keyup", function() {
							$("#preview-link").attr("href",$(this).val());
						});
						$("#passconvert").on("keyup", function() {
							$.post( "passc.php", { pswd:$("#passconvert").val() })
							  .done(function( data ) {
								$("#passview").val(data);
							  });
						});
						var time = 300000;
						var goto = "logout.php";
						function setTime() {
							timerr = window.setTimeout(function() {window.location.href = goto;}, time);
						}
						function resetTime() {
							console.log("reset");
							window.clearTimeout(timerr);
							setTime();
						}
						setTime();
						$("html").click(function() {
							resetTime();
						});
						$("input").on("keydown",function() {
							resetTime();
						});
					});
					</script>
					<span class="span6">

						<div class="row-fluid">

							<div class="well">
								<?php
								$conn = $manage->database();

								if(isset($_POST['type'])) {
									if($cuser['insert'] !== 1){
										echo("<div class=\"alert alert-danger\"><b>Sorry!</b> You do not have permission to do this!</div>");
									}else{
										// prepare and bind
										$type = $_POST['type'];
										$title = $_POST['title'];
										$content = $_POST['content'];
										$url = $_POST['url'];
										$res = $mysqli->query("SELECT MAX(`order`) AS `maxx` FROM `homepage`");
										$res = $res->fetch_assoc();
										$order = $res['maxx']+1;

										$stmt = $mysqli->prepare("INSERT INTO homepage (`order`, `type`, `title`, `content`, `url`) VALUES (?,?, ?, ?, ?)");
										$stmt->bind_param("issss", $order, $type, $title, $content, $url);
										$stmt->execute();

										if($mysqli->error){
											die($mysqli->error);
										}
										$manage->activity("Added item to homepage");
									}
									$stmt->close();
								}
								?>
								<form action="" method="post">
									<div class="form-group" id="0type">
										<label for="type">Type</label>
										<select name="type" id="type">
											<option selected value="0">Box</option>
											<option value="1">Link</option>
										</select>
									</div>
									<div class="form-group" id="0title">
										<label for="title">Title</label>
										<input type="text" class="form-control" name="title" id="title">
									</div>
									<div class="form-group" id="0content">
										<label for="editor2">Content</label>
										<textarea name="content" id="content"></textarea>
										<div id="editor2"></div>
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
									    	display: none !important;
									    }
									</style>

									<script>
									    var editor = ace.edit("editor2");
									    editor.setTheme("ace/theme/chrome");
									    editor.getSession().setMode("ace/mode/html");
									    editor.renderer.setShowGutter(false);
									    editor.getSession().on('change', function(e) {
											    $("#content").val(editor.getValue());
											    $("#content").trigger("keyup");
											});
									</script>
									<div class="form-group" id="0url">
										<label for="url">Link URL</label>
										<input type="url" class="form-control" name="url" id="url">
									</div>
									<input type="submit" value="Insert" class="btn btn-success">
								</form>
							</div>

						<div class="well" id="preview-1">
							<h3 id="preview-title1"><center><a href="#" id="preview-link"></a></center></h3>
						</div>
						<div class="well" id="preview-0">
							<h3 id="preview-title0"></h3>
							<p id="preview-content"></p>
						</div>
						</div>
						<!--/row-fluid -->

					</span>
					<!--/span6 -->
					<script>
					  $(function() {
					    var list = document.querySelector( "#sortable-row" );
					    Sortable.create(list);
					    $("#saver").click(function() {
					    	saveOrder();
					    });
					  });

					  function saveOrder() {
							var selectedLanguage = new Array();
							$('ul#sortable-row li').each(function() {
								selectedLanguage.push($(this).attr("id"));
							});
							$.post( "updateorder.php", { row_order: selectedLanguage })
							  .done(function( data ) {
							    $("#data").html(data);
							  });
					  }
					</script>
					<span class="pull-right">
						<span id="data"></span>
						<button id="saver" class="btn btn-success">Save Order</button>
					</span>
					<ul class="span3" id="sortable-row">
						<?php
						$sql = "SELECT * FROM `homepage` ORDER BY `order` ASC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($item = $result->fetch_assoc()) {
								$delLink  = "<style>form.pull-right { display: inline; padding:0; word-wrap:none;white-space: nowrap; width:auto; margin-right:-15px; margin-top:-15px;}</style>";
								$delLink .= "<form action='del.php' method='post' class='pull-right'><input hidden style='display:none;' name='order' value='".$item['order']."'><button type='submit' class='btn btn-danger btn-mini pull-right'><i class='fa fa-trash'></i></button></form>";
								$delLink .= "<form action='edit.php' method='post' class='pull-right' style='margin-right:0px;'><input hidden style='display:none;' name='order' value='".$item['order']."'><button type='submit' class='btn btn-success btn-mini pull-right'><i class='fa fa-pencil'></i></button></form>";
								
								if($item['type'] == 0){
								?>
									<li class="well" id="<?=$item['id']?>">
										<?=$delLink?>
										<h3><?=$item['title']?></h3>
										<p><?=$item['content']?></p>
									</li>
								<?php
									}else if($item['type'] == 1){
								?>
									<li class="well" id="<?=$item['id']?>">
										<?=$delLink?>
										<h3><center><a href="<?=$item['url']?>"><?=$item['title']?></a></center></h3>
									</li>
								<?php
									}
							}
						} else {
							echo "0 results";
						}
						?>
					</ul>
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