function firstPage2(){
    hide2();
    currPageNum2 = 1;
    showCurrPage2(currPageNum2);
    showTotalPage2();
    for(i = 1; i < pageCount2 + 1; i++){
        blockTable2.rows[i].style.display = "";
    }

    firstText2();
    preText2();
    nextLink2();
    lastLink2();
}

function prePage2(){
    hide2();
    currPageNum2--;
    showCurrPage2(currPageNum2);
    showTotalPage2();
    var firstR2 = firstRow2(currPageNum2);
    var lastR2 = lastRow2(firstR2);
    for(i = firstR2; i < lastR2; i++){
        blockTable2.rows[i].style.display = "";
    }

    if(1 == currPageNum2){
        firstText2();
        preText2();
        nextLink2();
        lastLink2();
    }else if(pageNum2 == currPageNum2){
        preLink2();
        firstLink2();
        nextText2();
        lastText2();
    }else{
        firstLink2();
        preLink2();
        nextLink2();
        lastLink2();
    }

}

function nextPage2(){
    hide2();
    currPageNum2++;
    showCurrPage2(currPageNum2);
    showTotalPage2();
    var firstR2 = firstRow2(currPageNum2);
    var lastR2 = lastRow2(firstR2);
    for(i = firstR2; i < lastR2; i ++){
        blockTable2.rows[i].style.display = "";
    }

    if(1 == currPageNum2){
        firstText2();
        preText2();
        nextLink2();
        lastLink2();
    }else if(pageNum2 == currPageNum2){
        preLink2();
        firstLink2();
        nextText2();
        lastText2();
    }else{
        firstLink2();
        preLink2();
        nextLink2();
        lastLink2();
    }
}

function lastPage2(){
    hide2();
    currPageNum2 = pageNum2;
    showCurrPage2(currPageNum2);
    showTotalPage2();
    var firstR2 = firstRow2(currPageNum2);
    for(i = firstR2; i < numCount2 + 1; i++){
        blockTable2.rows[i].style.display = "";
    }

    firstLink2();
    preLink2();
    nextText2();
    lastText2();
}

// 计算将要显示的页面的首行和尾行
function firstRow2(currPageNum2){
    return pageCount2*(currPageNum2 - 1) + 1;
}

function lastRow2(firstRow2){
    var lastRow2 = firstRow2 + pageCount2;
    if(lastRow2 > numCount2 + 1){
        lastRow2 = numCount2 + 1;
    }
    return lastRow2;
}

function showCurrPage2(cpn){
    currPageSpan2.innerHTML = cpn;
}

function showTotalPage2(){
    pageNumSpan2.innerHTML = pageNum2;
}

//隐藏所有行
function hide2(){
    for(var i = 1; i < numCount2 + 1; i ++){
        blockTable2.rows[i].style.display = "none";
    }
}

//控制首页等功能的显示与不显示
function firstLink2(){firstSpan2.innerHTML = "<a href='javascript:firstPage2();'>第一頁</a>";}
function firstText2(){firstSpan2.innerHTML = "第一頁";}

function preLink2(){preSpan2.innerHTML = "<a href='javascript:prePage2();'>上一頁</a>";}
function preText2(){preSpan2.innerHTML = "上一頁";}

function nextLink2(){nextSpan2.innerHTML = "<a href='javascript:nextPage2();'>下一頁</a>";}
function nextText2(){nextSpan2.innerHTML = "下一頁";}

function lastLink2(){lastSpan2.innerHTML = "<a href='javascript:lastPage2();'>最後一頁</a>";}
function lastText2(){lastSpan2.innerHTML = "最後一頁";}