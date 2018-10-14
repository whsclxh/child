<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
</style>
<script src="jquery-3.3.1.min.js"></script>
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
	}
</script>
<?php
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
$pic1 = $_POST['picture1'];
$pic2 = $_POST['picture2'];
$pic3 = $_POST['picture3'];
$pic4 = $_POST['picture4'];
$pic5 = $_POST['picture5'];
$opt11 = $_POST['option11'];
$opt12 = $_POST['option12'];
$opt13 = $_POST['option13'];
$opt14 = $_POST['option14'];
$opt15 = $_POST['option15'];
$opt21 = $_POST['option21'];
$opt22 = $_POST['option22'];
$opt23 = $_POST['option23'];
$opt24 = $_POST['option24'];
$opt25 = $_POST['option25'];
$opt31 = $_POST['option31'];
$opt32 = $_POST['option32'];
$opt33 = $_POST['option33'];
$opt34 = $_POST['option34'];
$opt35 = $_POST['option35'];
$opt41 = $_POST['option41'];
$opt42 = $_POST['option42'];
$opt43 = $_POST['option43'];
$opt44 = $_POST['option44'];
$opt45 = $_POST['option45'];
$opt51 = $_POST['option51'];
$opt52 = $_POST['option52'];
$opt53 = $_POST['option53'];
$opt54 = $_POST['option54'];
$opt55 = $_POST['option55'];
$score=0;
if(($q1)==($anw1)){
	$score=$score+4;
}
if(($q2)==($anw2)){
	$score=$score+4;
}
if(($q3)==($anw3)){
	$score=$score+4;
}
if(($q4)==($anw4)){
	$score=$score+4;
}
if(($q5)==($anw5)){
	$score=$score+4;
}		
?>
<?php  echo "<h1>得分為:$score 分!</h1>";?>
<button onclick="correction()">按一下看正確答案!</button>
<form name="form1" method="POST">
<div class="ta">
<table border="1">		
<h2>請選擇正確的數量:</h2>
<tr>
<td></td>		
<td style="text-align:center">圖</td>		
<td style="text-align:center">原作答</td>
<td>正確答案</td>	
</tr>	
<tr>
<td>1.</td>		
<?php echo "<td class=\"a\"><script>pictures($anw1,$pic1);</script></td>"; ?>
<td>	
<label><input id="q11" name="question1" type="radio" disabled="disabled" <?php if($q1=="$opt11") echo "checked=checked" ?>><?php echo "<script>write($opt11);</script>";?></label>
<label><input id="q12" name="question1" type="radio" disabled="disabled" <?php if($q1=="$opt12") echo "checked=checked" ?>><?php echo "<script>write($opt12);</script>";?></label>
<label><input id="q13" name="question1" type="radio" disabled="disabled" <?php if($q1=="$opt13") echo "checked=checked" ?>><?php echo "<script>write($opt13);</script>";?></label>
<label><input id="q14" name="question1" type="radio" disabled="disabled" <?php if($q1=="$opt14") echo "checked=checked" ?>><?php echo "<script>write($opt14);</script>";?></label>
<label><input id="q15" name="question1" type="radio" disabled="disabled" <?php if($q1=="$opt15") echo "checked=checked" ?>><?php echo "<script>write($opt15);</script>";?></label>
</td>
<td><div id="aa1" style="text-align:center; color:red; display:none;"><?php echo "<script>write($anw1);</script>";?></div></td>		
</tr>
<tr>
<td>2.</td>		
<?php echo "<td class=\"a\"><script>pictures($anw2,$pic2);</script></td>"; ?>
<td>	
<label><input id="q21" name="question2" type="radio" disabled="disabled" <?php if($q2=="$opt21") echo "checked=checked" ?>><?php echo "<script>write($opt21);</script>";?></label>
<label><input id="q22" name="question2" type="radio" disabled="disabled" <?php if($q2=="$opt22") echo "checked=checked" ?>><?php echo "<script>write($opt22);</script>";?></label>
<label><input id="q23" name="question2" type="radio" disabled="disabled" <?php if($q2=="$opt23") echo "checked=checked" ?>><?php echo "<script>write($opt23);</script>";?></label>
<label><input id="q24" name="question2" type="radio" disabled="disabled" <?php if($q2=="$opt24") echo "checked=checked" ?>><?php echo "<script>write($opt24);</script>";?></label>
<label><input id="q25" name="question2" type="radio" disabled="disabled" <?php if($q2=="$opt25") echo "checked=checked" ?>><?php echo "<script>write($opt25);</script>";?></label>
</td>
<td><div id="aa2" style="text-align:center; color:red; display:none;"><?php echo "<script>write($anw2);</script>";?></div></td>		
</tr>		
<tr>
<td>3.</td>		
<?php echo "<td class=\"a\"><script>pictures($anw3,$pic3);</script></td>"; ?>
<td>	
<label><input id="q31" name="question3" type="radio" disabled="disabled" <?php if($q3=="$opt31") echo "checked=checked" ?>><?php echo "<script>write($opt31);</script>";?></label>
<label><input id="q32" name="question3" type="radio" disabled="disabled" <?php if($q3=="$opt32") echo "checked=checked" ?>><?php echo "<script>write($opt32);</script>";?></label>
<label><input id="q33" name="question3" type="radio" disabled="disabled" <?php if($q3=="$opt33") echo "checked=checked" ?>><?php echo "<script>write($opt33);</script>";?></label>
<label><input id="q34" name="question3" type="radio" disabled="disabled" <?php if($q3=="$opt34") echo "checked=checked" ?>><?php echo "<script>write($opt34);</script>";?></label>
<label><input id="q35" name="question3" type="radio" disabled="disabled" <?php if($q3=="$opt35") echo "checked=checked" ?>><?php echo "<script>write($opt35);</script>";?></label>
</td>
<td><div id="aa3" style="text-align:center; color:red; display:none;"><?php echo "<script>write($anw3);</script>";?></div></td>		
</tr>		
<tr>
<td>4.</td>		
<?php echo "<td class=\"a\"><script>pictures($anw4,$pic4);</script></td>"; ?>
<td>	
<label><input id="q41" name="question4" type="radio" disabled="disabled" <?php if($q4=="$opt41") echo "checked=checked" ?>><?php echo "<script>write($opt41);</script>";?></label>
<label><input id="q42" name="question4" type="radio" disabled="disabled" <?php if($q4=="$opt42") echo "checked=checked" ?>><?php echo "<script>write($opt42);</script>";?></label>
<label><input id="q43" name="question4" type="radio" disabled="disabled" <?php if($q4=="$opt43") echo "checked=checked" ?>><?php echo "<script>write($opt43);</script>";?></label>
<label><input id="q44" name="question4" type="radio" disabled="disabled" <?php if($q4=="$opt44") echo "checked=checked" ?>><?php echo "<script>write($opt44);</script>";?></label>
<label><input id="q45" name="question4" type="radio" disabled="disabled" <?php if($q4=="$opt45") echo "checked=checked" ?>><?php echo "<script>write($opt45);</script>";?></label>
</td>
<td><div id="aa4" style="text-align:center; color:red; display:none;"><?php echo "<script>write($anw4);</script>";?></div></td>		
</tr>		
<tr>
<td>1.</td>		
<?php echo "<td class=\"a\"><script>pictures($anw5,$pic5);</script></td>"; ?>
<td>	
<label><input id="q51" name="question5" type="radio" disabled="disabled" <?php if($q5=="$opt51") echo "checked=checked" ?>><?php echo "<script>write($opt51);</script>";?></label>
<label><input id="q52" name="question5" type="radio" disabled="disabled" <?php if($q5=="$opt52") echo "checked=checked" ?>><?php echo "<script>write($opt52);</script>";?></label>
<label><input id="q53" name="question5" type="radio" disabled="disabled" <?php if($q5=="$opt53") echo "checked=checked" ?>><?php echo "<script>write($opt53);</script>";?></label>
<label><input id="q54" name="question5" type="radio" disabled="disabled" <?php if($q5=="$opt54") echo "checked=checked" ?>><?php echo "<script>write($opt54);</script>";?></label>
<label><input id="q55" name="question5" type="radio" disabled="disabled" <?php if($q5=="$opt55") echo "checked=checked" ?>><?php echo "<script>write($opt55);</script>";?></label>
</td>
<td><div id="aa5" style="text-align:center; color:red; display:none;"><?php echo "<script>write($anw5);</script>";?></div></td>		
</tr>		
</table>				
</div>
</form>