<? include("top.php"); ?>
	<div class="container">
		<?
		$patron = $mysqli->query("SELECT * FROM `patrons` WHERE `id`=".$_GET['id']);
		$patron = $patron->fetch_array();
		?>
		<h2><?=$patron['fname']?> <?=$patron['lname']?></h2>
		<h5><?=$patron['number']?></h5>
		<h4>Checked Out:</h4>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Author</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?
				$cbooks = $mysqli->query("SELECT * FROM `checkout` WHERE `patron`=".$_GET['id']);
				while($thisone = $cbooks->fetch_array()) {
					$copies = $mysqli->query("SELECT * FROM `copies` WHERE `id`=".$thisone['copy']);
					$copy = $copies->fetch_array();
					$books = $mysqli->query("SELECT * FROM `books` WHERE `id`=".$copy['book']);
					$book = $books->fetch_array();
					$author = $mysqli->query("SELECT * FROM `authors` WHERE `id`=".$book['author']);
					$author = $author->fetch_array();
				?>
				<tr>
					<td><?=$book['id']?></td>
					<td><?=$book['title']?></td>
					<td><a href="author.php?id=<?=$book['author']?>"><?=$author['fname']?> <?=$author['lname']?></a></td>
					<td><a href="book.php?id=<?=$book['id']?>">View</a></td>
				</tr>
				<?
				}
				?>
			</tbody>
		</table>
		<h4>Reserved:</h4>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Author</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?
				$rbooks = $mysqli->query("SELECT * FROM `reserve` WHERE `patron`=".$_GET['id']);
				while($thisone = $rbooks->fetch_array()) {
					$copies = $mysqli->query("SELECT * FROM `copies` WHERE `id`=".$thisone['copy']);
					$copy = $copies->fetch_array();
					$books = $mysqli->query("SELECT * FROM `books` WHERE `id`=".$copy['book']);
					$book = $books->fetch_array();
					$author = $mysqli->query("SELECT * FROM `authors` WHERE `id`=".$book['author']);
					$author = $author->fetch_array();
				?>
				<tr>
					<td><?=$book['id']?></td>
					<td><?=$book['title']?></td>
					<td><a href="author.php?id=<?=$book['author']?>"><?=$author['fname']?> <?=$author['lname']?></a></td>
					<td><a href="book.php?id=<?=$book['id']?>">View</a></td>
				</tr>
				<?
				}
				?>
			</tbody>
		</table>
	</div>
<? include("bottom.php"); ?>