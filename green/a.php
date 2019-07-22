<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.html>';
}
?>
<?php
include("mysql_connect.php");
$Account=$_SESSION['Account'];

$list = "SELECT * FROM shopping_cart where Account = '$Account'";
$result = mysqli_query($link,$list);
$listr = @mysqli_fetch_row($result);

$Product_number=$listr[1];
$TotalAmount=0;
$final=array();

for($x=3;$x<$Product_number+3;$x++){
    $final[$x-3]=$listr[$x];
}

$cancel=$_POST['cancel'];
if($cancel!=null){
unset($final[$cancel]);
$final=array_values($final);
$Product_number-=1;
$cart="update shopping_cart set Amount='$Product_number',MerchantTradeNo='0',ItemName1='$final[0]',ItemName2='$final[1]',ItemName3='$final[2]',ItemName4='$final[3]',ItemName5='$final[4]',ItemName6='$final[5]',ItemName7='$final[6]',ItemName8='$final[7]',ItemName9='$final[8]',ItemName10='$final[9]',ItemName11='$final[10]',ItemName12='$final[11]',ItemName13='$final[12]',ItemName14='$final[13]',ItemName15='$final[14]',ItemName16='$final[15]',ItemName17='$final[16]',ItemName18='$final[17]',ItemName19='$final[18]',ItemName20='$final[19]'";
	if(mysqli_query($link,$cart)){
       if($Product_number==0){
        echo "<script>alert('請至少選擇一樣商品再前往購物車');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=purchase.php>';
       }else{
        echo '<meta http-equiv=REFRESH CONTENT=0;url=shopping_cart.php>';
       }        
	}else{
       echo "<script>alert('failed');</script>";
       echo '<meta http-equiv=REFRESH CONTENT=0;url=purchase.php>';
    }
}else{
	echo "<script>alert('failed');</script>";
	echo '<meta http-equiv=REFRESH CONTENT=0;url=purchase.php>';
}

?>