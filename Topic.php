<?php session_start(); ?>
<?php 
include("mysql_connect.php");
$id = $_SESSION['username'];
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include("mysql_connect.php");
 ?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width;initial-scale=1.0;user-scalable=0;">
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<title>首頁</title>
</head>
<style type="text/css">
.container{
	overflow: hidden;
}
.right {
    float: right;
    width: 30%;
    text-align: right;
    font-size: 3vmin;
    padding-right: 2%;
}
.right ul li {
    display:inline;
}
.im img{
	margin-left: 5%;
	height: 350px;
	width: 350px;
	margin-bottom: 0%;
}
    body {
     background: #000 url(img/menu.png) center center fixed
     no-repeat;
     background-position:center center;
     -webkit-background-size:cover;
     -moz-background-size:cover;
     -o-background-size:cover;
     background-size:cover;
     height:auto;
	 max-width:100%;
     overflow:hidden;
    }


   

	.left{
  		float: left;
   		width: 70%;
   		position: absolute;
	} 
	.left img{
		text-align: center;
		height: 200px;
		padding-left: 35%;
	}
	.XX{
		margin-top: 0%;
	}
@media only screen and (min-width: 1281px) and (min-height:1001px) and (max-height:1401px) { /*ipad pro 橫*/
	.im img{
	margin-top: 9%;
	}
	.left img{
		text-align: center;
		height: 200px;
		padding-left: 25%;
		margin-top: 5%;
	}
	.XX{
		margin-top: 8%;
	}
	.XX input{
		width: 20%;
		height: 20%;
	}
}
@media only screen and (min-width:769px) and (max-width: 1280px) and (max-height:1400px) { /*ipad pro 直*/
    .im img{
	margin-bottom: 0%;
	}
	.left img{
		text-align: center;
		height: 200px;
		padding-left: 15%;
		margin-top: 10%;
	}
	.XX{
		margin-top: 15%;
		float: none;
	}
	.XX input{
		width: 34%;
		height: 34%;
	}
}
@media only screen and (min-width:769px) and (max-width: 1280px) and (min-height:751px) and (max-height:1000px) {/*ipad 橫*/
     .im img{
     	height: 20%;
     	width: 20%;
		margin-top: 5%;
	}
	.left img{
		text-align: center;
		height: 200px;
		padding-left: 15%;
		margin-top: 5%;
	}
	.XX{
		margin-top: 10%;
	}
	.XX input{
		width: 20%;
		height: 20%;
	}
}
@media only screen and (min-width:481px) and (max-width: 768px) and (min-height:1001px) and (max-height:1400px) { /*ipad 直*/
    .im img{
	margin-bottom: 0%;
	}
	.left img{
		text-align: center;
		height: 200px;
		padding-left: 15%;
		margin-top: 10%;
	}
	.XX{
		margin-top: 15%;
		float: none;
	}
	.XX input{
		width: 34%;
		height: 34%;
	}
}
@media only screen and (min-width:769px) and (max-width: 1280px) and (max-height:500px) {/*iX/Pixel2XL 橫*/
    .im img{
     	display: none;
	}
	.left img{
		text-align: center;
		height: 100px;
		padding-left: 55%;
		margin-top: 5%;
	}
	.XX{
		margin-top: 8%;
	}
	.XX input{
		width: 20%;
		height: 20%;
	}
	.right {
    float: right;
    width: 30%;
    text-align: right;
    font-size: 18px;
    padding-right: 2%;
	} 
}
@media only screen and (max-width: 480px) and (min-height:751px) and (max-height:1000px) {/*iX/Pixel2XL 直*/
    .im img{
     	display: none;
	}
	.left{
		margin-top: 20%;
	}
	.left img{
		text-align: center;
		height: 200px;
		padding-left: 40%;
		margin-top: 10%;
	}
	.XX{
		margin-top: 20%;
	}
	.XX input{
		width: 40%;
		height: 40%;
		margin-right: 30%;
		margin-left: 30%;
	}
	.right {
    float: right;
    width: 30%;
    text-align: right;
    font-size: 30px;
    padding-right: 2%;
	}
}
@media only screen and (min-width:481px) and (max-width: 768px) and (max-height:500px) { /*i5/SE/6/7/8/6+/7+/8+/Pixel2/Glaxay S5 橫*/
    .im img{
     	display: none;
	}
	.left img{
		text-align: center;
		height: 150px;
		padding-left: 35%;
		margin-top: 8%;
	}
	.XX{
		margin-top: 12%;
	}
	.XX input{
		width: 20%;
		height: 20%;
	}
	.right {
    float: right;
    width: 30%;
    font-size: 20px;
    text-align: right;
	} 
}
@media only screen and (max-width: 480px) and (min-height:500px) and (max-height:750px) {/*i5/SE/6/7/8/6+/7+/8+/Pixel2/Glaxay S5 直*/
     .im img{
     	display: none;
	}
	.left{
		margin-top: 20%;
	}
	.left img{
		text-align: center;
		height: 200px;
		padding-left: 40%;
		margin-top: 10%;
	}
	.XX{
		margin-top: 15%;
	}
	.XX input{
		width: 35%;
		height: 35%;
		margin-right: 30%;
		margin-left: 30%;
	}
	.right {
    float: right;
    width: 30%;
    text-align: right;
    font-size: 30px;
    padding-right: 2%;
	} 
}
</style>
<?php
$cog_sql = "SELECT * FROM users where username = '$id'";
$cog_result = mysqli_query($qaq,$cog_sql);
$cog_q_row = @mysqli_fetch_row($cog_result);
$cog_a=$cog_q_row[7];
$cog_sq2 = "SELECT * FROM cognition_score where username = '$id' and cardinal='$cog_q_row[7]'";
@$cog_result2 = mysqli_query($qaq,$cog_sq2);
$cog_a_row = @mysqli_fetch_row($cog_result2);
$math_sql = "SELECT * FROM users where username = '$id'";
$math_result = mysqli_query($qaq,$math_sql);
$math_q_row = @mysqli_fetch_row($math_result);
$math_a=$math_q_row[5];
$math_sq2 = "SELECT * FROM math_score where username = '$id' and cardinal='$math_q_row[5]'";
@$math_result2 = mysqli_query($qaq,$math_sq2);
$math_a_row = @mysqli_fetch_row($math_result2);
?>
<script type="text/javascript">
	function go_cognition(){
<?php if($cog_a_row[1]!=$cog_a){ ?>
	if (confirm('要繼續作答上次未提交的題目嗎?')) {
		<?php $_SESSION['cognition_times'] = $cog_a;?>
        document.location.href="cognition.php";
} else {
    if (confirm('重新作答會使上次未送出資料以0分計算,您確定嗎?')) {
    	<?php $_SESSION['cognition_times'] = $cog_a;?>
        document.location.href="cognition_quit.php";
        //還要拔上次的紀錄歸零
    } else {
        document.location.href="Topic.php";
    }
}
<?php }else{ ?>
	document.location.href="cognitioncounter.php";
<?php } ?>	
}
function go_math(){
<?php if($math_a_row[1]!=$math_a){ ?>
	if (confirm('要繼續作答上次未提交的題目嗎?')) {
		<?php $_SESSION['math_times'] = $math_a;?>
        document.location.href="cognition.php";
} else {
    if (confirm('重新作答會使上次未送出資料以0分計算,您確定嗎?')) {
    	<?php $_SESSION['math_times'] = $math_a;?>
        document.location.href="math_quit.php";
        //還要拔上次的紀錄歸零
    } else {
        document.location.href="Topic.php";
    }
}
<?php }else{ ?>
	document.location.href="mathcounter.php";
<?php } ?>	
}
</script>
<body>
	<div class="container">
	<div class="left">
  	<img src="img/e.png">
  	</div>
  	<div class="right">
  	<ul>
  	<li><a href="rank.php">排行榜 </a></li>
  	|
  	<li><a href="record.php">紀錄 </a></li>
  	|
    <li><a href="update.php">設定 </a></li>
    |
    <li><a href="logout.php">登出 </a></li>
    </ul>
    </div>
    </div>
    <br/><br/><br/>
	<div style="text-align: center;" class="XX">
		<input type="image" src="img/123.png" onClick="go_math()" width="20%;" height="20%;">
		<input type="image" src="img/chinese.png" onClick="javascript:location.href='chinesecounter.php'" width="20%;" height="20%;">
		<input type="image" src="img/cognition.png" onClick="go_cognition()" width="20%;" height="20%;">
		<input type="image" src="img/clock.png" onClick="javascript:location.href='time.html'" width="20%;" height="20%;">
	</div>
	<div class="im"><img src="img/illustration.png"><div>
</body>
</html>
