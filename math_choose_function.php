<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$mathtimes = $_SESSION['math_times'];
$math_choose_question = "SELECT * FROM math_choose where username = '$id' AND math_times = '$mathtimes'";
$math_choose_question_result = mysqli_query($link,$math_choose_question);
$math_choose = @mysqli_fetch_row($math_choose_question_result);
//choose的變數
$math_choose_picture=array();
$math_choose_picture[0]=$math_choose[2];
$math_choose_picture[1]=$math_choose[3];
$math_choose_picture[2]=$math_choose[4];
$math_choose_picture[3]=$math_choose[5];
$math_choose_picture[4]=$math_choose[6];
$math_choose_quantity=array();
$math_choose_quantity[0]=$math_choose[7];
$math_choose_quantity[1]=$math_choose[8];
$math_choose_quantity[2]=$math_choose[9];
$math_choose_quantity[3]=$math_choose[10];
$math_choose_quantity[4]=$math_choose[11];
$math_choose_question_option1=array();
$math_choose_question_option1[0]=$math_choose[12];
$math_choose_question_option1[1]=$math_choose[13];
$math_choose_question_option1[2]=$math_choose[14];
$math_choose_question_option1[3]=$math_choose[15];
$math_choose_question_option1[4]=$math_choose[16];
$math_choose_question_option2=array();
$math_choose_question_option2[0]=$math_choose[17];
$math_choose_question_option2[1]=$math_choose[18];
$math_choose_question_option2[2]=$math_choose[19];
$math_choose_question_option2[3]=$math_choose[20];
$math_choose_question_option2[4]=$math_choose[21];
$math_choose_question_option3=array();
$math_choose_question_option3[0]=$math_choose[22];
$math_choose_question_option3[1]=$math_choose[23];
$math_choose_question_option3[2]=$math_choose[24];
$math_choose_question_option3[3]=$math_choose[25];
$math_choose_question_option3[4]=$math_choose[26];
$math_choose_question_option4=array();
$math_choose_question_option4[0]=$math_choose[27];
$math_choose_question_option4[1]=$math_choose[28];
$math_choose_question_option4[2]=$math_choose[29];
$math_choose_question_option4[3]=$math_choose[30];
$math_choose_question_option4[4]=$math_choose[31];
$math_choose_question_option5=array();
$math_choose_question_option5[0]=$math_choose[32];
$math_choose_question_option5[1]=$math_choose[33];
$math_choose_question_option5[2]=$math_choose[34];
$math_choose_question_option5[3]=$math_choose[35];
$math_choose_question_option5[4]=$math_choose[36];
?>