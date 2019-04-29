<?php session_start(); ?>
<?php
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.php>';
}
$_SESSION['cognition_times']=$_POST['cog_data'];
if($_SESSION['cognition_times'] == null){
    echo "<script>alert('請重新選擇!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Topic.php>';
}else{
	echo '<meta http-equiv=REFRESH CONTENT=0;url=cog_past_record.php>';
}
?>