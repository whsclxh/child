<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$mathtimes = $_SESSION['math_times'];
$math_add_sub_question = "SELECT * FROM math_add_sub where username = '$id' AND math_times = '$mathtimes'";
$math_add_sub_question_result = mysqli_query($qaq,$math_add_sub_question);
$math_add_sub = @mysqli_fetch_row($math_add_sub_question_result);
$math_add_sub_picture=array();
$math_add_sub_picture[0]=$math_add_sub[2];
$math_add_sub_picture[1]=$math_add_sub[3];
$math_add_sub_picture[2]=$math_add_sub[4];
$math_add_sub_picture[3]=$math_add_sub[5];
$math_add_sub_picture[4]=$math_add_sub[6];
$math_add_sub_picture[5]=$math_add_sub[7];
$math_add_sub_picture[6]=$math_add_sub[8];
$math_add_sub_picture[7]=$math_add_sub[9];
$math_add_sub_picture[8]=$math_add_sub[10];
$math_add_sub_picture[9]=$math_add_sub[11];
$math_add_sub_quantity=array();
$math_add_sub_quantity[0]=$math_add_sub[12];
$math_add_sub_quantity[1]=$math_add_sub[13];
$math_add_sub_quantity[2]=$math_add_sub[14];
$math_add_sub_quantity[3]=$math_add_sub[15];
$math_add_sub_quantity[4]=$math_add_sub[16];
$math_add_sub_quantity[5]=$math_add_sub[17];
$math_add_sub_quantity[6]=$math_add_sub[18];
$math_add_sub_quantity[7]=$math_add_sub[19];
$math_add_sub_quantity[8]=$math_add_sub[20];
$math_add_sub_quantity[9]=$math_add_sub[21];
$math_add_sub_sign=array();
$math_add_sub_sign[0]=$math_add_sub[22];
$math_add_sub_sign[1]=$math_add_sub[23];
$math_add_sub_sign[2]=$math_add_sub[24];
$math_add_sub_sign[3]=$math_add_sub[25];
$math_add_sub_sign[4]=$math_add_sub[26];
?>