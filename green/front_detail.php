<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
}
$_SESSION['detail']=$_POST['detail'];
if($_SESSION['detail'] == null){
    echo "<script>alert('請重新選擇!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=purchase.php>';
}else{
	echo '<meta http-equiv=REFRESH CONTENT=0;url=detail.php>';
}
?>