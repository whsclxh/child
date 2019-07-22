<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.html>';
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/update.css">
<link rel="stylesheet" type="text/css" href="css/intlTelInput.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">
<link rel="stylesheet" type="text/css" href="css/city.css">
<link rel="stylesheet" type="text/css" href="css/body.css">
<script src="js/intlTelInput.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery.twzipcode.min.js"></script>
<script src="js/comfirm.js"></script>
<title>修改資料</title>
<?php
include 'mysql_connect.php';
#$link = connect_to_db();
if($_SESSION['Account'] != null){
        //將$_SESSION['username']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        $id = $_SESSION['Account'];
        //若以下$id直接用$_SESSION['username']將無法使用
        $sql = "SELECT * FROM user where Account='$id'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_row($result);
?>
<body>
    <div class='all'>
        <form class='form1' name='form1' style='margin-left: 30%; margin-right: 30%;' method='post' action='update_finish.php' onclick='return false'>
            <div class='a'>
                <br/>
                <fieldset>
                    <legend style='text-align:center;'>修改資料</legend>
                    <br/>
                    <div class='form-group'>
                        <label>帳號</label>
                        <div><?php echo $row[0]; ?></div>
                    </div>
                    <div class='form-group'>
                        <label><span style="color: red;">*</span>信箱</label>
                        <input type='email' class='form-control' id='Email'  placeholder='輸入信箱' name='Email' onblur='testnn()' <?php echo "value='$row[1]'";?>>
                    </div>
                    <div class='form-group' name='psw'>
                        <label><span style="color: red;">*</span>密碼</label>
                        <input type='password' class='form-control' id='Password' placeholder='至少8碼 至多15碼' name='Password' onblur='yanzheng(this.value)'>
                    </div>
                    <div class='form-group'>
                        <label><span style="color: red;">*</span>再次輸入密碼</label>
                        <input type='password' class='form-control' id='PasswordAgain' placeholder='至少8碼 至多15碼' name='PasswordAgain' onblur='testpw()'>
                    </div>
                    <div class="form-group">
                        <label><span style="color: red;">*</span>姓名</label>
                        <input type="text" class="form-control" id="Uname" placeholder="輸入姓名" name="Uname">
                    </div>
                    <div class="form-group">
                        <label><span style="color: red;">*</span>手機</label>
                        <input id="Phone" name="Phone" type="tel" class="form-control" <?php echo "value='$row[3]'";?>>
                        <script type="text/javascript">
                            var input = document.querySelector("#Phone");
                            window.intlTelInput(input, {
                            utilsScript: "js/utils.js",
                            });
                        </script>
                    </div>
                    <div class="form-group">
                        <label><span style="color: red;">*</span>性別</label>
                        <select class="form-control" id="sex" name="sex" <?php echo "value='$row[4]'";?>>
                            <option value="M">男</option>
                            <option value="F">女</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><span style="color: red;">*</span>地址</label>
                        <div id="zipcode3">
                        <div class="f3" data-role="county"></div>
                        <div class="f4" data-role="district"></div>
                        </div>
                        <input name="Address" id="Address" type="text">
                        <script>
                            $("#zipcode3").twzipcode({
                            "zipcodeIntoDistrict": true,
                            "css": ["city form-control", "town form-control"],
                            "countyName": "city", // 指定城市 select name
                            "districtName": "town" // 指定地區 select name
                            });
                        </script>
                     </div>
                     <div class="form-group">
      <label><span style="color: red;">*</span>生日</label>
      <div>
      <div class="f4">
        <select name="year" id="year" class="form-control">
          <option value="0">請選擇</option>
          <option value="1919">西元1919年</option>
          <option value="1920">西元1920年</option>
          <option value="1921">西元1921年</option>
          <option value="1922">西元1922年</option>
          <option value="1923">西元1923年</option>
          <option value="1924">西元1924年</option>
          <option value="1925">西元1925年</option>
          <option value="1926">西元1926年</option>
          <option value="1927">西元1927年</option>
          <option value="1928">西元1928年</option>
          <option value="1929">西元1929年</option>
          <option value="1930">西元1930年</option>
          <option value="1931">西元1931年</option>
          <option value="1932">西元1932年</option>
          <option value="1933">西元1933年</option>
          <option value="1934">西元1934年</option>
          <option value="1935">西元1935年</option>
          <option value="1936">西元1936年</option>
          <option value="1937">西元1937年</option>
          <option value="1938">西元1938年</option>
          <option value="1939">西元1939年</option>
          <option value="1940">西元1940年</option>
          <option value="1941">西元1941年</option>
          <option value="1942">西元1942年</option>
          <option value="1943">西元1943年</option>
          <option value="1944">西元1944年</option>
          <option value="1945">西元1945年</option>
          <option value="1946">西元1946年</option>
          <option value="1947">西元1947年</option>
          <option value="1948">西元1948年</option>
          <option value="1949">西元1949年</option>
          <option value="1950">西元1950年</option>
          <option value="1951">西元1951年</option>
          <option value="1952">西元1952年</option>
          <option value="1953">西元1953年</option>
          <option value="1954">西元1954年</option>
          <option value="1955">西元1955年</option>
          <option value="1956">西元1956年</option>
          <option value="1957">西元1957年</option>
          <option value="1958">西元1958年</option>
          <option value="1959">西元1959年</option>
          <option value="1960">西元1960年</option>
          <option value="1961">西元1961年</option>
          <option value="1962">西元1962年</option>
          <option value="1963">西元1963年</option>
          <option value="1964">西元1964年</option>
          <option value="1965">西元1965年</option>
          <option value="1966">西元1966年</option>
          <option value="1967">西元1967年</option>
          <option value="1968">西元1968年</option>
          <option value="1969">西元1969年</option>
          <option value="1970">西元1970年</option>
          <option value="1971">西元1971年</option>
          <option value="1972">西元1972年</option>
          <option value="1973">西元1973年</option>
          <option value="1974">西元1974年</option>
          <option value="1975">西元1975年</option>
          <option value="1976">西元1976年</option>
          <option value="1977">西元1977年</option>
          <option value="1978">西元1978年</option>
          <option value="1979">西元1979年</option>
          <option value="1980">西元1980年</option>
          <option value="1981">西元1981年</option>
          <option value="1982">西元1982年</option>
          <option value="1983">西元1983年</option>
          <option value="1984">西元1984年</option>
          <option value="1985">西元1985年</option>
          <option value="1986">西元1986年</option>
          <option value="1987">西元1987年</option>
          <option value="1988">西元1988年</option>
          <option value="1989">西元1989年</option>
          <option value="1990">西元1990年</option>
          <option value="1991">西元1991年</option>
          <option value="1992">西元1992年</option>
          <option value="1993">西元1993年</option>
          <option value="1994">西元1994年</option>
          <option value="1995">西元1995年</option>
          <option value="1996">西元1996年</option>
          <option value="1997">西元1997年</option>
          <option value="1998">西元1998年</option>
          <option value="1999">西元1999年</option>
          <option value="2000">西元2000年</option>
          <option value="2001">西元2001年</option>
          <option value="2002">西元2002年</option>
          <option value="2003">西元2003年</option>
          <option value="2004">西元2004年</option>
          <option value="2005">西元2005年</option>
          <option value="2006">西元2006年</option>
          <option value="2007">西元2007年</option>
          <option value="2008">西元2008年</option>
          <option value="2009">西元2009年</option>
        </select>
      </div>
      <div class="f4">
        <select name="month" id="month" class="form-control">
          <option value="0">請選擇</option>
          <option value="1">1月</option>
          <option value="2">2月</option>
          <option value="3">3月</option>
          <option value="4">4月</option>
          <option value="5">5月</option>
          <option value="6">6月</option>
          <option value="7">7月</option>
          <option value="8">8月</option>
          <option value="9">9月</option>
          <option value="10">10月</option>
          <option value="11">11月</option>
          <option value="12">12月</option>
        </select>
      </div>
      <div class="f4">
        <select name="day" id="day" class="form-control">
          <option value="0">請選擇</option>
          <option value="1">1日</option>
          <option value="2">2日</option>
          <option value="3">3日</option>
          <option value="4">4日</option>
          <option value="5">5日</option>
          <option value="6">6日</option>
          <option value="7">7日</option>
          <option value="8">8日</option>
          <option value="9">9日</option>
          <option value="10">10日</option>
          <option value="11">11日</option>
          <option value="12">12日</option>
          <option value="13">13日</option>
          <option value="14">14日</option>
          <option value="15">15日</option>
          <option value="16">16日</option>
          <option value="17">17日</option>
          <option value="18">18日</option>
          <option value="19">19日</option>
          <option value="20">20日</option>
          <option value="21">21日</option>
          <option value="22">22日</option>
          <option value="23">23日</option>
          <option value="24">24日</option>
          <option value="25">25日</option>
          <option value="26">26日</option>
          <option value="27">27日</option>
          <option value="28">28日</option>
          <option value="29">29日</option>
          <option value="30">30日</option>
          <option value="31">31日</option>
        </select>
      </div>
      </div>
    </div>
                </fieldset>
                <br>
                <div>
                    <button class='btn btn-primary' onclick="javascript:location.href='purchase.php'">返回</button>
                        
                    <button type='submit' class='btn btn-primary' id='button' name="button">提交</button>
                </div>
            </div>
        </form>
    </div>
</body>
<?php
}
else{   
        echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.php>';
}
mysqli_close($link);
?>
