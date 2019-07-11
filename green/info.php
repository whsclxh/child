<?php
include("mysql_connect.php");
$ItemName=$_POST['ItemName'];
$PL = "SELECT * FROM product_list where product='$ItemName'";
$result = mysqli_query($link,$PL);
$row = mysqli_fetch_array($result);
$TotalAmount=$row[1];
?>
<script type="text/javascript">
	function getRandom(){
        return Math.floor(Math.random()*15)+5;
    };
    var chars = ['0','1','2','3','4','5','6','7','8','9',
                'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
                'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

    function generateMixed() {
        var res = "";
        for(var i = 0; i < getRandom() ; i++ ) {
            var id = Math.ceil(Math.random()*61);
            res += chars[id];
        }
        return res;
    }
    var a=generateMixed();
    window.onload=function(){
    	var tradeno=document.getElementById('MerchantTradeNo');
        tradeno.value=a;
    }
</script>
<table border="1">
	<tr>
		<td><?php echo "$ItemName"; ?></td>
		<td><?php echo "$TotalAmount"; ?></td>
	</tr>
</table>
<form action="store.php" method="POST">
	<input type="hidden" name="API_URL" value="https://payment-stage.ecpay.com.tw"/>
    <input type="hidden" name="MerchantID" value="2000132"/>
    <input type="hidden" name="HashKey" value="5294y06JbISpM5x9"/>
    <input type="hidden" name="HashIV" value="v77hoKGq4kWxNNIS"/>
    <input type="hidden" name="ServiceURL" value="https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5"/>
    <input type="hidden" name="MerchantTradeNo" id="MerchantTradeNo"/>
    <input type="hidden" name="MerchantTradeDate" value="2019/08/30 12:34:56"/>
    <input type="hidden" name="PaymentType" value="aio"/>
    <input type="hidden" name="TotalAmount" value="999"/>
    <input type="hidden" name="TradeDesc" value="Desc"/>
    <input type="hidden" name="ReturnURL" value="http://whsclxh.ddns.net/green/receive.php"/>
    <input type="hidden" name="ClientRedirectURL" value="http://whsclxh.ddns.net/green/receive.php"/>
    <input type="hidden" name="ClientBackURL" value="http://whsclxh.ddns.net/green/payEcpay.php"/>
    <input type="hidden" name="PaymentInfoURL" value="http://whsclxh.ddns.net/green/receivepayment.php"/>
    <input type="hidden" name="ClientRedirectURL" value="http://whsclxh.ddns.net/green/clientredirect.php"/>
    <input type="hidden" name="ChoosePayment" value="Credit">
    <input type="hidden" name="CreditInstallment" value="12,24"/>
    <input type="hidden" name="ItemName" <?php echo "value=\"$ItemName\""; ?>>
    <input type="hidden" name="TotalAmount" <?php echo "value=\"$TotalAmount\""; ?>>
</form>