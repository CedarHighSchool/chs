<a href="users.php">See All Users</a>
    <table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Username</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$stuff = $mysqli->query("SELECT * FROM `users` WHERE `enabled`=1");
		if($stuff->num_rows <= 0){
		   ?>
		   <tr>
				<td colspan="3" style="text-align: center;">No notes.</td>
			</tr>
		   <?php
		}else{
				while($item = $stuff->fetch_array()){
				?>
					<tr>
						<td><?=$item['id']?></td>
						<td><?=$item['username']?></td>
						<td><a href="edituser.php?id=<?=$item['id']?>">Edit</a></td>
					</tr>
				<?php
				}
		}
		?>
	</tbody>
</table>