<?php session_start(); ?>
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$cardinal= $_SESSION['cog_times'];
$sql1 = "SELECT * FROM cog_count_choose_db where username = '$id' AND cardinal = '$cardinal'";
$result1 = mysqli_query($link,$sql1);
$cog_count_choose_sql = @mysqli_fetch_row($result1);
$sql2 = "SELECT * FROM cog_choose_shape_db where username = '$id' AND cardinal = '$cardinal'";
$result2 = mysqli_query($link,$sql2);
$cog_choose_shape_sql = @mysqli_fetch_row($result2);
$sql3 = "SELECT * FROM cog_choose_longer_db where username = '$id' AND cardinal = '$cardinal'";
$result3 = mysqli_query($link,$sql3);
$cog_choose_longer_sql = @mysqli_fetch_row($result3);
$sql4 = "SELECT * FROM cog_choose_correct_orientation_db where username = '$id' AND cardinal = '$cardinal'";
$result4 = mysqli_query($link,$sql4);
$cog_choose_correct_orientation_sql = @mysqli_fetch_row($result4);
$sql5 = "SELECT * FROM cog_sequence_db where username = '$id' AND cardinal = '$cardinal'";
$result5 = mysqli_query($link,$sql5);
$cog_sequence_sql = @mysqli_fetch_row($result5);
$sql6 = "SELECT * FROM cognition_score where username = '$id' AND cardinal = '$cardinal'";
$result6 = mysqli_query($link,$sql6);
$cognition_score_sql = @mysqli_fetch_row($result6);
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
if($_SESSION['cog_times'] == null){
    echo "<script>alert('請重新選擇!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Topic.php>';
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
<link rel="stylesheet" type="text/css" href="css/cognition_finish.css">
<style type="text/css">
.ui-page{
    background: url(img/gray.png) no-repeat !important;
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
<script type="text/javascript" src="anw_cog_count_choose.js"></script>
<script type="text/javascript" src="anw_cog_choose_correct_orientation.js"></script>
<script type="text/javascript" src="anw_cog_choose_longer.js"></script>
<script type="text/javascript" src="anw_cog_sequence.js"></script>
<script type="text/javascript" src="anw_cog_choose_shape.js"></script>
<body>
<script src='js/snowflakes.min.js'></script>
<script src="js/index.js"></script>
<form name="form1" method="post">
    <div data-role="page" id="cognition_anwser">
    <div align="center" valign="middle">
        <h3 align="center" style="color: red">本次作答拿了<?php echo "$cognition_score_sql[2]"; ?>/100分</h3>
        <a href="#cognition_anwser1" class="ui-btn" style="width: 10%;" data-transition="slide">來對答案吧!</a>
        </div>  
    </div>
    <div data-role="page" id="cognition_anwser1" align="center">
        <h3 align="center" style="color: red">數一數,並選出比較多的那種,一格1分</h3>
        <h3 align="center" style="color: red">拿了<?php echo "$cog_count_choose_sql[2]"; ?>/20分</h3>
        <div class="count_sexyborder">
        <table border="1" align="center" class="count_headertable">
            <tr>
                <th style="text-align: center; width:80%" >圖</th>
                <th style="text-align: center;" width="5%">原作答</th>
                <th style="text-align: center;" width="5%">原作答</th>
                <th style="text-align: center;" width="5%">正確答案</th>
                <th style="text-align: center;" width="5%">正確答案</th>
            </tr>
            <tr class="count_oddtr">
                <td><script>anw_cog_count_choose_pictures(all_question.cog_count_choose[0].picture_quantity.up,all_question.cog_count_choose[0].picture_info.up);</script></td>
                <td style="text-align: center;"><?php if($cog_count_choose_sql[3]==null) echo "未作答"; else echo "$cog_count_choose_sql[3]" ?></td>
                <td style="text-align: center;"><input id="cog_count_choose_q1" name="cog_count_choose_q1" type="radio" value="1" data-role="none" disabled <?php if($cog_count_choose_sql[13]=="1") echo "checked=checked" ?>></td>
                <td style="text-align: center;"><?php echo "$question1[2]"; ?></td>
                <td style="text-align: center;"><input id="anw_cog_count_choose_q1" name="anw_cog_count_choose_q1" type="radio" disabled data-role="none" <?php if($question1[2]>$question1[3]) echo "checked=checked" ?>></td>
            </tr>
            <tr class="count_eventr">
                <td><script>anw_cog_count_choose_pictures(all_question.cog_count_choose[0].picture_quantity.down,all_question.cog_count_choose[0].picture_info.down);</script></td>
                <td style="text-align: center;"><?php if($cog_count_choose_sql[4]==null) echo "未作答"; else echo "$cog_count_choose_sql[4]" ?></td>
                <td style="text-align: center;"><input id="cog_count_choose_q1" name="cog_count_choose_q1" type="radio" value="2" data-role="none" disabled <?php if($cog_count_choose_sql[13]=="2") echo "checked=checked" ?>></td>
                <td style="text-align: center;"><?php echo "$question1[3]"; ?></td>
                <td style="text-align: center;"><input id="anw_cog_count_choose_q1" name="anw_cog_count_choose_q1" type="radio" disabled data-role="none"<?php if($question1[3]>$question1[2]) echo "checked=checked" ?>></td>
            </tr>
        </table>
        </div>
            <br/>
            <div class="count_sexyborder">
            <table border="1" width="60%" align="center" class="count_headertable">
            <tr class="count_oddtr">
                <td width="80%"><script>anw_cog_count_choose_pictures(all_question.cog_count_choose[1].picture_quantity.up,all_question.cog_count_choose[1].picture_info.up);</script></td>
                <td width="5%" style="text-align: center;"><?php if($cog_count_choose_sql[5]==null) echo "未作答"; else echo "$cog_count_choose_sql[5]" ?></td>
                <td width="5%" style="text-align: center;"><input id="cog_count_choose_q2" name="cog_count_choose_q2" type="radio" value="1" data-role="none" disabled <?php if($cog_count_choose_sql[14]=="1") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><?php echo "$question1[4]"; ?></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_count_choose_q2" name="anw_cog_count_choose_q2" type="radio" disabled data-role="none" <?php if($question1[4]>$question1[5]) echo "checked=checked" ?>></td>
            </tr>
            <tr class="count_eventr">
                <td><script>anw_cog_count_choose_pictures(all_question.cog_count_choose[1].picture_quantity.down,all_question.cog_count_choose[1].picture_info.down);</script></td>
                <td  style="text-align: center;"><?php if($cog_count_choose_sql[6]==null) echo "未作答"; else echo "$cog_count_choose_sql[6]" ?></td>
                <td style="text-align: center;"><input id="cog_count_choose_q2" name="cog_count_choose_q2" type="radio" value="2" data-role="none" disabled <?php if($cog_count_choose_sql[14]=="2") echo "checked=checked" ?>></td>
                <td style="text-align: center;"><?php echo "$question1[5]"; ?></td>
                <td style="text-align: center;"><input id="anw_cog_count_choose_q2" name="anw_cog_count_choose_q2" type="radio" disabled data-role="none"<?php if($question1[5]>$question1[4]) echo "checked=checked" ?>></td>
            </tr>
        </table>
    </div>
    <br>
    <div class="count_sexyborder">
         <table border="1" width="60%" align="center" class="count_headertable">
            <tr class="count_oddtr">
                <td width="80%"><script>anw_cog_count_choose_pictures(all_question.cog_count_choose[2].picture_quantity.up,all_question.cog_count_choose[2].picture_info.up);</script></td>
                <td width="5%" style="text-align: center;"><?php if($cog_count_choose_sql[7]==null) echo "未作答"; else echo "$cog_count_choose_sql[7]" ?></td>
                <td width="5%" style="text-align: center;"><input id="cog_count_choose_q3" name="cog_count_choose_q3" type="radio" value="1" data-role="none" disabled <?php if($cog_count_choose_sql[15]=="1") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><?php echo "$question1[6]"; ?></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_count_choose_q3" name="anw_cog_count_choose_q3" type="radio" disabled data-role="none" <?php if($question1[6]>$question1[7]) echo "checked=checked" ?>></td>
            </tr>
            <tr class="count_eventr">
                <td><script>anw_cog_count_choose_pictures(all_question.cog_count_choose[2].picture_quantity.down,all_question.cog_count_choose[2].picture_info.down);</script></td>
                <td style="text-align: center;"><?php if($cog_count_choose_sql[8]==null) echo "未作答"; else echo "$cog_count_choose_sql[8]" ?></td>
                <td style="text-align: center;"><input id="cog_count_choose_q3" name="cog_count_choose_q3" type="radio" value="2" data-role="none" disabled <?php if($cog_count_choose_sql[15]=="2") echo "checked=checked" ?>></td>
                <td style="text-align: center;"><?php echo "$question1[7]"; ?></td>
                <td style="text-align: center;"><input id="anw_cog_count_choose_q3" name="anw_cog_count_choose_q3" type="radio" disabled data-role="none"<?php if($question1[7]>$question1[6]) echo "checked=checked" ?>></td>
            </tr>
        </table>
    </div>
        <br>
        <div class="count_sexyborder">
        <table border="1" width="60%" align="center" class="count_headertable">
            <tr class="count_oddtr">
                <td width="80%"><script>anw_cog_count_choose_pictures(all_question.cog_count_choose[3].picture_quantity.up,all_question.cog_count_choose[3].picture_info.up);</script></td>
                <td width="5%" style="text-align: center;"><?php if($cog_count_choose_sql[9]==null) echo "未作答"; else echo "$cog_count_choose_sql[9]" ?></td>
                <td width="5%" style="text-align: center;"><input id="cog_count_choose_q4" name="cog_count_choose_q4" type="radio" value="1" data-role="none" disabled <?php if($cog_count_choose_sql[16]=="1") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><?php echo "$question1[8]"; ?></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_count_choose_q4" name="anw_cog_count_choose_q4" type="radio" disabled data-role="none" <?php if($question1[8]>$question1[9]) echo "checked=checked" ?>></td>
            </tr>
            <tr class="count_eventr">
                <td><script>anw_cog_count_choose_pictures(all_question.cog_count_choose[3].picture_quantity.down,all_question.cog_count_choose[3].picture_info.down);</script></td>
                <td style="text-align: center;"><?php if($cog_count_choose_sql[10]==null) echo "未作答"; else echo "$cog_count_choose_sql[10]" ?></td>
                <td style="text-align: center;"><input id="cog_count_choose_q4" name="cog_count_choose_q4" type="radio" value="2" data-role="none" disabled <?php if($cog_count_choose_sql[16]=="2") echo "checked=checked" ?>></td>
                <td style="text-align: center;"><?php echo "$question1[9]"; ?></td>
                <td style="text-align: center;"><input id="anw_cog_count_choose_q4" name="anw_cog_count_choose_q4" type="radio" disabled data-role="none"<?php if($question1[9]>$question1[8]) echo "checked=checked" ?>></td>
            </tr>
        </table>
    </div>
    <br>
        <div class="count_sexyborder">
        <table border="1" width="60%" align="center" class="count_headertable">
            <tr class="count_oddtr">
                <td width="80%"><script>anw_cog_count_choose_pictures(all_question.cog_count_choose[4].picture_quantity.up,all_question.cog_count_choose[4].picture_info.up);</script></td>
                <td width="5%" style="text-align: center;"><?php if($cog_count_choose_sql[11]==null) echo "未作答"; else echo "$cog_count_choose_sql[11]" ?></td>
                <td width="5%" style="text-align: center;"><input id="cog_count_choose_q5" name="cog_count_choose_q5" type="radio" value="1" data-role="none" disabled <?php if($cog_count_choose_sql[17]=="1") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><?php echo "$question1[10]"; ?></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_count_choose_q5" name="anw_cog_count_choose_q5" type="radio" disabled data-role="none" <?php if($question1[10]>$question1[11]) echo "checked=checked" ?>></td>
            </tr>
            <tr class="count_eventr">
                <td><script>anw_cog_count_choose_pictures(all_question.cog_count_choose[4].picture_quantity.down,all_question.cog_count_choose[4].picture_info.down);</script></td>
                <td style="text-align: center;"><?php if($cog_count_choose_sql[12]==null) echo "未作答"; else echo "$cog_count_choose_sql[12]" ?></td>
                <td style="text-align: center;"><input id="cog_count_choose_q5" name="cog_count_choose_q5" type="radio" value="2" data-role="none" disabled <?php if($cog_count_choose_sql[17]=="2") echo "checked=checked" ?>></td>
                <td style="text-align: center;"><?php echo "$question1[11]"; ?></td>
                <td style="text-align: center;"><input id="anw_cog_count_choose_q5" name="anw_cog_count_choose_q5" type="radio" disabled data-role="none"<?php if($question1[11]>$question1[10]) echo "checked=checked" ?>></td>
            </tr>
        </table>
            </div>
            <br>
            <a href="Topic.php" data-ajax="false" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">回到首頁</a>
            <a href="#cognition_anwser2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
            <br><br>
    </div>
    <div data-role="page" id="cognition_anwser2" align="center">
        <h3 align="center" style="color: red">請幫忙找一找,選出正確的答案,一題5分</h3>
        <h3 align="center" style="color: red">拿了<?php echo "$cog_choose_correct_orientation_sql[2]"; ?>/20分</h3>
        <div class="orientation_sexyborder">
        <table border="1" style="margin: auto;" class="orientation_fancytable">
        <tr>
            <td class="orientation_odd" style="text-align: center;"><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_1_column_1);</script></td>
            <td class="orientation_even" style="text-align: center;"><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_1_column_2);</script></td>
            <td class="orientation_odd" style="text-align: center;"><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_1_column_3);</script></td>
        </tr>
        <tr>
            <td class="orientation_even" style="text-align: center;"><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_2_column_1);</script></td>
            <td class="orientation_odd" style="text-align: center;"><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_2_column_2);</script></td>
            <td class="orientation_even" style="text-align: center;"><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_2_column_3);</script></td>
        </tr>
        <tr>
            <td class="orientation_odd" style="text-align: center;"><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_3_column_1);</script></td>
            <td class="orientation_even" style="text-align: center;"><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_3_column_2);</script></td>
            <td class="orientation_odd" style="text-align: center;"><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[0].question_picture.row_3_column_3);</script></td>
        </tr>
    </table>
    </div>
    <br>
    <div class="orientation_goodborder">
    <table border="1" style="margin: auto;" class="orientation_goodtable">
        <tr class="orientation_oddtr">
            <th style="text-align: center;">題目</th>
            <th style="text-align: center;">原作答</th>
            <th style="text-align: center;">正確答案</th>
        </tr>
        <tr class="orientation_eventr">
            <th>1.在<script>anw_cog_choose_correct_orientation_set_question_name(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].subject_pic])</script>的<script>anw_cog_choose_correct_orientation_write_direction(all_question.cog_choose_correct_orientation[2].subject_pic,all_question.cog_choose_correct_orientation[2].subject_orientation)</script>是
            </th>
            <td>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q1_1" name="cog_choose_correct_orientation_1" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[3]=="$question2[19]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.first]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q1_2" name="cog_choose_correct_orientation_1" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[3]=="$question2[20]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.second]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q1_3" name="cog_choose_correct_orientation_1" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[3]=="$question2[21]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.third]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q1_4" name="cog_choose_correct_orientation_1" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[3]=="$question2[22]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.fourth]);</script></label></div>
            </td>
            <td>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q1_1" name="anw_cog_choose_correct_orientation_1" disabled="disabled" data-role="none" <?php if($question2[35]=="$question2[19]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.first]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q1_2" name="anw_cog_choose_correct_orientation_1" disabled="disabled" data-role="none" <?php if($question2[35]=="$question2[20]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.second]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q1_3" name="anw_cog_choose_correct_orientation_1" disabled="disabled" data-role="none" <?php if($question2[35]=="$question2[21]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.third]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q1_4" name="anw_cog_choose_correct_orientation_1" disabled="disabled" data-role="none" <?php if($question2[35]=="$question2[22]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[2].option.fourth]);</script></label></div>
            </td>
        </tr>
        <tr class="orientation_oddtr">
            <th>2.在<script>anw_cog_choose_correct_orientation_set_question_name(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].subject_pic])</script>的<script>anw_cog_choose_correct_orientation_write_direction(all_question.cog_choose_correct_orientation[3].subject_pic,all_question.cog_choose_correct_orientation[3].subject_orientation)</script>是
            </th>
            <td>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q2_1" name="cog_choose_correct_orientation_2" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[4]=="$question2[23]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.first]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q2_2" name="cog_choose_correct_orientation_2" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[4]=="$question2[24]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.second]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q2_3" name="cog_choose_correct_orientation_2" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[4]=="$question2[25]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.third]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q2_4" name="cog_choose_correct_orientation_2" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[4]=="$question2[26]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.fourth]);</script></label></div>
            </td>
            <td>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q2_1" name="anw_cog_choose_correct_orientation_2" disabled="disabled" data-role="none" <?php if($question2[36]=="$question2[23]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.first]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q2_2" name="anw_cog_choose_correct_orientation_2" disabled="disabled" data-role="none" <?php if($question2[36]=="$question2[24]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.second]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q2_3" name="anw_cog_choose_correct_orientation_2" disabled="disabled" data-role="none" <?php if($question2[36]=="$question2[25]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.third]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q2_4" name="anw_cog_choose_correct_orientation_2" disabled="disabled" data-role="none" <?php if($question2[36]=="$question2[26]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[3].option.fourth]);</script></label></div>
            </td>
        </tr>
        <tr class="orientation_eventr">
            <th>3.在<script>anw_cog_choose_correct_orientation_set_question_name(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].subject_pic])</script>的<script>anw_cog_choose_correct_orientation_write_direction(all_question.cog_choose_correct_orientation[4].subject_pic,all_question.cog_choose_correct_orientation[4].subject_orientation)</script>是
            </th>
            <td>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q3_1" name="cog_choose_correct_orientation_3" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[5]=="$question2[27]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.first]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q3_2" name="cog_choose_correct_orientation_3" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[5]=="$question2[28]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.second]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q3_3" name="cog_choose_correct_orientation_3" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[5]=="$question2[29]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.third]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q3_4" name="cog_choose_correct_orientation_3" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[5]=="$question2[30]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.fourth]);</script></label></div>
            </td>
            <td>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q3_1" name="anw_cog_choose_correct_orientation_3" disabled="disabled" data-role="none" <?php if($question2[37]=="$question2[27]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.first]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q3_2" name="anw_cog_choose_correct_orientation_3" disabled="disabled" data-role="none" <?php if($question2[37]=="$question2[28]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.second]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q3_3" name="anw_cog_choose_correct_orientation_3" disabled="disabled" data-role="none" <?php if($question2[37]=="$question2[29]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.third]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q3_4" name="anw_cog_choose_correct_orientation_3" disabled="disabled" data-role="none" <?php if($question2[37]=="$question2[30]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[4].option.fourth]);</script></label></div>
            </td>
        </tr>
        <tr class="orientation_oddtr">
            <th>4.在<script>anw_cog_choose_correct_orientation_set_question_name(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].subject_pic])</script>的<script>anw_cog_choose_correct_orientation_write_direction(all_question.cog_choose_correct_orientation[5].subject_pic,all_question.cog_choose_correct_orientation[5].subject_orientation)</script>是
            </th>
            <td>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q4_1" name="cog_choose_correct_orientation_4" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[6]=="$question2[31]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.first]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q4_2" name="cog_choose_correct_orientation_4" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[6]=="$question2[32]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.second]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q4_3" name="cog_choose_correct_orientation_4" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[6]=="$question2[33]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.third]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_choose_correct_orientation_q4_4" name="cog_choose_correct_orientation_4" disabled="disabled" data-role="none" <?php if($cog_choose_correct_orientation_sql[6]=="$question2[34]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.fourth]);</script></label></div>
            </td>
            <td>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q4_1" name="anw_cog_choose_correct_orientation_4" disabled="disabled" data-role="none" <?php if($question2[38]=="$question2[31]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.first]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q4_2" name="anw_cog_choose_correct_orientation_4" disabled="disabled" data-role="none" <?php if($question2[38]=="$question2[32]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.second]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q4_3" name="anw_cog_choose_correct_orientation_4" disabled="disabled" data-role="none" <?php if($question2[38]=="$question2[33]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.third]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_choose_correct_orientation_q4_4" name="anw_cog_choose_correct_orientation_4" disabled="disabled" data-role="none" <?php if($question2[38]=="$question2[34]") echo "checked=checked" ?>><script>anw_cog_choose_correct_orientation_pictures(all_question.cog_choose_correct_orientation[1].pictures_cardinal[all_question.cog_choose_correct_orientation[5].option.fourth]);</script></label></div>
            </td>
        </tr>
    </table>
    </div>
    <br>
        <a href="#cognition_anwser1" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
        <a href="Topic.php" data-ajax="false" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
        <a href="#cognition_anwser3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
    <br><br>
</div>
    <div data-role="page" id="cognition_anwser3" align="center">
        <h3 align="center" style="color: red">比一比,選出比較長的那一種,一題4分</h3>
        <h3 align="center" style="color: red">拿了<?php echo "$cog_choose_longer_sql[2]"; ?>/20分</h3>
        <div class="long_headerborder">
        <table border="1" width="60%" align="center" class="long_headertable">
            <tr>
                <th style="text-align: center;">圖</th>
                <th style="text-align: center;">原作答</th>
                <th style="text-align: center;">正確答案</th>
            </tr>
            <tr class="long_oddtr">
                <td width="90%"><script>anw_cog_choose_longer_pictures(all_question.cog_choose_longer[0].picture_info,all_question.cog_choose_longer[0].picture_length.up);</script></td>
                <td width="5%" style="text-align: center;"><input id="cog_choose_longer_q1_1" name="cog_choose_longer_q1" type="radio" value="1" disabled data-role="none" <?php if($cog_choose_longer_sql[3]=="$question3[7]") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_choose_longer_q1_1" name="anw_cog_choose_longer_q1" type="radio" disabled data-role="none" <?php if($question3[7]>$question3[8]) echo "checked=checked" ?>></td>
            </tr>
            <tr class="long_eventr">
                <td width="90%"><script>anw_cog_choose_longer_pictures(all_question.cog_choose_longer[0].picture_info,all_question.cog_choose_longer[0].picture_length.down);</script></td>
                <td width="5%" style="text-align: center;"><input id="cog_choose_longer_q1_2" name="cog_choose_longer_q1" type="radio" value="2" disabled data-role="none" <?php if($cog_choose_longer_sql[3]=="$question3[8]") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_choose_longer_q1_2" name="anw_cog_choose_longer_q1" type="radio" disabled data-role="none" <?php if($question3[8]>$question3[7]) echo "checked=checked" ?>></td>
            </tr>
        </table>
        </div>
        <br>
        <div class="long_headerborder">
        <table border="1" width="60%" align="center" class="long_headertable">
            <tr class="long_oddtr">
                <td width="90%"><script>anw_cog_choose_longer_pictures(all_question.cog_choose_longer[1].picture_info,all_question.cog_choose_longer[1].picture_length.up);</script></td>
                <td width="5%" style="text-align: center;"><input id="cog_choose_longer_q2_1" name="cog_choose_longer_q2" type="radio" value="1" disabled data-role="none" <?php if($cog_choose_longer_sql[4]=="$question3[9]") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_choose_longer_q2_1" name="anw_cog_choose_longer_q2" type="radio" disabled data-role="none" <?php if($question3[9]>$question3[10]) echo "checked=checked" ?>></td>
            </tr>
            <tr class="long_eventr">
                <td width="90%"><script>anw_cog_choose_longer_pictures(all_question.cog_choose_longer[1].picture_info,all_question.cog_choose_longer[1].picture_length.down);</script></td>
                <td width="5%" style="text-align: center;"><input id="cog_choose_longer_q2_2" name="cog_choose_longer_q2" type="radio" value="2" disabled data-role="none" <?php if($cog_choose_longer_sql[4]=="$question3[10]") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_choose_longer_q2_2" name="anw_cog_choose_longer_q2" type="radio" disabled data-role="none" <?php if($question3[10]>$question3[9]) echo "checked=checked" ?>></td>
            </tr>
        </table>
        </div>
        <br>
        <div class="long_headerborder">
        <table border="1" width="60%" align="center" class="long_headertable">
            <tr class="long_oddtr">
                <td width="90%"><script>anw_cog_choose_longer_pictures(all_question.cog_choose_longer[2].picture_info,all_question.cog_choose_longer[2].picture_length.up);</script></td>
                <td width="5%" style="text-align: center;"><input id="cog_choose_longer_q3_1" name="cog_choose_longer_q3" type="radio" value="1" disabled data-role="none" <?php if($cog_choose_longer_sql[5]=="$question3[11]") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_choose_longer_q3_1" name="anw_cog_choose_longer_q3" type="radio" disabled data-role="none" <?php if($question3[11]>$question3[12]) echo "checked=checked" ?>></td>
            </tr>
            <tr class="long_eventr">
                <td width="90%"><script>anw_cog_choose_longer_pictures(all_question.cog_choose_longer[2].picture_info,all_question.cog_choose_longer[2].picture_length.down);</script></td>
                <td width="5%" style="text-align: center;"><input id="cog_choose_longer_q3_2" name="cog_choose_longer_q3" type="radio" value="2" disabled data-role="none" <?php if($cog_choose_longer_sql[5]=="$question3[12]") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_choose_longer_q3_2" name="anw_cog_choose_longer_q3" type="radio" disabled data-role="none" <?php if($question3[12]>$question3[11]) echo "checked=checked" ?>></td>
            </tr>
        </table>
        </div>
        <br>
        <div class="long_headerborder">
        <table border="1" width="60%" align="center" class="long_headertable">
            <tr class="long_oddtr">
                <td width="90%"><script>anw_cog_choose_longer_pictures(all_question.cog_choose_longer[3].picture_info,all_question.cog_choose_longer[3].picture_length.up);</script></td>
                <td width="5%" style="text-align: center;"><input id="cog_choose_longer_q4_1" name="cog_choose_longer_q4" type="radio" value="1" disabled data-role="none" <?php if($cog_choose_longer_sql[6]=="$question3[13]") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_choose_longer_q4_1" name="anw_cog_choose_longer_q4" type="radio" disabled data-role="none" <?php if($question3[13]>$question3[14]) echo "checked=checked" ?>></td>
            </tr>
            <tr class="long_eventr">
                <td width="90%"><script>anw_cog_choose_longer_pictures(all_question.cog_choose_longer[3].picture_info,all_question.cog_choose_longer[3].picture_length.down);</script></td>
                <td width="5%" style="text-align: center;"><input id="cog_choose_longer_q4_2" name="cog_choose_longer_q4" type="radio" value="2" disabled data-role="none" <?php if($cog_choose_longer_sql[6]=="$question3[14]") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_choose_longer_q4_2" name="anw_cog_choose_longer_q4" type="radio" disabled data-role="none" <?php if($question3[14]>$question3[13]) echo "checked=checked" ?>></td>
            </tr>
        </table>
            </div>
        <br>
            <div class="long_headerborder">
            <table border="1" width="60%" align="center" class="long_headertable">
            <tr class="long_oddtr">
                <td width="90%"><script>anw_cog_choose_longer_pictures(all_question.cog_choose_longer[4].picture_info,all_question.cog_choose_longer[4].picture_length.up);</script></td>
                <td width="5%" style="text-align: center;"><input id="cog_choose_longer_q5_1" name="cog_choose_longer_q5" type="radio" value="1" disabled data-role="none" <?php if($cog_choose_longer_sql[7]=="$question3[15]") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_choose_longer_q5_1" name="anw_cog_choose_longer_q5" type="radio" disabled data-role="none" <?php if($question3[16]>$question3[15]) echo "checked=checked" ?>></td>
            </tr>
            <tr class="long_eventr">
                <td width="90%"><script>anw_cog_choose_longer_pictures(all_question.cog_choose_longer[4].picture_info,all_question.cog_choose_longer[4].picture_length.down);</script></td>
                <td width="5%" style="text-align: center;"><input id="cog_choose_longer_q5_2" name="cog_choose_longer_q5" type="radio" value="2" disabled data-role="none" <?php if($cog_choose_longer_sql[7]=="$question3[16]") echo "checked=checked" ?>></td>
                <td width="5%" style="text-align: center;"><input id="anw_cog_choose_longer_q5_2" name="anw_cog_choose_longer_q5" type="radio" disabled data-role="none" <?php if($question3[15]>$question3[16]) echo "checked=checked" ?>></td>
            </tr>
        </table>
    </div>
       <br>
            <a href="#cognition_anwser2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
            <a href="Topic.php" data-ajax="false" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
            <a href="#cognition_anwser4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
        <br><br>
    </div>
    <div data-role="page" id="cognition_anwser4" align="center">
        <h3 align="center" style="color: red">請幫忙找一找,填入正確的答案,一題5分</h3>
        <h3 align="center" style="color: red">拿了<?php echo "$cog_sequence_sql[2]"; ?>/20分</h3>
        <div align="center" class="sequence_headerborder">
    <table border="0">
        <tr>
            <td>
                <script>
                    anw_cog_sequence_pictures(all_question.cog_sequence[0].question_picture.first);
                    anw_cog_sequence_pictures(all_question.cog_sequence[0].question_picture.second);
                    anw_cog_sequence_pictures(all_question.cog_sequence[0].question_picture.third);
                    anw_cog_sequence_pictures(all_question.cog_sequence[0].question_picture.fourth);
                    anw_cog_sequence_pictures(all_question.cog_sequence[0].question_picture.fifth);
                    anw_cog_sequence_pictures(all_question.cog_sequence[0].question_picture.sixth);
                    anw_cog_sequence_pictures(all_question.cog_sequence[0].question_picture.seventh);
                    anw_cog_sequence_pictures(all_question.cog_sequence[0].question_picture.eighth);
                </script>
            </td>
        </tr>
    </table>
</div>
<div align="center" class="sequence_border">
    <table border="1" width="100%" class="sequence_table">
        <tr>
            <th width="50%">原作答</th>
            <th width="50%">正解</th>
        </tr>
    </table>
    <table border="1" class="sequence_table">
        <tr class="sequence_oddtr">
            <td colspan="2">
                <span>(1)從<script>anw_cog_sequence_direction(all_question.cog_sequence[2].subject_direction);</script>數起,<script>anw_cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[2].subject_pic]);</script>排在第<input type="number" id="cog_sequence_q1" name="cog_sequence_q1" disabled <?php echo "value=\"$cog_sequence_sql[3]\""; ?> data-role="none" style="height:50px;width:50px;line-height:30px;border:1px solid #999;vertical-align:middle"></span>個。
            </td>
            <td colspan="2">
                <span>(1)從<script>anw_cog_sequence_direction(all_question.cog_sequence[2].subject_direction);</script>數起,<script>anw_cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[2].subject_pic]);</script>排在第<input type="number" id="anw_cog_sequence_q1" name="anw_cog_sequence_q1" disabled <?php echo "value=\"$question4[20]\""; ?> data-role="none" style="height:50px;width:50px;line-height:30px;border:1px solid #999;vertical-align:middle"></span>個。
            </td>
        </tr>
        <tr class="sequence_eventr">
            <td>
                <span style="float: left; vertical-align:middle">(2)從<script>anw_cog_sequence_direction(all_question.cog_sequence[3].subject_direction);</script>數起,第<script>anw_cog_sequence_write(all_question.cog_sequence[3].subject_pic)</script>個是:</span>
            </td>
            <td>
                <div style="float: left;"><label><input type="radio" id="cog_sequence_q2_1" name="cog_sequence_q2" disabled data-role="none" <?php if($cog_sequence_sql[4]=="$question4[17]") echo "checked=checked" ?>><script>anw_cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[3].option.first]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_sequence_q2_2" name="cog_sequence_q2" disabled data-role="none" <?php if($cog_sequence_sql[4]=="$question4[18]") echo "checked=checked" ?>><script>anw_cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[3].option.second]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="cog_sequence_q2_3" name="cog_sequence_q2" disabled data-role="none" <?php if($cog_sequence_sql[4]=="$question4[19]") echo "checked=checked" ?>><script>anw_cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[3].option.third]);</script></label></div>。
            </td>
            <td>
                <span style="float: left; vertical-align:middle">(2)從<script>anw_cog_sequence_direction(all_question.cog_sequence[3].subject_direction);</script>數起,第<script>anw_cog_sequence_write(all_question.cog_sequence[3].subject_pic)</script>個是:</span>
            </td>
            <td>
                <div style="float: left;"><label><input type="radio" id="anw_cog_sequence_q2_1" name="anw_cog_sequence_q2" disabled data-role="none" <?php if($question4[21]=="$question4[17]") echo "checked=checked" ?>><script>anw_cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[3].option.first]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_sequence_q2_2" name="anw_cog_sequence_q2" disabled data-role="none" <?php if($question4[21]=="$question4[18]") echo "checked=checked" ?>><script>anw_cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[3].option.second]);</script></label></div>
                <div style="float: left;"><label><input type="radio" id="anw_cog_sequence_q2_3" name="anw_cog_sequence_q2" disabled data-role="none" <?php if($question4[21]=="$question4[19]") echo "checked=checked" ?>><script>anw_cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[3].option.third]);</script></label></div>。
            </td>
        </tr>
        <tr class="sequence_oddtr">
            <td colspan="2">
                <span>(3)從<script>anw_cog_sequence_direction(all_question.cog_sequence[4].subject_direction);</script>數起,<script>anw_cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[4].subject_pic]);</script>排在第</span>
                <input type="number" id="cog_sequence_q3" name="cog_sequence_q3" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$cog_sequence_sql[5]'";?>>個,也可說是從<script>anw_cog_sequence_direction(all_question.cog_sequence[4].subject_opposite_direction);</script>數起第
                <input type="number" id="cog_sequence_q4" name="cog_sequence_q4" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$cog_sequence_sql[6]'";?>>個。
            </td>
            <td colspan="2">
                <span>(3)從<script>anw_cog_sequence_direction(all_question.cog_sequence[4].subject_direction);</script>數起,<script>anw_cog_sequence_pictures(all_question.cog_sequence[1].pictures_cardinal[all_question.cog_sequence[4].subject_pic]);</script>排在第</span>
                <input type="number" id="anw_cog_sequence_q3" name="anw_cog_sequence_q3" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$question4[22]'";?>>個,也可說是從<script>anw_cog_sequence_direction(all_question.cog_sequence[4].subject_opposite_direction);</script>數起第
                <input type="number" id="anw_cog_sequence_q4" name="anw_cog_sequence_q4" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$question4[23]'";?>>個。
            </td>
        </tr>
    </table>
    </div>
    <br>
            <a href="#cognition_anwser3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
            <a href="Topic.php" data-ajax="false" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
            <a href="#cognition_anwser5" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 3%;" data-transition="slide">下一題</a>
        </div>
    <div data-role="page" id="cognition_anwser5" align="center">
        <h3 align="center" style="color: red">把跟前面形狀相似的選出來,一題5分</h3>
        <h3 align="center" style="color: red">拿了<?php echo "$choose_shape_sql[2]"; ?>/20分</h3>
        <div align="center" class="shape_border">
        <table border="1" class="shape_table">
        <tr class="shape_one">
            <th>題目</th>
            <th>原作答</th>
            <th>正確答案</th>
        </tr>
    <tr>
        <td class="shape_td"><script>anw_cog_choose_shape_get(all_question.cog_choose_shape[0].question_shape);</script></td>
        <td class="shape_oddtd">
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q11" name="cog_choose_shape_q1" disabled data-role="none" <?php echo "value=\"$question5[6]\"";?><?php if($cog_choose_shape_sql[3]=="$question5[6]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_1($question5[2],1,$question5[6]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q12" name="cog_choose_shape_q1" disabled data-role="none" <?php echo "value=\"$question5[7]\"";?><?php if($cog_choose_shape_sql[3]=="$question5[7]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_1($question5[2],2,$question5[7]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q13" name="cog_choose_shape_q1" disabled data-role="none" <?php echo "value=\"$question5[8]\"";?><?php if($cog_choose_shape_sql[3]=="$question5[8]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_1($question5[2],3,$question5[8]);</script>"; ?></label></div>
        </td>
        <td class="shape_eventd">
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q11" name="anw_cog_choose_shape_1" disabled data-role="none" <?php echo "value=\"$question5[6]\"";?><?php if($question5[6]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_1($question5[2],1,$question5[6]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q12" name="anw_cog_choose_shape_1" disabled data-role="none" <?php echo "value=\"$question5[7]\"";?><?php if($question5[7]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_1($question5[2],2,$question5[7]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q13" name="anw_cog_choose_shape_1" disabled data-role="none" <?php echo "value=\"$question5[8]\"";?><?php if($question5[8]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_1($question5[2],3,$question5[8]);</script>"; ?></label></div>
        </td>   
    </tr>
    <tr>
       <td class="shape_td"><script>anw_cog_choose_shape_get(all_question.cog_choose_shape[1].question_shape);</script></td>
        <td class="shape_oddtd">
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q21" name="cog_choose_shape_q2" disabled data-role="none" <?php echo "value=\"$question5[9]\"";?><?php if($cog_choose_shape_sql[4]=="$question5[9]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_2($question5[3],1,$question5[9]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q22" name="cog_choose_shape_q2" disabled data-role="none" <?php echo "value=\"$question5[10]\"";?><?php if($cog_choose_shape_sql[4]=="$question5[10]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_2($question5[3],2,$question5[10]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q23" name="cog_choose_shape_q2" disabled data-role="none" <?php echo "value=\"$question5[11]\"";?><?php if($cog_choose_shape_sql[4]=="$question5[11]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_2($question5[3],3,$question5[11]);</script>"; ?></label></div>
        </td>
        <td class="shape_eventd">
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q21" name="anw_cog_choose_shape_2" disabled data-role="none" <?php echo "value=\"$question5[9]\"";?><?php if($question5[9]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_2($question5[3],1,$question5[9]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q22" name="anw_cog_choose_shape_2" disabled data-role="none" <?php echo "value=\"$question5[10]\"";?><?php if($question5[10]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_2($question5[3],2,$question5[10]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q23" name="anw_cog_choose_shape_2" disabled data-role="none" <?php echo "value=\"$question5[11]\"";?><?php if($question5[11]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_2($question5[3],3,$question5[11]);</script>"; ?></label></div>
        </td>   
    </tr>
    <tr>
        <td class="shape_td"><script>anw_cog_choose_shape_get(all_question.cog_choose_shape[2].question_shape);</script></td>
        <td class="shape_oddtd">
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q31" name="cog_choose_shape_q3" disabled data-role="none" <?php echo "value=\"$question5[12]\"";?><?php if($cog_choose_shape_sql[5]=="$question5[12]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_3($question5[4],1,$question5[12]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q32" name="cog_choose_shape_q3" disabled data-role="none" <?php echo "value=\"$question5[13]\"";?><?php if($cog_choose_shape_sql[5]=="$question5[13]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_3($question5[4],2,$question5[13]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q33" name="cog_choose_shape_q3" disabled data-role="none" <?php echo "value=\"$question5[14]\"";?><?php if($cog_choose_shape_sql[5]=="$question5[14]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_3($question5[4],3,$question5[14]);</script>"; ?></label></div>
        </td>
        <td class="shape_eventd">
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q31" name="anw_cog_choose_shape_3" disabled data-role="none" <?php echo "value=\"$question5[12]\"";?><?php if($question5[12]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_3($question5[4],1,$question5[12]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q32" name="anw_cog_choose_shape_3" disabled data-role="none" <?php echo "value=\"$question5[13]\"";?><?php if($question5[13]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_3($question5[4],2,$question5[13]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q33" name="anw_cog_choose_shape_3" disabled data-role="none" <?php echo "value=\"$question5[14]\"";?><?php if($question5[14]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_3($question5[4],3,$question5[14]);</script>"; ?></label></div>
        </td>   
    </tr>
    <tr>
        <td class="shape_td"><script>anw_cog_choose_shape_get(all_question.cog_choose_shape[3].question_shape);</script></td>
        <td class="shape_oddtd">
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q41" name="cog_choose_shape_q4" disabled data-role="none" <?php echo "value=\"$question5[15]\"";?><?php if($cog_choose_shape_sql[6]=="$question5[15]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_4($question5[5],1,$question5[15]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q42" name="cog_choose_shape_q4" disabled data-role="none" <?php echo "value=\"$question5[16]\"";?><?php if($cog_choose_shape_sql[6]=="$question5[16]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_4($question5[5],2,$question5[16]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="cog_choose_shape_q43" name="cog_choose_shape_q4" disabled data-role="none" <?php echo "value=\"$question5[17]\"";?><?php if($cog_choose_shape_sql[6]=="$question5[17]") echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_4($question5[5],3,$question5[17]);</script>"; ?></label></div>
        </td>
        <td class="shape_eventd">
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q41" name="anw_cog_choose_shape_4" disabled data-role="none" <?php echo "value=\"$question5[15]\"";?><?php if($question5[15]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_4($question5[5],1,$question5[15]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q42" name="anw_cog_choose_shape_4" disabled data-role="none" <?php echo "value=\"$question5[16]\"";?><?php if($question5[16]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_4($question5[5],2,$question5[16]);</script>"; ?></label></div>
            <div style="float: left;"><label><input type="radio" id="anw_cog_choose_shape_q43" name="anw_cog_choose_shape_4" disabled data-role="none" <?php echo "value=\"$question5[17]\"";?><?php if($question5[17]<10) echo "checked=checked";?>><?php echo "<script>anw_cog_choose_shape_insert_picture_4($question5[5],3,$question5[17]);</script>"; ?></label></div>
        </td>   
    </tr>
        </table>
        </div>
        <br>
                <a href="#cognition_anwser4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left" style="width: 3%;" data-transition="slide" data-direction="reverse">上一題</a>
                <a href="Topic.php" data-ajax="false" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">回到首頁</a>
        </div>
 </form>
</body>
 </html> 