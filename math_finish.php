<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript">
	//q1
	function q1pictures(x,y){
		var imgurl=[
    	'img/fruit/apple.png',
    	'img/fruit/banana.png',
    	'img/fruit/kiwi.png',
    	'img/fruit/melon.png',
    	'img/fruit/orange.png',
    	'img/fruit/peach.png',
    	'img/fruit/pear.png',
    	'img/fruit/pear2.png',
    	'img/fruit/pepper.png',
    	'img/fruit/persimmon.png',
    	'img/fruit/strawberry.png',
    	'img/fruit/tomato.png',
	];
		for(var i=1;i<=x;i++){
			document.write('<img src="'+imgurl[y]+'" width="65px"; height="65px";>');
		}
	}

	function q1write(x){
		document.write(x);
	}
	//q2
	function q2qpictures(w,x,y,z){
    var imgurl=[
      'img/fruit/apple.png',
      'img/fruit/banana.png',
      'img/fruit/kiwi.png',
      'img/fruit/melon.png',
      'img/fruit/orange.png',
      'img/fruit/peach.png',
      'img/fruit/pear.png',
      'img/fruit/pear2.png',
      'img/fruit/pepper.png',
      'img/fruit/persimmon.png',
      'img/fruit/strawberry.png',
      'img/fruit/tomato.png',
  ];
    for(var i=1;i<=w;i++){
      document.write('<img src="'+imgurl[y]+'" width="50px"; height="50px";>');
    }
    for(var i=1;i<=x;i++){
      document.write('<img src="'+imgurl[z]+'" width="50px"; height="50px";>');
    }
  }
  function q2pictures(x){
    var imgurl=[
      'img/fruit/apple.png',
      'img/fruit/banana.png',
      'img/fruit/kiwi.png',
      'img/fruit/melon.png',
      'img/fruit/orange.png',
      'img/fruit/peach.png',
      'img/fruit/pear.png',
      'img/fruit/pear2.png',
      'img/fruit/pepper.png',
      'img/fruit/persimmon.png',
      'img/fruit/strawberry.png',
      'img/fruit/tomato.png',
  ];
      document.write('<img src="'+imgurl[x]+'" width="50px" height="50px" vertical-align : middle;>');
  }
  function q2addormul(x){
  	var am=[' 總共 ',
  			' 相差 ',];
  	document.write(am[x]);
  }
  //q3
  function q3print(x){
		document.write(x);
	} 
  //q5
  function q5pictures(x,y){
		var imgurl=[
    	'img/fruit/apple.png',
    	'img/fruit/banana.png',
    	'img/fruit/kiwi.png',
    	'img/fruit/melon.png',
    	'img/fruit/orange.png',
    	'img/fruit/peach.png',
    	'img/fruit/pear.png',
    	'img/fruit/pear2.png',
    	'img/fruit/pepper.png',
    	'img/fruit/persimmon.png',
    	'img/fruit/strawberry.png',
    	'img/fruit/tomato.png',
	];
		for(var i=1;i<=x;i++){
			document.write('<img src="'+imgurl[y]+'" width="50px"; height="50px";>');
		}
	}
</script>
<?php
//q1
@$q1q1 = $_POST['q1question1'];
@$q1q2 = $_POST['q1question2'];
@$q1q3 = $_POST['q1question3'];
@$q1q4 = $_POST['q1question4'];
@$q1q5 = $_POST['q1question5'];
$q1anw1 = $_POST['q1anwser1'];
$q1anw2 = $_POST['q1anwser2'];
$q1anw3 = $_POST['q1anwser3'];
$q1anw4 = $_POST['q1anwser4'];
$q1anw5 = $_POST['q1anwser5'];
$q1pic1 = $_POST['q1picture1'];
$q1pic2 = $_POST['q1picture2'];
$q1pic3 = $_POST['q1picture3'];
$q1pic4 = $_POST['q1picture4'];
$q1pic5 = $_POST['q1picture5'];
$q1opt11 = $_POST['q1option11'];
$q1opt12 = $_POST['q1option12'];
$q1opt13 = $_POST['q1option13'];
$q1opt14 = $_POST['q1option14'];
$q1opt15 = $_POST['q1option15'];
$q1opt21 = $_POST['q1option21'];
$q1opt22 = $_POST['q1option22'];
$q1opt23 = $_POST['q1option23'];
$q1opt24 = $_POST['q1option24'];
$q1opt25 = $_POST['q1option25'];
$q1opt31 = $_POST['q1option31'];
$q1opt32 = $_POST['q1option32'];
$q1opt33 = $_POST['q1option33'];
$q1opt34 = $_POST['q1option34'];
$q1opt35 = $_POST['q1option35'];
$q1opt41 = $_POST['q1option41'];
$q1opt42 = $_POST['q1option42'];
$q1opt43 = $_POST['q1option43'];
$q1opt44 = $_POST['q1option44'];
$q1opt45 = $_POST['q1option45'];
$q1opt51 = $_POST['q1option51'];
$q1opt52 = $_POST['q1option52'];
$q1opt53 = $_POST['q1option53'];
$q1opt54 = $_POST['q1option54'];
$q1opt55 = $_POST['q1option55'];
$q1score=0;
if(($q1q1)==($q1anw1)){
	$q1score=$q1score+4;
}
if(($q1q2)==($q1anw2)){
	$q1score=$q1score+4;
}
if(($q1q3)==($q1anw3)){
	$q1score=$q1score+4;
}
if(($q1q4)==($q1anw4)){
	$q1score=$q1score+4;
}
if(($q1q5)==($q1anw5)){
	$q1score=$q1score+4;
}
//q2
@$q2anw11=$_POST['q2q11'];
@$q2anw12=$_POST['q2q12'];
@$q2anw13=$_POST['q2q13'];
@$q2anw14=$_POST['q2q14'];
@$q2anw15=$_POST['q2q15'];
@$q2anw21=$_POST['q2q21'];
@$q2anw22=$_POST['q2q22'];
@$q2anw23=$_POST['q2q23'];
@$q2anw24=$_POST['q2q24'];
@$q2anw25=$_POST['q2q25'];
@$q2anw31=$_POST['q2q31'];
@$q2anw32=$_POST['q2q32'];
@$q2anw33=$_POST['q2q33'];
@$q2anw34=$_POST['q2q34'];
@$q2anw35=$_POST['q2q35'];
@$q2anw41=$_POST['q2q41'];
@$q2anw42=$_POST['q2q42'];
@$q2anw43=$_POST['q2q43'];
@$q2anw44=$_POST['q2q44'];
@$q2anw45=$_POST['q2q45'];
@$q2anw51=$_POST['q2q51'];
@$q2anw52=$_POST['q2q52'];
@$q2anw53=$_POST['q2q53'];
@$q2anw54=$_POST['q2q54'];
@$q2anw55=$_POST['q2q55'];
$q2pic1=$_POST['q2picture1'];
$q2pic2=$_POST['q2picture2'];
$q2pic3=$_POST['q2picture3'];
$q2pic4=$_POST['q2picture4'];
$q2pic5=$_POST['q2picture5'];
$q2pic6=$_POST['q2picture6'];
$q2pic7=$_POST['q2picture7'];
$q2pic8=$_POST['q2picture8'];
$q2pic9=$_POST['q2picture9'];
$q2pic10=$_POST['q2picture10'];
$q2num1=$_POST['q2number1'];
$q2num2=$_POST['q2number2'];
$q2num3=$_POST['q2number3'];
$q2num4=$_POST['q2number4'];
$q2num5=$_POST['q2number5'];
$q2num6=$_POST['q2number6'];
$q2num7=$_POST['q2number7'];
$q2num8=$_POST['q2number8'];
$q2num9=$_POST['q2number9'];
$q2num10=$_POST['q2number10'];
$q2am1=$_POST['q2addmul1'];
$q2am2=$_POST['q2addmul2'];
$q2am3=$_POST['q2addmul3'];
$q2am4=$_POST['q2addmul4'];
$q2am5=$_POST['q2addmul5'];
$q2score=0;
if($q2am1==0){
	$q2num11=$q2num1+$q2num2;
	if(($q2anw11==$q2num11)&&($q2anw11!=null))$q2score=$q2score+1;
	if(($q2anw12==$q2num1)&&($q2anw12!=null)){
		$q2score=$q2score+1;
		if(($q2anw14==$q2num2)&&($q2anw14!=null))$q2score=$q2score+1;
	}else if(($q2anw12==$q2num2)&&($q2anw12!=null)){
		$q2score=$q2score+1;
		if(($q2anw14==$q2num1)&&($q2anw14!=null))$q2score=$q2score+1;
	}else if($q2anw12==null){
		if(($q2anw14==$q2num2)&&($q2anw14!=null))$q2score=$q2score+1;
		if(($q2anw14==$q2num1)&&($q2anw14!=null))$q2score=$q2score+1;
	}
	if(($q2anw13=='+')&&($q2anw13!=null))$q2score=$q2score+1;
	if(($q2anw15==$q2num11)&&($q2anw15!=null))$q2score=$q2score+1;
}else{
	if(($q2anw13=='-')&&($q2anw13!=null))$q2score=$q2score+1;
	if($q2num1>$q2num2){		
		$q2num11=$q2num1-$q2num2;
		if(($q2anw11==$q2num11)&&($q2anw11!=null))$q2score=$q2score+1;
		if(($q2anw12==$q2num1)&&($q2anw12!=null))$q2score=$q2score+1;
		if(($q2anw14==$q2num2)&&($q2anw14!=null))$q2score=$q2score+1;
		if(($q2anw15==$q2num11)&&($q2anw15!=null))$q2score=$q2score+1;
	}else{
		$q2num11=$q2num2-$q2num1;
		if(($q2anw11==$q2num11)&&($q2anw11!=null))$q2score=$q2score+1;
		if(($q2anw12==$q2num2)&&($q2anw12!=null))$q2score=$q2score+1;
		if(($q2anw14==$q2num1)&&($q2anw14!=null))$q2score=$q2score+1;
		if(($q2anw15==$q2num11)&&($q2anw15!=null))$q2score=$q2score+1;
	}
}
if($q2am2==0){
	$q2num21=$q2num3+$q2num4;
	if(($q2anw21==$q2num21)&&($q2anw21!=null))$q2score=$q2score+1;
	if(($q2anw22==$q2num3)&&($q2anw22!=null)){
		$q2score=$q2score+1;
		if(($q2anw24==$q2num4)&&($q2anw24!=null))$q2score=$q2score+1;
	}else if(($q2anw22==$q2num4)&&($q2anw22!=null)){
		$q2score=$q2score+1;
		if(($q2anw24==$q2num3)&&($q2anw24!=null))$q2score=$q2score+1;
	}else if($q2anw22==null){
		if(($q2anw24==$q2num4)&&($q2anw24!=null))$q2score=$q2score+1;
		if(($q2anw24==$q2num3)&&($q2anw24!=null))$q2score=$q2score+1;
	}
	if(($q2anw23=='+')&&($q2anw23!=null))$q2score=$q2score+1;
	if(($q2anw25==$q2num21)&&($q2anw25!=null))$q2score=$q2score+1;
}else{
	if(($q2anw23=='-')&&($q2anw23!=null))$q2score=$q2score+1;
	if($q2num3>$q2num4){
		$q2num21=$q2num3-$q2num4;
		if(($q2anw21==$q2num21)&&($q2anw21!=null))$q2score=$q2score+1;
		if(($q2anw22==$q2num3)&&($q2anw22!=null))$q2score=$q2score+1;
		if(($q2anw24==$q2num4)&&($q2anw24!=null))$q2score=$q2score+1;
		if(($q2anw25==$q2num21)&&($q2anw25!=null))$q2score=$q2score+1;
	}else{
		$q2num21=$q2num4-$q2num3;
		if(($q2anw21==$q2num21)&&($q2anw21!=null))$q2score=$q2score+1;
		if(($q2anw22==$q2num4)&&($q2anw22!=null))$q2score=$q2score+1;
		if(($q2anw24==$q2num3)&&($q2anw24!=null))$q2score=$q2score+1;
		if(($q2anw25==$q2num21)&&($q2anw25!=null))$q2score=$q2score+1;
	}
}
if($q2am3==0){
	$q2num31=$q2num5+$q2num6;
	if(($q2anw31==$q2num31)&&($q2anw31!=null))$q2score=$q2score+1;
	if(($q2anw32==$q2num5)&&($q2anw32!=null)){
		$q2score=$q2score+1;
		if(($q2anw34==$q2num6)&&($q2anw34!=null))$q2score=$q2score+1;
	}else if(($q2anw32==$q2num6)&&($q2anw32!=null)){
		$q2score=$q2score+1;
		if(($q2anw34==$q2num5)&&($q2anw34!=null))$q2score=$q2score+1;
	}else if($q2anw31==null){
		if(($q2anw34==$q2num5)&&($q2anw34!=null))$q2score=$q2score+1;
		if(($q2anw34==$q2num6)&&($q2anw34!=null))$q2score=$q2score+1;
	}
	if(($q2anw33=='+')&&($q2anw33!=null))$q2score=$q2score+1;
	if(($q2anw35==$q2num31)&&($q2anw35!=null))$q2score=$q2score+1;
}else{
	if(($q2anw33=='-')&&($q2anw33!=null))$q2score=$q2score+1;
	if($q2num5>$q2num6){
		$q2num31=$q2num5-$q2num6;
		if(($q2anw31==$q2num31)&&($q2anw31!=null))$q2score=$q2score+1;
		if(($q2anw32==$q2num5)&&($q2anw32!=null))$q2score=$q2score+1;
		if(($q2anw34==$q2num6)&&($q2anw34!=null))$q2score=$q2score+1;
		if(($q2anw35==$q2num31)&&($q2anw35!=null))$q2score=$q2score+1;
	}else{
		$q2num31=$q2num6-$q2num5;
		if(($q2anw31==$q2num31)&&($q2anw31!=null))$q2score=$q2score+1;
		if(($q2anw32==$q2num6)&&($q2anw32!=null))$q2score=$q2score+1;
		if(($q2anw34==$q2num5)&&($q2anw34!=null))$q2score=$q2score+1;
		if(($q2anw35==$q2num31)&&($q2anw35!=null))$q2score=$q2score+1;
	}
}
if($q2am4==0){
	$q2num41=$q2num7+$q2num8;
	if(($q2anw41==$q2num41)&&($q2anw41!=null))$q2score=$q2score+1;
	if(($q2anw42==$q2num7)&&($q2anw42!=null)){
		$q2score=$q2score+1;
		if(($q2anw44==$q2num8)&&($q2anw44!=null))$q2score=$q2score+1;
	}else if(($q2anw42==$q2num8)&&($q2anw42!=null)){
		$q2score=$q2score+1;
		if(($q2anw44==$q2num7)&&($q2anw44!=null))$q2score=$q2score+1;
	}else if($q2anw42==null){
		if(($q2anw44==$q2num8)&&($q2anw44!=null))$q2score=$q2score+1;
		if(($q2anw44==$q2num7)&&($q2anw44!=null))$q2score=$q2score+1;
	}
	if(($q2anw43=='+')&&($q2anw43!=null))$q2score=$q2score+1;
	if(($q2anw45==$q2num41)&&($q2anw45!=null))$q2score=$q2score+1;
}else{
	if(($q2anw43=='-')&&($q2anw43!=null))$q2score=$q2score+1;
	if($q2num7>$q2num8){
		$q2num41=$q2num7-$q2num8;
		if(($q2anw41==$q2num41)&&($q2anw41!=null))$q2score=$q2score+1;
		if(($q2anw42==$q2num7)&&($q2anw42!=null))$q2score=$q2score+1;
		if(($q2anw44==$q2num8)&&($q2anw44!=null))$q2score=$q2score+1;
		if(($q2anw45==$q2num41)&&($q2anw45!=null))$q2score=$q2score+1;
	}else{
		$q2num41=$q2num8-$q2num7;
		if(($q2anw41==$q2num41)&&($q2anw41!=null))$q2score=$q2score+1;
		if(($q2anw42==$q2num8)&&($q2anw42!=null))$q2score=$q2score+1;
		if(($q2anw44==$q2num7)&&($q2anw44!=null))$q2score=$q2score+1;
		if(($q2anw45==$q2num41)&&($q2anw45!=null))$q2score=$q2score+1;
	}
}
if($q2am5==0){
	$q2num51=$q2num9+$q2num10;
	if(($q2anw51==$q2num51)&&($q2anw51!=null))$q2score=$q2score+1;
	if(($q2anw52==$q2num9)&&($q2anw52!=null)){
		$q2score=$q2score+1;
		if(($q2anw54==$q2num10)&&($q2anw54!=null))$q2score=$q2score+1;
	}else if(($q2anw52==$q2num10)&&($q2anw52!=null)){
		$q2score=$q2score+1;
		if(($q2anw54==$q2num9)&&($q2anw54!=null))$sq2core=$q2score+1;
	}else if($q2anw52==null){
		if(($q2anw54==$q2num10)&&($q2anw54!=null))$q2score=$q2score+1;
		if(($q2anw54==$q2num9)&&($q2anw54!=null))$sq2core=$q2score+1;
	}
	if(($q2anw53=='+')&&($q2anw53!=null))$q2score=$q2score+1;
	if(($q2anw55==$num51)&&($q2anw55!=null))$q2score=$q2score+1;
}else{
	if(($q2anw53=='-')&&($q2anw53!=null))$q2score=$q2score+1;
	if($q2num9>$q2num10){
		$q2num51=$q2num9-$q2num10;
		if(($q2anw51==$q2num51)&&($q2anw51!=null))$q2score=$q2score+1;
		if(($q2anw52==$q2num9)&&($q2anw52!=null))$q2score=$q2score+1;
		if(($q2anw54==$q2num10)&&($q2anw54!=null))$q2score=$q2score+1;
		if(($q2anw55==$q2num51)&&($q2anw55!=null))$q2score=$q2score+1;
	}else{
		$q2num51=$q2num10-$q2num9;
		if(($q2anw51==$q2num51)&&($q2anw51!=null))$q2score=$q2score+1;
		if(($q2anw52==$q2num10)&&($q2anw52!=null))$q2score=$q2score+1;
		if(($q2anw54==$q2num9)&&($q2anw54!=null))$q2score=$q2score+1;
		if(($q2anw55==$q2num51)&&($q2anw55!=null))$q2score=$q2score+1;
	}
}
//q3
@$q3anw1=$_POST['q3question1'];
@$q3anw2=$_POST['q3question2'];
@$q3anw3=$_POST['q3question3'];
@$q3anw4=$_POST['q3question4'];
@$q3anw5=$_POST['q3question5'];
@$q3anw6=$_POST['q3question6'];
@$q3anw7=$_POST['q3question7'];
@$q3anw8=$_POST['q3question8'];
@$q3anw9=$_POST['q3question9'];
@$q3anw10=$_POST['q3question10'];
$q3opt1=$_POST['qq3option0'];
$q3opt2=$_POST['qq3option1'];
$q3opt3=$_POST['qq3option2'];
$q3opt4=$_POST['qq3option3'];
$q3opt5=$_POST['qq3option4'];
$q3opt6=$_POST['qq3option5'];
$q3opt7=$_POST['qq3option6'];
$q3opt8=$_POST['qq3option7'];
$q3opt9=$_POST['qq3option8'];
$q3opt10=$_POST['qq3option9'];
$q3opt11=$_POST['qq3option10'];
$q3opt12=$_POST['qq3option11'];
$q3opt13=$_POST['qq3option12'];
$q3opt14=$_POST['qq3option13'];
$q3opt15=$_POST['qq3option14'];
$q3opt16=$_POST['qq3option15'];
$q3opt17=$_POST['qq3option16'];
$q3opt18=$_POST['qq3option17'];
$q3opt19=$_POST['qq3option18'];
$q3opt20=$_POST['qq3option19'];
$q3opt21=$_POST['qq3option20'];
$q3opt22=$_POST['qq3option21'];
$q3opt23=$_POST['qq3option22'];
$q3opt24=$_POST['qq3option23'];
$q3opt25=$_POST['qq3option24'];
$q3opt26=$_POST['qq3option25'];
$q3opt27=$_POST['qq3option26'];
$q3opt28=$_POST['qq3option27'];
$q3opt29=$_POST['qq3option28'];
$q3opt30=$_POST['qq3option29'];
$q3score=0;
if(($q3opt1<$q3opt2)&&($q3opt1<$q3opt3)){
	if($q3anw1==$q3opt1)$q3score=$q3score+2;
	$q3ca1=$q3opt1;
}
if(($q3opt2<$q3opt1)&&($q3opt2<$q3opt3)){
	if($q3anw1==$q3opt2)$q3score=$q3score+2;
	$q3ca1=$q3opt2;
}
if(($q3opt3<$q3opt2)&&($q3opt3<$q3opt1)){
	if($q3anw1==$q3opt3)$q3score=$q3score+2;
	$q3ca1=$q3opt3;
}
if(($q3opt4<$q3opt5)&&($q3opt4<$q3opt6)){
	if($q3anw2==$q3opt4)$q3score=$q3score+2;
	$q3ca2=$q3opt4;
}
if(($q3opt5<$q3opt4)&&($q3opt5<$q3opt6)){
	if($q3anw2==$q3opt5)$q3score=$q3score+2;
	$q3ca2=$q3opt5;
}
if(($q3opt6<$q3opt4)&&($q3opt6<$q3opt5)){
	if($q3anw2==$q3opt6)$q3score=$q3score+2;
	$q3ca2=$q3opt6;
}
if(($q3opt7<$q3opt8)&&($q3opt7<$q3opt9)){
	if($q3anw3==$q3opt7)$q3score=$q3score+2;
	$q3ca3=$q3opt7;
}
if(($q3opt8<$q3opt7)&&($q3opt8<$q3opt9)){
	if($q3anw3==$q3opt8)$q3score=$q3score+2;
	$q3ca3=$q3opt8;
}
if(($q3opt9<$q3opt7)&&($q3opt9<$q3opt8)){
	if($q3anw3==$q3opt9)$q3score=$q3score+2;
	$q3ca3=$q3opt9;
}
if(($q3opt10<$q3opt11)&&($q3opt10<$q3opt12)){
	if($q3anw4==$q3opt10)$q3score=$q3score+2;
	$q3ca4=$q3opt10;
}
if(($q3opt11<$q3opt10)&&($q3opt11<$q3opt12)){
	if($q3anw4==$q3opt11)$q3score=$q3score+2;
	$q3ca4=$q3opt11;
}
if(($q3opt12<$q3opt10)&&($q3opt12<$q3opt11)){
	if($q3anw4==$q3opt12)$q3score=$q3score+2;
	$q3ca4=$q3opt12;
}
if(($q3opt13<$q3opt14)&&($q3opt13<$q3opt15)){
	if($q3anw5==$q3opt13)$q3score=$q3score+2;
	$q3ca5=$q3opt13;
}
if(($q3opt14<$q3opt13)&&($q3opt14<$q3opt15)){
	if($q3anw5==$q3opt14)$q3score=$q3score+2;
	$q3ca5=$q3opt14;
}
if(($q3opt15<$q3opt13)&&($q3opt15<$q3opt14)){
	if($q3anw5==$q3opt15)$q3score=$q3score+2;
	$q3ca5=$q3opt15;
}
if(($q3opt16<$q3opt17)&&($q3opt16<$q3opt18)){
	if($q3anw6==$q3opt16)$q3score=$q3score+2;
	$q3ca6=$q3opt16;
}
if(($q3opt17<$q3opt16)&&($q3opt17<$q3opt18)){
	if($q3anw6==$q3opt17)$q3score=$q3score+2;
	$q3ca6=$q3opt17;
}
if(($q3opt18<$q3opt16)&&($q3opt18<$q3opt17)){
	if($q3anw6==$q3opt18)$q3score=$q3score+2;
	$q3ca6=$q3opt18;
}
if(($q3opt19<$q3opt20)&&($q3opt19<$q3opt21)){
	if($q3anw7==$q3opt19)$q3score=$q3score+2;
	$q3ca7=$q3opt19;
}
if(($q3opt20<$q3opt19)&&($q3opt20<$q3opt21)){
	if($q3anw7==$q3opt20)$q3score=$q3score+2;
	$q3ca7=$q3opt20;
}
if(($q3opt21<$q3opt19)&&($q3opt21<$q3opt20)){
	if($q3anw7==$q3opt21)$q3score=$q3score+2;
	$q3ca7=$q3opt21;
}
if(($q3opt22<$q3opt23)&&($q3opt22<$q3opt24)){
	if($q3anw8==$q3opt22)$q3score=$q3score+2;
	$q3ca8=$q3opt22;
}
if(($q3opt23<$q3opt22)&&($q3opt23<$q3opt24)){
	if($q3anw8==$q3opt23)$q3score=$q3score+2;
	$q3ca8=$q3opt23;
}
if(($q3opt24<$q3opt22)&&($q3opt24<$q3opt23)){
	if($q3anw8==$q3opt24)$q3score=$q3score+2;
	$q3ca8=$q3opt24;
}
if(($q3opt25<$q3opt26)&&($q3opt25<$q3opt27)){
	if($q3anw9==$q3opt25)$q3score=$q3score+2;
	$q3ca9=$q3opt25;
}
if(($q3opt26<$q3opt25)&&($q3opt26<$q3opt27)){
	if($q3anw9==$q3opt26)$q3score=$q3score+2;
	$q3ca9=$q3opt26;
}
if(($q3opt27<$q3opt25)&&($q3opt27<$q3opt26)){
	if($q3anw9==$q3opt27)$q3score=$q3score+2;
	$q3ca9=$q3opt27;
}
if(($q3opt28<$q3opt29)&&($q3opt28<$q3opt30)){
	if($q3anw10==$q3opt28)$q3score=$q3score+2;
	$q3ca10=$q3opt28;
}
if(($q3opt29<$q3opt28)&&($q3opt29<$q3opt30)){
	if($q3anw10==$q3opt29)$q3score=$q3score+2;
	$q3ca10=$q3opt29;
}
if(($q3opt30<$q3opt28)&&($q3opt30<$q3opt29)){
	if($q3anw10==$q3opt30)$q3score=$q3score+2;
	$q3ca10=$q3opt30;
}
//q4
@$q4anw1 = $_POST['q4q11'];
@$q4anw2 = $_POST['q4q12'];
@$q4anw3 = $_POST['q4q13'];
@$q4anw4 = $_POST['q4q14'];
@$q4anw5 = $_POST['q4q15'];
@$q4anw6 = $_POST['q4q16'];
@$q4anw7 = $_POST['q4q21'];
@$q4anw8 = $_POST['q4q22'];
@$q4anw9 = $_POST['q4q23'];
@$q4anw10 = $_POST['q4q24'];
@$q4anw11 = $_POST['q4q25'];
@$q4anw12 = $_POST['q4q26'];
@$q4anw13 = $_POST['q4q31'];
@$q4anw14 = $_POST['q4q32'];
@$q4anw15 = $_POST['q4q33'];
@$q4anw16 = $_POST['q4q34'];
@$q4anw17 = $_POST['q4q35'];
@$q4anw18 = $_POST['q4q36'];
@$q4anw19 = $_POST['q4q41'];
@$q4anw20 = $_POST['q4q42'];
@$q4anw21 = $_POST['q4q43'];
@$q4anw22 = $_POST['q4q44'];
@$q4anw23 = $_POST['q4q45'];
@$q4anw24 = $_POST['q4q46'];
@$q4anw25 = $_POST['q4q51'];
@$q4anw26 = $_POST['q4q52'];
@$q4anw27 = $_POST['q4q53'];
@$q4anw28 = $_POST['q4q54'];
@$q4anw29 = $_POST['q4q55'];
@$q4anw30 = $_POST['q4q56'];
$q4q1=$_POST['q4question1'];
$q4q11=$q4q1+1;
$q4q12=$q4q1+2;
$q4q13=$q4q1+3;
$q4q14=$q4q1+4;
$q4q15=$q4q1+5;
$q4q2=$_POST['q4question2'];
$q4q21=$q4q2-1;
$q4q22=$q4q2-2;
$q4q23=$q4q2-3;
$q4q24=$q4q2-4;
$q4q25=$q4q2-5;
$q4q3=$_POST['q4question3'];
$q4q31=$q4q3-1;
$q4q32=$q4q3-2;
$q4q33=$q4q3-3;
$q4q34=$q4q3-4;
$q4q35=$q4q3-5;
$q4q4=$_POST['q4question4'];
$q4q41=$q4q4+1;
$q4q42=$q4q4+2;
$q4q43=$q4q4+3;
$q4q44=$q4q4+4;
$q4q45=$q4q4+5;
$q4q5=$_POST['q4question5'];
$q4q51=$q4q5-1;
$q4q52=$q4q5-2;
$q4q53=$q4q5-3;
$q4q54=$q4q5-4;
$q4q55=$q4q5-5;
$q4s11=$_POST['q4seat11'];
$q4s12=$_POST['q4seat12'];
$q4s21=$_POST['q4seat21'];
$q4s22=$_POST['q4seat22'];
$q4s31=$_POST['q4seat31'];
$q4s32=$_POST['q4seat32'];
$q4s41=$_POST['q4seat41'];
$q4s42=$_POST['q4seat42'];
$q4s51=$_POST['q4seat51'];
$q4s52=$_POST['q4seat52'];
$q4score=0;
if($q4anw1==$q4q1)$q4score=$q4score+1;
if($q4anw2==$q4q1+1)$q4score=$q4score+1;
if($q4anw3==$q4q1+2)$q4score=$q4score+1;
if($q4anw4==$q4q1+3)$q4score=$q4score+1;
if($q4anw5==$q4q1+4)$q4score=$q4score+1;
if($q4anw6==$q4q1+5)$q4score=$q4score+1;

if($q4anw7==$q4q2)$q4score=$q4score+1;
if($q4anw8==$q4q2-1)$q4score=$q4score+1;
if($q4anw9==$q4q2-2)$q4score=$q4score+1;
if($q4anw10==$q4q2-3)$q4score=$q4score+1;
if($q4anw11==$q4q2-4)$q4score=$q4score+1;
if($q4anw12==$q4q2-5)$q4score=$q4score+1;

if($q4anw13==$q4q3)$q4score=$q4score+1;
if($q4anw14==$q4q3-1)$q4score=$q4score+1;
if($q4anw15==$q4q3-2)$q4score=$q4score+1;
if($q4anw16==$q4q3-3)$q4score=$q4score+1;
if($q4anw17==$q4q3-4)$q4score=$q4score+1;
if($q4anw18==$q4q3-5)$q4score=$q4score+1;

if($q4anw19==$q4q4)$q4score=$q4score+1;
if($q4anw20==$q4q4+1)$q4score=$q4score+1;
if($q4anw21==$q4q4+2)$q4score=$q4score+1;
if($q4anw22==$q4q4+3)$q4score=$q4score+1;
if($q4anw23==$q4q4+4)$q4score=$q4score+1;
if($q4anw24==$q4q4+5)$q4score=$q4score+1;

if($q4anw25==$q4q5)$q4score=$q4score+1;
if($q4anw26==$q4q5-1)$q4score=$q4score+1;
if($q4anw27==$q4q5-2)$q4score=$q4score+1;
if($q4anw28==$q4q5-3)$q4score=$q4score+1;
if($q4anw29==$q4q5-4)$q4score=$q4score+1;
if($q4anw30==$q4q5-5)$q4score=$q4score+1;
//q5
@$q5anw1 = $_POST['q5anwser1'];
@$q5anw2 = $_POST['q5anwser2'];
@$q5anw3 = $_POST['q5anwser3'];
@$q5anw4 = $_POST['q5anwser4'];
@$q5anw5 = $_POST['q5anwser5'];
@$q5anw6 = $_POST['q5anwser6'];
@$q5anw7 = $_POST['q5anwser7'];
@$q5anw8 = $_POST['q5anwser8'];
@$q5anw9 = $_POST['q5anwser9'];
@$q5anw10 = $_POST['q5anwser10'];
@$q5anw11 = $_POST['q5anwser11'];
@$q5anw12 = $_POST['q5anwser12'];
@$q5anw13 = $_POST['q5anwser13'];
@$q5anw14 = $_POST['q5anwser14'];
@$q5anw15 = $_POST['q5anwser15'];
@$q5anw16 = $_POST['q5anwser16'];
@$q5anw17 = $_POST['q5anwser17'];
@$q5anw18 = $_POST['q5anwser18'];
@$q5anw19 = $_POST['q5anwser19'];
@$q5anw20 = $_POST['q5anwser20'];
$q5q1=$_POST['q5anw1'];
$q5q2=$_POST['q5anw2'];
$q5q3=$_POST['q5anw3'];
$q5q4=$_POST['q5anw4'];
$q5q5=$_POST['q5anw5'];
$q5q6=$_POST['q5anw6'];
$q5q7=$_POST['q5anw7'];
$q5q8=$_POST['q5anw8'];
$q5q9=$_POST['q5anw9'];
$q5q10=$_POST['q5anw10'];
$q5q11=$_POST['q5anw11'];
$q5q12=$_POST['q5anw12'];
$q5q13=$_POST['q5anw13'];
$q5q14=$_POST['q5anw14'];
$q5q15=$_POST['q5anw15'];
$q5q16=$_POST['q5anw16'];
$q5q17=$_POST['q5anw17'];
$q5q18=$_POST['q5anw18'];
$q5q19=$_POST['q5anw19'];
$q5q20=$_POST['q5anw20'];
$q5pic1 = $_POST['q5picture1'];
$q5pic2 = $_POST['q5picture2'];
$q5pic3 = $_POST['q5picture3'];
$q5pic4 = $_POST['q5picture4'];
$q5pic5 = $_POST['q5picture5'];
$q5score=0;
if(($q5q1)==($q5anw1)){
	$q5score=$q5score+1;
}
if(($q5q2)==($q5anw2)){
	$q5score=$q5score+1;
}
if(($q5q3)==($q5anw3)){
	$q5score=$q5score+1;
}
if(($q5q4)==($q5anw4)){
	$q5score=$q5score+1;
}
if(($q5q5)==($q5anw5)){
	$q5score=$q5score+1;
}
if(($q5q6)==($q5anw6)){
	$q5score=$q5score+1;
}
if(($q5q7)==($q5anw7)){
	$q5score=$q5score+1;
}
if(($q5q8)==($q5anw8)){
	$q5score=$q5score+1;
}
if(($q5q9)==($q5anw9)){
	$q5score=$q5score+1;
}
if(($q5q10)==($q5anw10)){
	$q5score=$q5score+1;
}
if(($q5q11)==($q5anw11)){
	$q5score=$q5score+1;
}
if(($q5q12)==($q5anw12)){
	$q5score=$q5score+1;
}
if(($q5q13)==($q5anw13)){
	$q5score=$q5score+1;
}
if(($q5q14)==($q5anw14)){
	$q5score=$q5score+1;
}
if(($q5q15)==($q5anw15)){
	$q5score=$q5score+1;
}
if(($q5q16)==($q5anw16)){
	$q5score=$q5score+1;
}
if(($q5q17)==($q5anw17)){
	$q5score=$q5score+1;
}
if(($q5q18)==($q5anw18)){
	$q5score=$q5score+1;
}
if(($q5q19)==($q5anw19)){
	$q5score=$q5score+1;
}
if(($q5q20)==($q5anw20)){
	$q5score=$q5score+1;
}
$totalscore=$q1score+$q2score+$q3score+$q4score+$q5score;
?>
<form name="form1" method="post">
<div data-role="page" id="math_anwser">
	<div align="center" valign="middle">
		<h3 align="center" style="color: red">本次作答拿了<?php echo "$totalscore"; ?>/100分</h3>
		<a href="#math_anwser1" class="ui-btn" style="width: 10%;" data-transition="slide">來對答案吧!</a>
	</div>	
</div>
<div data-role="page" id="math_anwser1">
<h3 align="center" style="color: red">本大題拿了<?php echo "$q1score"; ?>/20分</h3>
<h3 align="center">請選擇正確的數量</h3>
<table border="1" align="center">		
<tr>	
<th style="text-align:center">圖</th>		
<th style="text-align:center">原作答</th>
<th>正確答案</th>	
</tr>	
<tr>
<?php echo "<td><script>q1pictures($q1anw1,$q1pic1);</script></td>"; ?>
<td>	
<div style="float: left;"><label><input id="q1q11" name="q1question1" data-role="none" type="radio" disabled="disabled" <?php if($q1q1=="$q1opt11") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt11);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q12" name="q1question1" data-role="none" type="radio" disabled="disabled" <?php if($q1q1=="$q1opt12") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt12);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q13" name="q1question1" data-role="none" type="radio" disabled="disabled" <?php if($q1q1=="$q1opt13") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt13);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q14" name="q1question1" data-role="none" type="radio" disabled="disabled" <?php if($q1q1=="$q1opt14") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt14);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q15" name="q1question1" data-role="none" type="radio" disabled="disabled" <?php if($q1q1=="$q1opt15") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt15);</script>";?></label></div>
</td>
<td align="center" style="color: red;"><?php echo "<script>q1write($q1anw1);</script>";?></td>		
</tr>
<tr>
<?php echo "<td><script>q1pictures($q1anw2,$q1pic2);</script></td>"; ?>
<td>	
<div style="float: left;"><label><input id="q1q21" name="q1question2" data-role="none" type="radio" disabled="disabled" <?php if($q1q2=="$q1opt21") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt21);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q22" name="q1question2" data-role="none" type="radio" disabled="disabled" <?php if($q1q2=="$q1opt22") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt22);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q23" name="q1question2" data-role="none" type="radio" disabled="disabled" <?php if($q1q2=="$q1opt23") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt23);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q24" name="q1question2" data-role="none" type="radio" disabled="disabled" <?php if($q1q2=="$q1opt24") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt24);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q25" name="q1question2" data-role="none" type="radio" disabled="disabled" <?php if($q1q2=="$q1opt25") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt25);</script>";?></label></div>
</td>
<td align="center" style="color: red;"><?php echo "<script>q1write($q1anw2);</script>";?></td>		
</tr>		
<tr>
<?php echo "<td><script>q1pictures($q1anw3,$q1pic3);</script></td>"; ?>
<td>	
<div style="float: left;"><label><input id="q1q31" name="q1question3" data-role="none" type="radio" disabled="disabled" <?php if($q1q3=="$q1opt31") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt31);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q32" name="q1question3" data-role="none" type="radio" disabled="disabled" <?php if($q1q3=="$q1opt32") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt32);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q33" name="q1question3" data-role="none" type="radio" disabled="disabled" <?php if($q1q3=="$q1opt33") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt33);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q34" name="q1question3" data-role="none" type="radio" disabled="disabled" <?php if($q1q3=="$q1opt34") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt34);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q35" name="q1question3" data-role="none" type="radio" disabled="disabled" <?php if($q1q3=="$q1opt35") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt35);</script>";?></label></div>
</td>
<td align="center" style="color: red;"><?php echo "<script>q1write($q1anw3);</script>";?></td>		
</tr>		
<tr>
<?php echo "<td><script>q1pictures($q1anw4,$q1pic4);</script></td>"; ?>
<td>	
<div style="float: left;"><label><input id="q1q41" name="q1question4" data-role="none" type="radio" disabled="disabled" <?php if($q1q4=="$q1opt41") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt41);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q42" name="q1question4" data-role="none" type="radio" disabled="disabled" <?php if($q1q4=="$q1opt42") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt42);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q43" name="q1question4" data-role="none" type="radio" disabled="disabled" <?php if($q1q4=="$q1opt43") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt43);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q44" name="q1question4" data-role="none" type="radio" disabled="disabled" <?php if($q1q4=="$q1opt44") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt44);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q45" name="q1question4" data-role="none" type="radio" disabled="disabled" <?php if($q1q4=="$q1opt45") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt45);</script>";?></label></div>
</td>
<td align="center" style="color: red;"><?php echo "<script>q1write($q1anw4);</script>";?></td>		
</tr>		
<tr>	
<?php echo "<td><script>q1pictures($q1anw5,$q1pic5);</script></td>"; ?>
<td>	
<div style="float: left;"><label><input id="q1q51" name="q1question5" data-role="none" type="radio" disabled="disabled" <?php if($q1q5=="$q1opt51") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt51);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q52" name="q1question5" data-role="none" type="radio" disabled="disabled" <?php if($q1q5=="$q1opt52") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt52);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q53" name="q1question5" data-role="none" type="radio" disabled="disabled" <?php if($q1q5=="$q1opt53") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt53);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q54" name="q1question5" data-role="none" type="radio" disabled="disabled" <?php if($q1q5=="$q1opt54") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt54);</script>";?></label></div>
<div style="float: left;"><label><input id="q1q55" name="q1question5" data-role="none" type="radio" disabled="disabled" <?php if($q1q5=="$q1opt55") echo "checked=checked" ?>><?php echo "<script>q1write($q1opt55);</script>";?></label></div>
</td>
<td align="center" style="color: red;"><?php echo "<script>q1write($q1anw5);</script>";?></td>		
</tr>	
</table>
<div align="center">
	<a href="#math_anwser2" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
</div>
</div>
	<div data-role="page" id="math_anwser2">
	<h3 align="center" style="color: red">本大題拿了<?php echo "$q2score"; ?>/20分</h3>
	<h3 align="center">數一數,填入正確的答案,一格1分</h3>
	<table border="1" align="center">
	<tr>
		<th>圖</th>
		<th>原比較</th>
		<th>原作答</th>
		<th>正確比較</th>
		<th>正確答案</th>
	</tr>
	<tr>
		<td><?php echo "<script>q2qpictures($q2num1,$q2num2,$q2pic1,$q2pic2)</script>";?></td>
		<td valign="middle"><?php echo "<script>q2pictures($q2pic1);</script> 和 <script>q2pictures($q2pic2);q2addormul($q2am1)</script><input id=\"q2q11\" name=\"q2q11\" data-role=\"none\" align=\"center\"  type=\"text\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$q2anw11\" disabled>個";?></td>
		<td><input id="q2q22" name="q2q22" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw12\";"?>>
			<input id="q2q23" name="q2q23" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;" disabled <?php echo "value=\"$q2anw13\";"?>>
			<input id="q2q24" name="q2q24" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw14\";"?>>
					=
			<input id="q2q25" name="q2q25" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw15\";"?>>
		</td>
		<td valign="middle"><?php echo "<script>q2pictures($q2pic1);</script> 和 <script>q2pictures($q2pic2);q2addormul($q2am1)</script><input id=\"q2q11\" name=\"q2q11\" data-role=\"none\" align=\"center\"  type=\"text\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$q2num11\" disabled>個";?></td>
		<td><input id="q2q22" name="q2q22" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($q2num1>$q2num2)echo "value=\"$q2num1\";"; else{echo "value=\"$q2num2\";";} ?>>
			<input id="q2q23" name="q2q23" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;" disabled <?php if($q2am1==0) echo "value=\"+\";"; else{echo "value=\"-\"";}?>>
			<input id="q2q24" name="q2q24" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($q2num2>$q2num1)echo "value=\"$q2num1\";"; else{echo "value=\"$q2num2\";";} ?>>
					=
			<input id="q2q25" name="q2q25" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2num11\";"?>>
		</td>
	</tr>
	<tr>
		<td><?php echo "<script>q2qpictures($q2num3,$q2num4,$q2pic3,$q2pic4)</script>";?></td>
		<td valign="middle"><?php echo "<script>q2pictures($q2pic3);</script> 和 <script>q2pictures($q2pic4);q2addormul($q2am2)</script><input id=\"q2q21\" name=\"q2q21\" data-role=\"none\" align=\"center\"  type=\"text\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$q2anw21\" disabled>個";?></td>
		<td><input id="q2q22" name="q2q22" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw22\";"?>>
			<input id="q2q23" name="q2q23" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;" disabled <?php echo "value=\"$q2anw23\";"?>>
			<input id="q2q24" name="q2q24" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw24\";"?>>
					=
			<input id="q2q25" name="q2q25" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw25\";"?>>
		</td>
		<td valign="middle"><?php echo "<script>q2pictures($q2pic3);</script> 和 <script>q2pictures($q2pic4);q2addormul($q2am2)</script><input id=\"q2q21\" name=\"q2q21\" data-role=\"none\" align=\"center\"  type=\"text\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$q2num21\" disabled>個";?></td>
		<td><input id="q2q22" name="q2q22" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($q2num3>$q2num4)echo "value=\"$q2num3\";"; else{echo "value=\"$q2num4\";";}?>>
			<input id="q2q23" name="q2q23" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;" disabled <?php if($q2am2==0) echo "value=\"+\";"; else{echo "value=\"-\"";}?>>
			<input id="q2q24" name="q2q24" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($q2num4>$q2num3)echo "value=\"$q2num3\";"; else{echo "value=\"$q2num4\";";}?>>
					=
			<input id="q2q25" name="q2q25" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2num21\";"?>>
		</td>
	</tr>
	<tr>
		<td><?php echo "<script>q2qpictures($q2num5,$q2num6,$q2pic5,$q2pic6)</script>";?></td>
		<td valign="middle"><?php echo "<script>q2pictures($q2pic5);</script> 和 <script>q2pictures($q2pic6);q2addormul($q2am3)</script><input id=\"q2q31\" name=\"q2q31\" data-role=\"none\" align=\"center\"  type=\"text\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$q2anw31\" disabled>個";?></td>
		<td><input id="q2q32" name="q2q32" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw32\";"?>>
			<input id="q2q33" name="q2q33" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;" disabled <?php echo "value=\"$q2anw33\";"?>>
			<input id="q2q34" name="q2q34" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw34\";"?>>
					=
			<input id="q2q35" name="q2q35" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw35\";"?>>
		</td>
		<td valign="middle"><?php echo "<script>q2pictures($q2pic5);</script> 和 <script>q2pictures($q2pic6);q2addormul($q2am3)</script><input id=\"q2q31\" name=\"q2q31\" data-role=\"none\" align=\"center\"  type=\"text\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$q2num31\" disabled>個";?></td>
		<td><input id="q2q32" name="q2q32" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($q2num5>$q2num6)echo "value=\"$q2num5\";"; else{echo "value=\"$q2num6\";";}?>>
			<input id="q2q33" name="q2q33" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;" disabled <?php if($q2am3==0) echo "value=\"+\";"; else{echo "value=\"-\"";}?>>
			<input id="q2q34" name="q2q34" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($q2num6>$q2num5)echo "value=\"$q2num5\";"; else{echo "value=\"$q2num6\";";}?>>
					=
			<input id="q2q35" name="q2q35" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2num31\";"?>>
		</td>
	</tr>
	<tr>
		<td><?php echo "<script>q2qpictures($q2num7,$q2num8,$q2pic7,$q2pic8)</script>";?></td>
		<td valign="middle"><?php echo "<script>q2pictures($q2pic7);</script> 和 <script>q2pictures($q2pic8);q2addormul($q2am4)</script><input id=\"q2q41\" name=\"q2q41\" data-role=\"none\" align=\"center\"  type=\"text\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$q2anw41\" disabled>個";?></td>
		<td><input id="q2q42" name="q2q42" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw42\";"?>>
			<input id="q2q43" name="q2q43" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;" disabled <?php echo "value=\"$q2anw43\";"?>>
			<input id="q2q44" name="q2q44" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw44\";"?>>
					=
			<input id="q2q45" name="q2q45" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw45\";"?>>
		</td>
		<td valign="middle"><?php echo "<script>q2pictures($q2pic7);</script> 和 <script>q2pictures($q2pic8);q2addormul($q2am4)</script><input id=\"q2q41\" name=\"q2q41\" data-role=\"none\" align=\"center\"  type=\"text\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$q2num41\" disabled>個";?></td>
		<td><input id="q2q42" name="q2q42" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($q2num7>$q2num8)echo "value=\"$q2num7\";"; else{echo "value=\"$q2num8\";";}?>>
			<input id="q2q43" name="q2q43" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;" disabled <?php if($q2am4==0) echo "value=\"+\";"; else{echo "value=\"-\"";}?>>
			<input id="q2q44" name="q2q44" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($q2num8>$q2num7)echo "value=\"$q2num7\";"; else{echo "value=\"$q2num8\";";}?>>
					=
			<input id="q2q45" name="q2q45" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2num41\";"?>>
		</td>
	</tr>
	<tr>
		<td><?php echo "<script>q2qpictures($q2num9,$q2num10,$q2pic9,$q2pic10)</script>";?></td>
		<td valign="middle"><?php echo "<script>q2pictures($q2pic9);</script> 和 <script>q2pictures($q2pic10);q2addormul($q2am5)</script><input id=\"q2q51\" name=\"q2q51\" data-role=\"none\" align=\"center\"  type=\"text\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$q2anw51\" disabled>個";?></td>
		<td><input id="q2q52" name="q2q52" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw52\";"?>>
			<input id="q2q53" name="q2q53" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;" disabled <?php echo "value=\"$q2anw53\";"?>>
			<input id="q2q54" name="q2q54" align="center"  type="text"  data-role="none"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw54\";"?>>
					=
			<input id="q2q55" name="q2q55" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2anw55\";"?>>
		</td>
		<td valign="middle"><?php echo "<script>q2pictures($q2pic9);</script> 和 <script>q2pictures($q2pic10);q2addormul($q2am5)</script><input id=\"q2q51\" name=\"q2q51\" data-role=\"none\" align=\"center\"  type=\"text\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$q2num51\" disabled>個";?></td>
		<td><input id="q2q52" name="q2q52" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($q2num9>$q2num10)echo "value=\"$q2num9\";"; else{echo "value=\"$q2num10\";";}?>>
			<input id="q2q53" name="q2q53" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;" disabled <?php if($q2am5==0) echo "value=\"+\";"; else{echo "value=\"-\"";}?>>
			<input id="q2q54" name="q2q54" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($q2num10>$q2num9)echo "value=\"$q2num9\";"; else{echo "value=\"$q2num10\";";}?>>
					=
			<input id="q2q55" name="q2q55" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$q2num51\";"?>>
		</td>
	</tr>
</table>
<div align="center">
	<a href="#math_anwser1" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
	<a href="#math_anwser3" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
</div>
	</div>
	<div data-role="page" id="math_anwser3">
		<h3 align="center" style="color: red">本大題拿了<?php echo "$q3score"; ?>/20分</h3>
		<h3 align="center">請選出最小的數字</h3>
	<table border="1" align="center">
		<tr>
			<th>原作答</th>
			<th>正確答案</th>
			<th>原作答</th>
			<th>正確答案</th>
		</tr>
		<tr>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question1" id="q3opt01" disabled <?php if($q3anw1=="$q3opt1") echo "checked=checked";?>><?php echo "<script>q3print($q3opt1)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question1" id="q3opt02" disabled <?php if($q3anw1=="$q3opt2") echo "checked=checked";?>><?php echo "<script>q3print($q3opt2)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question1" id="q3opt03" disabled <?php if($q3anw1=="$q3opt3") echo "checked=checked";?>><?php echo "<script>q3print($q3opt3)</script>";?></label></div>
			</td>
			<td align="center" style="color: red"><?php echo "$q3ca1"; ?></td>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question2" id="q3opt11" disabled <?php if($q3anw2=="$q3opt4") echo "checked=checked";?>><?php echo "<script>q3print($q3opt4)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question2" id="q3opt12" disabled <?php if($q3anw2=="$q3opt5") echo "checked=checked";?>><?php echo "<script>q3print($q3opt5)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question2" id="q3opt13" disabled <?php if($q3anw2=="$q3opt6") echo "checked=checked";?>><?php echo "<script>q3print($q3opt6)</script>";?></label></div>
			</td>
			<td align="center" style="color: red"><?php echo "$q3ca2"; ?></td>
		</tr>
		<tr>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question3" id="q3opt21" disabled <?php if($q3anw3=="$q3opt7") echo "checked=checked";?>><?php echo "<script>q3print($q3opt7)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question3" id="q3opt22" disabled <?php if($q3anw3=="$q3opt8") echo "checked=checked";?>><?php echo "<script>q3print($q3opt8)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question3" id="q3opt23" disabled <?php if($q3anw3=="$q3opt9") echo "checked=checked";?>><?php echo "<script>q3print($q3opt9)</script>";?></label></div>
			</td>
			<td align="center" style="color: red"><?php echo "$q3ca3"; ?></td>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question4" id="q3opt31" disabled <?php if($q3anw4=="$q3opt10") echo "checked=checked";?>><?php echo "<script>q3print($q3opt10)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question4" id="q3opt32" disabled <?php if($q3anw4=="$q3opt11") echo "checked=checked";?>><?php echo "<script>q3print($q3opt11)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question4" id="q3opt33" disabled <?php if($q3anw4=="$q3opt12") echo "checked=checked";?>><?php echo "<script>q3print($q3opt12)</script>";?></label></div>
			</td>
			<td align="center" style="color: red"><?php echo "$q3ca4"; ?></td>
		</tr>
		<tr>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question5" id="q3opt41" disabled <?php if($q3anw5=="$q3opt13") echo "checked=checked";?>><?php echo "<script>q3print($q3opt13)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question5" id="q3opt42" disabled <?php if($q3anw5=="$q3opt14") echo "checked=checked";?>><?php echo "<script>q3print($q3opt14)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question5" id="q3opt43" disabled <?php if($q3anw5=="$q3opt15") echo "checked=checked";?>><?php echo "<script>q3print($q3opt15)</script>";?></label></div>
			</td>
			<td align="center" style="color: red"><?php echo "$q3ca5"; ?></td>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question6" id="q3opt51" disabled <?php if($q3anw6=="$q3opt16") echo "checked=checked";?>><?php echo "<script>q3print($q3opt16)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question6" id="q3opt52" disabled <?php if($q3anw6=="$q3opt17") echo "checked=checked";?>><?php echo "<script>q3print($q3opt17)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question6" id="q3opt53" disabled <?php if($q3anw6=="$q3opt18") echo "checked=checked";?>><?php echo "<script>q3print($q3opt18)</script>";?></label></div>
			</td>
			<td align="center" style="color: red"><?php echo "$q3ca6"; ?></td>
		</tr>
		<tr>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question7" id="q3opt61" disabled <?php if($q3anw7=="$q3opt19") echo "checked=checked";?>><?php echo "<script>q3print($q3opt19)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question7" id="q3opt62" disabled <?php if($q3anw7=="$q3opt20") echo "checked=checked";?>><?php echo "<script>q3print($q3opt20)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question7" id="q3opt63" disabled <?php if($q3anw7=="$q3opt21") echo "checked=checked";?>><?php echo "<script>q3print($q3opt21)</script>";?></label></div>
			</td>
			<td align="center" style="color: red"><?php echo "$q3ca7"; ?></td>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question8" id="q3opt71" disabled <?php if($q3anw8=="$q3opt22") echo "checked=checked";?>><?php echo "<script>q3print($q3opt22)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question8" id="q3opt72" disabled <?php if($q3anw8=="$q3opt23") echo "checked=checked";?>><?php echo "<script>q3print($q3opt23)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question8" id="q3opt73" disabled <?php if($q3anw8=="$q3opt24") echo "checked=checked";?>><?php echo "<script>q3print($q3opt24)</script>";?></label></div>
			</td>
			<td align="center" style="color: red"><?php echo "$q3ca8"; ?></td>
		</tr>
		<tr>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question9" id="q3opt81" disabled <?php if($q3anw9=="$q3opt25") echo "checked=checked";?>><?php echo "<script>q3print($q3opt25)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question9" id="q3opt82" disabled <?php if($q3anw9=="$q3opt26") echo "checked=checked";?>><?php echo "<script>q3print($q3opt26)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question9" id="q3opt83" disabled <?php if($q3anw9=="$q3opt27") echo "checked=checked";?>><?php echo "<script>q3print($q3opt27)</script>";?></label></div>
			</td>
			<td align="center" style="color: red"><?php echo "$q3ca9"; ?></td>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question10" id="q3opt91" disabled <?php if($q3anw10=="$q3opt28") echo "checked=checked";?>><?php echo "<script>q3print($q3opt28)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question10" id="q3opt92" disabled <?php if($q3anw10=="$q3opt29") echo "checked=checked";?>><?php echo "<script>q3print($q3opt29)</script>";?></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="q3question10" id="q3opt93" disabled <?php if($q3anw10=="$q3opt30") echo "checked=checked";?>><?php echo "<script>q3print($q3opt30)</script>";?></label></div>
			</td>
			<td align="center" style="color: red"><?php echo "$q3ca10"; ?></td>
		</tr>
	</table>
	<div align="center">
		<a href="#math_anwser2" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
		<a href="#math_anwser4" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
	</div>
	</div>
	<div data-role="page" id="math_anwser4">
	<h3 align="center" style="color: red">本大題拿了<?php echo "$q4score"; ?>/20分</h3>
	<h3 align="center">算一算,空格裡的數字是多少,一格1分</h3>
		<table border="1" style="margin: auto;">
	<tr>
		<th>原作答</th>
		<th>正確答案</th>
	</tr>
	<tr>
		<td>
			<div style="float: left;"><label><input type="number" name="q4q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s11=="1"||$q4s12=="1") echo "value=\"$q4q1\""; else echo "value=\"$q4anw1\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q4q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s11=="2"||$q4s12=="2") echo "value=\"$q4q11\""; else echo "value=\"$q4anw2\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q4q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s11=="3"||$q4s12=="3") echo "value=\"$q4q12\""; else echo "value=\"$q4anw3\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q4q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s11=="4"||$q4s12=="4") echo "value=\"$q4q13\""; else echo "value=\"$q4anw4\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q4q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s11=="5"||$q4s12=="5") echo "value=\"$q4q14\""; else echo "value=\"$q4anw5\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q4q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s11=="6"||$q4s12=="6") echo "value=\"$q4q15\""; else echo "value=\"$q4anw6\""; ?>></label></div>
		</td>
		<td>
			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q1\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q11\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q12\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q13\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q14\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q15\" data-role=\"none\" disabled></label></div>";?>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s21=="1"||$q4s22=="1") echo "value=\"$q4q2\""; else echo "value=\"$q4anw7\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s21=="2"||$q4s22=="2") echo "value=\"$q4q21\""; else echo "value=\"$q4anw8\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s21=="3"||$q4s22=="3") echo "value=\"$q4q22\""; else echo "value=\"$q4anw9\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s21=="4"||$q4s22=="4") echo "value=\"$q4q23\""; else echo "value=\"$q4anw10\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s21=="5"||$q4s22=="5") echo "value=\"$q4q24\""; else echo "value=\"$q4anw11\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s21=="6"||$q4s22=="6") echo "value=\"$q4q25\""; else echo "value=\"$q4anw12\""; ?>></label></div>
		</td>
		<td>
			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q2\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q21\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q22\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q23\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q24\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q25\" data-role=\"none\" disabled></label></div>"; ?>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s31=="1"||$q4s32=="1") echo "value=\"$q4q3\""; else echo "value=\"$q4anw13\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s31=="2"||$q4s32=="2") echo "value=\"$q4q31\""; else echo "value=\"$q4anw14\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s31=="3"||$q4s32=="3") echo "value=\"$q4q32\""; else echo "value=\"$q4anw15\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s31=="4"||$q4s32=="4") echo "value=\"$q4q33\""; else echo "value=\"$q4anw16\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s31=="5"||$q4s32=="5") echo "value=\"$q4q34\""; else echo "value=\"$q4anw17\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s31=="6"||$q4s32=="6") echo "value=\"$q4q35\""; else echo "value=\"$q4anw18\""; ?>></label></div>
		</td>
		<td>
			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q3\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q31\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q32\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q33\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q34\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q35\" data-role=\"none\" disabled></label></div>"; ?>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s41=="1"||$q4s42=="1") echo "value=\"$q4q4\""; else echo "value=\"$q4anw19\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s41=="2"||$q4s42=="2") echo "value=\"$q4q41\""; else echo "value=\"$q4anw20\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s41=="3"||$q4s42=="3") echo "value=\"$q4q42\""; else echo "value=\"$q4anw21\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s41=="4"||$q4s42=="4") echo "value=\"$q4q43\""; else echo "value=\"$q4anw22\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s41=="5"||$q4s42=="5") echo "value=\"$q4q44\""; else echo "value=\"$q4anw23\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s41=="6"||$q4s42=="6") echo "value=\"$q4q45\""; else echo "value=\"$q4anw24\""; ?>></label></div>
		</td>
		<td>
			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q4\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q41\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q42\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q43\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q44\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q45\" data-role=\"none\" disabled></label></div>"; ?>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s51=="1"||$q4s52=="1") echo "value=\"$q4q5\""; else echo "value=\"$q4anw25\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s51=="2"||$q4s52=="2") echo "value=\"$q4q51\""; else echo "value=\"$q4anw26\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s51=="3"||$q4s52=="3") echo "value=\"$q4q52\""; else echo "value=\"$q4anw27\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s51=="4"||$q4s52=="4") echo "value=\"$q4q53\""; else echo "value=\"$q4anw28\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s51=="5"||$q4s52=="5") echo "value=\"$q4q54\""; else echo "value=\"$q4anw29\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="q11" id="1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($q4s51=="6"||$q4s52=="6") echo "value=\"$q4q55\""; else echo "value=\"$q4anw30\""; ?>></label></div>
		</td>
		<td>
			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q5\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q51\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q52\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q53\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q54\" data-role=\"none\" disabled></label></div>"; ?>
  			<?php echo "<div style=\"float: left;\"><label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4q55\" data-role=\"none\" disabled></label></div>"; ?>
		</td>
	</tr>
</table>
<div align="center">
	<a href="#math_anwser3" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
	<a href="#math_anwser5" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
</div>
	</div>
	<div data-role="page" id="math_anwser5">
		<h3 align="center" style="color: red">本大題拿了<?php echo "$q5score"; ?>/20分</h3>
		<h3 align="center">請你加加看有多少?</h3>
		<table border="1" align="center">
			<tr>
				<th>圖</th>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw1,$q5pic1);</script></td>";?>
				<td></td>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw2,$q5pic1);</script></td>";?>
				<td></td>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw3,$q5pic1);</script></td>";?>
				<td></td>
			</tr>
			<tr>
				<th>原作答</th>
				<td style="text-align: center;"><?php echo "$q5q1"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$q5q2"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$q5q3"?></td>
				<td>=</td>
				<td style="text-align: center;"><?php echo "$q5q4"?></td>
			</tr>
			<tr>
				<th>正解</th>
				<td style="text-align: center; color: red;"><?php echo "$q5anw1"?></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw2"?></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw3"?></td>
				<td>=</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw4"?></td>
			</tr>
			<tr>
				<th>圖</th>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw5,$q5pic2);</script></td>";?>
				<td></td>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw6,$q5pic2);</script></td>";?>
				<td></td>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw7,$q5pic2);</script></td>";?>
				<td></td>
			</tr>
			<tr>
				<th>原作答</th>
				<td style="text-align: center;"><?php echo "$q5q5"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$q5q6"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$q5q7"?></td>
				<td>=</td>
				<td style="text-align: center;"><?php echo "$q5q8"?></td>
			</tr>
			<tr>
				<th>正解</th>
				<td style="text-align: center color: red;"><?php echo "$q5anw5"?></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw6"?></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw7"?></td>
				<td>=</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw8"?></td>
			</tr>
			<tr>
				<th>圖</th>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw9,$q5pic3);</script></td>";?>
				<td></td>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw10,$q5pic3);</script></td>";?>
				<td></td>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw11,$q5pic3);</script></td>";?>
				<td></td>
			</tr>
			<tr>
				<th>原作答</th>
				<td style="text-align: center;"><?php echo "$q5q9"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$q5q10"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$q5q11"?></td>
				<td>=</td>
				<td style="text-align: center;"><?php echo "$q5q12"?></td>
			</tr>
			<tr>
				<th>正解</th>
				<td style="text-align: center; color: red;"><?php echo "$q5anw9"?></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw10"?></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw11"?></td>
				<td>=</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw12"?></td>
			</tr>
			<tr>
				<th>圖</th>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw13,$q5pic4);</script></td>";?>
				<td></td>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw14,$q5pic4);</script></td>";?>
				<td></td>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw15,$q5pic4);</script></td>";?>
				<td></td>
			</tr>
			<tr>
				<th>原作答</th>
				<td style="text-align: center;"><?php echo "$q5q13"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$q5q14"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$q5q15"?></td>
				<td>=</td>
				<td style="text-align: center;"><?php echo "$q5q16"?></td>
			</tr>
			<tr>
				<th>正解</th>
				<td style="text-align: center; color: red;"><?php echo "$q5anw13"?></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw14"?></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw15"?></td>
				<td>=</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw16"?></td>
			</tr>
			<tr>
				<th>圖</th>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw17,$q5pic5);</script></td>";?>
				<td></td>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw18,$q5pic5);</script></td>";?>
				<td></td>
				<?php echo "<td style=\"text-align: center;\"><script>q5pictures($q5anw19,$q5pic5);</script></td>";?>
				<td></td>
			</tr>
			<tr>
				<th>原作答</th>
				<td style="text-align: center;"><?php echo "$q5q17"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$q5q18"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$q5q19"?></td>
				<td>=</td>
				<td style="text-align: center;"><?php echo "$q5q20"?></td>
			</tr>
			<tr>
				<th>正解</th>
				<td style="text-align: center; color: red;"><?php echo "$q5anw17"?></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw18"?></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw19"?></td>
				<td>=</td>
				<td style="text-align: center; color: red;"><?php echo "$q5anw20"?></td>
			</tr>
		</table>
		<div align="center">
			<a href="#math_anwser4" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="Topic.php" class="ui-btn" style="width: 5%; display: inline-block">回到首頁</a>
		</div>
	</div>
	</form>