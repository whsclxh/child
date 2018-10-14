<script type="text/javascript">
	function pictures(x,y){
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
			document.write('<img src="'+imgurl[y]+'">');
		}
	}
	function write(x){
		document.write(x);
	}
	
	function correction(){
	document.getElementById( "aa1" ).style.display = "";
	document.getElementById( "aa2" ).style.display = "";
	document.getElementById( "aa3" ).style.display = "";
	document.getElementById( "aa4" ).style.display = "";
	document.getElementById( "aa5" ).style.display = "";
	document.getElementById( "aa6" ).style.display = "";
	document.getElementById( "aa7" ).style.display = "";
	document.getElementById( "aa8" ).style.display = "";
	document.getElementById( "aa9" ).style.display = "";
	document.getElementById( "aa10" ).style.display = "";
	document.getElementById( "aa11" ).style.display = "";
	document.getElementById( "aa12" ).style.display = "";
	document.getElementById( "aa13" ).style.display = "";
	document.getElementById( "aa14" ).style.display = "";
	document.getElementById( "aa15" ).style.display = "";
	document.getElementById( "aa16" ).style.display = "";
	document.getElementById( "aa17" ).style.display = "";
	document.getElementById( "aa18" ).style.display = "";
	document.getElementById( "aa19" ).style.display = "";
	document.getElementById( "aa20" ).style.display = "";
	document.getElementById( "aa21" ).style.display = "";
	document.getElementById( "aa22" ).style.display = "";
	}
</script>
<?php
$q11 = $_POST['question11'];
$q12 = $_POST['question12'];
$q21 = $_POST['question21'];
$q22 = $_POST['question22'];
$q31 = $_POST['question31'];
$q32 = $_POST['question32'];
$q41 = $_POST['question41'];
$q42 = $_POST['question42'];
$q51 = $_POST['question51'];
$q52 = $_POST['question52'];
$q1 = $_POST['question1'];
$q2 = $_POST['question2']; 
$q3 = $_POST['question3']; 
$q4 = $_POST['question4']; 
$q5 = $_POST['question5'];
$anw1 = $_POST['anwser1'];
$anw2 = $_POST['anwser2'];
$anw3 = $_POST['anwser3'];
$anw4 = $_POST['anwser4'];
$anw5 = $_POST['anwser5'];
$anw6 = $_POST['anwser6'];
$anw7 = $_POST['anwser7'];
$anw8 = $_POST['anwser8'];
$anw9 = $_POST['anwser9'];
$anw10 = $_POST['anwser10'];
$pic1 = $_POST['picture1'];
$pic2 = $_POST['picture2'];
$pic3 = $_POST['picture3'];
$pic4 = $_POST['picture4'];
$pic5 = $_POST['picture5'];
$pic6 = $_POST['picture6'];
$pic7 = $_POST['picture7'];
$pic8 = $_POST['picture8'];
$pic9 = $_POST['picture9'];
$pic10 = $_POST['picture10'];
$score=0;
if(($q11)==($anw1)){
	$score=$score+1;
}
if(($q12)==($anw2)){
	$score=$score+1;
}
if(($q21)==($anw3)){
	$score=$score+1;
}
if(($q22)==($anw4)){
	$score=$score+1;
}
if(($q31)==($anw5)){
	$score=$score+1;
}
if(($q32)==($anw6)){
	$score=$score+1;
}
if(($q41)==($anw7)){
	$score=$score+1;
}
if(($q42)==($anw8)){
	$score=$score+1;
}
if(($q51)==($anw9)){
	$score=$score+1;
}
if(($q52)==($anw10)){
	$score=$score+1;
}
if(($anw1)>($anw2)){
	if(($q1)==1){
		$score=$score+1;
	}
}else{
	if(($q1)==2){
		$score=$score+1;
	}
}
if(($anw3)>($anw4)){
	if(($q2)==1){
		$score=$score+1;
	}
}else{
	if(($q2)==2){
		$score=$score+1;
	}
}
if(($anw5)>($anw6)){
	if(($q3)==1){
		$score=$score+1;
	}
}else{
	if(($q3)==2){
		$score=$score+1;
	}
}
if(($anw7)>($anw8)){
	if(($q4)==1){
		$score=$score+1;
	}
}else{
	if(($q4)==2){
		$score=$score+1;
	}
}
if(($anw9)>($anw10)){
	if(($q5)==1){
		$score=$score+1;
	}
}else{
	if(($q5)==2){
		$score=$score+1;
	}
}
echo "<h1>得分為:$score 分!</h1>";
echo "<button onclick=\"correction()\">按一下看正確答案!</button>";
?>
<form name="form1" method="post">
		<table border="1" width="100%">
			<tr>
				<td style="text-align: center;">圖</td>
				<td style="text-align: center;">原作答</td>
				<td style="text-align: center;">原作答</td>
				<td style="text-align: center;"><div id="aa21" style="display: none;">正確答案</div></td>
				<td style="text-align: center;"><div id="aa22" style="display: none;">正確答案</div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"80%\"><script>pictures($anw1,$pic1);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q11\" name=\"question11\" value=\"$q11\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq1" name="question1" type="radio" value="1" disabled <?php if($q1=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><div id=\"aa1\" style=\"text-align:center; color:red; display:none;\"><input type=\"number\" id=\"qq11\" name=\"qquestion11\" value=\"$anw1\" disabled></div></td>"; ?>
				<td width="5%" style="text-align: center;"><div id="aa2" style="text-align:center; display:none;"><input id="qqq1" name="qquestion1" type="radio" disabled <?php if($anw1>$anw2) echo "checked=checked" ?>></div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($anw2,$pic2);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q12\" name=\"question12\" value=\"$q12\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq2" name="question1" type="radio" value="2" disabled <?php if($q1=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><div id=\"aa3\" style=\"text-align:center; color:red; display:none;\"><input type=\"number\" id=\"qqq12\" name=\"qquestion12\" value=\"$anw2\" disabled></div></td>"; ?>
				<td width="5%" style="text-align: center;"><div id="aa4" style="text-align:center; display:none;"><input id="qqq2" name="qquestion1" type="radio" disabled <?php if($anw2>$anw1) echo "checked=checked" ?>></div></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="100%">
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($anw3,$pic3);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q21\" name=\"question21\" value=\"$q21\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq3" name="question2" value="1" type="radio" disabled <?php if($q2=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><div id=\"aa5\" style=\"text-align:center; color:red; display:none;\"><input type=\"number\" id=\"qq21\" name=\"qquestion21\" value=\"$anw3\" disabled></div></td>"; ?>
				<td width="5%" style="text-align: center;"><div id="aa6" style="text-align:center; display:none;"><input id="qqq3" name="qquestion2" type="radio" disabled <?php if($anw3>$anw4) echo "checked=checked" ?>></div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($anw4,$pic4);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q22\" name=\"question22\" value=\"$q22\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq4" name="question2" type="radio" value="2" disabled <?php if($q2=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><div id=\"aa7\" style=\"text-align:center; color:red; display:none;\"><input type=\"number\" id=\"qq22\" name=\"qquestion22\" value=\"$anw4\" disabled></div></td>"; ?>
				<td width="5%" style="text-align: center;"><div id="aa8" style="text-align:center; display:none;"><input id="qqq4" name="qquestion2" type="radio" disabled <?php if($anw4>$anw3) echo "checked=checked" ?>></div></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="100%">
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($anw5,$pic5);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q31\" name=\"question31\" value=\"$q31\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq5" name="question3" type="radio" value="1" disabled <?php if($q3=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><div id=\"aa9\" style=\"text-align:center; color:red; display:none;\"><input type=\"number\" id=\"qq31\" name=\"qquestion31\" value=\"$anw5\" disabled></div></td>"; ?>
				<td width="5%" style="text-align: center;"><div id="aa10" style="text-align:center; display:none;"><input id="qqq5" name="qquestion3" type="radio" disabled <?php if($anw5>$anw6) echo "checked=checked" ?>></div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($anw6,$pic6);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q32\" name=\"question32\" value=\"$q32\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq6" name="question3" type="radio" value="2" disabled <?php if($q3=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><div id=\"aa11\" style=\"text-align:center; color:red; display:none;\"><input type=\"number\" id=\"qq32\" name=\"qquestion32\" value=\"$anw6\" disabled></div></td>"; ?>
				<td width="5%" style="text-align: center;"><div id="aa12" style="text-align:center; display:none;"><input id="qqq6" name="qquestion3" type="radio" disabled <?php if($anw6>$anw5) echo "checked=checked" ?>></div></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="100%">
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($anw7,$pic7);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q41\" name=\"question41\" value=\"$q41\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq7" name="question4" type="radio" value="1" disabled <?php if($q4=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><div id=\"aa13\" style=\"text-align:center; color:red; display:none;\"><input type=\"number\" id=\"qq41\" name=\"qquestion41\" value=\"$anw7\" disabled></div></td>"; ?>
				<td width="5%" style="text-align: center;"><div id="aa14" style="text-align:center; display:none;"><input id="qqq7" name="qquestion4" type="radio" disabled <?php if($anw7>$anw8) echo "checked=checked" ?>></div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($anw8,$pic8);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q42\" name=\"question42\" value=\"$q42\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq8" name="question4" type="radio" value="2" disabled <?php if($q4=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><div id=\"aa15\" style=\"text-align:center; color:red; display:none;\"><input type=\"number\" id=\"qq42\" name=\"qquestion42\" value=\"$anw8\" disabled></div></td>"; ?>
				<td width="5%" style="text-align: center;"><div id="aa16" style="text-align:center; display:none;"><input id="qqq8" name="qquestion4" type="radio" disabled <?php if($anw8>$anw7) echo "checked=checked" ?>></div></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="100%">
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($anw9,$pic9);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q51\" name=\"question51\" value=\"$q51\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq9" name="question5" type="radio" value="1" disabled <?php if($q5=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><div id=\"aa17\" style=\"text-align:center; color:red; display:none;\"><input type=\"number\" id=\"qq51\" name=\"qquestion51\" value=\"$anw9\" disabled></div></td>"; ?>
				<td width="5%" style="text-align: center;"><div id="aa18" style="text-align:center; display:none;"><input id="qqq9" name="qquestion5" type="radio" disabled <?php if($anw9>$anw10) echo "checked=checked" ?>></div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($anw10,$pic10);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q52\" name=\"question52\" value=\"$q52\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq10" name="question5" type="radio" value="2" disabled <?php if($q5=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><div id=\"aa19\" style=\"text-align:center; color:red; display:none;\"><input type=\"number\" id=\"qq52\" name=\"qquestion52\" value=\"$anw10\" disabled></div></td>"; ?>
				<td width="5%" style="text-align: center;"><div id="aa20" style="text-align:center; display:none;"><input id="qqq10" name="qquestion5" type="radio" disabled <?php if($anw10>$anw9) echo "checked=checked" ?>></div></td>
			</tr>
		</table>
	</form>