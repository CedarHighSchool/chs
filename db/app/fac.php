<?php include("top.php"); mustLogIn(); ?>
<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
	<a href="javascript:window.history.back()" class="btn btn-link btn-nav pull-left">
    <span class="icon icon-left-nav"></span>
    Back
  </a>
  <?php
  $stuff = $mysqli->query("SELECT * FROM `faculty` WHERE `id`=".$_GET['id']);
  $fac = $stuff->fetch_array();
  ?>
  <h1 class="title"><?=$fac['fname']?> <?=$fac['lname']?></h1>
</header>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content content-padded">
	<?php
  function per_link($it,$person) {
		if($person[$it.'u'] != ""){
			return "<div align=\"left\"><a href=\"".$person[$it.'u']."\">".$person[$it]."</a></div>";
		}else{
			return "<div align=\"left\">".$person[$it]."</div>";
		}
	}
  ?>
  <a href="image.php?u=<?=$fac['picture']?$fac['picture']:"https://dev.ammaron.gq/library/images/no_book_image.gif"?>"><img class="media-object pull-left" src="<?=$fac['picture']?$fac['picture']:"https://dev.ammaron.gq/library/images/no_book_image.gif"?>" style="max-height: 120px; padding-right:10px;"></a>
  
  <p><?=$fac['education']?$fac['education']:"No education information!"?></p>
  <br><hr>
  <a href="mailto:<?=$fac['email']?>"><?=$fac['email']?></a>
  <br><hr>
	<table class="table table-condensed">
		<tr>
			<th width="21%">Period</th>
			<th width="40%">A Day</th>
			<th width="39%">B Day</th>
		</tr>

		<tr>
			<td>1st</td>
			<td>
				<?=per_link('a1',$fac)?>
			</td>
			<td>
				<?=per_link('b1',$fac)?>
			</td>
		</tr>
		<tr>
			<td>2nd</td>
			<td>
				<?=per_link('a2',$fac)?>
			</td>
			<td>
				<?=per_link('b2',$fac)?>
			</td>
		</tr>
		<tr>
			<td>3rd</td>
			<td>
				<?=per_link('a3',$fac)?>
			</td>
			<td>
				<?=per_link('b3',$fac)?>
			</td>
		</tr>
		<tr>
			<td>4th</td>
			<td>
				<?=per_link('a4',$fac)?>
			</td>
			<td>
				<?=per_link('b4',$fac)?>
			</td>
		</tr>
	</table>
</div>
<?php include("bottom.php"); ?>