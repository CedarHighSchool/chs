<?php
include("../../assets/inc/headtag.php");
$res = mysqli_stmt_init($mysqli);
mysqli_stmt_prepare($res, "DELETE FROM `photoQuarters` WHERE `id` = ?");
mysqli_stmt_bind_param($res, "i", $_GET['quarter']);
mysqli_stmt_execute($res);
?>
<button><a href="editQuarter.php?yearStart<?=$yearStart?>">See Year</a></button>