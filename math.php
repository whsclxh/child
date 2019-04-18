<?php session_start(); ?>
<?php
include("mysql_connect.php"); 
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.php>';
}
?>
<?php
$id = $_SESSION['username'];
$mathtimes = $_SESSION['math_times'];
$math_sq2 = "SELECT * FROM math_score where username = '$id' and cardinal='$mathtimes'";
$math_result2 = mysqli_query($link,$math_sq2);
$math_a_row = @mysqli_fetch_row($math_result2);
if($math_a_row[1]==$mathtimes){
    echo "<script>alert('此次作答已經提交過囉!!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Topic.php>';
}
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
		if(all_question.math_multistage[0].question_space.one==1){
			document.getElementById('multistage1_1').disabled=true;
			document.getElementById('multistage1_1').value=all_question.math_multistage[0].question_number;
		}
		if(all_question.math_multistage[0].question_space.one==2){
			document.getElementById('multistage1_2').disabled=true;
			document.getElementById('multistage1_2').value=all_question.math_multistage[0].question_number+1;
		}
		if(all_question.math_multistage[0].question_space.one==3){
			document.getElementById('multistage1_3').disabled=true;
			document.getElementById('multistage1_3').value=all_question.math_multistage[0].question_number+2;
		}
		if(all_question.math_multistage[0].question_space.one==4){
			document.getElementById('multistage1_4').disabled=true;
			document.getElementById('multistage1_4').value=all_question.math_multistage[0].question_number+3;
		}
		if(all_question.math_multistage[0].question_space.one==5){
			document.getElementById('multistage1_5').disabled=true;
			document.getElementById('multistage1_5').value=all_question.math_multistage[0].question_number+4;
		}
		if(all_question.math_multistage[0].question_space.one==6){
			document.getElementById('multistage1_6').disabled=true;
			document.getElementById('multistage1_6').value=all_question.math_multistage[0].question_number+5;
		}
		if(all_question.math_multistage[0].question_space.two==1){
			document.getElementById('multistage1_1').disabled=true;
			document.getElementById('multistage1_1').value=all_question.math_multistage[0].question_number;
		}
		if(all_question.math_multistage[0].question_space.two==2){
			document.getElementById('multistage1_2').disabled=true;
			document.getElementById('multistage1_2').value=all_question.math_multistage[0].question_number+1;
		}
		if(all_question.math_multistage[0].question_space.two==3){
			document.getElementById('multistage1_3').disabled=true;
			document.getElementById('multistage1_3').value=all_question.math_multistage[0].question_number+2;
		}
		if(all_question.math_multistage[0].question_space.two==4){
			document.getElementById('multistage1_4').disabled=true;
			document.getElementById('multistage1_4').value=all_question.math_multistage[0].question_number+3;
		}
		if(all_question.math_multistage[0].question_space.two==5){
			document.getElementById('multistage1_5').disabled=true;
			document.getElementById('multistage1_5').value=all_question.math_multistage[0].question_number+4;
		}
		if(all_question.math_multistage[0].question_space.two==6){
			document.getElementById('multistage1_6').disabled=true;
			document.getElementById('multistage1_6').value=all_question.math_multistage[0].question_number+5;
		}
		if(all_question.math_multistage[1].question_space.one==1){
			document.getElementById('multistage2_1').disabled=true;
			document.getElementById('multistage2_1').value=all_question.math_multistage[1].question_number;
		}
		if(all_question.math_multistage[1].question_space.one==2){
			document.getElementById('multistage2_2').disabled=true;
			document.getElementById('multistage2_2').value=all_question.math_multistage[1].question_number-1;
		}
		if(all_question.math_multistage[1].question_space.one==3){
			document.getElementById('multistage2_3').disabled=true;
			document.getElementById('multistage2_3').value=all_question.math_multistage[1].question_number-2;
		}
		if(all_question.math_multistage[1].question_space.one==4){
			document.getElementById('multistage2_4').disabled=true;
			document.getElementById('multistage2_4').value=all_question.math_multistage[1].question_number-3;
		}
		if(all_question.math_multistage[1].question_space.one==5){
			document.getElementById('multistage2_5').disabled=true;
			document.getElementById('multistage2_5').value=all_question.math_multistage[1].question_number-4;
		}
		if(all_question.math_multistage[1].question_space.one==6){
			document.getElementById('multistage2_6').disabled=true;
			document.getElementById('multistage2_6').value=all_question.math_multistage[1].question_number-5;
		}
		if(all_question.math_multistage[1].question_space.two==1){
			document.getElementById('multistage2_1').disabled=true;
			document.getElementById('multistage2_1').value=all_question.math_multistage[1].question_number;
		}
		if(all_question.math_multistage[1].question_space.two==2){
			document.getElementById('multistage2_2').disabled=true;
			document.getElementById('multistage2_2').value=all_question.math_multistage[1].question_number-1;
		}
		if(all_question.math_multistage[1].question_space.two==3){
			document.getElementById('multistage2_3').disabled=true;
			document.getElementById('multistage2_3').value=all_question.math_multistage[1].question_number-2;
		}
		if(all_question.math_multistage[1].question_space.two==4){
			document.getElementById('multistage2_4').disabled=true;
			document.getElementById('multistage2_4').value=all_question.math_multistage[1].question_number-3;
		}
		if(all_question.math_multistage[1].question_space.two==5){
			document.getElementById('multistage2_5').disabled=true;
			document.getElementById('multistage2_5').value=all_question.math_multistage[1].question_number-4;
		}
		if(all_question.math_multistage[1].question_space.two==6){
			document.getElementById('multistage2_6').disabled=true;
			document.getElementById('multistage2_6').value=all_question.math_multistage[1].question_number-5;
		}
		if(all_question.math_multistage[2].question_space.one==1){
			document.getElementById('multistage3_1').disabled=true;
			document.getElementById('multistage3_1').value=all_question.math_multistage[2].question_number;
		}
		if(all_question.math_multistage[2].question_space.one==2){
			document.getElementById('multistage3_2').disabled=true;
			document.getElementById('multistage3_2').value=all_question.math_multistage[2].question_number-1;
		}
		if(all_question.math_multistage[2].question_space.one==3){
			document.getElementById('multistage3_3').disabled=true;
			document.getElementById('multistage3_3').value=all_question.math_multistage[2].question_number-2;
		}
		if(all_question.math_multistage[2].question_space.one==4){
			document.getElementById('multistage3_4').disabled=true;
			document.getElementById('multistage3_4').value=all_question.math_multistage[2].question_number-3;
		}
		if(all_question.math_multistage[2].question_space.one==5){
			document.getElementById('multistage3_5').disabled=true;
			document.getElementById('multistage3_5').value=all_question.math_multistage[2].question_number-4;
		}
		if(all_question.math_multistage[2].question_space.one==6){
			document.getElementById('multistage3_6').disabled=true;
			document.getElementById('multistage3_6').value=all_question.math_multistage[2].question_number-5;
		}
		if(all_question.math_multistage[2].question_space.two==1){
			document.getElementById('multistage3_1').disabled=true;
			document.getElementById('multistage3_1').value=all_question.math_multistage[2].question_number;
		}
		if(all_question.math_multistage[2].question_space.two==2){
			document.getElementById('multistage3_2').disabled=true;
			document.getElementById('multistage3_2').value=all_question.math_multistage[2].question_number-1;
		}
		if(all_question.math_multistage[2].question_space.two==3){
			document.getElementById('multistage3_3').disabled=true;
			document.getElementById('multistage3_3').value=all_question.math_multistage[2].question_number-2;
		}
		if(all_question.math_multistage[2].question_space.two==4){
			document.getElementById('multistage3_4').disabled=true;
			document.getElementById('multistage3_4').value=all_question.math_multistage[2].question_number-3;
		}
		if(all_question.math_multistage[2].question_space.two==5){
			document.getElementById('multistage3_5').disabled=true;
			document.getElementById('multistage3_5').value=all_question.math_multistage[2].question_number-4;
		}
		if(all_question.math_multistage[2].question_space.two==6){
			document.getElementById('multistage3_6').disabled=true;
			document.getElementById('multistage3_6').value=all_question.math_multistage[2].question_number-5;
		}
		if(all_question.math_multistage[3].question_space.one==1){
			document.getElementById('multistage4_1').disabled=true;
			document.getElementById('multistage4_1').value=all_question.math_multistage[3].question_number;
		}
		if(all_question.math_multistage[3].question_space.one==2){
			document.getElementById('multistage4_2').disabled=true;
			document.getElementById('multistage4_2').value=all_question.math_multistage[3].question_number+1;
		}
		if(all_question.math_multistage[3].question_space.one==3){
			document.getElementById('multistage4_3').disabled=true;
			document.getElementById('multistage4_3').value=all_question.math_multistage[3].question_number+2;
		}
		if(all_question.math_multistage[3].question_space.one==4){
			document.getElementById('multistage4_4').disabled=true;
			document.getElementById('multistage4_4').value=all_question.math_multistage[3].question_number+3;
		}
		if(all_question.math_multistage[3].question_space.one==5){
			document.getElementById('multistage4_5').disabled=true;
			document.getElementById('multistage4_5').value=all_question.math_multistage[3].question_number+4;
		}
		if(all_question.math_multistage[3].question_space.one==6){
			document.getElementById('multistage4_6').disabled=true;
			document.getElementById('multistage4_6').value=all_question.math_multistage[3].question_number+5;
		}
		if(all_question.math_multistage[3].question_space.two==1){
			document.getElementById('multistage4_1').disabled=true;
			document.getElementById('multistage4_1').value=all_question.math_multistage[3].question_number;
		}
		if(all_question.math_multistage[3].question_space.two==2){
			document.getElementById('multistage4_2').disabled=true;
			document.getElementById('multistage4_2').value=all_question.math_multistage[3].question_number+1;
		}
		if(all_question.math_multistage[3].question_space.two==3){
			document.getElementById('multistage4_3').disabled=true;
			document.getElementById('multistage4_3').value=all_question.math_multistage[3].question_number+2;
		}
		if(all_question.math_multistage[3].question_space.two==4){
			document.getElementById('multistage4_4').disabled=true;
			document.getElementById('multistage4_4').value=all_question.math_multistage[3].question_number+3;
		}
		if(all_question.math_multistage[3].question_space.two==5){
			document.getElementById('multistage4_5').disabled=true;
			document.getElementById('multistage4_5').value=all_question.math_multistage[3].question_number+4;
		}
		if(all_question.math_multistage[3].question_space.two==6){
			document.getElementById('multistage4_6').disabled=true;
			document.getElementById('multistage4_6').value=all_question.math_multistage[3].question_number+5;
		}
		if(all_question.math_multistage[4].question_space.one==1){
			document.getElementById('multistage5_1').disabled=true;
			document.getElementById('multistage5_1').value=all_question.math_multistage[4].question_number;
		}
		if(all_question.math_multistage[4].question_space.one==2){
			document.getElementById('multistage5_2').disabled=true;
			document.getElementById('multistage5_2').value=all_question.math_multistage[4].question_number-1;
		}
		if(all_question.math_multistage[4].question_space.one==3){
			document.getElementById('multistage5_3').disabled=true;
			document.getElementById('multistage5_3').value=all_question.math_multistage[4].question_number-2;
		}
		if(all_question.math_multistage[4].question_space.one==4){
			document.getElementById('multistage5_4').disabled=true;
			document.getElementById('multistage5_4').value=all_question.math_multistage[4].question_number-3;
		}
		if(all_question.math_multistage[4].question_space.one==5){
			document.getElementById('multistage5_5').disabled=true;
			document.getElementById('multistage5_5').value=all_question.math_multistage[4].question_number-4;
		}
		if(all_question.math_multistage[4].question_space.one==6){
			document.getElementById('multistage5_6').disabled=true;
			document.getElementById('multistage5_6').value=all_question.math_multistage[4].question_number-5;
		}
		if(all_question.math_multistage[4].question_space.two==1){
			document.getElementById('multistage5_1').disabled=true;
			document.getElementById('multistage5_1').value=all_question.math_multistage[4].question_number;
		}
		if(all_question.math_multistage[4].question_space.two==2){
			document.getElementById('multistage5_2').disabled=true;
			document.getElementById('multistage5_2').value=all_question.math_multistage[4].question_number-1;
		}
		if(all_question.math_multistage[4].question_space.two==3){
			document.getElementById('multistage5_3').disabled=true;
			document.getElementById('multistage5_3').value=all_question.math_multistage[4].question_number-2;
		}
		if(all_question.math_multistage[4].question_space.two==4){
			document.getElementById('multistage5_4').disabled=true;
			document.getElementById('multistage5_4').value=all_question.math_multistage[4].question_number-3;
		}
		if(all_question.math_multistage[4].question_space.two==5){
			document.getElementById('multistage5_5').disabled=true;
			document.getElementById('multistage5_5').value=all_question.math_multistage[4].question_number-4;
		}
		if(all_question.math_multistage[4].question_space.two==6){
			document.getElementById('multistage5_6').disabled=true;
			document.getElementById('multistage5_6').value=all_question.math_multistage[4].question_number-5;
		}
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
<link rel="stylesheet" type="text/css" href="css/math.css">
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
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="./math_js/math_add_sub.js"></script>
<script type="text/javascript" src="./math_js/math_big_small.js"></script>
<script type="text/javascript" src="./math_js/math_choose.js"></script>
<script type="text/javascript" src="./math_js/math_triple_add.js"></script>
<body>
	<form method="post" action="math_before_finish.php" data-ajax="false" name="form1">
		<div data-role="page" id="math1">
		<h3 align="center">數一數,選出正確的數量,一題4分</h3>
		<div class="choose_border">
		<table border="5" align="center" class="choose_table">	
		<tr class="choose_oddtr">
		<td><script>choose_pictures(all_question.math_choose[0].question_picture,all_question.math_choose[0].question_quantity);</script></td>
		<td>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option1_1" name="choose1" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[0].question_option.first);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option1_2" name="choose1" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[0].question_option.second);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option1_3" name="choose1" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[0].question_option.third);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option1_4" name="choose1" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[0].question_option.fourth);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option1_5" name="choose1" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[0].question_option.fifth);</script></label></div>
		</td>
		</tr>
		<tr class="choose_eventr">
		<td><script>choose_pictures(all_question.math_choose[1].question_picture,all_question.math_choose[1].question_quantity);</script></td>
		<td>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option2_1" name="choose2" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[1].question_option.first);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option2_2" name="choose2" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[1].question_option.second);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option2_3" name="choose2" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[1].question_option.third);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option2_4" name="choose2" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[1].question_option.fourth);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option2_5" name="choose2" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[1].question_option.fifth);</script></label></div>
		</td>
		</tr>
		<tr class="choose_oddtr">
		<td><script>choose_pictures(all_question.math_choose[2].question_picture,all_question.math_choose[2].question_quantity);</script></td>
		<td>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option3_1" name="choose3" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[2].question_option.first);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option3_2" name="choose3" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[2].question_option.second);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option3_3" name="choose3" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[2].question_option.third);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option3_4" name="choose3" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[2].question_option.fourth);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option3_5" name="choose3" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[2].question_option.fifth);</script></label></div>
		</td>
		</tr>
		<tr class="choose_eventr">
		<td><script>choose_pictures(all_question.math_choose[3].question_picture,all_question.math_choose[3].question_quantity);</script></td>
		<td>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option4_1" name="choose4" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[3].question_option.first);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option4_2" name="choose4" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[3].question_option.second);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option4_3" name="choose4" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[3].question_option.third);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option4_4" name="choose4" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[3].question_option.fourth);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option4_5" name="choose4" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[3].question_option.fifth);</script></label></div>
		</td>
		</tr>
		<tr class="choose_oddtr">
		<td><script>choose_pictures(all_question.math_choose[4].question_picture,all_question.math_choose[4].question_quantity);</script></td>
		<td>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option5_1" name="choose5" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[4].question_option.first);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option5_2" name="choose5" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[4].question_option.second);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option5_3" name="choose5" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[4].question_option.third);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option5_4" name="choose5" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[4].question_option.fourth);</script></label></div>
			<div style="float: left; width: 20%;"><label style="font-size: 30px"><input id="choose_option5_5" name="choose5" data-role="none" type="radio"/><script>choose_write(all_question.math_choose[4].question_option.fifth);</script></label></div>
		</td>
		</tr>
		</table>
		</div>	
		<div data-role="footer" style="text-align:center;">
		<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  		<a href="#math2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
 		</div>
		</div>
		<div data-role="page" id="math2">
			<h3 align="center">數一數,填入正確的答案,一格1分</h3>
			<div class="sub_border">
			<table border="1" align="center" class="sub_table">
			<tr class="sub_oddtr">
				<td><script>add_sub_question_pictures(all_question.math_add_sub[0].question_quantity_info.front,all_question.math_add_sub[0].question_picture_info.front,all_question.math_add_sub[0].question_quantity_info.behind,all_question.math_add_sub[0].question_picture_info.behind);</script></td>
				<td valign="middle"><script>add_sub_pictures(all_question.math_add_sub[0].question_picture_info.front);</script> 和 <script>add_sub_pictures(all_question.math_add_sub[0].question_picture_info.behind);add_sub_word(all_question.math_add_sub[0].question_sign)</script>
					<input id="add_sub_option1_1" name="add_sub_option1_1" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">個</td>
				<td><input id="add_sub_option1_2" name="add_sub_option1_2" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					<input id="add_sub_option1_3" name="add_sub_option1_3" align="center"  type="text"  data-role="none" style="width: 15px; height: 15px; font-size: 20px;">
					<input id="add_sub_option1_4" name="add_sub_option1_4" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					=
					<input id="add_sub_option1_5" name="add_sub_option1_5" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
				</td>
			</tr>
			<tr class="sub_eventr">
				<td><script>add_sub_question_pictures(all_question.math_add_sub[1].question_quantity_info.front,all_question.math_add_sub[1].question_picture_info.front,all_question.math_add_sub[1].question_quantity_info.behind,all_question.math_add_sub[1].question_picture_info.behind);</script></td>
				<td valign="middle"><script>add_sub_pictures(all_question.math_add_sub[1].question_picture_info.front);</script> 和 <script>add_sub_pictures(all_question.math_add_sub[1].question_picture_info.behind);add_sub_word(all_question.math_add_sub[1].question_sign)</script>
					<input id="add_sub_option2_1" name="add_sub_option2_1" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">個</td>
				<td><input id="add_sub_option2_2" name="add_sub_option2_2" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					<input id="add_sub_option2_3" name="add_sub_option2_3" align="center"  type="text"  data-role="none" style="width: 15px; height: 15px; font-size: 20px;">
					<input id="add_sub_option2_4" name="add_sub_option2_4" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					=
					<input id="add_sub_option2_5" name="add_sub_option2_5" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
				</td>
			</tr>
			<tr class="sub_oddtr">
				<td><script>add_sub_question_pictures(all_question.math_add_sub[2].question_quantity_info.front,all_question.math_add_sub[2].question_picture_info.front,all_question.math_add_sub[2].question_quantity_info.behind,all_question.math_add_sub[2].question_picture_info.behind);</script></td>
				<td valign="middle"><script>add_sub_pictures(all_question.math_add_sub[2].question_picture_info.front);</script> 和 <script>add_sub_pictures(all_question.math_add_sub[2].question_picture_info.behind);add_sub_word(all_question.math_add_sub[2].question_sign)</script>
					<input id="add_sub_option3_1" name="add_sub_option3_1" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">個</td>
				<td><input id="add_sub_option3_2" name="add_sub_option3_2" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					<input id="add_sub_option3_3" name="add_sub_option3_3" align="center"  type="text"  data-role="none" style="width: 15px; height: 15px; font-size: 20px;">
					<input id="add_sub_option3_4" name="add_sub_option3_4" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					=
					<input id="add_sub_option3_5" name="add_sub_option3_5" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
				</td>
			</tr>
			<tr class="sub_eventr">
				<td><script>add_sub_question_pictures(all_question.math_add_sub[3].question_quantity_info.front,all_question.math_add_sub[3].question_picture_info.front,all_question.math_add_sub[3].question_quantity_info.behind,all_question.math_add_sub[3].question_picture_info.behind);</script></td>
				<td valign="middle"><script>add_sub_pictures(all_question.math_add_sub[3].question_picture_info.front);</script> 和 <script>add_sub_pictures(all_question.math_add_sub[3].question_picture_info.behind);add_sub_word(all_question.math_add_sub[3].question_sign)</script>
					<input id="add_sub_option4_1" name="add_sub_option4_1" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size:25px;">個</td>
				<td><input id="add_sub_option4_2" name="add_sub_option4_2" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					<input id="add_sub_option4_3" name="add_sub_option4_3" align="center"  type="text"  data-role="none" style="width: 15px; height: 15px; font-size: 20px;">
					<input id="add_sub_option4_4" name="add_sub_option4_4" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					=
					<input id="add_sub_option4_5" name="add_sub_option4_5" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
				</td>
			</tr>
			<tr class="sub_oddtr">
				<td><script>add_sub_question_pictures(all_question.math_add_sub[4].question_quantity_info.front,all_question.math_add_sub[4].question_picture_info.front,all_question.math_add_sub[4].question_quantity_info.behind,all_question.math_add_sub[4].question_picture_info.behind);</script></td>
				<td valign="middle"><script>add_sub_pictures(all_question.math_add_sub[4].question_picture_info.front);</script> 和 <script>add_sub_pictures(all_question.math_add_sub[4].question_picture_info.behind);add_sub_word(all_question.math_add_sub[4].question_sign)</script>
					<input id="add_sub_option5_1" name="add_sub_option5_1" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">個</td>
				<td><input id="add_sub_option5_2" name="add_sub_option5_2" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					<input id="add_sub_option5_3" name="add_sub_option5_3" align="center"  type="text"  data-role="none" style="width: 15px; height: 15px; font-size: 20px;">
					<input id="add_sub_option5_4" name="add_sub_option5_4" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
					=
					<input id="add_sub_option5_5" name="add_sub_option5_5" align="center"  type="text"  data-role="none" style="width: 50px; height: 50px; font-size: 25px;">
				</td>
			</tr>			
		</table>
		</div>
		<div data-role="footer" style="text-align:center;">
			<a href="#math1" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  			<a href="#math3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
 		 </div>
		</div>
		<div data-role="page" id="math3">
			<h3 align="center">請選出最小的數字</h3>
			<div class="big_border">
	<table border="1" align="center" class="big_table">
		<tr>
			<td class="big_oddtd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small1_1" <?php echo "value='$math_big_small[2]'"; ?>><script>big_small_write(all_question.math_big_small[0].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small1_2" <?php echo "value='$math_big_small[3]'"; ?>><script>big_small_write(all_question.math_big_small[0].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small1" id="big_small1_3" <?php echo "value='$math_big_small[4]'"; ?>><script>big_small_write(all_question.math_big_small[0].question_option.third)</script></label></div>
			</td>
			<td class="big_eventd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_smal2_1" <?php echo "value='$math_big_small[5]'"; ?>><script>big_small_write(all_question.math_big_small[1].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_smal2_2" <?php echo "value='$math_big_small[6]'"; ?>><script>big_small_write(all_question.math_big_small[1].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small2" id="big_smal2_3" <?php echo "value='$math_big_small[7]'"; ?>><script>big_small_write(all_question.math_big_small[1].question_option.third)</script></label></div>
			</td>
		</tr>
		<tr>
			<td class="big_eventd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small3" id="big_smal3_1" <?php echo "value='$math_big_small[8]'"; ?>><script>big_small_write(all_question.math_big_small[2].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small3" id="big_smal3_2" <?php echo "value='$math_big_small[9]'"; ?>><script>big_small_write(all_question.math_big_small[2].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small3" id="big_smal3_3" <?php echo "value='$math_big_small[10]'"; ?>><script>big_small_write(all_question.math_big_small[2].question_option.third)</script></label></div>
			</td>
			<td class="big_oddtd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small4" id="big_smal4_1" <?php echo "value='$math_big_small[11]'"; ?>><script>big_small_write(all_question.math_big_small[3].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small4" id="big_smal4_2" <?php echo "value='$math_big_small[12]'"; ?>><script>big_small_write(all_question.math_big_small[3].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small4" id="big_smal4_3" <?php echo "value='$math_big_small[13]'"; ?>><script>big_small_write(all_question.math_big_small[3].question_option.third)</script></label></div>
			</td>
		</tr>
		<tr>
			<td class="big_oddtd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small5" id="big_small5_1" <?php echo "value='$math_big_small[14]'"; ?>><script>big_small_write(all_question.math_big_small[4].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small5" id="big_small5_2" <?php echo "value='$math_big_small[15]'"; ?>><script>big_small_write(all_question.math_big_small[4].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small5" id="big_small5_3" <?php echo "value='$math_big_small[16]'"; ?>><script>big_small_write(all_question.math_big_small[4].question_option.third)</script></label></div>
			</td>
			<td class="big_eventd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small6" id="big_small6_1" <?php echo "value='$math_big_small[17]'"; ?>><script>big_small_write(all_question.math_big_small[5].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small6" id="big_small6_2" <?php echo "value='$math_big_small[18]'"; ?>><script>big_small_write(all_question.math_big_small[5].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small6" id="big_small6_3" <?php echo "value='$math_big_small[19]'"; ?>><script>big_small_write(all_question.math_big_small[5].question_option.third)</script></label></div>
			</td>
		</tr>
		<tr>
			<td class="big_eventd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small7" id="big_small7_1" <?php echo "value='$math_big_small[20]'"; ?>><script>big_small_write(all_question.math_big_small[6].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small7" id="big_small7_2" <?php echo "value='$math_big_small[21]'"; ?>><script>big_small_write(all_question.math_big_small[6].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small7" id="big_small7_3" <?php echo "value='$math_big_small[22]'"; ?>><script>big_small_write(all_question.math_big_small[6].question_option.third)</script></label></div>
			</td>
			<td class="big_oddtd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small8" id="big_small8_1" <?php echo "value='$math_big_small[23]'"; ?>><script>big_small_write(all_question.math_big_small[7].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small8" id="big_small8_2" <?php echo "value='$math_big_small[24]'"; ?>><script>big_small_write(all_question.math_big_small[7].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small8" id="big_small8_3" <?php echo "value='$math_big_small[25]'"; ?>><script>big_small_write(all_question.math_big_small[7].question_option.third)</script></label></div>
			</td>
		</tr>
		<tr>
			<td class="big_oddtd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small9" id="big_small9_1" <?php echo "value='$math_big_small[26]'"; ?>><script>big_small_write(all_question.math_big_small[8].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small9" id="big_small9_2" <?php echo "value='$math_big_small[27]'"; ?>><script>big_small_write(all_question.math_big_small[8].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small9" id="big_small9_3" <?php echo "value='$math_big_small[28]'"; ?>><script>big_small_write(all_question.math_big_small[8].question_option.third)</script></label></div>
			</td>
			<td class="big_eventd">
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small10" id="big_small10_1" <?php echo "value='$math_big_small[29]'"; ?>><script>big_small_write(all_question.math_big_small[9].question_option.first)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small10" id="big_small10_2" <?php echo "value='$math_big_small[30]'"; ?>><script>big_small_write(all_question.math_big_small[9].question_option.second)</script></label></div>
				<div style="float: left;"><label style="font-size: 50px;"><input type="radio" data-role="none" name="big_small10" id="big_small10_3" <?php echo "value='$math_big_small[31]'"; ?>><script>big_small_write(all_question.math_big_small[9].question_option.third)</script></label></div>
			</td>
		</tr>
	</table>
	</div>
		<div data-role="footer" style="text-align:center;">
			<a href="#math2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  			<a href="#math4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
 		 </div>
		</div>
		<div data-role="page" id="math4">
			<h3 align="center">算一算,空格裡的數字是多少,一格1分</h3>
			<div class="multistage_border">
			<table border="1" style="margin: auto;" class="multistage_table">
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
  		</div>
  		<div data-role="footer" style="text-align:center;">
			<a href="#math3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  			<a href="#math5" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
 		 </div>
		</div>
		<div data-role="page" id="math5">
			<h3 align="center">請你加加看有多少?</h3>
		<div class="add_border">
		<table border="1" align="center" class="add_table_odd" rules="rows">
			<tr>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[0].question_quantity.first,all_question.math_triple_add[0].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[0].question_quantity.second,all_question.math_triple_add[0].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[0].question_quantity.third,all_question.math_triple_add[0].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_space"></td>
			</tr>
			<tr>
				<td style="text-align: center;"><input type="text" name="triple_add1_1" data-role="none"></td>
				<td style="text-align: center;">+</td>
				<td style="text-align: center;"><input type="text" name="triple_add1_2" data-role="none"></td>
				<td style="text-align: center;">+</td>
				<td style="text-align: center;"><input type="text" name="triple_add1_3" data-role="none"></td>
				<td style="text-align: center;">=</td>
				<td style="text-align: center;"><input type="text" name="triple_add1_4" data-role="none"></td>
			</tr>
		</table>
		<br>
		<table border="1" align="center" class="add_table_even" rules="rows">
			<tr>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[1].question_quantity.first,all_question.math_triple_add[1].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[1].question_quantity.second,all_question.math_triple_add[1].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[1].question_quantity.third,all_question.math_triple_add[1].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_space"></td>
			</tr>
			<tr>
				<td style="text-align: center;"><input type="text" name="triple_add2_1" data-role="none"></td>
				<td style="text-align: center;">+</td>
				<td style="text-align: center;"><input type="text" name="triple_add2_2" data-role="none"></td>
				<td style="text-align: center;">+</td>
				<td style="text-align: center;"><input type="text" name="triple_add2_3" data-role="none"></td>
				<td style="text-align: center;">=</td>
				<td style="text-align: center;"><input type="text" name="triple_add2_4" data-role="none"></td>
			</tr>
		</table>
		<br>
		<table border="1" align="center" class="add_table_odd" rules="rows">
			<tr>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[2].question_quantity.first,all_question.math_triple_add[2].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[2].question_quantity.second,all_question.math_triple_add[2].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[2].question_quantity.third,all_question.math_triple_add[2].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_space"></td>
			</tr>
			<tr>
				<td style="text-align: center;"><input type="text" name="triple_add3_1" data-role="none"></td>
				<td style="text-align: center;">+</td>
				<td style="text-align: center;"><input type="text" name="triple_add3_2" data-role="none"></td>
				<td style="text-align: center;">+</td>
				<td style="text-align: center;"><input type="text" name="triple_add3_3" data-role="none"></td>
				<td style="text-align: center;">=</td>
				<td style="text-align: center;"><input type="text" name="triple_add3_4" data-role="none"></td>
			</tr>
		</table>
		<br>
		<table border="1" align="center" class="add_table_even" rules="rows">
			<tr>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[3].question_quantity.first,all_question.math_triple_add[3].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[3].question_quantity.second,all_question.math_triple_add[3].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[3].question_quantity.third,all_question.math_triple_add[3].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_space"></td>
			</tr>
			<tr>
				<td style="text-align: center;"><input type="text" name="triple_add4_1" data-role="none"></td>
				<td style="text-align: center;">+</td>
				<td style="text-align: center;"><input type="text" name="triple_add4_2" data-role="none"></td>
				<td style="text-align: center;">+</td>
				<td style="text-align: center;"><input type="text" name="triple_add4_3" data-role="none"></td>
				<td style="text-align: center;">=</td>
				<td style="text-align: center;"><input type="text" name="triple_add4_4" data-role="none"></td>
			</tr>
		</table>
		<br>
		<table border="1" align="center" class="add_table_odd" rules="rows">
			<tr>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[4].question_quantity.first,all_question.math_triple_add[4].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[4].question_quantity.second,all_question.math_triple_add[4].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_picture" style="text-align: center;"><script type="text/javascript">triple_add_pictures(all_question.math_triple_add[4].question_quantity.third,all_question.math_triple_add[4].question_picture);</script></td>
				<td class="add_table_space"></td>
				<td class="add_table_space"></td>
			</tr>
			<tr>
				<td style="text-align: center;"><input type="text" name="triple_add5_1" data-role="none"></td>
				<td style="text-align: center;">+</td>
				<td style="text-align: center;"><input type="text" name="triple_add5_2" data-role="none"></td>
				<td style="text-align: center;">+</td>
				<td style="text-align: center;"><input type="text" name="triple_add5_3" data-role="none"></td>
				<td style="text-align: center;">=</td>
				<td style="text-align: center;"><input type="text" name="triple_add5_4" data-role="none"></td>
			</tr>
		</table>
		</div>
		<div data-role="footer" style="text-align:center;">
			<a href="#math4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
 		 </div>
		</div>
	</form>
</body>
</html>