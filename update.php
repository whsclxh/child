<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<title>修改資料</title>
<script src="jquery-3.3.1.min.js"></script>
<style type="text/css">
    body{
      margin:0;
      padding:0;
      background: #000 url(img/ModifyData.png) center center fixed no-repeat;
      -moz-background-size: cover;
      background-size: cover;
      height: 100%;
    }
    .all{
    margin-top: 0%;
    width:100%;
    background-image: url(img/Wood.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
    height: 100%;
    }
    @media only screen and (min-width: 1281px) and (min-height:1001px) and (max-height:1401px) { /*ipad pro 橫*/
        .a{
            margin-top: 15%;
        }
    }
    @media only screen and (min-width:769px) and (max-width: 1280px) and (max-height:1400px) { /*ipad pro 直*/
        .all{
            background-size: 1500px 1300px;
        }
        .a{
           margin-top: 50%;
        }
    }
    @media only screen and (min-width:769px) and (max-width: 1280px) and (min-height:751px) and (max-height:1000px) {/*ipad 橫*/
        .all{
            background-size: 1000px 800px;
        }
        .a{
            margin-top: -5%;
        }
    }
    @media only screen and (min-width:481px) and (max-width: 768px) and (min-height:1001px) and (max-height:1400px) { /*ipad 直*/
        .all{
            background-size: 900px 800px;
        }
        .a{
           margin-top: 40%;
        }
    }
    @media only screen and (min-width:769px) and (max-width: 1280px) and (max-height:500px) {/*iX/Pixel2XL 橫*/
        .all{
            background-size: 900px 800px;
        }
        .a{
            margin-top: -65%;
        }
    }
    @media only screen and (max-width: 480px) and (min-height:751px) and (max-height:1000px) {/*iX/Pixel2XL 直*/
        .all{
            background-size: 600px 750px;
        }
        .a{
           margin-top: 10%;
        }
    }
    @media only screen and (min-width:481px) and (max-width: 768px) and (max-height:500px) { /*i5/SE/6/7/8/6+/7+/8+/Pixel2/Glaxay S5 橫*/
        .all{
            background-size: 800px 1700px;
             max-height:100%;
             overflow: scroll;
        }
        .a{
            margin-top: -50%;

        }
    }
    @media only screen and (max-width: 480px) and (min-height:701px) and (max-height:750px) {/*i5/SE/6/7/8/6+/7+/8+/Pixel2/Glaxay S5 直*/ 
        .all{
            background-size: 600px 800px;
        }
        .a{
           margin-top: -15%;
        }
    }
    @media only screen and (max-width: 480px) and (min-height:601px) and (max-height:700px) {/*i6/7/8 直*/ 
        .all{
            background-size: 600px 750px;
        }
        .a{
           margin-top: -45%;
        }
    }
    @media only screen and (max-width: 480px) and (min-height:501px) and (max-height:600px) {/*i SE 直*/ 
        .all{
            background-size: 500px 750px;
        }
        .a{
           margin-top: -85%;
        }
    }
    @media only screen and (min-width:769px) and (max-width: 900px) and (max-height:500px) {/*Pixel2XL 橫*/
        .all{
            background-size: 900px 900px;
            max-height:100%;
             overflow: scroll;
        }
        .a{
            margin-top: -45%;
        }
    }
</style>
<script>
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
        if($("#exampleInputPassword").val()==""){
            alert("你尚未填寫密碼!");
            eval("document.form1['exampleInputPassword'].focus()");    
        }else if($("#exampleInputPasswordAgain").val()==""){
            alert("你未再次輸入密碼!");
            eval("document.form1['exampleInputPasswordAgain'].focus()");       
        }else if($("#exampleInputNickname").val()==""){
            alert("你未再次輸入暱稱!");
            eval("document.form1['exampleInputNickname'].focus()");       
        }else{
            document.form.submit();
        }
    });
 });
  function click(){
    window.open(Topic.php);
  }
</script>
<?php
include("mysql_connect.php");
if($_SESSION['username'] != null){
        //將$_SESSION['username']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        $id = $_SESSION['username'];
        //若以下$id直接用$_SESSION['username']將無法使用
        $sql = "SELECT * FROM list where username='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
        echo "<body>";
        echo "<div class='all'>";
        echo "<form class='form1' name='form' style='margin-left: 30%; margin-right: 30%;' method='post' action='update_finish.php' onclick='return false'>";
        echo "<br/><br/><br/><br/><br/>";
        echo "<div class='a'>";
        echo "<br/>";
        echo "<fieldset>";
        echo "<legend style='text-align:center;'>修改資料</legend>";
        echo "<br/>";
        echo "<div class='form-group'>";
        echo "<label for='exampleInputEmail'>帳號(電子信箱)</label>";
        echo "<div>$row[0]</div>";
        echo "</div>";
        echo "<div class='form-group' name='psw'>";
        echo "<label for='exampleInputPassword'>密碼</label>";
        echo "<input type='password' class='form-control' id='exampleInputPassword' placeholder='至少8碼 至多15碼' name='pw' onblur='yanzheng(this.value)'>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='exampleInputPassword'>再次輸入密碼</label>";
        echo "<input type='password' class='form-control' id='exampleInputPasswordAgain' placeholder='至少8碼 至多15碼' name='pw2' onblur='testpw()'>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='exampleInputNickname'>暱稱</label>";
        echo "<input type='text' class='form-control' id='exampleInputNickname'  placeholder='輸入暱稱' name='nickname' onblur='testnn()'>";
        echo "</div>";
        echo "</fieldset>";
        echo "<div>";
        echo "<button class='btn btn-primary' onclick=\"javascript:location.href='Topic.php'\">返回</button>";
        echo "    ";
        echo "<button type='submit' class='btn btn-primary' id='button'>提交</button>";
        echo "</div>";
        echo "</div>";
        echo "</form>";
        echo "</div>";
        echo "</body>";
}
else{   
        echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
?>