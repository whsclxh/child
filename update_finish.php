<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include 'mysql_connect.php';
$link = connect_to_db();

$id = $_SESSION['username'];
$pw = $_POST['pw'];
$nickname = $_POST['nickname'];
        
//紅色字體為判斷密碼是否填寫正確
if($_SESSION['username'] != null && $pw != null){
        $id = $_SESSION['username'];
    
        //更新資料庫資料語法
        $sql = "update users set password='$pw', nickname='$nickname' where username='$id'";
        if(mysqli_query($link, $sql)){
                echo "<script>alert('修改成功!');</script>";
                echo '<meta http-equiv=REFRESH CONTENT=2;url=Topic.php>';
                unset($_SESSION['username']);
        }
        else {   
                echo "<script>alert('修改失敗QAQ,請洽服務人員!');</script>";
                echo '<meta http-equiv=REFRESH CONTENT=2;url=Topic.php>';
        }
}
// else if($pw == null || $pw2 == null || $pw != $pw2) {
//         echo "<script>alert('兩次密碼輸入不同或密碼為空!');</script>";
//         echo '<meta http-equiv=REFRESH CONTENT=2;url=update.php>';
// }
else {
        echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Topic.php>';
}

mysqli_close($link);

?>
