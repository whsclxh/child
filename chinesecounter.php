<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");
$id = $_SESSION['username'];
$sql = "SELECT * FROM users where username = '$id'";
$result = mysqli_query($qaq,$sql);
$row = @mysqli_fetch_row($result);
		$a=$row[6]+1;
	$sql2 = "update users set chinese_times='$a' where username='$id'";
	if(mysqli_query($qaq,$sql2)){
    	echo "<script>alert('這是你第'+$a+'次練習本大題');</script>";
    	header("REFRESH:1;url=chinese.html");
    }else{   
    	echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
    	echo '<meta http-equiv=REFRESH CONTENT=2;url=Topic.php>';
    }
?>