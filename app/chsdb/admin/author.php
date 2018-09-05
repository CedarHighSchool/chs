<? include("top.php"); ?>
	<div class="container">
		<?
		$author = $mysqli->query("SELECT * FROM `authors` WHERE `id`=".$_GET['id']);
		$author = $author->fetch_array();
		?>
		<h2><?=$author['fname']?> <?=$author['lname']?></h2>
		<h4>Books:</h4>
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
				$books = $mysqli->query("SELECT * FROM `books` WHERE `author`=".$_GET['id']);
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