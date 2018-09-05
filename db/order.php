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
        $manage->require_perm("edit");?>
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
			<?php mustLogIn(); ?>
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
								$("#preview-link").text($("#title").val());
							}else{
								$("#0url").hide();
								$("#0content").show();
								$("#preview-0").show();
								$("#preview-1").hide();
								$("#preview-title0").text($("#title").val());
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
					});
					</script>
					<span class="span6">

						<div class="row-fluid">

							<div class="well">
								<?php
								$conn = $manage->database();
								
								$result = $mysqli->query("SELECT * FROM `homepage` ORDER BY `order`");
								?>
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
								<p id="data"></p>
								<button id="saver" class="btn btn-success">Save</button>
							</div>
						</div>
						<!--/row-fluid -->
					<!--/span6 -->
					<ul class="span6" id="sortable-row">
						<?php
						$sql = "SELECT * FROM `homepage` ORDER BY `order` ASC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($item = $result->fetch_assoc()) {
								$delLink  = "<style>form { display: inline-block; }</style>";
								if($item['type'] == 0){
								?>
									<li class="well" id="<?=$item['id']?>">
										<h3><?=$item['title']?></h3>
										<p><?=$item['content']?></p>
										<?=$delLink?>
									</li>
								<?php
									}else if($item['type'] == 1){
								?>
									<li class="well" id="<?=$item['id']?>">
										<h3><center><a href="<?=$item['url']?>"><?=$item['title']?></a></center></h3>
										<?=$delLink?>
									</li>
								<?php
									}
							}
						} else {
							echo "0 results";
						}
						?>
					</ul>
					</span>
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