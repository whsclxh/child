<?php
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
				$anw=x+3;
			}else{
				$anw=x+1;
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
	if(!isset($_COOKIE["q2pic1"])) {
   		setcookie("q2pic1",$q2pic[0],time()+60);
	}
	if(!isset($_COOKIE["q2pic2"])) {
   		setcookie("q2pic2",$q2pic[1],time()+60);
	}
	if(!isset($_COOKIE["q2pic3"])) {
   		setcookie("q2pic3",$q2pic[2],time()+60);
	}
	if(!isset($_COOKIE["q2pic4"])) {
   		setcookie("q2pic4",$q2pic[3],time()+60);
	}
	if(!isset($_COOKIE["q2pic5"])) {
   		setcookie("q2pic5",$q2pic[4],time()+60);
	}
	if(!isset($_COOKIE["q2pic6"])) {
   		setcookie("q2pic6",$q2pic[5],time()+60);
	}
	if(!isset($_COOKIE["q2pic7"])) {
   		setcookie("q2pic7",$q2pic[6],time()+60);
	}
	if(!isset($_COOKIE["q2pic8"])) {
   		setcookie("q2pic8",$q2pic[7],time()+60);
	}
	if(!isset($_COOKIE["q2pic9"])) {
   		setcookie("q2pic9",$q2pic[8],time()+60);
	}
	if(!isset($_COOKIE["q2qf1"])) {
   		setcookie("q2qf1",$questionfruit[0],time()+60);
	}
	if(!isset($_COOKIE["q2qf2"])) {
   		setcookie("q2qf2",$questionfruit[1],time()+60);
	}
	if(!isset($_COOKIE["q2qf3"])) {
   		setcookie("q2qf3",$questionfruit[2],time()+60);
	}
	if(!isset($_COOKIE["q2qf4"])) {
   		setcookie("q2qf4",$questionfruit[3],time()+60);
	}
	if(!isset($_COOKIE["q2d1"])) {
   		setcookie("q2d1",$directionarray[0],time()+60);
	}
	if(!isset($_COOKIE["q2d2"])) {
   		setcookie("q2d2",$directionarray[1],time()+60);
	}
	if(!isset($_COOKIE["q2d3"])) {
   		setcookie("q2d3",$directionarray[2],time()+60);
	}
	if(!isset($_COOKIE["q2d4"])) {
   		setcookie("q2d4",$directionarray[3],time()+60);
	}
	if(!isset($_COOKIE["q2q1op1"])) {
   		setcookie("q2q1op1",$question1option[0],time()+60);
	}
	if(!isset($_COOKIE["q2q1op2"])) {
   		setcookie("q2q1op2",$question1option[1],time()+60);
	}
	if(!isset($_COOKIE["q2q1op3"])) {
   		setcookie("q2q1op3",$question1option[2],time()+60);
	}
	if(!isset($_COOKIE["q2q1op4"])) {
   		setcookie("q2q1op4",$question1option[3],time()+60);
	}
	if(!isset($_COOKIE["q2q2op1"])) {
   		setcookie("q2q2op1",$question2option[0],time()+60);
	}
	if(!isset($_COOKIE["q2q2op2"])) {
   		setcookie("q2q2op2",$question2option[1],time()+60);
	}
	if(!isset($_COOKIE["q2q2op3"])) {
   		setcookie("q2q2op3",$question2option[2],time()+60);
	}
	if(!isset($_COOKIE["q2q2op4"])) {
   		setcookie("q2q2op4",$question2option[3],time()+60);
	}
	if(!isset($_COOKIE["q2q3op1"])) {
   		setcookie("q2q3op1",$question3option[0],time()+60);
	}
	if(!isset($_COOKIE["q2q3op2"])) {
   		setcookie("q2q3op2",$question3option[1],time()+60);
	}
	if(!isset($_COOKIE["q2q3op3"])) {
   		setcookie("q2q3op3",$question3option[2],time()+60);
	}
	if(!isset($_COOKIE["q2q3op4"])) {
   		setcookie("q2q3op4",$question3option[3],time()+60);
	}
	if(!isset($_COOKIE["q2q4op1"])) {
   		setcookie("q2q4op1",$question4option[0],time()+60);
	}
	if(!isset($_COOKIE["q2q4op2"])) {
   		setcookie("q2q4op2",$question4option[1],time()+60);
	}
	if(!isset($_COOKIE["q2q4op3"])) {
   		setcookie("q2q4op3",$question4option[2],time()+60);
	}
	if(!isset($_COOKIE["q2q4op4"])) {
   		setcookie("q2q4op4",$question4option[3],time()+60);
	}
	if(!isset($_COOKIE["q2ca1"])) {
   		setcookie("q2ca1",$correctanwse[0],time()+60);
	}
	if(!isset($_COOKIE["q2ca2"])) {
   		setcookie("q2ca2",$correctanwse[1],time()+60);
	}
	if(!isset($_COOKIE["q2ca3"])) {
   		setcookie("q2ca3",$correctanwse[2],time()+60);
	}
	if(!isset($_COOKIE["q2ca4"])) {
   		setcookie("q2ca4",$correctanwse[3],time()+60);
	}
	if(isset($_COOKIE["q2pic1"])) {
   		$q2pic1=$_COOKIE["q2pic1"];
	}else{
		$q2pic1=$q2pic[0];
	}
	if(isset($_COOKIE["q2pic2"])) {
   		$q2pic2=$_COOKIE["q2pic2"];
	}else{
		$q2pic2=$q2pic[1];
	}
	if(isset($_COOKIE["q2pic3"])) {
   		$q2pic3=$_COOKIE["q2pic3"];
	}else{
		$q2pic3=$q2pic[2];
	}
	if(isset($_COOKIE["q2pic4"])) {
   		$q2pic4=$_COOKIE["q2pic4"];
	}else{
		$q2pic4=$q2pic[3];
	}
	if(isset($_COOKIE["q2pic5"])) {
   		$q2pic5=$_COOKIE["q2pic5"];
	}else{
		$q2pic5=$q2pic[4];
	}
	if(isset($_COOKIE["q2pic6"])) {
   		$q2pic6=$_COOKIE["q2pic6"];
	}else{
		$q2pic6=$q2pic[5];
	}
	if(isset($_COOKIE["q2pic7"])) {
   		$q2pic7=$_COOKIE["q2pic7"];
	}else{
		$q2pic7=$q2pic[6];
	}
	if(isset($_COOKIE["q2pic8"])) {
   		$q2pic8=$_COOKIE["q2pic8"];
	}else{
		$q2pic8=$q2pic[7];
	}
	if(isset($_COOKIE["q2pic9"])) {
   		$q2pic9=$_COOKIE["q2pic9"];
	}else{
		$q2pic9=$q2pic[8];
	}
	if(isset($_COOKIE["q2qf1"])) {
   		$q2qf1=$_COOKIE["q2qf1"];
	}else{
		$q2qf1=$questionfruit[0];
	}
	if(isset($_COOKIE["q2qf2"])) {
   		$q2qf2=$_COOKIE["q2qf2"];
	}else{
		$q2qf2=$questionfruit[1];
	}
	if(isset($_COOKIE["q2qf3"])) {
   		$q2qf3=$_COOKIE["q2qf3"];
	}else{
		$q2qf3=$questionfruit[2];
	}
	if(isset($_COOKIE["q2qf4"])) {
   		$q2qf4=$_COOKIE["q2qf4"];
	}else{
		$q2qf4=$questionfruit[3];
	}
	if(isset($_COOKIE["q2qd1"])) {
   		$q2qd1=$_COOKIE["q2qd1"];
	}else{
		$q2qd1=$directionarray[0];
	}
	if(isset($_COOKIE["q2qd2"])) {
   		$q2qd2=$_COOKIE["q2qd2"];
	}else{
		$q2qd2=$directionarray[1];
	}
	if(isset($_COOKIE["q2qd3"])) {
   		$q2qd3=$_COOKIE["q2qd3"];
	}else{
		$q2qd3=$directionarray[2];
	}
	if(isset($_COOKIE["q2qd4"])) {
   		$q2qd4=$_COOKIE["q2qd4"];
	}else{
		$q2qd4=$directionarray[3];
	}
	if(isset($_COOKIE["q2q1op1"])) {
   		$q2q1op1=$_COOKIE["q2q1op1"];
	}else{
		$q2q1op1=$question1option[0];
	}
	if(isset($_COOKIE["q2q1op2"])) {
   		$q2q1op2=$_COOKIE["q2q1op2"];
	}else{
		$q2q1op2=$question1option[1];
	}
	if(isset($_COOKIE["q2q1op3"])) {
   		$q2q1op3=$_COOKIE["q2q1op3"];
	}else{
		$q2q1op3=$question1option[2];
	}
	if(isset($_COOKIE["q2q1op4"])) {
   		$q2q1op4=$_COOKIE["q2q1op4"];
	}else{
		$q2q1op4=$question1option[3];
	}
	if(isset($_COOKIE["q2q2op1"])) {
   		$q2q2op1=$_COOKIE["q2q2op1"];
	}else{
		$q2q2op1=$question2option[0];
	}
	if(isset($_COOKIE["q2q2op2"])) {
   		$q2q2op2=$_COOKIE["q2q2op2"];
	}else{
		$q2q2op2=$question2option[1];
	}
	if(isset($_COOKIE["q2q2op3"])) {
   		$q2q2op3=$_COOKIE["q2q2op3"];
	}else{
		$q2q2op3=$question2option[2];
	}
	if(isset($_COOKIE["q2q2op4"])) {
   		$q2q2op4=$_COOKIE["q2q2op4"];
	}else{
		$q2q2op4=$question2option[3];
	}
	if(isset($_COOKIE["q2q3op1"])) {
   		$q2q3op1=$_COOKIE["q2q3op1"];
	}else{
		$q2q3op1=$question3option[0];
	}
	if(isset($_COOKIE["q2q3op2"])) {
   		$q2q3op2=$_COOKIE["q2q3op2"];
	}else{
		$q2q3op2=$question3option[1];
	}
	if(isset($_COOKIE["q2q3op3"])) {
   		$q2q3op3=$_COOKIE["q2q3op3"];
	}else{
		$q2q3op3=$question3option[2];
	}
	if(isset($_COOKIE["q2q3op4"])) {
   		$q2q3op4=$_COOKIE["q2q3op4"];
	}else{
		$q2q3op4=$question3option[3];
	}
	if(isset($_COOKIE["q2q4op1"])) {
   		$q2q4op1=$_COOKIE["q2q4op1"];
	}else{
		$q2q4op1=$question4option[0];
	}
	if(isset($_COOKIE["q2q4op2"])) {
   		$q2q4op2=$_COOKIE["q2q4op2"];
	}else{
		$q2q4op2=$question4option[1];
	}
	if(isset($_COOKIE["q2q4op3"])) {
   		$q2q4op3=$_COOKIE["q2q4op3"];
	}else{
		$q2q4op3=$question4option[2];
	}
	if(isset($_COOKIE["q2q4op4"])) {
   		$q2q4op4=$_COOKIE["q2q4op4"];
	}else{
		$q2q4op4=$question4option[3];
	}
	if(isset($_COOKIE["q2ca1"])) {
   		$q2ca1=$_COOKIE["q2ca1"];
	}else{
		$q2ca1=$correctanwser[0];
	}
	if(isset($_COOKIE["q2ca2"])) {
   		$q2ca2=$_COOKIE["q2ca2"];
	}else{
		$q2ca2=$correctanwser[1];
	}
	if(isset($_COOKIE["q2ca3"])) {
   		$q2ca3=$_COOKIE["q2ca3"];
	}else{
		$q2ca3=$correctanwser[2];
	}
	if(isset($_COOKIE["q2ca4"])) {
   		$q2ca4=$_COOKIE["q2ca4"];
	}else{
		$q2ca4=$correctanwser[3];
	}
	if(isset($_COOKIE["q2pic1"])&&isset($_COOKIE["q2pic2"])&&isset($_COOKIE["q2pic3"])&&isset($_COOKIE["q2pic4"])&&isset($_COOKIE["q2pic5"])&&isset($_COOKIE["q2pic6"])&&isset($_COOKIE["q2pic7"])&&isset($_COOKIE["q2pic8"])&&isset($_COOKIE["q2pic9"])){
		$a=array($_COOKIE["q2pic1"],$_COOKIE["q2pic2"],$_COOKIE["q2pic3"],$_COOKIE["q2pic4"],$_COOKIE["q2pic5"],$_COOKIE["q2pic6"],$_COOKIE["q2pic7"],$_COOKIE["q2pic8"],$_COOKIE["q2pic9"],);
	}else{
		$a=array($q2pic[0],$q2pic[1],$q2pic[2],$q2pic[3],$q2pic[4],$q2pic[5],$q2pic[6],$q2pic[7],$q2pic[8],);
	}
	if(isset($_COOKIE["q2d1"])&&isset($_COOKIE["q2d2"])&&isset($_COOKIE["q2d3"])&&isset($_COOKIE["q2d4"])){
		$d=array($_COOKIE["q2d1"],$_COOKIE["q2d2"],$_COOKIE["q2d3"],$_COOKIE["q2d4"],);
	}else{
		$d=array($directionarray[0],$directionarray[1],$directionarray[2],$directionarray[3],);
	}
?>