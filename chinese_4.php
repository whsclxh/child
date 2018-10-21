<?php 
$q1=$_POST['c1'];
$q2=$_POST['c2'];
$q3=$_POST['c3'];
$q4=$_POST['c4'];
$q5=$_POST['c5'];
$q6=$_POST['c6'];
$q7=$_POST['c7'];
$q8=$_POST['c8'];
$q9=$_POST['c9'];
$q10=$_POST['c10'];
$w1=$_POST['ar1'];
$w2=$_POST['ar2'];
$w3=$_POST['ar3'];
$w4=$_POST['ar4'];
$w5=$_POST['ar5'];
$w6=$_POST['ar6'];
$w7=$_POST['ar7'];
$w8=$_POST['ar8'];
$w9=$_POST['ar9'];
$w10=$_POST['ar10'];

$score=0;
if((($w1)==($q1))&&(($w2)==($q2))){
	$score=$score+4;
}
if((($w3)==($q3))&&(($w4)==($q4))){
	$score=$score+4;
}
if((($w5)==($q5))&&(($w6)==($q6))){
	$score=$score+4;
}
if((($w7)==($q7))&&(($w8)==($q8))){
	$score=$score+4;
}
if((($w10)==($q10))&&(($w9)==($q9))){
	$score=$score+4;
}
?>
<?php echo "<h1>得分為:$score 分!</h1>";
// echo"$q1";
// echo"$w1";
// echo"$q2";
// echo"$w2";
// echo"$q3";
// echo"$w3";
// echo"$q4";
// echo"$w4";
// echo"$q5";
// echo"$w5";
// echo"$q6";
// echo"$w6";
// echo"$q7";
// echo"$w7";
// echo"$q8";
// echo"$w8";
// echo"$q9";
// echo"$w9";
// echo"$q10";
// echo"$w10";
?>