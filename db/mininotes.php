<a href="notes.php">See All Notes</a>
    <table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$stuff = $mysqli->query("SELECT * FROM `notes` ORDER BY `id` DESC");
		if($stuff->num_rows <= 0){
		   ?>
		   <tr>
				<td colspan="3" style="text-align: center;">No notes.</td>
			</tr>
		   <?php
		}else{
				while($item = $stuff->fetch_array()){
 				$userone = $mysqli->query("SELECT * FROM `users` WHERE `id`=".$item['user']);
 				$userone = $userone->fetch_array()['username'];

 				$userid = $mysqli->query("SELECT * FROM `users` WHERE `username`='".$_SESSION['username']."'");
 				$userid = $userid->fetch_array()['id'];
 				if($item['private'] == 1 && $userone!==$_SESSION['username']){
 					continue;
 				}
				?>
					<tr>
						<td><?=$item['id']?></td>
						<td><?=$item['title']?></td>
						<td><a href="seenote.php?id=<?=$item['id']?>">View</a><?php if($item['user'] == $userid){ ?> | <a href="editnote.php?id=<?=$item['id']?>">Edit</a><?php } ?></td>
					</tr>
				<?php
				}
		}
		?>
	</tbody>
</table>