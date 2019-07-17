<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include 'mysql_connect.php';
//$link = connect_to_db();

$id = $_SESSION['Account'];
$Email=$_POST['Email'];
$Password = $_POST['Password'];
$Phone=$_POST['Phone'];
$Name=$_POST['Uname'];
$Gender=$_POST['sex'];
$city=$_POST['city'];
$town=$_POST['town'];
$Zipcode=$_POST['zipcode'];
$Address=$_POST['Address'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$Address=$city.$town.$Address;
$Birth=$year.'.'.$month.'.'.$day;        
//紅色字體為判斷密碼是否填寫正確
if($_SESSION['Account'] != null && $Password != null){
        $id = $_SESSION['Account'];
    
        //更新資料庫資料語法
        $sql = "update user set Email='$Email',Password='$Password',Phone='$Phone',Name='$Name',Gender='$Gender',Address='$Address',Zipcode='$Zipcode',Birth='$Birth' where Account='$id'";
        if(mysqli_query($link, $sql)){
                echo "<script>alert('修改成功!');</script>";
                echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.html>';
                unset($_SESSION['Account']);
        }
        else {   
                echo "<script>alert('修改失敗,請洽服務人員!');</script>";
                echo '<meta http-equiv=REFRESH CONTENT=2;url=Topic.php>';
        }
}
// else if($pw == null || $pw2 == null || $pw != $pw2) {
//         echo "<script>alert('兩次密碼輸入不同或密碼為空!');</script>";
//         echo '<meta http-equiv=REFRESH CONTENT=2;url=update.php>';
// }
else {
        echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Topic.html>';
}


?>
