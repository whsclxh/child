<?php
include("mysql_connect.php");
$ItemName=$_POST['ItemName'];
echo "$ItemName";
echo gettype($ItemName);
$PL = "SELECT * FROM product_list where cost>99 ORDER BY cost+0 ASC";
$result = mysqli_query($link,$PL);
$num_rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
echo "$row[0]";
echo gettype($row[0]);
?>