<?php
$link = mysqli_connect("localhost", "whsclxh", "1234", "green");
mysqli_query($link,"SET NAMES utf8");
if (!$link) die('failed to connect to database');
?>