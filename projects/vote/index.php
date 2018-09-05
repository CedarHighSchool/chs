<?php
$pwwd=openssl_decrypt("3e+ypcazRdsWFRa1B1TYWQ==","AES128","thecodething",0,"4659865325647854");
$mysqli = new mysqli("localhost", "chscyberweb", $pwwd, "chs");
if($mysqli->error){
 die($mysqli->error);
}
$votes = $mysqli->query("SELECT project_votes.*, COUNT(project_votes.id) AS votes
											    FROM project_votes LEFT JOIN project_votes_people 
											    ON project_votes.id = project_votes_people.id
											    GROUP BY project_votes.id
											    ORDER BY votes");
echo $mysqli->error;
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<div class="container">
	<ul>
		<?php while($vote = $votes->fetch_array()) { ?>
		<li><?=$vote['title']?> (<?=$vote['votes']?>) <a href="up.php?id=<?=$vote['id']?>">Up</a> | <a href="down.php?id=<?=$vote['id']?>">Down</a></li>
		<?php } ?>
	</ul>
</div>
