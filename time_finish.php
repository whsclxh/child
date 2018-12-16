<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>



<?php
//第一題
$h1 = $_POST['hour1'];     //把答案儲存在php變數
$h2 = $_POST['hour2'];
$h3 = $_POST['hour3'];
$h4 = $_POST['hour4'];

$m1 = $_POST['minute1'];
$m2 = $_POST['minute2'];
$m3 = $_POST['minute3'];
$m4 = $_POST['minute4'];

$q1anw1 = $_POST['q1anwser1'];
$q1anw2 = $_POST['q1anwser2'];
$q1anw3 = $_POST['q1anwser3'];
$q1anw4 = $_POST['q1anwser4'];
$q1anw5 = $_POST['q1anwser5'];
$q1anw6 = $_POST['q1anwser6'];
$q1anw7 = $_POST['q1anwser7'];
$q1anw8 = $_POST['q1anwser8'];



$q1score = 0;
if(($h1)==($q1anw1)){
    $q1score=$q1score+2.5;
}
if(($m1)==($q1anw2)){
    $score=$score+2.5;
}
if(($h2)==($q1anw3)){
    $score=$score+2.5;
}
if(($m2)==($q1anw4)){
    $score=$score+2.5;
}
if(($h3)==($q1anw5)){
    $score=$score+2.5;
}
if(($m3)==($q1anw6)){
    $score=$score+2.5;
}
if(($h4)==($q1anw7)){
    $score=$score+2.5;
}
if(($m4)==($q1anw8)){
    $score=$score+2.5;
}

//第三題
$totalscore=$q1score;
?>

