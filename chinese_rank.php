<?php session_start(); ?>
<?php 
include("mysql_connect.php");
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
$id = $_SESSION['username'];
$sql4 = "SELECT * FROM users where chinese_times>5 ORDER BY chinese_average+0 DESC";
$result4 = mysqli_query($link,$sql4);
$num_rows = mysqli_num_rows($result4);
$sql55 = "SELECT * FROM users where chinese_times>5 ORDER BY chinese_times+0 DESC";
$result55 = mysqli_query($link,$sql55);
$num_rows25 = mysqli_num_rows($result55);
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
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
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="pagination.js"></script>
    <script type="text/javascript" src="pagination2.js"></script>
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

        var numCount2;       //数据总数量
        var columnsCounts2;  //数据列数量
        var pageCount2;      //每页显示的数量
        var pageNum2;        //总页数
        var currPageNum2 ;   //当前页数

        //页面标签变量
        var blockTable2;
        var preSpan2;
        var firstSpan2;
        var nextSpan2;
        var lastSpan2;
        var pageNumSpan2;
        var currPageSpan2;


        window.onload=function(){
            //页面标签变量
            tableNode=document.createElement("table");//获得对象
            tableNode.setAttribute("id","table");
            tableNode.setAttribute("cellspacing","0");
            tableNode.setAttribute("class","table table-striped");
            //上面确定了 现在开始创建
            <?php for($x=1;$x<= $num_rows;$x++){ ?>
            <?php $row = mysqli_fetch_array($result4);?>
            <?php if($row[0]==$id){ ?>
                document.getElementById("you").innerHTML='<?php echo "你的排名為<font color=\"red\">$x</font>/$num_rows" ?>';
            <?php } ?>
            var trNode=tableNode.insertRow();
            var tdNode1=trNode.insertCell();
            tdNode1.innerHTML='<?php echo "$x"; ?>';
            var tdNode2=trNode.insertCell();
            tdNode2.innerHTML='<?php echo "$row[2]" ?>';
            var tdNode3=trNode.insertCell();
            tdNode3.innerHTML='<?php echo "$row[11]"; ?>';
            var tdNode4=trNode.insertCell();
            tdNode4.innerHTML='<?php echo "$row[6]"; ?>';
            <?php } ?>
            document.getElementById("div1").appendChild(tableNode);//添加到那个位置
            var table = document.getElementById("table");
            var header = table.createTHead();
            var row = header.insertRow(0);
            var cell0 = row.insertCell(0);
            cell0.innerHTML = "<b>排名</b>";
            var cell1 = row.insertCell(1);
            cell1.innerHTML = "<b>暱稱</b>";
            var cell2 = row.insertCell(2);            
            cell2.innerHTML = "<b>平均分數</b>";
            var cell3 = row.insertCell(3);
            cell3.innerHTML = "<b>作答次數</b>";
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

            tableNode2=document.createElement("table");//获得对象
            tableNode2.setAttribute("id","table2");
            tableNode2.setAttribute("cellspacing","0");
            tableNode2.setAttribute("class","table table-striped");
            //上面确定了 现在开始创建
            <?php for($u=1;$u<= $num_rows25;$u++){ ?>
            <?php $rowy = mysqli_fetch_array($result55);?>
            <?php if($rowy[0]==$id){ ?>
                document.getElementById("you2").innerHTML='<?php echo "你的排名為<font color=\"red\">$u</font>/$num_rows25" ?>';
            <?php } ?>
            var trNode2=tableNode2.insertRow();
            var tdNode12=trNode2.insertCell();
            tdNode12.innerHTML='<?php echo "$u"; ?>';
            var tdNode22=trNode2.insertCell();
            tdNode22.innerHTML='<?php echo "$rowy[2]" ?>';
            var tdNode32=trNode2.insertCell();
            tdNode32.innerHTML='<?php echo "$rowy[11]"; ?>';
            var tdNode42=trNode2.insertCell();
            tdNode42.innerHTML='<?php echo "$rowy[6]"; ?>';
            <?php } ?>
            document.getElementById("div2").appendChild(tableNode2);//添加到那个位置
            var table2 = document.getElementById("table2");
            var header2 = table2.createTHead();
            var row2 = header2.insertRow(0);
            var cell02 = row2.insertCell(0);
            cell02.innerHTML = "<b>排名</b>";
            var cell12 = row2.insertCell(1);
            cell12.innerHTML = "<b>暱稱</b>";
            var cell22 = row2.insertCell(2);            
            cell22.innerHTML = "<b>平均分數</b>";
            var cell32 = row2.insertCell(3);
            cell32.innerHTML = "<b>作答次數</b>";
            blockTable2 = document.getElementById("table2");
            preSpan2 = document.getElementById("spanPre2");
            firstSpan2 = document.getElementById("spanFirst2");
            nextSpan2 = document.getElementById("spanNext2");
            lastSpan2 = document.getElementById("spanLast2");
            pageNumSpan2 = document.getElementById("spanTotalPage2");
            currPageSpan2 = document.getElementById("spanPageNum2");

            numCount2 = document.getElementById("table2").rows.length - 1;       //取table的行数作为数据总数量（减去标题行1）
            columnsCounts2 = blockTable2.rows[0].cells.length;
            pageCount2 = 10;
            pageNum2 = parseInt(numCount2/pageCount2);
            if(0 != numCount2%pageCount2){
                pageNum2 += 1;
            }

            firstPage2();
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
<body align="center">
<div data-role="page" id="one">
<div style="width:100%;">
        <span style="float: right;"><a href="Topic.php" data-ajax="false">回到首頁</a></span>
</div>
<div class="container" align="center">
    <h2 style="margin-top: 2%">平均分數排行榜</h2>
    <h3 id="you"></h3>
<form action="past_record.php" method="post" name="form1" data-ajax="false">
<div id="div1">
</div>
</form>
<div id="pagiDiv" align="center" style="width:40%">
        <span id="spanFirst">第一頁</span>  
        <span id="spanPre">上一頁</span>  
        <span id="spanNext">下一頁</span>  
        <span id="spanLast">最後一頁</span>  
        第 <span id="spanPageNum"></span> 頁/共 <span id="spanTotalPage"></span> 頁
</div>
<a href="#two">按照作答次數排名</a>
</div>
</div>
<div data-role="page" id="two">
<div style="width:100%;">
        <span style="float: right;"><a href="Topic.php" data-ajax="false">回到首頁</a></span>
</div>
<div class="container" align="center">
    <h2 style="margin-top: 2%">作答次數排行榜</h2>
    <h3 id="you2"></h3>
<form action="past_record.php" method="post" name="form1" data-ajax="false">
<div id="div2">
</div>
</form>
<div id="pagiDiv" align="center" style="width:40%">
        <span id="spanFirst2">第一頁</span>  
        <span id="spanPre2">上一頁</span>  
        <span id="spanNext2">下一頁</span>  
        <span id="spanLast2">最後一頁</span>  
        第 <span id="spanPageNum2"></span> 頁/共 <span id="spanTotalPage2"></span> 頁
</div>
<a href="#one">按照平均分數排名</a>
<b style=""></b>
</div>
</div>
</body>
</html>