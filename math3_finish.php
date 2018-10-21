<script type="text/javascript">
	function correction(){
	document.getElementById( "a1" ).style.display = "";
	document.getElementById( "a2" ).style.display = "";
	document.getElementById( "a3" ).style.display = "";
	document.getElementById( "a4" ).style.display = "";
	document.getElementById( "a5" ).style.display = "";
	}
</script>
<?php
$anw1 = $_POST['q11'];
$anw2 = $_POST['q12'];
$anw3 = $_POST['q13'];
$anw4 = $_POST['q14'];
$anw5 = $_POST['q15'];
$anw6 = $_POST['q16'];
$anw7 = $_POST['q21'];
$anw8 = $_POST['q22'];
$anw9 = $_POST['q23'];
$anw10 = $_POST['q24'];
$anw11 = $_POST['q25'];
$anw12 = $_POST['q26'];
$anw13 = $_POST['q31'];
$anw14 = $_POST['q32'];
$anw15 = $_POST['q33'];
$anw16 = $_POST['q34'];
$anw17 = $_POST['q35'];
$anw18 = $_POST['q36'];
$anw19 = $_POST['q41'];
$anw20 = $_POST['q42'];
$anw21 = $_POST['q43'];
$anw22 = $_POST['q44'];
$anw23 = $_POST['q45'];
$anw24 = $_POST['q46'];
$anw25 = $_POST['q51'];
$anw26 = $_POST['q52'];
$anw27 = $_POST['q53'];
$anw28 = $_POST['q54'];
$anw29 = $_POST['q55'];
$anw30 = $_POST['q56'];
$q1=$_POST['question1'];
$q11=$q1+1;
$q12=$q1+2;
$q13=$q1+3;
$q14=$q1+4;
$q15=$q1+5;
$q2=$_POST['question2'];
$q21=$q2-1;
$q22=$q2-2;
$q23=$q2-3;
$q24=$q2-4;
$q25=$q2-5;
$q3=$_POST['question3'];
$q31=$q3-1;
$q32=$q3-2;
$q33=$q3-3;
$q34=$q3-4;
$q35=$q3-5;
$q4=$_POST['question4'];
$q41=$q4+1;
$q42=$q4+2;
$q43=$q4+3;
$q44=$q4+4;
$q45=$q4+5;
$q5=$_POST['question5'];
$q51=$q5-1;
$q52=$q5-2;
$q53=$q5-3;
$q54=$q5-4;
$q55=$q5-5;
$s11=$_POST['seat11'];
$s12=$_POST['seat12'];
$s21=$_POST['seat21'];
$s22=$_POST['seat22'];
$s31=$_POST['seat31'];
$s32=$_POST['seat32'];
$s41=$_POST['seat41'];
$s42=$_POST['seat42'];
$s51=$_POST['seat51'];
$s52=$_POST['seat52'];
$score=0;
if($anw1==$q1)$score=$score+1;
if($anw2==$q1+1)$score=$score+1;
if($anw3==$q1+2)$score=$score+1;
if($anw4==$q1+3)$score=$score+1;
if($anw5==$q1+4)$score=$score+1;
if($anw6==$q1+5)$score=$score+1;

if($anw7==$q2)$score=$score+1;
if($anw8==$q2-1)$score=$score+1;
if($anw9==$q2-2)$score=$score+1;
if($anw10==$q2-3)$score=$score+1;
if($anw11==$q2-4)$score=$score+1;
if($anw12==$q2-5)$score=$score+1;

if($anw13==$q3)$score=$score+1;
if($anw14==$q3-1)$score=$score+1;
if($anw15==$q3-2)$score=$score+1;
if($anw16==$q3-3)$score=$score+1;
if($anw17==$q3-4)$score=$score+1;
if($anw18==$q3-5)$score=$score+1;

if($anw19==$q4)$score=$score+1;
if($anw20==$q4+1)$score=$score+1;
if($anw21==$q4+2)$score=$score+1;
if($anw22==$q4+3)$score=$score+1;
if($anw23==$q4+4)$score=$score+1;
if($anw24==$q4+5)$score=$score+1;

if($anw25==$q5)$score=$score+1;
if($anw26==$q5-1)$score=$score+1;
if($anw27==$q5-2)$score=$score+1;
if($anw28==$q5-3)$score=$score+1;
if($anw29==$q5-4)$score=$score+1;
if($anw30==$q5-5)$score=$score+1;
?>
<?php  echo "<h1>得分為:$score 分!</h1>";?>
<button onclick="correction()">按一下看正確答案!</button>
<table border="1" style="margin: auto;">
	<tr>
		<td style="text-align: center;">原作答</td>
		<td style="text-align: center;">正確答案</td>
	</tr>
	<tr>
		<td>
			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s11=="1"||$s12=="1") echo "value=\"$q1\""; else echo "value=\"$anw1\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s11=="2"||$s12=="2") echo "value=\"$q11\""; else echo "value=\"$anw2\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s11=="3"||$s12=="3") echo "value=\"$q12\""; else echo "value=\"$anw3\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s11=="4"||$s12=="4") echo "value=\"$q13\""; else echo "value=\"$anw4\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s11=="5"||$s12=="5") echo "value=\"$q14\""; else echo "value=\"$anw5\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s11=="6"||$s12=="6") echo "value=\"$q15\""; else echo "value=\"$an61\""; ?>></label>
		</td>
		<td>
			<?php echo "<label><div id=\"a1\" style=\"color:red; display:none;\"><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q1\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q11\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q12\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q13\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q14\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q15\" disabled></div></label>";?>
		</td>
	</tr>
	<tr>
		<td>
			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s21=="1"||$s22=="1") echo "value=\"$q2\""; else echo "value=\"$anw7\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s21=="2"||$s22=="2") echo "value=\"$q21\""; else echo "value=\"$anw8\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s21=="3"||$s22=="3") echo "value=\"$q22\""; else echo "value=\"$anw9\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s21=="4"||$s22=="4") echo "value=\"$q23\""; else echo "value=\"$anw10\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s21=="5"||$s22=="5") echo "value=\"$q24\""; else echo "value=\"$anw11\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s21=="6"||$s22=="6") echo "value=\"$q25\""; else echo "value=\"$anw12\""; ?>></label>
		</td>
		<td>
			<?php echo "<label><div id=\"a2\" style=\"color:red; display:none;\"><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q2\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q21\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q22\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q23\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q24\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q25\" disabled></div></label>"; ?>
		</td>
	</tr>
	<tr>
		<td>
			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s31=="1"||$s32=="1") echo "value=\"$q3\""; else echo "value=\"$anw13\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s31=="2"||$s32=="2") echo "value=\"$q31\""; else echo "value=\"$anw14\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s31=="3"||$s32=="3") echo "value=\"$q32\""; else echo "value=\"$anw15\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s31=="4"||$s32=="4") echo "value=\"$q34\""; else echo "value=\"$anw16\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s31=="5"||$s32=="5") echo "value=\"$q35\""; else echo "value=\"$anw17\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s31=="6"||$s32=="6") echo "value=\"$q36\""; else echo "value=\"$anw18\""; ?>></label>
		</td>
		<td>
			<?php echo "<label><div id=\"a3\" style=\"color:red; display:none;\"><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q3\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q31\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q32\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q33\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q34\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q35\" disabled></div></label>"; ?>
		</td>
	</tr>
	<tr>
		<td>
			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s41=="1"||$s42=="1") echo "value=\"$q4\""; else echo "value=\"$anw19\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s41=="2"||$s42=="2") echo "value=\"$q41\""; else echo "value=\"$anw20\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s41=="3"||$s42=="3") echo "value=\"$q42\""; else echo "value=\"$anw21\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s41=="4"||$s42=="4") echo "value=\"$q43\""; else echo "value=\"$anw22\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s41=="5"||$s42=="5") echo "value=\"$q44\""; else echo "value=\"$anw23\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s41=="6"||$s42=="6") echo "value=\"$q45\""; else echo "value=\"$anw24\""; ?>></label>
		</td>
		<td>
			<?php echo "<label><div id=\"a4\" style=\"color:red; display:none;\"><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q4\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q41\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q42\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q43\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q44\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q45\" disabled></div></label>"; ?>
		</td>
	</tr>
	<tr>
		<td>
			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s51=="1"||$s52=="1") echo "value=\"$q5\""; else echo "value=\"$anw25\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s51=="2"||$s52=="2") echo "value=\"$q51\""; else echo "value=\"$anw26\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s51=="3"||$s52=="3") echo "value=\"$q52\""; else echo "value=\"$anw27\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s51=="4"||$s52=="4") echo "value=\"$q53\""; else echo "value=\"$anw28\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s51=="5"||$s52=="5") echo "value=\"$q54\""; else echo "value=\"$anw29\""; ?>></label>
  			<label><input type="number" name="q11" id="1" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($s51=="6"||$s52=="6") echo "value=\"$q55\""; else echo "value=\"$anw30\""; ?>></label>
		</td>
		<td>
			<?php echo "<label><div id=\"a5\" style=\"color:red; display:none;\"><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q5\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q51\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q52\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q53\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q54\" disabled></label>"; ?>
  			<?php echo "<label><input type=\"number\" name=\"q11\" id=\"q11\" style=\"height: 80px; width: 80px; font-size: 55px; text-align: center;\" value=\"$q55\" disabled></div></label>"; ?>
		</td>
	</tr>
</table>