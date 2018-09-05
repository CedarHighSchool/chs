<?php
session_start();
if(!(isset($_SESSION['username']))){ 
   header("Location: /db/login.php");
}
?>
<?php $thisPage="clubs"; ?>

<!DOCTYPE html>

<html lang="en">
   
   <head>
      
      <title>Cedar High School</title>
      
      <?php include("../assets/inc/headtag.php"); 
      //if not logged in
      
      ?>
      <style>
         .imglabel {
         font-size: 12px;
         }
         
         @media (min-width: 768px) and (max-width: 979px) {
         .imglabel {
         font-size: 40px;
         }
         }
         
      </style>
      
   </head>
   
   <body>
      
      <?php include("../assets/inc/navbar.php") ?>
      
      
      <style type="text/css">
      a.thumbnail { height: 205px; }
      </style>
      
      <!-- Let the container begin! -->
      
      <div class="container">
      
      <div class="row">
      
      
      
      <?php include("../assets/inc/navlist.php") ?>
      
      
      
      <div class="span9">	
         <div class="well">
            <h1>Hunt Players</h1>
         </div>
      </div>
      <?php
	 		$stuff = $mysqli->query("SELECT * FROM `game_codes`");
	 		// $item = $stuff->fetch_array();
      ?>
      <div class="span6">
         <div class="well">
            <?php if($guser['enabled']==0){die("Your account is disabled. Go see Mr. Swallow for help if you think this is in error.");} ?>
            <script>
               $(function() {
                  $("#searcher").on("keyup", function() {
                     var value = $(this).val();
                      $("#listt tr").each(function(index) {
                           if($(this).text().toLowerCase().indexOf(value.toLowerCase()) != -1){
                              $(this).show();
                           }else{
                              $(this).hide();
                           }
                      });
                  });
               });
            </script>
            <input type="text" placeholder="Search" id="searcher"> &nbsp;&nbsp;Currently <b><?=$stuff->num_rows-$stuff2->num_rows?></b> codes
            <table class="table table-hover">
            	<thead>
            		<tr>
            			<th>ID</th>
            			<th>Code</th>
            		</tr>
          		</thead>
            	<tbody id="listt">
            		<?php
            		while($item = $stuff->fetch_array()) {
            			?>
            			<tr><td><?=$item['id']?></td><td><a href="code.php?id=<?=$item['id']?>"><?=$item['code']?></a></td></tr>
            			<?php
            		}
            		?>
            	</tbody>
            </table>
         </div><!--well-->
      </div><!--span3-->
      <div class="span3">
         <div class="well">
            <?php include("options.php"); ?>
         </div>
      </div>
      <style>
         .styled-table {
            font-size: 110%;
         }
         tr td:nth-child(1) {
            font-weight: bold;
         }
         .btn-account h4 {
            color: #ffffff !important;
         }
      </style>
      <div class="span3">
         <div class="well">
            <?php include("scores.php"); ?>
         </div>
      </div>
			<script src="//chs.ironk12.org/assets/js/jquery.js"></script>
			
			<script src="//chs.ironk12.org/assets/js/bootstrap.js"></script>
   </body>

</html>

