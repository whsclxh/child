<?php session_start(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="time_1.js"></script>
<script src="library/svg.min.js"></script>
<script src="library/jquery.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js"></script>


<style>
 table,td,th {
      border: 1px solid black;
    }

    table {
      height: 50%;
      width: 60%;
      margin-top: 100px;
      margin-left: auto;
      margin-right: auto;
    }

    body {
      
      margin: 0 auto;
      /* background: #ff8a50; */
      font-family: sans-serif;
    }

    .disable-select {
      -webkit-touch-callout: none; /* iOS Safari */
      -webkit-user-select: none;   /* Chrome/Safari/Opera */
      -khtml-user-select: none;    /* Konqueror */
      -moz-user-select: none;      /* Firefox */
      -ms-user-select: none;       /* Internet Explorer/Edge */
      user-select: none;           /* Non-prefixed version, currently supported by any browser but < IE9 */
    }

  * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}



body,
div,
dl,
dt,
dd,
ul,
ol,
li,
h1,
h2,
h3,
h4,
h5,
h6,
pre,
code,
form,
fieldset,
legend,
input,
button,
textarea,
p,
blockquote,
th,
td {
  margin: 0;
  padding: 0;
}

body {
  background: #fff;
  color: #555;
  font-size: 14px;
  font-family: "Arial", "Microsoft YaHei", "黑体", "宋体", sans-serif;
}
ol,
ul,
li {
  list-style: none;
}

input,
textarea,
select,
button {
  font: 14px "Arial", "Microsoft YaHei", "黑体", "宋体", sans-serif;
}

table {
  border-collapse: collapse;
}

html {
  overflow-y: scroll;
}

.clearfix:before,
.clearfix:after {
  content: " ";
  display: inline-block;
  height: 0;
  clear: both;
  visibility: hidden;
}

.clearfix {
  *zoom: 1;
}


html,
body {
    height: 100%;
    background: #f5f5f5;
}












.hover-g {
    cursor: pointer;
    opacity: 1;
    stroke-width: 4;
}



.result-container {
    padding: 20px;
    border-top: 1px solid #333;
}
.result-container li{
    font-size: 16px;
    line-height: 35px;
}

.ui-btn{
    display: inline !important;
}
#table1{
      width:30%;
     
    }



</style>


<?php
//第一題
@$q1ans1 = $_POST['q1ans1']; //取答題者答案
@$q1ans2 = $_POST['q1ans2'];
@$q1ans3 = $_POST['q1ans3'];
@$q1ans4 = $_POST['q1ans4'];
@$q1ans5 = $_POST['q1ans5'];
@$q1ans6 = $_POST['q1ans6'];
@$q1ans7 = $_POST['q1ans7'];
@$q1ans8 = $_POST['q1ans8'];

$q1cans1 = $_SESSION["q1ans1"];
$q1cans2 = $_SESSION["q1ans2"]; 
$q1cans3 = $_SESSION["q1ans3"];
$q1cans4 = $_SESSION["q1ans4"]; 
$q1cans5 = $_SESSION["q1ans5"];
$q1cans6 = $_SESSION["q1ans6"]; 
$q1cans7 = $_SESSION["q1ans7"];
$q1cans8 = $_SESSION["q1ans8"]; 

$q1score = 0;
if(($q1ans1)==($q1cans1)){
    $q1score=$q1score+2.5;
}
if(($q1ans2)==($q1cans2)){
    $q1score=$q1score+2.5;
}
if(($q1ans3)==($q1cans3)){
    $q1score=$q1score+2.5;
}
if(($q1ans4)==($q1cans4)){
    $q1score=$q1score+2.5;
}
if(($q1ans5)==($q1cans5)){
    $q1score=$q1score+2.5;
}
if(($q1ans6)==($q1cans6)){
    $q1score=$q1score+2.5;
}
if(($q1ans7)==($q1cans7)){
    $q1score=$q1score+2.5;
}
if(($q1ans8)==($q1cans8)){
    $q1score=$q1score+2.5;
}

//第二題
$q2pic0 = $_SESSION['q2pic0'];
$q2pic1 = $_SESSION['q2pic1'];
$q2pic2 = $_SESSION['q2pic2'];
$q2pic3 = $_SESSION['q2pic3'];

$h2opt1 = $_SESSION["h2opt1"];
$h2opt2 = $_SESSION['h2opt2'];
$h2opt3 = $_SESSION['h2opt3'];
$h2opt4 = $_SESSION['h2opt4'];

@$q2ans1 = $_POST['q2ans12'];
@$q2ans2 = $_POST['q2ans13'];
@$q2ans3 = $_POST['q2ans14'];
@$q2ans4 = $_POST['q2ans15'];
$q2score = 0;
if($q2ans1==correct){
  $q2ans1='AM 7:00';
  $q2score=$q2score+5;
}else{
  $q2ans1='PM '.$h2opt1.':00';
}

if($q2ans2==correct){
  $q2ans2='AM 7:30';
  $q2score=$q2score+5;
}else{
  $q2ans2='PM '.$h2opt2.':30';
}

if($q2ans3==correct){
  $q2ans3='AM 10:00';
  $q2score=$q2score+5;
}else{
  $q2ans3='PM '.$h2opt3.':00';
}

if($q2ans4==correct){
  $q2ans4='PM 10:00';
  $q2score=$q2score+5;
}else{
  $q2ans4='AM '.$h2opt4.':00';
}


//第三題
$q3ans1 = $_POST['q3ans1'];
$q3ans2 = $_POST['q3ans2'];
$q3ans3 = $_POST['q3ans3'];
$q3ans4 = $_POST['q3ans4'];

$q3cans1 = 10;
$q3cans2 = 8;
$q3cans3 = 3;
$q3cans4 = 9;




 $q3score=0;
if(($q3ans1)==($q3cans1)){
    $q3score=$q3score+5;
}
if(($q3ans2)==($q3cans2)){
    $q3score=$q3score+5;
}
if(($q3ans3)==($q3cans3)){
    $q3score=$q3score+5;
}
if(($q3ans4)==($q3cans4)){
    $q3score=$q3score+5;
}

//第四題

$h9 = $_SESSION['q4hour1'];
$h10 = $_SESSION['q4hour2'];
$h11 = $_SESSION['q4hour3'];
$h12 = $_SESSION['q4hour4'];
$h13 = $_SESSION['q4hour5'];
$h14 = $_SESSION['q4hour6'];
$m9 = $_SESSION['q4min1'];
$m10 = $_SESSION['q4min2'];
$m11 = $_SESSION['q4min3'];
$m12 = $_SESSION['q4min4'];
$m13 = $_SESSION['q4min5'];
$m14 = $_SESSION['q4min6'];

$q4ans1 = $_POST['q4ans1']; //取答題者答案
$q4ans2 = $_POST['q4ans2'];
$q4ans3 = $_POST['q4ans3'];
$q4ans4 = $_POST['q4ans4'];

$q4cans1 = 0; //正解
$q4cans2 = 0;
$q4cans3 = 0;
$q4cans4 = 0;

if($h10>$h9){
  $q4cans1 = 60 - $m9 + $m10;
}else{
  $q4cans1 = $m10 - $m9;
}
if($h11>$h10){
  $q4cans2 = 60 - $m10 + $m11;
}else{
  $q4cans2 = $m11 - $m10;
}
if($h13>$h12){
  $q4cans3 = 60 - $m12 + $m13;
}else{
  $q4cans3 = $m13 - $m12;
}
if($h14>$h13){
  $q4cans4 = 60 - $m13 + $m14;
}else{
  $q4cans4 = $m14 - $m13;
}

 $q4score = 0;
if(($q4ans1)==($q4cans1)){
    $q4score = $q4score + 5;
}
if(($q4ans2)==($q4cans2)){
    $q4score = $q4score + 5;
}
if(($q4ans3)==($q4cans3)){
    $q4score = $q4score + 5;
}
if(($q4ans4)==($q4cans4)){
    $q4score = $q4score + 5;
}

//第五題
$q5pic0 = $_SESSION['q5pic0'];
$q5pic1 = $_SESSION['q5pic1'];
$q5pic2 = $_SESSION['q5pic2'];
$q5pic3 = $_SESSION['q5pic3'];
$q5cans1 = 0;
$q5cans2 = 0;
$q5cans3 = 0;
$q5cans4 = 0;
switch($q5pic0){
  case 'img/clock_img/p1.png':
  $q5cans1 = 1;
  break;
  case 'img/clock_img/p2.png':
  $q5cans1 = 2;
  break;
  case 'img/clock_img/p3.png':
  $q5cans1 = 3;
  break;
  case 'img/clock_img/p4.png':
  $q5cans1 = 4;
  break;
}

switch($q5pic1){
  case 'img/clock_img/p1.png':
  $q5cans2 = 1;
  break;
  case 'img/clock_img/p2.png':
  $q5cans2 = 2;
  break;
  case 'img/clock_img/p3.png':
  $q5cans2 = 3;
  break;
  case 'img/clock_img/p4.png':
  $q5cans2 = 4;
  break;
}

switch($q5pic2){
  case 'img/clock_img/p1.png':
  $q5cans3 = 1;
  break;
  case 'img/clock_img/p2.png':
  $q5cans3 = 2;
  break;
  case 'img/clock_img/p3.png':
  $q5cans3 = 3;
  break;
  case 'img/clock_img/p4.png':
  $q5cans3 = 4;
  break;
}

switch($q5pic3){
  case 'img/clock_img/p1.png':
  $q5cans4 = 1;
  break;
  case 'img/clock_img/p2.png':
  $q5cans4 = 2;
  break;
  case 'img/clock_img/p3.png':
  $q5cans4 = 3;
  break;
  case 'img/clock_img/p4.png':
  $q5cans4 = 4;
  break;
}

$q5ans1 = $_POST['q5ans1'];
$q5ans2 = $_POST['q5ans2'];
$q5ans3 = $_POST['q5ans3'];
$q5ans4 = $_POST['q5ans4'];
$q5score=0;
if($q5ans1==$q5cans1){
  $q5score = $q5score + 5; 
}
if($q5ans2==$q5cans2){
  $q5score = $q5score + 5; 
}
if($q5ans3==$q5cans3){
  $q5score = $q5score + 5; 
}
if($q5ans4==$q5cans4){
  $q5score = $q5score + 5; 
}

 $totalscore=$q1score+$q2score+$q3score+$q4score+$q5score;
?>
<form name="form1" method="post">
<div data-role="page" id="time_ans">
	<div align="center" valign="middle">
		<h3 align="center" style="color: red">本次作答拿了<?php echo "$totalscore"; ?>/100分</h3>
    <br>
		<a href="#time_ans1" class="ui-btn" style="width: 10%;" data-transition="slide">來對答案吧!</a>
	</div>	
</div>

<div data-role="page" id="time_ans1">
<h3 align="center" style="color: red">本大題拿了<?php echo "$q1score"; ?>/20分</h3> 
    <h3 align="center">請問現在是幾點幾分? 輸入正確時間。</h3>
    
    <table width="50%" style ="text-align:center">
      <tr style="height:280px">
        <td>
          <canvas id ="clock1" width="200%" height="200%" style="display:block; margin:auto;"></canvas>
        </td>
        <td>
          <canvas id ="clock2" width="200%" height="200%" style="display:block; margin:auto;"></canvas>
        </td>
      </tr>
      <tr style="height:40px">
        <td style="text-align: center;">
        原作答:<?php echo "$q1ans1"?>點<?php echo "$q1ans2"?>分
        </td>
          
        <td style="text-align: center;">
        原作答:<?php echo "$q1ans3"?>點<?php echo "$q1ans4"?>分
        </td>
      </tr>

      <tr style="height:40px">
        <td style="text-align: center; color: red;">
        正解:<?php echo "$q1cans1"?>點<?php echo "$q1cans2"?>分
        </td>
        
        <td style="text-align: center; color: red;">
        正解:<?php echo "$q1cans3"?>點<?php echo "$q1cans4"?>分
        </td >

      </tr>

   
      <tr style="height: 280px">
        <td>
          <canvas id ="clock3" width="200%" height="200%" style="display:block; margin:auto;"></canvas>
        </td>
        <td>
          <canvas id ="clock4" width="200%" height="200%" style="display:block; margin:auto;"></canvas>
        </td>
      </tr>
      <tr style="height: 40px">
      <td style="text-align: center;">
        原作答:<?php echo "$q1ans5"?>點<?php echo "$q1ans6"?>分
        </td>
          
        <td style="text-align: center;">
        原作答:<?php echo "$q1ans7"?>點<?php echo "$q1ans8"?>分
        </td>
      </tr>

      <tr style="height:40px">
        <td style="text-align: center; color: red;">
        正解:<?php echo "$q1cans5"?>點<?php echo "$q1cans6"?>分   
        </td>
        
        <td style="text-align: center; color: red;">
        正解:<?php echo "$q1cans7"?>點<?php echo "$q1cans8"?>分
        </td >
      </tr>

    </table>
    <br>
    <div align="center">
    <a href="Topic.php" data-ajax="false" style="width: 10%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
      <a href="#time_ans2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
    </div>
    </div>
</div>
<script>
var h1 = <?php echo $q1cans1 ?>;
var m1 = <?php echo $q1cans2 ?>;
var h2 = <?php echo $q1cans3 ?>;
var m2 = <?php echo $q1cans4 ?>;
var h3 = <?php echo $q1cans5 ?>;
var m3 = <?php echo $q1cans6 ?>;
var h4 = <?php echo $q1cans7 ?>;
var m4 = <?php echo $q1cans8 ?>;

  drawclock("clock1",h1,m1);  //第一題的時鐘            
  drawclock("clock2",h2,m2);
  drawclock("clock3",h3,m3);
  drawclock("clock4",h4,m4);
</script>

<div data-role="page" id="time_ans2">
<h3 align="center" style="color: red">本大題拿了<?php echo "$q2score"; ?>/20分</h3>
<h3 align="center">請選出正常的作息時間。</h3>
<div align="center">
    <div class="container" align="center">
      <div id="problems" class="problems disable-select">
      </div>
    </div>
  </div>
  <table border="1" align="center" >
		<tr>
			<td rowspan="2">
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">AM 7:00</span><input type="radio" style="width:30px;height:30px"  data-role="none">
			  <script>document.write('<img src="<?php echo $q2pic0 ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" style="width:30px;height:30px" data-role="none" ><span style="font-family:Impact; font-size: 2.2cm">PM <?php echo $h2opt1 ?>:00</span>
        </div>
      </td>
      <td style="text-align: center">
      原作答:<?php echo $q2ans1 ?>         
      </td>
    </tr>
    <tr>
      <td style="text-align: center; color: red;">
      正解:AM 7:00    
      </td>
    </tr>
    
		<tr>
			<td rowspan="2">
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">PM <?php echo $h2opt2 ?>:30</span><input type="radio" style="width:30px;height:30px" data-role="none">
				<script>document.write('<img src="<?php echo $q2pic1 ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" style="width:30px;height:30px" data-role="none" ><span style="font-family:Impact; font-size: 2.2cm">AM 7:30</span>
        </div>
      </td>
      <td style="text-align: center">
      原作答:<?php echo $q2ans2 ?>          
      </td>
    </tr>
    <tr>
      <td style="text-align: center; color: red;">
      正解:AM 7:30          
      </td>
    </tr>
    
		<tr>
			<td rowspan="2">
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">AM 10:00</span><input type="radio" style="width:30px;height:30px" data-role="none">
        <script>document.write('<img src="<?php echo $q2pic2 ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" style="width:30px;height:30px" data-role="none"><span style="font-family:Impact; font-size: 2.2cm">PM <?php echo $h2opt3 ?>:00</span>
        </div>
      </td>
      <td style="text-align: center">
      原作答:<?php echo $q2ans3 ?>          
      </td>
    </tr>
    <tr>
 
      <td style="text-align: center; color: red;">
      正解:AM 10:00          
      </td>
    </tr>
    
		<tr>
			<td rowspan="2">
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">AM <?php echo $h2opt4 ?>:00</span><input type="radio" style="width:30px;height:30px" data-role="none">
        <script>document.write('<img src="<?php echo $q2pic3 ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" style="width:30px;height:30px" data-role="none" ><span style="font-family:Impact; font-size: 2.2cm">PM 10:00</span>
        </div>
      </td>
      <td style="text-align: center">
      原作答:<?php echo $q2ans4 ?>         
      </td>
    </tr>
    <tr>
      <td style="text-align: center; color: red;">
      正解:PM 10:00          
      </td>
    </tr>
	
  </table>
<br>
<div align="center">
  <a href="#time_ans1" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
  <a href="Topic.php" data-ajax="false" style="width: 10%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
  <a href="#time_ans3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
</div>
</div>

<div data-role="page" id="time_ans3">
<h3 align="center" style="color: red">本大題拿了<?php echo "$q3score"; ?>/20分</h3> 
        <h3 align="center">請看圖回答問題。</h3>

        <img src="img/clock_img/clock.jpg" width="400" height="400" style="display:block; margin:auto;">
        <table border="1" align="center"  id="table1">
        <tr >
        <th>
        原作答:睡覺花了<?php echo $q3ans1 ?>小時<a style="color: red;">正解:<?php echo $q3cans1 ?>小時</a>
        </th>
        </tr>

        <tr>
        <th>
        原作答:上午上課是<?php echo $q3ans2 ?>點開始<a style="color: red;">正解:<?php echo $q3cans2 ?>點</a>
        </th>
        </tr>

        <tr>
        <th>
        原作答:下午上課花了<?php echo $q3ans3 ?>小時<a style="color: red;">正解:<?php echo $q3cans3 ?>小時</a>
        </th>
        </tr>
        <tr>
        <th>
        原作答:<?php echo $q3ans4 ?>點上床睡覺<a style="color: red;">正解:<?php echo $q3cans4 ?>點</a>
        </th>
        </tr>


        </table>    
<br>
        <div align="center">
          <a href="#time_ans2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
          <a href="Topic.php" data-ajax="false" style="width: 10%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
          <a href="#time_ans4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
        </div>
    </div>




<div data-role="page" id="time_ans4">
<h3 align="center" style="color: red">本大題拿了<?php echo "$q4score"; ?>/20分</h3>
        <h3 align="center">請判斷經過多少時間?</h3>
        <table border="1" width="50%" align="center">
            <tr style="height:280px">
              <td><canvas id="clock9" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="15%" style="text-align: center;">原作答:經過<?php echo $q4ans1 ?>分<br><p style="color:red;">正解:經過<?php echo $q4cans1 ?>分</p></td>
              <td><canvas id="clock10" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="15%" style="text-align: center;">原作答:經過<?php echo $q4ans2 ?>分<br><p style="color:red;">正解:經過<?php echo $q4cans2 ?>分</p></td>
              <td><canvas id="clock11" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>

            </tr>
         </table>

         <table border="1" width="50%" align="center">
            <tr style="height: 280px">
              <td><canvas id="clock12" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="15%" style="text-align: center;">原作答:經過<?php echo $q4ans3 ?>分<br><p style="color:red;">正解:經過<?php echo $q4cans3 ?>分</p></td>
              <td><canvas id="clock13" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="15%" style="text-align: center;">原作答:經過<?php echo $q4ans4 ?>分<br><p style="color:red;">正解:經過<?php echo $q4cans4 ?>分</p></td>
              <td><canvas id="clock14" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
            </tr>
         </table>
         <br>
         <div align="center">
             <a href="#time_ans3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
             <a href="Topic.php" data-ajax="false" style="width: 10%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
             <a href="#time_ans5" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
         </div>
    </div>

    <div data-role="page" id="time_ans5">
    <h3 align="center" style="color: red">本大題拿了<?php echo "$q5score"; ?>/20分</h3>
      <h3 align="center">請依作息判斷排序?</h3>

      <table style="width:50%" align="center">
        <tr style="height: 280px">
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $q5pic0 ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $q5pic1 ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
          </tr>
          <tr style="height:  40px">
            
          <th>原作答:<?php echo $q5ans1 ?><br><p style = "color:red;">正解:<?php echo $q5cans1 ?></p></th>
          <th>原作答:<?php echo $q5ans2 ?><br><p style = "color:red;">正解:<?php echo $q5cans2 ?></p></th>      
          </tr>
              
            
      
          <tr style="height: 280px">
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $q5pic2 ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
      
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $q5pic3 ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
      
          </tr>
      
          <tr style="height: 40px">
              <th>原作答:<?php echo $q5ans3 ?><br><p style = "color:red;">正解:<?php echo $q5cans3 ?></p></th>
              <th>原作答:<?php echo $q5ans4 ?><br><p style = "color:red;">正解:<?php echo $q5cans4 ?></p></th>        
          </tr>
      
    </table>
    <br>
    <div align="center">
        <a href="#time_ans4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
        <a href="Topic.php" data-ajax="false" style="width: 10%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
        <!-- <button type="submit" id="button" style="width: 10%;">結束作答</button> -->
    </div>
    </div>
<script>
var h9 = <?php echo $h9 ?>; 
var h10 = <?php echo $h10 ?>; 
var h11 = <?php echo $h11 ?>; 
var h12 = <?php echo $h12 ?>; 
var h13 = <?php echo $h13 ?>; 
var h14 = <?php echo $h14 ?>; 
var m9 = <?php echo $m9 ?>; 
var m10 = <?php echo $m10 ?>; 
var m11 = <?php echo $m11 ?>; 
var m12 = <?php echo $m12 ?>; 
var m13 = <?php echo $m13 ?>; 
var m14 = <?php echo $m14 ?>; 

drawclock("clock9",h9,m9);  //第四題的時鐘           
drawclock("clock10",h10,m10);
drawclock("clock11",h11,m11);
drawclock("clock12",h12,m12);
drawclock("clock13",h13,m13);
drawclock("clock14",h14,m14);
</script>





