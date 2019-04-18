<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include 'mysql_connect.php';

//$link = connect_to_db();

$id = $_POST['id'];
$pw = $_POST['pw'];
// $pw2 = $_POST['pw2'];
$nickname = $_POST['nickname'];
$sex = $_POST['sex'];
$age = $_POST['age'];

//判斷帳號密碼是否為空值
$sql = "SELECT * FROM users where username = '$id'";
$result = mysqli_query($link,$sql);

$row = @mysqli_fetch_row($result);
if($row[0] == $id){
        echo "<script>alert('此帳號已註冊過!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=2;url=CreateAccount.php>';       
}
else if($id != null && $pw != null){
        //新增資料進資料庫語法
        $sql = "insert into users (username, password, nickname, sex, age, math_times, chinese_times, cognition_times, clock_times, total_times, math_average, chinese_average, cognition_average, clock_average ,total_average) values ('$id', '$pw', '$nickname', '$sex', '$age', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
        if(mysqli_query($link,$sql)){
                echo "<script>alert('新增成功,請登入!');</script>";
                echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
        }
        else{
                echo "<script>alert('註冊失敗QAQ,請洽服務人員');</script>";
                echo '<meta http-equiv=REFRESH CONTENT=2;url=CreateAccount.php>';
        }
}
else{
        echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
mysqli_close($link);

?>
