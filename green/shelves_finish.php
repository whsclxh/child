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
$Product=$_POST['Product'];
$Brand=$_POST['Brand'];
$Texture=$_POST['Texture'];
$Specification=$_POST['Specification'];
$Cost=$_POST['Cost'];
$Amount=$_POST['Amount'];
$Weight=$_POST['Weight'];
date_default_timezone_set('Asia/Taipei');
$the_time=date("Y/m/d H:i:s");

$PL = "SELECT * FROM product_list WHERE Account='$Account' ORDER BY cardinal+0 DESC";
$result = mysqli_query($link,$PL);
$row = @mysqli_fetch_row($result);
if($row[0]==null){
	$cardinal=1;
	$insert="insert into product_list(cardinal,Account,Product,Brand,Texture,Specification,Cost,Amount,Weight,The_Date)values
	('$cardinal','$Account','$Product','$Brand','$Texture','$Specification','$Cost','$Amount','$Weight','$the_time')";
	if(mysqli_query($link,$insert))
	echo '<meta http-equiv=REFRESH CONTENT=0;url=shelves_list.php>';
	else die ("無法添加".mysqli_error());
}else{
	$cardinal=$[0]+1;
	$insert="insert into product_list(cardinal,Account,Product,Brand,Texture,Specification,Cost,Amount,Weight,The_Date)values
	('$cardinal','$Account','$Product','$Brand','$Texture','$Specification','$Cost','$Amount','$Weight','$the_time')";
	if(mysqli_query($link,$insert))
	echo '<meta http-equiv=REFRESH CONTENT=0;url=shelves_list.php>';
	else die ("無法添加".mysqli_error());
}
?>