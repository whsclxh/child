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
	function correction(){
	document.getElementById( "a1" ).style.display = "";
	document.getElementById( "a2" ).style.display = "";
	document.getElementById( "a3" ).style.display = "";
	document.getElementById( "a4" ).style.display = "";
	document.getElementById( "a5" ).style.display = "";
	document.getElementById( "a6" ).style.display = "";
	document.getElementById( "a7" ).style.display = "";
	document.getElementById( "a8" ).style.display = "";
	document.getElementById( "a9" ).style.display = "";
	document.getElementById( "a10" ).style.display = "";
	document.getElementById( "a11" ).style.display = "";
	document.getElementById( "a12" ).style.display = "";
	document.getElementById( "a13" ).style.display = "";
	document.getElementById( "a14" ).style.display = "";
	document.getElementById( "a15" ).style.display = "";
	document.getElementById( "a16" ).style.display = "";
	document.getElementById( "a17" ).style.display = "";
	document.getElementById( "a18" ).style.display = "";
	document.getElementById( "a19" ).style.display = "";
	document.getElementById( "a20" ).style.display = "";
	}
</script>
<?php
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
$anw11 = $_POST['anwser11'];
$anw12 = $_POST['anwser12'];
$anw13 = $_POST['anwser13'];
$anw14 = $_POST['anwser14'];
$anw15 = $_POST['anwser15'];
$anw16 = $_POST['anwser16'];
$anw17 = $_POST['anwser17'];
$anw18 = $_POST['anwser18'];
$anw19 = $_POST['anwser19'];
$anw20 = $_POST['anwser20'];
$q1=$_POST['anw1'];
$q2=$_POST['anw2'];
$q3=$_POST['anw3'];
$q4=$_POST['anw4'];
$q5=$_POST['anw5'];
$q6=$_POST['anw6'];
$q7=$_POST['anw7'];
$q8=$_POST['anw8'];
$q9=$_POST['anw9'];
$q10=$_POST['anw10'];
$q11=$_POST['anw11'];
$q12=$_POST['anw12'];
$q13=$_POST['anw13'];
$q14=$_POST['anw14'];
$q15=$_POST['anw15'];
$q16=$_POST['anw16'];
$q17=$_POST['anw17'];
$q18=$_POST['anw18'];
$q19=$_POST['anw19'];
$q20=$_POST['anw20'];
$pic1 = $_POST['picture1'];
$pic2 = $_POST['picture2'];
$pic3 = $_POST['picture3'];
$pic4 = $_POST['picture4'];
$pic5 = $_POST['picture5'];
$score=0;
if(($q1)==($anw1)){
	$score=$score+1;
}
if(($q2)==($anw2)){
	$score=$score+1;
}
if(($q3)==($anw3)){
	$score=$score+1;
}
if(($q4)==($anw4)){
	$score=$score+1;
}
if(($q5)==($anw5)){
	$score=$score+1;
}
if(($q6)==($anw6)){
	$score=$score+1;
}
if(($q7)==($anw7)){
	$score=$score+1;
}
if(($q8)==($anw8)){
	$score=$score+1;
}
if(($q9)==($anw9)){
	$score=$score+1;
}
if(($q10)==($anw10)){
	$score=$score+1;
}
if(($q11)==($anw11)){
	$score=$score+1;
}
if(($q12)==($anw12)){
	$score=$score+1;
}
if(($q13)==($anw13)){
	$score=$score+1;
}
if(($q14)==($anw14)){
	$score=$score+1;
}
if(($q15)==($anw15)){
	$score=$score+1;
}
if(($q16)==($anw16)){
	$score=$score+1;
}
if(($q17)==($anw17)){
	$score=$score+1;
}
if(($q18)==($anw18)){
	$score=$score+1;
}
if(($q19)==($anw19)){
	$score=$score+1;
}
if(($q20)==($anw20)){
	$score=$score+1;
}
?>
<?php  echo "<h1>得分為:$score 分!</h1>";?>
<button onclick="correction()">按一下看正確答案!</button>
<table border="1">
			<tr>
				<td></td>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw1,$pic1);</script></td>";?>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw2,$pic1);</script></td>";?>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw3,$pic1);</script></td>";?>
			</tr>
			<tr>
				<td>原作答</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q1"?>+</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q2"?>+</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q3"?>=</td>
				<td style="width: 5%; text-align: center;"><?php echo "$q4"?></td>
			</tr>
			<tr>
				<td>正解</td>
				<td style="width: 25%; text-align: center;"><div id="a1" style="color:red; display:none;"><?php echo "$anw1"?>+</div></td>
				<td style="width: 25%; text-align: center;"><div id="a2" style="color:red; display:none;"><?php echo "$anw2"?>+</div></td>
				<td style="width: 25%; text-align: center;"><div id="a3" style="color:red; display:none;"><?php echo "$anw3"?>=</div></td>
				<td style="width: 25%; text-align: center;"><div id="a4" style="color:red; display:none;"><?php echo "$anw4"?></div></td>
			</tr>
			<tr>
				<td></td>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw5,$pic2);</script></td>";?>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw6,$pic2);</script></td>";?>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw7,$pic2);</script></td>";?>
			</tr>
			<tr>
				<td>原作答</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q5"?>++</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q6"?>+</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q7"?>=</td>
				<td style="width: 5%; text-align: center;"><?php echo "$q8"?></td>
			</tr>
			<tr>
				<td>正解</td>
				<td style="width: 25%; text-align: center;"><div id="a5" style="color:red; display:none;"><?php echo "$anw5"?>+</div></td>
				<td style="width: 25%; text-align: center;"><div id="a6" style="color:red; display:none;"><?php echo "$anw6"?>+</div></td>
				<td style="width: 25%; text-align: center;"><div id="a7" style="color:red; display:none;"><?php echo "$anw7"?>=</div></td>
				<td style="width: 25%; text-align: center;"><div id="a8" style="color:red; display:none;"><?php echo "$anw8"?></div></td>
			</tr>
			<tr>
				<td></td>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw9,$pic3);</script></td>";?>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw10,$pic3);</script></td>";?>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw11,$pic3);</script></td>";?>
			</tr>
			<tr>
				<td>原作答</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q9"?>+</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q10"?>+</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q11"?>=</td>
				<td style="width: 5%; text-align: center;"><?php echo "$q12"?></td>
			</tr>
			<tr>
				<td>正解</td>
				<td style="width: 25%; text-align: center;"><div id="a9" style="color:red; display:none;"><?php echo "$anw9"?>+</div></td>
				<td style="width: 25%; text-align: center;"><div id="a10" style="color:red; display:none;"><?php echo "$anw10"?>+</div></td>
				<td style="width: 25%; text-align: center;"><div id="a11" style="color:red; display:none;"><?php echo "$anw11"?>=</div></td>
				<td style="width: 25%; text-align: center;"><div id="a12" style="color:red; display:none;"><?php echo "$anw12"?></div></td>
			</tr>
			<tr>
				<td></td>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw13,$pic4);</script></td>";?>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw14,$pic4);</script></td>";?>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw15,$pic4);</script></td>";?>
			</tr>
			<tr>
				<td>原作答</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q13"?>+</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q14"?>+</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q15"?>=</td>
				<td style="width: 5%; text-align: center;"><?php echo "$q16"?></td>
			</tr>
			<tr>
				<td>正解</td>
				<td style="width: 25%; text-align: center;"><div id="a13" style="color:red; display:none;"><?php echo "$anw13"?>+</div></td>
				<td style="width: 25%; text-align: center;"><div id="a14" style="color:red; display:none;"><?php echo "$anw14"?>+</div></td>
				<td style="width: 25%; text-align: center;"><div id="a15" style="color:red; display:none;"><?php echo "$anw15"?>=</div></td>
				<td style="width: 25%; text-align: center;"><div id="a16" style="color:red; display:none;"><?php echo "$anw16"?></div></td>
			</tr>
			<tr>
				<td></td>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw17,$pic5);</script></td>";?>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw18,$pic5);</script></td>";?>
				<?php echo "<td style=\"width: 25%; text-align: center;\"><script>pictures($anw19,$pic5);</script></td>";?>
			</tr>
			<tr>
				<td style="width: 3%;">原作答</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q17"?>+</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q18"?>+</td>
				<td style="width: 25%; text-align: center;"><?php echo "$q19"?>=</td>
				<td style="width: 5%; text-align: center;"><?php echo "$q20"?></td>
			</tr>
			<tr>
				<td>正解</td>
				<td style="width: 25%; text-align: center;"><div id="a17" style="color:red; display:none;"><?php echo "$anw17"?>+</div></td>
				<td style="width: 25%; text-align: center;"><div id="a18" style="color:red; display:none;"><?php echo "$anw18"?>+</div></td>
				<td style="width: 25%; text-align: center;"><div id="a19" style="color:red; display:none;"><?php echo "$anw19"?>=</div></td>
				<td style="width: 25%; text-align: center;"><div id="a20" style="color:red; display:none;"><?php echo "$anw20"?></div></td>
			</tr>
		</table>