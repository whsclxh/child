<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$contimes = $_SESSION['cognition_times'];
$sql5 = "SELECT * FROM cognition5 where username = '$id' AND cognition_times = '$contimes'";
$result5 = mysqli_query($link,$sql5);
$question5 = @mysqli_fetch_row($result5);
?>
<?php
$cog_choose_shape=array();
$cog_choose_shape[0]=$question5[2];
$cog_choose_shape[1]=$question5[3];
$cog_choose_shape[2]=$question5[4];
$cog_choose_shape[3]=$question5[5];
$cog_choose_shape_option1=array();
$cog_choose_shape_option1[0]=$question5[6];
$cog_choose_shape_option1[1]=$question5[7];
$cog_choose_shape_option1[2]=$question5[8];
$cog_choose_shape_option2=array();
$cog_choose_shape_option2[0]=$question5[9];
$cog_choose_shape_option2[1]=$question5[10];
$cog_choose_shape_option2[2]=$question5[11];
$cog_choose_shape_option3=array();
$cog_choose_shape_option3[0]=$question5[12];
$cog_choose_shape_option3[1]=$question5[13];
$cog_choose_shape_option3[2]=$question5[14];
$cog_choose_shape_option4=array();
$cog_choose_shape_option4[0]=$question5[15];
$cog_choose_shape_option4[1]=$question5[16];
$cog_choose_shape_option4[2]=$question5[17];
?>
