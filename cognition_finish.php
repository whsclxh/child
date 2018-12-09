<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="cognitionq1_finish.js"></script>
<script type="text/javascript" src="cognitionq2_finish.js"></script>
<script type="text/javascript" src="cognitionq3_finish.js"></script>
<script type="text/javascript" src="cognitionq4_finish.js"></script>
<script type="text/javascript" src="cognitionq5_finish.js"></script>
<?php
//q1參數
require 'q1ramdon.php';
require 'q2ramdon.php';
require 'q3ramdon.php';
require 'q4ramdon.php';
require 'q5ramdon.php';
@$q1q11 = $_POST['q1question11'];
@$q1q12 = $_POST['q1question12'];
@$q1q21 = $_POST['q1question21'];
@$q1q22 = $_POST['q1question22'];
@$q1q31 = $_POST['q1question31'];
@$q1q32 = $_POST['q1question32'];
@$q1q41 = $_POST['q1question41'];
@$q1q42 = $_POST['q1question42'];
@$q1q51 = $_POST['q1question51'];
@$q1q52 = $_POST['q1question52'];
@$q1q1 = $_POST['q1question1'];
@$q1q2 = $_POST['q1question2']; 
@$q1q3 = $_POST['q1question3']; 
@$q1q4 = $_POST['q1question4']; 
@$q1q5 = $_POST['q1question5'];
$q1score=0;
//q1對答案
if(($q1q11)==($q1num1)){
	$q1score=$q1score+1;
}
if(($q1q12)==($q1num2)){
	$q1score=$q1score+1;
}
if(($q1q21)==($q1num3)){
	$q1score=$q1score+1;
}
if(($q1q22)==($q1num4)){
	$q1score=$q1score+1;
}
if(($q1q31)==($q1num5)){
	$q1score=$q1score+1;
}
if(($q1q32)==($q1num6)){
	$q1score=$q1score+1;
}
if(($q1q41)==($q1num7)){
	$q1score=$q1score+1;
}
if(($q1q42)==($q1num8)){
	$q1score=$q1score+1;
}
if(($q1q51)==($q1num9)){
	$q1score=$q1score+1;
}
if(($q1q52)==($q1num10)){
	$q1score=$q1score+1;
}
if(($q1num1)>($q1num2)){
	if(($q1q1)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q1)==2){
		$q1score=$q1score+2;
	}
}
if(($q1num3)>($q1num4)){
	if(($q1q2)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q2)==2){
		$q1score=$q1score+2;
	}
}
if(($q1num5)>($q1num6)){
	if(($q1q3)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q3)==2){
		$q1score=$q1score+2;
	}
}
if(($q1num7)>($q1num8)){
	if(($q1q4)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q4)==2){
		$q1score=$q1score+2;
	}
}
if(($q1num9)>($q1num10)){
	if(($q1q5)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q5)==2){
		$q1score=$q1score+2;
	}
}
//q2參數
@$q2q1 = $_POST['q2question1'];   //作答者的答案
@$q2q2 = $_POST['q2question2'];
@$q2q3 = $_POST['q2question3'];
@$q2q4 = $_POST['q2question4'];
//q2對答案
$q2score=0;
if(($q2q1)==($q2ca1)){
	$q2score=$q2score+5;
}
if(($q2q2)==($q2ca2)){
	$q2score=$q2score+5;
}
if(($q2q3)==($q2ca3)){
	$q2score=$q2score+5;
}
if(($q2q4)==($q2ca4)){
	$q2score=$q2score+5;
}
//q3參數
@$q3q1 = $_POST['q3question1'];
@$q3q2 = $_POST['q3question2']; 
@$q3q3 = $_POST['q3question3']; 
@$q3q4 = $_POST['q3question4']; 
@$q3q5 = $_POST['q3question5'];
$q3score=0;
//q3對答案
if($q3len1>$q3len2){
	if($q3q1==$q3len1){
		$q3score=$q3score+4;
	}
}else{
	if($q3q1==$q3len2){
		$q3score=$q3score+4;
	}
}
if($q3len3>$q3len4){
	if($q3q2==$q3len3){
		$q3score=$q3score+4;
	}
}else{
	if($q3q2==$q3len4){
		$q3score=$q3score+4;
	}
}
if($q3len5>$q3len6){
	if($q3q3==$q3len5){
		$q3score=$q3score+4;
	}
}else{
	if($q3q3==$q3len6){
		$q3score=$q3score+4;
	}
}
if($q3len7>$q3len9){
	if($q3q4==$q3len7){
		$q3score=$q3score+4;
	}
}else{
	if($q3q4==$q3len8){
		$q3score=$q3score+4;
	}
}
if($q3len9>$q3len10){
	if($q3q5==$q3len9){
		$q3score=$q3score+4;
	}
}else{
	if($q3q5==$q3len10){
		$q3score=$q3score+4;
	}
}
//q4參數
@$anw1=$_POST['q4anwser1'];
@$anw2=$_POST['q4anwser2'];
@$anw3=$_POST['q4anwser3'];
@$anw4=$_POST['q4anwser4'];
//q4對答案
$q4score=0;
if($q4qd1==0){
	if(($anw1==$q4qqpic1+1)&&($anw1!=null))$q4score=$q4score+5;
	$ca1=$q4qqpic1+1;
}else{
	if(($anw1==8-$q4qqpic1)&&($anw1!=null))$q4score=$q4score+5;
	$ca1=8-$q4qqpic1;
}
if($q4qd2==0){
	if(($anw2==$q4qqpic2)&&($anw2!=null))$q4score=$q4score+5;
	$ca2=$q4qqpic2;
}else{
	if(($anw2==7-$q4qqpic2)&&($anw2!=null))$q4score=$q4score+5;
	$ca2=7-$q4qqpic2;
}
if($q4d33==0){
	if(($anw3==$q4qqpic3+1)&&($anw3!=null))$q4score=$q4score+5;
	$ca3=$q4qqpic3+1;
}else{
	if(($anw3==8-$q4qqpic3)&&($anw3!=null))$q4score=$q4score+5;
	$ca3=8-$q4qqpic3;
}
if($q4d3==0){
	if(($anw4==$q4qqpic3+1)&&($anw4!=null))$q4score=$q4score+5;
	$ca4=$q4qqpic3+1;
}else{
	if(($anw4==8-$q4qqpic3)&&($anw4!=null))$q4score=$q4score+5;
	$ca4=8-$q4qqpic3;
}
//q5參數
@$q5anw1 = $_POST['q5question1'];
@$q5anw2 = $_POST['q5question2'];
@$q5anw3 = $_POST['q5question3'];
@$q5anw4 = $_POST['q5question4'];
$q5score=0;
//q5對答案
if($q5anw1<10&&$q5anw1!=null)$q5score=$q5score+5;
if($q5anw2<10&&$q5anw2!=null)$q5score=$q5score+5;
if($q5anw3<10&&$q5anw3!=null)$q5score=$q5score+5;
if($q5anw4<10&&$q5anw4!=null)$q5score=$q5score+5;
//總分
$totalscore=$q1score+$q2score+$q3score+$q4score+$q5score;
?>
<form name="form1" method="post">
	<div data-role="page" id="cognition_anwser">
	<div align="center" valign="middle">
		<h3 align="center" style="color: red">本次作答拿了<?php echo "$totalscore"; ?>/100分</h3>
		<a href="#cognition_anwser1" class="ui-btn" style="width: 10%;" data-transition="slide">來對答案吧!</a>
		</div>	
	</div>
	<div data-role="page" id="cognition_anwser1">
		<h3 align="center" style="color: red">拿了<?php echo "$q1score"; ?>/20分</h3>
		<table border="1" width="60%" align="center">
			<tr>
				<th style="text-align: center; width:90%" >圖</th>
				<th style="text-align: center;" width="5%">原作答</th>
				<th style="text-align: center;" width="5%">原作答</th>
				<th style="text-align: center;" width="5%">正確答案</th>
				<th style="text-align: center;" width="5%">正確答案</th>
			</tr>
			<tr>
				<?php echo "<td width=\"80%\"><script>q1pictures($q1num1,$q1pic1);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center; \"><input type=\"number\" id=\"q1q11\" name=\"q1question11\"  data-role=\"none\" value=\"$q1q11\" disabled></td>"; ?>
				<td width="%" style="text-align: center;"><input id="q1qq1" name="q1question1" type="radio" value="1" data-role="none" disabled <?php if($q1q1=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq11\" name=\"q1question11\"  data-role=\"none\" value=\"$q1num1\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq1" name="q1qquestion1" type="radio" disabled data-role="none" <?php if($q1num1>$q1num2) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1num2,$q1pic2);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q12\" name=\"q1question12\" data-role=\"none\" value=\"$q1q12\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq2" name="q1question1" type="radio" value="2" data-role="none" disabled <?php if($q1q1=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qqq12\" name=\"q1question12\"data-role=\"none\" value=\"$q1num2\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq2" name="q1qquestion1" type="radio" disabled data-role="none"<?php if($q1num2>$q1num1) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1num3,$q1pic3);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q21\" name=\"q1question21\" data-role=\"none\" value=\"$q1q21\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq3" name="q1question2" value="1" type="radio" disabled data-role="none" <?php if($q1q2=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq21\" name=\"q1question21\" data-role=\"none\" value=\"$q1num3\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq3" name="q1qquestion2" type="radio" disabled data-role="none" <?php if($q1num3>$q1num4) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1num4,$q1pic4);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q22\" name=\"q1question22\" data-role=\"none\" value=\"$q1q22\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq4" name="q1question2" type="radio" value="2" disabled data-role="none" <?php if($q1q2=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq22\" name=\"q1question22\" data-role=\"none\" value=\"$q1num4\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qqq4" name="q1qquestion2" type="radio" disabled data-role="none" <?php if($q1num4>$q1num3) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1num5,$q1pic5);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q31\" name=\"q1question31\" data-role=\"none\" value=\"$q1q31\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq5" name="q1question3" type="radio" value="1" disabled data-role="none" <?php if($q1q3=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq31\" name=\"q1question31\" data-role=\"none\" value=\"$q1num5\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qqq5" name="q1qquestion3" type="radio" disabled data-role="none" <?php if($q1num5>$q1num6) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1num6,$q1pic6);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q32\" name=\"q1question32\" data-role=\"none\" value=\"$q1q32\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq6" name="q1question3" type="radio" value="2" disabled data-role="none" <?php if($q1q3=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq32\" name=\"q1question32\" data-role=\"none\" value=\"$q1num6\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq6" name="q1qquestion3" type="radio" disabled data-role="none" <?php if($q1num6>$q1num5) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1num7,$q1pic7);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q41\" name=\"q1question41\" data-role=\"none\" value=\"$q1q41\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq7" name="q1question4" type="radio" value="1" disabled data-role="none" <?php if($q1q4=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq41\" name=\"q1question41\" data-role=\"none\" value=\"$q1num7\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq7" name="q1qquestion4" type="radio" disabled data-role="none" <?php if($q1num7>$q1num8) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1num8,$q1pic8);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q42\" name=\"q1question42\" data-role=\"none\" value=\"$q1q42\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq8" name="q1question4" type="radio" value="2" disabled data-role="none" <?php if($q1q4=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq42\" name=\"q1question42\" data-role=\"none\" value=\"$q1num8\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq8" name="q1qquestion4" type="radio" disabled data-role="none" <?php if($q1num8>$q1num7) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1num9,$q1pic9);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q51\" name=\"q1question51\" data-role=\"none\" value=\"$q1q51\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq9" name="q1question5" type="radio" value="1" disabled data-role="none" <?php if($q1q5=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq51\" name=\"q1question51\" data-role=\"none\" value=\"$q1num9\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq9" name="q1qquestion5" type="radio" disabled data-role="none" <?php if($q1num9>$q1num10) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1num10,$q1pic10);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q52\" name=\"q1question52\" data-role=\"none\" value=\"$q1q52\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq10" name="q1question5" type="radio" value="2" disabled data-role="none" <?php if($q1q5=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq52\" name=\"q1question52\" data-role=\"none\" value=\"$q1num10\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq10" name="q1qquestion5" type="radio" disabled data-role="none" <?php if($q1num10>$q1num9) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<div align="center">
			<a href="#cognition_anwser2" class="ui-btn" style="width: 5%;" data-transition="slide">下一題</a>
		</div>
		</div>

		<div data-role="page" id="cognition_anwser2">
		<h3 align="center" style="color: red">拿了<?php echo "$q2score"; ?>/20分</h3>
		<table border="1" style="margin: auto;">
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic1);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic2);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic3);</script></td>";?>
		</tr>
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic4);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic5);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic6);</script></td>";?>
		</tr>
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic7);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic8);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic9);</script></td>";?>
		</tr>
	</table>
	<table border="1" style="margin: auto;">
		<tr>
			<th style="text-align: center;">題目</th>
			<th style="text-align: center;">原作答</th>
			<th style="text-align: center;">正確答案</th>
		</tr>
		<tr>
			<td>
				<?php echo "1.在<script>setquestionname($a[$q2qf1])</script>的<script>writedirection($q2qf1,$d[0])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q1" name="question55" disabled="disabled" data-role="none" <?php if($q2q1=="$q2q1op1") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q1op1]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q2" name="question55" disabled="disabled" data-role="none" <?php if($q2q1=="$q2q1op2") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q1op2]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q3" name="question55" disabled="disabled" data-role="none" <?php if($q2q1=="$q2q1op3") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q1op3]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q4" name="question55" disabled="disabled" data-role="none" <?php if($q2q1=="$q2q1op4") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q1op4]);</script>"; ?></label></div>
			</td>
			<td>
					<div style="float: left;"><label><input type="radio" id="q11" name="question1" disabled="disabled" data-role="none" <?php if($q2ca1=="$q2q1op1") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q1op1]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q12" name="question1" disabled="disabled" data-role="none" <?php if($q2ca1=="$q2q1op2") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q1op2]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q13" name="question1" disabled="disabled" data-role="none" <?php if($q2ca1=="$q2q1op3") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q1op3]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q14" name="question1" disabled="disabled" data-role="none" <?php if($q2ca1=="$q2q1op4") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q1op4]);</script>"; ?></label></div>
				
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "2.在<script>setquestionname($a[$q2qf2])</script>的<script>writedirection($q2qf2,$d[1])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q5" name="question33" disabled="disabled" data-role="none" <?php if($q2q2=="$q2q2op1") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q2op1]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q6" name="question33" disabled="disabled" data-role="none" <?php if($q2q2=="$q2q2op2") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q2op2]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q7" name="question33" disabled="disabled" data-role="none" <?php if($q2q2=="$q2q2op3") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q2op3]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q8" name="question33" disabled="disabled" data-role="none" <?php if($q2q2=="$q2q2op4") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q2op4]);</script>"; ?></label></div>
			</td>
			<td>				
					<div style="float: left;"><label><input type="radio" id="q21" name="question2" disabled="disabled" data-role="none" <?php if($q2ca2=="$q2q2op1") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q2op1]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q22" name="question2" disabled="disabled" data-role="none" <?php if($q2ca2=="$q2q2op2") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q2op2]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q23" name="question2" disabled="disabled" data-role="none" <?php if($q2ca2=="$q2q2op3") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q2op3]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q24" name="question2" disabled="disabled" data-role="none" <?php if($q2ca2=="$q2q2op4") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q2op4]);</script>"; ?></label></div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "3.在<script>setquestionname($a[$q2qf3])</script>的<script>writedirection($q2qf3,$d[2])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q9"  name="question22" disabled="disabled" data-role="none" <?php if($q2q3=="$q2q3op1") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q3op1]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q10" name="question22" disabled="disabled" data-role="none" <?php if($q2q3=="$q2q3op2") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q3op2]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q11" name="question22" disabled="disabled" data-role="none" <?php if($q2q3=="$q2q3op3") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q3op3]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q12" name="question22" disabled="disabled" data-role="none" <?php if($q2q3=="$q2q3op4") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q3op4]);</script>"; ?></label></div>
			</td>
			<td>
					<div style="float: left;"><label><input type="radio" id="q31" name="question3" disabled="disabled" data-role="none" <?php if($q2ca3=="$q2q3op1") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q3op1]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q32" name="question3" disabled="disabled" data-role="none" <?php if($q2ca3=="$q2q3op2") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q3op2]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q33" name="question3" disabled="disabled" data-role="none" <?php if($q2ca3=="$q2q3op3") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q3op3]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q34" name="question3" disabled="disabled" data-role="none" <?php if($q2ca3=="$q2q3op4") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q3op4]);</script>"; ?></label></div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "4.在<script>setquestionname($a[$q2qf4])</script>的<script>writedirection($q2qf4,$d[3])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q13" name="question44" disabled="disabled" data-role="none" <?php if($q2q4=="$q2q4op1") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q4op1]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q14" name="question44" disabled="disabled" data-role="none" <?php if($q2q4=="$q2q4op2") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q4op2]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q15" name="question44" disabled="disabled" data-role="none" <?php if($q2q4=="$q2q4op3") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q4op3]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q16" name="question44" disabled="disabled" data-role="none" <?php if($q2q4=="$q2q4op4") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q4op4]);</script>"; ?></label></div>
			</td>
			<td>
					<div style="float: left;"><label><input type="radio" id="q41" name="question4" disabled="disabled" data-role="none" <?php if($q2ca4=="$q2q4op1") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q4op1]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q42" name="question4" disabled="disabled" data-role="none" <?php if($q2ca4=="$q2q4op2") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q4op2]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q43" name="question4" disabled="disabled" data-role="none" <?php if($q2ca4=="$q2q4op3") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q4op3]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q44" name="question4" disabled="disabled" data-role="none" <?php if($q2ca4=="$q2q4op4") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q2q4op4]);</script>"; ?></label></div>
			</td>
		</tr>
	</table>
	<div align="center">
		<a href="#cognition_anwser1" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
		<a href="#cognition_anwser3" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
	</div>
	</div>
	<div data-role="page" id="cognition_anwser3">
		<h3 align="center" style="color: red">拿了<?php echo "$q3score"; ?>/20分</h3>
		<table border="1" width="60%" align="center">
			<tr>
				<th style="text-align: center;">圖</th>
				<th style="text-align: center;">原作答</th>
				<th style="text-align: center;">正確答案</th>
			</tr>
			<tr>
				<?php echo "<td width=\"60%\"><script>q3pictures($q3pic1,$q3len1);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq1" name="question11" type="radio" value="1" disabled data-role="none" <?php if($q3q1=="$q3len1") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq1" name="qquestion1" type="radio" disabled data-role="none" <?php if($q3len1>$q3len2) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic1,$q3len2);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq2" name="question21" type="radio" value="2" disabled data-role="none" <?php if($q3q1=="$q3len2") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq2" name="qquestion1" type="radio" disabled data-role="none" <?php if($q3len2>$q3len1) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic2,$q3len3);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq3" name="question22" value="1" type="radio" disabled data-role="none" <?php if($q3q2=="$q3len3") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq3" name="qquestion2" type="radio" disabled data-role="none" <?php if($q3len3>$q3len4) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic2,$q3len4);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq4" name="question22" type="radio" value="2" disabled data-role="none" <?php if($q3q2=="$q3len4") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq4" name="qquestion2" type="radio" disabled data-role="none" <?php if($q3len4>$q3len3) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic3,$q3len5);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq5" name="question33" type="radio" value="1" disabled data-role="none" <?php if($q3q3=="$q3len5") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq5" name="qquestion3" type="radio" disabled data-role="none" <?php if($q3len5>$q3len6) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic3,$q3len6);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq6" name="question33" type="radio" value="2" disabled data-role="none" <?php if($q3q3=="$q3len6") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq6" name="qquestion3" type="radio" disabled data-role="none" <?php if($q3len6>$q3len5) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic4,$q3len7);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq7" name="question34" type="radio" value="1" disabled data-role="none" <?php if($q3q4=="$q3len7") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq7" name="qquestion4" type="radio" disabled data-role="none" <?php if($q3len7>$q3len8) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic4,$q3len8);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq8" name="question34" type="radio" value="2" disabled data-role="none" <?php if($q3q4=="$q3len8") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq8" name="qquestion4" type="radio" disabled data-role="none" <?php if($q3len8>$q3len7) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic5,$q3len9);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq9" name="question55" type="radio" value="1" disabled data-role="none" <?php if($q3q5=="$q3len9") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq9" name="qquestion5" type="radio" disabled data-role="none" <?php if($q3len9>$q3len10) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic5,$q3len10);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq10" name="question55" type="radio" value="2" disabled data-role="none" <?php if($q3q5=="$q3len10") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq10" name="qquestion5" type="radio" disabled data-role="none" <?php if($q3len10>$q3len9) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<div align="center">
		<a href="#cognition_anwser2" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
		<a href="#cognition_anwser4" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
	</div>
	</div>
	<div data-role="page" id="cognition_anwser4">
		<h3 align="center" style="color: red">拿了<?php echo "$q4score"; ?>/20分</h3>
		<div align="center">
	<table border="1">
		<tr>
			<td>
				<?php echo "<script>
					q4pictures($q4pic1);
		        	q4pictures($q4pic2);
					q4pictures($q4pic3);
					q4pictures($q4pic4);
					q4pictures($q4pic5);
					q4pictures($q4pic6);
					q4pictures($q4pic7);
					q4pictures($q4pic8);
				</script>";?>
			</td>
		</tr>
	</table>
</div>
<div align="center">
	<table border="1" width="70%">
		<tr>
			<th width="50%">原作答</th>
			<th width="50%">正解</th>
		</tr>
	</table>
	<table border="1" width="70%">
		<tr>
			<td colspan="2">
				(1)從<?php echo "<script>direction($q4qd1);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$q4qqpic1]);</script>";?>排在第
						<input type="number" id="aa1" name="aanwser1" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$anw1'";?>>個。
			</td>
			<td colspan="2">
				(1)從<?php echo "<script>direction($q4qd1);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$q4qqpic1]);</script>";?>排在第
						<input type="number" id="aa1" name="aanwser1" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$ca1'";?>>個。
			</td>
		</tr>
		<tr>
			<td>
				(2)從<?php echo "<script>direction($q4qd2);</script>";?>數起,第<?php echo "<script>w($q4qqpic2);</script>";?>個是
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="aa21" name="aaanwser2" disabled data-role="none" <?php if($anw2=="$q4qq1") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q4qq1]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa22" name="aaanwser2" disabled data-role="none" <?php if($anw2=="$q4qq2") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q4qq2]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa23" name="aaanwser2" disabled data-role="none" <?php if($anw2=="$q4qq3") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q4qq3]);</script>";?></label></div>。
			</td>
			<td>
				(2)從<?php echo "<script>direction($q4qd2);</script>";?>數起,第<?php echo "<script>w($q4qqpic2);</script>";?>個是
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="aa21" name="aanwser2" disabled data-role="none" <?php if($ca2=="$qq4qq1") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q4qq1]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa22" name="aanwser2" disabled data-role="none" <?php if($ca2=="$q4qq2") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q4qq2]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa23" name="aanwser2" disabled data-role="none" <?php if($ca2=="$q4qq3") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q4qq3]);</script>";?></label></div>。
			</td>
		</tr>
		<tr>
			<td colspan="2">
				(3)從<?php echo "<script>direction($q4d33);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$q4qqpic3]);</script>";?>排在第
				<input type="number" id="aa3" name="aanwser3" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$anw3'";?>>個,也可說是從<?php echo "<script>direction($q4d3);</script>";?>數起第
				<input type="number" id="aa4" name="aanwser4" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$anw4'";?>>個。
			</td>
			<td colspan="2">
				(3)從<?php echo "<script>direction($q4d33);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$q4qqpic3]);</script>";?>排在第
				<input type="number" id="aa3" name="aanwser3" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$ca3'";?>>個,也可說是從<?php echo "<script>direction($q4d3);</script>";?>數起第
				<input type="number" id="aa4" name="aanwser4" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$ca4'";?>>個。
			</td>
		</tr>
	</table>
</div>
	<div align="center">
		<a href="#cognition_anwser3" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
		<a href="#cognition_anwser5" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
	</div>
	</div>
	<div data-role="page" id="cognition_anwser5">
	<h3 align="center" style="color: red">拿了<?php echo "$q5score"; ?>/20分</h3>
	<table border="1" align="center">
	<tr>
		<th>題目</th>
		<th>原作答</th>
		<th>正確答案</th>
	</tr>
	<tr>
		<?php echo "<td><script>questionpictures($q5qpic1);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q11" name="qquestion12" disabled data-role="none" <?php echo "value=\"$q5o1pic1\"";?><?php if($q5anw1=="$q5o1pic1") echo "checked=checked";?>><?php echo "<script>insertp1($q5qpic1,1,$q5picture1[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q12" name="qquestion12" disabled data-role="none" <?php echo "value=\"$q5o1pic2\"";?><?php if($q5anw1=="$q5o1pic2") echo "checked=checked";?>><?php echo "<script>insertp1($q5qpic1,2,$q5picture1[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q13" name="qquestion12" disabled data-role="none" <?php echo "value=\"$q5o1pic3\"";?><?php if($q5anw1=="$q5o1pic3") echo "checked=checked";?>><?php echo "<script>insertp1($q5qpic1,3,$q5picture1[2]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q11" name="qquestion11" disabled data-role="none" <?php echo "value=\"$q5o1pic1\"";?><?php if($q5o1pic1<10) echo "checked=checked";?>><?php echo "<script>insertp1($q5qpic1,1,$q5picture1[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q12" name="qquestion11" disabled data-role="none" <?php echo "value=\"$q5o1pic2\"";?><?php if($q5o1pic2<10) echo "checked=checked";?>><?php echo "<script>insertp1($q5qpic1,2,$q5picture1[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q13" name="qquestion11" disabled data-role="none" <?php echo "value=\"$q5o1pic3\"";?><?php if($q5o1pic3<10) echo "checked=checked";?>><?php echo "<script>insertp1($q5qpic1,3,$q5picture1[2]);</script>"; ?></label></div>
		</td>	
	</tr>
	<tr>
		<?php echo "<td><script>questionpictures($q5qpic2);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q21" name="qquestion21" disabled data-role="none" <?php echo "value=\"$q5o2pic1\"";?><?php if($q5anw2=="$q5o2pic1") echo "checked=checked";?>><?php echo "<script>insertp2($q5qpic2,1,$q5picture2[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q22" name="qquestion21" disabled data-role="none" <?php echo "value=\"$q5o2pic2\"";?><?php if($q5anw2=="$q5o2pic2") echo "checked=checked";?>><?php echo "<script>insertp2($q5qpic2,2,$q5picture2[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q23" name="qquestion21" disabled data-role="none" <?php echo "value=\"$q5o2pic3\"";?><?php if($q5anw2=="$q5o2pic3") echo "checked=checked";?>><?php echo "<script>insertp2($q5qpic2,3,$q5picture2[2]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q21" name="qquestion22" disabled data-role="none" <?php echo "value=\"$q5o2pic1\"";?><?php if($q5o2pic1<10) echo "checked=checked";?>><?php echo "<script>insertp2($q5qpic2,1,$q5picture2[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q22" name="qquestion22" disabled data-role="none" <?php echo "value=\"$q5o2pic2\"";?><?php if($q5o2pic2<10) echo "checked=checked";?>><?php echo "<script>insertp2($q5qpic2,2,$q5picture2[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q23" name="qquestion22" disabled data-role="none" <?php echo "value=\"$q5o2pic3\"";?><?php if($q5o2pic3<10) echo "checked=checked";?>><?php echo "<script>insertp2($q5qpic2,3,$q5picture2[2]);</script>"; ?></label></div>
		</td>	
	</tr>
	<tr>
		<?php echo "<td><script>questionpictures($q5qpic3);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q31" name="qquestion31" disabled data-role="none" <?php echo "value=\"$q5o3pic1\"";?><?php if($q5anw3=="$q5o3pic1") echo "checked=checked";?>><?php echo "<script>insertp3($q5qpic3,1,$q5picture3[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q32" name="qquestion31" disabled data-role="none" <?php echo "value=\"$q5o3pic2\"";?><?php if($q5anw3=="$q5o3pic2") echo "checked=checked";?>><?php echo "<script>insertp3($q5qpic3,2,$q5picture3[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q33" name="qquestion31" disabled data-role="none" <?php echo "value=\"$q5o3pic3\"";?><?php if($q5anw3=="$q5o3pic3") echo "checked=checked";?>><?php echo "<script>insertp3($q5qpic3,3,$q5picture3[2]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q31" name="qquestion33" disabled data-role="none" <?php echo "value=\"$q5o3pic1\"";?><?php if($q5o3pic1<10) echo "checked=checked";?>><?php echo "<script>insertp3($q5qpic3,1,$q5picture3[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q32" name="qquestion33" disabled data-role="none" <?php echo "value=\"$q5o3pic2\"";?><?php if($q5o3pic2<10) echo "checked=checked";?>><?php echo "<script>insertp3($q5qpic3,2,$q5picture3[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q33" name="qquestion33" disabled data-role="none" <?php echo "value=\"$q5o3pic3\"";?><?php if($q5o3pic3<10) echo "checked=checked";?>><?php echo "<script>insertp3($q5qpic3,3,$q5picture3[2]);</script>"; ?></label></div>
		</td>	
	</tr>
	<tr>
		<?php echo "<td><script>questionpictures($q5qpic4);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q41" name="qquestion41" disabled data-role="none" <?php echo "value=\"$q5o4pic1\"";?><?php if($q5anw4=="$q5o4pic1") echo "checked=checked";?>><?php echo "<script>insertp4($q5qpic4,1,$q5picture4[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q42" name="qquestion41" disabled data-role="none" <?php echo "value=\"$q5o4pic2\"";?><?php if($q5anw4=="$q5o4pic2") echo "checked=checked";?>><?php echo "<script>insertp4($q5qpic4,2,$q5picture4[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q43" name="qquestion41" disabled data-role="none" <?php echo "value=\"$q5o4pic3\"";?><?php if($q5anw4=="$q5o4pic3") echo "checked=checked";?>><?php echo "<script>insertp4($q5qpic4,3,$q5picture4[2]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q41" name="qquestion44" disabled data-role="none" <?php echo "value=\"$q5o4pic1\"";?><?php if($q5o4pic1<10) echo "checked=checked";?>><?php echo "<script>insertp4($q5qpic4,1,$q5picture4[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q42" name="qquestion44" disabled data-role="none" <?php echo "value=\"$q5o4pic2\"";?><?php if($q5o4pic2<10) echo "checked=checked";?>><?php echo "<script>insertp4($q5qpic4,2,$q5picture4[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q43" name="qquestion44" disabled data-role="none" <?php echo "value=\"$q5o4pic3\"";?><?php if($q5o4pic3<10) echo "checked=checked";?>><?php echo "<script>insertp4($q5qpic4,3,$q5picture4[2]);</script>"; ?></label></div>
		</td>	
	</tr>
	</table>
		<div align="center">
			<a href="#cognition_anwser4" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="Topic.php" class="ui-btn" style="width: 5%; display: inline-block">回到首頁</a>
		</div>
	</div>
	</form>