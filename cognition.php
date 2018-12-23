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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="cognitionq1.js"></script>
<script type="text/javascript" src="cognitionq2.js"></script>
<script type="text/javascript" src="cognitionq3.js"></script>
<script type="text/javascript" src="cognitionq4.js"></script>
<script type="text/javascript" src="cognitionq5.js"></script>
	<form method="post" action="cognition_finish.php" data-ajax="false" name="form1">
		<div data-role="page" id="cognition1">
  		<h3 align="center">數一數,並選出比較多的那種,一格1分</h3>
		<table border="1" width="60%" align="center">
			<tr>
				<th style="text-align: center;">圖</td>
				<th style="text-align: center;">個數</td>
				<th style="text-align: center;">選比較多</td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($question1[2],$question1[12]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q11" name="q1question11" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq1" name="q1question1" type="radio" value="1"/></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($question1[3],$question1[13]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q12" name="q1question12"></td>
				<td width="5%" style="text-align: center;"><input id="q1qq2" name="q1question1" type="radio" value="2"/></td>
			</tr>
		</table>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($question1[4],$question1[14]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q21" name="q1question21" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq3" name="q1question2" value="1" type="radio"/></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($question1[5],$question1[15]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q22" name="q1question22" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq4" name="q1question2" type="radio" value="2" /></td>
			</tr>
		</table>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($question1[6],$question1[16]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q31" name="q1question31" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq5" name="q1question3" type="radio" value="1"/></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($question1[7],$question1[17]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q32" name="q1question32" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq6" name="q1question3" type="radio" value="2"/></td>
			</tr>
		</table>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($question1[8],$question1[18]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q41" name="q1question41" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq7" name="q1question4" type="radio" value="1"/></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($question1[9],$question1[19]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q42" name="q1question42" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq8" name="q1question4" type="radio" value="2"/></td>
			</tr>
		</table>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($question1[10],$question1[20]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q51" name="q1question51" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq9" name="q1question5" type="radio" value="1"/></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($question1[11],$question1[21]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q52" name="q1question52" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq10" name="q1question5" type="radio" value="2"/></td>
			</tr>
		</table>
		<div data-role="footer" style="text-align:center;">
		<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  		<a href="#cognition2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
 		 </div>
		</div>
		<div data-role="page" id="cognition2">
  		<h3 align="center">請幫忙找一找,選出正確的答案,一題5分</h3>
			<table border="1" style="margin: auto;">
					<tr>
						<td style="text-align: center;"><?php echo "<script>q2pictures($question2[2]);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($question2[3]);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($question2[4]);</script>";?></td>
					</tr>
					<tr>
						<td style="text-align: center;"><?php echo "<script>q2pictures($question2[5]);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($question2[6]);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($question2[7]);</script>";?></td>
					</tr>
					<tr>
						<td style="text-align: center;"><?php echo "<script>q2pictures($question2[8]);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($question2[9]);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($question2[10]);</script>";?></td>
			     	</tr>
				</table>
				<table border="1" style="margin: auto; width: 40%;">
					<tr>
						<th>
						<?php echo "1.在<script>setquestionname($a[$q211])</script>的<script>writedirection($question2[11],$question2[15])</script>是";?>
						</td>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q11" name="q2question1" data-role="none" <?php echo "value=\"$question2[19]\""; ?>><?php echo "<script>q2pictures($a[$q219]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q12" name="q2question1" data-role="none" <?php echo "value=\"$question2[20]\""; ?>><?php echo "<script>q2pictures($a[$q220]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q13" name="q2question1" data-role="none" <?php echo "value=\"$question2[21]\""; ?>><?php echo "<script>q2pictures($a[$q221]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q14" name="q2question1" data-role="none" <?php echo "value=\"$question2[22]\""; ?>><?php echo "<script>q2pictures($a[$q222]);</script>"; ?></label></div>
						</td>
					</tr>
					<tr>
						<th>
						<?php echo "2.在<script>setquestionname($a[$q212])</script>的<script>writedirection($question2[12],$question2[16])</script>是";?>
						</td>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q21" name="q2question2" data-role="none" <?php echo "value=\"$question2[23]\""; ?>><?php echo "<script>q2pictures($a[$q223]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q22" name="q2question2" data-role="none" <?php echo "value=\"$question2[24]\""; ?>><?php echo "<script>q2pictures($a[$q224]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q23" name="q2question2" data-role="none" <?php echo "value=\"$question2[25]\""; ?>><?php echo "<script>q2pictures($a[$q225]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q24" name="q2question2" data-role="none" <?php echo "value=\"$question2[26]\""; ?>><?php echo "<script>q2pictures($a[$q226]);</script>"; ?></label></div>
						</td>
					</tr>
					<tr>
						<th>
						<?php echo "3.在<script>setquestionname($a[$q213])</script>的<script>writedirection($question2[13],$question2[17])</script>是";?>
						</td>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q31" name="q2question3" data-role="none" <?php echo "value=\"$question2[27]\""; ?>><?php echo "<script>q2pictures($a[$q227]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q32" name="q2question3" data-role="none" <?php echo "value=\"$question2[28]\""; ?>><?php echo "<script>q2pictures($a[$q228]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q33" name="q2question3" data-role="none" <?php echo "value=\"$question2[29]\""; ?>><?php echo "<script>q2pictures($a[$q229]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q34" name="q2question3" data-role="none" <?php echo "value=\"$question2[30]\""; ?>><?php echo "<script>q2pictures($a[$q230]);</script>"; ?></label></div>
						</td>
					</tr>
					<tr>
						<th>
						<?php echo "4.在<script>setquestionname($a[$q214])</script>的<script>writedirection($question2[14],$question2[18])</script>是";?>
						</td>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q41" name="q2question4" data-role="none" <?php echo "value=\"$question2[31]\""; ?>><?php echo "<script>q2pictures($a[$q231]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q42" name="q2question4" data-role="none" <?php echo "value=\"$question2[32]\""; ?>><?php echo "<script>q2pictures($a[$q232]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q43" name="q2question4" data-role="none" <?php echo "value=\"$question2[33]\""; ?>><?php echo "<script>q2pictures($a[$q233]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q44" name="q2question4" data-role="none" <?php echo "value=\"$question2[34]\""; ?>><?php echo "<script>q2pictures($a[$q234]);</script>"; ?></label></div>
						</td>
					</tr>
				</table>
				<div data-role="footer" style="text-align:center;">
				<a href="#cognition1" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
				<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  				<a href="#cognition3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
 		 </div>
			</div>
			<div data-role="page" id="cognition3">
				<h3 align="center">比一比,選出比較長的那一種,一題4分</h3>
				<table border="1" width="60%" align="center">
			<tr>
				<td style="text-align: center;">圖</td>
				<td style="text-align: center;">選比較長</td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($question3[2],$question3[7]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq1" name="q3question1" type="radio" <?php echo "value=\"$question3[7]\""; ?>></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($question3[2],$question3[8]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq2" name="q3question1" type="radio" <?php echo "value=\"$question3[8]\""; ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($question3[3],$question3[9]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq3" name="q3question2" type="radio" <?php echo "value=\"$question3[9]\""; ?>></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($question3[3],$question3[10]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq4" name="q3question2" type="radio" <?php echo "value=\"$question3[10]\""; ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($question3[4],$question3[11]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq5" name="q3question3" type="radio" <?php echo "value=\"$question3[11]\""; ?>></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($question3[4],$question3[12]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq6" name="q3question3" type="radio" <?php echo "value=\"$question3[12]\""; ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($question3[5],$question3[13]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq7" name="q3question4" type="radio" <?php echo "value=\"$question3[13]\""; ?>></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($question3[5],$question3[14]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq8" name="q3question4" type="radio" <?php echo "value=\"$question3[14]\""; ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($question3[6],$question3[15]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq9" name="q3question5" type="radio" <?php echo "value=\"$question3[15]\""; ?>></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($question3[6],$question3[16]);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq10" name="q3question5" type="radio" <?php echo "value=\"$question3[16]\""; ?>></td>
			</tr>
		</table>
		<div data-role="footer" style="text-align:center;">
				<a href="#cognition2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
				<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  				<a href="#cognition4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
 		 </div>
	</div>
	<div data-role="page" id="cognition4">
		<h2 align="center">請幫忙找一找,填入正確的答案,一題5分</h2>
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
		<br/>
		<div align="center">
			<table border="1">
				<tr>
					<td colspan="2">
						<div>
						<span>(1)從<?php echo "<script>direction($question4[13]);</script>"; ?>數起,<?php echo "<script>q4pictures($q4a[$q410]);</script>";?>排在第</span>
						<input type="number" id="a1" name="q4anwser1" data-role="none" style="height:50px;width:50px;line-height:30px;border:1px solid #999;vertical-align:middle">
						個。
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div>
						<span style="float: left; vertical-align:middle">(2)從<?php echo "<script>direction($question4[14]);</script>";?>數起,第<?php echo "<script>w($question4[11])</script>";?>個是:</span>
						
						</div>
					</td>
					<td>
						<div style="float: left;"><label><input data-role="none" type="radio" id="a21" name="q4anwser2" <?php echo "value=\"$question4[17]\""; ?>><?php echo "<script>q4pictures($q4a[$q417]);</script>";?></label></div>
						<div style="float: left;"><label><input data-role="none" type="radio" id="a22" name="q4anwser2" <?php echo "value=\"$question4[18]\""; ?>><?php echo "<script>q4pictures($q4a[$q418]);</script>";?></label></div>
						<div style="float: left;"><label><input data-role="none" type="radio" id="a23" name="q4anwser2" <?php echo "value=\"$question4[19]\""; ?>><?php echo "<script>q4pictures($q4a[$q419]);</script>";?></label></div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div>
						<span>(3)從<?php echo "<script>direction($question4[15]);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$q412]);</script>";?>排在第</span>
						<input type="number" id="a3" name="q4anwser3" data-role="none" style="height:50px;width:50px; line-height:30px;border:1px solid #999;vertical-align:middle"><span>個,也可說是從<?php echo "<script>direction($question4[16]);</script>";?>數起第</span><input type="number" id="a4" name="q4anwser4" data-role="none" style="height:50px;width:50px; line-height:30px;border:1px solid #999;vertical-align:middle">個。
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div data-role="footer" style="text-align:center;">
				<a href="#cognition3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
				<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  				<a href="#cognition5" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
 		 </div>
	</div>
	<div data-role="page" id="cognition5">
		<h3 align="center">把跟前面形狀相似的選出來,一題5分</h3>
		<div align="center">
		<table border="1">
			<tr>
				<td><?php echo "<script>gtqs($question5[2]);</script>";?></td>
				<td>
					<div style="float: left;"><label><input type="radio" id="q5q11" name="q5question1" data-role="none" <?php echo "value=\"$question5[6]\""; ?>><?php echo "<script>insertp1($question5[2],1,$question5[6]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q12" name="q5question1" data-role="none" <?php echo "value=\"$question5[7]\""; ?>><?php echo "<script>insertp1($question5[2],2,$question5[7]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q13" name="q5question1" data-role="none" <?php echo "value=\"$question5[8]\""; ?>><?php echo "<script>insertp1($question5[2],3,$question5[8]);</script>";?></label></div>
				</td>
			</tr>
			<tr>
				<td><?php echo "<script>gtqs($question5[3]);</script>";?></td>
				<td>
					<div style="float: left;"><label><input type="radio" id="q5q21" name="q5question2" data-role="none" <?php echo "value=\"$question5[9]\""; ?>><?php echo "<script>insertp2($question5[3],1,$question5[9]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q22" name="q5question2" data-role="none" <?php echo "value=\"$question5[10]\""; ?>><?php echo "<script>insertp2($question5[3],2,$question5[10]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q23" name="q5question2" data-role="none" <?php echo "value=\"$question5[11]\""; ?>><?php echo "<script>insertp2($question5[3],3,$question5[11]);</script>";?></label></div>
				</td>
			</tr>
			<tr>
				<td><?php echo "<script>gtqs($question5[4]);</script>";?></td>
				<td>
					<div style="float: left;"><label><input type="radio" id="q5q31" name="q5question3" data-role="none" <?php echo "value=\"$question5[12]\""; ?>><?php echo "<script>insertp3($question5[4],1,$question5[12]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q32" name="q5question3" data-role="none" <?php echo "value=\"$question5[13]\""; ?>><?php echo "<script>insertp3($question5[4],2,$question5[13]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q33" name="q5question3" data-role="none" <?php echo "value=\"$question5[14]\""; ?>><?php echo "<script>insertp3($question5[4],3,$question5[14]);</script>";?></label></div>
				</td>
			</tr>
			<tr>
				<td><?php echo "<script>gtqs($question5[5]);</script>";?></td>
				<td>
					<div style="float: left;"><label><input type="radio" id="q5q41" name="q5question4" data-role="none" <?php echo "value=\"$question5[15]\""; ?>><?php echo "<script>insertp4($question5[5],1,$question5[15]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q42" name="q5question4" data-role="none" <?php echo "value=\"$question5[16]\""; ?>><?php echo "<script>insertp4($question5[5],2,$question5[16]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q43" name="q5question4" data-role="none" <?php echo "value=\"$question5[17]\""; ?>><?php echo "<script>insertp4($question5[5],3,$question5[17]);</script>";?></label></div>
				</td>
			</tr>
		</table>
		<div data-role="footer" style="text-align:center;">
				<a href="#cognition4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
				<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
 		 </div>
		</div>
	</div>
	</form>
</body>
</html>