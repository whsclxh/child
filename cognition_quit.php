<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$contimes = $_SESSION['cognition_times'];
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
$sql1 = "SELECT * FROM cognition1 where username = '$id' AND cognition_times = '$contimes'";
$result1 = mysqli_query($link,$sql1);
$question1 = @mysqli_fetch_row($result1);
$sql2 = "SELECT * FROM cognition2 where username = '$id' AND cognition_times = '$contimes'";
$result2 = mysqli_query($link,$sql2);
$question2 = @mysqli_fetch_row($result2);
$sql3 = "SELECT * FROM cognition3 where username = '$id' AND cognition_times = '$contimes'";
$result3 = mysqli_query($link,$sql3);
$question3 = @mysqli_fetch_row($result3);
$sql4 = "SELECT * FROM cognition4 where username = '$id' AND cognition_times = '$contimes'";
$result4 = mysqli_query($link,$sql4);
$question4 = @mysqli_fetch_row($result4);
$sql5 = "SELECT * FROM cognition5 where username = '$id' AND cognition_times = '$contimes'";
$result5 = mysqli_query($link,$sql5);
$question5 = @mysqli_fetch_row($result5); 	
?>
<?php
$the_time='放棄作答';

$cog_count_choose_sql="insert into cog_count_choose_db (
username,cardinal,cog_count_choose_score,
question1_1,question1_2,question2_1,question2_2,question3_1,
question3_2,question4_1,question4_2,question5_1,question5_2,
question1,question2,question3,question4,question5) 
values('$id','$contimes','0',
'未作答','未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答','未作答',
'0','0','0','0','0')";

$cog_choose_shape_sql="insert into cog_choose_shape_db (
username,cardinal,cog_choose_shape_score,
question1,question2,question3,question4) 
values('$id','$contimes','0',
'0','0','0','0')";

$cog_choose_longer_sql="insert into cog_choose_longer_db (
username,cardinal,cog_choose_longer_score,
question1,question2,question3,question4,question5) 
values('$id','$contimes','0',
'0','0','0','0','0')";

$cog_choose_correct_orientation_sql="insert into cog_choose_correct_orientation_db (
username,cardinal,cog_choose_correct_orientation_score,
question1,question2,question3,question4) 
values('$id','$contimes','0',
'null','null','null','null')";

$cog_sequence_sql="insert into cog_sequence_db (
username,cardinal,cog_sequence_score,
question1,question2,question3,question4) 
values('$id','$contimes','0',
'未作答','0','未作答','未作答')";

$score_time="insert into cognition_score (
username,cardinal,total_score,now_time) 
values('$id','$contimes','0','$the_time')";

		if(mysqli_query($link,$cog_count_choose_sql)&&mysqli_query($link,$cog_choose_shape_sql)&&mysqli_query($link,$cog_choose_longer_sql)&&mysqli_query($link,$cog_choose_correct_orientation_sql)&&mysqli_query($link,$cog_sequence_sql)&&mysqli_query($link,$score_time)){
    		header("REFRESH:1;url=cognitioncounter.php");
    	}else{
    		echo "<script>alert('系統異常,請洽服務人員!');</script>";
    		header("REFRESH:1;url=Topic.php");
    	}
    
?>


