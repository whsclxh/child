<?php
require_once 'ECPay.Payment.Integration.php';
 
define( 'ECPay_MerchantID', '2000132' );
define( 'ECPay_HashKey', '5294y06JbISpM5x9' );
define( 'ECPay_HashIV', 'v77hoKGq4kWxNNIS' );
 
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
 
// 計算出 CheckMacValue
$CheckMacValue = ECPay_CheckMacValue::generate( $arParameters, ECPay_HashKey, ECPay_HashIV );
 
// 必須要支付成功並且驗證碼正確
if ( $_POST['RtnCode'] =='1' && $CheckMacValue == $_POST['CheckMacValue'] ){
    // 
   
    // 
}

$CheckMacValue=$_POST['CheckMacValue'];
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
// 接收到資訊回應綠界
echo '1|OK';
?>
<!---<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div style="border: 0 auto">
    <table border="1">
        <tr>
            <td>CheckMacValue</td>
            <td><?php echo "$CheckMacValue"; ?></td>
        </tr>
        <tr>
            <td>CustomField1</td>
            <td><?php echo "$CustomField1"; ?></td>
        </tr>
        <tr>
            <td>CustomField2</td>
            <td><?php echo "$CustomField2"; ?></td>
        </tr>
        <tr>
            <td>CustomField3</td>
            <td><?php echo "$CustomField3"; ?></td>
        </tr>
        <tr>
            <td>CustomField4</td>
            <td><?php echo "$CustomField4"; ?></td>
        </tr>
        <tr>
            <td>MerchantID</td>
            <td><?php echo "$MerchantID"; ?></td>
        </tr>
        <tr>
            <td>MerchantTradeNo</td>
            <td><?php echo "$MerchantTradeNo"; ?></td>
        </tr>
        <tr>
            <td>PaymentDate</td>
            <td><?php echo "$PaymentDate"; ?></td>
        </tr>
        <tr>
            <td>PaymentType</td>
            <td><?php echo "$PaymentType"; ?></td>
        </tr>
        <tr>
            <td>PaymentTypeChargeFee</td>
            <td><?php echo "$PaymentTypeChargeFee"; ?></td>
        </tr>
        <tr>
            <td>RtnCode</td>
            <td><?php echo "$RtnCode"; ?></td>
        </tr>
        <tr>
            <td>RtnMsg</td>
            <td><?php echo "$RtnMsg"; ?></td>
        </tr>
        <tr>
            <td>SimulatePaid</td>
            <td><?php echo "$SimulatePaid"; ?></td>
        </tr>
        <tr>
            <td>StoreID</td>
            <td><?php echo "$StoreID"; ?></td>
        </tr>
        <tr>
            <td>TradeAmt</td>
            <td><?php echo "$TradeAmt"; ?></td>
        </tr>
        <tr>
            <td>TradeDate</td>
            <td><?php echo "$TradeDate"; ?></td>
        </tr>
        <tr>
            <td>TradeNo</td>
            <td><?php echo "$TradeNo"; ?></td>
        </tr>
    </table>
    </div>
</body>
</html>