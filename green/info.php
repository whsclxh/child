<?php
include("mysql_connect.php");
$ItemName=$_POST['ItemName'];
$MerchantID=$_POST['MerchantID'];
$PL = "SELECT * FROM product_list where product='$ItemName'";
$result = mysqli_query($link,$PL);
$row = mysqli_fetch_array($result);
$TotalAmount=$row[1];
?>
<link rel="stylesheet" href="bootstrap/css/sb-admin-2.css" crossorigin="anonymous">
<style type="text/css">
	label{
		display: block;
    }
    form{
        width: 40%;
        margin: 0 auto;
    }
    #hor-minimalist-b{
		font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
		font-size: 12px;
		background: #fff;
		margin: 45px;
		width: 100%;
		border-collapse: collapse;
		text-align: left;
	}
	#hor-minimalist-b th{
		font-size: 14px;
		font-weight: normal;
		color: #039;
		padding: 10px 8px;
		border-bottom: 2px solid #6678b1;
	}
	#hor-minimalist-b td{
		border-bottom: 1px solid #ccc;
		color: #669;
		padding: 6px 8px;
	}
	#hor-minimalist-b tbody tr:hover td{
		color: #009;
	}
</style>
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
<h2>寄送填寫資料頁</h2>
<div style="float: left; width: 40%;" >
<h2>訂單資訊</h2>
<div align="center">
<table id="hor-minimalist-b">
	<thead>
		<tr>
			<th>訂單編號</th>
			<th>商品</th>
			<th>價錢</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo "$MerchantID"; ?></td>
		<td><?php echo "$ItemName"; ?></td>
		<td><?php echo "$TotalAmount"; ?></td>
	</tr>
	</tbody>
</table>
</div>
</div>
<form action="store.php" method="POST">
	<h2>付款人資訊</h2>
	<div style="border-style:solid; padding:5px; border-width: 1px;">
	<label><span style="color: red;">*</span>姓名</label>
	<input type="text" name="CName" required="required" class="form-control"/>
    <label><span style="color: red;">*</span>手機</label>
    <input type="text" name="Cellphone" required="required" pattern="\d{4}[-]\d{6}" class="form-control"/>
    <label><span style="color: red;">*</span>地址</label>
    <input type="text" name="Address" required="required" class="form-control"/>
    </div>
    <br><br>
    <h2>備註</h2>
    <div style="border-style:solid; padding:5px; border-width: 1px;">
    <label>備註</label>
    <textarea cols="90"></textarea>
	</div>
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
    <button type="submit">前往付款頁面</button>
</form>