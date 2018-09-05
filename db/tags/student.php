<?php include("head.php"); ?>
<?php
if(!isset($_SESSION[$pre.'username'])) {
  die("<script>window.location.href='".$c['url']."login.php';</script>Please enable JavaScript.");
}
$students = $mysqli->query("SELECT * FROM `students` WHERE `id`=".$_GET['id']);
if($students->num_rows <= 0) {
	die("This student does not exist.");
}
$student = $students->fetch_array();
?>
<h3><?=$student['fname']?> <?=$student['lname']?></h3><br>
<h3>Choose a Day</h3>
<div class="row">
	<div class="col-md-2">
		<a href="tag_student.php?id=<?=$student['id']?>&day=mon" class="btn btn-success btn-sm">Monday</a><br>
		<?php
		$tags = $mysqli->query("SELECT * FROM `tags` WHERE `day`='mon' AND `teacher`=".$u['id']);
		if($tags->num_rows <= 0) {
			echo("No tags found.");
		}else{
			while($tag = $tags->fetch_array()) {
				$student = $mysqli->query("SELECT * FROM `students` WHERE `id`=".$tag['student']);
				$student = $student->fetch_array();
				?>
			  <a href="student.php?id=<?=$student['id']?>"><?=$student['fname']?> <?=$student['lname']?></a><br>
			  <?php
			}
		}
		?>
	</div>
	<div class="col-md-2">
		<a href="tag_student.php?id=<?=$student['id']?>&day=tues" class="btn btn-success btn-sm">Tuesday</a><br>
		<?php
		$tags = $mysqli->query("SELECT * FROM `tags` WHERE `day`='tues' AND `teacher`=".$u['id']);
		if($tags->num_rows <= 0) {
			echo("No tags found.");
		}else{
			while($tag = $tags->fetch_array()) {
				$student = $mysqli->query("SELECT * FROM `students` WHERE `id`=".$tag['student']);
				$student = $student->fetch_array();
				?>
			  <a href="student.php?id=<?=$student['id']?>"><?=$student['fname']?> <?=$student['lname']?></a><br>
			  <?php
			}
		}
		?>
	</div>
	<div class="col-md-2">
		<a href="tag_student.php?id=<?=$student['id']?>&day=wed" class="btn btn-success btn-sm">Wednesday</a><br>
		<?php
		$tags = $mysqli->query("SELECT * FROM `tags` WHERE `day`='wed' AND `teacher`=".$u['id']);
		if($tags->num_rows <= 0) {
			echo("No tags found.");
		}else{
			while($tag = $tags->fetch_array()) {
				$student = $mysqli->query("SELECT * FROM `students` WHERE `id`=".$tag['student']);
				$student = $student->fetch_array();
				?>
			  <a href="student.php?id=<?=$student['id']?>"><?=$student['fname']?> <?=$student['lname']?></a><br>
			  <?php
			}
		}
		?>
	</div>
	<div class="col-md-2">
		<a href="tag_student.php?id=<?=$student['id']?>&day=thu" class="btn btn-success btn-sm">Thursday</a><br>
		<?php
		$tags = $mysqli->query("SELECT * FROM `tags` WHERE `day`='thu' AND `teacher`=".$u['id']);
		if($tags->num_rows <= 0) {
			echo("No tags found.");
		}else{
			while($tag = $tags->fetch_array()) {
				$student = $mysqli->query("SELECT * FROM `students` WHERE `id`=".$tag['student']);
				$student = $student->fetch_array();
				?>
			  <a href="student.php?id=<?=$student['id']?>"><?=$student['fname']?> <?=$student['lname']?></a><br>
			  <?php
			}
		}
		?>
	</div>
	<div class="col-md-2">
		<a href="tag_student.php?id=<?=$student['id']?>&day=fri" class="btn btn-success btn-sm">Friday</a><br>
		<?php
		$tags = $mysqli->query("SELECT * FROM `tags` WHERE `day`='fri' AND `teacher`=".$u['id']);
		if($tags->num_rows <= 0) {
			echo("No tags found.");
		}else{
			while($tag = $tags->fetch_array()) {
				$student = $mysqli->query("SELECT * FROM `students` WHERE `id`=".$tag['student']);
				$student = $student->fetch_array();
				?>
			  <a href="student.php?id=<?=$student['id']?>"><?=$student['fname']?> <?=$student['lname']?></a><br>
			  <?php
			}
		}
		?>
	</div>
</div>
<?php include("foot.php"); ?>
