<?php
session_start();
unset($_SESSION['game_username']);
header("location: /game/");