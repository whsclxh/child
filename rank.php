<?php session_start(); ?>
<?php
include("mysql_connect.php"); 
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
$id = $_SESSION['username'];
$sql1 = "SELECT SUM(total_score) AS value_sum FROM cognition_score WHERE username = '$id'";
$result1 = mysqli_query($link,$sql1); 
$row = mysqli_fetch_assoc($result1); 
$cog_sum = $row['value_sum'];
$sql2 = "SELECT * FROM users where username = '$id'";
$result2 = mysqli_query($link,$sql2);
$cog_cardinal= @mysqli_fetch_row($result2);
$cog_average=round($cog_sum/$cog_cardinal[7],2);
$sql2 = "update users set cognition_average='$cog_average' where username='$id'";
if(!(mysqli_query($link,$sql2))){
	echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
$sql3 = "SELECT SUM(totalscore) AS value_math_sum FROM math_score WHERE username = '$id'";
$result3 = mysqli_query($link,$sql3); 
$row3 = mysqli_fetch_assoc($result3); 
$math_sum = $row3['value_math_sum'];
$sql4 = "SELECT * FROM users where username = '$id'";
$result4 = mysqli_query($link,$sql4);
$math_cardinal= @mysqli_fetch_row($result4);
$math_average=round($math_sum/$math_cardinal[5],2);
$sql4 = "update users set math_average='$math_average' where username='$id'";
if(!(mysqli_query($link,$sql4))){
	echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}



$sql7 = "SELECT SUM(total_score) AS value_sum FROM chinese_score WHERE username = '$id'";        //////////////////////chinese
$result6 = mysqli_query($link,$sql7); 
$row = mysqli_fetch_assoc($result6); 
$ch_sum = $row['value_sum'];
$sql8 = "SELECT * FROM users where username = '$id'";
$result7 = mysqli_query($link,$sql8);
$ch_cardinal= @mysqli_fetch_row($result7);
$ch_average=round($ch_sum/$ch_cardinal[6],2);
$sql8 = "update users set chinese_average='$ch_average' where username='$id'";
if(!(mysqli_query($link,$sql8))){
	echo "<script>console.log('fail');</script>";
}




$sql5 = "SELECT * FROM users where username = '$id'";
$result5 = mysqli_query($link,$sql5);
$times = @mysqli_fetch_row($result5);
$total_times=$times[5]+$times[7];
$all_average_score=round(($times[5]*$times[10]+$times[7]*$times[12])/$total_times,2);
$sql6 = "update users set total_times='$total_times', total_average='$all_average_score' where username='$id'";
if(!(mysqli_query($link,$sql6))){
	echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
?>
<style type="text/css">
	body{
		background: url(img/blue.png) no-repeat;
		background-size: cover;
	}
    .all{
    	width: 60%;
    	height: 60%;
        position: absolute;
        bottom: 0px;
        right: 20%;
    	background: url(img/book.png) no-repeat;
    	background-size: cover;
    }
    .math{
        position: absolute;
        bottom: 00px;
        left: 0px;
    }
    .chinese{
        position: absolute;
       bottom: 350px;
        left: 200px;
    }
    .cognition{
        position: absolute;
        bottom: 350px;
        right: 200px;
    }
    .time{
        position: absolute;
       bottom: 0px;
        right: 0px;
    }
    .allc{
        position: absolute;
        bottom: 500px;
        left: 50%;
        margin-left: -150px; 
    }
</style>
<style>
    .right ul li {
    display:inline;
}
</style>
<div style="width:100%;" style="display:inline">
<div class="right" style="float:right; text-align:center; display:inline" >
  	<ul>
  	<li><a href="Topic.php" data-ajax="false">回到首頁 </a></li>
    </ul>
    </div>
</div>
<div class="all">
</div>
<div class="math"><input type="image" src="img/123cloud.png" onClick="javascript:location.href='math_rank.php'" width="300px" height="300px"></div>
<div class="chinese"><input type="image" src="img/chinesecloud.png" onClick="javascript:location.href='chinese_rank.php'" width="300px" height="300px"></div>
<div class="cognition"><input type="image" src="img/cognitioncloud.png" onClick="javascript:location.href='cognition_rank.php'" width="300px" height="300px"></div>
<div class="time"><input type="image" src="img/timecloud.png" onClick="javascript:location.href='time_rank.php'" width="300px" height="300px"></div>
<div class="allc"><input type="image" src="img/allcloud.png" onClick="javascript:location.href='total_rank.php'" width="300px" height="300px"></div>
