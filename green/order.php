<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
}
?>
<?php
include("mysql_connect.php");
$Account = $_SESSION['Account'];
$order = $_SESSION['order'];
$sql = "SELECT * FROM front WHERE Account='$Account' AND cardinal='$order'";
$paylist = mysqli_query($link,$sql);
$payr = mysqli_fetch_row($paylist);
$first=explode("#", $payr[8]);



$c=count($first)-1;
for($i=0;$i<$c;$i++){
	$second[$i]=explode("*",$first[$i]);
}
for($j=0;$j<$c;$j++){
	$k=$second[$j][0];
	$cost = "SELECT * FROM product_list WHERE product='$k'";
	$costr = mysqli_query($link,$cost);
	$costrr = mysqli_fetch_row($costr);
	$price[$j]=$costrr[7];
}
?>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/pagination.js"></script>
<link rel="stylesheet" href="css/sheives_list.css" crossorigin="anonymous">
<body align="center">
<title>購買明細</title>
<div class="container" align="center" >
    <h2 style="margin-top: 2%">購買明細</h2>
<form action="past_order.php" method="post" name="form1" data-ajax="false">
<div id="div1"></div>
<div id="hideinput" name="hideinput"></div>
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
      <li><a href="record.php" data-ajax="false">回到購買紀錄 </a></li>
    </ul>
    </div>
</div>
</div>
</body>
<script type="text/javascript">
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
    		tableNode=document.createElement("table");//获得对象
            tableNode.setAttribute("id","table");
            tableNode.setAttribute("cellspacing","0");
            tableNode.setAttribute("class","table table-striped");
            //上面确定了 现在开始创建
            <?php for($x=1;$x<= $c;$x++){ ?>
            var trNode=tableNode.insertRow();
            var tdNode1=trNode.insertCell();
            tdNode1.innerHTML='<?php echo "$x"; ?>';
            var tdNode2=trNode.insertCell();
            tdNode2.innerHTML='<?php echo "$second[$x][0]" ?>';
            var tdNode3=trNode.insertCell();
            tdNode3.innerHTML='<?php echo "$price[$x]"; ?>';
            var tdNode3=trNode.insertCell();
            tdNode3.innerHTML='<?php echo "$second[$x][1]"; ?>';
            var tdNode5=trNode.insertCell();
            tdNode5.innerHTML='<?php echo "$payr[13]" ?>';
            var tdNode6=trNode.insertCell();
            tdNode6.innerHTML='<?php echo "$payr[12]" ?>';
            <?php } ?>
            document.getElementById("div1").appendChild(tableNode);//添加到那个位置
            var table = document.getElementById("table");
            var header = table.createTHead();
            var row = header.insertRow(0);
            var cell0 = row.insertCell(0);
            cell0.innerHTML = "<b>&nbsp</b>";
            var cell1 = row.insertCell(1);
            cell1.innerHTML = "<b>商品</b>";
            var cell2 = row.insertCell(2);            
            cell2.innerHTML = "<b>價錢</b>";
            var cell3 = row.insertCell(3);
            cell3.innerHTML = "<b>數量</b>";
            var cell4 = row.insertCell(4);
            cell4.innerHTML = "<b>商品總額</b>";
            var cell5 = row.insertCell(5);
            cell5.innerHTML = "<b>處理狀況</b>";
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
        
</script>