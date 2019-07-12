<?php
include("mysql_connect.php");
$ItemName=$_POST['ItemName'];
$Product_number=count($ItemName);
$MerchantID=$_POST['MerchantID'];
$TotalAmount=0;
$cost=array();
for($x=0;$x<$Product_number;$x++){
    $PL = "SELECT * FROM product_list where product='$ItemName[$x]'";
    $result = mysqli_query($link,$PL);
    $row = mysqli_fetch_array($result);
    $cost[$x]=$row[1];
    $TotalAmount+=$cost[$x];
}
?>
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
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
		margin-left: 0px;
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
    function get_pruduct_name(x){
        var a='ItemName';
        return a+x.toString();
    }
    function get_cost_name(x){
        var a='ItemName_cost';
        return a+x.toString();
    }
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
            //页面标签变量
            var tradeno=document.getElementById('MerchantTradeNo');
            tradeno.value=a;
            tableNode=document.createElement("table");//获得对象
            tableNode.setAttribute("id","hor-minimalist-b");
            tableNode.setAttribute("cellspacing","0");
            tableNode.setAttribute("class","hor-minimalist-b");
            //上面确定了 现在开始创建
            <?php for($x=0;$x< $Product_number;$x++){ ?>
            var trNode=tableNode.insertRow();
            var tdNode1=trNode.insertCell();
            tdNode1.innerHTML='<?php echo "$MerchantID"; ?>';
            var tdNode2=trNode.insertCell();
            tdNode2.innerHTML='<?php echo "$ItemName[$x]" ?>';
            var tdNode3=trNode.insertCell();
            tdNode3.innerHTML='<?php echo "$cost[$x]"; ?>';
            <?php } ?>
            document.getElementById("div1").appendChild(tableNode);//添加到那个位置
            var table = document.getElementById("hor-minimalist-b");
            var header = table.createTHead();
            var row = header.insertRow(0);
            var cell0 = row.insertCell(0);
            cell0.innerHTML = "<b>MerchantID</b>";
            var cell1 = row.insertCell(1);
            cell1.innerHTML = "<b>商品名稱</b>";
            var cell2 = row.insertCell(2);            
            cell2.innerHTML = "<b>價錢</b>";
            <?php for($y=0;$y< $Product_number;$y++){ ?>
            var product_input=document.createElement("input");
            product_input.setAttribute("type","hidden");
            product_input.setAttribute("name",get_pruduct_name(<?php echo "$y"; ?>));
            product_input.setAttribute("value","<?php echo "$ItemName[$y]";?>");
            document.getElementById("hideinput").appendChild(product_input);
            var product_input=document.createElement("input");
            product_input.setAttribute("type","hidden");
            product_input.setAttribute("name",get_cost_name(<?php echo "$y"; ?>));
            product_input.setAttribute("value","<?php echo "$cost[$y]";?>");
            document.getElementById("hideinput").appendChild(product_input);
            <?php } ?>            
            };
    </script>
<h3 align="center" style="margin-top: 40px;">寄送填寫資料頁</h3>
<br><br>
<div style="width: 40%; margin: 0 auto;">
<h2 style="float: left;">訂單資訊</h2>
<div id="div1"></div>

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
    <textarea style="width :100%;" name="Note"></textarea>
	</div>
    <div id="hideinput"></div>
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
    <input type="hidden" name="Product_number" <?php echo "value=\"$Product_number\""; ?>>
    <br>
    <button type="submit">前往付款頁面</button>
</form>