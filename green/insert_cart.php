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

$list = "SELECT * FROM shopping_cart where Account = '$Account'";
$result = mysqli_query($link,$list);
$listr = @mysqli_fetch_row($result);

$PL = "SELECT * FROM product_list ORDER BY cost+0 DESC";
$result = mysqli_query($link,$PL);
$row = mysqli_fetch_array($result);

$Product_number=$listr[1];
$TotalAmount=0;
$final=array();
for($x=3;$x<$Product_number+3;$x++){
    $final[$x-3]=$listr[$x];
}
$insert=$_POST['insert'];
array_push($final,$insert);
if($listr==null){
  $cart="insert into shopping_cart (Account,Amount,MerchantTradeNo,
               ItemName1,ItemName2,ItemName3,ItemName4,ItemName5,ItemName6,ItemName7,ItemName8,ItemName9,ItemName10,
               ItemName11,ItemName12,ItemName13,ItemName14,ItemName15,ItemName16,ItemName17,ItemName18,ItemName19,ItemName20)
          values('$Account','$Product_number','0','$ItemName[0]','$ItemName[1]','$ItemName[2]','$ItemName[3]','$ItemName[5]','$ItemName[5]','$ItemName[6]','$ItemName[7]','$ItemName[8]','$ItemName[9]','$ItemName[10]','$ItemName[11]','$ItemName[12]','$ItemName[13]','$ItemName[14]','$ItemName[15]','$ItemName[16]','$ItemName[17]','$ItemName[18]','$ItemName[19]')";
if(mysqli_query($link,$cart)){
        echo '<meta http-equiv=REFRESH CONTENT=0;url=purchase.php>';
}else{
        echo "<script>alert('failed');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
 }
}
if($insert!=null){
$Product_number+=1;
$cart="update shopping_cart set Amount='$Product_number',ItemName1='$final[0]',MerchantTradeNo='0',ItemName2='$final[1]',ItemName3='$final[2]',ItemName4='$final[3]',ItemName5='$final[4]',ItemName6='$final[5]',ItemName7='$final[6]',ItemName8='$final[7]',ItemName9='$final[8]',ItemName10='$final[9]',ItemName11='$final[10]',ItemName12='$final[11]',ItemName13='$final[12]',ItemName14='$final[13]',ItemName15='$final[14]',ItemName16='$final[15]',ItemName17='$final[16]',ItemName18='$final[17]',ItemName19='$final[18]',ItemName20='$final[19]'";
	if(mysqli_query($link,$cart)){
       echo '<meta http-equiv=REFRESH CONTENT=0;url=purchase.php>';
	}else{
       echo "<script>alert('failed');</script>";
       echo '<meta http-equiv=REFRESH CONTENT=0;url=Topic.php>';
    }
}else{
	echo "<script>alert('failed');</script>";
	echo '<meta http-equiv=REFRESH CONTENT=0;url=Topic.php>';
}

?>