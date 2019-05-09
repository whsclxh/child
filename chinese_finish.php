<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="csss/jquery.mobile-1.4.5.min.css">
  <link rel="stylesheet" href="csss/jquery.mobile.icons.min.css" />
  <script src="jss/jquery-1.11.3.min.js"></script>
  <script src="jss/jquery.mobile-1.4.5.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js "></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="jss/ablanxue.js"></script>
  <link href="csss/ablanxue.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width; initial-scale=1;maximum-scale=1.0; user-scalable=0;">
  <link rel="stylesheet" type="text/css" media="screen" href="sans-serif.css">
  <link rel="stylesheet" type="text/css" media="print" href="serif.css">
  <script src="test3.js"></script>
	<style type="text/css">
  .disable-select {
      -webkit-touch-callout: none; /* iOS Safari */
      -webkit-user-select: none;   /* Chrome/Safari/Opera */
      -khtml-user-select: none;    /* Konqueror */
      -moz-user-select: none;      /* Firefox */
      -ms-user-select: none;       /* Internet Explorer/Edge */
      user-select: none;           /* Non-prefixed version, currently supported by any browser but < IE9 */
    }

   .box1{  
}
.a,.b,.c{
   display: inline-block
}
    .time-text2 {
      text-align: center;   
      margin-left: 180px;      
    
      display: inline-block;
      width:20%;     
      padding: 0.5rem;
      border-radius: 50px ;
      border: 2px solid red;
      color: black;
      font-size: 20px;
      font-weight: 900;
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
    height: 500px;
    background: #fff;
}

.btn-group {
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 50px;
    line-height: 50px;
    padding: 0 20px;
    text-align: right;
}
.btn-group a:hover{
    color: #66b1ff;
}

.btn-group a{
    margin-right: 15px;
    color: #409eff;

}
a.btn-submit {
    color: #67c23a
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
}

.data-list li {
    margin: 15px;
    padding: 0 10px;
    width: 205px;
    height: 30px;
    background: #ecf5ff;
    line-height: 30px;
    font-size: 16px;
    color: #409eff;
    border: 1px solid #b3d8ff;
    border-radius: 10px;
    cursor: crosshair;
    text-align: center
}

.data-list li:hover,
.data-list li.selected {
    background: #409eff;
    border-color: #409eff;
    color: #fff;
}

.hover-g {
    cursor: pointer;
    opacity: 1;
    stroke-width: 4;
}

.remove-btn {
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    background: url('./img/delete-icon.png') no-repeat center;
    font-size: 14px;
    cursor: pointer;
    display: none;
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
<script src="library/jquery.min.js"></script>
<script src="library/svg.min.js"></script>
	<script>
var json= '\
{\
  "contentss": [\
       {"one": "效率()","two": "ㄌㄩˋ","three": "率()先","four": "ㄕㄨㄞˋ"},\{"one": "方便()","two": "ㄅ一ㄢˋ","three": "便()宜","four": "ㄆㄧㄢˊ"},\
       {"one": "跌倒()","two": "ㄉㄠˇ","three": "倒()退","four": "ㄉㄠˋ"},\{"one":  "假()髮","two":"ㄐㄧㄚˇ","three": "暑假()","four": "ㄐㄧㄚˋ"},\
       {"one": "依山傍()水","two": "ㄅㄤˋ","three": "傍()晚","four": "ㄅㄤ"},\{"one": "不切()實際 ","two": "ㄑㄧㄝˋ","three": "切()斷","four": "ㄑㄧㄝ"},\
       {"one": "出奇制勝()","two": "ㄕㄥˋ","three": "勝()任","four": "ㄕㄥ"},\{"one": "試卷()","two": "ㄐㄩㄢˋ","three": "髮卷()","four": "ㄐㄩㄢˇ"},\
       {"one": "談吐()","two": "ㄊㄨˇ","three": "上吐()下瀉","four": "ㄊㄨˋ"},\{"one": "阻塞()","two": "ㄙㄜˋ","three": "要塞()","four": "ㄙㄞˋ"},\
       {"one": "塞()車 ","two": "ㄙㄞ","three": "邊塞()","four": "ㄙㄞˋ"},\{"one": "傳()播","two": "ㄔㄨㄢˊ","three": "傳()記","four": "ㄓㄨㄢˋ"},\
       {"one": "泥()巴 ","two": "ㄋㄧˊ","three": "泥()古不化 ","four": "ㄋㄧˋ"},\{"one": "炸()雞","two": "ㄓㄚˊ","three": "爆炸() ","four": "ㄓㄚˋ"},\
       {"one": "事在人為()","two": "ㄨㄟˊ","three": "為()民服務","four": "ㄨㄟˋ"},\{"one": "當()場 ","two": "ㄉㄤ","three": "典當()","four": "ㄉㄤˋ"},\
       {"one": "礦石() ","two": "ㄕˊ","three": "公石()","four": "ㄉㄢˋ"},\{"one": "縫()紉","two": "ㄈㄥˊ","three": "裂縫()","four": "ㄈㄥˋ"},\
       {"one": "宣傳() ","two": "ㄔㄨㄢˊ","three": "自傳()","four": "ㄓㄨㄢˋ"},\{"one": "婀娜()","two": "ㄋㄨㄛˊ","three": "安娜()","four": "ㄋㄚˋ"}\
              ]\
}\
';
var jsonS='\
{\
  "contents": [\
       {"one": "龍","two": "ㄌㄨㄥˊ"},\{"one": "八卦","two": "ㄅㄚㄍㄨㄚˋ"},\{"one": "杯筊","two": "ㄅㄟㄐㄧㄠˇ"},\
       {"one": "木魚","two": "ㄇㄨˋㄩˊ"},\{"one": "鳳凰","two": "ㄈㄥˋㄏㄨㄤˊ"},\{"one": "燈籠","two": "ㄉㄥㄌㄨㄥˊ"},\
       {"one": "跳加官","two": "ㄊㄧㄠˋㄐㄧㄚㄍㄨㄢ"},\{"one": "臉譜","two": "ㄌㄧㄢˇㄆㄨˇ"},\{"one": "麒麟","two": "ㄑㄧˊㄌㄧㄣˊ"},\
       {"one": "舞獅","two": "ㄨˇㄕ"},\{"one": "中國結","two": "ㄓㄨㄥㄍㄨㄛˊㄐㄧㄝˊ"},\{"one": "蒸籠","two": "ㄓㄥㄌㄨㄥˊ"},\
       {"one": "粽子","two": "ㄗㄨㄥˋㄗ˙"},\{"one": "帔","two": "ㄆㄟˋ"},\{"one": "篦","two": "ㄅㄧˋ"},\
       {"one": "弁","two": "ㄅㄧㄢˋ"},\{"one": "冕","two": "ㄇㄧㄢˇ"},\{"one": "鬟","two": "ㄏㄨㄢˊ"},\
       {"one": "笄","two": "ㄐㄧ"},\{"one": "髻","two": "ㄐㄧˋ"},\{"one": "釵","two": "ㄔㄞ"},\
       {"one": "簪","two": "ㄗㄢ"},\{"one": "襪","two": "ㄨㄚˋ"},\{"one": "馬尾","two": "ㄇㄚˇㄨㄟˇ"},\
       {"one": "馬靴","two": "ㄇㄚˇㄒㄩㄝ"},\{"one": "百褶裙","two": "ㄅㄞˇㄓㄜˊㄑㄩㄣˊ"},\{"one": "面具","two": "ㄇㄧㄢˋㄐㄩˋ"},\
       {"one": "木屐","two": "ㄇㄨˋㄐㄧ"},\{"one": "別針","two": "ㄅㄧㄝˊㄓㄣ"},\{"one": "髮夾","two": "ㄈㄚˇㄐㄧㄚˊ"},\
       {"one": "鳳冠","two": "ㄈㄥˋㄍㄨㄢ"},\{"one": "斗笠","two": "ㄉㄡˇㄌㄧˋ"},\{"one": "拉鍊","two": "ㄌㄚㄌㄧㄢˋ"},\
       {"one": "和服","two": "ㄏㄜˊㄈㄨˊ"},\{"one": "夾克","two": "ㄐㄧㄚˊㄎㄜˋ"},\{"one": "旗袍","two": "ㄑㄧˊㄆㄠˊ"},\
       {"one": "西裝","two": "ㄒㄧㄓㄨㄤ"},\{"one": "長袍","two": "ㄔㄤˊㄆㄠˊ"},\{"one": "燕尾服","two": " ㄧㄢˋㄨㄟˇㄈㄨˊ"},\
       {"one": "泳衣","two": "ㄩㄥˇㄧ"},\{"one": "貓","two": "ㄇㄠ"},\{"one": "蹼","two": "ㄆㄨˊ"},\
       {"one": "豹","two": "ㄅㄠˋ"},\{"one": "蟒","two": "ㄇㄤˇ"},\{"one": "鳧","two": "ㄈㄨˊ"},\
       {"one": "蹄","two": "ㄊㄧˊ"},\{"one": "鹿","two": "ㄌㄨˋ"},\{"one": "螺","two": "ㄌㄨㄛˊ"},\
       {"one": "驢","two": "ㄌㄩˊ"},\{"one": "鴿","two": "ㄍㄜ"},\{"one": "狗","two": "ㄍㄡˇ"},\
       {"one": "龜","two": "ㄍㄨㄟ"},\{"one": "鶴","two": "ㄏㄜˋ"},\{"one": "猴","two": "ㄏㄡˊ"},\
       {"one": "狐","two": "ㄏㄨˊ"},\{"one": "鵠","two": "ㄏㄨˊ"},\{"one": "虎","two": "ㄏㄨˇ"},\
       {"one": "獾","two": "ㄏㄨㄢ"},\{"one": "雞","two": "ㄐㄧ"},\{"one": "羌","two": "ㄑㄧㄤ"}\
  ]\
}\
';
</script>


<?php 
// 11111
$anw1=$_POST['code'];
$anw2=$_POST['code1'];
$anw3=$_POST['code2'];
$anw4=$_POST['code3'];
$anw5=$_POST['code4'];
$s1=$_POST['Anwone'];
$s2=$_POST['Anwtwo'];
$s3=$_POST['Anwthree'];
$s4=$_POST['Anwfour'];
$s5=$_POST['Anwfive'];
$s11=$_POST['Anwone2'];
$s21=$_POST['Anwtwo2'];
$s31=$_POST['Anwthree2'];
$s41=$_POST['Anwfour2'];
$s51=$_POST['Anwfive2'];

// 222222

$anw1_2=$_POST['code_2'];
$anw2_2=$_POST['code1_2'];
$anw3_2=$_POST['code2_2'];
$anw4_2=$_POST['code3_2'];
$anw5_2=$_POST['code4_2'];

$s1_2=$_POST['Anwone1'];
$s2_2=$_POST['Anwtwo1'];
$s3_2=$_POST['Anwthree1'];
$s4_2=$_POST['Anwfour1'];
$s5_2=$_POST['Anwfive1'];


$pc1_2=$_POST['picture1_1'];
$pc2_2=$_POST['picture2_2'];
$pc3_2=$_POST['picture3_3'];
$pc4_2=$_POST['picture4_4'];
$pc5_2=$_POST['picture5_5'];

$cho1=$_POST['choose1_1'];
$cho2=$_POST['choose2_2'];
$cho3=$_POST['choose3_3'];
$cho4=$_POST['choose4_4'];
$cho5=$_POST['choose5_5'];

//3333333333333333333
$qQ1=$_POST['c1'];
$qQ2=$_POST['c2'];
$qQ3=$_POST['c3'];
$qQ4=$_POST['c4'];
$qQ5=$_POST['c5'];
$qQ6=$_POST['c6'];
$qQ7=$_POST['c7'];
$qQ8=$_POST['c8'];
$qQ9=$_POST['c9'];
$qQ10=$_POST['c10'];
$w1=$_POST['ar1'];
$w2=$_POST['ar2'];
$w3=$_POST['ar3'];
$w4=$_POST['ar4'];
$w5=$_POST['ar5'];
$w6=$_POST['ar6'];
$w7=$_POST['ar7'];
$w8=$_POST['ar8'];
$w9=$_POST['ar9'];
$w10=$_POST['ar10'];
$bw1=$_POST['bar1'];
$bw2=$_POST['bar2'];
$bw3=$_POST['bar3'];
$bw4=$_POST['bar4'];
$bw5=$_POST['bar5'];
$bw6=$_POST['bar6'];
$bw7=$_POST['bar7'];
$bw8=$_POST['bar8'];
$bw9=$_POST['bar9'];
$bw10=$_POST['bar10'];
////444444444444444444444444444444444444444444444444
$qQ1_4=$_POST['cc1'];
$qQ2_4=$_POST['cc2'];
$qQ3_4=$_POST['cc3'];
$qQ4_4=$_POST['cc4'];
$qQ5_4=$_POST['cc5'];

$anw1_4=$_POST['ar1x'];
$anw2_4=$_POST['ar2x'];
$anw3_4=$_POST['ar3x'];
$anw4_4=$_POST['ar4x'];
$anw5_4=$_POST['ar5x'];

$qqQ1_4=$_POST['qq4_1'];
$qqQ2_4=$_POST['qq4_2'];
$qqQ3_4=$_POST['qq4_3'];
$qqQ4_4=$_POST['qq4_4'];
$qqQ5_4=$_POST['qq4_5'];
/////////55555555555555555555555
$qqQ1_5=$_POST['qq5_1'];
$qqQ2_5=$_POST['qq5_2'];
$qqQ3_5=$_POST['qq5_3'];
$qqQ4_5=$_POST['qq5_4'];
$qqQ5_5=$_POST['qq5_5'];
$qqQ6_5=$_POST['qq5_6'];
$qqQ7_5=$_POST['qq5_7'];
$qqQ8_5=$_POST['qq5_8'];
$qqQ9_5=$_POST['qq5_9'];
$qqQ10_5=$_POST['qq5_10'];
///5555右邊選項
$rqqQ1_5=$_POST['rqq5_1'];
$rqqQ2_5=$_POST['rqq5_2'];
$rqqQ3_5=$_POST['rqq5_3'];
$rqqQ4_5=$_POST['rqq5_4'];
$rqqQ5_5=$_POST['rqq5_5'];
///555 使用者
$rqxqQ1_5=$_POST['rqxq5_1'];
$rqxqQ2_5=$_POST['rqxq5_2'];
$rqxqQ3_5=$_POST['rqxq5_3'];
$rqxqQ4_5=$_POST['rqxq5_4'];
$rqxqQ5_5=$_POST['rqxq5_5'];
?>

<div data-role="page" id="ch_finish1">

<script>
var cart = JSON.parse ( jsonS ); 
<?php
$q1="$s1";
?>
var q1="<?php echo $q1; ?>";
<?php
$q2="$s2";
?>
var q2="<?php echo $q2; ?>";
<?php
$q3="$s3";
?>
var q3="<?php echo $q3; ?>";
<?php
$q4="$s4";
?>
var q4="<?php echo $q4; ?>";
<?php
$q5="$s5";
?>
var q5="<?php echo $q5; ?>";

<?php
$a1="$anw1";
?>
var a1="<?php echo $a1; ?>";
<?php
$a2="$anw2";
?>
var a2="<?php echo $a2; ?>";
<?php
$a3="$anw3";
?>
var a3="<?php echo $a3; ?>";
<?php
$a4="$anw4";
?>
var a4="<?php echo $a4; ?>";
<?php
$a5="$anw5";
?>
var a5="<?php echo $a5; ?>";
</script>


<?php
$q1score=0;
if( $anw1==$s11)
$q1score=$q1score+4;
if( $anw2==$s21)
$q1score=$q1score+4;
if( $anw3==$s31)
$q1score=$q1score+4;
if( $anw4==$s41)
$q1score=$q1score+4;
if( $anw5==$s51)
$q1score=$q1score+4;
?>


<h3 align="center" style="color: red">本大題拿了<?php echo $q1score ?>/20分</h3>
<h3 align="center">請拼出正確的注音</h3>
	<div data-role="header">
	</div>



<table  border="1" width="60%" align="center">
<tr>	
<th style="text-align:center">圖</th>		
<th style="text-align:center">原作答</th>
<th style="text-align:center">正確答案</th>
<th style="text-align:center">圖</th>		
<th style="text-align:center">原作答</th>
<th style="text-align:center">正確答案</th>
</tr>	

  <tr>
    <td  align=center>

<script>
document.write('<img class="cen" src="image/'+ q1 +'.jpg"height="100" width="150" >');
document.write("<p ; style='font-size:200%; text-align:center;'>"+cart.contents[q1].one+"</p>");
</script>
</td>
<td  align=center>
<font size="5"  Width="200"><?php echo"$anw1";?></font>
</td>
<td width="20%" align=center style="color: red">	
	<script>document.write("<p ; style='font-size:200%; text-align:center;'>"+cart.contents[q1].two+"</p>");</script>
</td>

    <td  align=center>
<script>	
document.write('<img class="cen" src="image/'+q2+'.jpg"height="100" width="150">')
document.write("<p style='font-size:200%;text-align:center;'>"+cart.contents[q2].one+"</p>");
</script>
</td>
<td align=center>
<font size="5"><?php echo"$anw2";?></font>
</td>
<td  width="20%" align=center style="color: red">
	<script>document.write("<p ; style='font-size:200%; text-align:center;'>"+cart.contents[q2].two+"</p>");</script>
</td>
</tr>
  <tr>
  <td  align=center>
<script>
document.write('<img class="cen" src="image/'+q3+'.jpg"height="100" width="150">')
document.write("<p style='font-size:200%;text-align:center;'>"+cart.contents[q3].one+"</p>");
</script>
</td>
<td align=center >
<font size="5"><?php echo"$anw3";?></font>
</td>
<td  width="20%" align=center style="color: red">
	<script>document.write("<p ; style='font-size:200%; text-align:center;'>"+cart.contents[q3].two+"</p>");</script>
</td>
  
  <td  align=center>
<script >
document.write('<img class="cen" src="image/'+q4+'.jpg"height="100" width="150">')
document.write("<p style='font-size:200%;text-align:center;'>"+cart.contents[q4].one+"</p>");
</script>
</td>
<td  align=center>
<font size="5"><?php echo"$anw4";?></font>
</td>
<td   width="20%" align=center style="color: red">
	<script>document.write("<p ; style='font-size:200%; text-align:center;'>"+cart.contents[q4].two+"</p>");</script>
</td>
</tr>

    <tr>
  <td  align=center>
<script >
document.write('<img class="cen" src="image/'+q5+'.jpg"height="100" width="150">')
document.write("<p style='font-size:200%;text-align:center;'>"+cart.contents[q5].one+"</p>");
</script>
</td>
<td  align=center>
<font size="5"><?php echo"$anw5";?></font>
</td>
<td  width="20%" align=center style="color: red">
	<script>document.write("<p ; style='font-size:200%; text-align:center;'>"+cart.contents[q5].two+"</p>");</script>
</td>
</tr>
</table>


	<div   align="center">
      <a href="#ch_finish2" class="a ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 8%;" data-transition="slide">下一題</a>  

    </div>

</div>






<!-- Start of second page22222222222222222222222222222222222222222222222222222222222222222222222222222222222222 -->
<script>
var cart2= JSON.parse ( jsonS ); 
<?php
$q1_2="$s1_2";
?>
var q1_2="<?php echo $q1_2; ?>";
<?php
$q2_2="$s2_2";
?>
var q2_2="<?php echo $q2_2; ?>";
<?php
$q3_2="$s3_2";
?>
var q3_2="<?php echo $q3_2; ?>";
<?php
$q4_2="$s4_2";
?>
var q4_2="<?php echo $q4_2; ?>";
<?php
$q5_2="$s5_2";
?>
var q5_2="<?php echo $q5_2; ?>";

<?php
$a1_2="$anw1_2";
?>
var a1_2="<?php echo $a1_2; ?>";
<?php
$a2_2="$anw2_2";
?>
var a2_2="<?php echo $a2_2; ?>";
<?php
$a3_2="$anw3_2";
?>
var a3_2="<?php echo $a3_2; ?>";
<?php
$a4_2="$anw4_2";
?>
var a4_2="<?php echo $a4_2; ?>";
<?php
$a5_2="$anw5_2";
?>
var a5_2="<?php echo $a5_2; ?>";



<?php
$p1_2="$pc1_2";
?>
var p1_2="<?php echo $p1_2; ?>";
<?php
$p2_2="$pc2_2";
?>
var p2_2="<?php echo $p2_2; ?>";
<?php
$p3_2="$pc3_2";
?>
var p3_2="<?php echo $p3_2; ?>";
<?php
$p4_2="$pc4_2";
?>
var p4_2="<?php echo $p4_2; ?>";
<?php
$p5_2="$pc5_2";
?>
var p5_2="<?php echo $p5_2; ?>";


<?php
$choo1="$cho1";
?>
var choo1="<?php echo $choo1; ?>";

<?php
$choo2="$cho2";
?>
var choo2="<?php echo $choo2; ?>";
<?php
$choo3="$cho3";
?>
var choo3="<?php echo $choo3; ?>";
<?php
$choo4="$cho4";
?>
var choo4="<?php echo $choo4; ?>";
<?php
$choo5="$cho5";
?>
var choo5="<?php echo $choo5; ?>";

</script>
<?php 
$q2score=0;
if($anw1_2==$s1_2)
$q2score=$q2score+4;
if($anw2_2==$s2_2)
$q2score=$q2score+4;
if($anw3_2==$s3_2)
$q2score=$q2score+4;
if($anw4_2==$s4_2)
$q2score=$q2score+4;
if($anw5_2==$s5_2)
$q2score=$q2score+4;
?>



<div data-role="page" id="ch_finish2">

<h3 align="center" style="color: red">本大題拿了<?php echo $q2score ?>/20分</h3>
<h3 align="center" >請選出與圖對應的選項</h3>
	<script type="text/javascript">
		document.write("<p class=time-text2>"+"1"+"."+cart2.contents[choo1].one+cart2.contents[choo1].two+"</p>");
		document.write("<p class=time-text2>"+"2"+"."+cart2.contents[choo2].one+cart2.contents[choo2].two+"</p>");
		document.write("<p class=time-text2>"+"3"+"."+cart2.contents[choo3].one+cart2.contents[choo3].two+"</p>");
		document.write("<p class=time-text2>"+"4"+"."+cart2.contents[choo4].one+cart2.contents[choo4].two+"</p>");
		document.write("<p class=time-text2>"+"5"+"."+cart2.contents[choo5].one+cart2.contents[choo5].two+"</p>");
	</script>

<table  border="1" width="50%" align="center">
<tr>	
<th style="text-align:center">圖</th>		
<th style="text-align:center">原作答</th>
<th style="text-align:center">正確答案</th>
<th style="text-align:center">圖</th>		
<th style="text-align:center">原作答</th>
<th style="text-align:center">正確答案</th>
</tr>	

<tr>
  <td  align=center>
<script>document.write('<img src="image/'+p1_2+'.jpg"height="150" width="200"><br>')</script>	
 </td>
 <td  align=center>
 	<script>document.write(a1_2)</script>
</td>
<td     align=center style="color: red">  <font size="5"><?php echo"$q1_2";?></font></td>
<td  align=center>
<script>document.write('<img src="image/'+p2_2+'.jpg"height="150" width="200"><br>')</script>	
   </td>
   <td  align=center>
   	<script>document.write(a2_2)</script>
</td>
<td align=center style="color: red"> <font size="5"><?php echo"$q2_2";?></font> </td>
</tr>
<tr>
  <td  align=center>
<script>document.write('<img src="image/'+p3_2+'.jpg"height="150" width="200"><br>')</script>	
  </td>
  <td  align=center>
  	<script>document.write(a3_2)</script>
</td>
<td align=center style="color: red"> <font size="5"><?php echo"$q3_2";?></font> </td>
<td  align=center>
<script> document.write('<img src="image/'+p4_2+'.jpg"height="150" width="200"><br>')</script>	
</td>
<td  align=center>
	<script>document.write(a4_2)</script>
</td>
<td align=center style="color: red"> <font size="5"><?php echo"$q4_2";?></font> </td>
</tr>
<tr>
  <td align=center>
<script>document.write('<img src="image/'+p5_2+'.jpg"height="150" width="200"><br>')</script>	
</td>
<td  align=center>
  <script>document.write(a5_2)</script>
</td>
<td align=center style="color: red"><font size="5"><?php echo"$q5_2";?></font> </td>
</tr>
</table>


	<div   align="center">
      <a href="#ch_finish1" class="a ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 8%;" data-transition="slide">上一題</a> 
      <a href="#ch_finish3" class="b ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 8%;" data-transition="slide">下一題</a>       
    </div>
</div>



<!-- Start of second page 3333333333333333333333333333333333333333333333333333333333333333333-->
<script>
<?php
$q_1="$qQ1";
?>
var q_1="<?php echo $q_1; ?>";

<?php
$q_2="$qQ2";
?>
var q_2="<?php echo $q_2; ?>";
<?php
$q_3="$qQ3";
?>
var q_3="<?php echo $q_3; ?>";
<?php
$q_4="$qQ4";
?>
var q_4="<?php echo $q_4; ?>";
<?php
$q_5="$qQ5";
?>
var q_5="<?php echo $q_5; ?>";

<?php
$q_6="$qQ6";
?>
var q_6="<?php echo $q_6; ?>";

<?php
$q_7="$qQ7";
?>
var q_7="<?php echo $q_7; ?>";
<?php
$q_8="$qQ8";
?>
var q_8="<?php echo $q_8; ?>";
<?php
$q_9="$qQ9";
?>
var q_9="<?php echo $q_9; ?>";
<?php
$q_10="$qQ10";
?>
var q_10="<?php echo $q_10; ?>";

<?php
$ww1="$w1";
?>
var ww1="<?php echo $ww1; ?>";

<?php
$ww2="$w2";
?>
var ww2="<?php echo $ww2; ?>";
<?php
$ww3="$w3";
?>
var ww3="<?php echo $ww3; ?>";
<?php
$ww4="$w4";
?>
var ww4="<?php echo $ww4; ?>";
<?php
$ww5="$w5";
?>
var ww5="<?php echo $ww5; ?>";

<?php
$ww6="$w6";
?>
var ww6="<?php echo $ww6; ?>";

<?php
$ww7="$w7";
?>
var ww7="<?php echo $ww7; ?>";
<?php
$ww8="$w8";
?>
var ww8="<?php echo $ww8; ?>";
<?php
$ww9="$w9";
?>
var ww9="<?php echo $ww9; ?>";
<?php
$ww10="$w10";
?>
var ww10="<?php echo $ww10; ?>";
var q3score=0;
if(ww1==q_1)
q3score=q3score+2;
if(ww2==q_2)
q3score=q3score+2;
if(ww3==q_3)
q3score=q3score+2;
if(ww4==q_4)
q3score=q3score+2;
if(ww5==q_5)
q3score=q3score+2;
if(ww6==q_6)
q3score=q3score+2;
if(ww7==q_7)
q3score=q3score+2;
if(ww8==q_8)
q3score=q3score+2;
if(ww9==q_9)
q3score=q3score+2;
if(ww10==q_10)
q3score=q3score+2;
</script>
<?php
$q3score=0;
if($w1==$qQ1)
$q3score=$q3score+2;
if($w2==$qQ2)
$q3score=$q3score+2;
if($w3==$qQ3)
$q3score=$q3score+2;
if($w4==$qQ4)
$q3score=$q3score+2;
if($w5==$qQ5)
$q3score=$q3score+2;
if($w6==$qQ6)
$q3score=$q3score+2;
if($w7==$qQ7)
$q3score=$q3score+2;
if($w8==$qQ8)
$q3score=$q3score+2;
if($w9==$qQ9)
$q3score=$q3score+2;
if($w10==$qQ10)
$q3score=$q3score+2;
?>

<div data-role="page" id="ch_finish3">
<h3 align="center" style="color: red">本大題拿了<?php echo $q3score ?>/20分</h3>
<h3 align="center">請選出正確的選項</h3>	

<table border="1" width="50%" align="center">
<th style="text-align:center">題目</th>
<th style="text-align:center">原作答</th>
<th style="text-align:center">正確答案</th>
  <tr>
     <td align=center><font size="5"><?php echo"$bw1";?></font> </td>
    <td align=center> 
  <font size="5">
    <script>document.write(q_1)</script>
    </font>
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w1";?></font> </td>
  </tr>

  <tr>
  <td align=center><font size="5"><?php echo"$bw2";?></font> </td>
    <td align=center> 
    	<font size="5">
    <script>document.write(q_2)</script>
</font>
    </td>
   <td align=center style="color: red"><font size="5"><?php echo"$w2";?></font> </td>
  </tr>


  <tr>
   <td align=center><font size="5"><?php echo"$bw3";?></font> </td>
    <td align=center> 
    	<font size="5">
   <script>document.write(q_3)</script>
   </font>
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w3";?></font> </td>
  </tr>


  <tr>
    <td align=center><font size="5"><?php echo"$bw4";?></font> </td>
    <td align=center> 
    <font size="5">
   <script>document.write(q_4)</script>
 </font>
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w4";?></font> </td>
  </tr>




  <tr>
     <td align=center><font size="5"><?php echo"$bw5";?></font> </td>
    <td align=center> 
 <font size="5">
    <script>document.write(q_5)</script>
</font>
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w5";?></font> </td>
  </tr>


  <tr>
    <td align=center><font size="5"><?php echo"$bw6";?></font> </td>
    <td align=center> 
    	<font size="5">
 <script>document.write(q_6)</script>
</font>
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w6";?></font> </td>
  </tr>





  <tr>
    <td align=center><font size="5"><?php echo"$bw7";?></font> </td>
    <td align=center> 
<font size="5">
   <script>document.write(q_7)</script>
</font>
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w7";?></font> </td>
  </tr>


  <tr>
    <td align=center><font size="5"><?php echo"$bw8";?></font> </td>
    <td align=center> 
    	<font size="5">
   <script>document.write(q_8)</script>
  </font>
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w8";?></font> </td>
  </tr>



  <tr>
     <td align=center><font size="5"><?php echo"$bw9";?></font> </td>
    <td align=center> 
<font size="5">
 <script>document.write(q_9)</script>
</font>
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w9";?></font> </td>
  </tr>


  <tr>
  <td align=center><font size="5"><?php echo"$bw10";?></font> </td>
    <td align=center> 
 <font size="5">
   <script>document.write(q_10)</script>
</font>
    </td>
<td align=center style="color: red"><font size="5"><?php echo"$w10";?></font> </td>
  </tr>

</table>


	<div   align="center">
      <a href="#ch_finish2" class="a ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 8%;" data-transition="slide">上一題</a> 
      <a href="#ch_finish4" class="b ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 8%;" data-transition="slide">下一題</a>       
    </div>
</div>





<!-- 444444444444444444444444444444444444444444444444444444444444 -->
<?php
$q4score=0;
if ($qQ1_4==$anw1_4) 
  $q4score=$q4score+4;
if ($qQ2_4==$anw2_4) 
  $q4score=$q4score+4;
if ($qQ3_4==$anw3_4) 
  $q4score=$q4score+4;
if ($qQ4_4==$anw4_4) 
  $q4score=$q4score+4;
if ($qQ5_4==$anw5_4) 
  $q4score=$q4score+4;
?>


<div data-role="page" id="ch_finish4">
<h3 align="center" style="color: red">本大題拿了<?php echo"$q4score"; ?>/20分</h3>
<h3 align="center">請選出正確的選項</h3>
	
<table  border="1" style="width:50%" align="center" >
<th style="text-align:center">題目</th>
<th style="text-align:center">原作答</th>
<th style="text-align:center">正確答案</th>
    <tr>  

  <td align=center style="width:60%"><font size="5" face="DFKai-sb"><?php echo"$qqQ1_4"; ?></font></td>  

   
      
<script type="text/javascript">
  document.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
</script>
  <td  align=center><font size="5">    

   <?php echo"$qQ1_4"; ?>  

   </font> </td> 
    <td  align=center style="color: red"><font size="5"> <?php echo"$anw1_4"; ?></font></td>
      </tr>
    <tr>
  <td align=center><font size="5"  face="DFKai-sb"><?php echo"$qqQ2_4"; ?></td>  
    
<td align=center> <font size="5"> 
   <?php echo"$qQ2_4"; ?>  
   </font> </td> 
    <td  align=center style="color: red"><font size="5"> <?php echo"$anw2_4"; ?></font></td>
    </tr>
   
    <tr>
  <td  align=center><font size="5"  face="DFKai-sb"><?php echo"$qqQ3_4"; ?></font></td>  
<td align=center> <font size="5">
    <?php echo"$qQ3_4"; ?> 
   </font> </td> 
    <td  align=center style="color: red"><font size="5"> <?php echo"$anw3_4"; ?></font></td>
        </tr>
 
    <tr>
  <td  align=center><font size="5"  face="DFKai-sb"><?php echo"$qqQ4_4"; ?></font></td>  
    <td align=center> <font size="5">
   <?php echo"$qQ4_4"; ?>    
   </font> </td> 
    <td  align=center style="color: red"><font size="5"> <?php echo"$anw4_4"; ?></font></td>
     </tr>
    <script type="text/javascript">document.write("<br>");</script>

    <tr>
  <td  align=center><font size="5"  face="DFKai-sb"><?php echo"$qqQ5_4"; ?></font></td>  
  
      <td align=center><font size="5">           
      <?php echo"$qQ5_4"; ?>
   </font> </td>
    <td  align=center style="color: red"><font size="5">   <?php echo"$anw5_4"; ?></font></td>
      </tr> 
  </table>






<div   align="center">
      <a href="#ch_finish3" class="a ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 8%;" data-transition="slide">上一題</a> 
      <a href="#ch_finish5" class="b ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 8%;" data-transition="slide">下一題</a>       
    </div>

</div>


<!-- 555555555555 -->
<script>
<?php
////左邊5個
$q1_5="$qqQ1_5";
?>
var q1_5="<?php echo $q1_5; ?>";
<?php
$q2_5="$qqQ2_5";
?>
var q2_5="<?php echo $q2_5; ?>";
<?php
$q3_5="$qqQ3_5";
?>
var q3_5="<?php echo $q3_5; ?>";
<?php
$q4_5="$qqQ4_5";
?>
var q4_5="<?php echo $q4_5; ?>";
<?php
$q5_5="$qqQ5_5";
?>
var q5_5="<?php echo $q5_5; ?>";
////右邊5個
<?php
$rq1_5="$rqqQ1_5";
?>
var rq1_5="<?php echo $rq1_5; ?>";
<?php
$rq2_5="$rqqQ2_5";
?>
var rq2_5="<?php echo $rq2_5; ?>";
<?php
$rq3_5="$rqqQ3_5";
?>
var rq3_5="<?php echo $rq3_5; ?>";
<?php
$rq4_5="$rqqQ4_5";
?>
var rq4_5="<?php echo $rq4_5; ?>";
<?php
$rq5_5="$rqqQ5_5";
?>
var rq5_5="<?php echo $rq5_5; ?>";
<?php
////正確答案
$q6_5="$qqQ6_5";
?>
var q6_5="<?php echo $q6_5; ?>";
<?php
$q7_5="$qqQ7_5";
?>
var q7_5="<?php echo $q7_5; ?>";
<?php
$q8_5="$qqQ8_5";
?>
var q8_5="<?php echo $q8_5; ?>";
<?php
$q9_5="$qqQ9_5";
?>
var q9_5="<?php echo $q9_5; ?>";
<?php
$q10_5="$qqQ10_5";
?>
var q10_5="<?php echo $q10_5; ?>";
</script>


<div data-role="page" id="ch_finish5">
	<?php
;
 $q5score=0;
if ($rqxqQ1_5==($qqQ1_5.""."="."".$qqQ6_5)) 
  $q5score=$q5score+4;
if ($rqxqQ2_5==($qqQ2_5.""."="."".$qqQ7_5)) 
  $q5score=$q5score+4;
if ($rqxqQ3_5==($qqQ3_5.""."="."".$qqQ8_5)) 
  $q5score=$q5score+4;
if ($rqxqQ4_5==($qqQ4_5.""."="."".$qqQ9_5)) 
  $q5score=$q5score+4;
if ($rqxqQ5_5==($qqQ5_5.""."="."".$qqQ10_5)) 
  $q5score=$q5score+4;
$total=$q1score+$q2score+$q3score+$q4score+$q5score;
?>
<h3 align="center" style="color: red">本大題拿了<?php echo"$q5score"; ?>/20分</h3>
<h3 align="center">請選出正確的選項</h3>
  <div role="main" class="ui-content">
   <div class="container">
    <a href="javascript:;" id="j-default" title="">顯示答案</a>
        <div id="draw" class="draw-container" style="pointer-events: none;">
            <div style="position: absolute" class="btn-group">
                
            </div>
            <ul class="question-list data-list">

            </ul>
            <ul class="answer-list data-list">

            </ul>

            <i class="remove-btn"></i>
        </div>
        <div class="result-container">
            <h3>您的答案是：</h3>
            <?php if($rqxqQ1_5!=undefined) echo($rqxqQ1_5) ;
                  echo '<br>';
                  if($rqxqQ2_5!=undefined) echo($rqxqQ2_5) ;
                  echo '<br>';
                  if($rqxqQ3_5!=undefined) echo($rqxqQ3_5) ;
                  echo '<br>';
                  if($rqxqQ4_5!=undefined) echo($rqxqQ4_5) ;
                  echo '<br>';
                  if($rqxqQ5_5!=undefined) echo($rqxqQ5_5) ;
             ?>
            <ul class="result-display"></ul>
        </div>
    </div>
    <div   align="center">
      
      <a href="#ch_finish4" class="b ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 8%;" data-transition="slide">上一題</a> 
      <a href="Topic.php"   data-ajax="false" class="b ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 8%;" data-transition="slide">回到首頁</a>        
    </div>
  </div><!-- /content -->

<script type="text/javascript">
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
                let item = '<li class="question-li" data-question=' + element.question + ' data-answer=' + element.answer + '>' + element.question + '</li>',
                    obj = {};
                obj.beginValue = element.question;
                obj.line = this.createLine();
                this.lineArr.push(obj)
                content.push(item);
            });
            $('.question-list').html(content)
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
            current.begin.y = $(this).offset().top - parentPosition.top -2 ;
            current.begin.x = $(this).offset().left - parentPosition.left  -372;
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
        if(!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/))$('.answer-list').on('mouseup', 'li', function (e) {
            let current = self.lineArr.find(el => {
                return el.beginValue == self.currentInfo.beginValue;
            });

            current.end.y = $(this).offset().top - parentPosition.top ;
            current.end.x = $(this).offset().left - parentPosition.left - 555;
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

        if(!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/))$(document).mouseup(function (e) {
            if (!$(e.target).is(".answer-li") && self.currentInfo.line) {
                self.currentInfo.line.hide();
                $("#draw")
                    .find(".question-li")
                    .removeClass("display-block-hover");
            }
        })
       if(!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/)) $('#draw').mousemove(function (e) {
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
       if(!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/)) line.click(function () {
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
       if(!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/)) line.mouseover(function () {
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
        if(!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/))line.mouseout(function () {
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
                obj.begin.y = _this.offset().top - parentPosition.top + 15;
                obj.begin.x = _this.offset().left - parentPosition.left +200;
                $(this).attr('data-selected', '');
                $('.result-display').html('')
                // obj.line.plot(obj.begin.x, obj.begin.y, obj.begin.x, obj.begin.y)
                //判断是否存在初始答案
                if (endValue && !flag) {
                    $('.answer-list li').each(function (params) {
                        if ($(this).html() == endValue) {
                            obj.end = {};

                            obj.end.y = $(this).offset().top - parentPosition.top + 15;
                            obj.end.x = $(this).offset().left - parentPosition.left +10;
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
    
const question = [{
            question: '1+1',
            answer: 2
        },
        {
            question: '2+2',
            answer: 4
        },
        {
            question: '3+3',
            answer: 5
        },
        {
            question: '4+4',
            answer: 3
        },
        {
            question: '5+5',
            answer: 1
        }
    ],

    answer = [1,2,3,4,5];
question[0].question=q1_5;
question[1].question=q2_5;
question[2].question=q3_5;
question[3].question=q4_5;
question[4].question=q5_5;
question[0].answer=q6_5;
question[1].answer=q7_5;
question[2].answer=q8_5;
question[3].answer=q9_5;
question[4].answer=q10_5;
answer[0]=rq1_5;
answer[1]=rq2_5;
answer[2]=rq3_5;
answer[3]=rq4_5;
answer[4]=rq5_5;
let questionObj = {
        data: question,
        type: 'question'
    },
    answerObj = {
        data: answer,
        type: 'answer'
    }
line.init(questionObj, answerObj)
</script>



<?php session_start(); ?>


<?php
date_default_timezone_set('Asia/Taipei');
$the_time=date("Y-m-d H:i:s");

include("mysql_connect.php");
$id = $_SESSION['username'];

$chinese_score_sql="insert into chinese_score (
username,total_score,now_time) 
values('$id','$total','$the_time')";
if(mysqli_query($link,$chinese_score_sql))
   echo "<script>console.log('nice');</script>" ;
 else
  echo "<script>console.log( 'fail' );</script>" ;
?>


</body>




