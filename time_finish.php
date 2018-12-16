<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>



<?php
$h1 = $_POST['hour1'];
$h2 = $_POST['hour2'];
$h3 = $_POST['hour3'];
$h4 = $_POST['hour4'];

$m1 = $_POST['minute1'];
$m2 = $_POST['minute2'];
$m3 = $_POST['minute3'];
$m4 = $_POST['minute4'];

$anw1 = $_POST['anwser1'];
$anw2 = $_POST['anwser2'];
$anw3 = $_POST['anwser3'];
$anw4 = $_POST['anwser4'];
$anw5 = $_POST['anwser5'];
$anw6 = $_POST['anwser6'];
$anw7 = $_POST['anwser7'];
$anw8 = $_POST['anwser8'];


$score = 0;
if(($h1)==($anw1)){
    $score=$score+2.5;
}
if(($m1)==($anw2)){
    $score=$score+2.5;
}
if(($h2)==($anw3)){
    $score=$score+2.5;
}
if(($m2)==($anw4)){
    $score=$score+2.5;
}
if(($h3)==($anw5)){
    $score=$score+2.5;
}
if(($m3)==($anw6)){
    $score=$score+2.5;
}
if(($h4)==($anw7)){
    $score=$score+2.5;
}
if(($m4)==($anw8)){
    $score=$score+2.5;
}
?>
<?php  echo "<h1>得分為:$score 分!</h1>";?>
