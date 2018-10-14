<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>申請帳號</title>
  <style type="text/css">
    body {
     background: #000 url(img/account.png) center center fixed
     no-repeat;
     background-position:center center;
     -webkit-background-size:cover;
     -moz-background-size:cover;
     -o-background-size:cover;
     background-size:cover;
     height:100%;
     overflow:hidden;
    }


    body{
    height:100%;
    } 

    
    body form{
      margin-right: 30%;
      margin-top: 5%;
      margin-left: 30%;
    }
  @media only screen and (min-width: 1281px) and (min-height:1001px) and (max-height:1401px) { /*ipad pro 橫*/
    body form{
      margin-top: 15%;
    }
    }
  @media only screen and (min-width:769px) and (max-width: 1280px) and (max-height:1400px) { /*ipad pro 直*/
    body form{
      margin-top: 30%;
    }
    }
  @media only screen and (min-width:769px) and (max-width: 1280px) and (min-height:751px) and (max-height:1000px) {/*ipad 橫*/
    body form{
      margin-top: 10%;
    }
    }
  @media only screen and (min-width:481px) and (max-width: 768px) and (min-height:1001px) and (max-height:1400px) { /*ipad 直*/
    body form{
      margin-top: 30%;
    }
    }
  @media only screen and (min-width:769px) and (max-width: 1280px) and (max-height:500px) {/*iX/Pixel2XL 橫*/
    body form{
      margin-top: 3%;
    }
    }
  @media only screen and (max-width: 480px) and (min-height:751px) and (max-height:1000px) {/*iX/Pixel2XL 直*/
    body form{
      margin-top: 20%;
      margin-right: 10%;
      margin-left: 10%;
    }
    }
  @media only screen and (min-width:481px) and (max-width: 768px) and (max-height:500px) { /*i5/SE/6/7/8/6+/7+/8+/Pixel2/Glaxay S5 橫*/
    body form{
      margin-top: 3%;
    }
    }
  @media only screen and (max-width: 480px) and (min-height:500px) and (max-height:750px) {/*i5/SE/6/7/8/6+/7+/8+/Pixel2/Glaxay S5 直*/ 
    body form{
      margin-top: 15%;
      margin-right: 10%;
      margin-left: 10%;
    }
    }  
  </style>
  <script src="jquery-3.3.1.min.js"></script>
  <script>
    function isEmail(strEmail) {
    var em = document.getElementById('exampleInputEmail').value;
    if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
      return true;
    else
    alert("請輸入正確的郵件型式!");
    document.getElementById('exampleInputEmail').value="";
    }
    function yanzheng(val){
    var pwd = document.getElementById('exampleInputPassword').value;
    var zz=/^([0-9a-zA-Z])+$/; 
    if(pwd.length!=0){
      if(!zz.test(val)){
      alert('密碼只能為數字英文與&');
      }
      else{
        if (pwd.length>15||pwd.length<8){
        alert("密碼長度為8~15碼");
        document.getElementById('exampleInputPassword').value="";
        return false;
      }
    }
}
}
  function testpw(){
    var pwd = document.getElementById('exampleInputPassword').value;
    var pwd2 = document.getElementById('exampleInputPasswordAgain').value;
    if(pwd2.length!=0){
      if(pwd!=pwd2){
        alert('二次密碼輸入不同!');
        document.getElementById('exampleInputPasswordAgain').value="";
        return false;
      }
    }
  }
  function testnn(){
    var nick = document.getElementById('exampleInputNickname').value;
    if(nick.length>8||pwd.length<1){
      alert('暱稱長度為8字以內');
      document.getElementById('exampleInputNickname').value="";
    }
  }
  $(document).ready(function(){
    $("#button").click(function(){
        if($("#exampleInputEmail").val()==""){
            alert("你尚未填寫帳號!");
            eval("document.form1['exampleInputEmail'].focus()");       
        }else if($("#exampleInputPassword").val()==""){
            alert("你尚未填寫密碼!");
            eval("document.form1['exampleInputPassword'].focus()");    
        }else if($("#exampleInputPasswordAgain").val()==""){
            alert("你未再次輸入密碼!");
            eval("document.form1['exampleInputPasswordAgain'].focus()");       
        }else if($("#exampleInputNickname").val()==""){
            alert("你未再次輸入暱稱!");
            eval("document.form1['exampleInputNickname'].focus()");       
        }else{
            document.form1.submit();
        }
    });
 });
  </script>
</head>
<body>
	<form name="form1" method="post" action="register_finish.php" onclick="return false">
  <fieldset>
    <legend style="color: black; font-weight: bold;">建立帳號</legend>
    <div class="form-group">
      <label for="exampleInputEmail">帳號(電子信箱)</label>
      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="輸入帳號(信箱)" name="id" onblur='isEmail(this.value)'>
      <div style="color: red">請務必填寫正確的信箱，以便忘記密碼時使用!</div>
    </div>
    <div class="form-group" name="psw">
      <label for="exampleInputPassword">密碼</label>
      <input type="password" class="form-control" id="exampleInputPassword" placeholder="至少8碼 至多15碼" name="pw" onblur='yanzheng(this.value)'>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword">再次輸入密碼</label>
      <input type="password" class="form-control" id="exampleInputPasswordAgain" placeholder="至少8碼 至多15碼" name="pw2" onblur='testpw()'>
    </div>
    <div class="form-group">
      <label for="exampleInputNickname">暱稱</label>
      <input type="text" class="form-control" id="exampleInputNickname"  placeholder="輸入暱稱" name="nickname" onblur='testnn()'>
    </div>
    <div class="form-group">
      <label for="sex">性別</label>
      <select class="form-control" id="sex" name="sex">
        <option>男</option>
        <option>女</option>
        
      </select>
    </div>
    <div class="form-group">
      <label for="age">年齡</label>
      <input type="number" class="form-control" id="age" name="age" value=7>
      <!-- <select class="form-control" id="age" name="age">
        <option>小於5歲</option>
        <option>5歲</option>
        <option>6歲</option>
        <option selected>7歲</option>
        <option>8歲</option>
        <option>9歲</option>
        <option>10歲</option>
        <option>11歲</option>
        <option>12歲</option>
        <option>大於12歲</option>
      </select> -->
    </div>
    <fieldset class="form-group">
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="yes" checked="true">
          同意條款
        </label>
      </div>
    </fieldset>
  </fieldset>
  <div>
    <button class="btn btn-primary" onclick="javascript:location.href='Home.php'">返回首頁</button>
    <button type="submit" class="btn btn-primary" id="button">提交</button>
    </div>
</form>
    
</body>
</html>
