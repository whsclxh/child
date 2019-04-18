<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$contimes = $_SESSION['cognition_times'];
$sql2 = "SELECT * FROM cognition2 where username = '$id' AND cognition_times = '$contimes'";
$result2 = mysqli_query($link,$sql2);
$question2 = @mysqli_fetch_row($result2);
?>
<?php
//cog_choose_correct_orientation變數
$cog_choose_correct_orientation_pic=array();
$cog_choose_correct_orientation_pic[0]=$question2[2];
$cog_choose_correct_orientation_pic[1]=$question2[3];
$cog_choose_correct_orientation_pic[2]=$question2[4];
$cog_choose_correct_orientation_pic[3]=$question2[5];
$cog_choose_correct_orientation_pic[4]=$question2[6];
$cog_choose_correct_orientation_pic[5]=$question2[7];
$cog_choose_correct_orientation_pic[6]=$question2[8];
$cog_choose_correct_orientation_pic[7]=$question2[9];
$cog_choose_correct_orientation_pic[8]=$question2[10];
$cog_choose_correct_orientation_question_picture=array();
$cog_choose_correct_orientation_question_picture[0]=$question2[11];
$cog_choose_correct_orientation_question_picture[1]=$question2[12];
$cog_choose_correct_orientation_question_picture[2]=$question2[13];
$cog_choose_correct_orientation_question_picture[3]=$question2[14];
$cog_choose_correct_orientation_direction_array=array();
$cog_choose_correct_orientation_direction_array[0]=$question2[15];
$cog_choose_correct_orientation_direction_array[1]=$question2[16];
$cog_choose_correct_orientation_direction_array[2]=$question2[17];
$cog_choose_correct_orientation_direction_array[3]=$question2[18];
$cog_choose_correct_orientation_question1_option=array();
$cog_choose_correct_orientation_question1_option[0]=$question2[19];
$cog_choose_correct_orientation_question1_option[1]=$question2[20];
$cog_choose_correct_orientation_question1_option[2]=$question2[21];
$cog_choose_correct_orientation_question1_option[3]=$question2[22];
$cog_choose_correct_orientation_question2_option=array();
$cog_choose_correct_orientation_question2_option[0]=$question2[23];
$cog_choose_correct_orientation_question2_option[1]=$question2[24];
$cog_choose_correct_orientation_question2_option[2]=$question2[25];
$cog_choose_correct_orientation_question2_option[3]=$question2[26];
$cog_choose_correct_orientation_question3_option=array();
$cog_choose_correct_orientation_question3_option[0]=$question2[27];
$cog_choose_correct_orientation_question3_option[1]=$question2[28];
$cog_choose_correct_orientation_question3_option[2]=$question2[29];
$cog_choose_correct_orientation_question3_option[3]=$question2[30];
$cog_choose_correct_orientation_question4_option=array();
$cog_choose_correct_orientation_question4_option[0]=$question2[31];
$cog_choose_correct_orientation_question4_option[1]=$question2[32];
$cog_choose_correct_orientation_question4_option[2]=$question2[33];
$cog_choose_correct_orientation_question4_option[3]=$question2[34];
$cog_choose_correct_orientation_correct_anwser=array();
$cog_choose_correct_orientation_correct_anwser[0]=$question2[35];
$cog_choose_correct_orientation_correct_anwser[1]=$question2[36];
$cog_choose_correct_orientation_correct_anwser[2]=$question2[37];
$cog_choose_correct_orientation_correct_anwser[3]=$question2[38];
?>