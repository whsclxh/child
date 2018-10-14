<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>忘記密碼</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<style type="text/css">
	body {
      margin:0;
      padding:0;
      background: #000 url(img/修改資料頁.png) center center fixed no-repeat;
      -moz-background-size: cover;
      background-size: cover;
      height: 100%;
    }
    .a{
    	margin-top: 0%;
    	width:100%;
    	background-image: url(img/木板.png);
    	background-repeat: no-repeat;
    	background-size: cover;
    	background-position: center;
    	position: relative;
    	height: 100%;
    }
    .a .i .g{
    	height: 35%;
    	width: 17.5%;
    	margin-left: 15%;
    }
    .a .i .b{
    	float: right;
    	height: 35%;
    	width: 17.5%;
    	margin-right: 15%;
    }
    .form-group{
    	margin:0px auto; 
    	margin-right: 30%;
    	margin-left: 30%;
    }
    @media only screen and (min-width: 1281px) and (min-height:1001px) and (max-height:1401px) { /*ipad pro 橫*/
    	.a{
    	margin-top:10%;
   		}
		
    }
	@media only screen and (min-width:769px) and (max-width: 1280px) and (max-height:1400px) { /*ipad pro 直*/
		.a{
			background-size: 1400px;
			margin-top:25%;
		}
		.a .i .g{
			margin-left: 5%
		}
		.a .i .b{
			margin-right: 5%
		}
    }
	@media only screen and (min-width:769px) and (max-width: 1280px) and (min-height:751px) and (max-height:1000px) {/*ipad 橫*/
		.a{
			margin-top: 10%;
		}
		.a .i .g{
			margin-left: 5%
		}
		.a .i .b{
			margin-right: 5%
		}
    }
	@media only screen and (min-width:481px) and (max-width: 768px) and (min-height:1001px) and (max-height:1400px) { /*ipad 直*/
		.a{
			background-size: 1000px;
			margin-top:25%;
		}
		.a .i .g{
			margin-left: 5%
		}
		.a .i .b{
			margin-right: 5%
		}
    }
	@media only screen and (min-width:769px) and (max-width: 1280px) and (max-height:500px) {/*iX/Pixel2XL 橫*/
		.a{
			background-size: 1000px;
			margin-top:0%;
		}
		.a .i .g{
			margin-left: 5%
		}
		.a .i .b{
			margin-right: 5%
		}
    }
	@media only screen and (max-width: 480px) and (min-height:751px) and (max-height:1000px) {/*iX/Pixel2XL 直*/
		.a{
			background-size: 600px 500px;
			margin-top:40%;
		}
		.a .i .g{
			margin-left: 1%
		}
		.a .i .b{
			margin-right: 1%
		}
    }
	@media only screen and (min-width:481px) and (max-width: 768px) and (max-height:500px) { /*i5/SE/6/7/8/6+/7+/8+/Pixel2/Glaxay S5 橫*/
		.a{
			background-size: 900px;
			margin-top:0%;
		}
		.a .i .g{
			margin-left: 5%
		}
		.a .i .b{
			margin-right: 5%
		}
    }
	@media only screen and (max-width: 480px) and (min-height:500px) and (max-height:750px) {/*i5/SE/6/7/8/6+/7+/8+/Pixel2/Glaxay S5 直*/ 
		.a{
			background-size: 650px 500px;
			margin-top:40%;
		}
		.a .i .g{
			margin-left: 1%
		}
		.a .i .b{
			margin-right: 1%
		}
    }
    @media only screen and (max-width: 480px) and (min-height:501px) and (max-height:600px) {/*i SE 直*/ 
        .a{
			background-size: 500px 500px;
			margin-top:40%;
		}
		.a .i .g{
			margin-left: 1%
		}
		.a .i .b{
			margin-right: 1%
		}
    }
</style>
<script src="jquery-3.3.1.min.js"></script>
<script>
    function checkform(){
		var mail=document.getElementById("email").value;
		if(mail!=""){
			document.form1.submit();
		}
		else{
			alert("請確認是否已填寫");
		}
	}
</script>
<body>
	<div class="a">
	<form name="form1" method="post" action="sendamail.php" id="form1">
		<div class="form-group">
		<br/><br/><br/><br/><br/>
      	<h2 for="exampleInputEmail" style="text-align: center; font-size: 3vmin;">請輸入帳號(電子信箱)</h2>
      	<br/>
      	<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="輸入帳號(信箱)" name="email">
    	</div>
	</form>
		<br/>
		<div align="center">
		<button class="btn btn-primary" onclick="javascript:location.href='Home.php'">返回首頁</button>
    	<button class="btn btn-primary" type="submit" id="button" onclick="checkform()">提交</button>
    	<br/><br/><br/>
    </div>
    <div class="i">
    		<img class="g" src="img/GIRL.png">
    		<img class="b" src="img/BOY.png">
    </div>
  	</div>
</body>
</html>
