<script type="text/javascript">
	function qpictures(w,x,y,z){
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
    for(var i=1;i<=w;i++){
      document.write('<img src="'+imgurl[y]+'" width="50px"; height="50px";>');
    }
    for(var i=1;i<=x;i++){
      document.write('<img src="'+imgurl[z]+'" width="50px"; height="50px";>');
    }
  }
  function pictures(x){
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
      document.write('<img src="'+imgurl[x]+'" width="50px" height="50px" vertical-align : middle;>');
  }
  function addormul(x){
  	var am=[' 總共 ',
  			' 相差 ',];
  	document.write(am[x]);
  }
</script>
<?php
$anw11=$_POST['q11'];
$anw12=$_POST['q12'];
$anw13=$_POST['q13'];
$anw14=$_POST['q14'];
$anw15=$_POST['q15'];
$anw21=$_POST['q21'];
$anw22=$_POST['q22'];
$anw23=$_POST['q23'];
$anw24=$_POST['q24'];
$anw25=$_POST['q25'];
$anw31=$_POST['q31'];
$anw32=$_POST['q32'];
$anw33=$_POST['q33'];
$anw34=$_POST['q34'];
$anw35=$_POST['q35'];
$anw41=$_POST['q41'];
$anw42=$_POST['q42'];
$anw43=$_POST['q43'];
$anw44=$_POST['q44'];
$anw45=$_POST['q45'];
$anw51=$_POST['q51'];
$anw52=$_POST['q52'];
$anw53=$_POST['q53'];
$anw54=$_POST['q54'];
$anw55=$_POST['q55'];
$pic1=$_POST['picture1'];
$pic2=$_POST['picture2'];
$pic3=$_POST['picture3'];
$pic4=$_POST['picture4'];
$pic5=$_POST['picture5'];
$pic6=$_POST['picture6'];
$pic7=$_POST['picture7'];
$pic8=$_POST['picture8'];
$pic9=$_POST['picture9'];
$pic10=$_POST['picture10'];
$num1=$_POST['number1'];
$num2=$_POST['number2'];
$num3=$_POST['number3'];
$num4=$_POST['number4'];
$num5=$_POST['number5'];
$num6=$_POST['number6'];
$num7=$_POST['number7'];
$num8=$_POST['number8'];
$num9=$_POST['number9'];
$num10=$_POST['number10'];
$am1=$_POST['addmul1'];
$am2=$_POST['addmul2'];
$am3=$_POST['addmul3'];
$am4=$_POST['addmul4'];
$am5=$_POST['addmul5'];
$score=0;
if($am1==0){
	$num11=$num1+$num2;
	if($anw11==$num11)$score=$score+1;
	if($anw12==$num1){
		$score=$score+1;
		if($anw14==$num2)$score=$score+1;
	}else if($anw12==$num2){
		$score=$score+1;
		if($anw14==$num1)$score=$score+1;
	}
	if($anw13=='+')$score=$score+1;
	if($anw15==$num11)$score=$score+1;
}else{
	if($anw13=='-')$score=$score+1;
	if($num1>$num2){		
		$num11=$num1-$num2;
		if($anw11==$num11)$score=$score+1;
		if($anw12==$num1)$score=$score+1;
		if($anw14==$num2)$score=$score+1;
		if($anw15==$num11)$score=$score+1;
	}else{
		$num11=$num2-$num1;
		if($anw11==$num11)$score=$score+1;
		if($anw12==$num2)$score=$score+1;
		if($anw14==$num1)$score=$score+1;
		if($anw15==$num11)$score=$score+1;
	}
}
if($am2==0){
	$num21=$num3+$num4;
	if($anw21==$num21)$score=$score+1;
	if($anw22==$num3){
		$score=$score+1;
		if($anw24==$num4)$score=$score+1;
	}else if($anw22==$num4){
		$score=$score+1;
		if($anw24==$num3)$score=$score+1;
	}
	if($anw23=='+')$score=$score+1;
	if($anw25==$num21)$score=$score+1;
}else{
	if($anw23=='-')$score=$score+1;
	if($num3>$num4){
		$num21=$num3-$num4;
		if($anw21==$num21)$score=$score+1;
		if($anw22==$num3)$score=$score+1;
		if($anw24==$num4)$score=$score+1;
		if($anw25==$num21)$score=$score+1;
	}else{
		$num21=$num4-$num3;
		if($anw21==$num21)$score=$score+1;
		if($anw22==$num4)$score=$score+1;
		if($anw24==$num3)$score=$score+1;
		if($anw25==$num21)$score=$score+1;
	}
}
if($am3==0){
	$num31=$num5+$num6;
	if($anw31==$num31)$score=$score+1;
	if($anw32==$num5){
		$score=$score+1;
		if($anw34==$num6)$score=$score+1;
	}else if($anw32==$num6){
		$score=$score+1;
		if($anw34==$num5)$score=$score+1;
	}
	if($anw33=='+')$score=$score+1;
	if($anw35==$num31)$score=$score+1;
}else{
	if($anw33=='-')$score=$score+1;
	if($num5>$num6){
		$num31=$num5-$num6;
		if($anw31==$num31)$score=$score+1;
		if($anw32==$num5)$score=$score+1;
		if($anw34==$num6)$score=$score+1;
		if($anw35==$num31)$score=$score+1;
	}else{
		$num31=$num6-$num5;
		if($anw31==$num31)$score=$score+1;
		if($anw32==$num6)$score=$score+1;
		if($anw34==$num5)$score=$score+1;
		if($anw35==$num31)$score=$score+1;
	}
}
if($am4==0){
	$num41=$num7+$num8;
	if($anw41==$num41)$score=$score+1;
	if($anw42==$num7){
		$score=$score+1;
		if($anw44==$num8)$score=$score+1;
	}else if($anw42==$num8){
		$score=$score+1;
		if($anw44==$num7)$score=$score+1;
	}
	if($anw43=='+')$score=$score+1;
	if($anw45==$num41)$score=$score+1;
}else{
	if($anw43=='-')$score=$score+1;
	if($num7>$num8){
		$num41=$num7-$num8;
		if($anw41==$num41)$score=$score+1;
		if($anw42==$num7)$score=$score+1;
		if($anw44==$num8)$score=$score+1;
		if($anw45==$num41)$score=$score+1;
	}else{
		$num41=$num8-$num7;
		if($anw41==$num41)$score=$score+1;
		if($anw42==$num8)$score=$score+1;
		if($anw44==$num7)$score=$score+1;
		if($anw45==$num41)$score=$score+1;
	}
}
if($am5==0){
	$num51=$num9+$num10;
	if($anw51==$num51)$score=$score+1;
	if($anw52==$num9){
		$score=$score+1;
		if($anw54==$num10)$score=$score+1;
	}else if($anw52==$num10){
		$score=$score+1;
		if($anw54==$num9)$score=$score+1;
	}
	if($anw53=='+')$score=$score+1;
	if($anw55==$num51)$score=$score+1;
}else{
	if($anw53=='-')$score=$score+1;
	if($num9>$num10){
		$num51=$num9-$num10;
		if($anw51==$num51)$score=$score+1;
		if($anw52==$num9)$score=$score+1;
		if($anw54==$num10)$score=$score+1;
		if($anw55==$num51)$score=$score+1;
	}else{
		$num51=$num10-$num9;
		if($anw51==$num51)$score=$score+1;
		if($anw52==$num10)$score=$score+1;
		if($anw54==$num9)$score=$score+1;
		if($anw55==$num51)$score=$score+1;
	}
}
?>
<?php  echo "<h1>得分為:$score 分!</h1>";?>
<table border="1">
	<tr>
		<th>圖</th>
		<th>原比較</th>
		<th>原作答</th>
		<th>正確比較</th>
		<th>正確答案</th>
	</tr>
	<tr>
		<td><?php echo "<script>qpictures($num1,$num2,$pic1,$pic2)</script>";?></td>
		<td valign="middle"><?php echo "<script>pictures($pic1);</script> 和 <script>pictures($pic2);addormul($am1)</script><input id=\"q11\" name=\"q11\" align=\"center\"  type=\"number\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$anw11\" disabled>個";?></td>
		<td><input id="q22" name="q22" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw12\";"?>>
			<input id="q23" name="q23" align="center"  type="text"  style="width: 15px; height: 10px; font-size: 20px;" disabled <?php echo "value=\"$anw13\";"?>>
			<input id="q24" name="q24" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw14\";"?>>
					=
			<input id="q25" name="q25" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw15\";"?>>
		</td>
		<td valign="middle"><?php echo "<script>pictures($pic1);</script> 和 <script>pictures($pic2);addormul($am1)</script><input id=\"q11\" name=\"q11\" align=\"center\"  type=\"number\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$num11\" disabled>個";?></td>
		<td><input id="q22" name="q22" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($num1>$num2)echo "value=\"$num1\";"; else{echo "value=\"$num2\";";} ?>>
			<input id="q23" name="q23" align="center"  type="text"  style="width: 15px; height: 10px; font-size: 20px;" disabled <?php if($am1==0) echo "value=\"+\";"; else{echo "value=\"-\"";}?>>
			<input id="q24" name="q24" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($num2>$num1)echo "value=\"$num1\";"; else{echo "value=\"$num2\";";} ?>>
					=
			<input id="q25" name="q25" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$num11\";"?>>
		</td>
	</tr>
	<tr>
		<td><?php echo "<script>qpictures($num3,$num4,$pic3,$pic4)</script>";?></td>
		<td valign="middle"><?php echo "<script>pictures($pic3);</script> 和 <script>pictures($pic4);addormul($am2)</script><input id=\"q21\" name=\"q21\" align=\"center\"  type=\"number\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$anw21\" disabled>個";?></td>
		<td><input id="q22" name="q22" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw22\";"?>>
			<input id="q23" name="q23" align="center"  type="text"  style="width: 15px; height: 10px; font-size: 20px;" disabled <?php echo "value=\"$anw23\";"?>>
			<input id="q24" name="q24" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw24\";"?>>
					=
			<input id="q25" name="q25" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw25\";"?>>
		</td>
		<td valign="middle"><?php echo "<script>pictures($pic3);</script> 和 <script>pictures($pic4);addormul($am2)</script><input id=\"q21\" name=\"q21\" align=\"center\"  type=\"number\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$num21\" disabled>個";?></td>
		<td><input id="q22" name="q22" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($num3>$num4)echo "value=\"$num3\";"; else{echo "value=\"$num4\";";}?>>
			<input id="q23" name="q23" align="center"  type="text"  style="width: 15px; height: 10px; font-size: 20px;" disabled <?php if($am2==0) echo "value=\"+\";"; else{echo "value=\"-\"";}?>>
			<input id="q24" name="q24" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($num4>$num3)echo "value=\"$num3\";"; else{echo "value=\"$num4\";";}?>>
					=
			<input id="q25" name="q25" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$num21\";"?>>
		</td>
	</tr>
	<tr>
		<td><?php echo "<script>qpictures($num5,$num6,$pic5,$pic6)</script>";?></td>
		<td valign="middle"><?php echo "<script>pictures($pic5);</script> 和 <script>pictures($pic6);addormul($am3)</script><input id=\"q31\" name=\"q31\" align=\"center\"  type=\"number\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$anw31\" disabled>個";?></td>
		<td><input id="q32" name="q32" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw32\";"?>>
			<input id="q33" name="q33" align="center"  type="text"  style="width: 15px; height: 10px; font-size: 20px;" disabled <?php echo "value=\"$anw33\";"?>>
			<input id="q34" name="q34" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw34\";"?>>
					=
			<input id="q35" name="q35" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw35\";"?>>
		</td>
		<td valign="middle"><?php echo "<script>pictures($pic5);</script> 和 <script>pictures($pic6);addormul($am3)</script><input id=\"q31\" name=\"q31\" align=\"center\"  type=\"number\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$num31\" disabled>個";?></td>
		<td><input id="q32" name="q32" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($num5>$num6)echo "value=\"$num5\";"; else{echo "value=\"$num6\";";}?>>
			<input id="q33" name="q33" align="center"  type="text"  style="width: 15px; height: 10px; font-size: 20px;" disabled <?php if($am3==0) echo "value=\"+\";"; else{echo "value=\"-\"";}?>>
			<input id="q34" name="q34" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($num6>$num5)echo "value=\"$num5\";"; else{echo "value=\"$num6\";";}?>>
					=
			<input id="q35" name="q35" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$num31\";"?>>
		</td>
	</tr>
	<tr>
		<td><?php echo "<script>qpictures($num7,$num8,$pic7,$pic8)</script>";?></td>
		<td valign="middle"><?php echo "<script>pictures($pic7);</script> 和 <script>pictures($pic8);addormul($am4)</script><input id=\"q41\" name=\"q41\" align=\"center\"  type=\"number\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$anw41\" disabled>個";?></td>
		<td><input id="q42" name="q42" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw42\";"?>>
			<input id="q43" name="q43" align="center"  type="text"  style="width: 15px; height: 10px; font-size: 20px;" disabled <?php echo "value=\"$anw43\";"?>>
			<input id="q44" name="q44" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw44\";"?>>
					=
			<input id="q45" name="q45" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw45\";"?>>
		</td>
		<td valign="middle"><?php echo "<script>pictures($pic7);</script> 和 <script>pictures($pic8);addormul($am4)</script><input id=\"q41\" name=\"q41\" align=\"center\"  type=\"number\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$num41\" disabled>個";?></td>
		<td><input id="q42" name="q42" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($num7>$num8)echo "value=\"$num7\";"; else{echo "value=\"$num8\";";}?>>
			<input id="q43" name="q43" align="center"  type="text"  style="width: 15px; height: 10px; font-size: 20px;" disabled <?php if($am4==0) echo "value=\"+\";"; else{echo "value=\"-\"";}?>>
			<input id="q44" name="q44" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($num8>$num7)echo "value=\"$num7\";"; else{echo "value=\"$num8\";";}?>>
					=
			<input id="q45" name="q45" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$num41\";"?>>
		</td>
	</tr>
	<tr>
		<td><?php echo "<script>qpictures($num9,$num10,$pic9,$pic10)</script>";?></td>
		<td valign="middle"><?php echo "<script>pictures($pic9);</script> 和 <script>pictures($pic10);addormul($am5)</script><input id=\"q51\" name=\"q51\" align=\"center\"  type=\"number\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$anw51\" disabled>個";?></td>
		<td><input id="q52" name="q52" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw52\";"?>>
			<input id="q53" name="q53" align="center"  type="text"  style="width: 15px; height: 10px; font-size: 20px;" disabled <?php echo "value=\"$anw53\";"?>>
			<input id="q54" name="q54" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw54\";"?>>
					=
			<input id="q55" name="q55" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$anw55\";"?>>
		</td>
		<td valign="middle"><?php echo "<script>pictures($pic8);</script> 和 <script>pictures($pic10);addormul($am5)</script><input id=\"q51\" name=\"q51\" align=\"center\"  type=\"number\"  style=\"width: 50px; height: 50px; font-size: 25px;\" value=\"$num51\" disabled>個";?></td>
		<td><input id="q52" name="q52" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($num9>$num10)echo "value=\"$num9\";"; else{echo "value=\"$num10\";";}?>>
			<input id="q53" name="q53" align="center"  type="text"  style="width: 15px; height: 10px; font-size: 20px;" disabled <?php if($am5==0) echo "value=\"+\";"; else{echo "value=\"-\"";}?>>
			<input id="q54" name="q54" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php if($num10>$num9)echo "value=\"$num9\";"; else{echo "value=\"$num10\";";}?>>
					=
			<input id="q55" name="q55" align="center"  type="number"  style="width: 50px; height: 50px; font-size: 25px;" disabled <?php echo "value=\"$num51\";"?>>
		</td>
	</tr>
</table>