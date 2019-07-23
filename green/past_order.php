<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
}
?>
<?php
include("mysql_connect.php");
$Account = $_SESSION['Account'];
$order = $_POST['order'];
$_SESSION['order'] = $_POST['order'];
if($_SESSION['order'] == null){
    echo "<script>alert('請重新選擇!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=record.php>';
}else{
	echo '<meta http-equiv=REFRESH CONTENT=0;url=order.php>';
}
?>