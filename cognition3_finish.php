<script type="text/javascript">
	function pictures(x){
		var imgurl=[
    	'img/longshort/c2.png',
    	'img/longshort/c1.png',
    	'img/longshort/p2.png',
    	'img/longshort/p1.png',
    	'img/longshort/p4.png',
    	'img/longshort/p3.png',
    	'img/longshort/p6.png',
    	'img/longshort/p5.png',
    	'img/longshort/r2.png',
    	'img/longshort/r1.png',
	];
			document.write('<img src="'+imgurl[x]+'">');
	}
	function write(x){
		document.write(x);
	}
	
	function correction(){
		document.getElementById( "aa2" ).style.display = "";
		document.getElementById( "aa4" ).style.display = "";
		document.getElementById( "aa6" ).style.display = "";
		document.getElementById( "aa8" ).style.display = "";
		document.getElementById( "aa10" ).style.display = "";
		document.getElementById( "aa12" ).style.display = "";
		document.getElementById( "aa14" ).style.display = "";
		document.getElementById( "aa16" ).style.display = "";
		document.getElementById( "aa18" ).style.display = "";
		document.getElementById( "aa20" ).style.display = "";
		document.getElementById( "aa22" ).style.display = "";
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
$pic6 = $_POST['picture6'];
$pic7 = $_POST['picture7'];
$pic8 = $_POST['picture8'];
$pic9 = $_POST['picture9'];
$pic10 = $_POST['picture10'];
$score=0;
if($q1%2==1)$score=$score+4;
if($q2%2==1)$score=$score+4;
if($q3%2==1)$score=$score+4;
if($q4%2==1)$score=$score+4;
if($q5%2==1)$score=$score+4;
echo "<h1>得分為:$score 分!</h1>";
echo "<button onclick=\"correction()\">按一下看正確答案!</button>";
?>
<form name="form1" method="post">
		<table border="1" width="100%">
			<tr>
				<td style="text-align: center;">圖</td>
				<td style="text-align: center;">原作答</td>
				<td style="text-align: center;"><div id="aa22" style="display: none;">正確答案</div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"80%\"><script>pictures($pic1);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq1" name="question21" type="radio" value="1" disabled <?php if($q1=="$pic1") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><div id="aa2" style="text-align:center; display:none;"><input id="qqq1" name="qquestion1" type="radio" disabled <?php if($pic1%2==1) echo "checked=checked" ?>></div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($pic2);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq2" name="question21" type="radio" value="2" disabled <?php if($q1=="$pic2") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><div id="aa4" style="text-align:center; display:none;"><input id="qqq2" name="qquestion1" type="radio" disabled <?php if($pic2%2==1) echo "checked=checked" ?>></div></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="100%">
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($pic3);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq3" name="question22" value="1" type="radio" disabled <?php if($q2=="$pic3") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><div id="aa6" style="text-align:center; display:none;"><input id="qqq3" name="qquestion2" type="radio" disabled <?php if($pic3%2==1) echo "checked=checked" ?>></div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($pic4);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq4" name="question22" type="radio" value="2" disabled <?php if($q2=="$pic4") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><div id="aa8" style="text-align:center; display:none;"><input id="qqq4" name="qquestion2" type="radio" disabled <?php if($pic4%2==1) echo "checked=checked" ?>></div></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="100%">
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($pic5);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq5" name="question33" type="radio" value="1" disabled <?php if($q3=="$pic5") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><div id="aa10" style="text-align:center; display:none;"><input id="qqq5" name="qquestion3" type="radio" disabled <?php if($pic5%2==1) echo "checked=checked" ?>></div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($pic6);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq6" name="question33" type="radio" value="2" disabled <?php if($q3=="$pic6") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><div id="aa12" style="text-align:center; display:none;"><input id="qqq6" name="qquestion3" type="radio" disabled <?php if($pic6%2==1) echo "checked=checked" ?>></div></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="100%">
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($pic7);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq7" name="question34" type="radio" value="1" disabled <?php if($q4=="$pic7") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><div id="aa14" style="text-align:center; display:none;"><input id="qqq7" name="qquestion4" type="radio" disabled <?php if($pic7%2==1) echo "checked=checked" ?>></div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($pic8);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq8" name="question34" type="radio" value="2" disabled <?php if($q4=="$pic8") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><div id="aa16" style="text-align:center; display:none;"><input id="qqq8" name="qquestion4" type="radio" disabled <?php if($pic8%2==1) echo "checked=checked" ?>></div></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="100%">
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($pic9);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq9" name="question55" type="radio" value="1" disabled <?php if($q5=="$pic9") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><div id="aa18" style="text-align:center; display:none;"><input id="qqq9" name="qquestion5" type="radio" disabled <?php if($pic9%2==1) echo "checked=checked" ?>></div></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>pictures($pic10);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq10" name="question55" type="radio" value="2" disabled <?php if($q5=="$pic10") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><div id="aa20" style="text-align:center; display:none;"><input id="qqq10" name="qquestion5" type="radio" disabled <?php if($pic10%2==1) echo "checked=checked" ?>></div></td>
			</tr>
		</table>
	</form>