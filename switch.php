<?php
session_start();
$_SESSION['nopink'] = $_GET['to'];
header("Location: /");
?>