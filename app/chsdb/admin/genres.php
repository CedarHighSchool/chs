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
				$genres = $mysqli->query("SELECT * FROM `genres`");
				while($genre = $genres->fetch_array()) {
					$books = $mysqli->query("SELECT * FROM `books` WHERE `genre`=".$genre['id']);
				?>
				<tr>
					<td><?=$genre['id']?></td>
					<td><?=$genre['name']?></td>
					<td><?=$books->num_rows?></td>
					<td><a href="genre.php?id=<?=$genre['id']?>">View</a></td>
				</tr>
				<?
				}
				?>
			</tbody>
		</table>
	</div>
<? include("bottom.php"); ?>