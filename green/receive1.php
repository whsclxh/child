<?php session_start(); ?>
<?php
require_once 'ECPay.Payment.Integration.php';
include("mysql_connect.php");
define( 'ECPay_MerchantID', '2000132' );
define( 'ECPay_HashKey', '5294y06JbISpM5x9' );
define( 'ECPay_HashIV', 'v77hoKGq4kWxNNIS' );
$Account=$_SESSION['Account'];
$CustomField1=$_POST['CustomField1'];
$CustomField2=$_POST['CustomField2'];
$CustomField3=$_POST['CustomField3'];
$CustomField4=$_POST['CustomField4'];
$MerchantID=$_POST['MerchantID'];
$MerchantTradeNo=$_POST['MerchantTradeNo'];
$PaymentDate=$_POST['PaymentDate'];
$PaymentType=$_POST['PaymentType'];
$PaymentTypeChargeFee=$_POST['PaymentTypeChargeFee'];
$RtnCode=$_POST['RtnCode'];
$RtnMsg=$_POST['RtnMsg'];
$SimulatePaid=$_POST['SimulatePaid'];
$StoreID=$_POST['StoreID'];
$TradeAmt=$_POST['TradeAmt'];
$TradeDate=$_POST['TradeDate'];
$TradeNo=$_POST['TradeNo'];

// 重新整理回傳參數。
$arParameters = $_POST;
foreach ($arParameters as $keys => $value) {
    if ($keys != 'CheckMacValue') {
        if ($keys == 'PaymentType') {
            $value = str_replace('_CVS', '', $value);
            $value = str_replace('_BARCODE', '', $value);
            $value = str_replace('_CreditCard', '', $value);
        }
        if ($keys == 'PeriodType') {
            $value = str_replace('Y', 'Year', $value);
            $value = str_replace('M', 'Month', $value);
            $value = str_replace('D', 'Day', $value);
        }
        $arFeedback[$keys] = $value;
    }
}
$PL = "SELECT * FROM paylist WHERE Account='$Account' ORDER BY cardinal+0 DESC";
$result = mysqli_query($link,$PL);
$row = @mysqli_fetch_row($result);
// 計算出 CheckMacValue
$CheckMacValue = ECPay_CheckMacValue::generate( $arParameters, ECPay_HashKey, ECPay_HashIV );
if ( $_POST['RtnCode'] =='1' && $CheckMacValue == $_POST['CheckMacValue'] ){    
    if($row[1]==null){
        $cardinal=1;
        $update = "insert into paylist(Account,cardinal,CheckMacValue, CustomField1, CustomField2, CustomField3, CustomField4, MerchantID, MerchantTradeNo, PaymentDate, PaymentType, PaymentTypeChargeFee, RtnCode, RtnMsg, SimulatePaid, StoreID, TradeAmt, TradeDate, TradeNo) values('$Account','$cardinal','$CheckMacValue','$CustomField1','$CustomField2','$CustomField3','$CustomField4','$MerchantID','$MerchantTradeNo','$PaymentDate','$PaymentType','$PaymentTypeChargeFee','$RtnCode','$RtnMsg','$SimulatePaid','$StoreID','$TradeAmt','$TradeDate','$TradeNo')";
        $delete_cart="DELETE FROM shopping_cart WHERE MerchantTradeNo='$MerchantTradeNo' or Account='$Account'";  //刪除資料
        mysqli_query($link,$delete_cart)or die ("無法刪除".mysqli_error()); //執行sql語法
        if(mysqli_query($link,$update)){
            $greturn="update front set cardinal='$cardinal',pay='succeeded' where MerchantTradeNo='$MerchantTradeNo'";
        if(mysqli_query($link,$greturn)){
            $list = "SELECT * FROM front where Account = '$Account' AND cardinal='$cardinal'";
            $listre = mysqli_query($link,$list);
            $listr = @mysqli_fetch_row($listre);
            $first=explode("#", $list[8]);
            $c=count($first);
            for ($i=0;$i<$c-1;$i++) {
                $second[$i]=explode("*",$first[$i]);
            }
            for($j=0;$j<$c-1;$J++){
                $l = "SELECT * FROM product_list where Product = '$second[$j][0]'";
                $li = mysqli_query($link,$l);
                $lis = @mysqli_fetch_row($li);
                $up="update front set Amount='$lis[8]-$second[$j][1]' where Product = '$second[$j][0]'";
                mysqli_query($link,$up)or die ("Amount更新失敗".mysql_error());
            }            
            echo '<meta http-equiv=REFRESH CONTENT=0;url=receive.php>';
        }else{
            die("pay成功儲存失敗".mysqli_error());
        }
    }else{
        $greturn="update front set cardinal='$cardinal',pay='failed' where MerchantTradeNo='$MerchantTradeNo'";
        mysqli_query($link,$greturn)or die ("pay失敗儲存失敗".mysql_error()); //執行sql語法
    }
    }else{
        $cardinal=$row[1]+1;
        $update = "insert into paylist(Account,cardinal,CheckMacValue, CustomField1, CustomField2, CustomField3, CustomField4, MerchantID, MerchantTradeNo, PaymentDate, PaymentType, PaymentTypeChargeFee, RtnCode, RtnMsg, SimulatePaid, StoreID, TradeAmt, TradeDate, TradeNo) values('$Account','$cardinal','$CheckMacValue','$CustomField1','$CustomField2','$CustomField3','$CustomField4','$MerchantID','$MerchantTradeNo','$PaymentDate','$PaymentType','$PaymentTypeChargeFee','$RtnCode','$RtnMsg','$SimulatePaid','$StoreID','$TradeAmt','$TradeDate','$TradeNo')";
        $delete_cart="DELETE FROM shopping_cart WHERE MerchantTradeNo='$MerchantTradeNo'";  //刪除資料
        mysqli_query($link,$delete_cart)or die ("無法刪除".mysqli_error()); //執行sql語法
        if(mysqli_query($link,$update)){
            $greturn="update front set cardinal='$cardinal',pay='succeeded' where MerchantTradeNo='$MerchantTradeNo'";
            if(mysqli_query($link,$greturn)){
            $list = "SELECT * FROM front where Account = '$Account' AND cardinal='$cardinal'";
            $listre = mysqli_query($link,$list);
            $listr = @mysqli_fetch_row($listre);
            $first=explode("#", $list[8]);
            $c=count($first);
            for ($i=0;$i<$c-1;$i++) {
                $second[$i]=explode("*",$first[$i]);
            }
            for($j=0;$j<$c-1;$J++){
                $l = "SELECT * FROM product_list where Product = '$second[$j][0]'";
                $li = mysqli_query($link,$l);
                $lis = @mysqli_fetch_row($li);
                $up="update front set Amount='$lis[8]-$second[$j][1]' where Product = '$second[$j][0]'";
                mysqli_query($link,$up)or die ("Amount更新失敗".mysql_error());
            }
        if(mysqli_query($link,$greturn)){            
        }else{
            die("pay成功儲存失敗".mysqli_error());
        }
    }else{
        $greturn="update front set cardinal='$cardinal',pay='failed' where MerchantTradeNo='$MerchantTradeNo'";
        mysqli_query($link,$greturn)or die ("pay失敗儲存失敗".mysql_error()); //執行sql語法
    }
    }
    
}else{
    echo "not match ";
} 
// 接收到資訊回應綠界

?>
<form id=form1 action="receive.php" method="post">
    <input type="hidden" name="cardinal" <?php echo "value='$cardinal'"; ?>>
</form>
<?php
echo '<script>document.getElementById("form1").submit();</script>';
?>