<script type="text/javascript">
	function pictures(x){
		var imgurl=[
    	'img/animal/bear.png',
    	'img/animal/crocodile.png',
    	'img/animal/elephant.png',
    	'img/animal/giraffe.png',
    	'img/animal/gorilla.png',
    	'img/animal/hedgehog.png',
    	'img/animal/kangaroo.png',
    	'img/animal/koala.png',
    	'img/animal/monkey.png',
    	'img/animal/lion.png',
    	'img/animal/owl.png',
    	'img/animal/penguin.png',
    	'img/animal/tiger.png',
	];
		document.write('<img src="'+imgurl[x]+'" align="absmiddle">');
	}
	function direction(x){
		var dd=['左邊','右邊',];
		document.write(dd[x]);
	}
	function w(x){
		document.write(x+1);
	}
	function ww(x){
		document.write(x);
	}
</script>
<?php
@$anw1=$_POST['anwser1'];
@$anw2=$_POST['anwser2'];
@$anw3=$_POST['anwser3'];
@$anw4=$_POST['anwser4'];
$tp1=$_POST['topicpictures1'];
$tp2=$_POST['topicpictures2'];
$tp3=$_POST['topicpictures3'];
$tp4=$_POST['topicpictures4'];
$tp5=$_POST['topicpictures5'];
$tp6=$_POST['topicpictures6'];
$tp7=$_POST['topicpictures7'];
$tp8=$_POST['topicpictures8'];
$qd1=$_POST['questiondirection1'];
$qd2=$_POST['questiondirection2'];
$qd31=$_POST['questiondirection31'];
$qd32=$_POST['questiondirection32'];
$qp1=$_POST['questionpicture1'];
$qp2=$_POST['questionpicture2'];
$qp3=$_POST['questionpicture3'];
$qp21=$_POST['questionpicture21'];
$qp22=$_POST['questionpicture22'];
$qp23=$_POST['questionpicture23'];
$score=0;
$a=array($tp1,$tp2,$tp3,$tp4,$tp5,$tp6,$tp7,$tp8);
$ca1=0;
$ca2=0;
$ca3=0;
$ca4=0;
if($qd1==0){
	if($anw1==$qp1+1)$score=$score+5;
	$ca1=$qp1+1;
}else{
	if($anw1==8-$qp1)$score=$score+5;
	$ca1=8-$qp1;
}
if($qd2==0){
	if($anw2==$qp2)$score=$score+5;
	$ca2=$qp2;
}else{
	if($anw2==7-$qp2)$score=$score+5;
	$ca2=7-$qp2;
}
if($qd31==0){
	if($anw3==$qp3+1)$score=$score+5;
	$ca3=$qp3+1;
}else{
	if($anw3==8-$qp3)$score=$score+5;
	$ca3=8-$qp3;
}
if($qd32==0){
	if($anw4==$qp3+1)$score=$score+5;
	$ca4=$qp3+1;
}else{
	if($anw4==8-$qp3)$score=$score+5;
	$ca4=8-$qp3;
}
?>
<?php  echo "<h1>得分為:$score 分!</h1>";?>
<div align="center">
	<table border="1">
		<tr>
			<td>
				<?php echo "<script>
					pictures($tp1);
		        	pictures($tp2);
					pictures($tp3);
					pictures($tp4);
					pictures($tp5);
					pictures($tp6);
					pictures($tp7);
					pictures($tp8);
				</script>";?>
			</td>
		</tr>
	</table>
</div>
<div align="center">
	<table border="1">
		<tr>
			<th>原作答</th>
			<th>正確答案</th>
		</tr>
		<tr>
			<td>
				(1)從<?php echo "<script>direction($qd1);</script>";?>數起,<?php echo "<script>pictures($a[$qp1]);</script>";?>排在第
						<input type="number" id="aa1" name="aanwser1" style="width: 50px; height: 50px; font-size: 30px;" disabled <?php echo "value='$anw1'";?>>個。
			</td>
			<td>
				(1)從<?php echo "<script>direction($qd1);</script>";?>數起,<?php echo "<script>pictures($a[$qp1]);</script>";?>排在第
						<input type="number" id="aa1" name="aanwser1" style="width: 50px; height: 50px; font-size: 30px;" disabled <?php echo "value='$ca1'";?>>個。
			</td>
		</tr>
		<tr>
			<td>
				(2)從<?php echo "<script>direction($qd2);</script>";?>數起,第<?php echo "<script>w($qp2);</script>";?>個是
				<label><input type="radio" id="aa21" name="aanwser2" disabled <?php if($anw2=="$qp21") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qp21]);</script>";?></label>
				<label><input type="radio" id="aa22" name="aanwser2" disabled <?php if($anw2=="$qp22") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qp22]);</script>";?></label>
				<label><input type="radio" id="aa23" name="aanwser2" disabled <?php if($anw2=="$qp23") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qp23]);</script>";?></label>。
			</td>
			<td>
				(2)從<?php echo "<script>direction($qd2);</script>";?>數起,第<?php echo "<script>w($qp2);</script>";?>個是
				<label><input type="radio" id="aa21" name="aanwser2" disabled <?php if($ca2=="$qp21") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qp21]);</script>";?></label>
				<label><input type="radio" id="aa22" name="aanwser2" disabled <?php if($ca2=="$qp22") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qp22]);</script>";?></label>
				<label><input type="radio" id="aa23" name="aanwser2" disabled <?php if($ca2=="$qp23") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qp23]);</script>";?></label>。
			</td>
		</tr>
		<tr>
			<td>
				(3)從<?php echo "<script>direction($qd31);</script>";?>數起,<?php echo "<script>pictures($a[$qp3]);</script>";?>排在第
				<input type="number" id="aa3" name="aanwser3" style="width: 50px; height: 50px; font-size: 30px;" disabled <?php echo "value='$anw3'";?>>個,也可說是從<?php echo "<script>direction($qd32);</script>";?>數起第
				<input type="number" id="aa4" name="aanwser4" style="width: 50px; height: 50px; font-size: 30px;" disabled <?php echo "value='$anw4'";?>>個。
			</td>
			<td>
				(3)從<?php echo "<script>direction($qd31);</script>";?>數起,<?php echo "<script>pictures($a[$qp3]);</script>";?>排在第
				<input type="number" id="aa3" name="aanwser3" style="width: 50px; height: 50px; font-size: 30px;" disabled <?php echo "value='$ca3'";?>>個,也可說是從<?php echo "<script>direction($qd32);</script>";?>數起第
				<input type="number" id="aa4" name="aanwser4" style="width: 50px; height: 50px; font-size: 30px;" disabled <?php echo "value='$ca4'";?>>個。
			</td>
		</tr>
	</table>
</div>
