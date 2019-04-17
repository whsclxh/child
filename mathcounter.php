<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
$sql = "SELECT * FROM users where username = '$id'";
$result = mysqli_query($qaq,$sql);
$row = @mysqli_fetch_row($result);
$a=$row[5]+1;
$_SESSION['math_times'] = $a;
$math_sql = "update users set math_times='$a' where username='$id'";
//math_choose函式
function getRandomArray($minNum,$maxNum,$n){
	mt_srand((double)microtime()*1000000);
	$num = Array();
	for ($i = 1; $i <= $n; $i++) {
    	$a = mt_rand($minNum,$maxNum);
     	if (in_array($a, $num)) {
        	$i--;
   		}else{
        	$num[] = $a;
    	}
	}
		return $num;
}
function getRandom($minNum,$maxNum){
	mt_srand((double)microtime()*1000000);
	return mt_rand($minNum,$maxNum);
}
function choose_checkoption($x){
	$no=array();
	do{	
		$a=true;
		$no=getRandomArray($x-3,$x+3,5);
			if(in_array($x, $no)) 
				$a=false;
		}while($a);
	return $no;
}
//choose變數
$choose_number=getRandomArray(4,14,5);															 
$choose_picture=getRandomArray(0,11,5);
$choose_question_option1=choose_checkoption($choose_number[0]);
$choose_question_option2=choose_checkoption($choose_number[1]);
$choose_question_option3=choose_checkoption($choose_number[2]);
$choose_question_option4=choose_checkoption($choose_number[3]);
$choose_question_option5=choose_checkoption($choose_number[4]);
//add_sub函式
//add_sub變數
$add_sub_num=getRandomArray(1,10,10);                              
$add_sub_pic=getRandomArray(0,11,10);
$add_sub_sign=[getRandom(0,1),getRandom(0,1),getRandom(0,1),getRandom(0,1),getRandom(0,1)];
$anw_sign=array();
$anw_num=array();
if($add_sub_sign[0]==0){
	$anw_sign[0]='+';
	$anw_num[0]=$add_sub_num[0]+$add_sub_num[1];
}else{
	$anw_sign[0]='-';
	$anw_num[0]=abs($add_sub_num[0]-$add_sub_num[1]);
}
if($add_sub_sign[1]==0){
	$anw_sign[1]='+';
	$anw_num[1]=$add_sub_num[2]+$add_sub_num[3];
}else{
	$anw_sign[1]='-';
	$anw_num[1]=abs($add_sub_num[2]-$add_sub_num[3]);
}
if($add_sub_sign[2]==0){
	$anw_sign[2]='+';
	$anw_num[2]=$add_sub_num[4]+$add_sub_num[5];
}else{
	$anw_sign[2]='-';
	$anw_num[2]=abs($add_sub_num[4]-$add_sub_num[5]);
}
if($add_sub_sign[3]==0){
	$anw_sign[3]='+';
	$anw_num[3]=$add_sub_num[6]+$add_sub_num[7];
}else{
	$anw_sign[3]='-';
	$anw_num[3]=abs($add_sub_num[6]-$add_sub_num[7]);
}
if($add_sub_sign[4]==0){
	$anw_sign[4]='+';
	$anw_num[4]=$add_sub_num[8]+$add_sub_num[9];
}else{
	$anw_sign[4]='-';
	$anw_num[4]=abs($add_sub_num[8]-$add_sub_num[9]);
}
//big_small函式
//big_small變數
$bigsmall=getRandomArray(10,99,30);
//multistage函式
//multistage變數
$multistage_question_space1=getRandomArray(1,6,2);
$multistage_question_space2=getRandomArray(1,6,2);
$multistage_question_space3=getRandomArray(1,6,2);
$multistage_question_space4=getRandomArray(1,6,2);
$multistage_question_space5=getRandomArray(1,6,2);
$multistage_question=getRandomArray(10,90,5);
//triple_add函式
//triple_add變數
$triple_add_num1=getRandomArray(1,5,3);
$triple_add_num2=getRandomArray(1,5,3);
$triple_add_num3=getRandomArray(1,5,3);
$triple_add_num4=getRandomArray(1,5,3);
$triple_add_num5=getRandomArray(1,5,3);
$triple_add_pic=getRandomArray(0,11,5);

$math_choose_sql = "insert into math_choose(
username,math_times,
question1_picture,question2_picture,question3_picture,question4_picture,question5_picture,
question1_quantity,question2_quantity,question3_quantity,question4_quantity,question5_quantity,
question1_option1,question1_option2,question1_option3,question1_option4,question1_option5,
question2_option1,question2_option2,question2_option3,question2_option4,question2_option5,
question3_option1,question3_option2,question3_option3,question3_option4,question3_option5,
question4_option1,question4_option2,question4_option3,question4_option4,question4_option5,
question5_option1,question5_option2,question5_option3,question5_option4,question5_option5) values(
'$id','$a',
'$choose_picture[0]','$choose_picture[1]','$choose_picture[2]','$choose_picture[3]','$choose_picture[4]',
'$choose_number[0]','$choose_number[1]','$choose_number[2]','$choose_number[3]','$choose_number[4]',
'$choose_question_option1[0]','$choose_question_option1[1]','$choose_question_option1[2]','$choose_question_option1[3]','$choose_question_option1[4]',
'$choose_question_option2[0]','$choose_question_option2[1]','$choose_question_option2[2]','$choose_question_option2[3]','$choose_question_option2[4]',
'$choose_question_option3[0]','$choose_question_option3[1]','$choose_question_option3[2]','$choose_question_option3[3]','$choose_question_option3[4]',
'$choose_question_option4[0]','$choose_question_option4[1]','$choose_question_option4[2]','$choose_question_option4[3]','$choose_question_option4[4]',
'$choose_question_option5[0]','$choose_question_option5[1]','$choose_question_option5[2]','$choose_question_option5[3]','$choose_question_option5[4]')";

$add_sub_num_sql = "insert into math_add_sub(
username,math_times,
question_picture1_1,question_picture1_2,question_picture2_1,question_picture2_2,question_picture3_1,
question_picture3_2,question_picture4_1,question_picture4_2,question_picture5_1,question_picture5_2,
question_quantity1_1,question_quantity1_2,question_quantity2_1,question_quantity2_2,question_quantity3_1,
question_quantity3_2,question_quantity4_1,question_quantity4_2,question_quantity5_1,question_quantity5_2,
question_sign1,question_sign2,question_sign3,question_sign4,question_sign5,
anw_quantity1,anw_sign1,anw_quantity2,anw_sign2,anw_quantity3,anw_sign3,anw_quantity4,anw_sign4,anw_quantity5,anw_sign5) values(
'$id','$a',
'$add_sub_pic[0]','$add_sub_pic[1]','$add_sub_pic[2]','$add_sub_pic[3]','$add_sub_pic[4]',
'$add_sub_pic[5]','$add_sub_pic[6]','$add_sub_pic[7]','$add_sub_pic[8]','$add_sub_pic[9]',
'$add_sub_num[0]','$add_sub_num[1]','$add_sub_num[2]','$add_sub_num[3]','$add_sub_num[4]',
'$add_sub_num[5]','$add_sub_num[6]','$add_sub_num[7]','$add_sub_num[8]','$add_sub_num[9]',
'$add_sub_sign[0]','$add_sub_sign[1]','$add_sub_sign[2]','$add_sub_sign[3]','$add_sub_sign[4]',
'$anw_num[0]','$anw_sign[0]','$anw_num[1]','$anw_sign[1]','$anw_num[2]','$anw_sign[2]','$anw_num[3]','$anw_sign[3]','$anw_num[4]','$anw_sign[4]')";
 
$math_big_small_sql = "insert into math_big_small(
username,math_times,
question1_option1,question1_option2,question1_option3,question2_option1,question2_option2,question2_option3,
question3_option1,question3_option2,question3_option3,question4_option1,question4_option2,question4_option3,
question5_option1,question5_option2,question5_option3,question6_option1,question6_option2,question6_option3,
question7_option1,question7_option2,question7_option3,question8_option1,question8_option2,question8_option3,
question9_option1,question9_option2,question9_option3,question10_option1,question10_option2,question10_option3) values(
'$id','$a',
'$bigsmall[0]','$bigsmall[1]','$bigsmall[2]','$bigsmall[3]','$bigsmall[4]','$bigsmall[5]',
'$bigsmall[6]','$bigsmall[7]','$bigsmall[8]','$bigsmall[9]','$bigsmall[10]','$bigsmall[11]',
'$bigsmall[12]','$bigsmall[13]','$bigsmall[14]','$bigsmall[15]','$bigsmall[16]','$bigsmall[17]',
'$bigsmall[18]','$bigsmall[19]','$bigsmall[20]','$bigsmall[21]','$bigsmall[22]','$bigsmall[23]',
'$bigsmall[24]','$bigsmall[25]','$bigsmall[26]','$bigsmall[27]','$bigsmall[28]','$bigsmall[29]')";

$math_multistage_sql = "insert into math_multistage(
username,math_times,
question1_space1,question1_space2,question2_space1,question2_space2,question3_space1,
question3_space2,question4_space1,question4_space2,question5_space1,question5_space2,
question1_number,question2_number,question3_number,question4_number,question5_number) values(
'$id','$a',
'$multistage_question_space1[0]','$multistage_question_space1[1]',
'$multistage_question_space2[0]','$multistage_question_space2[1]',
'$multistage_question_space3[0]','$multistage_question_space3[1]',
'$multistage_question_space4[0]','$multistage_question_space4[1]',
'$multistage_question_space5[0]','$multistage_question_space5[1]',
'$multistage_question[0]','$multistage_question[1]','$multistage_question[2]','$multistage_question[3]','$multistage_question[4]')";

$math_triple_add_sql = "insert into math_triple_add(
username,math_times,
question1_quantity1,question1_quantity2,question1_quantity3,question2_quantity1,question2_quantity2,question2_quantity3,
question3_quantity1,question3_quantity2,question3_quantity3,question4_quantity1,question4_quantity2,question4_quantity3,
question5_quantity1,question5_quantity2,question5_quantity3,
question1_picture,question2_picture,question3_picture,question4_picture,question5_picture) values(
'$id','$a',
'$triple_add_num1[0]','$triple_add_num1[1]','$triple_add_num1[2]',
'$triple_add_num2[0]','$triple_add_num2[1]','$triple_add_num2[2]',
'$triple_add_num3[0]','$triple_add_num3[1]','$triple_add_num3[2]',
'$triple_add_num4[0]','$triple_add_num4[1]','$triple_add_num4[2]',
'$triple_add_num5[0]','$triple_add_num5[1]','$triple_add_num5[2]',
'$triple_add_pic[0]','$triple_add_pic[1]','$triple_add_pic[2]','$triple_add_pic[3]','$triple_add_pic[4]')";

if(mysqli_query($qaq,$math_sql)){
		if(mysqli_query($qaq,$math_choose_sql)&&mysqli_query($qaq,$add_sub_num_sql)&&mysqli_query($qaq,$math_big_small_sql)&&mysqli_query($qaq,$math_multistage_sql)&&mysqli_query($qaq,$math_triple_add_sql)){
    		header("REFRESH:1;url=math.php");
    	}else{
    		echo "<script>alert('題目產生失敗,請洽服務人員!');</script>";
    		header("REFRESH:1;url=Topic.php");
    	}
}else{   
    	echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
    	echo '<meta http-equiv=REFRESH CONTENT=2;url=Topic.php>';
     }     
?>