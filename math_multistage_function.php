<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$mathtimes = $_SESSION['math_times'];
$math_multistage_question = "SELECT * FROM math_multistage where username = '$id' AND math_times = '$mathtimes'";
$math_multistage_question_result = mysqli_query($link,$math_multistage_question);
$math_multistage = @mysqli_fetch_row($math_multistage_question_result);
$math_multistage_question1_space=array();
$math_multistage_question1_space[0]=$math_multistage[2];
$math_multistage_question1_space[1]=$math_multistage[3];
$math_multistage_question2_space=array();
$math_multistage_question2_space[0]=$math_multistage[4];
$math_multistage_question2_space[1]=$math_multistage[5];
$math_multistage_question3_space=array();
$math_multistage_question3_space[0]=$math_multistage[6];
$math_multistage_question3_space[1]=$math_multistage[7];
$math_multistage_question4_space=array();
$math_multistage_question4_space[0]=$math_multistage[8];
$math_multistage_question4_space[1]=$math_multistage[9];
$math_multistage_question5_space=array();
$math_multistage_question5_space[0]=$math_multistage[10];
$math_multistage_question5_space[1]=$math_multistage[11];
$math_multistage_number=array();
$math_multistage_number[0]=$math_multistage[12];
$math_multistage_number[1]=$math_multistage[13];
$math_multistage_number[2]=$math_multistage[14];
$math_multistage_number[3]=$math_multistage[15];
$math_multistage_number[4]=$math_multistage[16];
?>