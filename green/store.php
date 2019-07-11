<?php
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
for($i=0;$i<$num_rows-1;$i++){
    $row = mysqli_fetch_array($result);
    if($row[0]==$ItemName){
        $obj->Send['TotalAmount']=(int)"$row[1]";
        $TotalAmount=(int)"$row[1]";
    }else{
        $obj->Send['TotalAmount']=(int)"5";
        $TotalAmount=(int)"5";
    }
}

//$obj->Send['TotalAmount'] = (int)$_POST['TotalAmount'];
$obj->Send['TradeDesc'] = $_POST['TradeDesc'];
$obj->Send['ReturnURL'] = $_POST['ReturnURL'];
$obj->Send['ChoosePayment'] = $_POST['ChoosePayment'];
$obj->Send['CreditInstallment'] = $_POST['CreditInstallment'];
$obj->Send['ClientBackURL'] = $_POST['ClientBackURL'];
$obj->Send['ClientRedirectURL'] = $_POST['ClientRedirectURL'];
$obj->Send['PaymentInfoURL'] = $_POST['PaymentInfoURL'];
$obj->Send['OrderResultURL'] = $_POST['ReturnURL'];
//訂單的商品資料
array_push($obj->Send['Items'], array(
        'Name' => $_POST['ItemName'],
        'Price' => $obj->Send['TotalAmount'],
        'Currency' => "元",
        'Quantity' => (int)"1"
    )
);
$HashKey=$_POST['HashKey'];
$HashIV=$_POST['HashIV'];
$MerchantID=$_POST['MerchantID'];
$MerchantTradeNo=$_POST['MerchantTradeNo'];
$MerchantTradeDate=$_POST['MerchantTradeDate'];
$PaymentType=$_POST['PaymentType'];
$ItemName=$_POST['ItemName'];
$TradeDesc=$_POST['TradeDesc'];
$ChoosePayment=$_POST['ChoosePayment'];
$update = "insert into front(HashKey,HashIV,MerchantID,MerchantTradeNo,MerchantTradeDate,PaymentType,ItemName,TotalAmount,TradeDesc,ChoosePayment,pay) 
           values('$HashKey','$HashIV','$MerchantID','$MerchantTradeNo','$MerchantTradeDate','$PaymentType','$ItemName','$TotalAmount','$TradeDesc','$ChoosePayment','0')";
    if(mysqli_query($link,$update)){

    }else{
        echo "<script>alert('資料儲存失敗!');</script>";
    }

 
//產生訂單(auto submit至ECPay)
//$obj->CheckOut();
$Response = (string)$obj->CheckOutString();

echo "<div style=\"display:none\">$Response</div>"; 
// 自動將表單送出
echo '<script>document.getElementById("__ecpayForm").submit();</script>';
?>