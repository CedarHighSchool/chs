<? include("top.php"); ?>
	<div class="container">
		<?
		$books = $mysqli->query("SELECT * FROM `books` WHERE `id`=".$_GET['id']);
		$book = $books->fetch_array();
		$author = $mysqli->query("SELECT * FROM `authors` WHERE `id`=".$book['author']);
		$author = $author->fetch_array();
		?>
		<img src="<?=$book['picture']?$book['picture']:"https://dev.ammaron.gq/library/images/no_book_image.gif"?>" class="img-thumbnail col-md-2" style="margin-right:10px;" align="left">
		<h2><?=$book['title']?></h2>
		<p><?=$book['desc']?></p>
		<p>Author: <a href="author.php?id=<?=$book['author']?>"><?=$author['fname']?> <?=$author['lname']?></a></p>
	</div>
<? include("bottom.php"); ?>