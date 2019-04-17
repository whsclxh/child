<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$contimes = $_SESSION['cognition_times'];
$sql3 = "SELECT * FROM cognition3 where username = '$id' AND cognition_times = '$contimes'";
$result3 = mysqli_query($qaq,$sql3);
$question3 = @mysqli_fetch_row($result3);
?>
<?php
//cog_choose_longer變數
$cog_choose_longer_len=array();
$cog_choose_longer_len[0]=$question3[7];
$cog_choose_longer_len[1]=$question3[8];
$cog_choose_longer_len[2]=$question3[9];
$cog_choose_longer_len[3]=$question3[10];
$cog_choose_longer_len[4]=$question3[11];
$cog_choose_longer_len[5]=$question3[12];
$cog_choose_longer_len[6]=$question3[13];
$cog_choose_longer_len[7]=$question3[14];
$cog_choose_longer_len[8]=$question3[15];
$cog_choose_longer_len[9]=$question3[16];
$cog_choose_longer_pic=array();
$cog_choose_longer_pic[0]=$question3[2];
$cog_choose_longer_pic[1]=$question3[3];
$cog_choose_longer_pic[2]=$question3[4];
$cog_choose_longer_pic[3]=$question3[5];
$cog_choose_longer_pic[4]=$question3[6];
?>