<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width;initial-scale=1.0;user-scalable=0;">


<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<style>





body {
     background: #000 url(img/home.png) center center fixed no-repeat;
     
     background-position:center-center;
     -webkit-background-size:cover;
     -moz-background-size:cover;
     -o-background-size:cover;
     background-size:cover;
     overflow:hidden;
     height:auto;
     max-width:100%;
}




.t{
  top:0;
  right:0;
  bottom:0;
  left:0;
  margin:auto;
}
.divcss5-right{
  position: absolute;
  width:40%;
  height: 40%;

  margin: 0 auto; 
} 

input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.container {
    padding: 1%;
}




@media only screen and (min-width: 1281px) and (min-height:1001px) and (max-height:1401px) { /*ipad pro 橫*/
      .t{
        margin-top: 10%;
      }
      .divcss5-right{
        margin-top: 25%;
      }
    }
@media only screen and (min-width:769px) and (max-width: 1280px) and (max-height:1400px) { /*ipad pro 直*/
      .t{
        margin-top: 25%;
      }
      .divcss5-right{
        margin-top: 45%;
      }
    }
@media only screen and (min-width:769px) and (max-width: 1280px) and (min-height:751px) and (max-height:1000px) {/*ipad 橫*/
      .t{
        margin-top: 20%;
      }
      .divcss5-right{
        margin-top: 30%;
      }
    }
@media only screen and (min-width:481px) and (max-width: 768px) and (min-height:1001px) and (max-height:1400px) { /*ipad 直*/
      .t{
        margin-top: 25%;
      }
      .divcss5-right{
        margin-top: 45%;
      }
    }
@media only screen and (min-width:769px) and (max-width: 1280px) and (max-height:500px) {/*iX/Pixel2XL 橫*/
      .t{
        margin-top: 5%;
      }
      .divcss5-right{
        margin-top: 20%;
      }
    }
@media only screen and (max-width: 480px) and (min-height:751px) and (max-height:1000px) {/*iX/Pixel2XL 直*/
      .divcss5-right{
        margin-top: 70%
      }
      .t{
        margin-top: 35%;
      }
    }
@media only screen and (min-width:481px) and (max-width: 768px) and (max-height:500px) { /*i5/SE/6/7/8/6+/7+/8+/Pixel2/Glaxay S5 橫*/
      .t{
        margin-top: 0%;
      }
      .divcss5-right{
        margin-top: 20%;
      }
    }
@media only screen and (max-width: 480px) and (min-height:500px) and (max-height:750px) {/*i5/SE/6/7/8/6+/7+/8+/Pixel2/Glaxay S5 直*/
      .divcss5-right{
        margin-top: 70%
      }
      .t{
        margin-top: 35%;
      }
    }
</style>
</head>
<body>
<header class="htmleaf-header">
<div class="t">
  <img src="img/e.png">
</div>
<div class="divcss5-right">
<form method="post" action="connect.php">
  <div class="container">
    <label for="uname"><b>帳號(信箱)</b></label>
    <input type="email" placeholder="輸入帳號" name="id" required>

    <label for="psw"><b>密碼</b></label>
    <input type="password" placeholder="輸入密碼" name="pw" required>
        
    <button type="submit">登入</button>
  </div>
    <div style="text-align: center;">
    <span class="psw"><a style="color: black; font-weight: bold;" href="CreateAccount.php">註冊</a></span>
    |
    <span class="psw"><a style="color: black; font-weight: bold;" href="ForgetPassword1.php">找回密碼</a></span>
    </div>
</div>
</form>
</div>
</header>
</body>
</html>
