<a href="messages.php">See All Messages</a>
    <table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Subject</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$stuff = $mysqli->query("SELECT * FROM `msg` WHERE `to`=".$cuser['id']." ORDER BY `id` DESC");
		if($stuff->num_rows <= 0){
		   ?>
		   <tr>
				<td colspan="3" style="text-align: center;">No messages.</td>
			</tr>
		   <?php
		}else{
				while($item = $stuff->fetch_array()){
 				$userone = him($item['user'], "fullname");

 				$userid = $mysqli->query("SELECT * FROM `users` WHERE `username`='".$_SESSION['username']."'");
 				$userid = $userid->fetch_array()['id'];
				?>
					<tr>
						<td><?=$item['id']?></td>
						<td><?=$item['subject']?></td>
						<td><a href="seemessage.php?id=<?=$item['id']?>">View</a></td>
					</tr>
				<?php
				}
		}
		?>
	</tbody>
</table>