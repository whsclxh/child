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
$contimes = $_SESSION['cognition_times'];
$sq2 = "SELECT * FROM cognition_score where username = '$id' and cardinal='$contimes'";
$result2 = mysqli_query($link,$sq2);
$a_row = @mysqli_fetch_row($result2);
if($a_row[1]==$contimes){
    echo "<script>alert('此次作答已經提交過囉!!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=cognition_finish.php>';
}
?>
<?php
require "cog_choose_correct_orientation_function.php";
require "cog_choose_longer_function.php";
require "cog_choose_shape_function.php";
require "cog_sequence_function.php";
require "cog_count_choose_function.php";
?>
<script type="text/javascript">
    var all_question = {
    	"cog_count_choose":[
    	{
    		"question_number":"1",
    		"picture_info":{
    			"up": <?php echo "$cog_count_choose_pic[0]"; ?>,
    			"down": <?php echo "$cog_count_choose_pic[1]"; ?>
    		},    	
        	"picture_quantity":{
        		"up": <?php echo "$cog_count_choose_num[0]"; ?>,
        		"down": <?php echo "$cog_count_choose_num[1]"; ?>
        	},
        	"correct_anwser":{
        		"up": <?php echo "$cog_count_choose_num[0]"; ?>,
        		"down": <?php echo "$cog_count_choose_num[1]"; ?>
        	}
    	},
    	{
    		"question_number":"2",
    		"picture_info":{
    			"up": <?php echo "$cog_count_choose_pic[2]"; ?>,
    			"down": <?php echo "$cog_count_choose_pic[3]"; ?>
    		},    	
        	"picture_quantity":{
        		"up": <?php echo "$cog_count_choose_num[2]"; ?>,
        		"down": <?php echo "$cog_count_choose_num[3]"; ?>
        	},
        	"correct_anwser":{
        		"up": <?php echo "$cog_count_choose_num[2]"; ?>,
        		"down": <?php echo "$cog_count_choose_num[3]"; ?>
        	}
    	},
    	{
    		"question_number":"3",
    		"picture_info":{
    			"up": <?php echo "$cog_count_choose_pic[4]"; ?>,
    			"down": <?php echo "$cog_count_choose_pic[5]"; ?>
    		},   	
        	"picture_quantity":{
        		"up": <?php echo "$cog_count_choose_num[4]"; ?>,
        		"down": <?php echo "$cog_count_choose_num[5]"; ?>
        	},
        	"correct_anwser":{
        		"up": <?php echo "$cog_count_choose_num[4]"; ?>,
        		"down": <?php echo "$cog_count_choose_num[5]"; ?>
        	}
    	},
    	{
    		"question_number":"4",
    		"picture_info":{
    			"up": <?php echo "$cog_count_choose_pic[6]"; ?>,
    			"down": <?php echo "$cog_count_choose_pic[7]"; ?>
    		},    	
        	"picture_quantity":{
        		"up": <?php echo "$cog_count_choose_num[6]"; ?>,
        		"down": <?php echo "$cog_count_choose_num[7]"; ?>
        	},
        	"correct_anwser":{
        		"up": <?php echo "$cog_count_choose_num[6]"; ?>,
        		"down": <?php echo "$cog_count_choose_num[7]"; ?>
        	}
    	},
    	{
    		"question_number":"5",
    		"picture_info":{
    			"up": <?php echo "$cog_count_choose_pic[8]"; ?>,
    			"down": <?php echo "$cog_count_choose_pic[9]"; ?>
    		},    	
        	"picture_quantity":{
        		"up": <?php echo "$cog_count_choose_num[8]"; ?>,
        		"down": <?php echo "$cog_count_choose_num[9]"; ?>
        	},
        	"correct_anwser":{
        		"up": <?php echo "$cog_count_choose_num[8]"; ?>,
        		"down": <?php echo "$cog_count_choose_num[9]"; ?>
        	}
    	}
    	],
    	"cog_choose_longer":[
    	{
    		"question_number":"1",
    		"picture_info": <?php echo "$cog_choose_longer_pic[0]"; ?>,
    		"picture_length":{
    			"up": <?php echo "$cog_choose_longer_len[0]"; ?>,
    			"down": <?php echo "$cog_choose_longer_len[1]"; ?>
    		}
    	},
    	{
    		"question_number":"2",
    		"picture_info": <?php echo "$cog_choose_longer_pic[1]"; ?>,
    		"picture_length":{
    			"up": <?php echo "$cog_choose_longer_len[2]"; ?>,
    			"down": <?php echo "$cog_choose_longer_len[3]"; ?>
    		}
    	},
    	{
    		"question_number":"3",
    		"picture_info": <?php echo "$cog_choose_longer_pic[2]"; ?>,
    		"picture_length":{
    			"up": <?php echo "$cog_choose_longer_len[4]"; ?>,
    			"down": <?php echo "$cog_choose_longer_len[5]"; ?>
    		}
    	},
    	{
    		"question_number":"4",
    		"picture_info": <?php echo "$cog_choose_longer_pic[3]"; ?>,
    		"picture_length":{
    			"up": <?php echo "$cog_choose_longer_len[6]"; ?>,
    			"down": <?php echo "$cog_choose_longer_len[7]"; ?>
    		}
    	},
    	{
    		"question_number":"5",
    		"picture_info": <?php echo "$cog_choose_longer_pic[4]"; ?>,
    		"picture_length":{
    			"up": <?php echo "$cog_choose_longer_len[8]"; ?>,
    			"down": <?php echo "$cog_choose_longer_len[9]"; ?>
    		}
    	}
    	],
    	"cog_choose_shape":[
    	{
    		"question_number":"1",
    		"question_shape": <?php echo "$cog_choose_shape[0]"; ?>,
    		"option_picture":{
    			"first":<?php echo "$cog_choose_shape_option1[0]"; ?>,
    			"second":<?php echo "$cog_choose_shape_option1[1]"; ?>,
    			"third":<?php echo "$cog_choose_shape_option1[2]"; ?>
    		}
    	},
    	{
    		"question_number":"2",
    		"question_shape": <?php echo "$cog_choose_shape[1]"; ?>,
    		"option_picture":{
    			"first":<?php echo "$cog_choose_shape_option2[0]"; ?>,
    			"second":<?php echo "$cog_choose_shape_option2[1]"; ?>,
    			"third":<?php echo "$cog_choose_shape_option2[2]"; ?>
    		}
    	},
    	{
    		"question_number":"3",
    		"question_shape": <?php echo "$cog_choose_shape[2]"; ?>,
    		"option_picture":{
    			"first":<?php echo "$cog_choose_shape_option3[0]"; ?>,
    			"second":<?php echo "$cog_choose_shape_option3[1]"; ?>,
    			"third":<?php echo "$cog_choose_shape_option3[2]"; ?>
    		}
    	},
    	{
    		"question_number":"4",
    		"question_shape": <?php echo "$cog_choose_shape[3]"; ?>,
    		"option_picture":{
    			"first":<?php echo "$cog_choose_shape_option4[0]"; ?>,
    			"second":<?php echo "$cog_choose_shape_option4[1]"; ?>,
    			"third":<?php echo "$cog_choose_shape_option4[2]"; ?>
    		}
    	}
    	],
    	"cog_choose_correct_orientation":[
    		{
    		"question_picture":{
    			"row_1_column_1":<?php echo "$cog_choose_correct_orientation_pic[0]"; ?>,
    			"row_1_column_2":<?php echo "$cog_choose_correct_orientation_pic[1]"; ?>,
    			"row_1_column_3":<?php echo "$cog_choose_correct_orientation_pic[2]"; ?>,
    			"row_2_column_1":<?php echo "$cog_choose_correct_orientation_pic[3]"; ?>,
    			"row_2_column_2":<?php echo "$cog_choose_correct_orientation_pic[4]"; ?>,
    			"row_2_column_3":<?php echo "$cog_choose_correct_orientation_pic[5]"; ?>,
    			"row_3_column_1":<?php echo "$cog_choose_correct_orientation_pic[6]"; ?>,
    			"row_3_column_2":<?php echo "$cog_choose_correct_orientation_pic[7]"; ?>,
    			"row_3_column_3":<?php echo "$cog_choose_correct_orientation_pic[8]"; ?>
    			}
    		},
    		{
                "pictures_cardinal":[
                <?php echo "$cog_choose_correct_orientation_pic[0]"; ?>,
                <?php echo "$cog_choose_correct_orientation_pic[1]"; ?>,
                <?php echo "$cog_choose_correct_orientation_pic[2]"; ?>,
                <?php echo "$cog_choose_correct_orientation_pic[3]"; ?>,
                <?php echo "$cog_choose_correct_orientation_pic[4]"; ?>,
                <?php echo "$cog_choose_correct_orientation_pic[5]"; ?>,
                <?php echo "$cog_choose_correct_orientation_pic[6]"; ?>,
                <?php echo "$cog_choose_correct_orientation_pic[7]"; ?>,
                <?php echo "$cog_choose_correct_orientation_pic[8]"; ?>]
            },
    		{
    			"question_number":"1",
    			"subject_pic":<?php echo "$cog_choose_correct_orientation_question_picture[0]"; ?>,
    			"subject_orientation":<?php echo "$cog_choose_correct_orientation_direction_array[0]"; ?>,
    			"option":{
    				"first":<?php echo "$cog_choose_correct_orientation_question1_option[0]"; ?>,
    				"second":<?php echo "$cog_choose_correct_orientation_question1_option[1]"; ?>,
    				"third":<?php echo "$cog_choose_correct_orientation_question1_option[2]"; ?>,
    				"fourth":<?php echo "$cog_choose_correct_orientation_question1_option[3]"; ?>
    			},
    			"correct_anwser":<?php echo "$cog_choose_correct_orientation_correct_anwser[0]"; ?>
    		},
    		{
    			"question_number":"2",
    			"subject_pic":<?php echo "$cog_choose_correct_orientation_question_picture[1]"; ?>,
    			"subject_orientation":<?php echo "$cog_choose_correct_orientation_direction_array[1]"; ?>,
    			"option":{
    				"first":<?php echo "$cog_choose_correct_orientation_question2_option[0]"; ?>,
    				"second":<?php echo "$cog_choose_correct_orientation_question2_option[1]"; ?>,
    				"third":<?php echo "$cog_choose_correct_orientation_question2_option[2]"; ?>,
    				"fourth":<?php echo "$cog_choose_correct_orientation_question2_option[3]"; ?>
    			},
    			"correct_anwser":<?php echo "$cog_choose_correct_orientation_correct_anwser[1]"; ?>
    		},
    		{
    			"question_number":"3",
    			"subject_pic":<?php echo "$cog_choose_correct_orientation_question_picture[2]"; ?>,
    			"subject_orientation":<?php echo "$cog_choose_correct_orientation_direction_array[2]"; ?>,
    			"option":{
    				"first":<?php echo "$cog_choose_correct_orientation_question3_option[0]"; ?>,
    				"second":<?php echo "$cog_choose_correct_orientation_question3_option[1]"; ?>,
    				"third":<?php echo "$cog_choose_correct_orientation_question3_option[2]"; ?>,
    				"fourth":<?php echo "$cog_choose_correct_orientation_question3_option[3]"; ?>
    			},
    			"correct_anwser":<?php echo "$cog_choose_correct_orientation_correct_anwser[2]"; ?>
    		},
    		{
    			"question_number":"4",
    			"subject_pic":<?php echo "$cog_choose_correct_orientation_question_picture[3]"; ?>,
    			"subject_orientation":<?php echo "$cog_choose_correct_orientation_direction_array[3]"; ?>,
    			"option":{
    				"first":<?php echo "$cog_choose_correct_orientation_question4_option[0]"; ?>,
    				"second":<?php echo "$cog_choose_correct_orientation_question4_option[1]"; ?>,
    				"third":<?php echo "$cog_choose_correct_orientation_question4_option[2]"; ?>,
    				"fourth":<?php echo "$cog_choose_correct_orientation_question4_option[3]"; ?>
    			},
    			"correct_anwser":<?php echo "$cog_choose_correct_orientation_correct_anwser[3]"; ?>
    		}
    		],
    		"cog_sequence":[
    			{
    			"question_picture":{
    				"first":<?php echo "$cog_sequence_pic[0]"; ?>,
    				"second":<?php echo "$cog_sequence_pic[1]"; ?>,
    				"third":<?php echo "$cog_sequence_pic[2]"; ?>,
    				"fourth":<?php echo "$cog_sequence_pic[3]"; ?>,
    				"fifth":<?php echo "$cog_sequence_pic[4]"; ?>,
    				"sixth":<?php echo "$cog_sequence_pic[5]"; ?>,
    				"seventh":<?php echo "$cog_sequence_pic[6]"; ?>,
    				"eighth":<?php echo "$cog_sequence_pic[7]"; ?>
    				}
    			},
    			{
                    "pictures_cardinal":[
                    <?php echo "$cog_sequence_pic[0]"; ?>,
                    <?php echo "$cog_sequence_pic[1]"; ?>,
                    <?php echo "$cog_sequence_pic[2]"; ?>,
                    <?php echo "$cog_sequence_pic[3]"; ?>,
                    <?php echo "$cog_sequence_pic[4]"; ?>,
                    <?php echo "$cog_sequence_pic[5]"; ?>,
                    <?php echo "$cog_sequence_pic[6]"; ?>,
                    <?php echo "$cog_sequence_pic[7]"; ?>,
                    ]
                },
    			{
    				"question_number":"1",
    				"subject_pic":<?php echo "$cog_sequence_subject_pic[0]"; ?>,
    				"subject_direction":<?php echo "$cog_sequence_subject_direction[0]"; ?>,
    				"correct_anwser":<?php echo "$cog_sequence_subject_correct_anwser1"; ?>
    			},
    			{
    				"question_number":"2",
    				"subject_pic":<?php echo "$cog_sequence_subject_pic[1]"; ?>,
    				"subject_direction":<?php echo "$cog_sequence_subject_direction[1]"; ?>,
    				"option":{
    					"first":<?php echo "$cog_sequence_choose_option[0]"; ?>,
    					"second":<?php echo "$cog_sequence_choose_option[1]"; ?>,
    					"third":<?php echo "$cog_sequence_choose_option[2]"; ?>
    				},
    				"correct_anwser":<?php echo "$cog_sequence_subject_correct_anwser2"; ?>
    			},
    			{
    				"question_number":"3",
    				"subject_pic":<?php echo "$cog_sequence_subject_pic[2]"; ?>,
    				"subject_direction":<?php echo "$cog_sequence_subject_direction[2]"; ?>,
    				"subject_opposite_direction":<?php echo "$cog_sequence_opposite_direction"; ?>,
    				"correct_anwser":{
    					"front":<?php echo "$cog_sequence_subject_correct_anwser3"; ?>,
    					"last":<?php echo "$cog_sequence_subject_correct_anwser4"; ?>
    				}
    			}
    		],
	}
</script>
<style type="text/css">
.ui-page{
	background:  url(img/gray.png) no-repeat !important;
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
<link rel=stylesheet type="text/css" href="css/cognition.css">
<!DOCTYPE html>
<html lang="en">
<body>
<script src='js/snowflakes.min.js'></script>
<script src="js/index.js"></script>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="cog_count_choose.js"></script>
<script type="text/javascript" src="cog_choose_correct_orientation.js"></script>
<script type="text/javascript" src="cog_choose_longer.js"></script>
<script type="text/javascript" src="cog_sequence.js"></script>
<script type="text/javascript" src="cog_choose_shape.js"></script>
	<form method="post" action="cognition_before_finish.php" data-ajax="false" name="form1">
		<div data-role="page" id="cognition1" align="center">
  		<h3 align="center" style="color: gold">數一數,並選出比較多的那種,一格1分</h3>
        <div class="count_sexyborder">
		<table border="1" width="70%" align="center" class="count_fancytable">
			<tr class="count_fancyheader">
				<th style="text-align: center;">圖</th>
				<th style="text-align: center;">個數</th>
				<th style="text-align: center;">選比較多</th>
			</tr>
			<tr class="count_oddtr">
				<td width="85%"><script>cog_count_choose_pictures(all_question.cog_count_choose[0].picture_quantity.up,all_question.cog_count_choose[0].picture_info.up);</script></td>
				<td width="5%" style="text-align: center;"><input type="text" id="q1q11" name="q1question11" ></td>
				<td width="10%" style="text-align: center;"><input id="q1qq1" style="vertical-align:middle;" name="q1question1" type="radio" value="1"/></td>
			</tr>
			<tr class="count_eventr">
				<td width="85%"><script>cog_count_choose_pictures(all_question.cog_count_choose[0].picture_quantity.down,all_question.cog_count_choose[0].picture_info.down);</script></td>
				<td width="5%" style="text-align: center;"><input type="text" id="q1q12" name="q1question12"></td>
				<td width="10%" style="text-align: center; "><input id="q1qq2" style="vertical-align:middle;" name="q1question1" type="radio" value="2"/></td>
			</tr>
		</table>
        </div>
        <br>
        <div class="count_sexyborder">
		<table border="1" width="60%" align="center" class="count_fancytable">
			<tr class="count_oddtr">
				<td width="85%"><script>cog_count_choose_pictures(all_question.cog_count_choose[1].picture_quantity.up,all_question.cog_count_choose[1].picture_info.up);</script></td>
				<td width="5%" style="text-align: center;"><input type="text" id="q1q21" name="q1question21" ></td>
				<td width="15%" style="text-align: center;"><input id="q1qq3" name="q1question2" value="1" type="radio"/></td>
			</tr>
			<tr class="count_eventr">
				<td width="85%"><script>cog_count_choose_pictures(all_question.cog_count_choose[1].picture_quantity.down,all_question.cog_count_choose[1].picture_info.down);</script></td>
				<td width="5%" style="text-align: center;"><input type="text" id="q1q22" name="q1question22" ></td>
				<td width="15%" style="text-align: center;"><input id="q1qq4" name="q1question2" type="radio" value="2" /></td>
			</tr>
		</table>
        </div>
        <br>
        <div class="count_sexyborder">
		<table border="1" width="60%" align="center" class="count_fancytable">
			<tr class="count_oddtr">
				<td width="85%"><script>cog_count_choose_pictures(all_question.cog_count_choose[2].picture_quantity.up,all_question.cog_count_choose[2].picture_info.up);</script></td>
				<td width="5%" style="text-align: center;"><input type="text" id="q1q31" name="q1question31" ></td>
				<td width="15%" style="text-align: center;"><input id="q1qq5" name="q1question3" type="radio" value="1"/></td>
			</tr>
			<tr class="count_eventr">
				<td width="85%"><script>cog_count_choose_pictures(all_question.cog_count_choose[2].picture_quantity.down,all_question.cog_count_choose[2].picture_info.down);</script></td>
				<td width="5%" style="text-align: center;"><input type="text" id="q1q32" name="q1question32" ></td>
				<td width="15%" style="text-align: center;"><input id="q1qq6" name="q1question3" type="radio" value="2"/></td>
			</tr>
		</table>
        </div>
        <br>
        <div class="count_sexyborder">
		<table border="1" width="60%" align="center" class="count_fancytable">
			<tr class="count_oddtr">
				<td width="85%"><script>cog_count_choose_pictures(all_question.cog_count_choose[3].picture_quantity.up,all_question.cog_count_choose[3].picture_info.up);</script></td>
				<td width="5%" style="text-align: center;"><input type="text" id="q1q41" name="q1question41" ></td>
				<td width="15%" style="text-align: center;"><input id="q1qq7" name="q1question4" type="radio" value="1"/></td>
			</tr>
			<tr class="count_eventr">
				<td width="85%"><script>cog_count_choose_pictures(all_question.cog_count_choose[3].picture_quantity.down,all_question.cog_count_choose[3].picture_info.down);</script></td>
				<td width="5%" style="text-align: center;"><input type="text" id="q1q42" name="q1question42" ></td>
				<td width="15%" style="text-align: center;"><input id="q1qq8" name="q1question4" type="radio" value="2"/></td>
			</tr>
		</table>
        </div>
        <br>
        <div class="count_sexyborder">
		<table border="1" width="60%" align="center" class="count_fancytable">
			<tr class="count_oddtr">
				<td width="85%"><script>cog_count_choose_pictures(all_question.cog_count_choose[4].picture_quantity.up,all_question.cog_count_choose[4].picture_info.up);</script></td>
				<td width="5%" style="text-align: center;"><input type="text" id="q1q51" name="q1question51" ></td>
				<td width="15%" style="text-align: center;"><input id="q1qq9" name="q1question5" type="radio" value="1"/></td>
			</tr>
			<tr class="count_eventr">
				<td width="85%"><script>cog_count_choose_pictures(all_question.cog_count_choose[4].picture_quantity.down,all_question.cog_count_choose[4].picture_info.down);</script></td>
				<td width="5%" style="text-align: center;"><input type="text" id="q1q52" name="q1question52" ></td>
				<td width="15%" style="text-align: center;"><input id="q1qq10" name="q1question5" type="radio" value="2"/></td>
			</tr>
		</table>
        </div>
        <br>
		<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  		<a href="#cognition2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 5%;" data-transition="slide">下一題</a>
        <br><br>
    </div>
		<div data-role="page" id="cognition2" align="center">
  		<h3 align="center" style="color: gold">請幫忙找一找,選出正確的答案,一題5分</h3>
            <div class="orientation_sexyborder">
			<table border="1" style="margin: auto;" class="orientation_fancytable">
					<tr>
						<td class="orientation_odd" style="text-align: center;"><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_1_column_1);</script></td>
						<td class="orientation_even" style="text-align: center;"><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_1_column_2);</script></td>
						<td class="orientation_odd" style="text-align: center;"><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_1_column_3);</script></td>
					</tr>
					<tr>
						<td class="orientation_even" style="text-align: center;"><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_2_column_1);</script></td>
						<td class="orientation_odd" style="text-align: center;"><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_2_column_2);</script></td>
						<td class="orientation_even" style="text-align: center;"><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_2_column_3);</script></td>
					</tr>
					<tr>
						<td class="orientation_odd" style="text-align: center;"><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_3_column_1);</script></td>
						<td class="orientation_even" style="text-align: center;"><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_3_column_2);</script></td>
						<td class="orientation_odd" style="text-align: center;"><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_3_column_3);</script></td>
			     	</tr>
				</table>
                </div>
                <br>
                <div class="orientation_goodborder">
				<table class="orientation_goodtable" border="1" style="margin: auto; width: 100%;">
					<tr class="orientation_oddtr">
						<th>1.在<script>cog_choose_correct_orientation_set_question_name(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].subject_pic])</script>的<script>cog_choose_correct_orientation_write_direction(all_question.cog_choose_correct_orientation[2].subject_pic,all_question.cog_choose_correct_orientation[2].subject_orientation)</script>是
						</th>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q11" name="q2question1" data-role="none" <?php echo "value=\"$question2[19]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.first]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q12" name="q2question1" data-role="none" <?php echo "value=\"$question2[20]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.second]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q13" name="q2question1" data-role="none" <?php echo "value=\"$question2[21]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.third]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q14" name="q2question1" data-role="none" <?php echo "value=\"$question2[22]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.fourth]);</script></label></div>
						</td>
					</tr>
					<tr class="orientation_eventr">
						<th>2.在<script>cog_choose_correct_orientation_set_question_name(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].subject_pic])</script>的<script>cog_choose_correct_orientation_write_direction(all_question.cog_choose_correct_orientation[3].subject_pic,all_question.cog_choose_correct_orientation[3].subject_orientation)</script>是
						</th>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q21" name="q2question2" data-role="none" <?php echo "value=\"$question2[23]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.first]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q22" name="q2question2" data-role="none" <?php echo "value=\"$question2[24]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.second]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q23" name="q2question2" data-role="none" <?php echo "value=\"$question2[25]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.third]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q24" name="q2question2" data-role="none" <?php echo "value=\"$question2[26]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.fourth]);</script></label></div>
						</td>
					</tr>
					<tr class="orientation_oddtr">
						<th>3.在<script>cog_choose_correct_orientation_set_question_name(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].subject_pic])</script>的<script>cog_choose_correct_orientation_write_direction(all_question.cog_choose_correct_orientation[4].subject_pic,all_question.cog_choose_correct_orientation[4].subject_orientation)</script>是
						</th>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q31" name="q2question3" data-role="none" <?php echo "value=\"$question2[27]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.first]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q32" name="q2question3" data-role="none" <?php echo "value=\"$question2[28]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.second]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q33" name="q2question3" data-role="none" <?php echo "value=\"$question2[29]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.third]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q34" name="q2question3" data-role="none" <?php echo "value=\"$question2[30]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.fourth]);</script></label></div>
						</td>
					</tr>
					<tr class="orientation_eventr">
						<th>4.在<script>cog_choose_correct_orientation_set_question_name(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].subject_pic])</script>的<script>cog_choose_correct_orientation_write_direction(all_question.cog_choose_correct_orientation[5].subject_pic,all_question.cog_choose_correct_orientation[5].subject_orientation)</script>是
						</th>
						<td>
							<div style="float: left;"><label><input type="radio" id="q2q41" name="q2question4" data-role="none" <?php echo "value=\"$question2[31]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.first]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q42" name="q2question4" data-role="none" <?php echo "value=\"$question2[32]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.second]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q43" name="q2question4" data-role="none" <?php echo "value=\"$question2[33]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.third]);</script></label></div>
							<div style="float: left;"><label><input type="radio" id="q2q44" name="q2question4" data-role="none" <?php echo "value=\"$question2[34]\""; ?>><script>cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.fourth]);</script></label></div>
						</td>
					</tr>
				</table>
            </div>
                <br>
				<a href="#cognition1" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
				<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  				<a href="#cognition3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
                <br><br>
			</div>
			<div data-role="page" id="cognition3" align="center">
				<h3 align="center" style="color: gold">比一比,選出比較長的那一種,一題4分</h3>
            <div class="long_headerborder">
			<table class="long_headertable" border="1" width="60%" align="center">
			<tr>
				<th style="text-align: center;">圖</th>
				<th style="text-align: center;">選比較長</th>
			</tr>
			<tr class="long_oddtr">
				<td width="90%"><script>cog_choose_longer_pictures(all_question.cog_choose_longer[0].picture_info,all_question.cog_choose_longer[0].picture_length.up);</script></td>
				<td width="5%" style="text-align: center;"><input id="q3qq1" name="q3question1" type="radio" <?php echo "value=\"$question3[7]\""; ?>></td>
			</tr>
			<tr class="long_eventr">
				<td width="90%"><script>cog_choose_longer_pictures(all_question.cog_choose_longer[0].picture_info,all_question.cog_choose_longer[2].picture_length.down);</script></td>
				<td width="5%" style="text-align: center;"><input id="q3qq2" name="q3question1" type="radio" <?php echo "value=\"$question3[8]\""; ?>></td>
			</tr>
		</table>
        </div>
		<br/>
        <div class="long_headerborder">
		<table class="long_headertable" border="1" width="60%" align="center">
			<tr class="long_oddtr">
				<td width="90%"><script>cog_choose_longer_pictures(all_question.cog_choose_longer[1].picture_info,all_question.cog_choose_longer[1].picture_length.up);</script></td>
				<td width="5%" style="text-align: center;"><input id="q3qq3" name="q3question2" type="radio" <?php echo "value=\"$question3[9]\""; ?>></td>
			</tr>
			<tr class="long_eventr">
				<td width="90%"><script>cog_choose_longer_pictures(all_question.cog_choose_longer[1].picture_info,all_question.cog_choose_longer[1].picture_length.down);</script></td>
				<td width="5%" style="text-align: center;"><input id="q3qq4" name="q3question2" type="radio" <?php echo "value=\"$question3[10]\""; ?>></td>
			</tr>
		</table>
    </div>
		<br/>
        <div class="long_headerborder">
		<table class="long_headertable" border="1" width="60%" align="center">
			<tr class="long_oddtr">
				<td width="90%"><script>cog_choose_longer_pictures(all_question.cog_choose_longer[2].picture_info,all_question.cog_choose_longer[2].picture_length.up);</script></td>
				<td width="5%" style="text-align: center;"><input id="q3qq5" name="q3question3" type="radio" <?php echo "value=\"$question3[11]\""; ?>></td>
			</tr>
			<tr class="long_eventr">
				<td width="90%"><script>cog_choose_longer_pictures(all_question.cog_choose_longer[2].picture_info,all_question.cog_choose_longer[2].picture_length.down);</script></td>
				<td width="5%" style="text-align: center;"><input id="q3qq6" name="q3question3" type="radio" <?php echo "value=\"$question3[12]\""; ?>></td>
			</tr>
		</table>
    </div>
		<br/>
        <div class="long_headerborder">
		<table class="long_headertable" border="1" width="60%" align="center">
			<tr class="long_oddtr">
				<td width="90%"><script>cog_choose_longer_pictures(all_question.cog_choose_longer[3].picture_info,all_question.cog_choose_longer[3].picture_length.up);</script></td>
				<td width="5%" style="text-align: center;"><input id="q3qq7" name="q3question4" type="radio" <?php echo "value=\"$question3[13]\""; ?>></td>
			</tr>
			<tr class="long_eventr">
				<td width="90%"><script>cog_choose_longer_pictures(all_question.cog_choose_longer[3].picture_info,all_question.cog_choose_longer[3].picture_length.down);</script></td>
				<td width="5%" style="text-align: center;"><input id="q3qq8" name="q3question4" type="radio" <?php echo "value=\"$question3[14]\""; ?>></td>
			</tr>
		</table>
    </div>
		<br/>
        <div class="long_headerborder">
		<table class="long_headertable" border="1" width="60%" align="center">
			<tr class="long_oddtr">
				<td width="90%"><script>cog_choose_longer_pictures(all_question.cog_choose_longer[4].picture_info,all_question.cog_choose_longer[4].picture_length.up);</script></td>
				<td width="5%" style="text-align: center;"><input id="q3qq9" name="q3question5" type="radio" <?php echo "value=\"$question3[15]\""; ?>></td>
			</tr>
			<tr class="long_eventr">
				<td width="90%"><script>cog_choose_longer_pictures(all_question.cog_choose_longer[4].picture_info,all_question.cog_choose_longer[4].picture_length.down);</script></td>
				<td width="5%" style="text-align: center;"><input id="q3qq10" name="q3question5" type="radio" <?php echo "value=\"$question3[16]\""; ?>></td>
			</tr>
		</table>
    </div>
    <br>
				<a href="#cognition2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
				<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  				<a href="#cognition4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
                <br><br>
	</div>
	<div data-role="page" id="cognition4" align="center">
		<h3 align="center" style="color: gold">請幫忙找一找,填入正確的答案,一題5分</h3>
		<div align="center" class="sequence_headerborder">
			<table border="0">
				<tr>
					<td>
						<script>
							cog_sequence_pictures(all_question.cog_sequence[0].question_picture.first);
							cog_sequence_pictures(all_question.cog_sequence[0].question_picture.second);
							cog_sequence_pictures(all_question.cog_sequence[0].question_picture.third);
							cog_sequence_pictures(all_question.cog_sequence[0].question_picture.fourth);
							cog_sequence_pictures(all_question.cog_sequence[0].question_picture.fifth);
							cog_sequence_pictures(all_question.cog_sequence[0].question_picture.sixth);
							cog_sequence_pictures(all_question.cog_sequence[0].question_picture.seventh);
							cog_sequence_pictures(all_question.cog_sequence[0].question_picture.eighth);
						</script>
					</td>
				</tr>
			</table>
		</div>
		<br/>
		<div align="center" class="sequence_border">
			<table border="1" class="sequence_table">
				<tr class="sequence_oddtr">
					<td colspan="2">
						<div>
						<span>(1)從<script>cog_sequence_direction(all_question.cog_sequence[2].subject_direction);</script>數起,<script>cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[2].subject_pic]);</script>排在第</span>
						<input type="number" id="a1" name="q4anwser1" data-role="none" style="height:50px;width:50px;line-height:30px;border:1px solid #999;vertical-align:middle">
						個。
						</div>
					</td>
				</tr>
				<tr class="sequence_eventr">
					<td>
						<div>
						<span style="float: left; vertical-align:middle">(2)從<script>cog_sequence_direction(all_question.cog_sequence[3].subject_direction);</script>數起,第<script>cog_sequence_write(all_question.cog_sequence[3].subject_pic)</script>個是:</span>
						</div>
					</td>
					<td>
						<div style="float: left;"><label><input data-role="none" type="radio" id="a21" name="q4anwser2" <?php echo "value=\"$question4[17]\""; ?>><script>cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[3].option.first]);</script></label></div>
						<div style="float: left;"><label><input data-role="none" type="radio" id="a22" name="q4anwser2" <?php echo "value=\"$question4[18]\""; ?>><script>cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[3].option.second]);</script></label></div>
						<div style="float: left;"><label><input data-role="none" type="radio" id="a23" name="q4anwser2" <?php echo "value=\"$question4[19]\""; ?>><script>cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[3].option.third]);</script></label></div>
					</td>
				</tr>
				<tr class="sequence_oddtr">
					<td colspan="2">
						<div>
						<span>(3)從<script>cog_sequence_direction(all_question.cog_sequence[4].subject_direction);</script>數起,<script>cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[4].subject_pic]);</script>排在第</span>
						<input type="number" id="a3" name="q4anwser3" data-role="none" style="height:50px;width:50px; line-height:30px;border:1px solid #999;vertical-align:middle"><span>個,也可說是從<script>cog_sequence_direction(all_question.cog_sequence[4].subject_opposite_direction);</script>數起第</span><input type="number" id="a4" name="q4anwser4" data-role="none" style="height:50px;width:50px; line-height:30px;border:1px solid #999;vertical-align:middle">個。
						</div>
					</td>
				</tr>
			</table>
		</div>
        <br>
				<a href="#cognition3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
				<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  				<a href="#cognition5" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
 		</div>
 		 <div data-role="page" id="cognition5" align="center">
		<h3 align="center" style="color: gold">把跟前面形狀相似的選出來,一題5分</h3>
		<div align="center" class="shape_border">
		<table border="1" class="shape_table">
			<tr class="shape_oddtr">
				<td class="shape_td"><script>cog_choose_shape_get(all_question.cog_choose_shape[0].question_shape);</script></td>
				<td class="shape_oddtd">
					<div style="float: left;"><label><input type="radio" id="q5q11" name="q5question1" data-role="none" <?php echo "value=\"$question5[6]\""; ?>><script>cog_choose_shape_insert_picture_1(all_question.cog_choose_shape[0].question_shape,1,all_question.cog_choose_shape[0].option_picture.first);</script></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q12" name="q5question1" data-role="none" <?php echo "value=\"$question5[7]\""; ?>><script>cog_choose_shape_insert_picture_1(all_question.cog_choose_shape[0].question_shape,2,all_question.cog_choose_shape[0].option_picture.second);</script></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q13" name="q5question1" data-role="none" <?php echo "value=\"$question5[8]\""; ?>><script>cog_choose_shape_insert_picture_1(all_question.cog_choose_shape[0].question_shape,3,all_question.cog_choose_shape[0].option_picture.third);</script></label></div>
				</td>
			</tr>
			<tr class="shape_eventr">
				<td class="shape_td"><script>cog_choose_shape_get(all_question.cog_choose_shape[1].question_shape);</script></td>
				<td class="shape_eventd">
					<div style="float: left;"><label><input type="radio" id="q5q21" name="q5question2" data-role="none" <?php echo "value=\"$question5[9]\""; ?>><script>cog_choose_shape_insert_picture_2(all_question.cog_choose_shape[1].question_shape,1,all_question.cog_choose_shape[1].option_picture.first);</script></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q22" name="q5question2" data-role="none" <?php echo "value=\"$question5[10]\""; ?>><script>cog_choose_shape_insert_picture_2(all_question.cog_choose_shape[1].question_shape,2,all_question.cog_choose_shape[1].option_picture.second);</script></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q23" name="q5question2" data-role="none" <?php echo "value=\"$question5[11]\""; ?>><script>cog_choose_shape_insert_picture_2(all_question.cog_choose_shape[1].question_shape,3,all_question.cog_choose_shape[1].option_picture.third);</script></label></div>
				</td>
			</tr>
			<tr class="shape_oddtr">
				<td class="shape_td"><script>cog_choose_shape_get(all_question.cog_choose_shape[2].question_shape);</script></td>
				<td class="shape_oddtd">
					<div style="float: left;"><label><input type="radio" id="q5q31" name="q5question3" data-role="none" <?php echo "value=\"$question5[12]\""; ?>><script>cog_choose_shape_insert_picture_3(all_question.cog_choose_shape[2].question_shape,1,all_question.cog_choose_shape[2].option_picture.first);</script></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q32" name="q5question3" data-role="none" <?php echo "value=\"$question5[13]\""; ?>><script>cog_choose_shape_insert_picture_3(all_question.cog_choose_shape[2].question_shape,2,all_question.cog_choose_shape[2].option_picture.second);</script></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q33" name="q5question3" data-role="none" <?php echo "value=\"$question5[14]\""; ?>><script>cog_choose_shape_insert_picture_3(all_question.cog_choose_shape[2].question_shape,3,all_question.cog_choose_shape[2].option_picture.third);</script></label></div>
				</td>
			</tr>
			<tr class="shape_eventr">
				<td class="shape_td"><script>cog_choose_shape_get(all_question.cog_choose_shape[3].question_shape);</script></td>
				<td class="shape_eventd">
					<div style="float: left;"><label><input type="radio" id="q5q41" name="q5question4" data-role="none" <?php echo "value=\"$question5[15]\""; ?>><script>cog_choose_shape_insert_picture_4(all_question.cog_choose_shape[3].question_shape,1,all_question.cog_choose_shape[3].option_picture.first);</script></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q42" name="q5question4" data-role="none" <?php echo "value=\"$question5[16]\""; ?>><script>cog_choose_shape_insert_picture_4(all_question.cog_choose_shape[3].question_shape,2,all_question.cog_choose_shape[3].option_picture.second);</script></label></div>
					<div style="float: left;"><label><input type="radio" id="q5q43" name="q5question4" data-role="none" <?php echo "value=\"$question5[17]\""; ?>><script>cog_choose_shape_insert_picture_4(all_question.cog_choose_shape[3].question_shape,3,all_question.cog_choose_shape[3].option_picture.third);</script></label></div>
				</td>
			</tr>
		</table>
        </div>
        <br>
				<a href="#cognition4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
				<a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
            </div>
	</form>
</body>
</html>