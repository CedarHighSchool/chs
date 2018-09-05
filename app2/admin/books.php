<? include("top.php"); ?>
	<div class="container">
		<a href="addbook.php" class="btn btn-default">Add Book</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Author</th>
					<th>Genre</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?
				$books = $mysqli->query("SELECT * FROM `books`");
				while($book = $books->fetch_array()) {
					$author = $mysqli->query("SELECT * FROM `authors` WHERE `id`=".$book['author']);
					$author = $author->fetch_array();
					$genre = $mysqli->query("SELECT * FROM `genres` WHERE `id`=".$book['genre']);
					$genre = $genre->fetch_array();
				?>
				<tr>
					<td><?=$book['id']?></td>
					<td><?=$book['title']?></td>
					<td><a href="author.php?id=<?=$book['author']?>"><?=$author['fname']?> <?=$author['lname']?></a></td>
					<td><a href="genre.php?id=<?=$book['genre']?>"><?=$genre['name']?></a></td>
					<td><a href="book.php?id=<?=$book['id']?>">View</a></td>
				</tr>
				<?
				}
				?>
			</tbody>
		</table>
	</div>
<? include("bottom.php"); ?>