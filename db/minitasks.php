<style>
	.task-me {
		color: green;
	}
	.assign-me {
		font-weight: bold;
	}
</style>
<a href="tasks.php">See All Tasks</a>
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
		$stuff = $mysqli->query("SELECT * FROM `todo` WHERE `done`=0 ORDER BY case when `assigned_to`=".$cuser['id']." then 0 else 1 end, `priority` DESC, `created_at` DESC LIMIT 10");
		if($stuff->num_rows <= 0){
		   ?>
		   <tr>
				<td colspan="3" style="text-align: center;">All done!</td>
			</tr>
		   <?php
		}else{
				while($item = $stuff->fetch_array()){
				?>
					<tr<?=($item['assigned_to']==$cuser['id'])?" class='task-me'":""?>>
						<td><?=$item['id']?></td>
						<td><?=$item['title']?></td>
						<td><a href="seetask.php?id=<?=$item['id']?>">View</a> <span style="color:black !important;"> | </span> <a href="edittask.php?id=<?=$item['id']?>">Edit</a></td>
					</tr>
				<?php
				}
		}
		?>
	</tbody>
</table>
