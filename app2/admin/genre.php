<? include("top.php"); ?>
	<div class="container">
		<?
		$genre = $mysqli->query("SELECT * FROM `genres` WHERE `id`=".$_GET['id']);
		$genre = $genre->fetch_array();
		?>
		<h2><?=$genre['name']?></h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?
				$books = $mysqli->query("SELECT * FROM `books` WHERE `genre`=".$_GET['id']);
				while($book = $books->fetch_array()) {
				?>
				<tr>
					<td><?=$book['id']?></td>
					<td><?=$book['title']?></td>
					<td><a href="book.php?id=<?=$book['id']?>">View</a></td>
				</tr>
				<?
				}
				?>
			</tbody>
		</table>
	</div>
<? include("bottom.php"); ?>