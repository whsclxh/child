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
$listre = mysqli_query($link,$list);
$listr = @mysqli_fetch_row($listre);

$PL = "SELECT * FROM product_list  where Amount>0 ORDER BY cost+0 DESC";
$result = mysqli_query($link,$PL);
$num_rows = mysqli_num_rows($result);

$CN = "SELECT * FROM user where Account = '$Account'";
$CNre = mysqli_query($link,$CN);
$CNr = @mysqli_fetch_row($CNre);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/purchase.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/pagination.js"></script>
    <script>
    var cart=[];
    <?php for($q=1;$q<=$num_rows;$q++){ ?>
    $(document).ready(function(){                
        $("#ItemName<?php echo $q; ?>").click(function(){
            var product=$(this).val();
            <?php for($k=3;$k<$listr[1]+3;$k++){?>
                if(product=='<?php echo $listr[$k]; ?>'){
                    alert('此商品已在購物車中!');
                    return false;
                }
            <?php } ?> 
            var input=document.createElement("input");
            input.setAttribute("name","insert");
            input.setAttribute("id","insert");
            input.setAttribute("value",product);
            input.setAttribute("type","hidden");
            document.getElementById("hideinput").appendChild(input);
            document.form1.submit();
        });
        $("#detail<?php echo $q; ?>").click(function(){
            var detail=$(this).val();
            var input=document.createElement("input");
            input.setAttribute("name","detail");
            input.setAttribute("id","detail");
            input.setAttribute("value",detail);
            input.setAttribute("type","hidden");
            document.getElementById("hideinput").appendChild(input);
            document.form1.action="front_detail.php"; 
            document.form1.submit(); 
        })
    })
    <?php } ?>

    $(document).ready(function(){
        $("#shopping_cart").click(function(){
            if(<?php echo "listr[0]"; ?>==null){
                alert('d');
                return false;
            }
        })
    })

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
    </script>
</head>
<title>商品頁</title>
<body>
    <h3><?php echo $CNr[4]; ?> 您好</h3>
    <div id="header" name="header">
        <span><a href="update.php">update</a></span>
        |
        <span><a href="record.php">record</a></span>
        |
        <span><a href="shelves.php">shelves</a></span>
        |
        <span><a href="shelves_list.php">shelves_list</a></span>
        |
        <span id="shopping_cart" name="shopping_cart"><a id="shopping_cart" name="shopping_cart" href="shopping_cart.php">shopping_cart(<?php if($listr[1]!=null)echo $listr[1]; else echo "0"; ?>)</a></span>
        |
        <span><a href="logout.php">logout</a></span>  
    </div>
<form action="insert_cart.php" method="post" name="form1" id="form1">
    <div id="hideinput"></div>
<div class="container" align="center">
    <h2 style="margin-top: 2%">商品列表</h2>

    <div id="div1"></div>
    <br>
    

<div id="pagiDiv" align="center" style="width:40%">
        <span id="spanFirst">第一頁</span>  
        <span id="spanPre">上一頁</span>  
        <span id="spanNext">下一頁</span>  
        <span id="spanLast">最後一頁</span>  
        第 <span id="spanPageNum"></span> 頁/共 <span id="spanTotalPage"></span> 頁
</div>
</div>
</form>

</body>
</html>
<script type="text/javascript">
        tableNode=document.createElement("table");//获得对象
            tableNode.setAttribute("id","table");
            tableNode.setAttribute("cellspacing","0");
            tableNode.setAttribute("class","table table-striped");
            //上面确定了 现在开始创建
            <?php for($x=1;$x<= $num_rows;$x++){ ?>
            <?php $row = mysqli_fetch_array($result);?>
            var trNode=tableNode.insertRow();
            var tdNode1=trNode.insertCell();
            tdNode1.innerHTML='<?php echo "$x"; ?>';
            var tdNode2=trNode.insertCell();
            tdNode2.innerHTML='<?php echo "$row[3]" ?>';
            var tdNode3=trNode.insertCell();
            tdNode3.innerHTML='<?php echo "$row[7]"; ?>';
            var tdNode3=trNode.insertCell();
            tdNode3.innerHTML='<?php echo "$row[8]"; ?>';
            var tdNode5=trNode.insertCell();
            tdNode5.innerHTML='<td><button type=\"button\" name=\"ItemName<?php echo $x; ?>\" id=\"ItemName<?php echo $x; ?>\" <?php echo"value=\"$row[3]\""; ?>>放入購物車</td>';
            var tdNode6=trNode.insertCell();
            tdNode6.innerHTML='<td><button type=\"button\" name=\"detail<?php echo $x; ?>\" id=\"detail<?php echo $x; ?>\" <?php echo"value=\"$row[0]\""; ?>>詳細資料</td>';
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
            cell3.innerHTML = "<b>庫存</b>";
            var cell4 = row.insertCell(4);
            cell4.innerHTML = "<b>選擇</b>";
            var cell5 = row.insertCell(5);
            cell5.innerHTML = "<b>詳情</b>";
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
