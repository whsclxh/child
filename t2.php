<?php
require "math_add_sub_function.php";
require "math_big_small_function.php";
require "math_choose_function.php";
require "math_multistage_function.php";
require "math_triple_add_function.php";
?>
<script type="text/javascript">
	var all_question ={
		"math_choose":[
		{
			"question_number":"1",
			"question_picture":<?php echo "$math_choose_picture[0]"; ?>,
			"question_quantity":<?php echo "$math_choose_quantity[0]"; ?>,
			"question_option":{
				"first":<?php echo "$math_choose_question_option1[0]"; ?>,
				"second":<?php echo "$math_choose_question_option1[1]"; ?>,
				"third":<?php echo "$math_choose_question_option1[2]"; ?>,
				"fourth":<?php echo "$math_choose_question_option1[3]"; ?>,
				"fifth":<?php echo "$math_choose_question_option1[4]"; ?>
			}
		},
		{
			"question_number":"2",
			"question_picture":<?php echo "$math_choose_picture[1]"; ?>,
			"question_quantity":<?php echo "$math_choose_quantity[1]"; ?>,
			"question_option":{
				"first":<?php echo "$math_choose_question_option2[0]"; ?>,
				"second":<?php echo "$math_choose_question_option2[1]"; ?>,
				"third":<?php echo "$math_choose_question_option2[2]"; ?>,
				"fourth":<?php echo "$math_choose_question_option2[3]"; ?>,
				"fifth":<?php echo "$math_choose_question_option2[4]"; ?>
			}
		},
		{
			"question_number":"3",
			"question_picture":<?php echo "$math_choose_picture[2]"; ?>,
			"question_quantity":<?php echo "$math_choose_quantity[2]"; ?>,
			"question_option":{
				"first":<?php echo "$math_choose_question_option3[0]"; ?>,
				"second":<?php echo "$math_choose_question_option3[1]"; ?>,
				"third":<?php echo "$math_choose_question_option3[2]"; ?>,
				"fourth":<?php echo "$math_choose_question_option3[3]"; ?>,
				"fifth":<?php echo "$math_choose_question_option3[4]"; ?>
			}
		},
		{
			"question_number":"4",
			"question_picture":<?php echo "$math_choose_picture[3]"; ?>,
			"question_quantity":<?php echo "$math_choose_quantity[3]"; ?>,
			"question_option":{
				"first":<?php echo "$math_choose_question_option4[0]"; ?>,
				"second":<?php echo "$math_choose_question_option4[1]"; ?>,
				"third":<?php echo "$math_choose_question_option4[2]"; ?>,
				"fourth":<?php echo "$math_choose_question_option4[3]"; ?>,
				"fifth":<?php echo "$math_choose_question_option4[4]"; ?>
			}
		},
		{
			"question_number":"5",
			"question_picture":<?php echo "$math_choose_picture[4]"; ?>,
			"question_quantity":<?php echo "$math_choose_quantity[4]"; ?>,
			"question_option":{
				"first":<?php echo "$math_choose_question_option5[0]"; ?>,
				"second":<?php echo "$math_choose_question_option5[1]"; ?>,
				"third":<?php echo "$math_choose_question_option5[2]"; ?>,
				"fourth":<?php echo "$math_choose_question_option5[3]"; ?>,
				"fifth":<?php echo "$math_choose_question_option5[4]"; ?>
			}
		}
		],
		"math_add_sub":[
		{
			"question_number":"1",
			"question_picture_info":{
				"front":<?php echo "$math_add_sub_picture[0];"; ?>,
				"behind":<?php echo "$math_add_sub_picture[1];"; ?>
			},
			"question_quantity_info":{
				"front":<?php echo "$math_add_sub_quantity[0];"; ?>,
				"behind":<?php echo "$math_add_sub_quantity[1];"; ?>
			},
			"question_sign":<?php echo "$math_add_sub_sign[0]"; ?>
		},
		{
			"question_number":"2",
			"question_picture_info":{
				"front":<?php echo "$math_add_sub_picture[2];"; ?>,
				"behind":<?php echo "$math_add_sub_picture[3];"; ?>
			},
			"question_quantity_info":{
				"front":<?php echo "$math_add_sub_quantity[2];"; ?>,
				"behind":<?php echo "$math_add_sub_quantity[3];"; ?>
			},
			"question_sign":<?php echo "$math_add_sub_sign[1]"; ?>
		},
		{
			"question_number":"3",
			"question_picture_info":{
				"front":<?php echo "$math_add_sub_picture[4];"; ?>,
				"behind":<?php echo "$math_add_sub_picture[5];"; ?>
			},
			"question_quantity_info":{
				"front":<?php echo "$math_add_sub_quantity[4];"; ?>,
				"behind":<?php echo "$math_add_sub_quantity[5];"; ?>
			},
			"question_sign":<?php echo "$math_add_sub_sign[2]"; ?>
		},
		{
			"question_number":"4",
			"question_picture_info":{
				"front":<?php echo "$math_add_sub_picture[6];"; ?>,
				"behind":<?php echo "$math_add_sub_picture[7];"; ?>
			},
			"question_quantity_info":{
				"front":<?php echo "$math_add_sub_quantity[6];"; ?>,
				"behind":<?php echo "$math_add_sub_quantity[71];"; ?>
			},
			"question_sign":<?php echo "$math_add_sub_sign[3]"; ?>
		},
		{
			"question_number":"5",
			"question_picture_info":{
				"front":<?php echo "$math_add_sub_picture[8];"; ?>,
				"behind":<?php echo "$math_add_sub_picture[9];"; ?>
			},
			"question_quantity_info":{
				"front":<?php echo "$math_add_sub_quantity[8];"; ?>,
				"behind":<?php echo "$math_add_sub_quantity[9];"; ?>
			},
			"question_sign":<?php echo "$math_add_sub_sign[4]"; ?>
		}
		],
		"math_big_small":[
		{
			"question_number":"1",
			"question_option":{
				"first":<?php echo "$math_big_small_question1_option[0]"; ?>,
				"second":<?php echo "$math_big_small_question1_option[1]"; ?>,
				"third":<?php echo "$math_big_small_question1_option[2]"; ?>
			}
		},
		{
			"question_number":"2",
			"question_option":{
				"first":<?php echo "$math_big_small_question2_option[0]"; ?>,
				"second":<?php echo "$math_big_small_question2_option[1]"; ?>,
				"third":<?php echo "$math_big_small_question2_option[2]"; ?>
			}
		},
		{
			"question_number":"3",
			"question_option":{
				"first":<?php echo "$math_big_small_question3_option[0]"; ?>,
				"second":<?php echo "$math_big_small_question3_option[1]"; ?>,
				"third":<?php echo "$math_big_small_question3_option[2]"; ?>
			}
		},
		{
			"question_number":"4",
			"question_option":{
				"first":<?php echo "$math_big_small_question4_option[0]"; ?>,
				"second":<?php echo "$math_big_small_question4_option[1]"; ?>,
				"third":<?php echo "$math_big_small_question4_option[2]"; ?>
			}
		},
		{
			"question_number":"5",
			"question_option":{
				"first":<?php echo "$math_big_small_question5_option[0]"; ?>,
				"second":<?php echo "$math_big_small_question5_option[1]"; ?>,
				"third":<?php echo "$math_big_small_question5_option[2]"; ?>
			}
		},
		{
			"question_number":"6",
			"question_option":{
				"first":<?php echo "$math_big_small_question6_option[0]"; ?>,
				"second":<?php echo "$math_big_small_question6_option[1]"; ?>,
				"third":<?php echo "$math_big_small_question6_option[2]"; ?>
			}
		},
		{
			"question_number":"7",
			"question_option":{
				"first":<?php echo "$math_big_small_question7_option[0]"; ?>,
				"second":<?php echo "$math_big_small_question7_option[1]"; ?>,
				"third":<?php echo "$math_big_small_question7_option[2]"; ?>
			}
		},
		{
			"question_number":"8",
			"question_option":{
				"first":<?php echo "$math_big_small_question8_option[0]"; ?>,
				"second":<?php echo "$math_big_small_question8_option[1]"; ?>,
				"third":<?php echo "$math_big_small_question8_option[2]"; ?>
			}
		},
		{
			"question_number":"9",
			"question_option":{
				"first":<?php echo "$math_big_small_question9_option[0]"; ?>,
				"second":<?php echo "$math_big_small_question9_option[1]"; ?>,
				"third":<?php echo "$math_big_small_question9_option[2]"; ?>
			}
		},
		{
			"question_number":"10",
			"question_option":{
				"first":<?php echo "$math_big_small_question10_option[0]"; ?>,
				"second":<?php echo "$math_big_small_question10_option[1]"; ?>,
				"third":<?php echo "$math_big_small_question10_option[2]"; ?>
			}
		}
		],
		"math_multistage":[
		{
			"question_number":"1",
			"question_space":{
				"one":<?php echo "$math_multistage_question1_space[0]"; ?>,
				"two":<?php echo "$math_multistage_question1_space[1]"; ?>
			},
			"question_number":<?php echo "$math_multistage_number[0]"; ?>
		},
		{
			"question_number":"2",
			"question_space":{
				"one":<?php echo "$math_multistage_question2_space[0]"; ?>,
				"two":<?php echo "$math_multistage_question2_space[1]"; ?>
			},
			"question_number":<?php echo "$math_multistage_number[1]"; ?>
		},
		{
			"question_number":"3",
			"question_space":{
				"one":<?php echo "$math_multistage_question3_space[0]"; ?>,
				"two":<?php echo "$math_multistage_question3_space[1]"; ?>
			},
			"question_number":<?php echo "$math_multistage_number[2]"; ?>
		},
		{
			"question_number":"4",
			"question_space":{
				"one":<?php echo "$math_multistage_question4_space[0]"; ?>,
				"two":<?php echo "$math_multistage_question4_space[1]"; ?>
			},
			"question_number":<?php echo "$math_multistage_number[3]"; ?>
		},
		{
			"question_number":"5",
			"question_space":{
				"one":<?php echo "$math_multistage_question5_space[0]"; ?>,
				"two":<?php echo "$math_multistage_question5_space[1]"; ?>
			},
			"question_number":<?php echo "$math_multistage_number[4]"; ?>
		}
		],
		"math_triple_add":[
		{
			"question_number":"1",
			"question_picture":<?php echo "$math_triple_add_picture[0]"; ?>,
			"question_quantity":{
				"first":<?php echo "$math_triple_add_question1_quantity[0]"; ?>,
				"second":<?php echo "$math_triple_add_question1_quantity[1]"; ?>,
				"third":<?php echo "$math_triple_add_question1_quantity[2]"; ?>
			}
		},
		{
			"question_number":"2",
			"question_picture":<?php echo "$math_triple_add_picture[1]"; ?>,
			"question_quantity":{
				"first":<?php echo "$math_triple_add_question2_quantity[0]"; ?>,
				"second":<?php echo "$math_triple_add_question2_quantity[1]"; ?>,
				"third":<?php echo "$math_triple_add_question2_quantity[2]"; ?>
			}
		},
		{
			"question_number":"3",
			"question_picture":<?php echo "$math_triple_add_picture[2]"; ?>,
			"question_quantity":{
				"first":<?php echo "$math_triple_add_question3_quantity[0]"; ?>,
				"second":<?php echo "$math_triple_add_question3_quantity[1]"; ?>,
				"third":<?php echo "$math_triple_add_question3_quantity[2]"; ?>
			}
		},
		{
			"question_number":"4",
			"question_picture":<?php echo "$math_triple_add_picture[3]"; ?>,
			"question_quantity":{
				"first":<?php echo "$math_triple_add_question4_quantity[0]"; ?>,
				"second":<?php echo "$math_triple_add_question4_quantity[1]"; ?>,
				"third":<?php echo "$math_triple_add_question4_quantity[2]"; ?>
			}
		},
		{
			"question_number":"5",
			"question_picture":<?php echo "$math_triple_add_picture[4]"; ?>,
			"question_quantity":{
				"first":<?php echo "$math_triple_add_question5_quantity[0]"; ?>,
				"second":<?php echo "$math_triple_add_question5_quantity[1]"; ?>,
				"third":<?php echo "$math_triple_add_question5_quantity[2]"; ?>
			}
		}
		]
	}
</script>
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
<script type="text/javascript" src="./math_js/math_add_sub.js"></script>
<script type="text/javascript" src="./math_js/math_big_small.js"></script>
<script type="text/javascript" src="./math_js/math_choose.js"></script>
<script type="text/javascript" src="./math_js/math_triple_add.js"></script>
<body>
	<form method="post" action="math_finish.php" data-ajax="false">
		<div data-role="page" id="math1">
		<table border="5" align="center">
		<h3 align="center">數一數,選出正確的數量,一題4分</h3>
		<tr>
		<td><script>choose_pictures(all_question.math_choose[0].question_picture,all_question.math_choose[0].question_quantity);</script></td>
		<td>
			<div style="float: left;"><label><input id="choose_option1_1" name="choose1" type="radio"/><script>choose_write(all_question.math_choose[0].question_option.first);</script></label></div>
			<div style="float: left;"><label><input id="choose_option1_2" name="choose1" type="radio"/><script>choose_write(q1no1,1);</script></label></div>
			<div style="float: left;"><label><input id="choose_option1_3" name="choose1" type="radio"/><script>choose_write(q1no1,2);</script></label></div>
			<div style="float: left;"><label><input id="choose_option1_4" name="choose1" type="radio"/><script>choose_write(q1no1,3);</script></label></div>
			<div style="float: left;"><label><input id="choose_option1_5" name="choose1" type="radio"/><script>choose_write(q1no1,4);</script></label></div>
		</td>
		</tr>
		<tr>
		<td><script>choose_pictures(1);</script></td>
		<td>
			<div style="float: left;"><label><input id="choose_option2_1" name="choose2" type="radio"/><script>choose_write(q1no2,0);</script></label></div>
			<div style="float: left;"><label><input id="choose_option2_2" name="choose2" type="radio"/><script>choose_write(q1no2,1);</script></label></div>
			<div style="float: left;"><label><input id="choose_option2_3" name="choose2" type="radio"/><script>choose_write(q1no2,2);</script></label></div>
			<div style="float: left;"><label><input id="choose_option2_4" name="choose2" type="radio"/><script>choose_write(q1no2,3);</script></label></div>
			<div style="float: left;"><label><input id="choose_option2_5" name="choose2" type="radio"/><script>choose_write(q1no2,4);</script></label></div>
		</td>
		</tr>
		<tr>
		<td><script>choose_pictures(2);</script></td>
		<td>
			<div style="float: left;"><label><input id="choose_option3_1" name="choose3" type="radio"/><script>choose_write(q1no3,0);</script></label></div>
			<div style="float: left;"><label><input id="choose_option3_2" name="choose3" type="radio"/><script>choose_write(q1no3,1);</script></label></div>
			<div style="float: left;"><label><input id="choose_option3_3" name="choose3" type="radio"/><script>choose_write(q1no3,2);</script></label></div>
			<div style="float: left;"><label><input id="choose_option3_4" name="choose3" type="radio"/><script>choose_write(q1no3,3);</script></label></div>
			<div style="float: left;"><label><input id="choose_option3_5" name="choose3" type="radio"/><script>choose_write(q1no3,4);</script></label></div>
		</td>
		</tr>
		<tr>
		<td><script>choose_pictures(3);</script></td>
		<td>
			<div style="float: left;"><label><input id="choose_option4_1" name="choose4" type="radio"/><script>choose_write(q1no4,0);</script></label></div>
			<div style="float: left;"><label><input id="choose_option4_2" name="choose4" type="radio"/><script>choose_write(q1no4,1);</script></label></div>
			<div style="float: left;"><label><input id="choose_option4_3" name="choose4" type="radio"/><script>choose_write(q1no4,2);</script></label></div>
			<div style="float: left;"><label><input id="choose_option4_4" name="choose4" type="radio"/><script>choose_write(q1no4,3);</script></label></div>
			<div style="float: left;"><label><input id="choose_option4_5" name="choose4" type="radio"/><script>choose_write(q1no4,4);</script></label></div>
		</td>
		</tr>
		<tr>
		<td><script>choose_pictures(4);</script></td>
		<td>
			<div style="float: left;"><label><input id="choose_option5_1" name="choose5" type="radio"/><script>choose_write(q1no5,0);</script></label></div>
			<div style="float: left;"><label><input id="choose_option5_2" name="choose5" type="radio"/><script>choose_write(q1no5,1);</script></label></div>
			<div style="float: left;"><label><input id="choose_option5_3" name="choose5" type="radio"/><script>choose_write(q1no5,2);</script></label></div>
			<div style="float: left;"><label><input id="choose_option5_4" name="choose5" type="radio"/><script>choose_write(q1no5,3);</script></label></div>
			<div style="float: left;"><label><input id="choose_option5_5" name="choose5" type="radio"/><script>choose_write(q1no5,4);</script></label></div>
		</td>
		</tr>
		</table>
			<div align="center">
					<a href="#math2" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
			</div>
		</div>
		<div data-role="page" id="math2">
			<h3 align="center">數一數,填入正確的答案,一格1分</h3>
			<table border="1" align="center">
			<tr>
				<td><script>add_sub_question_pictures(0,1);</script></td>
				<td valign="middle"><script>add_sub_pictures(0);</script> 和 <script>add_sub_pictures(1);add_sub_word(0)</script>
					<input id="add_sub_option1_1" name="add_sub_option1_1" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px;">個</td>
				<td><input id="add_sub_option1_2" name="add_sub_option1_2" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					<input id="add_sub_option1_3" name="add_sub_option1_3" align="center"  type="text"  data-role="none" style="width: 15px; height: 15px; font-size: 20px;">
					<input id="add_sub_option1_4" name="add_sub_option1_4" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					=
					<input id="add_sub_option1_5" name="add_sub_option1_5" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
				</td>
			</tr>
			<tr>
				<td><script>add_sub_question_pictures(2,3);</script></td>
				<td valign="middle"><script>add_sub_pictures(2);</script> 和 <script>add_sub_pictures(3);add_sub_word(1)</script>
					<input id="add_sub_option2_1" name="add_sub_option2_1" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">個</td>
				<td><input id="add_sub_option2_2" name="add_sub_option2_2" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					<input id="add_sub_option2_3" name="add_sub_option2_3" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;">
					<input id="add_sub_option2_4" name="add_sub_option2_4" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					=
					<input id="add_sub_option2_5" name="add_sub_option2_5" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
				</td>
			</tr>
			<tr>
				<td><script>add_sub_question_pictures(4,5);</script></td>
				<td valign="middle"><script>add_sub_pictures(4);</script> 和 <script>add_sub_pictures(5);add_sub_word(2)</script>
					<input id="add_sub_option3_1" name="add_sub_option3_1" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">個</td>
				<td><input id="add_sub_option3_2" name="add_sub_option3_2" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					<input id="add_sub_option3_3" name="add_sub_option3_3" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;">
					<input id="add_sub_option3_4" name="add_sub_option3_4" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					=
					<input id="add_sub_option3_5" name="add_sub_option3_5" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
				</td>
			</tr>
			<tr>
				<td><script>add_sub_question_pictures(6,7);</script></td>
				<td valign="middle"><script>add_sub_pictures(6);</script> 和 <script>add_sub_pictures(7);add_sub_word(3)</script>
					<input id="add_sub_option4_1" name="add_sub_option4_1" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size:25px;">個</td>
				<td><input id="add_sub_option4_2" name="add_sub_option4_2" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					<input id="add_sub_option4_3" name="add_sub_option4_3" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;">
					<input id="add_sub_option4_4" name="add_sub_option4_4" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					=
					<input id="add_sub_option4_5" name="add_sub_option4_5" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
				</td>
			</tr>
			<tr>
				<td><script>add_sub_question_pictures(8,9);</script></td>
				<td valign="middle"><script>add_sub_pictures(8);</script> 和 <script>add_sub_pictures(9);add_sub_word(4)</script>
					<input id="add_sub_option5_1" name="add_sub_option5_1" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">個</td>
				<td><input id="add_sub_option5_2" name="add_sub_option5_2" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					<input id="add_sub_option5_3" name="add_sub_option5_3" align="center"  type="text"  data-role="none" style="width: 15px; height: 10px; font-size: 20px;">
					<input id="add_sub_option5_4" name="add_sub_option5_4" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					=
					<input id="add_sub_option5_5" name="add_sub_option5_5" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
				</td>
			</tr>			
		</table>
		<div align="center">
			<a href="#math1" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="#math3" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
		</div>
		</div>
		<div data-role="page" id="math3">
			<h3 align="center">請選出最小的數字</h3>
	<table border="1" align="center">
		<tr>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small1_1"><script>big_small_write(bigsmall[0])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small1_2"><script>big_small_write(bigsmall[1])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small1_3"><script>big_small_write(bigsmall[2])</script></label></div>
			</td>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_smal2_1"><script>big_small_write(bigsmall[3])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_smal2_2"><script>big_small_write(bigsmall[4])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_smal2_3"><script>big_small_write(bigsmall[5])</script></label></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small3" id="big_smal3_1"><script>big_small_write(bigsmall[6])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small3" id="big_smal3_2"><script>big_small_write(bigsmall[7])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small3" id="big_smal3_3"><script>big_small_write(bigsmall[8])</script></label></div>
			</td>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small4" id="big_smal4_1"><script>big_small_write(bigsmall[9])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small4" id="big_smal4_2"><script>big_small_write(bigsmall[10])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small4" id="big_smal4_3"><script>big_small_write(bigsmall[11])</script></label></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small5" id="big_small5_1"><script>big_small_write(bigsmall[12])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small5" id="big_small5_2"><script>big_small_write(bigsmall[13])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small5" id="big_small5_3"><script>big_small_write(bigsmall[14])</script></label></div>
			</td>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small6" id="big_small6_1"><script>big_small_write(bigsmall[15])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small6" id="big_small6_2"><script>big_small_write(bigsmall[16])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small6" id="big_small6_3"><script>big_small_write(bigsmall[17])</script></label></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small7" id="big_small6_1"><script>big_small_write(bigsmall[18])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small7" id="big_small6_2"><script>big_small_write(bigsmall[19])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small7" id="big_small6_3"><script>big_small_write(bigsmall[20])</script></label></div>
			</td>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small8" id="big_small7_1"><script>big_small_write(bigsmall[21])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small8" id="big_small7_2"><script>big_small_write(bigsmall[22])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small8" id="big_small7_3"><script>big_small_write(bigsmall[23])</script></label></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small9" id="big_small8_1"><script>big_small_write(bigsmall[24])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small9" id="big_small8_2"><script>big_small_write(bigsmall[25])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small9" id="big_small8_3"><script>big_small_write(bigsmall[26])</script></label></div>
			</td>
			<td>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small10" id="big_small9_1"><script>big_small_write(bigsmall[27])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small10" id="big_small9_2"><script>big_small_write(bigsmall[28])</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small10" id="big_small9_3"><script>big_small_write(bigsmall[29])</script></label></div>
			</td>
		</tr>
	</table>
		<div align="center">
			<a href="#math2" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="#math4" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
		</div>
		</div>
		<div data-role="page" id="math4">
			<h3 align="center">算一算,空格裡的數字是多少,一格1分</h3>
			<table border="1" style="margin: auto;">
			<tr>
				<td>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage1_1" id="multistage1_1" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage1_2" id="multistage1_2" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage1_3" id="multistage1_3" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage1_4" id="multistage1_4" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage1_5" id="multistage1_5" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage1_6" id="multistage1_6" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage2_1" id="multistage2_1" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage2_2" id="multistage2_2" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage2_3" id="multistage2_3" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage2_4" id="multistage2_4" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage2_5" id="multistage2_5" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage2_6" id="multistage2_6" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage3_1" id="multistage3_1" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage3_2" id="multistage3_2" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage3_3" id="multistage3_3" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage3_4" id="multistage3_4" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage3_5" id="multistage3_5" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage3_6" id="multistage3_6" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage4_1" id="multistage4_1" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage4_2" id="multistage4_2" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage4_3" id="multistage4_3" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage4_4" id="multistage4_4" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage4_5" id="multistage4_5" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage4_6" id="multistage4_6" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage5_1" id="multistage5_1" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage5_2" id="multistage5_2" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage5_3" id="multistage5_3" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage5_4" id="multistage5_4" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage5_5" id="multistage5_5" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  					<div style="float: left;"><label><input type="text" data-role="none" name="multistage5_6" id="multistage5_6" style="height: 80px; width: 80px; font-size: 60px; text-align: center;"></label></div>
  				</td>
  			</tr>
  		</table>
  		<div align="center">
			<a href="#math3" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="#math5" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
		</div>
		</div>
		<div data-role="page" id="math5">
			<h3 align="center">請你加加看有多少?</h3>
		<table border="1" align="center">
			<tr>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question1[0],0);</script></td>
				<td></td>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question1[1],0);</script></td>
				<td></td>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question1[2],0);</script></td>
				<td></td>
			</tr>
			<tr>
				<td style="text-align: center;"><input type="text" name="triple_add1_1" data-role="none"></td>
				<td>+</td>
				<td style="text-align: center;"><input type="text" name="triple_add1_2" data-role="none"></td>
				<td>+</td>
				<td style="text-align: center;"><input type="text" name="triple_add1_3" data-role="none"></td>
				<td>=</td>
				<td style="text-align: center;"><input type="text" name="triple_add1_4" data-role="none"></td>
			</tr>
			<tr>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question2[0],1);</script></td>
				<td></td>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question2[1],1);</script></td>
				<td></td>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question2[2],1);</script></td>
				<td></td>
			</tr>
			<tr>
				<td style="text-align: center;"><input type="text" name="triple_add2_1" data-role="none"></td>
				<td>+</td>
				<td style="text-align: center;"><input type="text" name="triple_add2_2" data-role="none"></td>
				<td>+</td>
				<td style="text-align: center;"><input type="text" name="triple_add2_3" data-role="none"></td>
				<td>=</td>
				<td style="text-align: center;"><input type="text" name="triple_add2_4" data-role="none"></td>
			</tr>
			<tr>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question3[0],2);</script></td>
				<td></td>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question3[1],2);</script></td>
				<td></td>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question3[2],2);</script></td>
				<td></td>
			</tr>
			<tr>
				<td style="text-align: center;"><input type="text" name="triple_add3_1" data-role="none"></td>
				<td>+</td>
				<td style="text-align: center;"><input type="text" name="triple_add3_2" data-role="none"></td>
				<td>+</td>
				<td style="text-align: center;"><input type="text" name="triple_add3_3" data-role="none"></td>
				<td>=</td>
				<td style="text-align: center;"><input type="text" name="triple_add3_4" data-role="none"></td>
			</tr>
			<tr>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question4[0],3);</script></td>
				<td></td>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question4[1],3);</script></td>
				<td></td>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question4[2],3);</script></td>
				<td></td>
			</tr>
			<tr>
				<td style="text-align: center;"><input type="text" name="triple_add4_1" data-role="none"></td>
				<td>+</td>
				<td style="text-align: center;"><input type="text" name="triple_add4_2" data-role="none"></td>
				<td>+</td>
				<td style="text-align: center;"><input type="text" name="triple_add4_3" data-role="none"></td>
				<td>=</td>
				<td style="text-align: center;"><input type="text" name="triple_add4_4" data-role="none"></td>
			</tr>
			<tr>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question5[0],4);</script></td>
				<td></td>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question5[1],4);</script></td>
				<td></td>
				<td style="text-align: center;"><script type="text/javascript">triple_add_pictures(q5question5[2],4);</script></td>
				<td></td>
			</tr>
			<tr>
				<td style="text-align: center;"><input type="text" name="triple_add5_1" data-role="none"></td>
				<td>+</td>
				<td style="text-align: center;"><input type="text" name="triple_add5_2" data-role="none"></td>
				<td>+</td>
				<td style="text-align: center;"><input type="text" name="triple_add5_3" data-role="none"></td>
				<td>=</td>
				<td style="text-align: center;"><input type="text" name="triple_add5_4" data-role="none"></td>
			</tr>
		</table>
		<div align="center">
			<a href="#math4" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
			<button type="submit" id="button" style="width: 10%;">結束作答</button>
		</div>
		</div>
	</form>
</body>
</html>