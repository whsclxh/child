<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="cognitionq1.js"></script>
<script type="text/javascript" src="cognitionq2.js"></script>
<script type="text/javascript" src="cognitionq3.js"></script>
<script type="text/javascript" src="cognitionq4.js"></script>
<script type="text/javascript" src="cognitionq5.js"></script>
<script type="text/javascript" src="cognitiononload.js"></script>
<?php 
	require "q1ramdon.php";
	require "q2ramdon.php";
	require "q3ramdon.php";
	require "q4ramdon.php";
	require "q5ramdon.php";    	
?>
<body>
	<form method="post" action="cognition_finish.php" data-ajax="false">
		<div data-role="page" id="cognition">
		<div align="center" valign="middle">
		<a href="#cognition1" class="ui-btn" style="width: 5%;" data-transition="slide">開始</a>
		</div>
		</div>
		<div data-role="page" id="cognition1">
		<h3 align="center">數一數,並選出比較多的那種,一格1分</h3>
		<table border="1" width="60%" align="center">
			<tr>
				<th style="text-align: center;">圖</td>
				<th style="text-align: center;">個數</td>
				<th style="text-align: center;">選比較多</td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($q1num1,$q1pic1);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q11" name="q1question11" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq1" name="q1question1" type="radio" value="1"/></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($q1num2,$q1pic2);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q12" name="q1question12"></td>
				<td width="5%" style="text-align: center;"><input id="q1qq2" name="q1question1" type="radio" value="2"/></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($q1num3,$q1pic3);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q21" name="q1question21" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq3" name="q1question2" value="1" type="radio"/></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($q1num4,$q1pic4);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q22" name="q1question22" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq4" name="q1question2" type="radio" value="2" /></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($q1num5,$q1pic5);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q31" name="q1question31" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq5" name="q1question3" type="radio" value="1"/></td>
			</tr>
			<tr>
				<td width="90%" ><?php echo "<script>q1pictures($q1num6,$q1pic6);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q32" name="q1question32" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq6" name="q1question3" type="radio" value="2"/></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($q1num7,$q1pic7);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q41" name="q1question41" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq7" name="q1question4" type="radio" value="1"/></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($q1num8,$q1pic8);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q42" name="q1question42" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq8" name="q1question4" type="radio" value="2"/></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($q1num9,$q1pic9);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q51" name="q1question51" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq9" name="q1question5" type="radio" value="1"/></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q1pictures($q1num10,$q1pic10);</script>";?></td>
				<td width="5%" style="text-align: center;"><input type="number" id="q1q52" name="q1question52" ></td>
				<td width="5%" style="text-align: center;"><input id="q1qq10" name="q1question5" type="radio" value="2"/></td>
			</tr>
		</table>
		<div align="center">
			<a href="#cognition2" class="ui-btn" style="width: 5%;" data-transition="slide">下一題</a>
		</div>
		</div>
		<div data-role="page" id="cognition2">
			<h3 align="center">請幫忙找一找,選出正確的答案,一題5分</h3>
				<table border="1" style="margin: auto;">
					<tr>
						<td style="text-align: center;"><?php echo "<script>q2pictures($q2pic1);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($q2pic2);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($q2pic3);</script>";?></td>
					</tr>
					<tr>
						<td style="text-align: center;"><?php echo "<script>q2pictures($q2pic4);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($q2pic5);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($q2pic6);</script>";?></td>
					</tr>
					<tr>
						<td style="text-align: center;"><?php echo "<script>q2pictures($q2pic7);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($q2pic8);</script>";?></td>
						<td style="text-align: center;"><?php echo "<script>q2pictures($q2pic9);</script>";?></td>
			     	</tr>
				</table>
				<table border="1" style="margin: auto; width: 60%;">
					<tr>
						<th>
						<?php echo "1.在<script>setquestionname($a[$q2qf1])</script>的<script>writedirection($q2qf1,$d[0])</script>是";?>
						</td>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q11" name="q2question1"><?php echo "<script>q2pictures($a[$q2q1op1]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q12" name="q2question1"><?php echo "<script>q2pictures($a[$q2q1op2]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q13" name="q2question1"><?php echo "<script>q2pictures($a[$q2q1op3]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q14" name="q2question1"><?php echo "<script>q2pictures($a[$q2q1op4]);</script>"; ?></label></div>
						</td>
					</tr>
					<tr>
						<th>
						<?php echo "2.在<script>setquestionname($a[$q2qf2])</script>的<script>writedirection($q2qf2,$d[1])</script>是";?>
						</td>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q21" name="q2question2"><?php echo "<script>q2pictures($a[$q2q2op1]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q22" name="q2question2"><?php echo "<script>q2pictures($a[$q2q2op2]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q23" name="q2question2"><?php echo "<script>q2pictures($a[$q2q2op3]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q24" name="q2question2"><?php echo "<script>q2pictures($a[$q2q2op4]);</script>"; ?></label></div>
						</td>
					</tr>
					<tr>
						<th>
						<?php echo "3.在<script>setquestionname($a[$q2qf3])</script>的<script>writedirection($q2qf3,$d[2])</script>是";?>
						</td>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q31" name="q2question3"><?php echo "<script>q2pictures($a[$q2q3op1]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q32" name="q2question3"><?php echo "<script>q2pictures($a[$q2q3op2]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q33" name="q2question3"><?php echo "<script>q2pictures($a[$q2q3op3]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q34" name="q2question3"><?php echo "<script>q2pictures($a[$q2q3op4]);</script>"; ?></label></div>
						</td>
					</tr>
					<tr>
						<th>
							<?php echo "4.在<script>setquestionname($a[$q2qf4])</script>的<script>writedirection($q2qf4,$d[3])</script>是";?>
						</td>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q41" name="q2question4"><?php echo "<script>q2pictures($a[$q2q4op1]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q42" name="q2question4"><?php echo "<script>q2pictures($a[$q2q4op2]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q43" name="q2question4"><?php echo "<script>q2pictures($a[$q2q4op3]);</script>"; ?></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q44" name="q2question4"><?php echo "<script>q2pictures($a[$q2q4op4]);</script>"; ?></label></div>
						</td>
					</tr>
				</table>
				<div align="center">
					<a href="#cognition1" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
					<a href="#cognition3" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
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
				<td width="90%"><?php echo "<script>q3pictures($q3pic1,$q3len1);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq1" name="q3question1" type="radio"/></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($q3pic1,$q3len2);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq2" name="q3question1" type="radio"/></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($q3pic2,$q3len3);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq3" name="q3question2" type="radio"/></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($q3pic2,$q3len4);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq4" name="q3question2" type="radio"/></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($q3pic3,$q3len5);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq5" name="q3question3" type="radio" /></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($q3pic3,$q3len6);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq6" name="q3question3" type="radio" /></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($q3pic4,$q3len7);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq7" name="q3question4" type="radio" /></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($q3pic4,$q3len8);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq8" name="q3question4" type="radio"/></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($q3pic5,$q3len9);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq9" name="q3question5" type="radio" /></td>
			</tr>
			<tr>
				<td width="90%"><?php echo "<script>q3pictures($q3pic5,$q3len10);</script>";?></td>
				<td width="5%" style="text-align: center;"><input id="q3qq10" name="q3question5" type="radio" /></td>
			</tr>
		</table>
		<div align="center">
			<a href="#cognition2" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="#cognition4" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
		</div>
	</div>
	<div data-role="page" id="cognition4">
		<h2 align="center">請幫忙找一找,填入正確的答案,一題5分</h2>
		<div align="center">
			<table border="1">
				<tr>
					<td>
						<?php echo "<script>
							q4pictures($q4pic1);
							q4pictures($q4pic2);
							q4pictures($q4pic3);
							q4pictures($q4pic4);
							q4pictures($q4pic5);
							q4pictures($q4pic6);
							q4pictures($q4pic7);
							q4pictures($q4pic8);
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
						<span>(1)從<?php echo "<script>direction($q4qd1);</script>"; ?>數起,<?php echo "<script>q4pictures($q4a[$q4qqpic1]);</script>";?>排在第</span>
						<input type="number" id="a1" name="q4anwser1" data-role="none" style="height:50px;width:50px;line-height:30px;border:1px solid #999;vertical-align:middle">
						個。
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div>
						<span style="float: left; vertical-align:middle">(2)從<?php echo "<script>direction($q4qd2);</script>";?>數起,第<?php echo "<script>w($q4qqpic2)</script>";?>個是:</span>
						
						</div>
					</td>
					<td>
						<div style="float: left;"><label><input data-role="none" type="radio" id="a21" name="q4anwser2"><?php echo "<script>q4pictures($q4a[$q4qq1]);</script>";?></label></div>
						<div style="float: left;"><label><input data-role="none" type="radio" id="a22" name="q4anwser2"><?php echo "<script>q4pictures($q4a[$q4qq2]);</script>";?></label></div>
						<div style="float: left;"><label><input data-role="none" type="radio" id="a23" name="q4anwser2"><?php echo "<script>q4pictures($q4a[$q4qq3]);</script>";?></label></div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div>
						<span>(3)從<?php echo "<script>direction($q4qd3);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$q4qqpic3]);</script>";?>排在第</span>
						<input type="number" id="a3" name="q4anwser3" data-role="none" style="height:50px;width:50px; line-height:30px;border:1px solid #999;vertical-align:middle"><span>個,也可說是從<?php echo "<script>ww($q4qd3);</script>";?>數起第</span><input type="number" id="a4" name="q4anwser4" data-role="none" style="height:50px;width:50px; line-height:30px;border:1px solid #999;vertical-align:middle">個。
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div align="center">
			<a href="#cognition3" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="#cognition5" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
		</div>
	</div>
	<div data-role="page" id="cognition5">
		<h3 align="center">把跟前面形狀相似的選出來,一題5分</h3>
		<div align="center">
		<table border="1">
			<tr>
				<td><?php echo "<script>gtqs($q5qpic1);</script>";?></td>
				<td>
					<div style="float: left;"><label><input type="radio" id="q5q11" name="q5question1" data-role="none"><?php echo "<script>insertp1($q5qpic1,1,$q5picture1[0]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q12" name="q5question1" data-role="none"><?php echo "<script>insertp1($q5qpic1,2,$q5picture1[1]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q13" name="q5question1" data-role="none"><?php echo "<script>insertp1($q5qpic1,3,$q5picture1[2]);</script>";?></label></div>
				</td>
			</tr>
			<tr>
				<td><?php echo "<script>gtqs($q5qpic2);</script>";?></td>
				<td>
					<div style="float: left;"><label><input type="radio" id="q5q21" name="q5question2" data-role="none"><?php echo "<script>insertp2($q5qpic2,1,$q5picture2[0]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q22" name="q5question2" data-role="none"><?php echo "<script>insertp2($q5qpic2,2,$q5picture2[1]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q23" name="q5question2" data-role="none"><?php echo "<script>insertp2($q5qpic2,3,$q5picture2[2]);</script>";?></label></div>
				</td>
			</tr>
			<tr>
				<td><?php echo "<script>gtqs($q5qpic3);</script>";?></td>
				<td>
					<div style="float: left;"><label><input type="radio" id="q5q31" name="q5question3" data-role="none"><?php echo "<script>insertp3($q5qpic3,1,$q5picture3[0]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q32" name="q5question3" data-role="none"><?php echo "<script>insertp3($q5qpic3,2,$q5picture3[1]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q33" name="q5question3" data-role="none"><?php echo "<script>insertp3($q5qpic3,3,$q5picture3[2]);</script>";?></label></div>
				</td>
			</tr>
			<tr>
				<td><?php echo "<script>gtqs($q5qpic4);</script>";?></td>
				<td>
					<div style="float: left;"><label><input type="radio" id="q5q41" name="q5question4" data-role="none"><?php echo "<script>insertp4($q5qpic4,1,$q5picture4[0]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q42" name="q5question4" data-role="none"><?php echo "<script>insertp4($q5qpic4,2,$q5picture4[1]);</script>";?></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q43" name="q5question4" data-role="none"><?php echo "<script>insertp4($q5qpic4,3,$q5picture4[2]);</script>";?></label></div>
				</td>
			</tr>
		</table>
		<div align="center">
			<a href="#cognition4" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
			<button type="submit" id="button" style="width: 10%;">結束作答</button>
		</div>
		</div>
	</div>
		<!-- 第一題 -->
		<input type="hidden" id="anw1" name="anwser1"/>				
		<input type="hidden" id="anw2" name="anwser2"/>
		<input type="hidden" id="anw3" name="anwser3"/>
		<input type="hidden" id="anw4" name="anwser4"/>
		<input type="hidden" id="anw5" name="anwser5"/>
		<input type="hidden" id="anw6" name="anwser6"/>				
		<input type="hidden" id="anw7" name="anwser7"/>
		<input type="hidden" id="anw8" name="anwser8"/>
		<input type="hidden" id="anw9" name="anwser9"/>
		<input type="hidden" id="anw10" name="anwser10"/>
		<input type="hidden" id="q1pic1" name="q1picture1"/>				
		<input type="hidden" id="q1pic2" name="q1picture2"/>
		<input type="hidden" id="q1pic3" name="q1picture3"/>
		<input type="hidden" id="q1pic4" name="q1picture4"/>
		<input type="hidden" id="q1pic5" name="q1picture5"/>
		<input type="hidden" id="q1pic6" name="q1picture6"/>				
		<input type="hidden" id="q1pic7" name="q1picture7"/>
		<input type="hidden" id="q1pic8" name="q1picture8"/>
		<input type="hidden" id="q1pic9" name="q1picture9"/>
		<input type="hidden" id="q1pic10" name="q1picture10"/>
		<!-- 第二題 -->
		<input type="hidden" id="q2anw1" name="q2anwser1"/>				
		<input type="hidden" id="q2anw2" name="q2anwser2"/>
		<input type="hidden" id="q2anw3" name="q2anwser3"/>
		<input type="hidden" id="q2anw4" name="q2anwser4"/>
		<input type="hidden" id="pic0" name="picture0"/>
		<input type="hidden" id="pic1" name="picture1"/>				
		<input type="hidden" id="pic2" name="picture2"/>
		<input type="hidden" id="pic3" name="picture3"/>
		<input type="hidden" id="pic4" name="picture4"/>
		<input type="hidden" id="pic5" name="picture5"/>
		<input type="hidden" id="pic6" name="picture6"/>
		<input type="hidden" id="pic7" name="picture7"/>
		<input type="hidden" id="pic8" name="picture8"/>
		<input type="hidden" id="qf1" name="questionfruit1"/>
		<input type="hidden" id="qf2" name="questionfruit2"/>
		<input type="hidden" id="qf3" name="questionfruit3"/>
		<input type="hidden" id="qf4" name="questionfruit4"/>
		<input type="hidden" id="q2qd1" name="q2questiondirection1"/>
		<input type="hidden" id="q2qd2" name="q2questiondirection2"/>
		<input type="hidden" id="q2qd3" name="q2questiondirection3"/>
		<input type="hidden" id="q2qd4" name="q2questiondirection4"/>
		<input type="hidden" id="qo11" name="questionoption11"/>
		<input type="hidden" id="qo12" name="questionoption12"/>
		<input type="hidden" id="qo13" name="questionoption13"/>
		<input type="hidden" id="qo14" name="questionoption14"/>
		<input type="hidden" id="qo21" name="questionoption21"/>
		<input type="hidden" id="qo22" name="questionoption22"/>
		<input type="hidden" id="qo23" name="questionoption23"/>
		<input type="hidden" id="qo24" name="questionoption24"/>
		<input type="hidden" id="qo31" name="questionoption31"/>
		<input type="hidden" id="qo32" name="questionoption32"/>
		<input type="hidden" id="qo33" name="questionoption33"/>
		<input type="hidden" id="qo34" name="questionoption34"/>
		<input type="hidden" id="qo41" name="questionoption41"/>
		<input type="hidden" id="qo42" name="questionoption42"/>
		<input type="hidden" id="qo43" name="questionoption43"/>
		<input type="hidden" id="qo44" name="questionoption44"/>
		<!-- 第三題 -->
		<input type="hidden" id="q3pic1" name="q3picture1"/>				
		<input type="hidden" id="q3pic2" name="q3picture2"/>
		<input type="hidden" id="q3pic3" name="q3picture3"/>
		<input type="hidden" id="q3pic4" name="q3picture4"/>
		<input type="hidden" id="q3pic5" name="q3picture5"/>
		<input type="hidden" id="q3piclen1" name="q3picturelength1"/>
		<input type="hidden" id="q3piclen2" name="q3picturelength2"/>
		<input type="hidden" id="q3piclen3" name="q3picturelength3"/>
		<input type="hidden" id="q3piclen4" name="q3picturelength4"/>
		<input type="hidden" id="q3piclen5" name="q3picturelength5"/>
		<input type="hidden" id="q3piclen6" name="q3picturelength6"/>
		<input type="hidden" id="q3piclen7" name="q3picturelength7"/>
		<input type="hidden" id="q3piclen8" name="q3picturelength8"/>
		<input type="hidden" id="q3piclen9" name="q3picturelength9"/>
		<input type="hidden" id="q3piclen10" name="q3picturelength10"/>
		<!-- 第四題 -->
		<input type="hidden" id="tp1" name="topicpictures1"/>
		<input type="hidden" id="tp2" name="topicpictures2"/>
		<input type="hidden" id="tp3" name="topicpictures3"/>
		<input type="hidden" id="tp4" name="topicpictures4"/>
		<input type="hidden" id="tp5" name="topicpictures5"/>
		<input type="hidden" id="tp6" name="topicpictures6"/>
		<input type="hidden" id="tp7" name="topicpictures7"/>
		<input type="hidden" id="tp8" name="topicpictures8"/>
		<input type="hidden" id="qd1" name="questiondirection1"/>
		<input type="hidden" id="qd2" name="questiondirection2"/>
		<input type="hidden" id="qd31" name="questiondirection31"/>
		<input type="hidden" id="qd32" name="questiondirection32"/>
		<input type="hidden" id="qp1" name="questionpicture1"/>
		<input type="hidden" id="qp2" name="questionpicture2"/>
		<input type="hidden" id="qp3" name="questionpicture3"/>
		<input type="hidden" id="qp21" name="questionpicture21"/>
		<input type="hidden" id="qp22" name="questionpicture22"/>
		<input type="hidden" id="qp23" name="questionpicture23"/>
		<!-- 第五題 -->
		<input type="hidden" id="sp1" name="shape1"/>
		<input type="hidden" id="sp2" name="shape2"/>
		<input type="hidden" id="sp3" name="shape3"/>
		<input type="hidden" id="sp4" name="shape4"/>
		<input type="hidden" id="q5qo11" name="q5questionoption11"/>
		<input type="hidden" id="q5qo12" name="q5questionoption12"/>
		<input type="hidden" id="q5qo13" name="q5questionoption13"/>
		<input type="hidden" id="q5qo21" name="q5questionoption21"/>
		<input type="hidden" id="q5qo22" name="q5questionoption22"/>
		<input type="hidden" id="q5qo23" name="q5questionoption23"/>
		<input type="hidden" id="q5qo31" name="q5questionoption31"/>
		<input type="hidden" id="q5qo32" name="q5questionoption32"/>
		<input type="hidden" id="q5qo33" name="q5questionoption33"/>
		<input type="hidden" id="q5qo41" name="q5questionoption41"/>
		<input type="hidden" id="q5qo42" name="q5questionoption42"/>
		<input type="hidden" id="q5qo43" name="q5questionoption43"/>
	</form>
</body>
</html>