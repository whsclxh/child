<?php
require_once 'ECPay.Payment.Integration.php';
include("mysql_connect.php");

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
if($_POST['ItemName']=='A'){
    $obj->Send['TotalAmount']='100';
    $TotalAmount='100';
}else if($_POST['ItemName']=='B'){
    $obj->Send['TotalAmount']='200';
    $TotalAmount='200';
}else if($_POST['ItemName']=='C'){
    $obj->Send['TotalAmount']='300';
    $TotalAmount='300';
}else if($_POST['ItemName']=='D'){
    $obj->Send['TotalAmount']='400';
    $TotalAmount='400';
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
array_push($obj->Send['Items'], array(
        'Name' => $_POST['ItemName'],
        'Price' => $obj->Send['TotalAmount'],
        'Currency' => "元",
        'Quantity' => (int)"5"
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
echo $Response;
 
// 自動將表單送出
echo '<script>document.getElementById("__ecpayForm").submit();</script>';