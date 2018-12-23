<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$contimes = $_SESSION['cognition_times'];
$sql1 = "SELECT * FROM cognition1 where username = '$id' AND cognition_times = '$contimes'";
$result1 = mysqli_query($qaq,$sql1);
$question1 = @mysqli_fetch_row($result1);
$sql2 = "SELECT * FROM cognition2 where username = '$id' AND cognition_times = '$contimes'";
$result2 = mysqli_query($qaq,$sql2);
$question2 = @mysqli_fetch_row($result2);
$sql3 = "SELECT * FROM cognition3 where username = '$id' AND cognition_times = '$contimes'";
$result3 = mysqli_query($qaq,$sql3);
$question3 = @mysqli_fetch_row($result3);
$sql4 = "SELECT * FROM cognition4 where username = '$id' AND cognition_times = '$contimes'";
$result4 = mysqli_query($qaq,$sql4);
$question4 = @mysqli_fetch_row($result4);
$sql5 = "SELECT * FROM cognition5 where username = '$id' AND cognition_times = '$contimes'";
$result5 = mysqli_query($qaq,$sql5);
$question5 = @mysqli_fetch_row($result5); 	
?>
<?php
$a=[$question2[2],$question2[3],$question2[4],$question2[5],$question2[6],$question2[7],$question2[8],$question2[9],$question2[10]];
$q211=$question2[11];$q212=$question2[12];$q213=$question2[13];$q214=$question2[14];$q219=$question2[19];$q220=$question2[20];
$q221=$question2[21];$q222=$question2[22];$q223=$question2[23];$q224=$question2[24];$q225=$question2[25];$q226=$question2[26];
$q227=$question2[27];$q228=$question2[28];$q229=$question2[29];$q230=$question2[30];$q231=$question2[31];$q232=$question2[32];
$q233=$question2[33];$q234=$question2[34];
$q4a=[$question4[2],$question4[3],$question4[4],$question4[5],$question4[6],$question4[7],$question4[8],$question4[9]];
$q410=$question4[10];$q412=$question4[12];$q417=$question4[17];$q418=$question4[18];$q419=$question4[19];
?>
<style type="text/css">
	div.ui-footer.ui-bar-inherit{
	background-color: #FFFFFF;
}
</style>
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
$q1q11 = $_POST['q1question11'];
$q1q12 = $_POST['q1question12'];
$q1q21 = $_POST['q1question21'];
$q1q22 = $_POST['q1question22'];
$q1q31 = $_POST['q1question31'];
$q1q32 = $_POST['q1question32'];
$q1q41 = $_POST['q1question41'];
$q1q42 = $_POST['q1question42'];
$q1q51 = $_POST['q1question51'];
$q1q52 = $_POST['q1question52'];
$q1q1 = $_POST['q1question1'];
$q1q2 = $_POST['q1question2']; 
$q1q3 = $_POST['q1question3']; 
$q1q4 = $_POST['q1question4']; 
$q1q5 = $_POST['q1question5'];
if(!isset($_COOKIE["cq1q11"])) {
   setcookie("cq1q11",$q1q11,time()+60);
}
if(!isset($_COOKIE["cq1q12"])) {
   setcookie("cq1q12",$q1q12,time()+60);
}
if(!isset($_COOKIE["cq1q21"])) {
   setcookie("cq1q21",$q1q21,time()+60);
}
if(!isset($_COOKIE["cq1q22"])) {
   setcookie("cq1q22",$q1q22,time()+60);
}
if(!isset($_COOKIE["cq1q31"])) {
   setcookie("cq1q31",$q1q31,time()+60);
}
if(!isset($_COOKIE["cq1q32"])) {
   setcookie("cq1q32",$q1q32,time()+60);
}
if(!isset($_COOKIE["cq1q41"])) {
   setcookie("cq1q41",$q1q41,time()+60);
}
if(!isset($_COOKIE["cq1q42"])) {
   setcookie("cq1q42",$q1q42,time()+60);
}
if(!isset($_COOKIE["cq1q51"])) {
   setcookie("cq1q51",$q1q51,time()+60);
}
if(!isset($_COOKIE["cq1q52"])) {
   setcookie("cq1q52",$q1q52,time()+60);
}
if(!isset($_COOKIE["cq1q11"])) {
   setcookie("cq1q11",$q1q11,time()+60);
}
if(!isset($_COOKIE["cq1q1"])) {
   setcookie("cq1q1",$q1q1,time()+60);
}
if(!isset($_COOKIE["cq1q2"])) {
   setcookie("cq1q2",$q1q2,time()+60);
}
if(!isset($_COOKIE["cq1q3"])) {
   setcookie("cq1q3",$q1q3,time()+60);
}
if(!isset($_COOKIE["cq1q4"])) {
   setcookie("cq1q4",$q1q4,time()+60);
}
if(isset($_COOKIE["cq1q11"])) {
   	$cq1q11=$_COOKIE["cq1q11"];
}else{
	$cq1q11=$q1q11;
}
if(isset($_COOKIE["cq1q12"])) {
   	$cq1q12=$_COOKIE["cq1q12"];
}else{
	$cq1q12=$q1q12;
}
if(isset($_COOKIE["cq1q21"])) {
   	$cq1q21=$_COOKIE["cq1q21"];
}else{
	$cq1q21=$q1q21;
}
if(isset($_COOKIE["cq1q22"])) {
   	$cq1q22=$_COOKIE["cq1q22"];
}else{
	$cq1q22=$q1q22;
}
if(isset($_COOKIE["cq1q31"])) {
   	$cq1q31=$_COOKIE["cq1q31"];
}else{
	$cq1q31=$q1q31;
}
if(isset($_COOKIE["cq1q32"])) {
   	$cq1q32=$_COOKIE["cq1q32"];
}else{
	$cq1q32=$q1q32;
}
if(isset($_COOKIE["cq1q41"])) {
   	$cq1q41=$_COOKIE["cq1q41"];
}else{
	$cq1q41=$q1q41;
}
if(isset($_COOKIE["cq1q42"])) {
   	$cq1q42=$_COOKIE["cq1q42"];
}else{
	$cq142=$q1q42;
}
if(isset($_COOKIE["cq1q51"])) {
   	$cq1q51=$_COOKIE["cq1q51"];
}else{
	$cq1q51=$q1q51;
}
if(isset($_COOKIE["cq1q52"])) {
   	$cq1q52=$_COOKIE["cq1q52"];
}else{
	$cq1q52=$q1q52;
}
if(isset($_COOKIE["cq1q1"])) {
   	$cq1q1=$_COOKIE["cq1q1"];
}else{
	$cq1q1=$q1q1;
}
if(isset($_COOKIE["cq1q2"])) {
   	$cq1q2=$_COOKIE["cq1q2"];
}else{
	$cq1q2=$q1q2;
}
if(isset($_COOKIE["cq1q3"])) {
   	$cq1q3=$_COOKIE["cq1q3"];
}else{
	$cq1q3=$q1q3;
}
if(isset($_COOKIE["cq1q4"])) {
   	$cq1q4=$_COOKIE["cq1q4"];
}else{
	$cq1q4=$q1q4;
}
if(isset($_COOKIE["cq1q5"])) {
   	$cq1q5=$_COOKIE["cq1q5"];
}else{
	$cq1q5=$q1q5;
}


//q1對答案
$q1score=0;
if(($q1q11)==($question1[2])){
	$q1score=$q1score+1;
}
if(($q1q12)==($question1[3])){
	$q1score=$q1score+1;
}
if(($q1q21)==($question1[4])){
	$q1score=$q1score+1;
}
if(($q1q22)==($question1[5])){
	$q1score=$q1score+1;
}
if(($q1q31)==($question1[6])){
	$q1score=$q1score+1;
}
if(($q1q32)==($question1[7])){
	$q1score=$q1score+1;
}
if(($q1q41)==($question1[8])){
	$q1score=$q1score+1;
}
if(($q1q42)==($question1[9])){
	$q1score=$q1score+1;
}
if(($q1q51)==($question1[10])){
	$q1score=$q1score+1;
}
if(($q1q52)==($question1[11])){
	$q1score=$q1score+1;
}
if(($question1[2])>($question1[3])){
	if(($q1q1)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q1)==2){
		$q1score=$q1score+2;
	}
}
if(($question1[4])>($question1[5])){
	if(($q1q2)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q2)==2){
		$q1score=$q1score+2;
	}
}
if(($question1[6])>($question1[7])){
	if(($q1q3)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q3)==2){
		$q1score=$q1score+2;
	}
}
if(($question1[8])>($question1[9])){
	if(($q1q4)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q4)==2){
		$q1score=$q1score+2;
	}
}
if(($question1[10])>($question1[11])){
	if(($q1q5)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q5)==2){
		$q1score=$q1score+2;
	}
}
//q2參數
$q2q1 = $_POST['q2question1'];   //作答者的答案
$q2q2 = $_POST['q2question2'];
$q2q3 = $_POST['q2question3'];
$q2q4 = $_POST['q2question4'];
if(!isset($_COOKIE["cq2q1"])) {
   setcookie("cq2q1",$q2q1,time()+60);
}
if(!isset($_COOKIE["cq2q2"])) {
   setcookie("cq2q2",$q2q2,time()+60);
}
if(!isset($_COOKIE["cq2q3"])) {
   setcookie("cq2q3",$q2q3,time()+60);
}
if(!isset($_COOKIE["cq2q4"])) {
   setcookie("cq2q4",$q2q4,time()+60);
}
if(isset($_COOKIE["cq2q1"])) {
   	$cq2q1=$_COOKIE["cq2q1"];
}else{
	$cq2q1=$q2q1;
}
if(isset($_COOKIE["cq2q2"])) {
   	$cq2q2=$_COOKIE["cq2q2"];
}else{
	$cq2q2=$q2q2;
}
if(isset($_COOKIE["cq2q3"])) {
   	$cq2q3=$_COOKIE["cq2q3"];
}else{
	$cq2q3=$q2q3;
}
if(isset($_COOKIE["cq2q4"])) {
   	$cq2q4=$_COOKIE["cq2q4"];
}else{
	$cq2q4=$q2q4;
}
//q2對答案
$q2score=0;
if(($q2q1)==($question2[35])){
	$q2score=$q2score+5;
}
if(($q2q2)==($question2[36])){
	$q2score=$q2score+5;
}
if(($q2q3)==($question2[37])){
	$q2score=$q2score+5;
}
if(($q2q4)==($question2[38])){
	$q2score=$q2score+5;
}
//q3參數
$q3q1 = $_POST['q3question1'];
$q3q2 = $_POST['q3question2']; 
$q3q3 = $_POST['q3question3']; 
$q3q4 = $_POST['q3question4']; 
$q3q5 = $_POST['q3question5'];
if(!isset($_COOKIE["cq3q1"])) {
   setcookie("cq3q1",$q3q1,time()+60);
}
if(!isset($_COOKIE["cq3q2"])) {
   setcookie("cq3q2",$q3q2,time()+60);
}
if(!isset($_COOKIE["cq3q3"])) {
   setcookie("cq3q3",$q3q3,time()+60);
}
if(!isset($_COOKIE["cq3q4"])) {
   setcookie("cq3q4",$q3q4,time()+60);
}
if(!isset($_COOKIE["cq3q5"])) {
   setcookie("cq3q5",$q3q5,time()+60);
}
if(isset($_COOKIE["cq3q1"])) {
   	$cq3q1=$_COOKIE["cq3q1"];
}else{
	$cq3q1=$q3q1;
}
if(isset($_COOKIE["cq3q2"])) {
   	$cq3q2=$_COOKIE["cq3q2"];
}else{
	$cq3q2=$q3q2;
}
if(isset($_COOKIE["cq3q3"])) {
   	$cq3q3=$_COOKIE["cq3q3"];
}else{
	$cq3q3=$q3q3;
}
if(isset($_COOKIE["cq3q4"])) {
   	$cq3q4=$_COOKIE["cq3q4"];
}else{
	$cq3q4=$q3q4;
}
if(isset($_COOKIE["cq3q5"])) {
   	$cq3q5=$_COOKIE["cq3q5"];
}else{
	$cq3q5=$q3q5;
}
$q3score=0;
//q3對答案
if($question3[7]>$question3[8]){
	if($q3q1==$question3[7]){
		$q3score=$q3score+4;
	}
}else{
	if($q3q1==$question3[8]){
		$q3score=$q3score+4;
	}
}
if($question3[9]>$question3[10]){
	if($q3q2==$question3[9]){
		$q3score=$q3score+4;
	}
}else{
	if($q3q2==$question3[10]){
		$q3score=$q3score+4;
	}
}
if($question3[11]>$question3[12]){
	if($q3q3==$question3[11]){
		$q3score=$q3score+4;
	}
}else{
	if($q3q3==$question3[12]){
		$q3score=$q3score+4;
	}
}
if($question3[13]>$question3[14]){
	if($q3q4==$question3[13]){
		$q3score=$q3score+4;
	}
}else{
	if($q3q4==$question3[14]){
		$q3score=$q3score+4;
	}
}
if($question3[15]>$question3[16]){
	if($q3q5==$question3[15]){
		$q3score=$q3score+4;
	}
}else{
	if($q3q5==$question3[16]){
		$q3score=$q3score+4;
	}
}
//q4參數
$anw1=$_POST['q4anwser1'];
$anw2=$_POST['q4anwser2'];
$anw3=$_POST['q4anwser3'];
$anw4=$_POST['q4anwser4'];
if(!isset($_COOKIE["canw1"])) {
   setcookie("canw1",$anw1,time()+60);
}
if(!isset($_COOKIE["canw2"])) {
   setcookie("canw2",$anw2,time()+60);
}
if(!isset($_COOKIE["canw3"])) {
   setcookie("canw3",$anw3,time()+60);
}
if(!isset($_COOKIE["canw4"])) {
   setcookie("canw4",$anw4,time()+60);
}
if(isset($_COOKIE["canw1"])) {
   	$canw1=$_COOKIE["canw1"];
}else{
	$canw1=$anw1;
}
if(isset($_COOKIE["canw2"])) {
   	$canw2=$_COOKIE["canw2"];
}else{
	$canw2=$anw2;
}
if(isset($_COOKIE["canw3"])) {
   	$canw3=$_COOKIE["canw3"];
}else{
	$canw3=$anw3;
}
if(isset($_COOKIE["canw4"])) {
   	$canw4=$_COOKIE["canw4"];
}else{
	$canw4=$anw4;
}
//q4對答案
$q4score=0;
if(($anw1==$question4[20])&&$anw1!=null){
	$q4score=$q4score+5;
}
if(($anw2==$question4[21])&&$anw2!=null){
	$q4score=$q4score+5;
}
if(($anw3==$question4[22])&&$anw3!=null){
	$q4score=$q4score+5;
}
if(($anw4==$question4[23])&&$anw4!=null){
	$q4score=$q4score+5;
}

//q5參數
$q5anw1 = $_POST['q5question1'];
$q5anw2 = $_POST['q5question2'];
$q5anw3 = $_POST['q5question3'];
$q5anw4 = $_POST['q5question4'];
if(!isset($_COOKIE["cq5anw1"])) {
   setcookie("cq5anw1",$q5anw1,time()+60);
}
if(!isset($_COOKIE["cq5anw2"])) {
   setcookie("cq5anw2",$q5anw2,time()+60);
}
if(!isset($_COOKIE["cq5anw3"])) {
   setcookie("cq5anw3",$q5anw3,time()+60);
}
if(!isset($_COOKIE["cq5anw4"])) {
   setcookie("cq5anw4",$q5anw4,time()+60);
}
if(isset($_COOKIE["cq5anw1"])) {
   	$cq5anw1=$_COOKIE["cq5anw1"];
}else{
	$cq5anw1=$q5anw1;
}
if(isset($_COOKIE["cq5anw2"])) {
   	$cq5anw2=$_COOKIE["cq5anw2"];
}else{
	$cq5anw2=$q5anw2;
}
if(isset($_COOKIE["cq5anw3"])) {
   	$cq5anw3=$_COOKIE["cq5anw3"];
}else{
	$cq5anw3=$q5anw3;
}
if(isset($_COOKIE["cq5anw4"])) {
   	$cq5anw4=$_COOKIE["cq5anw4"];
}else{
	$cq5anw4=$q5anw4;
}

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
				<?php echo "<td width=\"80%\"><script>q1pictures($question1[2],$question1[12]);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center; \"><input type=\"number\" id=\"q1q11\" name=\"q1question11\"  data-role=\"none\" value=\"$cq1q11\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq1" name="q1question1" type="radio" value="1" data-role="none" disabled <?php if($cq1q1=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq11\" name=\"q1question11\"  data-role=\"none\" value=\"$question1[2]\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq1" name="q1qquestion1" type="radio" disabled data-role="none" <?php if($question1[2]>$question1[3]) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($question1[3],$question1[13]);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q12\" name=\"q1question12\" data-role=\"none\" value=\"$cq1q12\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq2" name="q1question1" type="radio" value="2" data-role="none" disabled <?php if($cq1q1=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qqq12\" name=\"q1question12\"data-role=\"none\" value=\"$question1[3]\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq2" name="q1qquestion1" type="radio" disabled data-role="none"<?php if($question1[3]>$question1[2]) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($question1[4],$question1[14]);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q21\" name=\"q1question21\" data-role=\"none\" value=\"$cq1q21\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq3" name="q1question2" value="1" type="radio" disabled data-role="none" <?php if($cq1q2=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq21\" name=\"q1question21\" data-role=\"none\" value=\"$question1[4]\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq3" name="q1qquestion2" type="radio" disabled data-role="none" <?php if($question1[4]>$question1[5]) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($question1[5],$question1[15]);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q22\" name=\"q1question22\" data-role=\"none\" value=\"$cq1q22\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq4" name="q1question2" type="radio" value="2" disabled data-role="none" <?php if($cq1q2=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq22\" name=\"q1question22\" data-role=\"none\" value=\"$question1[5]\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qqq4" name="q1qquestion2" type="radio" disabled data-role="none" <?php if($question1[5]>$question1[4]) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($question1[6],$question1[16]);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q31\" name=\"q1question31\" data-role=\"none\" value=\"$cq1q31\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq5" name="q1question3" type="radio" value="1" disabled data-role="none" <?php if($cq1q3=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq31\" name=\"q1question31\" data-role=\"none\" value=\"$question1[6]\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qqq5" name="q1qquestion3" type="radio" disabled data-role="none" <?php if($question1[6]>$question1[7]) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($question1[7],$question1[17]);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q32\" name=\"q1question32\" data-role=\"none\" value=\"$cq1q32\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq6" name="q1question3" type="radio" value="2" disabled data-role="none" <?php if($cq1q3=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq32\" name=\"q1question32\" data-role=\"none\" value=\"$question1[7]\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq6" name="q1qquestion3" type="radio" disabled data-role="none" <?php if($question1[7]>$question1[6]) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($question1[8],$question1[18]);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q41\" name=\"q1question41\" data-role=\"none\" value=\"$cq1q41\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq7" name="q1question4" type="radio" value="1" disabled data-role="none" <?php if($cq1q4=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq41\" name=\"q1question41\" data-role=\"none\" value=\"$question1[8]\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq7" name="q1qquestion4" type="radio" disabled data-role="none" <?php if($question1[8]>$question1[9]) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($question1[9],$question1[19]);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q42\" name=\"q1question42\" data-role=\"none\" value=\"$cq1q42\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq8" name="q1question4" type="radio" value="2" disabled data-role="none" <?php if($cq1q4=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq42\" name=\"q1question42\" data-role=\"none\" value=\"$question1[9]\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq8" name="q1qquestion4" type="radio" disabled data-role="none" <?php if($question1[9]>$question1[8]) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($question1[10],$question1[20]);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q51\" name=\"q1question51\" data-role=\"none\" value=\"$cq1q51\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq9" name="q1question5" type="radio" value="1" disabled data-role="none" <?php if($cq1q5=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq51\" name=\"q1question51\" data-role=\"none\" value=\"$question1[10]\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq9" name="q1qquestion5" type="radio" disabled data-role="none" <?php if($question1[10]>$question1[11]) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($question1[11],$question1[21]);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q52\" name=\"q1question52\" data-role=\"none\" value=\"$cq1q52\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq10" name="q1question5" type="radio" value="2" disabled data-role="none" <?php if($cq1q5=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq52\" name=\"q1question52\" data-role=\"none\" value=\"$question1[11]\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq10" name="q1qquestion5" type="radio" disabled data-role="none" <?php if($question1[11]>$question1[10]) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<div data-role="footer" style="text-align:center;">
			<a href="Topic.php" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">回到首頁</a>
  			<a href="#cognition_anwser2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
		</div>
		</div>
		<div data-role="page" id="cognition_anwser2">
		<h3 align="center" style="color: red">拿了<?php echo "$q2score"; ?>/20分</h3>
		<table border="1" style="margin: auto;">
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($question2[2]);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($question2[3]);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($question2[4]);</script></td>";?>
		</tr>
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($question2[5]);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($question2[6]);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($question2[7]);</script></td>";?>
		</tr>
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($question2[8]);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($question2[9]);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($question2[10]);</script></td>";?>
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
				<?php echo "1.在<script>setquestionname($a[$q211])</script>的<script>writedirection($question2[11],$question2[15])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q1" name="question555" disabled="disabled" data-role="none" <?php if($cq2q1=="$question2[19]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q219]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q2" name="question555" disabled="disabled" data-role="none" <?php if($cq2q1=="$question2[20]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q220]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q3" name="question555" disabled="disabled" data-role="none" <?php if($cq2q1=="$question2[21]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q221]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q4" name="question555" disabled="disabled" data-role="none" <?php if($cq2q1=="$question2[22]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q222]);</script>"; ?></label></div>
			</td>
			<td>
					<div style="float: left;"><label><input type="radio" id="q11" name="question1" disabled="disabled" data-role="none" <?php if($question2[35]=="$question2[19]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q219]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q12" name="question1" disabled="disabled" data-role="none" <?php if($question2[35]=="$question2[20]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q220]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q13" name="question1" disabled="disabled" data-role="none" <?php if($question2[35]=="$question2[21]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q221]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q14" name="question1" disabled="disabled" data-role="none" <?php if($question2[35]=="$question2[22]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q222]);</script>"; ?></label></div>
				
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "2.在<script>setquestionname($a[$q212])</script>的<script>writedirection($question2[12],$question2[16])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q5" name="question333" disabled="disabled" data-role="none" <?php if($cq2q2=="$question2[23]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q223]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q6" name="question333" disabled="disabled" data-role="none" <?php if($cq2q2=="$question2[24]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q224]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q7" name="question333" disabled="disabled" data-role="none" <?php if($cq2q2=="$question2[25]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q225]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q8" name="question333" disabled="disabled" data-role="none" <?php if($cq2q2=="$question2[26]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q226]);</script>"; ?></label></div>
			</td>
			<td>				
					<div style="float: left;"><label><input type="radio" id="q21" name="question2" disabled="disabled" data-role="none" <?php if($question2[36]=="$question2[23]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q223]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q22" name="question2" disabled="disabled" data-role="none" <?php if($question2[36]=="$question2[24]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q224]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q23" name="question2" disabled="disabled" data-role="none" <?php if($question2[36]=="$question2[25]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q225]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q24" name="question2" disabled="disabled" data-role="none" <?php if($question2[36]=="$question2[26]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q226]);</script>"; ?></label></div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "3.在<script>setquestionname($a[$q213])</script>的<script>writedirection($question2[13],$question2[17])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q9"  name="question222" disabled="disabled" data-role="none" <?php if($cq2q3=="$question2[27]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q227]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q10" name="question222" disabled="disabled" data-role="none" <?php if($cq2q3=="$question2[28]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q228]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q11" name="question222" disabled="disabled" data-role="none" <?php if($cq2q3=="$question2[29]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q229]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q12" name="question222" disabled="disabled" data-role="none" <?php if($cq2q3=="$question2[30]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q230]);</script>"; ?></label></div>
			</td>
			<td>
					<div style="float: left;"><label><input type="radio" id="q31" name="question3" disabled="disabled" data-role="none" <?php if($question2[37]=="$question2[27]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q227]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q32" name="question3" disabled="disabled" data-role="none" <?php if($question2[37]=="$question2[28]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q228]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q33" name="question3" disabled="disabled" data-role="none" <?php if($question2[37]=="$question2[29]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q229]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q34" name="question3" disabled="disabled" data-role="none" <?php if($question2[37]=="$question2[30]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q230]);</script>"; ?></label></div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "4.在<script>setquestionname($a[$q214])</script>的<script>writedirection($question2[14],$question2[18])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q13" name="question44" disabled="disabled" data-role="none" <?php if($cq2q4=="$question2[31]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q231]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q14" name="question44" disabled="disabled" data-role="none" <?php if($cq2q4=="$question2[32]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q232]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q15" name="question44" disabled="disabled" data-role="none" <?php if($cq2q4=="$question2[33]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q233]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q16" name="question44" disabled="disabled" data-role="none" <?php if($cq2q4=="$question2[34]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q234]);</script>"; ?></label></div>
			</td>
			<td>
					<div style="float: left;"><label><input type="radio" id="q41" name="question4" disabled="disabled" data-role="none" <?php if($question2[38]=="$question2[31]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q231]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q42" name="question4" disabled="disabled" data-role="none" <?php if($question2[38]=="$question2[32]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q232]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q43" name="question4" disabled="disabled" data-role="none" <?php if($question2[38]=="$question2[33]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q233]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q44" name="question4" disabled="disabled" data-role="none" <?php if($question2[38]=="$question2[34]") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$q234]);</script>"; ?></label></div>
			</td>
		</tr>
	</table>
	<div data-role="footer" style="text-align:center;">
				<a href="#cognition_anwser1" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
				<a href="Topic.php" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
  				<a href="#cognition_anwser3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
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
				<?php echo "<td width=\"60%\"><script>q3pictures($question3[2],$question3[7]);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq1" name="question11" type="radio" value="1" disabled data-role="none" <?php if($cq3q1=="$question3[7]") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq1" name="qquestion1" type="radio" disabled data-role="none" <?php if($question3[7]>$question3[8]) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($question3[2],$question3[8]);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq2" name="question21" type="radio" value="2" disabled data-role="none" <?php if($cq3q1=="$question3[8]") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq2" name="qquestion1" type="radio" disabled data-role="none" <?php if($question3[8]>$question3[7]) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($question3[3],$question3[9]);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq3" name="question22" value="1" type="radio" disabled data-role="none" <?php if($cq3q2=="$question3[9]") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq3" name="qquestion2" type="radio" disabled data-role="none" <?php if($question3[9]>$question3[10]) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($question3[3],$question3[10]);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq4" name="question22" type="radio" value="2" disabled data-role="none" <?php if($cq3q2=="$question3[10]") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq4" name="qquestion2" type="radio" disabled data-role="none" <?php if($question3[10]>$question3[9]) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($question3[4],$question3[11]);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq5" name="question33" type="radio" value="1" disabled data-role="none" <?php if($q3q3=="$question3[11]") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq5" name="qquestion3" type="radio" disabled data-role="none" <?php if($question3[11]>$question3[12]) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($question3[4],$question3[12]);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq6" name="question33" type="radio" value="2" disabled data-role="none" <?php if($cq3q3=="$question3[12]") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq6" name="qquestion3" type="radio" disabled data-role="none" <?php if($question3[12]>$question3[11]) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($question3[5],$question3[13]);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq7" name="question34" type="radio" value="1" disabled data-role="none" <?php if($cq3q4=="$question3[13]") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq7" name="qquestion4" type="radio" disabled data-role="none" <?php if($question3[13]>$question3[14]) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($question3[5],$question3[14]);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq8" name="question34" type="radio" value="2" disabled data-role="none" <?php if($cq3q4=="$question3[14]") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq8" name="qquestion4" type="radio" disabled data-role="none" <?php if($question3[14]>$question3[13]) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($question3[6],$question3[15]);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq9" name="question55" type="radio" value="1" disabled data-role="none" <?php if($cq3q5=="$question3[15]") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq9" name="qquestion5" type="radio" disabled data-role="none" <?php if($question3[15]>$question3[16]) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($question3[6],$question3[16]);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq10" name="question55" type="radio" value="2" disabled data-role="none" <?php if($cq3q5=="$question3[16]") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq10" name="qquestion5" type="radio" disabled data-role="none" <?php if($question3[16]>$question3[15]) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<div data-role="footer" style="text-align:center;">
				<a href="#cognition_anwser2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
				<a href="Topic.php" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
  				<a href="#cognition_anwser4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
	</div>
	</div>
	<div data-role="page" id="cognition_anwser4">
		<h3 align="center" style="color: red">拿了<?php echo "$q4score"; ?>/20分</h3>
		<div align="center">
	<table border="1">
		<tr>
			<td>
				<?php echo "<script>
					q4pictures($question4[2]);
					q4pictures($question4[3]);
					q4pictures($question4[4]);
					q4pictures($question4[5]);
					q4pictures($question4[6]);
					q4pictures($question4[7]);
					q4pictures($question4[8]);
					q4pictures($question4[9]);
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
				(1)從<?php echo "<script>direction($question4[13]);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$q410]);</script>";?>排在第
						<input type="number" id="aa1" name="aanwser1" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$canw1'";?>>個。
			</td>
			<td colspan="2">
				(1)從<?php echo "<script>direction($question4[13]);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$q410]);</script>";?>排在第
						<input type="number" id="aa1" name="aanwser1" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$question4[20]'";?>>個。
			</td>
		</tr>
		<tr>
			<td>
				(2)從<?php echo "<script>direction($question4[14]);</script>";?>數起,第<?php echo "<script>w($question4[11]);</script>";?>個是
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="aa21" name="aaanwser2" disabled data-role="none" <?php if($canw2=="$question4[17]") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q417]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa22" name="aaanwser2" disabled data-role="none" <?php if($canw2=="$question4[18]") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q418]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa23" name="aaanwser2" disabled data-role="none" <?php if($canw2=="$question4[19]") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q419]);</script>";?></label></div>。
			</td>
			<td>
				(2)從<?php echo "<script>direction($question4[14]);</script>";?>數起,第<?php echo "<script>w($question4[11]);</script>";?>個是
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="aa21" name="aanwser2" disabled data-role="none" <?php if($question4[21]=="$question4[17]") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q417]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa22" name="aanwser2" disabled data-role="none" <?php if($question4[21]=="$question4[18]") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q418]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa23" name="aanwser2" disabled data-role="none" <?php if($question4[21]=="$question4[19]") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$q419]);</script>";?></label></div>。
			</td>
		</tr>
		<tr>
			<td colspan="2">
				(3)從<?php echo "<script>direction($question4[15]);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$q412]);</script>";?>排在第
				<input type="number" id="aa3" name="aanwser3" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$canw3'";?>>個,也可說是從<?php echo "<script>direction($question4[16]);</script>";?>數起第
				<input type="number" id="aa4" name="aanwser4" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$canw4'";?>>個。
			</td>
			<td colspan="2">
				(3)從<?php echo "<script>direction($question4[15]);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$q412]);</script>";?>排在第
				<input type="number" id="aa3" name="aanwser3" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$question4[22]'";?>>個,也可說是從<?php echo "<script>direction($question4[16]);</script>";?>數起第
				<input type="number" id="aa4" name="aanwser4" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$question4[23]'";?>>個。
			</td>
		</tr>
	</table>
</div>
	<div data-role="footer" style="text-align:center;">
			<a href="#cognition_anwser3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="Topic.php" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
  			<a href="#cognition_anwser5" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
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
		<?php echo "<td><script>questionpictures($question5[2]);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q11" name="qquestion12" disabled data-role="none" <?php echo "value=\"$question5[6]\"";?><?php if($cq5anw1=="$question5[6]") echo "checked=checked";?>><?php echo "<script>insertp1($question5[2],1,$question5[6]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q12" name="qquestion12" disabled data-role="none" <?php echo "value=\"$question5[7]\"";?><?php if($cq5anw1=="$question5[7]") echo "checked=checked";?>><?php echo "<script>insertp1($question5[2],2,$question5[7]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q13" name="qquestion12" disabled data-role="none" <?php echo "value=\"$question5[8]\"";?><?php if($cq5anw1=="$question5[8]") echo "checked=checked";?>><?php echo "<script>insertp1($question5[2],3,$question5[8]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q11" name="qquestion11" disabled data-role="none" <?php echo "value=\"$question5[6]\"";?><?php if($question5[6]<10) echo "checked=checked";?>><?php echo "<script>insertp1($question5[2],1,$question5[6]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q12" name="qquestion11" disabled data-role="none" <?php echo "value=\"$question5[7]\"";?><?php if($question5[7]<10) echo "checked=checked";?>><?php echo "<script>insertp1($question5[2],2,$question5[7]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q13" name="qquestion11" disabled data-role="none" <?php echo "value=\"$question5[8]\"";?><?php if($question5[8]<10) echo "checked=checked";?>><?php echo "<script>insertp1($question5[2],3,$question5[8]);</script>"; ?></label></div>
		</td>	
	</tr>
	<tr>
		<?php echo "<td><script>questionpictures($question5[3]);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q21" name="qquestion21" disabled data-role="none" <?php echo "value=\"$question5[9]\"";?><?php if($cq5anw2=="$question5[9]") echo "checked=checked";?>><?php echo "<script>insertp2($question5[3],1,$question5[9]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q22" name="qquestion21" disabled data-role="none" <?php echo "value=\"$question5[10]\"";?><?php if($cq5anw2=="$question5[10]") echo "checked=checked";?>><?php echo "<script>insertp2($question5[3],2,$question5[10]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q23" name="qquestion21" disabled data-role="none" <?php echo "value=\"$question5[11]\"";?><?php if($cq5anw2=="$question5[11]") echo "checked=checked";?>><?php echo "<script>insertp2($question5[3],3,$question5[11]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q21" name="qquestion22" disabled data-role="none" <?php echo "value=\"$question5[9]\"";?><?php if($question5[9]<10) echo "checked=checked";?>><?php echo "<script>insertp2($question5[3],1,$question5[9]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q22" name="qquestion22" disabled data-role="none" <?php echo "value=\"$question5[10]\"";?><?php if($question5[10]<10) echo "checked=checked";?>><?php echo "<script>insertp2($question5[3],2,$question5[10]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q23" name="qquestion22" disabled data-role="none" <?php echo "value=\"$question5[11]\"";?><?php if($question5[11]<10) echo "checked=checked";?>><?php echo "<script>insertp2($question5[3],3,$question5[11]);</script>"; ?></label></div>
		</td>	
	</tr>
	<tr>
		<?php echo "<td><script>questionpictures($question5[4]);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q31" name="qquestion31" disabled data-role="none" <?php echo "value=\"$question5[12]\"";?><?php if($cq5anw3=="$question5[12]") echo "checked=checked";?>><?php echo "<script>insertp3($question5[4],1,$question5[12]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q32" name="qquestion31" disabled data-role="none" <?php echo "value=\"$question5[13]\"";?><?php if($cq5anw3=="$question5[13]") echo "checked=checked";?>><?php echo "<script>insertp3($question5[4],2,$question5[13]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q33" name="qquestion31" disabled data-role="none" <?php echo "value=\"$question5[14]\"";?><?php if($cq5anw3=="$question5[14]") echo "checked=checked";?>><?php echo "<script>insertp3($question5[4],3,$question5[14]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q31" name="qquestion33" disabled data-role="none" <?php echo "value=\"$question5[12]\"";?><?php if($question5[12]<10) echo "checked=checked";?>><?php echo "<script>insertp3($question5[4],1,$question5[12]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q32" name="qquestion33" disabled data-role="none" <?php echo "value=\"$question5[13]\"";?><?php if($question5[13]<10) echo "checked=checked";?>><?php echo "<script>insertp3($question5[4],2,$question5[13]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q33" name="qquestion33" disabled data-role="none" <?php echo "value=\"$question5[14]\"";?><?php if($question5[14]<10) echo "checked=checked";?>><?php echo "<script>insertp3($question5[4],3,$question5[14]);</script>"; ?></label></div>
		</td>	
	</tr>
	<tr>
		<?php echo "<td><script>questionpictures($question5[5]);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q41" name="qquestion41" disabled data-role="none" <?php echo "value=\"$question5[15]\"";?><?php if($cq5anw4=="$question5[15]") echo "checked=checked";?>><?php echo "<script>insertp4($question5[5],1,$question5[15]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q42" name="qquestion41" disabled data-role="none" <?php echo "value=\"$question5[16]\"";?><?php if($cq5anw4=="$question5[16]") echo "checked=checked";?>><?php echo "<script>insertp4($question5[5],2,$question5[16]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q43" name="qquestion41" disabled data-role="none" <?php echo "value=\"$question5[17]\"";?><?php if($cq5anw4=="$question5[17]") echo "checked=checked";?>><?php echo "<script>insertp4($question5[5],3,$question5[17]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q41" name="qquestion44" disabled data-role="none" <?php echo "value=\"$question5[15]\"";?><?php if($question5[15]<10) echo "checked=checked";?>><?php echo "<script>insertp4($question5[5],1,$question5[15]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q42" name="qquestion44" disabled data-role="none" <?php echo "value=\"$question5[16]\"";?><?php if($question5[16]<10) echo "checked=checked";?>><?php echo "<script>insertp4($question5[5],2,$question5[16]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q43" name="qquestion44" disabled data-role="none" <?php echo "value=\"$question5[17]\"";?><?php if($question5[17]<10) echo "checked=checked";?>><?php echo "<script>insertp4($question5[5],3,$question5[17]);</script>"; ?></label></div>
		</td>	
	</tr>
	</table>
		<div data-role="footer" style="text-align:center;">
			<a href="#cognition_anwser4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="Topic.php" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
	</div>
	</div>
	</form>