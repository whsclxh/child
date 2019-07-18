<?php
$link = mysqli_connect("localhost", "root", "12345678", "green");
mysqli_query($link,"SET NAMES utf8");
if (!$link) die('failed to connect to database');
?>