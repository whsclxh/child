<html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script src="library/jquery.min.js"></script>
  <script src="library/svg.min.js"></script>


  <!-- <script type="text/javascript" src="time_2.js"></script> -->
  <script type="text/javascript" src="time_1.js"></script>
  <script src="http://d3js.org/d3.v3.min.js"></script>
  
  <!-- <script type="text/javascript" src="time_4.js"></script>
  <script type="text/javascript" src="time_5.js"></script> -->



  <style type="text/css">
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

    #table1{
      width:30%;
     
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






.ui-btn{
    display: inline !important;
}






  
  </style>
</head>
<?php
$cart = array("img/clock_img/p1.png", "img/clock_img/p2.png", "img/clock_img/p3.png",	"img/clock_img/p4.png"); 
shuffle($cart);
$_SESSION['q5pic0'] = $cart[0];
$_SESSION['q5pic1'] = $cart[1];
$_SESSION['q5pic2'] = $cart[2];
$_SESSION['q5pic3'] = $cart[3];






$que = array("img/clock_img/wakeup.jpg", "img/clock_img/breakfast.jpg","img/clock_img/teach.jpg","img/clock_img/sleep.jpg");
$_SESSION['q2pic0'] = $que[0];
$_SESSION['q2pic1'] = $que[1];
$_SESSION['q2pic2'] = $que[2];
$_SESSION['q2pic3'] = $que[3];



$h21 = rand(1,12); //第二題的選項
$h22 = rand(1,12);
$h23 = rand(1,12);
$h24 = rand(1,12);
$_SESSION['h2opt1'] = $h21;
$_SESSION['h2opt2'] = $h22;
$_SESSION['h2opt3'] = $h23;
$_SESSION['h2opt4'] = $h24;





 



 ?>


<body>
  
  <form method="post" action="time_finish.php" data-ajax="false" name = "form1">
    <div data-role="page" id="time1">
    <h3 align="center">請問現在是幾點幾分? 輸入正確時間。</h3>
    
  <table width="50%" style ="text-align:center">
    <tr style="height:280px">
      <td><canvas id="clock1" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
      <td><canvas id="clock2" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
    </tr>
    <tr style="height:40px">
      <td>
        <input type="number" data-role="none" style="width:15%"  name="q1ans1" min="1" max="12" >時<input type="number" data-role="none" style="width:15%"  name="q1ans2" min="00" max="59" step="5" >分
      </td>
        
      <td>
        <input type="number" data-role="none" style="width:15%"  name="q1ans3" min="1" max="12" >時<input type="number" data-role="none" style="width:15%"  name="q1ans4" min="00" max="59" step="5" >分
      </td>
    </tr>
 
    <tr style="height: 280px">
      <td>
        <canvas id="clock3" width="200%" height="200%" style="display:block; margin:auto;"></canvas>
      </td>
      <td>
        <canvas id="clock4" width="200%" height="200%" style="display:block; margin:auto;"></canvas>
      </td>
    </tr>
    <tr style="height: 40px">
      <td>
        <input type="number" data-role="none" style="width:15%"  name="q1ans5" min="1" max="12" >時<input type="number" data-role="none" style="width:15%"  name="q1ans6" min="00" max="59" step="5" >分
      </td>
        
      <td>
        <input type="number" data-role="none" style="width:15%"  name="q1ans7" min="1" max="12" >時<input type="number" data-role="none" style="width:15%"  name="q1ans8" min="00" max="59" step="5" >分
      </td>
    </tr>
  </table>
  <br>
  <div align="center">
    <a href="#" onclick="document.form1.submit();" style="width: 10%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
    <a href="#time2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
  </div>
  </div>


<div data-role="page" id="time2">
<h3 align="center">請選出正常的作息時間。</h3>
<div align="center">
    <div class="container" align="center">
      <div id="problems" class="problems disable-select">
      </div>
    </div>
  </div>
  <table border="1" align="center" >
		<tr>
			<td>
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">AM 7:00</span><input type="radio" value="correct" style="width:30px;height:30px" data-role="none" name="q2ans12">
			  <script>document.write('<img src="<?php echo $que[0] ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" value="wrong" style="width:30px;height:30px" data-role="none" name="q2ans12"><span style="font-family:Impact; font-size: 2.2cm">PM <?php echo $h21 ?>:00</span>
        </div>
      </td>
    </tr>
    
		<tr>
			<td>
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">PM <?php echo $h22 ?>:30</span><input type="radio" value="wrong" style="width:30px;height:30px" data-role="none" name="q2ans13">
				<script>document.write('<img src="<?php echo $que[1] ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" value="correct" style="width:30px;height:30px" data-role="none" name="q2ans13"><span style="font-family:Impact; font-size: 2.2cm">AM 7:30</span>
        </div>
			</td>
    </tr>
    
		<tr>
			<td>
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">AM 10:00</span><input type="radio" value="correct" style="width:30px;height:30px" data-role="none" name="q2ans14">
        <script>document.write('<img src="<?php echo $que[2] ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" value="wrong" style="width:30px;height:30px" data-role="none" name="q2ans14"><span style="font-family:Impact; font-size: 2.2cm">PM <?php echo $h23 ?>:00</span>
        </div>
			</td>
    </tr>
    
		<tr>
			<td>
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">AM <?php echo $h24 ?>:00</span><input type="radio" value="wrong" style="width:30px;height:30px" data-role="none" name="q2ans15">
        <script>document.write('<img src="<?php echo $que[3] ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" value="correct" style="width:30px;height:30px" data-role="none" name="q2ans15"><span style="font-family:Impact; font-size: 2.2cm">PM 10:00</span>
        </div>
			</td>
		</tr>
	
  </table>
<br>
<div align="center">
  <a href="#time1" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
  <a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  <a href="#time3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
</div>
</div>
    
    <div data-role="page" id="time3">
        <h3 align="center">請看圖回答問題。</h3>
        
        <img src="img/clock_img/clock.jpg" width="400" height="400" style="display:block; margin:auto;">
        <table border="1" align="center"  id="table1">
        <tr >
        <th >
        睡覺花了<input type="number" data-role="none" style="width:15%"  name="q3ans1" min="1" max="12" >小時
        </th>
        </tr>

        <tr>
        <th>
        上午上課是<input type="number" data-role="none" style="width:15%"  name="q3ans2" min="1" max="12" >點開始
        </th>
        </tr>

        <tr>
        <th>
        下午上課花了<input type="number" data-role="none" style="width:15%"  name="q3ans3" min="1" max="12" >小時
        </th>
        </tr>
        <tr>
        <th>
        <input type="number" data-role="none" style="width:15%"  name="q3ans4" min="1" max="12" >點上床睡覺
        </th>
        </tr>


        </table>

    
<br>
        <div align="center">
          <a href="#time2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
          <a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
          <a href="#time4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
        </div>
    </div>
    
    <div data-role="page" id="time4">
        <h3 align="center">請判斷經過多少時間?</h3>
        <table border="1" width="50%" align="center">
            <tr style="height:280px">
              <td><canvas id="clock9" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="10%" style="text-align: center;">經過<input type="number" name="q4ans1" data-role="none" max="60" min="0" step="5">分</td>
              <td><canvas id="clock10" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="10%" style="text-align: center;">經過<input type="number" name="q4ans2" data-role="none" max="60" min="0" step="5">分</td>
              <td><canvas id="clock11" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>

            </tr>
         </table>

         <table border="1" width="50%" align="center">
            <tr style="height: 280px">
              <td><canvas id="clock12" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="10%" style="text-align: center;">經過<input type="number" name="q4ans3" data-role="none" max="60" min="0" step="5">分</td>
              <td><canvas id="clock13" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="10%" style="text-align: center;">經過<input type="number" name="q4ans4" data-role="none" max="60" min="0" step="5">分</td>
              <td><canvas id="clock14" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
            </tr>
         </table>
         <br>
         <div align="center">
             <a href="#time3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
             <a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
             <a href="#time5" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
         </div>
    </div>

    <div data-role="page" id="time5">
      <h3 align="center">請依作息判斷排序?</h3>

      <table style="width:50%" align="center">
        <tr style="height: 280px">
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $cart[0] ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $cart[1] ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
          </tr>
          <tr style="height:  40px">
            
          <th><div style="margin: 0px auto; width: 90px;"><input type="number"  name="q5ans1" min="1" max="4"></div></th>
          <th><div style="margin: 0px auto; width: 90px;"><input type="number"  name="q5ans2" min="1" max="4"></div></th>      
          </tr>
              
            
      
          <tr style="height: 280px">
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $cart[2] ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
      
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $cart[3] ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
      
          </tr>
      
          <tr style="height: 40px">
              <th><div style="margin: 0px auto; width: 90px;"><input type="number"  name="q5ans3" min="1" max="4"></div></th>
              <th><div style="margin: 0px auto; width: 90px;"><input type="number"  name="q5ans4" min="1" max="4"></div></th>        
          </tr>
      
    </table>
    <br>
    <div align="center">
        <a href="#time4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
        <a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
    </div>
    </div>


  </form>
  
  <script>

<?php

$h1 = rand(1,12);
$h2 = rand(1,12);
$h3 = rand(1,12);
$h4 = rand(1,12);
 
$m1 = rand(1,11)*5;
$m2 = rand(1,11)*5;
$m3 = rand(1,11)*5;
$m4 = rand(1,11)*5;

$_SESSION['q1ans1'] = $h1;
$_SESSION['q1ans2'] = $m1;
$_SESSION['q1ans3'] = $h2;
$_SESSION['q1ans4'] = $m2;
$_SESSION['q1ans5'] = $h3;
$_SESSION['q1ans6'] = $m3;
$_SESSION['q1ans7'] = $h4;
$_SESSION['q1ans8'] = $m4;






$h9 = rand(1,12);  
$m9 = rand(1,11)*5;  
$h10 = $h9;
$m10 = $m9 + rand(1,11)*5; 
if($m10>60){
  $m10 -= 60;
  $h10 += 1;
}
if($m10==60){
  $m10 = 0;
  $h10 += 1;
}
$h11 = $h10;
$m11 = $m10 + rand(1,11)*5;
if($m11>60){
  $m11 -= 60;
  $h11 += 1;
}
if($m11==60){
  $m11 = 0;
  $h11 += 1;
}

$h12 = rand(1,12);
$m12 = rand(1,11)*5;
$h13 = $h12;
$m13 = $m12 + rand(1,11)*5;
if($m13>60){
  $m13 -= 60;
  $h13 += 1;
}
if($m13==60){
  $m13 = 0;
  $h13 += 1;
}
$h14 = $h13;
$m14 = $m13 + rand(1,11)*5;
if($m14>60){
  $m14 -= 60;
  $h14 += 1;
}
if($m14==60){
  $m14  =0;
  $h14 += 1;
}

$_SESSION['q4hour1'] = $h9;
$_SESSION['q4hour2'] = $h10;
$_SESSION['q4hour3'] = $h11;
$_SESSION['q4hour4'] = $h12;
$_SESSION['q4hour5'] = $h13;
$_SESSION['q4hour6'] = $h14;
$_SESSION['q4min1'] = $m9;
$_SESSION['q4min2'] = $m10;
$_SESSION['q4min3'] = $m11;
$_SESSION['q4min4'] = $m12;
$_SESSION['q4min5'] = $m13;
$_SESSION['q4min6'] = $m14;


?>

var h1 = <?php echo $h1 ?>;
var h2 = <?php echo $h2 ?>;
var h3 = <?php echo $h3 ?>;
var h4 = <?php echo $h4 ?>;
var m1 = <?php echo $m1 ?>;
var m2 = <?php echo $m2 ?>;
var m3 = <?php echo $m3 ?>;
var m4 = <?php echo $m4 ?>;


drawclock("clock1",h1,m1);  //第一題的時鐘            
drawclock("clock2",h2,m2);
drawclock("clock3",h3,m3);
drawclock("clock4",h4,m4);




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

</body>

</html>
