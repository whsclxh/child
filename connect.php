<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include 'mysql_connect.php';
$id = $_POST['id'];
$pw = $_POST['pw'];

$link = connect_to_db();
//搜尋資料庫資料
$sql = "SELECT * FROM users where username = '$id'";
$result = mysqli_query($link, $sql);
$row = @mysqli_fetch_row($result);
mysqli_close($link);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '<meta http-equiv=REFRESH CONTENT=1;url=Topic.php>';
}
else
{
        echo '<meta http-equiv=REFRESH CONTENT=1;url=Home.php>';
        echo "<script>alert('帳號不存在或密碼錯誤');</script>";
}
?>
