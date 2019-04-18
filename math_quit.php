<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$mathtimes = $_SESSION['math_times'];
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
$math_add_sub_db = "SELECT * FROM math_add_sub where username = '$id' AND math_times = '$mathntimes'";
$result1 = mysqli_query($link,$math_add_sub_db);
$add_sub = @mysqli_fetch_row($result1);
$math_big_small_db = "SELECT * FROM math_big_small where username = '$id' AND math_times = '$mathtimes'";
$result2 = mysqli_query($link,$math_big_small_db);
$big_small = @mysqli_fetch_row($result2);
$math_choose_db = "SELECT * FROM math_choose where username = '$id' AND math_times = '$mathtimes'";
$result3 = mysqli_query($link,$math_choose_db);
$choose = @mysqli_fetch_row($result3);
$math_multistage_db = "SELECT * FROM math_multistage where username = '$id' AND math_times = '$mathtimes'";
$result4 = mysqli_query($link,$math_multistage_db);
$multistage = @mysqli_fetch_row($result4);
$math_triple_add_db = "SELECT * FROM math_triple_add where username = '$id' AND math_times = '$mathtimes'";
$result5 = mysqli_query($link,$math_triple_add_db);
$triple_add = @mysqli_fetch_row($result5); 	
?>
<?php
$the_time='放棄作答';

$math_choose_sql="insert into math_choose_db (
username,cardinal,score,
question1,question2,question3,question4,question5) 
values('$id','$mathtimes','0',
'0','0','0','0','0')";

$math_add_sub_sql="insert into math_add_sub_db (
username,cardinal,score,
question1_1,question1_2,question1_3,question1_4,question1_5,
question2_1,question2_2,question2_3,question2_4,question2_5,
question3_1,question3_2,question3_3,question3_4,question3_5,
question4_1,question4_2,question4_3,question4_4,question4_5,
question5_1,question5_2,question5_3,question5_4,question5_5) 
values('$id','$mathtimes','0',
'未作答','未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答','未作答')";

$math_big_small_sql="insert into math_big_small_db (
username,cardinal,score,
question1,question2,question3,question4,question5,question6,question7,question8,question9,question10) 
values('$id','$mathtimes','0','0','0','0','0','0','0','0','0','0','0')";

$math_multistage_sql="insert into math_multistage_db (
username,cardinal,score,
question1_1,question1_2,question1_3,question1_4,question1_5,question1_6,
question2_1,question2_2,question2_3,question2_4,question2_5,question2_6,
question3_1,question3_2,question3_3,question3_4,question3_5,question3_6,
question4_1,question4_2,question4_3,question4_4,question4_5,question4_6,
question5_1,question5_2,question5_3,question5_4,question5_5,question5_6) 
values('$id','$mathtimes',0,
'未作答','未作答','未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答','未作答','未作答')";

$math_triple_add_sql="insert into math_triple_add_db (
username,cardinal,score,
question1_1,question1_2,question1_3,question1_4,
question2_1,question2_2,question2_3,question2_4,
question3_1,question3_2,question3_3,question3_4,
question4_1,question4_2,question4_3,question4_4,
question5_1,question5_2,question5_3,question5_4) 
values('$id','$mathtimes','0',
'未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答',
'未作答','未作答','未作答','未作答')";

$math_score_sql="insert into math_score (
username,cardinal,totalscore,nowtime) 
values('$id','$mathtimes','0','$the_time')";
if(mysqli_query($link,$math_choose_sql)&&mysqli_query($link,$math_add_sub_sql)&&mysqli_query($link,$math_big_small_sql)&&mysqli_query($link,$math_multistage_sql)&&mysqli_query($link,$math_triple_add_sql)&&mysqli_query($link,$math_score_sql)){
    		header("REFRESH:1;url=mathcounter.php");
    	}else{
    		echo "<script>alert('系統異常,請洽服務人員!');</script>";
    		header("REFRESH:1;url=Topic.php");
    	}
?>