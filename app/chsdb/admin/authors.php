<? include("top.php"); ?>
	<div class="container">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Books</th>
				</tr>
			</thead>
			<tbody>
				<?
				$authors = $mysqli->query("SELECT * FROM `authors`");
				while($author = $authors->fetch_array()) {
					$books = $mysqli->query("SELECT * FROM `books` WHERE `author`=".$author['id']);
				?>
				<tr>
					<td><?=$author['id']?></td>
					<td><?=$author['fname']?> <?=$author['lname']?></td>
					<td><?=$books->num_rows?></td>
					<td><a href="author.php?id=<?=$author['id']?>">View</a></td>
				</tr>
				<?
				}
				?>
			</tbody>
		</table>
	</div>
<? include("bottom.php"); ?>