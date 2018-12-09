<?php
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
	$shape=getRandomArray(0,3,4);
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
	$question1=gtos($shape[0]); //2
	$question2=gtos($shape[1]); //0
	$question3=gtos($shape[2]); //1
	$question4=gtos($shape[3]); //3
	if(!isset($_COOKIE["q5qpic1"])) {
   		setcookie("q5qpic1",$shape[0],time()+60);
	}
	if(!isset($_COOKIE["q5qpic2"])) {
   		setcookie("q5qpic2",$shape[1],time()+60);
	}
	if(!isset($_COOKIE["q5qpic3"])) {
   		setcookie("q5qpic3",$shape[2],time()+60);
	}
	if(!isset($_COOKIE["q5qpic4"])) {
   		setcookie("q5qpic4",$shape[3],time()+60);
	}
	if(!isset($_COOKIE["q5o1pic1"])) {
   		setcookie("q5o1pic1",$question1[0],time()+60);
	}
	if(!isset($_COOKIE["q5o1pic2"])) {
   		setcookie("q5o1pic2",$question1[1],time()+60);
	}
	if(!isset($_COOKIE["q5o1pic3"])) {
   		setcookie("q5o1pic3",$question1[2],time()+60);
	}
	if(!isset($_COOKIE["q5o2pic1"])) {
   		setcookie("q5o2pic1",$question2[0],time()+60);
	}
	if(!isset($_COOKIE["q5o2pic2"])) {
   		setcookie("q5o2pic2",$question2[1],time()+60);
	}
	if(!isset($_COOKIE["q5o2pic3"])) {
   		setcookie("q5o2pic3",$question2[2],time()+60);
	}
	if(!isset($_COOKIE["q5o3pic1"])) {
   		setcookie("q5o3pic1",$question3[0],time()+60);
	}
	if(!isset($_COOKIE["q5o3pic2"])) {
   		setcookie("q5o3pic2",$question3[1],time()+60);
	}
	if(!isset($_COOKIE["q5o3pic3"])) {
   		setcookie("q5o3pic3",$question3[2],time()+60);
	}
	if(!isset($_COOKIE["q5o4pic1"])) {
   		setcookie("q5o4pic1",$question4[0],time()+60);
	}
	if(!isset($_COOKIE["q5o4pic2"])) {
   		setcookie("q5o4pic2",$question4[1],time()+60);
	}
	if(!isset($_COOKIE["q5o4pic3"])) {
   		setcookie("q5o4pic3",$question4[2],time()+60);
	}
	if(isset($_COOKIE["q5qpic1"])) {
   		$q5qpic1=$_COOKIE["q5qpic1"];
	}else{
		$q5qpic1=$shape[0];
    }
    if(isset($_COOKIE["q5qpic2"])) {
   		$q5qpic2=$_COOKIE["q5qpic2"];
	}else{
		$q5qpic2=$shape[1];
    }
    if(isset($_COOKIE["q5qpic3"])) {
   		$q5qpic3=$_COOKIE["q5qpic3"];
	}else{
		$q5qpic3=$shape[2];
    }
    if(isset($_COOKIE["q5qpic4"])) {
   		$q5qpic4=$_COOKIE["q5qpic4"];
	}else{
		$q5qpic4=$shape[3];
    }
    if(isset($_COOKIE["q5o1pic1"])) {
   		$q5o1pic1=$_COOKIE["q5o1pic1"];
	}else{
		$q5o1pic1=$question1[0];
    }
    if(isset($_COOKIE["q5o1pic2"])) {
   		$q5o1pic2=$_COOKIE["q5o1pic2"];
	}else{
		$q5o1pic2=$question1[1];
    }
    if(isset($_COOKIE["q5o1pic3"])) {
   		$q5o1pic3=$_COOKIE["q5o1pic3"];
	}else{
		$q5o1pic3=$question1[2];
    }
    if(isset($_COOKIE["q5o2pic1"])) {
   		$q5o2pic1=$_COOKIE["q5o2pic1"];
	}else{
		$q5o2pic1=$question2[0];
    }
    if(isset($_COOKIE["q5o2pic2"])) {
   		$q5o2pic2=$_COOKIE["q5o2pic2"];
	}else{
		$q5o2pic2=$question2[1];
    }
    if(isset($_COOKIE["q5o2pic3"])) {
   		$q5o2pic3=$_COOKIE["q5o2pic3"];
	}else{
		$q5o2pic3=$question2[2];
    }
    if(isset($_COOKIE["q5o3pic1"])) {
   		$q5o3pic1=$_COOKIE["q5o3pic1"];
	}else{
		$q5o3pic1=$question3[0];
    }
    if(isset($_COOKIE["q5o3pic2"])) {
   		$q5o3pic2=$_COOKIE["q5o3pic2"];
	}else{
		$q5o3pic2=$question3[1];
    }
    if(isset($_COOKIE["q5o3pic3"])) {
   		$q5o3pic3=$_COOKIE["q5o3pic3"];
	}else{
		$q5o3pic3=$question3[2];
    }
    if(isset($_COOKIE["q5o4pic1"])) {
   		$q5o4pic1=$_COOKIE["q5o4pic1"];
	}else{
		$q5o4pic1=$question4[0];
    }
    if(isset($_COOKIE["q5o4pic2"])) {
   		$q5o4pic2=$_COOKIE["q5o4pic2"];
	}else{
		$q5o4pic2=$question4[1];
    }
    if(isset($_COOKIE["q5o4pic3"])) {
   		$q5o4pic3=$_COOKIE["q5o4pic3"];
	}else{
		$q5o4pic3=$question4[2];
    }
    if(isset($_COOKIE["q5o1pic1"])&&isset($_COOKIE["q5o1pic2"])&&isset($_COOKIE["q5o1pic3"])) {
   		$q5picture1=array($_COOKIE["q5o1pic1"],$_COOKIE["q5o1pic2"],$_COOKIE["q5o1pic3"]);
	}else{
		$q5picture1=array($question1[0],$question1[1],$question1[2]);
    }
    if(isset($_COOKIE["q5o2pic1"])&&isset($_COOKIE["q5o2pic2"])&&isset($_COOKIE["q5o2pic3"])) {
   		$q5picture2=array($_COOKIE["q5o2pic1"],$_COOKIE["q5o2pic2"],$_COOKIE["q5o2pic3"]);
	}else{
		$q5picture2=array($question2[0],$question2[1],$question2[2]);
    }
    if(isset($_COOKIE["q5o3pic1"])&&isset($_COOKIE["q5o3pic2"])&&isset($_COOKIE["q5o3pic3"])) {
   		$q5picture3=array($_COOKIE["q5o3pic1"],$_COOKIE["q5o3pic2"],$_COOKIE["q5o3pic3"]);
	}else{
		$q5picture3=array($question3[0],$question3[1],$question3[2]);
    }
    if(isset($_COOKIE["q5o4pic1"])&&isset($_COOKIE["q5o4pic2"])&&isset($_COOKIE["q5o4pic3"])) {
   		$q5picture4=array($_COOKIE["q5o4pic1"],$_COOKIE["q5o4pic2"],$_COOKIE["q5o4pic3"]);
	}else{
		$q5picture4=array($question4[0],$question4[1],$question4[2]);
    }
?>