<?php session_start(); ?>
<?php
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.php>';
}
$_SESSION['math_times']=$_POST['math_data'];
if($_SESSION['math_times'] == null){
    echo "<script>alert('請重新選擇!');</script>";
}else{
	echo '<meta http-equiv=REFRESH CONTENT=0;url=math_past_record.php>';
}
?>