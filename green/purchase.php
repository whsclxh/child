<?php 
include("mysql_connect.php");
$PL = "SELECT * FROM product_list  ORDER BY cost+0 DESC";
$result = mysqli_query($link,$PL);
$num_rows = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<head>
    <meta charset="UTF-8">
    <title></title><style type="text/css">
    body{
    }
    table .table-striped{
    }
    table thead tr{
        text-align: center;
        height: 30px;
        background: #deeeee;
        padding: 5px;
        margin: 0;
        border: 0px;
    }
    table tbody td{
        text-align: center;
        height:30px;
        margin: 0;
        padding: 5px;
        border:0px;
    }
    table tbody tr{
        background-color: #FFFACD;
    }
    .span6{
        /*width:500px;*/
        float:inherit;
        margin:10px;
    }
    #pagiDiv span{
        background:#FFFAF0;
        border-radius: .2em;
        padding:5px;
    }
    table {
        overflow:hidden;
        border:1px solid #d3d3d3;
        background:#fefefe;
        width:40%;
        margin:5% auto 0;
        margin-top: 3%;
        -moz-border-radius:5px; /* FF1+ */
        -webkit-border-radius:5px; /* Saf3-4 */
        border-radius:5px;
        -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
        -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
    }
    
    th, td {padding:18px 28px 18px; text-align:center; }
    
    th {padding-top:22px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
    
    td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
    
    tr.odd-row td {background:#f6f6f6;}
    table tbody tr  :hover{background:  #FFDD55;}
    
    td.first, th.first {text-align:center;}
    
    td.last {border-right:none;}
    tr:first-child th.first {
        -moz-border-radius-topleft:5px;
        -webkit-border-top-left-radius:5px; /* Saf3-4 */
    }
    
    tr:first-child th.last {
        -moz-border-radius-topright:5px;
        -webkit-border-top-right-radius:5px; /* Saf3-4 */
    }
    
    tr:last-child td.first {
        -moz-border-radius-bottomleft:5px;
        -webkit-border-bottom-left-radius:5px; /* Saf3-4 */
    }
    
    tr:last-child td.last {
        -moz-border-radius-bottomright:5px;
        -webkit-border-bottom-right-radius:5px; /* Saf3-4 */
    }
    td {
        background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
        background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
    }
    
    tr.odd-row td {
        background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
        background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
    }
    
    th {
        background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
        background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
    }
</style>
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="pagination.js"></script>
    <script>
    if ( $("input[name='ItemName[]']:checked").length == 0 ) {
        alert('必須擇一商品');
    }
    </script>
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
        //全局变量
        var numCount;       //数据总数量
        var columnsCounts;  //数据列数量
        var pageCount;      //每页显示的数量
        var pageNum;        //总页数
        var currPageNum ;   //当前页数

        //页面标签变量
        var blockTable;
        var preSpan;
        var firstSpan;
        var nextSpan;
        var lastSpan;
        var pageNumSpan;
        var currPageSpan;

        window.onload=function(){
            //页面标签变量
            var tradeno=document.getElementById('MerchantTradeNo');
            tradeno.value=a;
            tableNode=document.createElement("table");//获得对象
            tableNode.setAttribute("id","table");
            tableNode.setAttribute("cellspacing","0");
            tableNode.setAttribute("class","table table-striped");
            //上面确定了 现在开始创建
            <?php for($x=1;$x< $num_rows;$x++){ ?>
            <?php $row = mysqli_fetch_array($result);?>
            var trNode=tableNode.insertRow();
            var tdNode1=trNode.insertCell();
            tdNode1.innerHTML='<?php echo "$x"; ?>';
            var tdNode2=trNode.insertCell();
            tdNode2.innerHTML='<?php echo "$row[0]" ?>';
            var tdNode3=trNode.insertCell();
            tdNode3.innerHTML='<?php echo "$row[1]"; ?>';
            var tdNode4=trNode.insertCell();
            tdNode4.innerHTML='<td><input type=\"checkbox\" name=\"ItemName[]\" <?php echo"value=\"$row[0]\""; ?>></td>';
            <?php } ?>
            document.getElementById("div1").appendChild(tableNode);//添加到那个位置
            var table = document.getElementById("table");
            var header = table.createTHead();
            var row = header.insertRow(0);
            var cell0 = row.insertCell(0);
            cell0.innerHTML = "<b>編號</b>";
            var cell1 = row.insertCell(1);
            cell1.innerHTML = "<b>商品</b>";
            var cell2 = row.insertCell(2);            
            cell2.innerHTML = "<b>價錢</b>";
            var cell3 = row.insertCell(3);
            cell3.innerHTML = "<b>選擇</b>";
            blockTable = document.getElementById("table");
            preSpan = document.getElementById("spanPre");
            firstSpan = document.getElementById("spanFirst");
            nextSpan = document.getElementById("spanNext");
            lastSpan = document.getElementById("spanLast");
            pageNumSpan = document.getElementById("spanTotalPage");
            currPageSpan = document.getElementById("spanPageNum");

            numCount = document.getElementById("table").rows.length - 1;       //取table的行数作为数据总数量（减去标题行1）
            columnsCounts = blockTable.rows[0].cells.length;
            pageCount = 10;
            pageNum = parseInt(numCount/pageCount);
            if(0 != numCount%pageCount){
                pageNum += 1;
            }

            firstPage();
            $(function() {
        /* For zebra striping */
        $("table tr:nth-child(odd)").addClass("odd-row");
        /* For cell text alignment */
        $("table td:first-child, table th:first-child").addClass("first");
        /* For removing the last border */
        $("table td:last-child, table th:last-child").addClass("last");
         });
        }
    </script>
</head>
<style>
    .right ul li {
    display:inline;
}
</style>
<body align="center">

<div class="container" align="center">
    <h2 style="margin-top: 2%">商品列表</h2>
    <h3 id="you"></h3>
<form action="info.php" method="post" name="form1">
<div id="div1">
</div>
    <input type="hidden" name="API_URL" value="https://payment-stage.ecpay.com.tw" class="form-control"/>
    <input type="hidden" name="MerchantID" value="2000132" class="form-control"/>
    <input type="hidden" name="HashKey" value="5294y06JbISpM5x9" class="form-control"/>
    <input type="hidden" name="HashIV" value="v77hoKGq4kWxNNIS" class="form-control"/>
    <input type="hidden" name="ServiceURL" value="https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5" class="form-control"/>
    <input type="hidden" name="MerchantTradeNo" id="MerchantTradeNo" class="form-control"/>
    <input type="hidden" name="MerchantTradeDate" value="2019/08/30 12:34:56" class="form-control"/>
    <input type="hidden" name="PaymentType" value="aio" class="form-control"/>
    <input type="hidden" name="TotalAmount" value="999" class="form-control"/>
    <input type="hidden" name="TradeDesc" value="Desc" class="form-control"/>
    <input type="hidden" name="ReturnURL" value="http://whsclxh.ddns.net/green/receive.php" class="form-control"/>
    <input type="hidden" name="ClientRedirectURL" value="http://whsclxh.ddns.net/green/receive.php" class="form-control"/>
    <input type="hidden" name="ClientBackURL" value="http://whsclxh.ddns.net/green/payEcpay.php" class="form-control"/>
    <input type="hidden" name="PaymentInfoURL" value="http://whsclxh.ddns.net/green/receivepayment.php" class="form-control"/>
    <input type="hidden" name="ClientRedirectURL" value="http://whsclxh.ddns.net/green/clientredirect.php" class="form-control"/>
    <input type="hidden" name="ChoosePayment" value="Credit">
    <input type="hidden" name="CreditInstallment" value="12,24" class="form-control"/>
    <br><br>
    <div align="center"><button type="submit">綠界線上支付</button></div>
</form>
<br>
<div id="pagiDiv" align="center" style="width:40%">
        <span id="spanFirst">第一頁</span>  
        <span id="spanPre">上一頁</span>  
        <span id="spanNext">下一頁</span>  
        <span id="spanLast">最後一頁</span>  
        第 <span id="spanPageNum"></span> 頁/共 <span id="spanTotalPage"></span> 頁
</div>
</div>

</body>
</html>