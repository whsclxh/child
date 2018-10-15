<?php 
$anw1=$_POST['Anwone1'];
$anw2=$_POST['Anwtwo1'];
$anw3=$_POST['Anwthree1'];
$anw4=$_POST['Anwfour1'];
$anw5=$_POST['Anwfive1'];
$s1=$_POST['code'];
$s2=$_POST['code1'];
$s3=$_POST['code2'];
$s4=$_POST['code3'];
$s5=$_POST['code4'];
$score=0;
if(($anw1)==($s1)){
	$score=$score+4;
}
if(($anw2)==($s2)){
	$score=$score+4;
}
if(($anw3)==($s3)){
	$score=$score+4;
}
if(($anw4)==($s4)){
	$score=$score+4;
}
if(($anw5)==($s5)){
	$score=$score+4;
}
?>
<?php echo "<h1>得分為:$score 分!</h1>";
 //     echo"$s1";
 //     echo"$anw1";
 // echo"$s2";
 //     echo"$anw2";
 //     echo"$s3";
 //     echo"$anw3";
 //     echo"$s4";
 //     echo"$anw4";    
?>