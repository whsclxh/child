<script src="jquery-3.3.1.min.js"></script>
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
	];
		document.write('<img src="'+imgurl[x]+'">');
	}
	function setquestionname(x){
		var fruitsname=[
			'熊',
			'鱷魚',
			'大象',
			'長頸鹿',
			'大猩猩',
			'刺蝟',
			'袋鼠',
			'無尾熊',
			'猴子',
			'獅子',
			'貓頭鷹',
			'企鵝',
		];
		document.write(fruitsname[x]);
	}
	function writedirection(x,y){
		if(x==0){
			var direction=[
			'下面',
			'右邊',];
			document.write(direction[y]);
		}else if(x==1){
			var direction=[
			'下面',
			'左邊',
			'右邊',];
			document.write(direction[y]);
		}else if(x==2){
			var direction=[
			'下面',
			'左邊',];
			document.write(direction[y]);
		}else if(x==3){
			var direction=[
			'上面',
			'下面',
			'右邊',];
			document.write(direction[y]);
		}else if(x==4){
			var direction=[
			'上面',
			'下面',
			'左邊',
			'右邊',];
			document.write(direction[y]);
		}else if(x==5){
			var direction=[
			'上面',
			'下面',
			'左邊',];
			document.write(direction[y]);
		}else if(x==6){
			var direction=[
			'上面',
			'右邊',];
			document.write(direction[y]);
		}else if(x==7){
			var direction=[
			'上面',
			'右邊',
			'左邊',];
			document.write(direction[y]);
		}else{
			var direction=[
			'上面',
			'左邊',];
			document.write(direction[y]);
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
	}
</script>
<?php  
$q1 = $_POST['question1'];   //作答者的答案
$q2 = $_POST['question2'];
$q3 = $_POST['question3'];
$q4 = $_POST['question4'];
$anw1 = $_POST['anwser1'];  //正確答案
$anw2 = $_POST['anwser2'];
$anw3 = $_POST['anwser3'];
$anw4 = $_POST['anwser4'];
$pic0 = $_POST['picture0'];	//9宮格題目
$pic1 = $_POST['picture1'];
$pic2 = $_POST['picture2'];
$pic3 = $_POST['picture3'];
$pic4 = $_POST['picture4'];
$pic5 = $_POST['picture5'];
$pic6 = $_POST['picture6'];
$pic7 = $_POST['picture7'];
$pic8 = $_POST['picture8'];
$qf1 = $_POST['questionfruit1'];  //題目的水果
$qf2 = $_POST['questionfruit2'];
$qf3 = $_POST['questionfruit3'];
$qf4 = $_POST['questionfruit4'];
$qd1 = $_POST['questiondirection1']; //題目的方向
$qd2 = $_POST['questiondirection2'];
$qd3 = $_POST['questiondirection3'];
$qd4 = $_POST['questiondirection4'];
$qo11 = $_POST['questionoption11'];  //題目的選項
$qo12 = $_POST['questionoption12'];
$qo13 = $_POST['questionoption13'];
$qo14 = $_POST['questionoption14'];
$qo21 = $_POST['questionoption21'];
$qo22 = $_POST['questionoption22'];
$qo23 = $_POST['questionoption23'];
$qo24 = $_POST['questionoption24'];
$qo31 = $_POST['questionoption31'];
$qo32 = $_POST['questionoption32'];
$qo33 = $_POST['questionoption33'];
$qo34 = $_POST['questionoption34'];
$qo41 = $_POST['questionoption41'];
$qo42 = $_POST['questionoption42'];
$qo43 = $_POST['questionoption43'];
$qo44 = $_POST['questionoption44'];
$score=0;
if(($q1)==($anw1)){
	$score=$score+5;
}
if(($q2)==($anw2)){
	$score=$score+5;
}
if(($q3)==($anw3)){
	$score=$score+5;
}
if(($q4)==($anw4)){
	$score=$score+5;
}
$a=array($pic0,$pic1,$pic2,$pic3,$pic4,$pic5,$pic6,$pic7,$pic8);
$d=array($qd1,$qd2,$qd3,$qd4);
?>
<?php  echo "<h1>得分為:$score 分!</h1>";?>
<button onclick="correction()">按一下看正確答案!</button>
<form>
	<table border="1" style="margin: auto;">
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>pictures($pic0);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>pictures($pic1);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>pictures($pic2);</script></td>";?>
		</tr>
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>pictures($pic3);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>pictures($pic4);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>pictures($pic5);</script></td>";?>
		</tr>
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>pictures($pic6);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>pictures($pic7);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>pictures($pic8);</script></td>";?>
		</tr>
	</table>
	<table border="1" style="margin: auto;">
		<tr>
			<td style="text-align: center;">題目</td>
			<td style="text-align: center;">原作答</td>
			<td style="text-align: center;">正確答案</td>
		</tr>
		<tr>
			<td>
				<?php echo "1.在<script>setquestionname($a[$qf1])</script>的<script>writedirection($qf1,$d[0])</script>是";?>
			</td>
			<td>
				<label><input type="radio" id="q1" name="question55" disabled="disabled" <?php if($q1=="$qo11") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo11]);</script>"; ?></label>
				<label><input type="radio" id="q2" name="question55" disabled="disabled" <?php if($q1=="$qo12") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo12]);</script>"; ?></label>
				<label><input type="radio" id="q3" name="question55" disabled="disabled" <?php if($q1=="$qo13") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo13]);</script>"; ?></label>
				<label><input type="radio" id="q4" name="question55" disabled="disabled" <?php if($q1=="$qo14") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo14]);</script>"; ?></label>
			</td>
			<td>
				<div id="aa1" style="text-align:center; color:red; display:none;">
					<label><input type="radio" id="q11" name="question1" disabled="disabled" <?php if($anw1=="$qo11") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo11]);</script>"; ?></label>
					<label><input type="radio" id="q12" name="question1" disabled="disabled" <?php if($anw1=="$qo12") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo12]);</script>"; ?></label>
					<label><input type="radio" id="q13" name="question1" disabled="disabled" <?php if($anw1=="$qo13") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo13]);</script>"; ?></label>
					<label><input type="radio" id="q14" name="question1" disabled="disabled" <?php if($anw1=="$qo14") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo14]);</script>"; ?></label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "2.在<script>setquestionname($a[$qf2])</script>的<script>writedirection($qf2,$d[1])</script>是";?>
			</td>
			<td>
				<label><input type="radio" id="q5" name="question33" disabled="disabled" <?php if($q2=="$qo21") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo21]);</script>"; ?></label>
				<label><input type="radio" id="q6" name="question33" disabled="disabled" <?php if($q2=="$qo22") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo22]);</script>"; ?></label>
				<label><input type="radio" id="q7" name="question33" disabled="disabled" <?php if($q2=="$qo23") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo23]);</script>"; ?></label>
				<label><input type="radio" id="q8" name="question33" disabled="disabled" <?php if($q2=="$qo24") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo24]);</script>"; ?></label>
			</td>
			<td>
				<div id="aa2" style="text-align:center; color:red; display:none;">
					<label><input type="radio" id="q21" name="question2" disabled="disabled" <?php if($anw2=="$qo21") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo21]);</script>"; ?></label>
					<label><input type="radio" id="q22" name="question2" disabled="disabled" <?php if($anw2=="$qo22") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo22]);</script>"; ?></label>
					<label><input type="radio" id="q23" name="question2" disabled="disabled" <?php if($anw2=="$qo23") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo23]);</script>"; ?></label>
					<label><input type="radio" id="q24" name="question2" disabled="disabled" <?php if($anw2=="$qo24") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo24]);</script>"; ?></label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "3.在<script>setquestionname($a[$qf3])</script>的<script>writedirection($qf3,$d[2])</script>是";?>
			</td>
			<td>
				<label><input type="radio" id="q9" name="question22" disabled="disabled" <?php if($q3=="$qo31") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo31]);</script>"; ?></label>
				<label><input type="radio" id="q10" name="question22" disabled="disabled" <?php if($q3=="$qo32") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo32]);</script>"; ?></label>
				<label><input type="radio" id="q11" name="question22" disabled="disabled" <?php if($q3=="$qo33") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo33]);</script>"; ?></label>
				<label><input type="radio" id="q12" name="question22" disabled="disabled" <?php if($q3=="$qo34") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo34]);</script>"; ?></label>
			</td>
			<td>
				<div id="aa3" style="text-align:center; color:red; display:none;">
					<label><input type="radio" id="q31" name="question3" disabled="disabled" <?php if($anw3=="$qo31") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo31]);</script>"; ?></label>
					<label><input type="radio" id="q32" name="question3" disabled="disabled" <?php if($anw3=="$qo32") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo32]);</script>"; ?></label>
					<label><input type="radio" id="q33" name="question3" disabled="disabled" <?php if($anw3=="$qo33") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo33]);</script>"; ?></label>
					<label><input type="radio" id="q34" name="question3" disabled="disabled" <?php if($anw3=="$qo34") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo34]);</script>"; ?></label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "4.在<script>setquestionname($a[$qf4])</script>的<script>writedirection($qf4,$d[3])</script>是";?>
			</td>
			<td>
				<label><input type="radio" id="q13" name="question44" disabled="disabled" <?php if($q4=="$qo41") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo41]);</script>"; ?></label>
				<label><input type="radio" id="q14" name="question44" disabled="disabled" <?php if($q4=="$qo42") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo42]);</script>"; ?></label>
				<label><input type="radio" id="q15" name="question44" disabled="disabled" <?php if($q4=="$qo43") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo43]);</script>"; ?></label>
				<label><input type="radio" id="q16" name="question44" disabled="disabled" <?php if($q4=="$qo44") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo44]);</script>"; ?></label>
			</td>
			<td>
				<div id="aa4" style="text-align:center; color:red; display:none;">
					<label><input type="radio" id="q41" name="question4" disabled="disabled" <?php if($anw4=="$qo41") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo41]);</script>"; ?></label>
					<label><input type="radio" id="q42" name="question4" disabled="disabled" <?php if($anw4=="$qo42") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo42]);</script>"; ?></label>
					<label><input type="radio" id="q43" name="question4" disabled="disabled" <?php if($anw4=="$qo43") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo43]);</script>"; ?></label>
					<label><input type="radio" id="q44" name="question4" disabled="disabled" <?php if($anw4=="$qo44") echo "checked=checked" ?>><?php echo "<script>pictures($a[$qo44]);</script>"; ?></label>
				</div>
			</td>
		</tr>
	</table>
	<div style="text-align: center;">
		<button>離開</button>
		<button type="submit" id="button">結束作答</button>
	</div>
</form>