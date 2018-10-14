<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php 
include("mysql_connect.php");
 ?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
	body{
	  margin:0;
      padding:0;
      background: #000 url(img/選單.png) center center fixed no-repeat;
      -moz-background-size: cover;
      background-size: cover;
      height: 100%;
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
<body>
	<div class="container">
	<div class="left">
  	<img src="img/兒童e樂園.png">
  	</div>
  	<div class="right">
  	<ul>
  	<li><a href="成就.php">成就 </a></li>
  	|
    <li><a href="update.php">設定 </a></li>
    |
    <li><a href="logout.php">登出 </a></li>
    </ul>
    </div>
    </div>
    <br/><br/><br/>
	<div style="text-align: center;" class="XX">
		<input type="image" src="img/123.png" onClick="javascript:location.href='數學.html'" width="20%;" height="20%;">
		<input type="image" src="img/ㄅㄆㄇ.png" onClick="javascript:location.href='國語.html'" width="20%;" height="20%;">
		<input type="image" src="img/認知.png" onClick="javascript:location.href='認知.html'" width="20%;" height="20%;">
		<input type="image" src="img/clock.png" onClick="javascript:location.href='時間.html'" width="20%;" height="20%;">
	</div>
	<div class="im"><img src="img/主題頁插圖.png"><div>
</body>
</html>