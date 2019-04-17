<?php session_start(); ?>
<?php
include("mysql_connect.php"); 
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
$id = $_SESSION['username'];
$sql1 = "SELECT SUM(total_score) AS value_sum FROM cognition_score WHERE username = '$id'";
$result1 = mysqli_query($qaq,$sql1); 
$row = mysqli_fetch_assoc($result1); 
$cog_sum = $row['value_sum'];
$sql2 = "SELECT * FROM users where username = '$id'";
$result2 = mysqli_query($qaq,$sql2);
$cog_cardinal= @mysqli_fetch_row($result2);
$cog_average=round($cog_sum/$cog_cardinal[7],2);
$sql2 = "update users set cognition_average='$cog_average' where username='$id'";
if(!(mysqli_query($qaq,$sql2))){
	echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
$sql3 = "SELECT SUM(totalscore) AS value_math_sum FROM math_score WHERE username = '$id'";
$result3 = mysqli_query($qaq,$sql3); 
$row3 = mysqli_fetch_assoc($result3); 
$math_sum = $row3['value_math_sum'];
$sql4 = "SELECT * FROM users where username = '$id'";
$result4 = mysqli_query($qaq,$sql4);
$math_cardinal= @mysqli_fetch_row($result4);
$math_average=round($math_sum/$math_cardinal[5],2);
$sql4 = "update users set math_average='$math_average' where username='$id'";
if(!(mysqli_query($qaq,$sql4))){
	echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
$sql5 = "SELECT * FROM users where username = '$id'";
$result5 = mysqli_query($qaq,$sql5);
$times = @mysqli_fetch_row($result5);
$total_times=$times[5]+$times[7];
$all_average_score=round(($times[5]*$times[10]+$times[7]*$times[12])/$total_times,2);
$sql6 = "update users set total_times='$total_times', total_average='$all_average_score' where username='$id'";
if(!(mysqli_query($qaq,$sql6))){
	echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
?>
<a href="math_rank.php">數學</a>
<a href="chinese_rank.php">國語</a>
<a href="cognition_rank.php">認知</a>
<a href="clock_rank.php">時鐘</a>
<a href="total_rank.php">總</a>
