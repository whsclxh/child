<?php session_start(); ?>
<?php
require_once 'ECPay.Payment.Integration.php';
include("mysql_connect.php");
$Account=$_SESSION['Account'];
$cardinal=$_POST['cardinal'];
$sql1 = "SELECT * FROM paylist where Account = '$Account' and cardinal=$cardinal";
$result1 = mysqli_query($link,$sql1);
$paylistr = @mysqli_fetch_row($result1);
$delete_front="DELETE FROM front WHERE Account='$Account' and cardinal=' ' ";  //刪除資料
mysqli_query($link,$delete_front)or die ("無法刪除".mysqli_error()); //執行sql語法
?>
<link rel="stylesheet" href="css/receive.css" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>支付詳情</title>
</head>
<body>
    <div style="border: 0 auto" align="center">
    <table id="hor-minimalist-a">
        <thead>
        <tr>
            <th scope="col">中文</th>
            <th scope="col">回傳名稱</td>
            <th scope="col">值</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>檢查碼</td>
            <td>CheckMacValue</td>
            <td><?php echo "$paylistr[2]"; ?></td>
        </tr>
        <tr>
            <td>自訂名稱欄位1</td>
            <td>CustomField1</td>
            <td><?php echo "$paylistr[3]"; ?></td>
        </tr>
        <tr>
            <td>自訂名稱欄位2</td>
            <td>CustomField2</td>
            <td><?php echo "$paylistr[4]"; ?></td>
        </tr>
        <tr>
            <td>自訂名稱欄位3</td>
            <td>CustomField3</td>
            <td><?php echo "$paylistr[5]"; ?></td>
        </tr>
        <tr>
            <td>自訂名稱欄位4</td>
            <td>CustomField4</td>
            <td><?php echo "$paylistr[6]"; ?></td>
        </tr>
        <tr>
            <td>特店編號</td>
            <td>MerchantID</td>
            <td><?php echo "$paylistr[7]"; ?></td>
        </tr>
        <tr>
            <td>特店交易編號</td>
            <td>MerchantTradeNo</td>
            <td><?php echo "$paylistr[8]"; ?></td>
        </tr>
        <tr>
            <td>付款時間</td>
            <td>PaymentDate</td>
            <td><?php echo "$paylistr[9]"; ?></td>
        </tr>
        <tr>
            <td>特店選擇的付款方式</td>
            <td>PaymentType</td>
            <td><?php echo "$paylistr[10]"; ?></td>
        </tr>
        <tr>
            <td>通路費</td>
            <td>PaymentTypeChargeFee</td>
            <td><?php echo "$paylistr[11]"; ?></td>
        </tr>
        <tr>
            <td>交易狀態</td>
            <td>RtnCode</td>
            <td><?php echo "$paylistr[12]"; ?></td>
        </tr>
        <tr>
            <td>交易訊息</td>
            <td>RtnMsg</td>
            <td><?php echo "$paylistr[13]"; ?></td>
        </tr>
        <tr>
            <td>是否為模擬付款</td>
            <td>SimulatePaid</td>
            <td><?php echo "$paylistr[14]"; ?></td>
        </tr>
        <tr>
            <td>特店旗下店舖代號</td>
            <td>StoreID</td>
            <td><?php echo "$paylistr[15]"; ?></td>
        </tr>
        <tr>
            <td>交易金額</td>
            <td>TradeAmt</td>
            <td><?php echo "$paylistr[16]"; ?></td>
        </tr>
        <tr>
            <td>訂單成立時間</td>
            <td>TradeDate</td>
            <td><?php echo "$paylistr[17]"; ?></td>
        </tr>
        <tr>
            <td>綠界的交易編號</td>
            <td>TradeNo</td>
            <td><?php echo "$paylistr[18]"; ?></td>
        </tr>
        </tbody>
    </table>
    </div>
    <div align="center">
        <button onclick="javascript:location.href='purchase.php'">回到商品頁面</button>
    </div>
</body>
</html>
