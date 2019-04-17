<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$contimes = $_SESSION['cognition_times'];
$sql1 = "SELECT * FROM cognition1 where username = '$id' AND cognition_times = '$contimes'";
$result1 = mysqli_query($qaq,$sql1);
$question1 = @mysqli_fetch_row($result1);
//cog_count_choose變數
$cog_count_choose_num=array();
$cog_count_choose_num[0]=$question1[2];
$cog_count_choose_num[1]=$question1[3];
$cog_count_choose_num[2]=$question1[4];
$cog_count_choose_num[3]=$question1[5];
$cog_count_choose_num[4]=$question1[6];
$cog_count_choose_num[5]=$question1[7];
$cog_count_choose_num[6]=$question1[8];
$cog_count_choose_num[7]=$question1[9];
$cog_count_choose_num[8]=$question1[10];
$cog_count_choose_num[9]=$question1[11];
$cog_count_choose_pic[0]=array();
$cog_count_choose_pic[0]=$question1[12];
$cog_count_choose_pic[1]=$question1[13];
$cog_count_choose_pic[2]=$question1[14];
$cog_count_choose_pic[3]=$question1[15];
$cog_count_choose_pic[4]=$question1[16];
$cog_count_choose_pic[5]=$question1[17];
$cog_count_choose_pic[6]=$question1[18];
$cog_count_choose_pic[7]=$question1[19];
$cog_count_choose_pic[8]=$question1[20];
$cog_count_choose_pic[9]=$question1[21];
?>