<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
}
?>
<?php
$Account=$_SESSION['Account'];
$PL = "SELECT * FROM product_list WHERE Account='$Account' ORDER BY cardinal+0 DESC";
$result = mysqli_query($link,$PL);
$listrow = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
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
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/pagination.js"></script>
    <script type="text/javascript">
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
            tableNode=document.createElement("table");//获得对象
            tableNode.setAttribute("id","table");
            tableNode.setAttribute("cellspacing","0");
            tableNode.setAttribute("class","table table-striped");
            //上面确定了 现在开始创建

            <?php for($x=$listrow;$x>0;$x--){ ?>
            <?php $s=$paylistrow-$x+1; ?>
            <?php $row = mysqli_fetch_array($result);?>
            <?php
            $sql = "SELECT * FROM front where Account = '$Account' AND cardinal = '$x'";
            $result = mysqli_query($link,$sql);
            $row_sql = @mysqli_fetch_row($result);
            ?>
            var trNode=tableNode.insertRow();
            var tdNode1=trNode.insertCell();
            tdNode1.innerHTML="<?php echo $s; ?>";
            var tdNode2=trNode.insertCell();
            tdNode2.innerHTML='<?php echo "$row_sql[2]"; ?>';
            var tdNode3=trNode.insertCell();
            tdNode3.innerHTML='<?php echo "$row_sql[6]"; ?>';
            var tdNode4=trNode.insertCell();
            tdNode4.innerHTML='<?php echo "$row_sql[7]"; ?>';
            var tdNode5=trNode.insertCell();
            tdNode5.innerHTML="<?php echo "$row_sql[9]"; ?>";
            <?php } ?>
            document.getElementById("div1").appendChild(tableNode);//添加到那个位置
            var table = document.getElementById("table");
            var header = table.createTHead();
            var row = header.insertRow(0);
            var cell0 = row.insertCell(0);
            cell0.innerHTML = "<b>編號</b>";
            var cell1 = row.insertCell(1);
            cell1.innerHTML = "<b>商品名稱</b>";
            var cell2 = row.insertCell(2);            
            cell2.innerHTML = "<b>商品金額</b>";
            var cell3 = row.insertCell(3);
            cell3.innerHTML = "<b>商品數量</b>";
            var cell4 = row.insertCell(4);
            cell4.innerHTML = "<b>上架時間</b>";
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
        };
    </script>
</head>
<style>
    .right ul li {
    display:inline;
}
</style>
<body align="center">

<div class="container" align="center" >
    <h2 style="margin-top: 2%">作答紀錄</h2>
<form action="math_before_past_record.php" method="post" name="form1" data-ajax="false">
<div id="div1">
</div>
</form>
<br>
<br>
<div id="pagiDiv" align="center" style="width:40%">
        <span id="spanFirst">第一頁</span>  
        <span id="spanPre">上一頁</span>  
        <span id="spanNext">下一頁</span>  
        <span id="spanLast">最後一頁</span>  
        第 <span id="spanPageNum"></span> 頁/共 <span id="spanTotalPage"></span> 頁
</div>
<div style="width:100%;" style="display:inline">
<div class="right" style="float:right; text-align:center; display:inline" >
  	<ul>
      <li><a href="purchase.php" data-ajax="false">回到商品頁面 </a></li>
    </ul>
    </div>
</div>
</div>
</body>
</html>