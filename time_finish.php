<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>



<?php
//第一題
@$q1q1 = $_POST['q1q11'];     //把答案儲存在php變數
@$q1q2 = $_POST['q1q12'];
@$q1q3 = $_POST['q1q21'];
@$q1q4 = $_POST['q1q22'];
@$q1q5 = $_POST['q1q31'];
@$q1q6 = $_POST['q1q32'];
@$q1q7 = $_POST['q1q41'];
@$q1q8 = $_POST['q1q42'];

$q1ans1 = $_POST['q1answer1'];  //取正確答案
$q1ans2 = $_POST['q1answer2'];
$q1ans3 = $_POST['q1answer3'];
$q1ans4 = $_POST['q1answer4'];
$q1ans5 = $_POST['q1answer5'];
$q1ans6 = $_POST['q1answer6'];
$q1ans7 = $_POST['q1answer7'];
$q1ans8 = $_POST['q1answer8'];

$q1opt11 = $_POST['q1option11']; //儲存選項的值
$q1opt12 = $_POST['q1option12'];
$q1opt21 = $_POST['q1option21'];
$q1opt22 = $_POST['q1option22'];
$q1opt31 = $_POST['q1option31'];
$q1opt32 = $_POST['q1option32'];
$q1opt41 = $_POST['q1option41'];
$q1opt42 = $_POST['q1option42'];

$q1score = 0;
if(($q1q1)==($q1ans1)){
    $q1score=$q1score+2.5;
}
if(($q1q2)==($q1ans2)){
    $q1score=$q1score+2.5;
}
if(($q1q3)==($q1ans3)){
    $q1score=$q1score+2.5;
}
if(($q1q4)==($q1ans4)){
    $q1score=$q1score+2.5;
}
if(($q1q5)==($q1ans5)){
    $q1score=$q1score+2.5;
}
if(($q1q6)==($q1ans6)){
    $q1score=$q1score+2.5;
}
if(($q1q7)==($q1ans7)){
    $q1score=$q1score+2.5;
}
if(($q1q8)==($q1ans8)){
    $q1score=$q1score+2.5;
}



//第三題
@$q3q1 = $_POST['ans0'];     //把答案儲存在php變數
@$q3q2 = $_POST['ans1'];
@$q3q3 = $_POST['ans2'];
@$q3q4 = $_POST['ans3'];

$q3ans1 = $_POST['q3answer1'];
$q3ans2 = $_POST['q3answer2'];
$q3ans3 = $_POST['q3answer3'];
$q3ans4 = $_POST['q3answer4'];

$q3opt11 = $_POST['q3option11'];
$q3opt12 = $_POST['q3option12'];
$q3opt13 = $_POST['q3option13'];
$q3opt21 = $_POST['q3option21'];
$q3opt22 = $_POST['q3option22'];
$q3opt23 = $_POST['q3option23'];
$q3opt31 = $_POST['q3option31'];
$q3opt32 = $_POST['q3option32'];
$q3opt33 = $_POST['q3option33'];
$q3opt41 = $_POST['q3option41'];
$q3opt42 = $_POST['q3option42'];
$q3opt43 = $_POST['q3option43'];
$q3score=0;
if(($q3q1)==($q3ans1)){
    $q3score=$q3score+5;
}
if(($q3q2)==($q3ans2)){
    $q3score=$q3score+5;
}
if(($q3q3)==($q3ans3)){
    $q3score=$q3score+5;
}
if(($q3q4)==($q3ans4)){
    $q3score=$q3score+5;
}

//第四題

$q4q1 = $_POST['ans4'];     //把答案儲存在php變數
$q4q2 = $_POST['ans5'];
$q4q3 = $_POST['ans6'];
$q4q4 = $_POST['ans7'];

$q4ans1 = $_POST['q4answer1'];
$q4ans2 = $_POST['q4answer2'];
$q4ans3 = $_POST['q4answer3'];
$q4ans4 = $_POST['q4answer4'];

$q4opt1 = $_POST['q4option1'];
$q4opt2 = $_POST['q4option2'];
$q4opt3 = $_POST['q4option3'];
$q4opt4 = $_POST['q4option4'];
$q4score=0;
if(($q4q1)==($q4ans1)){
    $q4score=$q4score+5;
}
if(($q4q2)==($q4ans2)){
    $q4score=$q4score+5;
}
if(($q4q3)==($q4ans3)){
    $q4score=$q4score+5;
}
if(($q4q4)==($q4ans4)){
    $q4score=$q4score+5;
}

//第五題

// $q5q1 = $_POST['ans8'];     //把答案儲存在php變數
// $q5q2 = $_POST['ans9'];
// $q5q3 = $_POST['ans10'];
// $q5q4 = $_POST['ans11'];

// $q5ans1 = $_POST['q5answer1'];
// $q5ans2 = $_POST['q5answer2'];
// $q5ans3 = $_POST['q5answer3'];
// $q5ans4 = $_POST['q5answer4'];

// $q5opt1 = $_POST['q5option1'];
// $q5opt2 = $_POST['q5option2'];
// $q5opt3 = $_POST['q5option3'];
// $q5opt4 = $_POST['q5option4'];
// $q5score=0;
// if(($q5q1)==($q5ans1)){
//     $q5score=$q5score+5;
// }
// if(($q5q2)==($q5ans2)){
//     $q5score=$q5score+5;
// }
// if(($q5q3)==($q5ans3)){
//     $q5score=$q5score+5;
// }
// if(($q5q4)==($q5ans4)){
//     $q5score=$q5score+5;
// }
$totalscore=$q1score+$q2score+$q3score+$q4score+$q5score;
?>
<form name="form1" method="post">
<div data-role="page" id="grade">
	<div align="center" valign="middle">
		<h3 align="center" style="color: red">本次作答拿了<?php echo "$totalscore"; ?>/100分</h3>
		<a href="#time_ansser1" class="ui-btn" style="width: 10%;" data-transition="slide">來對答案吧!</a>
	</div>	
</div>


