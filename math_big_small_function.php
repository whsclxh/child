<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$mathtimes = $_SESSION['math_times'];
$math_big_small_question = "SELECT * FROM math_big_small where username = '$id' AND math_times = '$mathtimes'";
$math_big_small_question_result = mysqli_query($qaq,$math_big_small_question);
$math_big_small= @mysqli_fetch_row($math_big_small_question_result);
$math_big_small_question1_option=array();
$math_big_small_question1_option[0]=$math_big_small[2];
$math_big_small_question1_option[1]=$math_big_small[3];
$math_big_small_question1_option[2]=$math_big_small[4];
$math_big_small_question2_option=array();
$math_big_small_question2_option[0]=$math_big_small[5];
$math_big_small_question2_option[1]=$math_big_small[6];
$math_big_small_question2_option[2]=$math_big_small[7];
$math_big_small_question3_option=array();
$math_big_small_question3_option[0]=$math_big_small[8];
$math_big_small_question3_option[1]=$math_big_small[9];
$math_big_small_question3_option[2]=$math_big_small[10];
$math_big_small_question4_option=array();
$math_big_small_question4_option[0]=$math_big_small[11];
$math_big_small_question4_option[1]=$math_big_small[12];
$math_big_small_question4_option[2]=$math_big_small[13];
$math_big_small_question5_option=array();
$math_big_small_question5_option[0]=$math_big_small[14];
$math_big_small_question5_option[1]=$math_big_small[15];
$math_big_small_question5_option[2]=$math_big_small[16];
$math_big_small_question6_option=array();
$math_big_small_question6_option[0]=$math_big_small[17];
$math_big_small_question6_option[1]=$math_big_small[18];
$math_big_small_question6_option[2]=$math_big_small[19];
$math_big_small_question7_option=array();
$math_big_small_question7_option[0]=$math_big_small[20];
$math_big_small_question7_option[1]=$math_big_small[21];
$math_big_small_question7_option[2]=$math_big_small[22];
$math_big_small_question8_option=array();
$math_big_small_question8_option[0]=$math_big_small[23];
$math_big_small_question8_option[1]=$math_big_small[24];
$math_big_small_question8_option[2]=$math_big_small[25];
$math_big_small_question9_option=array();
$math_big_small_question9_option[0]=$math_big_small[26];
$math_big_small_question9_option[1]=$math_big_small[27];
$math_big_small_question9_option[2]=$math_big_small[28];
$math_big_small_question10_option=array();
$math_big_small_question10_option[0]=$math_big_small[29];
$math_big_small_question10_option[1]=$math_big_small[30];
$math_big_small_question10_option[2]=$math_big_small[31];
?>