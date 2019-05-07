<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$mathtimes = $_SESSION['math_times'];
$math_add_sub_db = "SELECT * FROM math_add_sub where username = '$id' AND math_times = '$mathtimes'";
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
$math_choose_q1=$_POST['choose1'];
$math_choose_q2=$_POST['choose2'];
$math_choose_q3=$_POST['choose3'];
$math_choose_q4=$_POST['choose4'];
$math_choose_q5=$_POST['choose5'];
$math_choose_score=0;
if($math_choose_q1==$choose[7]){
	$math_choose_score=$math_choose_score+4;
}
if($math_choose_q2==$choose[8]){
	$math_choose_score=$math_choose_score+4;
}
if($math_choose_q3==$choose[9]){
	$math_choose_score=$math_choose_score+4;
}
if($math_choose_q4==$choose[10]){
	$math_choose_score=$math_choose_score+4;
}
if($math_choose_q5==$choose[11]){
	$math_choose_score=$math_choose_score+4;
}
$math_add_sub_q11=$_POST['add_sub_option1_1'];
$math_add_sub_q12=$_POST['add_sub_option1_2'];
$math_add_sub_q13=$_POST['add_sub_option1_3'];
$math_add_sub_q14=$_POST['add_sub_option1_4'];
$math_add_sub_q15=$_POST['add_sub_option1_5'];
$math_add_sub_q21=$_POST['add_sub_option2_1'];
$math_add_sub_q22=$_POST['add_sub_option2_2'];
$math_add_sub_q23=$_POST['add_sub_option2_3'];
$math_add_sub_q24=$_POST['add_sub_option2_4'];
$math_add_sub_q25=$_POST['add_sub_option2_5'];
$math_add_sub_q31=$_POST['add_sub_option3_1'];
$math_add_sub_q32=$_POST['add_sub_option3_2'];
$math_add_sub_q33=$_POST['add_sub_option3_3'];
$math_add_sub_q34=$_POST['add_sub_option3_4'];
$math_add_sub_q35=$_POST['add_sub_option3_5'];
$math_add_sub_q41=$_POST['add_sub_option4_1'];
$math_add_sub_q42=$_POST['add_sub_option4_2'];
$math_add_sub_q43=$_POST['add_sub_option4_3'];
$math_add_sub_q44=$_POST['add_sub_option4_4'];
$math_add_sub_q45=$_POST['add_sub_option4_5'];
$math_add_sub_q51=$_POST['add_sub_option5_1'];
$math_add_sub_q52=$_POST['add_sub_option5_2'];
$math_add_sub_q53=$_POST['add_sub_option5_3'];
$math_add_sub_q54=$_POST['add_sub_option5_4'];
$math_add_sub_q55=$_POST['add_sub_option5_5'];
$math_add_sub_score=0;
if($add_sub[22]==0){
	if(((int)$math_add_sub_q11==(int)$add_sub[12]+(int)$add_sub[13])&&((int)$math_add_sub_q11!=null))$math_add_sub_score=$math_add_sub_score+1;
	if(((int)$math_add_sub_q12==(int)$add_sub[12])&&((int)$math_add_sub_q12!=null)){
		$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q14==(int)$add_sub[13])&&((int)$math_add_sub_q14!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else if(((int)$math_add_sub_q12==(int)$add_sub[13])&&((int)$math_add_sub_q12!=null)){
		$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q14==(int)$add_sub[12])&&((int)$math_add_sub_q14!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else if((int)$math_add_sub_q12==null){
		if(((int)$math_add_sub_q14==(int)$add_sub[13])&&((int)$math_add_sub_q14!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q14)&&((int)$math_add_sub_q14!=null))$math_add_sub_score=$math_add_sub_score+1;
	}
	if(($math_add_sub_q13=='+')&&((int)$math_add_sub_q13!=null))$math_add_sub_score=$math_add_sub_score+1;
	if(((int)$math_add_sub_q15==(int)$add_sub[12]+(int)$add_sub[13])&&((int)$math_add_sub_q15!=null))$math_add_sub_score=$math_add_sub_score+1;
}else{
	if(($math_add_sub_q13=='-')&&((int)$math_add_sub_q13!=null))$math_add_sub_score=$math_add_sub_score+1;
	if((int)$add_sub[12]>(int)$add_sub[13]){
		if(((int)$math_add_sub_q11==(int)$add_sub[12]-(int)$add_sub[13])&&((int)$math_add_sub_q11!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q12==(int)$add_sub[12])&&((int)$math_add_sub_q12!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q14==(int)$add_sub[13])&&((int)$math_add_sub_q14!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q15==(int)$add_sub[12]-(int)$add_sub[13])&&((int)$math_add_sub_q15!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else{
		if(((int)$math_add_sub_q11==(int)$add_sub[13]-(int)$add_sub[12])&&((int)$math_add_sub_q11!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q12==(int)$add_sub[13])&&((int)$math_add_sub_q12!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q14==(int)$add_sub[12])&&((int)$math_add_sub_q14!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q15==(int)$add_sub[13]-(int)$add_sub[12])&&((int)$math_add_sub_q15!=null))$math_add_sub_score=$math_add_sub_score+1;
	}
}
if($add_sub[23]==0){
	if(((int)$math_add_sub_q21==(int)$add_sub[14]+(int)$add_sub[15])&&((int)$math_add_sub_q21!=null))$math_add_sub_score=$math_add_sub_score+1;
	if(((int)$math_add_sub_q22==(int)$add_sub[14])&&((int)$math_add_sub_q22!=null)){
		$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q24==(int)$add_sub[15])&&((int)$math_add_sub_q24!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else if(((int)$math_add_sub_q22==(int)$add_sub[15])&&((int)$math_add_sub_q22!=null)){
		$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q24==(int)$add_sub[14])&&((int)$math_add_sub_q24!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else if((int)$math_add_sub_q22==null){
		if(((int)$math_add_sub_q24==(int)$add_sub[15])&&((int)$math_add_sub_q24!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q24)&&((int)$math_add_sub_q24!=null))$math_add_sub_score=$math_add_sub_score+1;
	}
	if(($math_add_sub_q23=='+')&&((int)$math_add_sub_q23!=null))$math_add_sub_score=$math_add_sub_score+1;
	if(((int)$math_add_sub_q25==(int)$add_sub[14]+(int)$add_sub[15])&&((int)$math_add_sub_q25!=null))$math_add_sub_score=$math_add_sub_score+1;
}else{
	if(($math_add_sub_q23=='-')&&((int)$math_add_sub_q23!=null))$math_add_sub_score=$math_add_sub_score+1;
	if((int)$add_sub[14]>(int)$add_sub[15]){
		if(((int)$math_add_sub_q21==(int)$add_sub[14]-(int)$add_sub[15])&&((int)$math_add_sub_q21!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q22==(int)$add_sub[14])&&((int)$math_add_sub_q22!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q24==(int)$add_sub[15])&&((int)$math_add_sub_q24!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q25==(int)$add_sub[14]-(int)$add_sub[15])&&((int)$math_add_sub_q25!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else{
		if(((int)$math_add_sub_q21==(int)$add_sub[15]-(int)$add_sub[14])&&((int)$math_add_sub_q21!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q22==(int)$add_sub[15])&&((int)$math_add_sub_q22!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q24==(int)$add_sub[14])&&((int)$math_add_sub_q24!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q25==(int)$add_sub[15]-(int)$add_sub[14])&&((int)$math_add_sub_q25!=null))$math_add_sub_score=$math_add_sub_score+1;
	}
}
if($add_sub[24]==0){
	if(((int)$math_add_sub_q31==(int)$add_sub[16]+(int)$add_sub[17])&&((int)$math_add_sub_q31!=null))$math_add_sub_score=$math_add_sub_score+1;
	if(((int)$math_add_sub_q32==(int)$add_sub[16])&&((int)$math_add_sub_q32!=null)){
		$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q34==(int)$add_sub[17])&&((int)$math_add_sub_q34!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else if(((int)$math_add_sub_q32==(int)$add_sub[17])&&((int)$math_add_sub_q32!=null)){
		$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q34==(int)$add_sub[16])&&((int)$math_add_sub_q34!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else if((int)$math_add_sub_q32==null){
		if(((int)$math_add_sub_q34==(int)$add_sub[17])&&((int)$math_add_sub_q34!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q34)&&((int)$math_add_sub_q34!=null))$math_add_sub_score=$math_add_sub_score+1;
	}
	if(($math_add_sub_q33=='+')&&((int)$math_add_sub_q33!=null))$math_add_sub_score=$math_add_sub_score+1;
	if(((int)$math_add_sub_q35==(int)$add_sub[16]+(int)$add_sub[17])&&((int)$math_add_sub_q35!=null))$math_add_sub_score=$math_add_sub_score+1;
}else{
	if(($math_add_sub_q33=='-')&&((int)$math_add_sub_q33!=null))$math_add_sub_score=$math_add_sub_score+1;
	if((int)$add_sub[16]>(int)$add_sub[17]){
		if(((int)$math_add_sub_q31==(int)$add_sub[16]-(int)$add_sub[17])&&((int)$math_add_sub_q31!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q32==(int)$add_sub[16])&&((int)$math_add_sub_q32!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q34==(int)$add_sub[17])&&((int)$math_add_sub_q34!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q35==(int)$add_sub[16]-(int)$add_sub[17])&&((int)$math_add_sub_q35!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else{
		if(((int)$math_add_sub_q31==(int)$add_sub[17]-(int)$add_sub[16])&&((int)$math_add_sub_q31!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q32==(int)$add_sub[17])&&((int)$math_add_sub_q32!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q34==(int)$add_sub[16])&&((int)$math_add_sub_q34!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q35==(int)$add_sub[17]-(int)$add_sub[16])&&((int)$math_add_sub_q35!=null))$math_add_sub_score=$math_add_sub_score+1;
	}
}
if($add_sub[25]==0){
	if(((int)$math_add_sub_q41==(int)$add_sub[18]+(int)$add_sub[19])&&((int)$math_add_sub_q41!=null))$math_add_sub_score=$math_add_sub_score+1;
	if(((int)$math_add_sub_q42==(int)$add_sub[18])&&((int)$math_add_sub_q42!=null)){
		$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q44==(int)$add_sub[19])&&((int)$math_add_sub_q44!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else if(((int)$math_add_sub_q42==(int)$add_sub[19])&&((int)$math_add_sub_q42!=null)){
		$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q44==(int)$add_sub[18])&&((int)$math_add_sub_q44!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else if((int)$math_add_sub_q42==null){
		if(((int)$math_add_sub_q44==(int)$add_sub[19])&&((int)$math_add_sub_q44!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q44)&&((int)$math_add_sub_q44!=null))$math_add_sub_score=$math_add_sub_score+1;
	}
	if(($math_add_sub_q43=='+')&&((int)$math_add_sub_q43!=null))$math_add_sub_score=$math_add_sub_score+1;
	if(((int)$math_add_sub_q45==(int)$add_sub[18]+(int)$add_sub[19])&&((int)$math_add_sub_q45!=null))$math_add_sub_score=$math_add_sub_score+1;
}else{
	if(($math_add_sub_q43=='-')&&((int)$math_add_sub_q43!=null))$math_add_sub_score=$math_add_sub_score+1;
	if((int)$add_sub[18]>(int)$add_sub[19]){
		if(((int)$math_add_sub_q41==(int)$add_sub[18]-(int)$add_sub[19])&&((int)$math_add_sub_q41!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q42==(int)$add_sub[18])&&((int)$math_add_sub_q42!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q44==(int)$add_sub[19])&&((int)$math_add_sub_q44!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q45==(int)$add_sub[18]-(int)$add_sub[19])&&((int)$math_add_sub_q45!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else{
		if(((int)$math_add_sub_q41==(int)$add_sub[19]-(int)$add_sub[18])&&((int)$math_add_sub_q41!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q42==(int)$add_sub[19])&&((int)$math_add_sub_q42!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q44==(int)$add_sub[18])&&((int)$math_add_sub_q44!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q45==(int)$add_sub[19]-(int)$add_sub[18])&&((int)$math_add_sub_q45!=null))$math_add_sub_score=$math_add_sub_score+1;
	}
}
if($add_sub[26]==0){
	if(((int)$math_add_sub_q51==(int)$add_sub[20]+(int)$add_sub[21])&&((int)$math_add_sub_q51!=null))$math_add_sub_score=$math_add_sub_score+1;
	if(((int)$math_add_sub_q52==(int)$add_sub[20])&&((int)$math_add_sub_q52!=null)){
		$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q54==(int)$add_sub[21])&&((int)$math_add_sub_q54!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else if(((int)$math_add_sub_q52==(int)$add_sub[21])&&((int)$math_add_sub_q52!=null)){
		$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q54==(int)$add_sub[20])&&((int)$math_add_sub_q54!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else if((int)$math_add_sub_q52==null){
		if(((int)$math_add_sub_q54==(int)$add_sub[21])&&((int)$math_add_sub_q54!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q54)&&((int)$math_add_sub_q54!=null))$math_add_sub_score=$math_add_sub_score+1;
	}
	if(($math_add_sub_q53=='+')&&((int)$math_add_sub_q53!=null))$math_add_sub_score=$math_add_sub_score+1;
	if(((int)$math_add_sub_q55==(int)$add_sub[20]+(int)$add_sub[21])&&((int)$math_add_sub_q55!=null))$math_add_sub_score=$math_add_sub_score+1;
}else{
	if(($math_add_sub_q53=='-')&&((int)$math_add_sub_q53!=null))$math_add_sub_score=$math_add_sub_score+1;
	if((int)$add_sub[20]>(int)$add_sub[21]){
		if(((int)$math_add_sub_q51==(int)$add_sub[20]-(int)$add_sub[21])&&((int)$math_add_sub_q51!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q52==(int)$add_sub[20])&&((int)$math_add_sub_q52!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q54==(int)$add_sub[21])&&((int)$math_add_sub_q54!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q55==(int)$add_sub[20]-(int)$add_sub[21])&&((int)$math_add_sub_q55!=null))$math_add_sub_score=$math_add_sub_score+1;
	}else{
		if(((int)$math_add_sub_q51==(int)$add_sub[21]-(int)$add_sub[20])&&((int)$math_add_sub_q51!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q52==(int)$add_sub[21])&&((int)$math_add_sub_q52!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q54==(int)$add_sub[20])&&((int)$math_add_sub_q54!=null))$math_add_sub_score=$math_add_sub_score+1;
		if(((int)$math_add_sub_q55==(int)$add_sub[21]-(int)$add_sub[20])&&((int)$math_add_sub_q55!=null))$math_add_sub_score=$math_add_sub_score+1;
	}
}
$math_big_small_q1=$_POST['big_small1'];
$math_big_small_q2=$_POST['big_small2'];
$math_big_small_q3=$_POST['big_small3'];
$math_big_small_q4=$_POST['big_small4'];
$math_big_small_q5=$_POST['big_small5'];
$math_big_small_q6=$_POST['big_small6'];
$math_big_small_q7=$_POST['big_small7'];
$math_big_small_q8=$_POST['big_small8'];
$math_big_small_q9=$_POST['big_small9'];
$math_big_small_q10=$_POST['big_small10'];
$math_big_small_score=0;
if($math_big_small_q1==min($big_small[2],$big_small[3],$big_small[4])){
	$math_big_small_score=$math_big_small_score+2;
}
if($math_big_small_q2==min($big_small[5],$big_small[6],$big_small[7])){
	$math_big_small_score=$math_big_small_score+2;
}
if($math_big_small_q3==min($big_small[8],$big_small[9],$big_small[10])){
	$math_big_small_score=$math_big_small_score+2;
}
if($math_big_small_q4==min($big_small[11],$big_small[12],$big_small[13])){
	$math_big_small_score=$math_big_small_score+2;
}
if($math_big_small_q5==min($big_small[14],$big_small[15],$big_small[16])){
	$math_big_small_score=$math_big_small_score+2;
}
if($math_big_small_q6==min($big_small[17],$big_small[18],$big_small[19])){
	$math_big_small_score=$math_big_small_score+2;
}
if($math_big_small_q7==min($big_small[20],$big_small[21],$big_small[22])){
	$math_big_small_score=$math_big_small_score+2;
}
if($math_big_small_q8==min($big_small[23],$big_small[24],$big_small[25])){
	$math_big_small_score=$math_big_small_score+2;
}
if($math_big_small_q9==min($big_small[26],$big_small[27],$big_small[28])){
	$math_big_small_score=$math_big_small_score+2;
}
if($math_big_small_q10==min($big_small[29],$big_small[30],$big_small[31])){
	$math_big_small_score=$math_big_small_score+2;
}
$math_multistage_q11=$_POST['multistage1_1'];
$math_multistage_q12=$_POST['multistage1_2'];
$math_multistage_q13=$_POST['multistage1_3'];
$math_multistage_q14=$_POST['multistage1_4'];
$math_multistage_q15=$_POST['multistage1_5'];
$math_multistage_q16=$_POST['multistage1_6'];
$math_multistage_q21=$_POST['multistage2_1'];
$math_multistage_q22=$_POST['multistage2_2'];
$math_multistage_q23=$_POST['multistage2_3'];
$math_multistage_q24=$_POST['multistage2_4'];
$math_multistage_q25=$_POST['multistage2_5'];
$math_multistage_q26=$_POST['multistage2_6'];
$math_multistage_q31=$_POST['multistage3_1'];
$math_multistage_q32=$_POST['multistage3_2'];
$math_multistage_q33=$_POST['multistage3_3'];
$math_multistage_q34=$_POST['multistage3_4'];
$math_multistage_q35=$_POST['multistage3_5'];
$math_multistage_q36=$_POST['multistage3_6'];
$math_multistage_q41=$_POST['multistage4_1'];
$math_multistage_q42=$_POST['multistage4_2'];
$math_multistage_q43=$_POST['multistage4_3'];
$math_multistage_q44=$_POST['multistage4_4'];
$math_multistage_q45=$_POST['multistage4_5'];
$math_multistage_q46=$_POST['multistage4_6'];
$math_multistage_q51=$_POST['multistage5_1'];
$math_multistage_q52=$_POST['multistage5_2'];
$math_multistage_q53=$_POST['multistage5_3'];
$math_multistage_q54=$_POST['multistage5_4'];
$math_multistage_q55=$_POST['multistage5_5'];
$math_multistage_q56=$_POST['multistage5_6'];
$math_multistage_score=0;
if((int)$math_multistage_q11==(int)$multistage[12])$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q12==(int)$multistage[12]+1)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q13==(int)$multistage[12]+2)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q14==(int)$multistage[12]+3)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q15==(int)$multistage[12]+4)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q16==(int)$multistage[12]+5)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q21==(int)$multistage[13])$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q22==(int)$multistage[13]-1)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q23==(int)$multistage[13]-2)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q24==(int)$multistage[13]-3)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q25==(int)$multistage[13]-4)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q26==(int)$multistage[13]-5)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q31==(int)$multistage[14])$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q32==(int)$multistage[14]-1)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q33==(int)$multistage[14]-2)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q34==(int)$multistage[14]-3)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q35==(int)$multistage[14]-4)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q36==(int)$multistage[14]-5)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q41==(int)$multistage[15])$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q42==(int)$multistage[15]+1)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q43==(int)$multistage[15]+2)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q44==(int)$multistage[15]+3)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q45==(int)$multistage[15]+4)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q46==(int)$multistage[15]+5)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q51==(int)$multistage[16])$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q52==(int)$multistage[16]-1)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q53==(int)$multistage[16]-2)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q54==(int)$multistage[16]-3)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q55==(int)$multistage[16]-4)$math_multistage_score=$math_multistage_score+1;
if((int)$math_multistage_q56==(int)$multistage[16]-5)$math_multistage_score=$math_multistage_score+1;
$math_triple_add_q11=$_POST['triple_add1_1'];
$math_triple_add_q12=$_POST['triple_add1_2'];
$math_triple_add_q13=$_POST['triple_add1_3'];
$math_triple_add_q14=$_POST['triple_add1_4'];
$math_triple_add_q21=$_POST['triple_add2_1'];
$math_triple_add_q22=$_POST['triple_add2_2'];
$math_triple_add_q23=$_POST['triple_add2_3'];
$math_triple_add_q24=$_POST['triple_add2_4'];
$math_triple_add_q31=$_POST['triple_add3_1'];
$math_triple_add_q32=$_POST['triple_add3_2'];
$math_triple_add_q33=$_POST['triple_add3_3'];
$math_triple_add_q34=$_POST['triple_add3_4'];
$math_triple_add_q41=$_POST['triple_add4_1'];
$math_triple_add_q42=$_POST['triple_add4_2'];
$math_triple_add_q43=$_POST['triple_add4_3'];
$math_triple_add_q44=$_POST['triple_add4_4'];
$math_triple_add_q51=$_POST['triple_add5_1'];
$math_triple_add_q52=$_POST['triple_add5_2'];
$math_triple_add_q53=$_POST['triple_add5_3'];
$math_triple_add_q54=$_POST['triple_add5_4'];
$math_triple_add_score=0;
if($math_triple_add_q11==$triple_add[2])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q12==$triple_add[3])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q13==$triple_add[4])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q14==$triple_add[2]+$triple_add[3]+$triple_add[4])$math_triple_add_score=$math_triple_add_score+1;

if($math_triple_add_q21==$triple_add[5])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q22==$triple_add[6])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q23==$triple_add[7])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q24==$triple_add[5]+$triple_add[6]+$triple_add[7])$math_triple_add_score=$math_triple_add_score+1;

if($math_triple_add_q31==$triple_add[8])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q32==$triple_add[9])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q33==$triple_add[10])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q34==$triple_add[8]+$triple_add[9]+$triple_add[10])$math_triple_add_score=$math_triple_add_score+1;

if($math_triple_add_q41==$triple_add[11])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q42==$triple_add[12])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q43==$triple_add[13])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q44==$triple_add[11]+$triple_add[12]+$triple_add[13])$math_triple_add_score=$math_triple_add_score+1;

if($math_triple_add_q51==$triple_add[14])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q52==$triple_add[15])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q53==$triple_add[16])$math_triple_add_score=$math_triple_add_score+1;
if($math_triple_add_q54==$triple_add[14]+$triple_add[15]+$triple_add[16])$math_triple_add_score=$math_triple_add_score+1;
$total_score=$math_triple_add_score+$math_choose_score+$math_multistage_score+$math_big_small_score+$math_add_sub_score;
date_default_timezone_set('Asia/Taipei');
$the_time=date("Y-m-d H:i:s");

$math_choose_sql="insert into math_choose_db (
username,cardinal,score,
question1,question2,question3,question4,question5) 
values('$id','$mathtimes','$math_choose_score','$math_choose_q1','$math_choose_q2','$math_choose_q3','$math_choose_q4','$math_choose_q5')";

$math_add_sub_sql="insert into math_add_sub_db (
username,cardinal,score,
question1_1,question1_2,question1_3,question1_4,question1_5,
question2_1,question2_2,question2_3,question2_4,question2_5,
question3_1,question3_2,question3_3,question3_4,question3_5,
question4_1,question4_2,question4_3,question4_4,question4_5,
question5_1,question5_2,question5_3,question5_4,question5_5) 
values('$id','$mathtimes','$math_add_sub_score',
'$math_add_sub_q11','$math_add_sub_q12','$math_add_sub_q13','$math_add_sub_q14','$math_add_sub_q15',
'$math_add_sub_q21','$math_add_sub_q22','$math_add_sub_q23','$math_add_sub_q24','$math_add_sub_q25',
'$math_add_sub_q31','$math_add_sub_q32','$math_add_sub_q33','$math_add_sub_q34','$math_add_sub_q35',
'$math_add_sub_q41','$math_add_sub_q42','$math_add_sub_q43','$math_add_sub_q44','$math_add_sub_q45',
'$math_add_sub_q51','$math_add_sub_q52','$math_add_sub_q53','$math_add_sub_q54','$math_add_sub_q55')";

$math_big_small_sql="insert into math_big_small_db (
username,cardinal,score,
question1,question2,question3,question4,question5,question6,question7,question8,question9,question10) 
values('$id','$mathtimes','$math_big_small_score','$math_big_small_q1','$math_big_small_q2','$math_big_small_q3','$math_big_small_q4','$math_big_small_q5','$math_big_small_q6','$math_big_small_q7','$math_big_small_q8','$math_big_small_q9','$math_big_small_q10')";

$math_multistage_sql="insert into math_multistage_db (
username,cardinal,score,
question1_1,question1_2,question1_3,question1_4,question1_5,question1_6,
question2_1,question2_2,question2_3,question2_4,question2_5,question2_6,
question3_1,question3_2,question3_3,question3_4,question3_5,question3_6,
question4_1,question4_2,question4_3,question4_4,question4_5,question4_6,
question5_1,question5_2,question5_3,question5_4,question5_5,question5_6) 
values('$id','$mathtimes','$math_multistage_score',
'$math_multistage_q11','$math_multistage_q12','$math_multistage_q13','$math_multistage_q14','$math_multistage_q15','$math_multistage_q16',
'$math_multistage_q21','$math_multistage_q22','$math_multistage_q23','$math_multistage_q24','$math_multistage_q25','$math_multistage_q26',
'$math_multistage_q31','$math_multistage_q32','$math_multistage_q33','$math_multistage_q34','$math_multistage_q35','$math_multistage_q36',
'$math_multistage_q41','$math_multistage_q42','$math_multistage_q43','$math_multistage_q44','$math_multistage_q45','$math_multistage_q46',
'$math_multistage_q51','$math_multistage_q52','$math_multistage_q53','$math_multistage_q54','$math_multistage_q55','$math_multistage_q56')";

$math_triple_add_sql="insert into math_triple_add_db (
username,cardinal,score,
question1_1,question1_2,question1_3,question1_4,
question2_1,question2_2,question2_3,question2_4,
question3_1,question3_2,question3_3,question3_4,
question4_1,question4_2,question4_3,question4_4,
question5_1,question5_2,question5_3,question5_4) 
values('$id','$mathtimes','$math_triple_add_score',
'$math_triple_add_q11','$math_triple_add_q12','$math_triple_add_q13','$math_triple_add_q14',
'$math_triple_add_q21','$math_triple_add_q22','$math_triple_add_q23','$math_triple_add_q24',
'$math_triple_add_q31','$math_triple_add_q32','$math_triple_add_q33','$math_triple_add_q34',
'$math_triple_add_q41','$math_triple_add_q42','$math_triple_add_q43','$math_triple_add_q44',
'$math_triple_add_q51','$math_triple_add_q52','$math_triple_add_q53','$math_triple_add_q54')";

$math_score_sql="insert into math_score (
username,cardinal,totalscore,nowtime) 
values('$id','$mathtimes','$total_score','$the_time')";
if(mysqli_query($link,$math_choose_sql)&&mysqli_query($link,$math_add_sub_sql)&&mysqli_query($link,$math_big_small_sql)&&mysqli_query($link,$math_multistage_sql)&&mysqli_query($link,$math_triple_add_sql)&&mysqli_query($link,$math_score_sql)){
    		header("REFRESH:1;url=math_finish.php");
    	}else{
    		echo "<script>alert('答案送出失敗,請洽服務人員!');</script>";
    		header("REFRESH:1;url=Topic.php");
    	}
?>