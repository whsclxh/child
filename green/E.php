<?php
require_once 'ECPay.Payment.Integration.php';

$obj = new \ECPay_AllInOne();
 
//服務參數
$obj->ServiceURL  = $_POST['ActionURL'];
$obj->HashKey     = $_POST['HashKey'];
$obj->HashIV      = $_POST['HashIV'];
$obj->MerchantID  = $_POST['MerchantID'];
 
//
$obj->Send['MerchantTradeNo'] = $_POST['MerchantTradeNo'];
$obj->Send['ReturnURL'] = $_POST['ReturnURL'];
$obj->Send['TimeStamp'] = $_POST['TimeStamp'];
$obj->Send['OrderResultURL'] = $_POST['ReturnURL'];

//訂單的商品資料
 
//產生訂單(auto submit至ECPay)
//$obj->CheckOut();
$Response = (string)$obj->CheckOutString();
echo $Response;
 
// 自動將表單送出
echo '<script>document.getElementById("__ecpayForm").submit();</script>';