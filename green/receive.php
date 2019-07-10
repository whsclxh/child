<?php
file_put_contents( '/tmp/ECPay_'.uniqid(”, true) .'.txt', print_r( $_POST, true ) );
require_once 'ECPay.Payment.Integration.php';
 
define( 'ECPay_MerchantID', '2000132' );
define( 'ECPay_HashKey', '5294y06JbISpM5x9' );
define( 'ECPay_HashIV', 'v77hoKGq4kWxNNIS' );
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
 
// 計算出 CheckMacValue
$CheckMacValue = ECPay_CheckMacValue::generate( $arParameters, ECPay_HashKey, ECPay_HashIV );
 
// 必須要支付成功並且驗證碼正確
if ( $_POST['RtnCode'] =='1' && $CheckMacValue == $_POST['CheckMacValue'] ){
    
}
else{
	echo "not match ";
} 
// 接收到資訊回應綠界

?>
<style type="text/css">
	body
{
	line-height: 1.6em;
}

#hor-minimalist-a
{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size: 12px;
	background: #fff;
	margin: 45px;
	width: 480px;
	border-collapse: collapse;
	text-align: left;
}
#hor-minimalist-a th
{
	font-size: 14px;
	font-weight: normal;
	color: #039;
	padding: 10px 8px;
	border-bottom: 2px solid #6678b1;
}
#hor-minimalist-a td
{
	color: #669;
	padding: 9px 8px 0px 8px;
}
#hor-minimalist-a tbody tr:hover td
{
	color: #009;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div style="border: 0 auto" align="center">
    <table border="1" id="hor-minimalist-a" summary="Employee Pay Sheet">
    	<th>
    		<td scope="col">回傳名稱</td>
    		<td scope="col">值</td>
    	</th>
        <tr>
        	<td>檢查碼</td>
            <td>CheckMacValue</td>
            <td><?php echo "$CheckMacValue"; ?></td>
        </tr>
        <tr>
        	<td>自訂名稱欄位1</td>
            <td>CustomField1</td>
            <td><?php echo "$CustomField1"; ?></td>
        </tr>
        <tr>
        	<td>自訂名稱欄位2</td>
            <td>CustomField2</td>
            <td><?php echo "$CustomField2"; ?></td>
        </tr>
        <tr>
        	<td>自訂名稱欄位3</td>
            <td>CustomField3</td>
            <td><?php echo "$CustomField3"; ?></td>
        </tr>
        <tr>
        	<td>自訂名稱欄位4</td>
            <td>CustomField4</td>
            <td><?php echo "$CustomField4"; ?></td>
        </tr>
        <tr>
        	<td>特店編號</td>
            <td>MerchantID</td>
            <td><?php echo "$MerchantID"; ?></td>
        </tr>
        <tr>
        	<td>特店交易編號</td>
            <td>MerchantTradeNo</td>
            <td><?php echo "$MerchantTradeNo"; ?></td>
        </tr>
        <tr>
        	<td>付款時間</td>
            <td>PaymentDate</td>
            <td><?php echo "$PaymentDate"; ?></td>
        </tr>
        <tr>
        	<td>特店選擇的付款方式</td>
            <td>PaymentType</td>
            <td><?php echo "$PaymentType"; ?></td>
        </tr>
        <tr>
        	<td>通路費</td>
            <td>PaymentTypeChargeFee</td>
            <td><?php echo "$PaymentTypeChargeFee"; ?></td>
        </tr>
        <tr>
        	<td>交易狀態</td>
            <td>RtnCode</td>
            <td><?php echo "$RtnCode"; ?></td>
        </tr>
        <tr>
        	<td>交易訊息</td>
            <td>RtnMsg</td>
            <td><?php echo "$RtnMsg"; ?></td>
        </tr>
        <tr>
        	<td>是否為模擬付款</td>
            <td>SimulatePaid</td>
            <td><?php echo "$SimulatePaid"; ?></td>
        </tr>
        <tr>
        	<td>特店旗下店舖代號</td>
            <td>StoreID</td>
            <td><?php echo "$StoreID"; ?></td>
        </tr>
        <tr>
        	<td>交易金額</td>
            <td>TradeAmt</td>
            <td><?php echo "$TradeAmt"; ?></td>
        </tr>
        <tr>
        	<td>訂單成立時間</td>
            <td>TradeDate</td>
            <td><?php echo "$TradeDate"; ?></td>
        </tr>
        <tr>
        	<td>綠界的交易編號</td>
            <td>TradeNo</td>
            <td><?php echo "$TradeNo"; ?></td>
        </tr>
    </table>
    </div>
</body>
</html>
<?php
echo '1|OK';
?>