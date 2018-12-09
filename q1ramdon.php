<?php
	function getRandomArray($minNum,$maxNum,$n){
	mt_srand((double)microtime()*1000000);  //以時間當亂數種子
	$num = Array(); //定義為陣列
	for ($i = 1; $i <= $n; $i++) {
    $a = mt_rand($minNum,$maxNum); //取得範圍為1~500亂數
     if (in_array($a, $num)) { //如果已產生過迴圈重跑
        $i--;
    }else{
        $num[] = $a; //若無重復則 將亂數塞入陣列
    }
	}
	return $num;
	}
	$num=getRandomArray(4,14,10);
	$pic=getRandomArray(0,11,10);
    if(!isset($_COOKIE["q1num1"])) {
   		setcookie("q1num1",$num[0],time()+60);
	}
	if(!isset($_COOKIE["q1num2"])) {
   		setcookie("q1num2",$num[1],time()+60);
	}
	if(!isset($_COOKIE["q1num3"])) {
   		setcookie("q1num3",$num[2],time()+60);
	}
	if(!isset($_COOKIE["q1num4"])) {
   		setcookie("q1num4",$num[3],time()+60);
	}
	if(!isset($_COOKIE["q1num5"])) {
   		setcookie("q1num5",$num[4],time()+60);
	}
	if(!isset($_COOKIE["q1num6"])) {
   		setcookie("q1num6",$num[5],time()+60);
	}
	if(!isset($_COOKIE["q1num7"])) {
   		setcookie("q1num7",$num[6],time()+60);
	}
	if(!isset($_COOKIE["q1num8"])) {
   		setcookie("q1num8",$num[7],time()+60);
	}
	if(!isset($_COOKIE["q1num9"])) {
   		setcookie("q1num9",$num[8],time()+60);
	}
	if(!isset($_COOKIE["q1num10"])) {
   		setcookie("q1num10",$num[9],time()+60);
	}
	if(!isset($_COOKIE["q1pic1"])) {
   		setcookie("q1pic1",$pic[0],time()+60);
	}
	if(!isset($_COOKIE["q1pic2"])) {
   		setcookie("q1pic2",$pic[1],time()+60);
	}
	if(!isset($_COOKIE["q1pic3"])) {
   		setcookie("q1pic3",$pic[2],time()+60);
	}
	if(!isset($_COOKIE["q1pic4"])) {
   		setcookie("q1pic4",$pic[3],time()+60);
	}
	if(!isset($_COOKIE["q1pic5"])) {
   		setcookie("q1pic5",$pic[4],time()+60);
	}
	if(!isset($_COOKIE["q1pic6"])) {
   		setcookie("q1pic6",$pic[5],time()+60);
	}
	if(!isset($_COOKIE["q1pic7"])) {
   		setcookie("q1pic7",$pic[6],time()+60);
	}
	if(!isset($_COOKIE["q1pic8"])) {
   		setcookie("q1pic8",$pic[7],time()+60);
	}
	if(!isset($_COOKIE["q1pic9"])) {
   		setcookie("q1pic9",$pic[8],time()+60);
	}
	if(!isset($_COOKIE["q1pic10"])) {
   		setcookie("q1pic10",$pic[9],time()+60);
	}
	if(isset($_COOKIE["q1num1"])) {
   		$q1num1=$_COOKIE["q1num1"];
	}else{
		$q1num1=$num[0];
	}
	if(isset($_COOKIE["q1num2"])) {
   		$q1num2=$_COOKIE["q1num2"];
	}else{
		$q1num2=$num[1];
	}
	if(isset($_COOKIE["q1num3"])) {
   		$q1num3=$_COOKIE["q1num3"];
	}else{
		$q1num3=$num[2];
	}
	if(isset($_COOKIE["q1num4"])) {
   		$q1num4=$_COOKIE["q1num4"];
	}else{
		$q1num4=$num[3];
	}
	if(isset($_COOKIE["q1num5"])) {
   		$q1num5=$_COOKIE["q1num5"];
	}else{
		$q1num5=$num[4];
	}
	if(isset($_COOKIE["q1num6"])) {
   		$q1num6=$_COOKIE["q1num6"];
	}else{
		$q1num6=$num[5];
	}
	if(isset($_COOKIE["q1num7"])) {
   		$q1num7=$_COOKIE["q1num7"];
	}else{
		$q1num7=$num[6];
	}
	if(isset($_COOKIE["q1num8"])) {
   		$q1num8=$_COOKIE["q1num8"];
	}else{
		$q1num8=$num[7];
	}
	if(isset($_COOKIE["q1num9"])) {
   		$q1num9=$_COOKIE["q1num9"];
	}else{
		$q1num9=$num[8];
	}
	if(isset($_COOKIE["q1num10"])) {
   		$q1num10=$_COOKIE["q1num10"];
	}else{
		$q1num10=$num[9];
	}
	if(isset($_COOKIE["q1pic1"])) {
   		$q1pic1=$_COOKIE["q1pic1"];
	}else{
		$q1pic1=$pic[0];
	}
	if(isset($_COOKIE["q1pic2"])) {
   		$q1pic2=$_COOKIE["q1pic2"];
	}else{
		$q1pic2=$pic[1];
	}
	if(isset($_COOKIE["q1pic3"])) {
   		$q1pic3=$_COOKIE["q1pic3"];
	}else{
		$q1pic3=$pic[2];
	}
	if(isset($_COOKIE["q1pic4"])) {
   		$q1pic4=$_COOKIE["q1pic4"];
	}else{
		$q1pic4=$pic[3];
	}
	if(isset($_COOKIE["q1pic5"])) {
   		$q1pic5=$_COOKIE["q1pic5"];
	}else{
		$q1pic5=$pic[4];
	}
	if(isset($_COOKIE["q1pic6"])) {
   		$q1pic6=$_COOKIE["q1pic6"];
	}else{
		$q1pic6=$pic[5];
	}
	if(isset($_COOKIE["q1pic7"])) {
   		$q1pic7=$_COOKIE["q1pic7"];
	}else{
		$q1pic7=$pic[6];
	}
	if(isset($_COOKIE["q1pic8"])) {
   		$q1pic8=$_COOKIE["q1pic8"];
	}else{
		$q1pic8=$pic[7];
	}
	if(isset($_COOKIE["q1pic9"])) {
   		$q1pic9=$_COOKIE["q1pic9"];
	}else{
		$q1pic9=$pic[8];
	}
	if(isset($_COOKIE["q1pic10"])) {
   		$q1pic10=$_COOKIE["q1pic10"];
	}else{
		$q1pic10=$pic[9];
	}
?>