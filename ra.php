<?php session_start(); ?>
<?php
include("mysql_connect.php");
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
$name=randtext();
$test1=getRandomArray(0,100,8);
$test1[8]=$test1[0]+$test1[1]+$test1[2]+$test1[3];
$test1[9]=($test1[4]*$test1[0]+$test1[5]*$test1[1]+$test1[6]*$test1[2]+$test1[7]*$test1[3])/$test1[8];
$sql1 = "insert into users (username, password, nickname, sex, age, math_times, chinese_times, cognition_times, clock_times, total_times, math_average, chinese_average, cognition_average, clock_average ,total_average) values ('test1@test1.com', 'test1test1', 'test1', 'male', '7','test1[0]', 'test1[1]', 'test1[2]', 'test1[3]', 'test1[8]', 'test1[4]', 'test1[5]', 'test1[6]', 'test1[7]', 'test1[9]')";
$test2=getRandomArray(0,100,8);
$test2[8]=$test2[0]+$test2[1]+$test2[2]+$test2[3];
$test2[9]=($test2[4]*$test2[0]+$test2[5]*$test2[1]+$test2[6]*$test2[2]+$test2[7]*$test2[3])/$test2[8];
$sql2 = "insert into users (username, password, nickname, sex, age, math_times, chinese_times, cognition_times, clock_times, total_times, math_average, chinese_average, cognition_average, clock_average ,total_average) values ('test2@test2.com', 'test2test2', 'test2', 'male', '7','test2[0]', 'test2[1]', 'test2[2]', 'test2[3]', 'test2[8]', 'test2[4]', 'test2[5]', 'test2[6]', 'test2[7]', 'test2[9]')";
$test3=getRandomArray(0,100,8);
$test3[8]=$test3[0]+$test3[1]+$test3[2]+$test3[3];
$test3[9]=($test3[4]*$test3[0]+$test3[5]*$test3[1]+$test3[6]*$test3[2]+$test3[7]*$test3[3])/$test3[8];
$sql3 = "insert into users (username, password, nickname, sex, age, math_times, chinese_times, cognition_times, clock_times, total_times, math_average, chinese_average, cognition_average, clock_average ,total_average) values ('test3@test3.com', 'test3test3', 'test3', 'male', '7','test3[0]', 'test3[1]', 'test3[2]', 'test3[3]', 'test3[8]', 'test3[4]', 'test3[5]', 'test3[6]', 'test3[7]', 'test3[9]')";
$test4=getRandomArray(0,100,8);
$test4[8]=$test4[0]+$test4[1]+$test4[2]+$test4[3];
$test4[9]=($test4[4]*$test4[0]+$test4[5]*$test4[1]+$test4[6]*$test4[2]+$test4[7]*$test4[3])/$test4[8];
$sql4 = "insert into users (username, password, nickname, sex, age, math_times, chinese_times, cognition_times, clock_times, total_times, math_average, chinese_average, cognition_average, clock_average ,total_average) values ('test4@test4.com', 'test4test4', 'test4', 'male', '7','test4[0]', 'test4[1]', 'test4[2]', 'test4[3]', 'test4[8]', 'test4[4]', 'test4[5]', 'test4[6]', 'test4[7]', 'test4[9]')";
$test5=getRandomArray(0,100,8);
$test5[8]=$test5[0]+$test5[1]+$test5[2]+$test5[3];
$test5[9]=($test5[4]*$test5[0]+$test5[5]*$test5[1]+$test5[6]*$test5[2]+$test5[7]*$test5[3])/$test5[8];
$sql5 = "insert into users (username, password, nickname, sex, age, math_times, chinese_times, cognition_times, clock_times, total_times, math_average, chinese_average, cognition_average, clock_average ,total_average) values ('test5@test5.com', 'test5test5', 'test5', 'male', '7','test5[0]', 'test5[1]', 'test5[2]', 'test5[3]', 'test5[8]', 'test5[4]', 'test5[5]', 'test5[6]', 'test5[7]', 'test5[9]')";
$test6=getRandomArray(0,100,8);
$test6[8]=$test6[0]+$test6[1]+$test6[2]+$test6[3];
$test6[9]=($test6[4]*$test6[0]+$test6[5]*$test6[1]+$test6[6]*$test6[2]+$test6[7]*$test6[3])/$test6[8];
$sql6 = "insert into users (username, password, nickname, sex, age, math_times, chinese_times, cognition_times, clock_times, total_times, math_average, chinese_average, cognition_average, clock_average ,total_average) values ('test6@test6.com', 'test6test6', 'test6', 'male', '7','test6[0]', 'test6[1]', 'test6[2]', 'test6[3]', 'test6[8]', 'test6[4]', 'test6[5]', 'test6[6]', 'test6[7]', 'test6[9]')";
$test7=getRandomArray(0,100,8);
$test7[8]=$test7[0]+$test7[1]+$test7[2]+$test7[3];
$test7[9]=($test7[4]*$test7[0]+$test7[5]*$test7[1]+$test7[6]*$test7[2]+$test7[7]*$test7[3])/$test7[8];
$sql7 = "insert into users (username, password, nickname, sex, age, math_times, chinese_times, cognition_times, clock_times, total_times, math_average, chinese_average, cognition_average, clock_average ,total_average) values ('test7@test7.com', 'test7test7', 'test7', 'male', '7','test7[0]', 'test7[1]', 'test7[2]', 'test7[3]', 'test7[8]', 'test7[4]', 'test7[5]', 'test7[6]', 'test7[7]', 'test7[9]')";
$test8=getRandomArray(0,100,8);
$test8[8]=$test8[0]+$test8[1]+$test8[2]+$test8[3];
$test8[9]=($test8[4]*$test8[0]+$test8[5]*$test8[1]+$test8[6]*$test8[2]+$test8[7]*$test8[3])/$test8[8];
$sql8 = "insert into users (username, password, nickname, sex, age, math_times, chinese_times, cognition_times, clock_times, total_times, math_average, chinese_average, cognition_average, clock_average ,total_average) values ('test8@test8.com', 'test8test8', 'test8', 'male', '7','test8[0]', 'test8[1]', 'test8[2]', 'test8[3]', 'test8[8]', 'test8[4]', 'test8[5]', 'test8[6]', 'test8[7]', 'test8[9]')";
$test9=getRandomArray(0,100,8);
$test9[8]=$test9[0]+$test9[1]+$test9[2]+$test9[3];
$test9[9]=($test9[4]*$test9[0]+$test9[5]*$test9[1]+$test9[6]*$test9[2]+$test9[7]*$test9[3])/$test9[8];
$sql9 = "insert into users (username, password, nickname, sex, age, math_times, chinese_times, cognition_times, clock_times, total_times, math_average, chinese_average, cognition_average, clock_average ,total_average) values ('test9@test9.com', 'test9test9', 'test9', 'male', '7','test9[0]', 'test9[1]', 'test9[2]', 'test9[3]', 'test9[8]', 'test9[4]', 'test9[5]', 'test9[6]', 'test9[7]', 'test9[9]')";
$test10=getRandomArray(0,100,8);
$test10[8]=$test10[0]+$test10[1]+$test10[2]+$test10[3];
$test10[9]=($test10[4]*$test10[0]+$test10[5]*$test10[1]+$test10[6]*$test10[2]+$test10[7]*$test10[3])/$test10[8];
$sql10 = "insert into users (username, password, nickname, sex, age, math_times, chinese_times, cognition_times, clock_times, total_times, math_average, chinese_average, cognition_average, clock_average ,total_average) values ('test10@test10.com', 'test10test10', 'test10', 'male', '7','test10[0]', 'test10[1]', 'test10[2]', 'test10[3]', 'test10[8]', 'test10[4]', 'test10[5]', 'test10[6]', 'test10[7]', 'test10[9]')";
		if(mysqli_query($link,$sql1)&&mysqli_query($link,$sql2)&&mysqli_query($link,$sql3)&&mysqli_query($link,$sql4)&&mysqli_query($link,$sql5)
		&&mysqli_query($link,$sql6)&&mysqli_query($link,$sql7)&&mysqli_query($link,$sql8)&&mysqli_query($link,$sql9)&&mysqli_query($link,$sql10)){
    		header("REFRESH:1;url=math.php");
    	}else{
    		echo "<script>alert('題目產生失敗,請洽服務人員!');</script>";
    		header("REFRESH:1;url=Topic.php");
    	}

?>