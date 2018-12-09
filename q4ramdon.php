<?php

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
function getq3d(){
		if($questiondirection[2]==0){
			$a=0;
		}else{
			$a=1;
		}
		return $a;
}
function getq3d2(){
		if($questiondirection[2]==0){
			$a=1;
		}else{
			$a=0;
		}
		return $a;
	}
$topicpictures=getRandomArray(0,12,8);
$questionpictures=getRandomArray(0,7,3);
$questiondirection=[rand(0,1),rand(0,1),rand(0,1)];
$qq2=q4checkoption($questiondirection[1],$questionpictures[1]);
$d3=getq3d();
$d33=getq3d2();
	if(!isset($_COOKIE["q4pic1"])) {
   		setcookie("q4pic1",$topicpictures[0],time()+60);
	}
	if(!isset($_COOKIE["q4pic2"])) {
   		setcookie("q4pic2",$topicpictures[1],time()+60);
	}
	if(!isset($_COOKIE["q4pic3"])) {
   		setcookie("q4pic3",$topicpictures[2],time()+60);
	}
	if(!isset($_COOKIE["q4pic4"])) {
   		setcookie("q4pic4",$topicpictures[3],time()+60);
	}
	if(!isset($_COOKIE["q4pic5"])) {
   		setcookie("q4pic5",$topicpictures[4],time()+60);
	}
	if(!isset($_COOKIE["q4pic6"])) {
   		setcookie("q4pic6",$topicpictures[5],time()+60);
	}
	if(!isset($_COOKIE["q4pic7"])) {
   		setcookie("q4pic7",$topicpictures[6],time()+60);
	}
	if(!isset($_COOKIE["q4pic8"])) {
   		setcookie("q4pic8",$topicpictures[7],time()+60);
	}
	if(!isset($_COOKIE["q4qqpic1"])) {
   		setcookie("q4qqpic1",$questionpictures[0],time()+60);
	}
	if(!isset($_COOKIE["q4qqpic2"])) {
   		setcookie("q4qqpic2",$questionpictures[1],time()+60);
	}
	if(!isset($_COOKIE["q4qqpic3"])) {
   		setcookie("q4qqpic3",$questionpictures[2],time()+60);
	}
	if(!isset($_COOKIE["q4qd1"])) {
   		setcookie("q4qd1",$questiondirection[0],time()+60);
	}
	if(!isset($_COOKIE["q4qd2"])) {
   		setcookie("q4qd2",$questiondirection[1],time()+60);
	}
	if(!isset($_COOKIE["q4qd3"])) {
   		setcookie("q4qd3",$questiondirection[2],time()+60);
	}
	if(!isset($_COOKIE["q4qq1"])) {
   		setcookie("q4qq1",$qq2[0],time()+60);
	}
	if(!isset($_COOKIE["q4qq2"])) {
   		setcookie("q4qq2",$qq2[1],time()+60);
	}
	if(!isset($_COOKIE["q4qq3"])) {
   		setcookie("q4qq3",$qq2[2],time()+60);
	}
	if(!isset($_COOKIE["q4d3"])) {
   		setcookie("q4d3",$d3,time()+60);
	}
	if(!isset($_COOKIE["q4d33"])) {
   		setcookie("q4d33",$d33,time()+60);
	}
	if(isset($_COOKIE["q4pic1"])) {
   		$q4pic1=$_COOKIE["q4pic1"];
	}else{
		$q4pic1=$topicpictures[0];
	}
	if(isset($_COOKIE["q4pic2"])) {
   		$q4pic2=$_COOKIE["q4pic2"];
	}else{
		$q4pic2=$topicpictures[1];
	}
	if(isset($_COOKIE["q4pic3"])) {
   		$q4pic3=$_COOKIE["q4pic3"];
	}else{
		$q4pic3=$topicpictures[2];
	}
	if(isset($_COOKIE["q4pic4"])) {
   		$q4pic4=$_COOKIE["q4pic4"];
	}else{
		$q4pic4=$topicpictures[3];
	}
	if(isset($_COOKIE["q4pic5"])) {
   		$q4pic5=$_COOKIE["q4pic5"];
	}else{
		$q4pic5=$topicpictures[4];
	}
	if(isset($_COOKIE["q4pic6"])) {
   		$q4pic6=$_COOKIE["q4pic6"];
	}else{
		$q4pic6=$topicpictures[5];
	}
	if(isset($_COOKIE["q4pic7"])) {
   		$q4pic7=$_COOKIE["q4pic7"];
	}else{
		$q4pic7=$topicpictures[6];
	}
	if(isset($_COOKIE["q4pic8"])) {
   		$q4pic8=$_COOKIE["q4pic8"];
	}else{
		$q4pic8=$topicpictures[7];
	}
	if(isset($_COOKIE["q4qqpic1"])) {
   		$q4qqpic1=$_COOKIE["q4qqpic1"];
	}else{
		$q4qqpic1=$questionpictures[0];
	}
	if(isset($_COOKIE["q4qqpic2"])) {
   		$q4qqpic2=$_COOKIE["q4qqpic2"];
	}else{
		$q4qqpic2=$questionpictures[1];
	}
	if(isset($_COOKIE["q4qqpic3"])) {
   		$q4qqpic3=$_COOKIE["q4qqpic3"];
	}else{
		$q4qqpic3=$questionpictures[2];
	}
	if(isset($_COOKIE["q4qd1"])) {
   		$q4qd1=$_COOKIE["q4qd1"];
	}else{
		$q4qd1=$questiondirection[0];
	}
	if(isset($_COOKIE["q4qd2"])) {
   		$q4qd2=$_COOKIE["q4qd2"];
	}else{
		$q4qd2=$questiondirection[1];
	}
	if(isset($_COOKIE["q4qd3"])) {
   		$q4qd3=$_COOKIE["q4qd3"];
	}else{
		$q4qd3=$questiondirection[2];
	}
	if(isset($_COOKIE["q4qq1"])) {
   		$q4qq1=$_COOKIE["q4qq1"];
	}else{
		$q4qq1=$qq2[0];
	}
	if(isset($_COOKIE["q4qq2"])) {
   		$q4qq2=$_COOKIE["q4qq2"];
	}else{
		$q4qq2=$qq2[1];
	}
	if(isset($_COOKIE["q4qq3"])) {
   		$q4qq3=$_COOKIE["q4qq3"];
	}else{
		$q4qq3=$qq2[2];
	}
	if(isset($_COOKIE["q4d33"])) {
   		$q4d33=$_COOKIE["q4d33"];
	}else{
		$q4d33=$d33;
	}
	if(isset($_COOKIE["q4d3"])) {
   		$q4d3=$_COOKIE["q4d3"];
	}else{
		$q4d3=$d3;
	}
	if(isset($_COOKIE["q4pic1"])&&isset($_COOKIE["q4pic2"])&&isset($_COOKIE["q4pic3"])&&isset($_COOKIE["q4pic4"])&&isset($_COOKIE["q4pic5"])&&isset($_COOKIE["q4pic6"])&&isset($_COOKIE["q4pic7"])&&isset($_COOKIE["q4pic8"])) {
   		$q4a=array($_COOKIE["q4pic1"],$_COOKIE["q4pic2"],$_COOKIE["q4pic3"],$_COOKIE["q4pic4"],$_COOKIE["q4pic5"],$_COOKIE["q4pic6"],$_COOKIE["q4pic7"],$_COOKIE["q4pic8"]);
	}else{
		$q4a=array($topicpictures[0],$topicpictures[1],$topicpictures[2],$topicpictures[3],$topicpictures[4],$topicpictures[5],$topicpictures[6],$topicpictures[7],);
	}
?>