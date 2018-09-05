<? include("top.php"); ?>
	<div class="container">
		<h2>Add Book</h2>
		<?
		if(isset($_POST['title'])) {
			$title = $_POST['title'];
			$desc = $_POST['desc'];
			$author = $_POST['author'];
			$genre = $_POST['genre'];
			$isbn = $_POST['isbn'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$picture = $_POST['picture'];
			
			if($author == "newone"){
				$addauthor = $mysqli->prepare("INSERT INTO `authors` (`fname`, `lname`) VALUES (?, ?)");
				$addauthor->bind_param("ss", $fname, $lname);
				$addauthor->execute();
				$author = $mysqli->insert_id;
			}
			
			$addbook = $mysqli->prepare("INSERT INTO `books` (`title`, `desc`, `author`, `picture`, `genre`, `isbn`) VALUES (?, ?, ?, ?, ?, ?)");
			$addbook->bind_param("ssssis", $title, $desc, $author, $picture, $genre, $isbn);
			$addbook->execute();
			if($mysqli->error){
				echo $mysqli->error;
			}else{
				echo "Book added!";
				$done = true;
			}
		}
		?>
		<script>
			$(function() {
				if($("#author").val() == "newone") {
					$("#authormaker").show();
				}else{
					$("#authormaker").hide();
				}
				$("#author").on("change", function() {
					if($("#author").val() == "newone") {
						$("#authormaker").show();
					}else{
						$("#authormaker").hide();
					}
				});
			});
		</script>
		<form action="" method="post">
			<input type="text" name="title" placeholder="Book title" class="form-control" id="title" value="<?=$_POST['title']?>">
			<textarea name="desc" class="form-control" placeholder="Description of book"><?=$_POST['desc']?></textarea>
			<input type="url" name="picture" placeholder="Picture URL" class="form-control" value="<?=$_POST['picture']?>">
			<select name="author" class="form-control" id="author">
				<?
				$authors = $mysqli->query("SELECT * FROM `authors`");
				while($author = $authors->fetch_array()){
				?>
				<option value="<?=$author['id']?>" <?=($_POST['author']==$author['id'])?"selected":""?>><?=$author['fname']?> <?=$author['lname']?></option>
				<?
				}
				?>
				<option value="newone" <?=($_POST['author']=="newone")?"selected":""?>>New Author</option>
			</select>
			<span style="display:none;" id="authormaker">
				<input type="text" placeholder="Author first" class="form-control" name="fname" value="<?=$_POST['fname']?>">
				<input type="text" placeholder="and last name" class="form-control" name="lname" value="<?=$_POST['lname']?>">
			</span>
			<select name="genre" class="form-control" id="genre">
				<?
				$genres = $mysqli->query("SELECT * FROM `genres`");
				while($genre = $genres->fetch_array()){
				?>
				<option value="<?=$genre['id']?>" <?=($_POST['genre']==$genre['id'])?"selected":""?>><?=$genre['name']?></option>
				<?
				}
				?>
			</select>
			<input type="text" name="isbn" placeholder="ISBN-10" class="form-control" value="<?=$_POST['isbn']?>">
			<a href="https://isbnsearch.org" id="isbnsearch" target="_blank">ISBN Search</a>
			<button type="submit" class="btn btn-success">Add</button>
		</form>
	</div>
<? include("bottom.php"); ?>