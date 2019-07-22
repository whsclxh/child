<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
}
?>
<?php
include("mysql_connect.php");
$Account=$_SESSION['Account'];
$_SESSION['obtained']=$_POST['obtained'];
$obtained=$_SESSION['obtained'];
$_SESSION['revise']=$_POST['revise'];
$revise=$_SESSION['revise'];
if($_SESSION['obtained'] != null){
     $delete_product="DELETE FROM product_list WHERE product='$obtained' AND Account='$Account'";  //刪除資料
     mysqli_query($link,$delete_product)or die ("無法刪除".mysqli_error()); //執行sql語法
     echo '<meta http-equiv=REFRESH CONTENT=0;url=shelves_list.php>';
}else{
	if($_SESSION['revise']!=null){
		echo '<meta http-equiv=REFRESH CONTENT=0;url=revise.php>';
	}
	else{
		echo "<script>alert('請重新選擇!');</script>";
    	echo '<meta http-equiv=REFRESH CONTENT=0;url=shelves_list.php>';
	}
}
?>