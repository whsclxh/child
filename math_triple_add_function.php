<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$mathtimes = $_SESSION['math_times'];
$math_triple_add_question = "SELECT * FROM math_triple_add where username = '$id' AND math_times = '$mathtimes'";
$math_triple_add_question_result = mysqli_query($link,$math_triple_add_question);
$math_triple = @mysqli_fetch_row($math_triple_add_question_result);
$math_triple_add_picture=array();
$math_triple_add_picture[0]=$math_triple[17];
$math_triple_add_picture[1]=$math_triple[18];
$math_triple_add_picture[2]=$math_triple[19];
$math_triple_add_picture[3]=$math_triple[20];
$math_triple_add_picture[4]=$math_triple[21];
$math_triple_add_question1_quantity=array();
$math_triple_add_question1_quantity[0]=$math_triple[2];
$math_triple_add_question1_quantity[1]=$math_triple[3];
$math_triple_add_question1_quantity[2]=$math_triple[4];
$math_triple_add_question2_quantity=array();
$math_triple_add_question2_quantity[0]=$math_triple[5];
$math_triple_add_question2_quantity[1]=$math_triple[6];
$math_triple_add_question2_quantity[2]=$math_triple[7];
$math_triple_add_question3_quantity=array();
$math_triple_add_question3_quantity[0]=$math_triple[8];
$math_triple_add_question3_quantity[1]=$math_triple[9];
$math_triple_add_question3_quantity[2]=$math_triple[10];
$math_triple_add_question4_quantity=array();
$math_triple_add_question4_quantity[0]=$math_triple[11];
$math_triple_add_question4_quantity[1]=$math_triple[12];
$math_triple_add_question4_quantity[2]=$math_triple[13];
$math_triple_add_question5_quantity=array();
$math_triple_add_question5_quantity[0]=$math_triple[14];
$math_triple_add_question5_quantity[1]=$math_triple[15];
$math_triple_add_question5_quantity[2]=$math_triple[16];
?>