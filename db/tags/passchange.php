<?php include("head.php"); ?>
<h2>Change your <?=$c['name']?> password</h2><br>
<form action="" method="post">
	<?php
	if(isset($_POST['curpass'])) {
		$curpass = $_POST['curpass'];
		$newpass = $_POST['newpass'];
		$newpass2 = $_POST['newpass2'];
		if($curpass == $u['password']) {
			if($newpass == $newpass2) {
				$res = $mysqli->query("UPDATE `faculty` SET `password`='$newpass' WHERE `id`=".$u['id']);
				if($mysqli->error) {
					echo "Error: ".$mysqli->error."<br>Contact an administrator and supply them with this error message.";
				}else{
					?>
					<div class="alert alert-success" role="alert">Password has been updated!</div>
					<?php
				}
			}else{
				?>
				<div class="alert alert-danger" role="alert">Your new passwords do not match.</div>
				<?php
			}
		}else{
			?>
			<div class="alert alert-danger" role="alert">Incorrect current password!</div>
			<?php
		}
	}
	?>
  <div class="form-group row">
    <label for="curpass" class="col-sm-2 col-form-label">Current Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="curpass" name="curpass" placeholder="Your current account password">
    </div>
  </div>
  <div class="form-group row">
    <label for="newpass" class="col-sm-2 col-form-label">New Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="newpass" name="newpass" placeholder="A new password">
    </div>
  </div>
  <div class="form-group row">
    <label for="newpass2" class="col-sm-2 col-form-label">Repeat Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="newpass2" name="newpass2" placeholder="Repeat your new password">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-warning">Change Password</button>
    </div>
  </div>
</form>
<?php include("foot.php"); ?>