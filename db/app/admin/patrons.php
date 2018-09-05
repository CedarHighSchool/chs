<? include("top.php"); ?>
	<div class="container">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Number</th>
					<th>Name</th>
					<th>Checked Out</th>
					<th>Reserved</th>
				</tr>
			</thead>
			<tbody>
				<?
				$patrons = $mysqli->query("SELECT * FROM `patrons`");
				while($patron = $patrons->fetch_array()) {
					$books = $mysqli->query("SELECT * FROM `checkout` WHERE `patron`=".$patron['id']);
					$books2 = $mysqli->query("SELECT * FROM `reserve` WHERE `patron`=".$patron['id']);
				?>
				<tr>
					<td><?=$patron['id']?></td>
					<td><?=$patron['number']?></td>
					<td><?=$patron['fname']?> <?=$patron['lname']?></td>
					<td><?=$books->num_rows?></td>
					<td><?=$books2->num_rows?></td>
					<td><a href="patron.php?id=<?=$patron['id']?>">View</a></td>
				</tr>
				<?
				}
				?>
			</tbody>
		</table>
	</div>
<? include("bottom.php"); ?>