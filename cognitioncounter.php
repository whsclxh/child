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
$a=$row[7]+1;
$_SESSION['cognition_times'] = $a;
$sql2 = "update users set cognition_times='$a' where username='$id'";
//q1函式
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
//q1變數
$num=getRandomArray(4,14,10);
$pic=getRandomArray(0,11,10);
//q2函式
function getRandom($minNum,$maxNum){
	mt_srand((double)microtime()*1000000);
	return mt_rand($minNum,$maxNum);
}
function checkoption2($x,$y){
	$no=Array();
	do{	
		$a=true;
		$no=getRandomArray(0,8,4);
		if((in_array($x, $no))&&(in_array($y, $no))){ 
			$a=false;
		}
	}while($a);
	return $no;
}
function checkoption3($x,$y,$z){
	$no=Array();
	do{	
		$a=true;
		$no=getRandomArray(0,8,4);
		if((in_array($x, $no))&&(in_array($y, $no))&&(in_array($z, $no))){ 
			$a=false;
		}
	}while($a);
	return $no;
}
function checkoption4($x,$y,$z,$w){
	$no=Array();
	do{	
		$a=true;
		$no=getRandomArray(0,8,4);
		if((in_array($x, $no))&&(in_array($y, $no))&&(in_array($z, $no))&&(in_array($w, $no))){ 
			$a=false;
		}
	}while($a);
	return $no;
}
function setquestiondirection($x){
	if($x==0){
		$a=getRandom(0,1);
	}else if($x==1){
		$a=getRandom(0,2);
	}else if($x==2){
		$a=getRandom(0,1);
	}else if($x==3){
		$a=getRandom(0,2);
	}else if($x==4){
		$a=getRandom(0,3);
	}else if($x==5){
		$a=getRandom(0,2);
	}else if($x==6){
		$a=getRandom(0,1);
	}else if($x==7){
		$a=getRandom(0,2);
	}else{
		$a=getRandom(0,1);
	}
	return $a;
}
function setoption($x){
	$a=Array();
	if($x==0){
		$a=checkoption2(1,3);
	}else if($x==1){
		$a=checkoption3(0,2,4);
	}else if($x==2){
		$a=checkoption2(1,5);
	}else if($x==3){
		$a=checkoption3(0,4,6);
	}else if($x==4){
		$a=checkoption4(1,3,5,7);
	}else if($x==5){
		$a=checkoption3(2,4,8);
	}else if($x==6){
		$a=checkoption2(3,7);
	}else if($x==7){
		$a=checkoption3(4,6,8);
	}else{
		$a=checkoption2(5,7);
	}
	return $a;
}
function getanwser($x,$y){
	if($x==0){
		if($y==0){
			$anw=$x+3;
		}else{
			$anw=$x+1;
		}
	}else if($x==1){
		if($y==0){
			$anw=$x+3;
		}else if($x==1){
			$anw=$x-1;
		}else{
			$anw=$x+1;
		}
	}else if($x==2){
		if($y==0){
			$anw=$x+3;
		}else{
			$anw=$x-1;
		}
	}else if($x==3){
		if($y==0){
			$anw=$x-3;
		}else if($y==1){
			$anw=$x+3;
		}else{
			$anw=$x+1;
		}
	}else if($x==4){
		if($y==0){
			$anw=$x-3;
		}else if($y==1){
			$anw=$x+3;
		}else if($y==2){
			$anw=$x-1;
		}else{
			$anw=$x+1;
		}
	}else if($x==5){
		if($y==0){
			$anw=$x-3;
		}else if($y==1){
			$anw=$x+3;
		}else{
			$anw=$x-1;
		}
	}else if($x==6){
		if($y==0){
			$anw=$x-3;
		}else{
			$anw=$x+1;
		}
	}else if($x==7){
		if($y==0){
			$anw=$x-3;
		}else if($y==1){
			$anw=$x-1;
		}else{
			$anw=$x+1;
		}
	}else{
		if($y==0){
			$anw=$x-3;
		}else{
			$anw=$x-1;
		}
	}
	return $anw;
}
//q2變數
$q2pic=getRandomArray(0,8,9);
$questionfruit=getRandomArray(0,8,4);
$directionarray=[setquestiondirection($questionfruit[0]),
				setquestiondirection($questionfruit[1]),
				setquestiondirection($questionfruit[2]),
				setquestiondirection($questionfruit[3]),];
$question1option=setoption($questionfruit[0]);
$question2option=setoption($questionfruit[1]);
$question3option=setoption($questionfruit[2]);
$question4option=setoption($questionfruit[3]);
$correctanwser=[getanwser($questionfruit[0],$directionarray[0]),
			   getanwser($questionfruit[1],$directionarray[1]),
			   getanwser($questionfruit[2],$directionarray[2]),
			   getanwser($questionfruit[3],$directionarray[3]),];
//q3函式
function q3checkoption(){
	$no=array();
	do{	
		$a=true;
		$no=getRandomArray(0,4,5);
		if((in_array(0, $no))&&(in_array(1, $no))&&(in_array(2, $no))&&(in_array(3, $no))&&(in_array(4, $no))) 
			$a=false;
		}while($a);
	return $no;
}
//q3變數
$q3pictureslength=getRandomArray(100,700,10);
$q3questionpicture=q3checkoption();
//q4函式
function q4checkoption($x,$y){
	$no=array();
	if($x==1){
		do{	
			$a=true;
			$no=getRandomArray(0,7,3);
			if(in_array((7-$y), $no)){
				$a=false;
			}
		}while($a);
	return $no;
	}else if($x==0){
		do{	
			$a=true;
			$no=getRandomArray(0,7,3);
			if(in_array($y, $no)){
				$a=false;
			}
		}while($a);
	return $no;
	}
}
function getq3d2($x){
	if($x==0){
		$a=1;
	}else{
		$a=0;
	}
	return $a;
}
function getq4ca1($x,$y){
	if($x==0){
		$ca1=$y+1;
	}else{
		$ca1=8-$y;
	}
	return $ca1;
}
function getq4ca2($x,$y){
	if($x==0){
		$ca2=$y;
	}else{
		$ca2=7-$y;
	}
	return $ca2;
}
function getq4ca3($x,$y){
	if($x==0){
		$ca3=$y+1;
	}else{
		$ca3=8-$y;
	}
	return $ca3;
}
function getq4ca4($x,$y){
	if($x==0){
		$ca4=$y+1;
	}else{
		$ca4=8-$y;
	}
	return $ca4;
}
//q4變數
$topicpictures=getRandomArray(0,12,8);
$questionpictures=getRandomArray(0,7,3);
$questiondirection=[rand(0,1),rand(0,1),rand(0,1)];
$qq2=q4checkoption($questiondirection[1],$questionpictures[1]);
$d33=getq3d2($questiondirection[2]);
$q4ca1=getq4ca1($questiondirection[0],$questionpictures[0]);
$q4ca2=getq4ca2($questiondirection[1],$questionpictures[1]);
$q4ca3=getq4ca3($questiondirection[2],$questionpictures[2]);
$q4ca4=getq4ca4($d33,$questionpictures[2]);
//q5函數
function shuffle2($arr){
  	for($i = 0; $i < 2; $i++){
    	mt_srand((double)microtime()*1000000);
		$idx=mt_rand(0,2);
    	$temp = $arr[$idx];
    	$arr[$idx] = $arr[2 - $i];
    	$arr[2 - $i] = $temp;
  	}
  	return $arr;
}
function gtos($x){
	if($x==0){
		$oo1=getRandomArray(10,39,2);
		$oo11=getRandom(0,9);
		$getoptions1=array($oo11,$oo1[0],$oo1[1],);
		$option1=shuffle2($getoptions1);
		return $option1;
	}else if($x==1){
		$oo2=getRandomArray(10,39,2);
		$oo22=getRandom(0,9);
		$getoptions2=array($oo22,$oo2[0],$oo2[1],);
		$option2=shuffle2($getoptions2);
		return $option2;
	}else if($x==2){
		$oo3=getRandomArray(10,39,2);
		$oo33=getRandom(0,9);
		$getoptions3=array($oo33,$oo3[0],$oo3[1],);
		$option3=shuffle2($getoptions3);
		return $option3;
	}else{
		$oo4=getRandomArray(10,39,2);
		$oo44=getRandom(0,9);
		$getoptions4=array($oo44,$oo4[0],$oo4[1],);
		$option4=shuffle2($getoptions4);
		return $option4;
	}
}
$shape=getRandomArray(0,3,4);
$question1=gtos($shape[0]);
$question2=gtos($shape[1]);
$question3=gtos($shape[2]);
$question4=gtos($shape[3]);

$q1r = "insert into cognition1 (username,cognition_times,q1num1,q1num2,q1num3,q1num4,q1num5,q1num6,q1num7,q1num8,q1num9,q1num10,q1pic1,q1pic2,q1pic3,q1pic4,q1pic5,q1pic6,q1pic7,q1pic8,q1pic9,q1pic10) values('$id','$a','$num[0]','$num[1]','$num[2]','$num[3]','$num[4]','$num[5]','$num[6]','$num[7]','$num[8]','$num[9]','$pic[0]','$pic[1]','$pic[2]','$pic[3]','$pic[4]','$pic[5]','$pic[6]','$pic[7]','$pic[8]','$pic[9]')";

$q2r = "insert into cognition2 (username,cognition_times,q2pic1,q2pic2,q2pic3,q2pic4,q2pic5,q2pic6,q2pic7,q2pic8,q2pic9,q2qf1,q2qf2,q2qf3,q2qf4,q2d1,q2d2,q2d3,q2d4,q2q1op1,q2q1op2,q2q1op3,q2q1op4,q2q2op1,q2q2op2,q2q2op3,q2q2op4,q2q3op1,q2q3op2,q2q3op3,q2q3op4,q2q4op1,q2q4op2,q2q4op3,q2q4op4,q2ca1,q2ca2,q2ca3,q2ca4) values('$id','$a','$q2pic[0]','$q2pic[1]','$q2pic[2]','$q2pic[3]','$q2pic[4]','$q2pic[5]','$q2pic[6]','$q2pic[7]','$q2pic[8]','$questionfruit[0]','$questionfruit[1]','$questionfruit[2]','$questionfruit[3]','$directionarray[0]','$directionarray[1]','$directionarray[2]','$directionarray[3]','$question1option[0]','$question1option[1]','$question1option[2]','$question1option[3]','$question2option[0]','$question2option[1]','$question2option[2]','$question2option[3]','$question3option[0]','$question3option[1]','$question3option[2]','$question3option[3]','$question4option[0]','$question4option[1]','$question4option[2]','$question4option[3]','$correctanwser[0]','$correctanwser[1]','$correctanwser[2]','$correctanwser[3]')";

$q3r = "insert into cognition3 (username,cognition_times,q3pic1,q3pic2,q3pic3,q3pic4,q3pic5,q3len1,q3len2,q3len3,q3len4,q3len5,q3len6,q3len7,q3len8,q3len9,q3len10) values('$id','$a','$q3questionpicture[0]','$q3questionpicture[1]','$q3questionpicture[2]','$q3questionpicture[3]','$q3questionpicture[4]','$q3pictureslength[0]','$q3pictureslength[1]','$q3pictureslength[2]','$q3pictureslength[3]','$q3pictureslength[4]','$q3pictureslength[5]','$q3pictureslength[6]','$q3pictureslength[7]','$q3pictureslength[8]','$q3pictureslength[9]')";

$q4r = "insert into cognition4 (username,cognition_times,q4pic1,q4pic2,q4pic3,q4pic4,q4pic5,q4pic6,q4pic7,q4pic8,q4qpic1,q4qpic2,q4qpic3,q4d1,q4d2,q4d3,q4d4,q4q2opt1,q4q2opt2,q4q2opt3,q4ca1,q4ca2,q4ca3,q4ca4) values('$id','$a','$topicpictures[0]','$topicpictures[1]','$topicpictures[2]','$topicpictures[3]','$topicpictures[4]','$topicpictures[5]','$topicpictures[6]','$topicpictures[7]','$questionpictures[0]','$questionpictures[1]','$questionpictures[2]','$questiondirection[0]','$questiondirection[1]','$questiondirection[2]','$d33','$qq2[0]','$qq2[1]','$qq2[2]','$q4ca1','$q4ca2','$q4ca3','$q4ca4')";

$q5r = "insert into cognition5 (username,cognition_times,q5qpic1,q5qpic2,q5qpic3,q5qpic4,q5q1opt1,q5q1opt2,q5q1opt3,q5q2opt1,q5q2opt2,q5q2opt3,q5q3opt1,q5q3opt2,q5q3opt3,q5q4opt1,q5q4opt2,q5q4opt3) values('$id','$a','$shape[0]','$shape[1]','$shape[2]','$shape[3]','$question1[0]','$question1[1]','$question1[2]','$question2[0]','$question2[1]','$question2[2]','$question3[0]','$question3[1]','$question3[2]','$question4[0]','$question4[1]','$question4[2]')";

	if(mysqli_query($qaq,$sql2)){
		if(mysqli_query($qaq,$q1r)&&mysqli_query($qaq,$q2r)&&mysqli_query($qaq,$q3r)&&mysqli_query($qaq,$q4r)&&mysqli_query($qaq,$q5r)){
    		header("REFRESH:1;url=cognition.php");
    	}else{
    		echo "<script>alert('題目產生失敗,請洽服務人員!');</script>";
    		header("REFRESH:1;url=cognition.html");
    	}
    }else{   
    	echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
    	echo '<meta http-equiv=REFRESH CONTENT=2;url=Topic.php>';
    }
?>