<?php session_start(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="time_1.js"></script>
<script src="library/svg.min.js"></script>


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

/*公共类*/

.fl {
  float: left
}

.fr {
  float: right
}

.al {
  text-align: left
}

.ac {
  text-align: center
}

.ar {
  text-align: right
}

.hide {
  display: none
}
* {
    box-sizing: border-box
}

html,
body {
    height: 100%;
    background: #f5f5f5;
}

.container {
    margin: 0 auto;
    max-width: 960px;
    height: 100%;
    background: #fff;
}

.draw-container {
    position: relative;
    height: 800px;
    background: #fff;
}

.draw-container ul {
    margin-top: 80px;
}

.data-list {
    position: absolute;
}

.question-list {
    left: 50px;
}

.answer-list {
    right: 50px;
    top:25%;
}

 .data-list li {
    margin: 15px;
    padding: 0 10px;
    /* width: 100%;
    height: 30%; */
    background: #ecf5ff;
    line-height: 30px;
    font-size: 16px;
    
    border: 1px solid #ecf5ff;
    border-radius: 10px;
    cursor: crosshair;
    text-align: center
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



</style>


<?php
//第一題
$q1ans1 = $_POST['q1ans1']; //取答題者答案
$q1ans2 = $_POST['q1ans2'];
$q1ans3 = $_POST['q1ans3'];
$q1ans4 = $_POST['q1ans4'];
$q1ans5 = $_POST['q1ans5'];
$q1ans6 = $_POST['q1ans6'];
$q1ans7 = $_POST['q1ans7'];
$q1ans8 = $_POST['q1ans8'];

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

$q2ans1 = $_POST['q2ans12'];
$q2ans2 = $_POST['q2ans13'];
$q2ans3 = $_POST['q2ans14'];
$q2ans4 = $_POST['q2ans15'];
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
$h5 = $_SESSION['q3hour1'];
$h6 = $_SESSION['q3hour2'];
$h7 = $_SESSION['q3hour3'];
$h8 = $_SESSION['q3hour4'];
$m5 = $_SESSION['q3min1'];
$m6 = $_SESSION['q3min2'];
$m7 = $_SESSION['q3min3'];
$m8 = $_SESSION['q3min4'];


// $q3ans1 = $_POST['q3answer1'];
// $q3ans2 = $_POST['q3answer2'];
// $q3ans3 = $_POST['q3answer3'];
// $q3ans4 = $_POST['q3answer4'];

// $q3opt11 = $_POST['q3option11'];
// $q3opt12 = $_POST['q3option12'];
// $q3opt13 = $_POST['q3option13'];
// $q3opt21 = $_POST['q3option21'];
// $q3opt22 = $_POST['q3option22'];
// $q3opt23 = $_POST['q3option23'];
// $q3opt31 = $_POST['q3option31'];
// $q3opt32 = $_POST['q3option32'];
// $q3opt33 = $_POST['q3option33'];
// $q3opt41 = $_POST['q3option41'];
// $q3opt42 = $_POST['q3option42'];
// $q3opt43 = $_POST['q3option43'];
 $q3score=0;
// if(($q3q1)==($q3ans1)){
//     $q3score=$q3score+5;
// }
// if(($q3q2)==($q3ans2)){
//     $q3score=$q3score+5;
// }
// if(($q3q3)==($q3ans3)){
//     $q3score=$q3score+5;
// }
// if(($q3q4)==($q3ans4)){
//     $q3score=$q3score+5;
// }

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
    <div align="center">
      <a href="#time_ans2" class="ui-btn" style="width: 10%; display: inline-block" data-transition="slide">下一題</a>
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

<div align="center">
  <a href="#time_ans1" class="ui-btn" style="width: 10%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
  <a href="#time_ans3" class="ui-btn" style="width: 10%; display: inline-block" data-transition="slide">下一題</a>
</div>
</div>

<div data-role="page" id="time_ans3">
<h3 align="center" style="color: red">本大題拿了<?php echo "$q3score"; ?>/20分</h3> 
        <h3 align="center">請連到正確的時間。</h3>
        <div id="draw" class="draw-container">

          <ul class="question-list data-list"></ul>
     

          <ul class="answer-list data-list"></ul>

        </div>

        <div align="center">
          <a href="#time_ans2" class="ui-btn" style="width: 10%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
          <a href="#time_ans4" class="ui-btn" style="width: 10%; display: inline-block" data-transition="slide">下一題</a>
        </div>
    </div>

    <script>
      var h5 = <?php echo $h5 ?>;
      var h6 = <?php echo $h6 ?>;
      var h7 = <?php echo $h7 ?>;
      var h8 = <?php echo $h8 ?>;
      var m5 = <?php echo $m5 ?>;
      var m6 = <?php echo $m6 ?>;
      var m7 = <?php echo $m7 ?>;
      var m8 = <?php echo $m8 ?>;


const line = {
    init: function (questionObj, answerObj) {
        this.draw = SVG('draw').size("100%", "100%");
        this.lineArr = [];
        this.currentInfo = {};
        this.createList(questionObj)
        this.createList(answerObj)
        this.bindBtnEvent()
        this.bindParentsEvent()
        
        
    },
    /* 创建列表 */
    createList: function (obj, callback) {
        let type = obj.type,
            data = obj.data,
            content = [];
        if (type == 'question') {
            $('.question-list').empty()
            data.forEach(element => {
                let item = $('<li class="question-li" data-question=' + element.questionKey + ' data-answer=' + element.answer + '></li>'),
                    obj = {};
                item.append(element.question);
                obj.beginValue = element.questionKey;
                obj.line = this.createLine();
                this.lineArr.push(obj)
                content.push(item);
            });
            // $('.question-list').html(content)
            content.forEach(e => {
              $('.question-list').append(e);
            });
        } else {
            $('.answer-list').empty()
            data.forEach(element => {
                let item = '<li class="answer-li" data-answer=' + element + '>' + element + '</li>';
                content.push(item);
            });
            $('.answer-list').html(content);

        }
        // this.itemForEach(true)
    },
    /* 绑定按钮事件 */
    bindBtnEvent: function () {
        let self = this,
            parentPosition = $('#draw').offset();
        /* 鼠标按下question-list列，调整线条开始位置 */
        $('.question-list').on('mousedown', 'li', function (e) {

            let current = self.lineArr.find(el => {
                return el.beginValue == $(this).attr('data-question');
            });
            current.begin = {};
            current.beginElement = this;
            current.begin.y = $(this).offset().top - parentPosition.top +55 ;
            current.begin.x = $(this).offset().left - parentPosition.left  +150;
            current.line.show();
            current.line.stroke({
                color: "#67C23A",
            });
            current.line.plot(current.begin.x, current.begin.y, current.begin.x, current.begin.y);
            current.end = {};
            /* 如果存在结束位置，删除 */
            if (current.endElement) {
                $(current.endElement).removeClass('selected')
                $(this).removeClass('selected')
            }
            current.endElement = '';
            current.endValue = '';
            self.currentInfo = current;
        })
        /* 鼠标按下answer-list列，调整线条结束位置 */
        $('.answer-list').on('mouseup', 'li', function (e) {
            let current = self.lineArr.find(el => {
                return el.beginValue == self.currentInfo.beginValue;
            });

            current.end.y = $(this).offset().top - parentPosition.top -5;
            current.end.x = $(this).offset().left - parentPosition.left + 10;
            current.endElement = this;
            current.endValue = $(this).attr('data-answer');
            
            current.line.plot(current.begin.x, current.begin.y, current.end.x, current.end.y);
            $(current.beginElement).addClass('selected')
            $(current.beginElement).attr('data-selected', current.endValue)
            $(this).addClass('selected')

            self.currentInfo = '';
        })
        /* 默认答案 */
        $('#j-default').click(function (e) {
            self.itemForEach()
        })
        /* 重置 */
        $('#j-reset').click(function (e) {
            self.lineArr.forEach(el => {
                $(el.beginElement).removeClass("selected");
                $(el.beginElement).attr('data-selected', '')
                $(el.endElement).removeClass("selected");
                el.line.hide()
            })
            $('.result-display').html('')
        })
        /* 确认答案 */
        $('#j-submit').click(function (e) {
            let result = [];
            $('.question-list li').each(function (el) {
                let question = $(this).attr('data-question'),
                    userSelectd = $(this).attr('data-selected');
                if (userSelectd) {
                    let item = `<li>${question} = ${userSelectd}</li>`;
                    result.push(item)
                }

            })
            result.length ? $('.result-display').html(result) : alert('您还未选择！')
        })
    },
    /* 绑定父亲事件事件 */
    bindParentsEvent: function (params) {
        let self = this;

        $(document).mouseup(function (e) {
            if (!$(e.target).is(".answer-li") && self.currentInfo.line) {
                self.currentInfo.line.hide();
                $("#draw")
                    .find(".question-li")
                    .removeClass("display-block-hover");
            }
        })
        $('#draw').mousemove(function (e) {
            e.preventDefault();
            if (Object.keys(self.currentInfo).length != 0) {
                let end = {}
                end.x = self.getMousePos(event).x - $("#draw").offset().left;
                end.y = self.getMousePos(event).y - $("#draw").offset().top;
                self.currentInfo.line.plot(self.currentInfo.begin.x, self.currentInfo.begin.y, end.x, end.y);
            }
        })
    },
    /* 创建线条 */
    createLine: function () {
        let self = this,
            line = self.draw.line();
        line.stroke({
            color: "#67C23A",
            width: 2,
            opacity: 0.6,
            linecap: "round"
        });
        line.hide()
        line.click(function () {
            let current = self.lineArr.find(el => {
                return el.line == this;
            });
            $(current.beginElement).removeClass("selected");
            $(current.endElement).removeClass("selected");
            $(current.beginElement).attr('data-selected', '')

            current.endValue = "";
            current.endElement = "";
            current.end = "";

            this.hide();
        });
        line.mouseover(function () {
            let current = self.lineArr.find(el => {
                return el.line == this;
            });
            if (current.endValue) {
                let left, top;
                left =
                    (current.end.x + current.begin.x - 20) / 2 + "px";
                top =
                    (current.end.y + current.begin.y - 20) / 2 + "px";
                $('.remove-btn').css({
                    'left': left,
                    'top': top
                }).show()
                this.addClass("hover-g");
            }
        });
        line.mouseout(function () {
            $('.remove-btn').hide();
            this.removeClass("hover-g");
        });
        /* line.marker("end", 8, 8, function (add) {
            add.polyline([
                [1, 0],
                [1, 8],
                [7, 4],
                [1, 0]
            ]);
            this.fill("#67C23A");
            this.stroke({
                color: "#67C23A",
                opacity: 0.6,
                width: 1
            });
        }); */
        return line;
    },
    /* 遍历question-list，存在默认answer，就去answer-list找到，进行连接 */
    itemForEach: function (flag) {
        let self = this,
            parentPosition = $('#draw').offset();

        if ($('.question-list li').length && $('.answer-list li').length) {

            $('li').removeClass('selected')
            $('.question-list li').each(function (params) {
                let obj = {},
                    _this = $(this),
                    beginValue = _this.attr('data-question'),
                    endValue = _this.attr('data-answer');

                obj = self.lineArr.find(el => el.beginValue == beginValue);
                obj.beginElement = this;
                obj.begin = {};
                obj.begin.y = _this.offset().top - parentPosition.top - 200;
                obj.begin.x = _this.offset().left - parentPosition.left - 100;
                $(this).attr('data-selected', '');
                $('.result-display').html('')
                // obj.line.plot(obj.begin.x, obj.begin.y, obj.begin.x, obj.begin.y)
                //判断是否存在初始答案
                if (endValue && !flag) {
                    $('.answer-list li').each(function (params) {
                        if ($(this).html() == endValue) {
                            obj.end = {};

                            obj.end.y = $(this).offset().top - parentPosition.top + 30;
                            obj.end.x = $(this).offset().left - parentPosition.left - 20;
                            obj.endElement = this;
                            obj.endValue = endValue;
                            obj.line.stroke({
                                color: "#E6A23C",
                            });
                            obj.line.plot(obj.begin.x, obj.begin.y, obj.end.x, obj.end.y);
                            obj.line.show()
                            $(this).addClass("selected")
                            _this.addClass("selected")
                        }
                    })


                }




            })
        }
    },
    /* 获取鼠标的坐标 */
    getMousePos: function (event) {
        var e = event || window.event;
        var scrollX =
            document.documentElement.scrollLeft || document.body.scrollLeft;
        var scrollY =
            document.documentElement.scrollTop || document.body.scrollTop;
        var x = e.pageX || e.clientX + scrollX  ;
        var y = e.pageY || e.clientY + scrollY;
        //alert('x: ' + x + '\ny: ' + y);
        return {
            x: x,
            y: y
        };
    },
}
var e = $('<p>test</p>');
const question = [{
            question: $('<canvas id="clock5" width="150%" height="150%" style="display:block; margin:auto;"></canvas>'),
            questionKey: '123',
            answer: 2
        },
        {
            question: $('<canvas id="clock6" width="150%" height="150%" style="display:block; margin:auto;"></canvas>'),
            questionKey: '2+2',
            answer: 4
        },
        {
            question: $('<canvas id="clock7" width="150%" height="150%" style="display:block; margin:auto;"></canvas>'),
            questionKey: '3+3',
            answer: 5
        },
        {
            question: $('<canvas id="clock8" width="150%" height="150%" style="display:block; margin:auto;"></canvas>'),
            questionKey: '4+4',
            answer: 1
        }
    ],
    time1 = h5 + '點' + m5 + '分';
    time2 = h6 + '點' + m6 + '分';
    time3 = h7 + '點' + m7 + '分';
    time4 = h8 + '點' + m8 + '分';

    var answer = new Array(time1,time2,time3,time4);
    function randomsort(a, b) {
    return Math.random()>.5 ? -1 : 1;
    }
    answer.sort(randomsort);
    
     
  
let questionObj = {
        data: question,
        type: 'question'
    },
    answerObj = {
        data: answer,
        type: 'answer'
    }
line.init(questionObj, answerObj)




drawclock("clock5",h5,m5);  //第三題的時鐘            
drawclock("clock6",h6,m6);
drawclock("clock7",h7,m7);
drawclock("clock8",h8,m8);
</script>



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
         <div align="center">
             <a href="#time_ans3" class="ui-btn" style="width: 10%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
             <a href="#time_ans5" class="ui-btn" style="width: 10%; display: inline-block" data-transition="slide">下一題</a>
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
    <div align="center">
        <a href="#time_ans4" class="ui-btn" style="width: 10%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
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





