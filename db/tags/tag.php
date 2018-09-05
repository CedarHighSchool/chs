<?php include("head.php"); ?>
<?php
if(!isset($_SESSION[$pre.'username'])) {
  die("<script>window.location.href='".$c['url']."login.php';</script>Please enable JavaScript.");
}
?>
<h3>Tag Students</h3>
<input type="text" placeholder="Search" id="searcher" autofocus class="form-control">
<script>
   $(function() {
      $("#searcher").on("keyup", function() {
         var value = $(this).val();
          $("#listt a").each(function(index) {
               if($(this).text().toLowerCase().indexOf(value.toLowerCase()) != -1){
                  $(this).show();
               }else{
                  $(this).hide();
               }
          });
      });
   });
</script>
<div class="list-group" id="listt">
	<?php
	$students = $mysqli->query("SELECT * FROM `students`");
	if($students->num_rows <= 0) {
		die("List of students is not in the database. Please contact an administrator.");
	}
	while($student = $students->fetch_array()) {
	?>
  <a href="student.php?id=<?=$student['id']?>" class="list-group-item list-group-item-action"><?=$student['fname']?> <?=$student['lname']?></a>
  <?php
	}
	?>
</div>
<?php include("foot.php"); ?>