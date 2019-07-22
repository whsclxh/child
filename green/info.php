<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
}
?>
<?php
include("mysql_connect.php");
$Account=$_SESSION['Account'];
$list = "SELECT * FROM shopping_cart where Account = '$Account'";
$result = mysqli_query($link,$list);
$listr = @mysqli_fetch_row($result);

$Product_number=$listr[1];
$TotalAmount=0;
$multiple=array();
$cost=array();
for($x=3;$x<$Product_number+3;$x++){
    $PL = "SELECT * FROM product_list where product='$listr[$x]'";
    $result = mysqli_query($link,$PL);
    $row = mysqli_fetch_array($result);
    $cost[$x-3]=$row[7];
    $ItemName[$x-3]=$listr[$x];    
}

$sql = "SELECT * FROM user where Account = '$Account'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

for ($i=0; $i <$Product_number ; $i++) {
    $qua[$i]=$_POST['qua'.$i];
    $TotalAmount+=$cost[$i]*$qua[$i];
}
date_default_timezone_set('Asia/Taipei');
$the_time=date("Y/m/d H:i:s");
?>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="bootstrap/css/sb-admin-2.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/info.css" crossorigin="anonymous">
<script type="text/javascript">
    function get_pruduct_name(x){
        var a='ItemName';
        return a+x.toString();
    }
    function get_cost_name(x){
        var a='cost';
        return a+x.toString();
    }
    function get_qua_name(x){
        var a='qua';
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
            <?php $z=$x+3; ?>
            var trNode=tableNode.insertRow();
            var tdNode1=trNode.insertCell();
            tdNode1.innerHTML='2000132';
            var tdNode2=trNode.insertCell();
            tdNode2.innerHTML='<?php echo "$listr[$z]" ?>';
            var tdNode3=trNode.insertCell();
            tdNode3.innerHTML='<?php echo "$qua[$x]"; ?>';
            var tdNode4=trNode.insertCell();
            tdNode4.innerHTML='<?php echo "$cost[$x]"; ?>';
            var tdNode5=trNode.insertCell();
            tdNode5.innerHTML='<?php echo $qua[$x]*$cost[$x]; ?>';
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
            cell2.innerHTML = "<b>數量</b>";
            var cell3 = row.insertCell(3);            
            cell3.innerHTML = "<b>價錢</b>";
            var cell4 = row.insertCell(4);            
            cell4.innerHTML = "<b>小計</b>";
            <?php for($y=0;$y< $Product_number;$y++){ ?>
            var product_input=document.createElement("input");
            product_input.setAttribute("type","hidden");
            product_input.setAttribute("name",get_pruduct_name(<?php echo "$y"; ?>));
            product_input.setAttribute("value","<?php echo "$ItemName[$y]";?>");
            document.getElementById("hideinput").appendChild(product_input);
            var cost_input=document.createElement("input");
            cost_input.setAttribute("type","hidden");
            cost_input.setAttribute("name",get_cost_name(<?php echo "$y"; ?>));
            cost_input.setAttribute("value","<?php echo "$cost[$y]";?>");
            document.getElementById("hideinput").appendChild(cost_input);
            var qua_input=document.createElement("input");
            qua_input.setAttribute("type","hidden");
            qua_input.setAttribute("name",get_qua_name(<?php echo "$y"; ?>));
            qua_input.setAttribute("value","<?php echo "$qua[$y]";?>");
            document.getElementById("hideinput").appendChild(qua_input);
            <?php } ?>            
            };
    </script>
    <script>
        $(function(){
        $(document).ready(function(){
            $("#PeriodType").change(function(){
                var PeriodType = $(this).val();
                if(PeriodType == 'D'){
                    $("#div3").show().addClass("show");
                    $("#Frequency").attr("maxlength","3");
                    $("#Frequency").attr("max","365");
                    $("#Frequency").attr("placeholder","至少要大於等於1次以上,最多可設365次");
                    $("#ExecTimes").attr("maxlength","3");
                    $("#ExecTimes").attr("max","999");
                    $("#ExecTimes").attr("placeholder","至少要大於等於1次以上,最多可設999次");
                }else if(PeriodType == 'M'){
                    $("#div3").show().addClass("show");
                    $("#Frequency").attr("maxlength","2");
                    $("#Frequency").attr("max","12");
                    $("#Frequency").attr("placeholder","至少要大於等於1次以上,最多可設12次");
                    $("#ExecTimes").attr("maxlength","2");
                    $("#ExecTimes").attr("max","99");
                    $("#ExecTimes").attr("placeholder","至少要大於等於1次以上,最多可設99次");
                }else if(PeriodType == 'Y'){
                    $("#div3").show().addClass("show");
                    $("#Frequency").attr("maxlength","1");
                    $("#Frequency").attr("max","1");
                    $("#Frequency").attr("placeholder","最多可設1次");
                    $("#ExecTimes").attr("maxlength","1");
                    $("#ExecTimes").attr("max","9");
                    $("#ExecTimes").attr("placeholder","至少要大於等於1次以上,最多可設9次");
                }else{
                    $("#div3").hide().removeClass("show");
                }
            });
            $("#Regular_quota").change(function(){
                if($("input#Regular_quota").prop('checked')){
                    $("#div2").show().addClass("show");
                }else {
                    $("#div2").hide().removeClass("show");
                    $("#PeriodType").attr("value","0");
                    $("#Frequency").attr("value","0");
                    $("#ExecTimes").attr("value","0");
                    document.getElementById('Frequency').removeAttribute("required");
                    document.getElementById('ExecTimes').removeAttribute("required");
                }
            });
        });
        });
    </script>
<title>確認資訊</title>
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
    <input type="text" name="CName" required="required" class="form-control" <?php echo "value='$row[4]'";?>/>
    <label><span style="color: red;">*</span>手機</label>
    <input type="text" name="Cellphone" required="required" pattern="\d{4}[-]\d{6}" class="form-control" <?php echo "value='$row[3]'";?>/>
    <label><span style="color: red;">*</span>地址</label>
    <input type="text" name="Address" required="required" class="form-control" <?php echo "value='$row[6]'";?>/>
    </div>
    <br><br>
    <!--<input type="checkbox" value="1" name="Regular_quota" id="Regular_quota">定期定額
    <div id="div2" style="display: none;">
    <h2>定期定額</h2>
    <div style="border-style:solid; padding:5px; border-width: 1px;">
    <label><span style="color: red;">*</span>週期種類</label>
    <select name="PeriodType" id="PeriodType" class="form-control">
        <option value="0">請選擇</option>
        <option value="D">天</option>
        <option value="M">月</option>
        <option value="Y">年</option>
    </select>
    <div id="div3" style="display: none;">
    <label><span style="color: red;">*</span>執行頻率</label>
    <input type="number" name="Frequency" id="Frequency" class="form-control" required="required" maxlength="3" min="0" max="365" value="0" />
    <label><span style="color: red;">*</span>執行次數</label>
    <input type="number" name="ExecTimes" id="ExecTimes" required="required" class="form-control" maxlength="3" min="0" max="999" value="0" />
    </div>
    </div>
    <br><br>
    </div>!-->
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
    <input type="hidden" name="MerchantTradeDate" <?php echo "value=\"$the_time\""; ?>/>
    <input type="hidden" name="PaymentType" value="aio"/>
    <input type="hidden" name="TotalAmount" value="999"/>
    <input type="hidden" name="TradeDesc" value="Desc"/>
    <input type="hidden" name="ReturnURL" value="http://whsclxh.ddns.net/green/receive1.php"/>
    <input type="hidden" name="ClientRedirectURL" value="http://whsclxh.ddns.net/green/receive1.php"/>
    <input type="hidden" name="ClientBackURL" value="http://whsclxh.ddns.net/green/payEcpay.php"/>
    <input type="hidden" name="PaymentInfoURL" value="http://whsclxh.ddns.net/green/receivepayment.php"/>
    <input type="hidden" name="ClientRedirectURL" value="http://whsclxh.ddns.net/green/clientredirect.php"/>
    <input type="hidden" name="ChoosePayment" id="ChoosePayment" value="Credit">
    <input type="hidden" name="CreditInstallment" value="12,24"/>
    <input type="hidden" name="ItemName" <?php echo "value=\"$ItemName\""; ?>>
    <input type="hidden" name="TotalAmount" <?php echo "value=\"$TotalAmount\""; ?>>
    <input type="hidden" name="Product_number" <?php echo "value=\"$Product_number\""; ?>>
    <br>
    <div align="center">
    <button onclick="javascript:location.href='shopping_cart.php'">回到購物車</button>
    <button type="submit">前往付款頁面</button>
    </div>
</form>