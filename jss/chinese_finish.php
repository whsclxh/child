<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="test3.js"></script>
<style type="text/css">

	    .time-text2 {
      text-align: center;   
      margin-left: 180px;      
      display: inline-block;
      width:20%;     
      padding: 1rem;
      border-radius: 50px ;
      border: 2px solid red;
      color: black;
      font-size: 20px;
      font-weight: 900;
    }
</style>
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
var q1score=0;
if(a1==cart.contents[q1].two)
q1score=q1score+4;
if(a2==cart.contents[q2].two)
q1score=q1score+4;
if(a3==cart.contents[q3].two)
q1score=q1score+4;
if(a4==cart.contents[q4].two)
q1score=q1score+4;
if(a5==cart.contents[q5].two)
q1score=q1score+4;
</script>


<h3 align="center" style="color: red">本大題拿了<script>document.write(q1score)</script>/20分</h3>
<h3 align="center">請拼出正確的注音</h3>
	<div data-role="header">
	</div>



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

<script>
document.write('<img class="cen" src="image/'+ q1 +'.jpg"height="100" width="150" >');
document.write("<p ; style='font-size:200%; text-align:center;'>"+cart.contents[q1].one+"</p>");
</script>
</td>
<td align=center>
<font size="5"><?php echo"$anw1";?></font>
</td>
<td align=center style="color: red">	
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
<td align=center style="color: red">
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
<td align=center style="color: red">
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
<td align=center style="color: red">
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
<td align=center style="color: red">
	<script>document.write("<p ; style='font-size:200%; text-align:center;'>"+cart.contents[q5].two+"</p>");</script>
</td>
</tr>
</table>


	<div   align="center">
      <a href="#ch_finish2" class="ui-btn" style="width: 5%;" data-transition="slide">下一題</a>        
    </div>

</div>






<!-- Start of second page -->
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

var q2score=0;
if(a1_2==cart.contents[q1].two)
q2score=q2score+4;
if(a2_2==cart.contents[q2_2].two)
q2score=q2score+4;
if(a3_2==cart.contents[q3_2].two)
q2score=q2score+4;
if(a4_2==cart.contents[q4_2].two)
q2score=q2score+4;
if(a5_2==cart.contents[q5_2].two)
q2score=q2score+4;
</script>
<div data-role="page" id="ch_finish2">
<h3 align="center" style="color: red">本大題拿了<script>document.write(q2score)</script>/20分</h3>
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

</td>
<td align=center style="color: red"> <font size="5"><?php echo"$q2_2";?></font> </td>
</tr>
<tr>
  <td  align=center>
<script>document.write('<img src="image/'+p3_2+'.jpg"height="150" width="200"><br>')</script>	
  </td>
  <td  align=center>

</td>
<td align=center style="color: red"> <font size="5"><?php echo"$q3_2";?></font> </td>
<td  align=center>
<script> document.write('<img src="image/'+p4_2+'.jpg"height="150" width="200"><br>')</script>	
</td>
<td  align=center>

</td>
<td align=center style="color: red"> <font size="5"><?php echo"$q4_2";?></font> </td>
</tr>
<tr>
  <td align=center>
<script>document.write('<img src="image/'+p5_2+'.jpg"height="150" width="200"><br>')</script>	
</td>
<td  align=center>

</td>
<td align=center style="color: red"><font size="5"><?php echo"$q5_2";?></font> </td>
</tr>
</table>



	<div   align="center">
      <a href="#ch_finish1" class="ui-btn" style="width: 5%;" data-transition="slide">上一題</a> 
      <a href="#ch_finish3" class="ui-btn" style="width: 5%;" data-transition="slide">下一題</a>       
    </div>

</div>


<!-- Start of second page 3333333333333333333333333333333333333333333333333333333333333333333-->
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

<div data-role="page" id="ch_finish3">
<h3 align="center" style="color: red">本大題拿了<script>document.write(q3score)</script>/20分</h3>
<h3 align="center">請選出正確的選項</h3>
	

<table border="1" width="50%" align="center">
<th style="text-align:center">題目</th>
<th style="text-align:center">原作答</th>
<th style="text-align:center">正確答案</th>
  <tr>
     <td align=center><font size="5"><?php echo"$bw1";?></font> </td>
    <td> 
    
    <script type="text/javascript">document.write(qQ1);</script>
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w1";?></font> </td>
  </tr>

  <tr>
  <td align=center><font size="5"><?php echo"$bw2";?></font> </td>
    <td> 
    
    </td>
   <td align=center style="color: red"><font size="5"><?php echo"$w2";?></font> </td>
  </tr>



  <tr>
   <td align=center><font size="5"><?php echo"$bw3";?></font> </td>
    <td> 
   
   
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w3";?></font> </td>
  </tr>


  <tr>
    <td align=center><font size="5"><?php echo"$bw4";?></font> </td>
    <td> 
    
   
 
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w4";?></font> </td>
  </tr>




  <tr>
     <td align=center><font size="5"><?php echo"$bw5";?></font> </td>
    <td> 
 
    

    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w5";?></font> </td>
  </tr>


  <tr>
    <td align=center><font size="5"><?php echo"$bw6";?></font> </td>
    <td> 
 

    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w6";?></font> </td>
  </tr>





  <tr>
    <td align=center><font size="5"><?php echo"$bw7";?></font> </td>
    <td> 

   
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w7";?></font> </td>
  </tr>


  <tr>
    <td align=center><font size="5"><?php echo"$bw8";?></font> </td>
    <td> 
   
  
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w8";?></font> </td>
  </tr>



  <tr>
     <td align=center><font size="5"><?php echo"$bw9";?></font> </td>
    <td> 

 
    </td>
    <td align=center style="color: red"><font size="5"><?php echo"$w9";?></font> </td>
  </tr>


  <tr>
  <td align=center><font size="5"><?php echo"$bw10";?></font> </td>
    <td> 
 

   
    </td>
<td align=center style="color: red"><font size="5"><?php echo"$w10";?></font> </td>
  </tr>

</table>


	<div   align="center">
      <a href="#ch_finish2" class="ui-btn" style="width: 5%;" data-transition="slide">上一題</a> 
      <a href="#ch_finish4" class="ui-btn" style="width: 5%;" data-transition="slide">下一題</a>       
    </div>
</div>





<!-- 444444444444444444444444444444444444444444444444444444444444 -->




<div data-role="page" id="ch_finish4">
<h3 align="center" style="color: red">本大題拿了<script>document.write(q4score)</script>/20分</h3>
<h3 align="center">請選出正確的選項</h3>
	
<table  border="1" style="width:50%" align="center" >
<th style="text-align:center">題目</th>
<th style="text-align:center">原作答</th>
<th style="text-align:center">正確答案</th>
    <tr>  

  <td  style="width:30%"><font size="20"  face="DFKai-sb"><script>for(var i=0;i<5;i++){               
                if(i==xx){
        document.write(arr[x][i][0]+"(&nbsp;&nbsp;&nbsp;&nbsp;)");                     
        }
        else{
          if(arr[x][i][0]==null){
          }
          else
        document.write(arr[x][i][0]+"("+arr[x][i][1]+")");    
            } 
      }</script></font></td>  

   
      
<script type="text/javascript">
  document.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
</script>
  <td >    

    <input name="cc1" id="gg11" type="radio"  style="zoom: 1.5"  data-role="none"><font size="20" face="DFKai-sb"><script>document.write(rand2[0])</script></font>
    <input name="cc1" id="gg2" type="radio"   style="zoom: 1.5"  data-role="none"><font size="20" face="DFKai-sb"><script>document.write(rand2[1])</script></font>   

    </td> 
    <td></td>
      </tr>
    <tr>
  <td  Width="250"><font size="20"  face="DFKai-sb"><script>for(var i=0;i<5;i++){
               
                if(i==xx){

    //             if(arr[x][i][1].indexOf("ㄕ")!=-1){
    //              var q=arr[x][i][1].indexOf("ㄕ");
        //   document.write(arr[x][i][0]+"(&nbsp;&nbsp;&nbsp;&nbsp;)");
        // }

        // else{
        document.write(arr[x][i][0]+"(&nbsp;&nbsp;&nbsp;&nbsp;)");                     
        // }
        }

        else{
          if(arr[x][i][0]==null){
          }
          else
        document.write(arr[x][i][0]+"("+arr[x][i][1]+")");    
            } 
      }</script></font></td>  
    
<td>  
    <input name="cc2" id="gg3" type="radio"  style="zoom: 1.5"  data-role="none"><font size="20" face="DFKai-sb"><script>document.write(rand2[0])</script></font>
    <input name="cc2" id="gg4" type="radio"  style="zoom: 1.5"  data-role="none"><font size="20" face="DFKai-sb"><script>document.write(rand2[1])</script></font>    
    </td> 
    <td></td>
    </tr>
   
    <tr>
  <td  Width="250"><font size="20"  face="DFKai-sb"><script>for(var i=0;i<5;i++){
               
                if(i==xx){


        document.write(arr[x][i][0]+"(&nbsp;&nbsp;&nbsp;&nbsp;)");                     
     
        }

        else{
          if(arr[x][i][0]==null){
          }
          else
        document.write(arr[x][i][0]+"("+arr[x][i][1]+")");    
            } 
      }</script></font></td>  
<td> 
    <input name="cc3" id="gg5" type="radio"  style="zoom: 1.5"  data-role="none" ><font size="20" face="DFKai-sb"><script>document.write(rand2[0])</script></font>
    <input name="cc3" id="gg6" type="radio"  style="zoom: 1.5"  data-role="none"><font size="20" face="DFKai-sb"><script>document.write(rand2[1])</script></font>    
    </td> 
    <td></td>
        </tr>
 
    <tr>
  <td  Width="250"><font size="20"  face="DFKai-sb"><script>for(var i=0;i<5;i++){
               
                if(i==xx){
        document.write(arr[x][i][0]+"(&nbsp;&nbsp;&nbsp;&nbsp;)");                     
        }

        else{
          if(arr[x][i][0]==null){
          }
          else
        document.write(arr[x][i][0]+"("+arr[x][i][1]+")");    
            } 
      }</script></font></td>  
    <td> 
    <input name="cc4" id="gg7" type="radio"  style="zoom: 1.5"  data-role="none"><font size="20" face="DFKai-sb"><script>document.write(rand2[0])</script></font>
    <input name="cc4" id="gg8" type="radio"  style="zoom: 1.5"  data-role="none"><font size="20" face="DFKai-sb"><script>document.write(rand2[1])</script></font>    
    </td> 
    <td></td>
     </tr>
    <script type="text/javascript">document.write("<br>");</script>



    <tr>
  <td  Width="250"><font size="20"  face="DFKai-sb"><script>for(var i=0;i<5;i++){
               
                if(i==xx){

  
        document.write(arr[x][i][0]+"(&nbsp;&nbsp;&nbsp;&nbsp;)");                     

        }

        else{
          if(arr[x][i][0]==null){
          }
          else
        document.write(arr[x][i][0]+"("+arr[x][i][1]+")");    
            } 
      }</script></font></td>  
  
      <td>           
    <input name="cc5" id="gg9" type="radio"  style="zoom: 1.5"  data-role="none"><font size="20" face="DFKai-sb"><script>document.write(rand2[0])</script></font>
    <input name="cc5" id="gg10" type="radio" style="zoom: 1.5"  data-role="none"><font size="20" face="DFKai-sb"><script>document.write(rand2[1])</script></font>    
    </td>
    <td></td>
      </tr> 
  </table>






<div   align="center">
      <a href="#ch_finish3" class="ui-btn" style="width: 5%;" data-transition="slide">上一題</a> 
      <a href="#ch_finish5" class="ui-btn" style="width: 5%;" data-transition="slide">下一題</a>       
    </div>
	

</div>


</body>