<?php
require_once 'ECPay.Payment.Integration.php';






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
$obj->Send['CreditInstallment'] = $_POST['CreditInstallment'];
$obj->Send['ClientbackURL'] = $_POST['ClientbackURL'];
$obj->Send['PaymentInfoURL'] = $_POST['PaymentInfoURL'];
$obj->Send['ClientRedirectURL'] = $_POST['ClientRedirectURL'];
 
//訂單的商品資料
array_push($obj->Send['Items'], array(
        'Name' => 'aaa',
        'Price' => 100,
        'Currency' => "元",
        'Quantity' => (int)"1"
    )
);
 
//產生訂單(auto submit至ECPay)
//$obj->CheckOut();
$Response = (string)$obj->CheckOutString();
echo $Response;
 
// 自動將表單送出
echo '<script>document.getElementById("__ecpayForm").submit();</script>';