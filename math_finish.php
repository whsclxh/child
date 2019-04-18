<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$mathtimes = $_SESSION['math_times'];
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
$sql1 = "SELECT * FROM math_choose_db where username = '$id' AND cardinal = '$mathtimes'";
$result1 = mysqli_query($link,$sql1);
$math_choose_sql = @mysqli_fetch_row($result1);
$sql2 = "SELECT * FROM math_add_sub_db where username = '$id' AND cardinal = '$mathtimes'";
$result2 = mysqli_query($link,$sql2);
$math_add_sub_sql = @mysqli_fetch_row($result2);
$sql3 = "SELECT * FROM math_big_small_db where username = '$id' AND cardinal = '$mathtimes'";
$result3 = mysqli_query($link,$sql3);
$math_big_small_sql = @mysqli_fetch_row($result3);
$sql4 = "SELECT * FROM math_multistage_db where username = '$id' AND cardinal = '$mathtimes'";
$result4 = mysqli_query($link,$sql4);
$math_multistage_sql = @mysqli_fetch_row($result4);
$sql5 = "SELECT * FROM math_triple_add_db where username = '$id' AND cardinal = '$mathtimes'";
$result5 = mysqli_query($link,$sql5);
$math_triple_add_sql = @mysqli_fetch_row($result5);
$sql6 = "SELECT * FROM math_score where username = '$id' AND cardinal = '$mathtimes'";
$result6 = mysqli_query($link,$sql6);
$math_score_sql = @mysqli_fetch_row($result6);   
?>
<?php
require "math_add_sub_function.php";
require "math_big_small_function.php";
require "math_choose_function.php";
require "math_multistage_function.php";
require "math_triple_add_function.php";
?>
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
				"front":<?php echo "$math_add_sub_picture[0]"; ?>,
				"behind":<?php echo "$math_add_sub_picture[1]"; ?>
			},
			"question_quantity_info":{
				"front":<?php echo "$math_add_sub_quantity[0]"; ?>,
				"behind":<?php echo "$math_add_sub_quantity[1]"; ?>
			},
			"question_sign":<?php echo "$math_add_sub_sign[0]"; ?>
		},
		{
			"question_number":"2",
			"question_picture_info":{
				"front":<?php echo "$math_add_sub_picture[2]"; ?>,
				"behind":<?php echo "$math_add_sub_picture[3]"; ?>
			},
			"question_quantity_info":{
				"front":<?php echo "$math_add_sub_quantity[2]"; ?>,
				"behind":<?php echo "$math_add_sub_quantity[3]"; ?>
			},
			"question_sign":<?php echo "$math_add_sub_sign[1]"; ?>
		},
		{
			"question_number":"3",
			"question_picture_info":{
				"front":<?php echo "$math_add_sub_picture[4]"; ?>,
				"behind":<?php echo "$math_add_sub_picture[5]"; ?>
			},
			"question_quantity_info":{
				"front":<?php echo "$math_add_sub_quantity[4]"; ?>,
				"behind":<?php echo "$math_add_sub_quantity[5]"; ?>
			},
			"question_sign":<?php echo "$math_add_sub_sign[2]"; ?>
		},
		{
			"question_number":"4",
			"question_picture_info":{
				"front":<?php echo "$math_add_sub_picture[6]"; ?>,
				"behind":<?php echo "$math_add_sub_picture[7]"; ?>
			},
			"question_quantity_info":{
				"front":<?php echo "$math_add_sub_quantity[6]"; ?>,
				"behind":<?php echo "$math_add_sub_quantity[7]"; ?>
			},
			"question_sign":<?php echo "$math_add_sub_sign[3]"; ?>
		},
		{
			"question_number":"5",
			"question_picture_info":{
				"front":<?php echo "$math_add_sub_picture[8]"; ?>,
				"behind":<?php echo "$math_add_sub_picture[9]"; ?>
			},
			"question_quantity_info":{
				"front":<?php echo "$math_add_sub_quantity[8]"; ?>,
				"behind":<?php echo "$math_add_sub_quantity[9]"; ?>
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
<script type="text/javascript">
	window.onload=function(){
		var choose1_1 = document.getElementById("choose_option1_1");        									
		choose1_1.value = all_question.math_choose[0].question_option.first;
		var choose1_2 = document.getElementById("choose_option1_2");        									
		choose1_2.value = all_question.math_choose[0].question_option.second;
		var choose1_3 = document.getElementById("choose_option1_3");        									
		choose1_3.value = all_question.math_choose[0].question_option.third;
		var choose1_4 = document.getElementById("choose_option1_4");        									
		choose1_4.value = all_question.math_choose[0].question_option.fourth;
		var choose1_5 = document.getElementById("choose_option1_5");        									
		choose1_5.value = all_question.math_choose[0].question_option.fifth;
		var choose2_1 = document.getElementById("choose_option2_1");        									
		choose2_1.value = all_question.math_choose[1].question_option.first;
		var choose2_2 = document.getElementById("choose_option2_2");        									
		choose2_2.value = all_question.math_choose[1].question_option.second;
		var choose2_3 = document.getElementById("choose_option2_3");        									
		choose2_3.value = all_question.math_choose[1].question_option.third;
		var choose2_4 = document.getElementById("choose_option2_4");        									
		choose2_4.value = all_question.math_choose[1].question_option.fourth;
		var choose2_5 = document.getElementById("choose_option2_5");        									
		choose2_5.value = all_question.math_choose[1].question_option.fifth;
		var choose3_1 = document.getElementById("choose_option3_1");        									
		choose3_1.value = all_question.math_choose[2].question_option.first;
		var choose3_2 = document.getElementById("choose_option3_2");        									
		choose3_2.value = all_question.math_choose[2].question_option.second;
		var choose3_3 = document.getElementById("choose_option3_3");        									
		choose3_3.value = all_question.math_choose[2].question_option.third;
		var choose3_4 = document.getElementById("choose_option3_4");        									
		choose3_4.value = all_question.math_choose[2].question_option.fourth;
		var choose3_5 = document.getElementById("choose_option3_5");        									
		choose3_5.value = all_question.math_choose[2].question_option.fifth;
		var choose4_1 = document.getElementById("choose_option4_1");        									
		choose4_1.value = all_question.math_choose[3].question_option.first;
		var choose4_2 = document.getElementById("choose_option4_2");        									
		choose4_2.value = all_question.math_choose[3].question_option.second;
		var choose4_3 = document.getElementById("choose_option4_3");        									
		choose4_3.value = all_question.math_choose[3].question_option.third;
		var choose4_4 = document.getElementById("choose_option4_4");        									
		choose4_4.value = all_question.math_choose[3].question_option.fourth;
		var choose4_5 = document.getElementById("choose_option4_5");        									
		choose4_5.value = all_question.math_choose[3].question_option.fifth;
		var choose5_1 = document.getElementById("choose_option5_1");        									
		choose5_1.value = all_question.math_choose[4].question_option.first;
		var choose5_2 = document.getElementById("choose_option5_2");        									
		choose5_2.value = all_question.math_choose[4].question_option.second;
		var choose5_3 = document.getElementById("choose_option5_3");        									
		choose5_3.value = all_question.math_choose[4].question_option.third;
		var choose5_4 = document.getElementById("choose_option5_4");        									
		choose5_4.value = all_question.math_choose[4].question_option.fourth;
		var choose5_5 = document.getElementById("choose_option5_5");        									
		choose5_5.value = all_question.math_choose[4].question_option.fifth;
	}
</script>
<style type="text/css">
.ui-page{
    background: url(img/pure.png) no-repeat !important;
    background-size: cover !important;
}
.ui-btn{
    display: inline !important;
}
.ui-mobile .ui-page-active {
   overflow-x: visible !important;
}
.ui-mobile, .ui-mobile body{
    height: 100% !important;
}
.ui-checkbox input, .ui-radio input{
    position: relative !important;
}
</style>
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" type="text/css" href="css/math_finish.css">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="math_js/anw_math_choose.js"></script>
<script type="text/javascript" src="math_js/anw_math_add_sub.js"></script>
<script type="text/javascript" src="math_js/anw_math_triple_add.js"></script>
<form name="form1" method="post">
<div data-role="page" id="math_anwser">
	<div align="center" valign="middle">
		<h3 align="center" style="color: red">本次作答拿了<?php echo "$math_score_sql[2]"; ?>/100分</h3>
		<a href="#math_anwser1" class="ui-btn" style="width: 10%;" data-transition="slide">來對答案吧!</a>
	</div>	
</div>
<div data-role="page" id="math_anwser1" align="center">
<h3 align="center" style="color: red">本大題拿了<?php echo "$math_choose_sql[2]"; ?>/20分</h3>
<h3 align="center">請選擇正確的數量</h3>
<div class="choose_border">
<table border="1" align="center" class="choose_table">		
<tr class="choose_one">	
<th style="text-align:center">圖</th>		
<th style="text-align:center">原作答</th>
<th>正確答案</th>	
</tr>	
<tr class="choose_oddtr">
<td><script>anw_math_choose_pictures(all_question.math_choose[0].question_picture,all_question.math_choose[0].question_quantity);</script></td>
<td>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option1_1" name="choose1" type="radio" disabled <?php if($math_choose_sql[3]==$math_choose[12]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[0].question_option.first);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option1_2" name="choose1" type="radio" disabled <?php if($math_choose_sql[36]==$math_choose[13]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[0].question_option.second);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option1_3" name="choose1" type="radio" disabled <?php if($math_choose_sql[3]==$math_choose[14]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[0].question_option.third);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option1_4" name="choose1" type="radio" disabled <?php if($math_choose_sql[3]==$math_choose[15]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[0].question_option.fourth);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option1_5" name="choose1" type="radio" disabled <?php if($math_choose_sql[3]==$math_choose[16]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[0].question_option.fifth);</script></label></div>
</td>
<td align="center" style="color: red;"><script type="text/javascript">anw_math_choose_write(all_question.math_choose[0].question_quantity);</script></td>		
</tr>
<tr class="choose_eventr">
<td><script>anw_math_choose_pictures(all_question.math_choose[1].question_picture,all_question.math_choose[1].question_quantity);</script></td>
<td>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option2_1" name="choose2" type="radio" disabled <?php if($math_choose_sql[4]==$math_choose[17]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[1].question_option.first);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option2_2" name="choose2" type="radio" disabled <?php if($math_choose_sql[4]==$math_choose[18]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[1].question_option.second);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option2_3" name="choose2" type="radio" disabled <?php if($math_choose_sql[4]==$math_choose[19]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[1].question_option.third);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option2_4" name="choose2" type="radio" disabled <?php if($math_choose_sql[4]==$math_choose[20]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[1].question_option.fourth);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option2_5" name="choose2" type="radio" disabled <?php if($math_choose_sql[4]==$math_choose[21]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[1].question_option.fifth);</script></label></div>
</td>
<td align="center" style="color: red;"><script type="text/javascript">anw_math_choose_write(all_question.math_choose[1].question_quantity);</script></td>		
</tr>		
<tr class="choose_oddtr">
<td><script>anw_math_choose_pictures(all_question.math_choose[2].question_picture,all_question.math_choose[2].question_quantity);</script></td>
<td>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option3_1" name="choose3" type="radio" disabled <?php if($math_choose_sql[5]==$math_choose[22]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[2].question_option.first);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option3_2" name="choose3" type="radio" disabled <?php if($math_choose_sql[5]==$math_choose[23]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[2].question_option.second);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option3_3" name="choose3" type="radio" disabled <?php if($math_choose_sql[5]==$math_choose[24]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[2].question_option.third);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option3_4" name="choose3" type="radio" disabled <?php if($math_choose_sql[5]==$math_choose[25]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[2].question_option.fourth);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option3_5" name="choose3" type="radio" disabled <?php if($math_choose_sql[5]==$math_choose[26]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[2].question_option.fifth);</script></label></div>
</td>
<td align="center" style="color: red;"><script type="text/javascript">anw_math_choose_write(all_question.math_choose[2].question_quantity);</script></td>		
</tr>		
<tr class="choose_eventr">
<td><script>anw_math_choose_pictures(all_question.math_choose[3].question_picture,all_question.math_choose[3].question_quantity);</script></td>
<td>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option4_1" name="choose4" type="radio" disabled <?php if($math_choose_sql[6]==$math_choose[27]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[3].question_option.first);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option4_2" name="choose4" type="radio" disabled <?php if($math_choose_sql[6]==$math_choose[28]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[3].question_option.second);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option4_3" name="choose4" type="radio" disabled <?php if($math_choose_sql[6]==$math_choose[29]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[3].question_option.third);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option4_4" name="choose4" type="radio" disabled <?php if($math_choose_sql[6]==$math_choose[30]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[3].question_option.fourth);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option4_5" name="choose4" type="radio" disabled <?php if($math_choose_sql[6]==$math_choose[31]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[3].question_option.fifth);</script></label></div>
</td>
<td align="center" style="color: red;"><script type="text/javascript">anw_math_choose_write(all_question.math_choose[3].question_quantity);</script></td>		
</tr>		
<tr class="choose_oddtr">	
<td><script>anw_math_choose_pictures(all_question.math_choose[4].question_picture,all_question.math_choose[4].question_quantity);</script></td>
<td>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option5_1" name="choose5" type="radio" disabled <?php if($math_choose_sql[7]==$math_choose[32]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[4].question_option.first);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option5_2" name="choose5" type="radio" disabled <?php if($math_choose_sql[7]==$math_choose[33]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[4].question_option.second);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option5_3" name="choose5" type="radio" disabled <?php if($math_choose_sql[7]==$math_choose[34]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[4].question_option.third);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option5_4" name="choose5" type="radio" disabled <?php if($math_choose_sql[7]==$math_choose[35]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[4].question_option.fourth);</script></label></div>
<div style="float: left; width: 20%;"><label style="font-size: 30px"><input data-role="none" id="choose_option5_5" name="choose5" type="radio" disabled <?php if($math_choose_sql[7]==$math_choose[36]) echo "checked=checked"  ?>/><script>anw_math_choose_write(all_question.math_choose[4].question_option.fifth);</script></label></div>
</td>
<td align="center" style="color: red;"><script type="text/javascript">anw_math_choose_write(all_question.math_choose[4].question_quantity);</script></td>	
</tr>	
</table>
</div>
	<br>
	<a href="Topic.php" data-ajax="false" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
  	<a href="#math_anwser2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 5%;" data-transition="slide">下一題</a>
    <br><br>		
</div>
	<div data-role="page" id="math_anwser2" align="center">
	<h3 align="center" style="color: red">本大題拿了<?php echo "$math_add_sub_sql[2]"; ?>/20分</h3>
	<h3 align="center">數一數,填入正確的答案,一格1分</h3>
	<div class="sub_border">
	<table border="1" align="center" class="sub_table">
	<tr class="sub_one">
		<th>圖</th>
		<th>原比較</th>
		<th>原作答</th>
		<th>正確比較</th>
		<th>正確答案</th>
	</tr>
	<tr class="sub_oddtr">
		<td><script>anw_math_add_sub_question_pictures(all_question.math_add_sub[0].question_quantity_info.front,all_question.math_add_sub[0].question_quantity_info.behind,all_question.math_add_sub[0].question_picture_info.front,all_question.math_add_sub[0].question_picture_info.behind);</script></td>
		<td valign="middle"><script>anw_math_add_sub_pictures(all_question.math_add_sub[0].question_picture_info.front);</script> 和 <script>anw_math_add_sub_pictures(all_question.math_add_sub[0].question_picture_info.behind);anw_math_add_sub_sign(all_question.math_add_sub[0].question_sign)</script>
		<input id="add_sub_option1_1" name="add_sub_option1_1" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[3]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">個
		</td>
		<td><input id="add_sub_option1_2" name="add_sub_option1_2" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[4]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="add_sub_option1_3" name="add_sub_option1_3" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[5]'"; ?> style="width: 15px; height: 10px; font-size: 20px;">
			<input id="add_sub_option1_4" name="add_sub_option1_4" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[6]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="add_sub_option1_5" name="add_sub_option1_5" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[7]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
		</td>
		<td valign="middle"><script>anw_math_add_sub_pictures(all_question.math_add_sub[0].question_picture_info.front);</script> 和 <script>anw_math_add_sub_pictures(all_question.math_add_sub[0].question_picture_info.behind);anw_math_add_sub_sign(all_question.math_add_sub[0].question_sign)</script>
		<input id="anw_add_sub_option1_1" name="anw_add_sub_option1_1" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[27]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">個
		</td>
		<td>
			<input id="anw_add_sub_option1_2" name="anw_add_sub_option1_2" align="center"  type="text"  data-role="none" disabled <?php  if($math_add_sub[12]>$math_add_sub[13]){echo "value='$math_add_sub[12]'"; } else{ echo "value='$math_add_sub[13]'";} ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="anw_add_sub_option1_3" name="anw_add_sub_option1_3" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[28]'"; ?> style="width: 15px; height: 10px; font-size: 20px;">
			<input id="anw_add_sub_option1_4" name="anw_add_sub_option1_4" align="center"  type="text"  data-role="none" disabled <?php if($math_add_sub[12]>$math_add_sub[13]){ echo "value='$math_add_sub[13]'"; } else{  echo "value='$math_add_sub[12]'";} ?>; style="width: 50px; height: 50px; font-size: 25px;">
			<input id="anw_add_sub_option1_5" name="anw_add_sub_option1_5" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[27]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
		</td>
	</tr>
	<tr class="sub_eventr">
		<td><script>anw_math_add_sub_question_pictures(all_question.math_add_sub[1].question_quantity_info.front,all_question.math_add_sub[1].question_quantity_info.behind,all_question.math_add_sub[1].question_picture_info.front,all_question.math_add_sub[1].question_picture_info.behind);</script></td>
		<td valign="middle"><script>anw_math_add_sub_pictures(all_question.math_add_sub[1].question_picture_info.front);</script> 和 <script>anw_math_add_sub_pictures(all_question.math_add_sub[1].question_picture_info.behind);anw_math_add_sub_sign(all_question.math_add_sub[1].question_sign)</script>
		<input id="add_sub_option2_1" name="add_sub_option2_1" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[8]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">個
		</td>
		<td><input id="add_sub_option2_2" name="add_sub_option2_2" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[9]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="add_sub_option2_3" name="add_sub_option2_3" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[10]'"; ?> style="width: 15px; height: 10px; font-size: 20px;">
			<input id="add_sub_option2_4" name="add_sub_option2_4" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[11]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="add_sub_option2_5" name="add_sub_option2_5" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[12]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
		</td>
		<td valign="middle"><script>anw_math_add_sub_pictures(all_question.math_add_sub[1].question_picture_info.front);</script> 和 <script>anw_math_add_sub_pictures(all_question.math_add_sub[1].question_picture_info.behind);anw_math_add_sub_sign(all_question.math_add_sub[1].question_sign)</script>
		<input id="anw_add_sub_option2_1" name="anw_add_sub_option2_1" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[29]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">個
		</td>
		<td>
			<input id="anw_add_sub_option2_2" name="anw_add_sub_option2_2" align="center"  type="text"  data-role="none" disabled <?php if($math_add_sub[14]>$math_add_sub[15]){ echo "value='$math_add_sub[14]'"; } else{  echo "value='$math_add_sub[15]'";} ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="anw_add_sub_option2_3" name="anw_add_sub_option2_3" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[30]'"; ?> style="width: 15px; height: 10px; font-size: 20px;">
			<input id="anw_add_sub_option2_4" name="anw_add_sub_option2_4" align="center"  type="text"  data-role="none" disabled <?php if($math_add_sub[14]>$math_add_sub[15]){ echo "value='$math_add_sub[15]'"; } else{  echo "value='$math_add_sub[14]'";} ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="anw_add_sub_option2_5" name="anw_add_sub_option2_5" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[29]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
		</td>
	</tr>
	<tr class="sub_oddtr">
		<td><script>anw_math_add_sub_question_pictures(all_question.math_add_sub[2].question_quantity_info.front,all_question.math_add_sub[2].question_quantity_info.behind,all_question.math_add_sub[2].question_picture_info.front,all_question.math_add_sub[2].question_picture_info.behind);</script></td>
		<td valign="middle"><script>anw_math_add_sub_pictures(all_question.math_add_sub[2].question_picture_info.front);</script> 和 <script>anw_math_add_sub_pictures(all_question.math_add_sub[2].question_picture_info.behind);anw_math_add_sub_sign(all_question.math_add_sub[2].question_sign)</script>
		<input id="add_sub_option3_1" name="add_sub_option3_1" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[13]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">個
		</td>
		<td><input id="add_sub_option3_2" name="add_sub_option3_2" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[14]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="add_sub_option3_3" name="add_sub_option3_3" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[15]'"; ?> style="width: 15px; height: 10px; font-size: 20px;">
			<input id="add_sub_option3_4" name="add_sub_option3_4" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[16]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="add_sub_option3_5" name="add_sub_option3_5" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[17]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
		</td>
		<td valign="middle"><script>anw_math_add_sub_pictures(all_question.math_add_sub[2].question_picture_info.front);</script> 和 <script>anw_math_add_sub_pictures(all_question.math_add_sub[2].question_picture_info.behind);anw_math_add_sub_sign(all_question.math_add_sub[2].question_sign)</script>
		<input id="anw_add_sub_option3_1" name="anw_add_sub_option3_1" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[31]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">個
		</td>
		<td>
			<input id="anw_add_sub_option3_2" name="anw_add_sub_option3_2" align="center"  type="text"  data-role="none" disabled <?php if($math_add_sub[16]>$math_add_sub[17]){ echo "value='$math_add_sub[16]'"; } else{  echo "value='$math_add_sub[17]'";} ?>style="width: 50px; height: 50px; font-size: 25px;">
			<input id="anw_add_sub_option3_3" name="anw_add_sub_option3_3" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[32]'"; ?> style="width: 15px; height: 10px; font-size: 20px;">
			<input id="anw_add_sub_option3_4" name="anw_add_sub_option3_4" align="center"  type="text"  data-role="none" disabled <?php if($math_add_sub[16]>$math_add_sub[17]){ echo "value='$math_add_sub[17]'"; } else{  echo "value='$math_add_sub[16]'";} ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="anw_add_sub_option3_5" name="anw_add_sub_option3_5" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[31]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
		</td>
	</tr>
	<tr class="sub_eventr">
		<td><script>anw_math_add_sub_question_pictures(all_question.math_add_sub[3].question_quantity_info.front,all_question.math_add_sub[3].question_quantity_info.behind,all_question.math_add_sub[3].question_picture_info.front,all_question.math_add_sub[3].question_picture_info.behind);</script></td>
		<td valign="middle"><script>anw_math_add_sub_pictures(all_question.math_add_sub[3].question_picture_info.front);</script> 和 <script>anw_math_add_sub_pictures(all_question.math_add_sub[3].question_picture_info.behind);anw_math_add_sub_sign(all_question.math_add_sub[3].question_sign)</script>
		<input id="add_sub_option4_1" name="add_sub_option1_1" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[18]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">個
		</td>
		<td><input id="add_sub_option4_2" name="add_sub_option4_2" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[19]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="add_sub_option4_3" name="add_sub_option4_3" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[20]'"; ?> style="width: 15px; height: 10px; font-size: 20px;">
			<input id="add_sub_option4_4" name="add_sub_option4_4" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[21]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="add_sub_option4_5" name="add_sub_option4_5" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[22]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
		</td>
		<td valign="middle"><script>anw_math_add_sub_pictures(all_question.math_add_sub[3].question_picture_info.front);</script> 和 <script>anw_math_add_sub_pictures(all_question.math_add_sub[3].question_picture_info.behind);anw_math_add_sub_sign(all_question.math_add_sub[3].question_sign)</script>
		<input id="anw_add_sub_option4_1" name="anw_add_sub_option4_1" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[33]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">個
		</td>
		<td>
			<input id="anw_add_sub_option4_2" name="anw_add_sub_option4_2" align="center"  type="text"  data-role="none" disabled <?php if($math_add_sub[18]>$math_add_sub[19]){ echo "value='$math_add_sub[18]'"; } else{  echo "value='$math_add_sub[19]'";} ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="anw_add_sub_option4_3" name="anw_add_sub_option4_3" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[34]'"; ?> style="width: 15px; height: 10px; font-size: 20px;">
			<input id="anw_add_sub_option4_4" name="anw_add_sub_option4_4" align="center"  type="text"  data-role="none" disabled <?php if($math_add_sub[18]>$math_add_sub[19]){ echo "value='$math_add_sub[19]'"; } else{  echo "value='$math_add_sub[18]'";} ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="anw_add_sub_option4_5" name="anw_add_sub_option4_5" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[33]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
		</td>
	</tr>
	<tr class="sub_oddtr">
		<td><script>anw_math_add_sub_question_pictures(all_question.math_add_sub[4].question_quantity_info.front,all_question.math_add_sub[4].question_quantity_info.behind,all_question.math_add_sub[4].question_picture_info.front,all_question.math_add_sub[4].question_picture_info.behind);</script></td>
		<td valign="middle"><script>anw_math_add_sub_pictures(all_question.math_add_sub[4].question_picture_info.front);</script> 和 <script>anw_math_add_sub_pictures(all_question.math_add_sub[4].question_picture_info.behind);anw_math_add_sub_sign(all_question.math_add_sub[4].question_sign)</script>
		<input id="add_sub_option5_1" name="add_sub_option5_1" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[23]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">個
		</td>
		<td><input id="add_sub_optio51_2" name="add_sub_option5_2" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[24]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="add_sub_option5_3" name="add_sub_option5_3" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[25]'"; ?> style="width: 15px; height: 10px; font-size: 20px;">
			<input id="add_sub_option5_4" name="add_sub_option5_4" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[26]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="add_sub_option5_5" name="add_sub_option5_5" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub_sql[27]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
		</td>
		<td valign="middle"><script>anw_math_add_sub_pictures(all_question.math_add_sub[4].question_picture_info.front);</script> 和 <script>anw_math_add_sub_pictures(all_question.math_add_sub[4].question_picture_info.behind);anw_math_add_sub_sign(all_question.math_add_sub[4].question_sign)</script>
		<input id="anw_add_sub_option5_1" name="anw_add_sub_option5_1" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[35]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">個
		</td>
		<td>
			<input id="anw_add_sub_option5_2" name="anw_add_sub_option5_2" align="center"  type="text"  data-role="none" disabled <?php if($math_add_sub[20]>$math_add_sub[21]){ echo "value='$math_add_sub[20]'"; } else{  echo "value='$math_add_sub[21]'";} ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="anw_add_sub_option5_3" name="anw_add_sub_option5_3" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[36]'"; ?> style="width: 15px; height: 10px; font-size: 20px;">
			<input id="anw_add_sub_option5_4" name="anw_add_sub_option5_4" align="center"  type="text"  data-role="none" disabled <?php if($math_add_sub[20]>$math_add_sub[21]){ echo "value='$math_add_sub[21]'"; } else{  echo "value='$math_add_sub[20]'";} ?> style="width: 50px; height: 50px; font-size: 25px;">
			<input id="anw_add_sub_option5_5" name="anw_add_sub_option5_5" align="center"  type="text"  data-role="none" disabled <?php echo "value='$math_add_sub[35]'"; ?> style="width: 50px; height: 50px; font-size: 25px;">
		</td>
	</tr>
</table>
</div>
 <br>
		<a href="#math_anwser1" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
		<a href="Topic.php" data-ajax="false" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
  		<a href="#math_anwser3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
        <br><br>
	</div>
	<div data-role="page" id="math_anwser3" align="center">
		<h3 align="center" style="color: red">本大題拿了<?php echo "$math_big_small_sql[2]"; ?>/20分</h3>
		<h3 align="center">請選出最小的數字</h3>
		<div class="big_border">
	<table border="1" align="center" class="big_table">
		<tr class="big_one">
			<th>原作答</th>
			<th>正確答案</th>
			<th>原作答</th>
			<th>正確答案</th>
		</tr>
		<tr>
			<td class="big_oddtd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small1_1" disabled <?php if($math_big_small_sql[3]=="$math_big_small[2]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[0].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small1_2" disabled <?php if($math_big_small_sql[3]=="$math_big_small[3]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[0].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small1_3" disabled <?php if($math_big_small_sql[3]=="$math_big_small[4]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[0].question_option.third)</script></label></div>
			</td>
			<td class="big_oddtd" align="center" style="color: red"><?php $a=min($math_big_small[2],$math_big_small[3],$math_big_small[4]); echo "$a"; ?></td>
			<td class="big_eventd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_small2_1" disabled <?php if($math_big_small_sql[4]=="$math_big_small[5]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[1].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_small2_2" disabled <?php if($math_big_small_sql[4]=="$math_big_small[6]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[1].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_small2_3" disabled <?php if($math_big_small_sql[4]=="$math_big_small[7]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[1].question_option.third)</script></label></div>
			</td>
			<td class="big_eventd" align="center" style="color: red"><?php $a=min($math_big_small[5],$math_big_small[6],$math_big_small[7]); echo "$a"; ?></td>
		</tr>
		<tr>
			<td class="big_eventd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small3" id="big_small3_1" disabled <?php if($math_big_small_sql[5]=="$math_big_small[8]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[2].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small3" id="big_small3_2" disabled <?php if($math_big_small_sql[5]=="$math_big_small[9]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[2].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small3" id="big_small3_3" disabled <?php if($math_big_small_sql[5]=="$math_big_small[10]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[2].question_option.third)</script></label></div>
			</td>
			<td class="big_eventd" align="center" style="color: red"><?php $a=min($math_big_small[8],$math_big_small[9],$math_big_small[10]); echo "$a"; ?></td>
			<td class="big_oddtd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small4" id="big_small4_1" disabled <?php if($math_big_small_sql[6]=="$math_big_small[11]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[3].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small4" id="big_small4_2" disabled <?php if($math_big_small_sql[6]=="$math_big_small[12]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[3].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small4" id="big_small4_3" disabled <?php if($math_big_small_sql[6]=="$math_big_small[13]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[3].question_option.third)</script></label></div>
			</td>
			<td class="big_oddtd" align="center" style="color: red"><?php $a=min($math_big_small[11],$math_big_small[12],$math_big_small[13]); echo "$a"; ?></td>
		</tr><tr>
			<td class="big_oddtd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small5" id="big_small5_1" disabled <?php if($math_big_small_sql[7]=="$math_big_small[14]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[4].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small5" id="big_small5_2" disabled <?php if($math_big_small_sql[7]=="$math_big_small[15]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[4].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small5" id="big_small5_3" disabled <?php if($math_big_small_sql[7]=="$math_big_small[16]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[4].question_option.third)</script></label></div>
			</td>
			<td class="big_oddtd" align="center" style="color: red"><?php $a=min($math_big_small[14],$math_big_small[15],$math_big_small[16]); echo "$a"; ?></td>
			<td class="big_eventd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small6" id="big_small6_1" disabled <?php if($math_big_small_sql[8]=="$math_big_small[17]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[5].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small6" id="big_small6_2" disabled <?php if($math_big_small_sql[8]=="$math_big_small[18]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[5].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small6" id="big_small6_3" disabled <?php if($math_big_small_sql[8]=="$math_big_small[19]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[5].question_option.third)</script></label></div>
			</td>
			<td class="big_eventd" align="center" style="color: red"><?php $a=min($math_big_small[17],$math_big_small[18],$math_big_small[19]); echo "$a"; ?></td>
		</tr><tr>
			<td class="big_eventd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small7_1" disabled <?php if($math_big_small_sql[9]=="$math_big_small[20]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[6].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small7_2" disabled <?php if($math_big_small_sql[9]=="$math_big_small[21]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[6].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small7_3" disabled <?php if($math_big_small_sql[9]=="$math_big_small[22]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[6].question_option.third)</script></label></div>
			</td>
			<td class="big_eventd" align="center" style="color: red"><?php $a=min($math_big_small[20],$math_big_small[21],$math_big_small[22]); echo "$a"; ?></td>
			<td class="big_oddtd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_small8_1" disabled <?php if($math_big_small_sql[10]=="$math_big_small[23]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[7].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_small8_2" disabled <?php if($math_big_small_sql[10]=="$math_big_small[24]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[7].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_small8_3" disabled <?php if($math_big_small_sql[10]=="$math_big_small[25]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[7].question_option.third)</script></label></div>
			</td>
			<td class="big_oddtd" align="center" style="color: red"><?php $a=min($math_big_small[23],$math_big_small[24],$math_big_small[25]); echo "$a"; ?></td>
		</tr>
		<tr>
			<td class="big_oddtd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small9" id="big_small9_1" disabled <?php if($math_big_small_sql[11]=="$math_big_small[26]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[8].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small9" id="big_small9_2" disabled <?php if($math_big_small_sql[11]=="$math_big_small[27]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[8].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small9" id="big_small9_3" disabled <?php if($math_big_small_sql[11]=="$math_big_small[28]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[8].question_option.third)</script></label></div>
			</td>
			<td class="big_oddtd" align="center" style="color: red"><?php $a=min($math_big_small[26],$math_big_small[27],$math_big_small[28]); echo "$a"; ?></td>
			<td class="big_eventd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small10" id="big_small10_1" disabled <?php if($math_big_small_sql[12]=="$math_big_small[29]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[9].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small10" id="big_small10_2" disabled <?php if($math_big_small_sql[12]=="$math_big_small[30]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[9].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small10" id="big_small10_3" disabled <?php if($math_big_small_sql[12]=="$math_big_small[31]") echo "checked=checked";?>><script>anw_math_choose_write(all_question.math_big_small[9].question_option.third)</script></label></div>
			</td>
			<td class="big_eventd" align="center" style="color: red"><?php $a=min($math_big_small[29],$math_big_small[30],$math_big_small[31]); echo "$a"; ?></td>
		</tr>
	</table>
	</div>
	<br>
		<a href="#math_anwser2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
		<a href="Topic.php" data-ajax="false" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
  		<a href="#math_anwser4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
	</div>
	<div data-role="page" id="math_anwser4" align="center">
	<h3 align="center" style="color: red">本大題拿了<?php echo "$math_multistage[2]"; ?>/20分</h3>
	<h3 align="center">算一算,空格裡的數字是多少,一格1分</h3>
	<div class="multistage_border">
		<table border="1" style="margin: auto;" class="multistage_table_odd">
	<tr>
		<th>原作答</th>
		<th>正確答案</th>
	</tr>
	<tr>
		<td>
			<div style="float: left;"><label><input type="number" name="multistage1_1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[2]=="1"||$math_multistage[3]=="1") {echo "value=\"$math_multistage[12]\""; }else echo "value=\"$math_multistage_sql[3]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage1_2" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[2]=="2"||$math_multistage[3]=="2") {$a=$math_multistage[12]+1; echo "value=\"$a\""; }else echo "value=\"$math_multistage_sql[4]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage1_3" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[2]=="3"||$math_multistage[3]=="3") {$a=$math_multistage[12]+2; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[5]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage1_4" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[2]=="4"||$math_multistage[3]=="4") {$a=$math_multistage[12]+3; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[6]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage1_5" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[2]=="5"||$math_multistage[3]=="5") {$a=$math_multistage[12]+4; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[7]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage1_6" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[2]=="6"||$math_multistage[3]=="6") {$a=$math_multistage[12]+5; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[8]\""; ?>></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="number" name="multistage1_1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php echo "value='$math_multistage[12]'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage1_2"  data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[12]+1; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage1_3" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[12]+2; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage1_4" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[12]+3; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage1_5" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[12]+4; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage1_6" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[12]+5; echo "value='$a'"; ?>></label></div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float: left;"><label><input type="number" name="multistage2_1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[4]=="1"||$math_multistage[5]=="1") {echo "value=\"$math_multistage[13]\""; }else echo "value=\"$math_multistage_sql[9]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage2_2" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[4]=="2"||$math_multistage[5]=="2") {$a=$math_multistage[13]-1; echo "value=\"$a\""; }else echo "value=\"$math_multistage_sql[10]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage2_3" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[4]=="3"||$math_multistage[5]=="3") {$a=$math_multistage[13]-2; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[11]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage2_4" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[4]=="4"||$math_multistage[5]=="4") {$a=$math_multistage[13]-3; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[12]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage2_5" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[4]=="5"||$math_multistage[5]=="5") {$a=$math_multistage[13]-4; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[13]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage2_6" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[4]=="6"||$math_multistage[5]=="6") {$a=$math_multistage[13]-5; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[14]\""; ?>></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="number" name="multistage2_1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php echo "value='$math_multistage[13]'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage2_2"  data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[13]-1; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage2_3" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[13]-2; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage2_4" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[13]-3; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage2_5" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[13]-4; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage2_6" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[13]-5; echo "value='$a'"; ?>></label></div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float: left;"><label><input type="number" name="multistage3_1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[6]=="1"||$math_multistage[7]=="1") {echo "value=\"$math_multistage[14]\""; }else echo "value=\"$math_multistage_sql[15]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage3_2" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[6]=="2"||$math_multistage[7]=="2") {$a=$math_multistage[14]-1; echo "value=\"$a\""; }else echo "value=\"$math_multistage_sql[16]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage3_3" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[6]=="3"||$math_multistage[7]=="3") {$a=$math_multistage[14]-2; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[17]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage3_4" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[6]=="4"||$math_multistage[7]=="4") {$a=$math_multistage[14]-3; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[18]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage3_5" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[6]=="5"||$math_multistage[7]=="5") {$a=$math_multistage[14]-4; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[19]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage3_6" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[6]=="6"||$math_multistage[7]=="6") {$a=$math_multistage[14]-5; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[20]\""; ?>></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="number" name="multistage3_1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php echo "value='$math_multistage[14]'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage3_2"  data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[14]-1; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage3_3" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[14]-2; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage3_4" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[14]-3; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage3_5" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[14]-4; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage3_6" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[14]-5; echo "value='$a'"; ?>></label></div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float: left;"><label><input type="number" name="multistage4_1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[8]=="1"||$math_multistage[9]=="1") {echo "value=\"$math_multistage[15]\""; }else echo "value=\"$math_multistage_sql[21]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage4_2" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[8]=="2"||$math_multistage[9]=="2") {$a=$math_multistage[15]+1; echo "value=\"$a\""; }else echo "value=\"$math_multistage_sql[22]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage4_3" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[8]=="3"||$math_multistage[9]=="3") {$a=$math_multistage[15]+2; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[23]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage4_4" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[8]=="4"||$math_multistage[9]=="4") {$a=$math_multistage[15]+3; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[24]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage4_5" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[8]=="5"||$math_multistage[9]=="5") {$a=$math_multistage[15]+4; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[25]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage4_6" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[8]=="6"||$math_multistage[9]=="6") {$a=$math_multistage[15]+5; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[26]\""; ?>></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="number" name="multistage4_1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php echo "value='$math_multistage[15]'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage4_2"  data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[15]+1; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage4_3" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[15]+2; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage4_4" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[15]+3; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage4_5" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[15]+4; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage4_6" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[15]+5; echo "value='$a'"; ?>></label></div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float: left;"><label><input type="number" name="multistage5_1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[10]=="1"||$math_multistage[11]=="1") {echo "value=\"$math_multistage[16]\""; }else echo "value=\"$math_multistage_sql[27]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage5_2" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[10]=="2"||$math_multistage[11]=="2") {$a=$math_multistage[16]-1; echo "value=\"$a\""; }else echo "value=\"$math_multistage_sql[28]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage5_3" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[10]=="3"||$math_multistage[11]=="3") {$a=$math_multistage[16]-2; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[29]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage5_4" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[10]=="4"||$math_multistage[11]=="4") {$a=$math_multistage[16]-3; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[30]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage5_5" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[10]=="5"||$math_multistage[11]=="5") {$a=$math_multistage[16]-4; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[31]\""; ?>></label></div>
  			<div style="float: left;"><label><input type="number" name="multistage5_6" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php if($math_multistage[10]=="6"||$math_multistage[11]=="6") {$a=$math_multistage[16]-5; echo "value=\"$a\""; } else echo "value=\"$math_multistage_sql[32]\""; ?>></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="number" name="multistage5_1" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php echo "value='$math_multistage[16]'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage5_2"  data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[16]-1; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage5_3" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[16]-2; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage5_4" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[16]-3; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage5_5" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[16]-4; echo "value='$a'"; ?>></label></div>
			<div style="float: left;"><label><input type="number" name="multistage5_6" data-role="none" style="height: 80px; width: 80px; font-size: 55px; text-align: center;" disabled <?php $a=$math_multistage[16]-5; echo "value='$a'"; ?>></label></div>
		</td>
	</tr>
</table>
</div>
<br>
        <a href="#math_anwser3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
        <a href="Topic.php" data-ajax="false" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
        <a href="#math_anwser5" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>

	</div>
	<div data-role="page" id="math_anwser5" align=center>
		<h3 align="center" style="color: red">本大題拿了<?php echo "$math_triple_add_sql[2]"; ?>/20分</h3>
		<h3 align="center">請你加加看有多少?</h3>
		<div class="add_border">
		<table border="1" align="center" class="add_table_odd" rules="rows">
			<tr>
				<th class="add_table_info">圖</th>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[0].question_quantity.first,all_question.math_triple_add[0].question_picture)</script></td>
				<td class="add_table_space">+</td>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[0].question_quantity.second,all_question.math_triple_add[0].question_picture)</script></td>
				<td class="add_table_space">+</td>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[0].question_quantity.third,all_question.math_triple_add[0].question_picture)</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_space"></td>
			</tr>
			<tr>
				<th class="add_table_info">原作答</th>
				<td style="text-align: center;"><?php echo "$math_triple_add[3]"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[4]"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[5]"?></td>
				<td>=</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[6]"?></td>
			</tr>
			<tr>
				<th class="add_table_info">正解</th>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[0].question_quantity.first)</script></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[0].question_quantity.second)</script></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[0].question_quantity.third)</script></td>
				<td>=</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[0].question_quantity.first+all_question.math_triple_add[0].question_quantity.second+all_question.math_triple_add[0].question_quantity.third)</script></td>
			</tr>
		</table>
		<br>
		<table border="1" align="center" class="add_table_even" rules="rows">
			<tr>
				<th class="add_table_info">圖</th>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[1].question_quantity.first,all_question.math_triple_add[1].question_picture)</script></td>
				<td class="add_table_space">+</td>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[1].question_quantity.second,all_question.math_triple_add[1].question_picture)</script></td>
				<td class="add_table_space">+</td>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[1].question_quantity.third,all_question.math_triple_add[1].question_picture)</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_space"></td>
			</tr>
			<tr>
				<th class="add_table_info">原作答</th>
				<td style="text-align: center;"><?php echo "$math_triple_add[7]"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[8]"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[9]"?></td>
				<td>=</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[10]"?></td>
			</tr>
			<tr>
				<th class="add_table_info">正解</th>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[1].question_quantity.first)</script></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[1].question_quantity.second)</script></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[1].question_quantity.third)</script></td>
				<td>=</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[1].question_quantity.first+all_question.math_triple_add[1].question_quantity.second+all_question.math_triple_add[1].question_quantity.third)</script></td>
			</tr>
		</table>
		<br>
		<br>
		<table border="1" align="center" class="add_table_odd" rules="rows">
			<tr>
				<th class="add_table_info">圖</th>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[2].question_quantity.first,all_question.math_triple_add[2].question_picture)</script></td>
				<td class="add_table_space">+</td>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[2].question_quantity.second,all_question.math_triple_add[2].question_picture)</script></td>
				<td class="add_table_space">+</td>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[2].question_quantity.third,all_question.math_triple_add[2].question_picture)</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_space"></td>
			</tr>
			<tr>
				<th class="add_table_info">原作答</th>
				<td style="text-align: center;"><?php echo "$math_triple_add[11]"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[12]"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[13]"?></td>
				<td>=</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[14]"?></td>
			</tr>
			<tr>
				<th class="add_table_info">正解</th>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[2].question_quantity.first)</script></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[2].question_quantity.second)</script></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[2].question_quantity.third)</script></td>
				<td>=</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[2].question_quantity.first+all_question.math_triple_add[2].question_quantity.second+all_question.math_triple_add[2].question_quantity.third)</script></td>
			</tr>
		</table>
		<br>
		<br>
		<table border="1" align="center" class="add_table_even" rules="rows">
			<tr>
				<th class="add_table_info">圖</th>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[3].question_quantity.first,all_question.math_triple_add[3].question_picture)</script></td>
				<td class="add_table_space">+</td>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[3].question_quantity.second,all_question.math_triple_add[3].question_picture)</script></td>
				<td class="add_table_space">+</td>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[3].question_quantity.third,all_question.math_triple_add[3].question_picture)</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_space"></td>
			</tr>
			<tr>
				<th class="add_table_info">原作答</th>
				<td style="text-align: center;"><?php echo "$math_triple_add[15]"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[16]"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[17]"?></td>
				<td>=</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[18]"?></td>
			</tr>
			<tr>
				<th class="add_table_info">正解</th>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[3].question_quantity.first)</script></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[3].question_quantity.second)</script></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[3].question_quantity.third)</script></td>
				<td>=</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[3].question_quantity.first+all_question.math_triple_add[3].question_quantity.second+all_question.math_triple_add[3].question_quantity.third)</script></td>
			</tr>
		</table>
		<br>
		<br>
		<table border="1" align="center" class="add_table_odd" rules="rows">
			<tr>
				<th class="add_table_info">圖</th>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[4].question_quantity.first,all_question.math_triple_add[4].question_picture)</script></td>
				<td class="add_table_space">+</td>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[4].question_quantity.second,all_question.math_triple_add[4].question_picture)</script></td>
				<td class="add_table_space">+</td>
				<td class="add_table_picture" style="text-align: center"><script>math_triple_add_pictures(all_question.math_triple_add[4].question_quantity.third,all_question.math_triple_add[4].question_picture)</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_space"></td>
			</tr>
			<tr>
				<th class="add_table_info">原作答</th>
				<td style="text-align: center;"><?php echo "$math_triple_add[19]"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[20]"?></td>
				<td>+</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[21]"?></td>
				<td>=</td>
				<td style="text-align: center;"><?php echo "$math_triple_add[22]"?></td>
			</tr>
			<tr>
				<th class="add_table_info">正解</th>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[4].question_quantity.first)</script></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[4].question_quantity.second)</script></td>
				<td>+</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[4].question_quantity.third)</script></td>
				<td>=</td>
				<td style="text-align: center; color: red;"><script>anw_math_choose_write(all_question.math_triple_add[4].question_quantity.first+all_question.math_triple_add[4].question_quantity.second+all_question.math_triple_add[4].question_quantity.third)</script></td>
			</tr>
		</table>
		</div>
		<br>
        <a href="#math_anwser4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
        <a href="Topic.php" data-ajax="false" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
	</div>
	</form>