<?php 
$q1=$_POST['c1'];
$q2=$_POST['c2'];
$q3=$_POST['c3'];
$q4=$_POST['c4'];
$q5=$_POST['c5'];
$w1=$_POST['ar1'];
$w2=$_POST['ar2'];
$w3=$_POST['ar3'];
$w4=$_POST['ar4'];
$w5=$_POST['ar5'];

$score=0;
if($q1==$w1){
	$score=$score+4;
}
if($q2==$w2){
	$score=$score+4;
}
if($q3==$w3){
	$score=$score+4;
}
if($q4==$w4){
	$score=$score+4;
}
if($q5==$w5){
	$score=$score+4;
}
?>
<?php echo "<h1>得分為:$score 分!</h1>";
?>