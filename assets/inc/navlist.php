<span class="span3">

	<div class="well sidebar-nav">

		<ul class="nav nav-list">

		<li><a class="imgLink" href="//chs.ironk12.org/"><img src="../../../assets/img/logo.png" width="100%" height="200px" /></a></li>

		</ul>

	</div>



		<?=area("left_buttons")?>

    
    <div class="well sidebar-nav" style="padding-bottom: 1px;">
    
    	<h5>Search this site!</h5>
				<form action="//chs.ironk12.org/search.php" method="get" class="form-inline">
					<input type="text" name="q" id="q" placeholder="Search" value="<?=$_GET['q']?>" style="max-width:100%;"><input type="submit" value="Go" style="display:none;">
				</form>
    </div>

	

	<?=area("left_nav")?>

	

	<?=area("report_button")?>

	

</span><!--/span-->