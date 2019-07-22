<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
}
?>
<?php
$Account=$_SESSION['Account'];
require_once 'ECPay.Payment.Integration.php';
include("mysql_connect.php");
$PL = "SELECT * FROM product_list ORDER BY cost+0 ASC";
$result = mysqli_query($link,$PL);
$num_rows = mysqli_num_rows($result);
$obj = new \ECPay_AllInOne();
//服務參數
$obj->ServiceURL  = $_POST['ServiceURL'];
$obj->HashKey     = $_POST['HashKey'];
$obj->HashIV      = $_POST['HashIV'];
$obj->MerchantID  = $_POST['MerchantID'];
//
$obj->Send['MerchantTradeNo'] = $_POST['MerchantTradeNo'];
$obj->Send['MerchantTradeDate'] = $_POST['MerchantTradeDate'];
$obj->Send['PaymentType'] = $_POST['PaymentType'];
$obj->Send['TotalAmount'] = (int)$_POST['TotalAmount'];
$obj->Send['TradeDesc'] = $_POST['TradeDesc'];
$obj->Send['ReturnURL'] = $_POST['ReturnURL'];
$obj->Send['ChoosePayment'] = $_POST['ChoosePayment'];
//$obj->Send['CreditInstallment'] = $_POST['CreditInstallment'];
$obj->Send['ClientBackURL'] = $_POST['ClientBackURL'];
$obj->Send['ClientRedirectURL'] = $_POST['ClientRedirectURL'];
$obj->Send['PaymentInfoURL'] = $_POST['PaymentInfoURL'];
$obj->Send['OrderResultURL'] = $_POST['ReturnURL'];
$obj->Send['PeriodAmount'] = $_POST['TotalAmount'];
$obj->Send['PeriodType'] = $_POST['PeriodType'];
$obj->Send['Frequency'] = $_POST['Frequency'];
$obj->Send['ExecTimes'] = $_POST['ExecTimes'];
//訂單的商品資料
$arPayMentExtend = new \ECPay_Credit();
$arPayMentExtend->arPayMentExtend['CreditInstallment'] = $_POST['CreditInstallment'];
$arPayMentExtend->arPayMentExtend['PeriodAmount'] = $_POST['TotalAmount'];
$arPayMentExtend->arPayMentExtend['PeriodType'] = $_POST['PeriodType'];
$arPayMentExtend->arPayMentExtend['Frequency'] = $_POST['Frequency'];
$arPayMentExtend->arPayMentExtend['ExecTimes'] = $_POST['ExecTimes']; 

$HashKey=$_POST['HashKey'];
$HashIV=$_POST['HashIV'];
$MerchantID=$_POST['MerchantID'];
$MerchantTradeNo=$_POST['MerchantTradeNo'];
$MerchantTradeDate=$_POST['MerchantTradeDate'];
$PaymentType=$_POST['PaymentType'];
$TradeDesc=$_POST['TradeDesc'];
$ChoosePayment=$_POST['ChoosePayment'];
$CName=$_POST['CName'];
$Cellphone=$_POST['Cellphone'];
$Address=$_POST['Address'];
$Note=$_POST['Note'];
$Product_number=$_POST['Product_number'];
$PeriodAmount = (int)$_POST['TotalAmount'];
$PeriodType = (string)$_POST['PeriodType'];
$Frequency = (int)$_POST['Frequency'];
$ExecTimes = (int)$_POST['ExecTimes'];

for ($i=0; $i <$Product_number ; $i++) {
    $Price[$i]=$_POST['cost'.$i];
    $qua[$i]=$_POST['qua'.$i];
    $ItemName[$i]=$_POST['ItemName'.$i];
    $j=$ItemName[$i];
    $check="SELECT * FROM product_list where product='$j'";
    $result2=mysqli_query($link,$check);
    $row = mysqli_fetch_array($result2);
    if($row[8]<$qua[$i]){
        echo "<script>alert('$j庫存不足，請重新選擇，庫存剩下$row[8]')</script>";
        $sub=false;
        break;
    }else{
        $sub=true;
    }
    array_push($obj->Send['Items'], array(
        'Name' => $ItemName[$i],
        'Price' => $Price[$i],
        'Currency' => "元",
        'Quantity' => (int)$qua[$i]
    )
);
$ItemNames .=$ItemName[$i].'*'.$qua[$i].'#';
}
$merchandise = "insert into front(Account,cardinal,HashKey,HashIV,MerchantID,MerchantTradeNo,MerchantTradeDate,PaymentType,ItemName,TotalAmount,TradeDesc,ChoosePayment,pay,PeriodAmount,PeriodType,Frequency,ExecTimes) 
           values('$Account',' ','$HashKey','$HashIV','$MerchantID','$MerchantTradeNo','$MerchantTradeDate','$PaymentType','$ItemNames','$TotalAmount','$TradeDesc','$ChoosePayment','0','$PeriodAmount','$PeriodType','$Frequency','$ExecTimes')";
    if(!(mysqli_query($link,$merchandise))){
        echo "<script>alert('merchandise資料儲存失敗!');</script>";
    }
$customer = "insert into Customer_info(MerchantID,CName,Cellphone,Address,Note) 
           values('$MerchantID','$CName','$Cellphone','$Address','$Note')";
    if(!(mysqli_query($link,$customer))){
        echo "<script>alert('customer資料儲存失敗!');</script>";
    }
$cart = "update shopping_cart set MerchantTradeNo='$MerchantTradeNo'";
    if(!(mysqli_query($link,$cart))){
        echo "<script>alert('cart資料儲存失敗!');</script>";
    }
//產生訂單(auto submit至ECPay)
//$obj->CheckOut();
$Response = (string)$obj->CheckOutString();

echo "<div style=\"display:none\">$Response</div>";
// 自動將表單送出
if($sub){
    echo '<script>document.getElementById("__ecpayForm").submit();</script>';
}else{
     echo '<meta http-equiv=REFRESH CONTENT=0;url=shopping_cart.php>';
}
?>
