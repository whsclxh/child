<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$contimes = $_SESSION['cognition_times'];
$sql4 = "SELECT * FROM cognition4 where username = '$id' AND cognition_times = '$contimes'";
$result4 = mysqli_query($qaq,$sql4);
$question4 = @mysqli_fetch_row($result4);
?>
<?php
//cog_sequence變數
$cog_sequence_pic=array();
$cog_sequence_pic[0]=$question4[2];
$cog_sequence_pic[1]=$question4[3];
$cog_sequence_pic[2]=$question4[4];
$cog_sequence_pic[3]=$question4[5];
$cog_sequence_pic[4]=$question4[6];
$cog_sequence_pic[5]=$question4[7];
$cog_sequence_pic[6]=$question4[8];
$cog_sequence_pic[7]=$question4[9];
$cog_sequence_subject_pic=array();
$cog_sequence_subject_pic[0]=$question4[10];
$cog_sequence_subject_pic[1]=$question4[11];
$cog_sequence_subject_pic[2]=$question4[12];
$cog_sequence_subject_direction=array();
$cog_sequence_subject_direction[0]=$question4[13];
$cog_sequence_subject_direction[1]=$question4[14];
$cog_sequence_subject_direction[2]=$question4[15];
$cog_sequence_choose_option=array();
$cog_sequence_choose_option[0]=$question4[17];
$cog_sequence_choose_option[1]=$question4[18];
$cog_sequence_choose_option[2]=$question4[19];
$cog_sequence_opposite_direction=array();
$cog_sequence_opposite_direction=$question4[16];
$cog_sequence_subject_correct_anwser1=$question4[20];
$cog_sequence_subject_correct_anwser2=$question4[21];
$cog_sequence_subject_correct_anwser3=$question4[22];
$cog_sequence_subject_correct_anwser4=$question4[23];
?>