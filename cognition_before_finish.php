<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$contimes = $_SESSION['cognition_times'];
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
$cog_count_choose_q11 = $_POST['q1question11'];
$cog_count_choose_q12 = $_POST['q1question12'];
$cog_count_choose_q21 = $_POST['q1question21'];
$cog_count_choose_q22 = $_POST['q1question22'];
$cog_count_choose_q31 = $_POST['q1question31'];
$cog_count_choose_q32 = $_POST['q1question32'];
$cog_count_choose_q41 = $_POST['q1question41'];
$cog_count_choose_q42 = $_POST['q1question42'];
$cog_count_choose_q51 = $_POST['q1question51'];
$cog_count_choose_q52 = $_POST['q1question52'];
$cog_count_choose_q1 = $_POST['q1question1'];
$cog_count_choose_q2 = $_POST['q1question2']; 
$cog_count_choose_q3 = $_POST['q1question3']; 
$cog_count_choose_q4 = $_POST['q1question4']; 
$cog_count_choose_q5 = $_POST['q1question5'];
$cog_count_choose_score=0;
if(($cog_count_choose_q11)==($question1[2])){
	$cog_count_choose_score=$cog_count_choose_score+1;
}
if(($cog_count_choose_q12)==($question1[3])){
	$cog_count_choose_score=$cog_count_choose_score+1;
}
if(($cog_count_choose_q21)==($question1[4])){
	$cog_count_choose_score=$cog_count_choose_score+1;
}
if(($cog_count_choose_q22)==($question1[5])){
	$cog_count_choose_score=$cog_count_choose_score+1;
}
if(($cog_count_choose_q31)==($question1[6])){
	$cog_count_choose_score=$cog_count_choose_score+1;
}
if(($cog_count_choose_q32)==($question1[7])){
	$cog_count_choose_score=$cog_count_choose_score+1;
}
if(($cog_count_choose_q41)==($question1[8])){
	$cog_count_choose_score=$cog_count_choose_score+1;
}
if(($cog_count_choose_q42)==($question1[9])){
	$cog_count_choose_score=$cog_count_choose_score+1;
}
if(($cog_count_choose_q51)==($question1[10])){
	$cog_count_choose_score=$cog_count_choose_score+1;
}
if(($cog_count_choose_q52)==($question1[11])){
	$cog_count_choose_score=$cog_count_choose_score+1;
}
if(($question1[2])>($question1[3])){
	if(($cog_count_choose_q1)==1){
		$cog_count_choose_score=$cog_count_choose_score+2;
	}
}else{
	if(($cog_count_choose_q1)==2){
		$cog_count_choose_score=$cog_count_choose_score+2;
	}
}
if(($question1[4])>($question1[5])){
	if(($cog_count_choose_q2)==1){
		$cog_count_choose_score=$cog_count_choose_score+2;
	}
}else{
	if(($cog_count_choose_q2)==2){
		$cog_count_choose_score=$cog_count_choose_score+2;
	}
}
if(($question1[6])>($question1[7])){
	if(($cog_count_choose_q3)==1){
		$cog_count_choose_score=$cog_count_choose_score+2;
	}
}else{
	if(($cog_count_choose_q3)==2){
		$cog_count_choose_score=$cog_count_choose_score+2;
	}
}
if(($question1[8])>($question1[9])){
	if(($cog_count_choose_q4)==1){
		$cog_count_choose_score=$cog_count_choose_score+2;
	}
}else{
	if(($cog_count_choose_q4)==2){
		$cog_count_choose_score=$cog_count_choose_score+2;
	}
}
if(($question1[10])>($question1[11])){
	if(($cog_count_choose_q5)==1){
		$cog_count_choose_score=$cog_count_choose_score+2;
	}
}else{
	if(($cog_count_choose_q5)==2){
		$cog_count_choose_score=$cog_count_choose_score+2;
	}
}
$cog_choose_correct_orientation_q1 = $_POST['q2question1'];   //作答者的答案
$cog_choose_correct_orientation_q2 = $_POST['q2question2'];
$cog_choose_correct_orientation_q3 = $_POST['q2question3'];
$cog_choose_correct_orientation_q4 = $_POST['q2question4'];
$cog_choose_correct_orientation_score=0;
if(($cog_choose_correct_orientation_q1)==($question2[35])){
	$cog_choose_correct_orientation_score=$cog_choose_correct_orientation_score+5;
}
if(($cog_choose_correct_orientation_q2)==($question2[36])){
	$cog_choose_correct_orientation_score=$cog_choose_correct_orientation_score+5;
}
if(($cog_choose_correct_orientation_q3)==($question2[37])){
	$cog_choose_correct_orientation_score=$cog_choose_correct_orientation_score+5;
}
if(($cog_choose_correct_orientation_q4)==($question2[38])){
	$cog_choose_correct_orientation_score=$cog_choose_correct_orientation_score+5;
}
$cog_choose_longer_q1 = $_POST['q3question1'];
$cog_choose_longer_q2 = $_POST['q3question2']; 
$cog_choose_longer_q3 = $_POST['q3question3']; 
$cog_choose_longer_q4 = $_POST['q3question4']; 
$cog_choose_longer_q5 = $_POST['q3question5'];
$cog_choose_longer_score=0;
//q3對答案
if($question3[7]>$question3[8]){
	if($cog_choose_longer_q1==$question3[7]){
		$cog_choose_longer_score=$cog_choose_longer_score+4;
	}
}else{
	if($cog_choose_longer_q1==$question3[8]){
		$cog_choose_longer_score=$cog_choose_longer_score+4;
	}
}
if($question3[9]>$question3[10]){
	if($cog_choose_longer_q2==$question3[9]){
		$cog_choose_longer_score=$cog_choose_longer_score+4;
	}
}else{
	if($cog_choose_longer_q2==$question3[10]){
		$cog_choose_longer_score=$cog_choose_longer_score+4;
	}
}
if($question3[11]>$question3[12]){
	if($cog_choose_longer_q3==$question3[11]){
		$cog_choose_longer_score=$cog_choose_longer_score+4;
	}
}else{
	if($cog_choose_longer_q3==$question3[12]){
		$cog_choose_longer_score=$cog_choose_longer_score+4;
	}
}
if($question3[13]>$question3[14]){
	if($cog_choose_longer_q4==$question3[13]){
		$cog_choose_longer_score=$cog_choose_longer_score+4;
	}
}else{
	if($cog_choose_longer_q4==$question3[14]){
		$cog_choose_longer_score=$cog_choose_longer_score+4;
	}
}
if($question3[15]>$question3[16]){
	if($cog_choose_longer_q5==$question3[15]){
		$cog_choose_longer_score=$cog_choose_longer_score+4;
	}
}else{
	if($cog_choose_longer_q5==$question3[16]){
		$cog_choose_longer_score=$cog_choose_longer_score+4;
	}
}
$cog_sequence_q1=$_POST['q4anwser1'];
$cog_sequence_q2=$_POST['q4anwser2'];
$cog_sequence_q3=$_POST['q4anwser3'];
$cog_sequence_q4=$_POST['q4anwser4'];
$cog_sequence_score=0;
if(($cog_sequence_q1==$question4[20])&&$cog_sequence_q1!=null){
	$cog_sequence_score=$cog_sequence_score+5;
}
if(($cog_sequence_q2==$question4[21])&&$cog_sequence_q2!=null){
	$cog_sequence_score=$cog_sequence_score+5;
}
if(($cog_sequence_q3==$question4[22])&&$cog_sequence_q3!=null){
	$cog_sequence_score=$cog_sequence_score+5;
}
if(($cog_sequence_q4==$question4[23])&&$cog_sequence_q4!=null){
	$cog_sequence_score=$cog_sequence_score+5;
}
$cog_choose_shape_q1 = $_POST['q5question1'];
$cog_choose_shape_q2 = $_POST['q5question2'];
$cog_choose_shape_q3 = $_POST['q5question3'];
$cog_choose_shape_q4 = $_POST['q5question4'];
$cog_choose_shape_score=0;
//q5對答案
if($cog_choose_shape_q1<10&&$cog_choose_shape_q1!=null)$cog_choose_shape_score=$cog_choose_shape_score+5;
if($cog_choose_shape_q2<10&&$cog_choose_shape_q2!=null)$cog_choose_shape_score=$cog_choose_shape_score+5;
if($cog_choose_shape_q3<10&&$cog_choose_shape_q3!=null)$cog_choose_shape_score=$cog_choose_shape_score+5;
if($cog_choose_shape_q4<10&&$cog_choose_shape_q4!=null)$cog_choose_shape_score=$cog_choose_shape_score+5;
//總分
$totalscore=$cog_count_choose_score+$cog_choose_correct_orientation_score+$cog_choose_longer_score+$cog_sequence_score+$cog_choose_shape_score;
date_default_timezone_set('Asia/Taipei');
$the_time=date("Y-m-d H:i:s");

$cog_count_choose_sql="insert into cog_count_choose_db (
username,cardinal,cog_count_choose_score,
question1_1,question1_2,question2_1,question2_2,question3_1,
question3_2,question4_1,question4_2,question5_1,question5_2,
question1,question2,question3,question4,question5) 
values('$id','$contimes','$cog_count_choose_score',
'$cog_count_choose_q11','$cog_count_choose_q12','$cog_count_choose_q21','$cog_count_choose_q22','$cog_count_choose_q31',
'$cog_count_choose_q32','$cog_count_choose_q41','$cog_count_choose_q42','$cog_count_choose_q51','$cog_count_choose_q52',
'$cog_count_choose_q1','$cog_count_choose_q2','$cog_count_choose_q3','$cog_count_choose_q4','$cog_count_choose_q5')";

$cog_choose_shape_sql="insert into cog_choose_shape_db (
username,cardinal,cog_choose_shape_score,
question1,question2,question3,question4) 
values('$id','$contimes','$cog_choose_shape_score',
'$cog_choose_shape_q1','$cog_choose_shape_q2','$cog_choose_shape_q3','$cog_choose_shape_q4')";

$cog_choose_longer_sql="insert into cog_choose_longer_db (
username,cardinal,cog_choose_longer_score,
question1,question2,question3,question4,question5) 
values('$id','$contimes','$cog_choose_longer_score',
'$cog_choose_longer_q1','$cog_choose_longer_q2','$cog_choose_longer_q3','$cog_choose_longer_q4','$cog_choose_longer_q5')";

$cog_choose_correct_orientation_sql="insert into cog_choose_correct_orientation_db (
username,cardinal,cog_choose_correct_orientation_score,
question1,question2,question3,question4) 
values('$id','$contimes','$cog_choose_correct_orientation_score',
'$cog_choose_correct_orientation_q1','$cog_choose_correct_orientation_q2','$cog_choose_correct_orientation_q3','$cog_choose_correct_orientation_q4')";

$cog_sequence_sql="insert into cog_sequence_db (
username,cardinal,cog_sequence_score,
question1,question2,question3,question4) 
values('$id','$contimes','$cog_sequence_score',
'$cog_sequence_q1','$cog_sequence_q2','$cog_sequence_q3','$cog_sequence_q4')";

$score_time="insert into cognition_score (
username,cardinal,total_score,now_time) 
values('$id','$contimes','$totalscore','$the_time')";

		if(mysqli_query($qaq,$cog_count_choose_sql)&&mysqli_query($qaq,$cog_choose_shape_sql)&&mysqli_query($qaq,$cog_choose_longer_sql)&&mysqli_query($qaq,$cog_choose_correct_orientation_sql)&&mysqli_query($qaq,$cog_sequence_sql)&&mysqli_query($qaq,$score_time)){
    		header("REFRESH:1;url=cognition_finish.php");
    	}else{
    		echo "<script>alert('答案送出失敗,請洽服務人員!');</script>";
    		header("REFRESH:1;url=cognition.html");
    	}
    
?>


