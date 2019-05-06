<?php session_start(); ?>
<?php
/*
include("mysql_connect.php"); 
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.php>';
}
?>
<?php
$id = $_SESSION['username'];
$contimes = $_SESSION['cognition_times'];
$sq2 = "SELECT * FROM cognition_score where username = '$id' and cardinal='$contimes'";
$result2 = mysqli_query($link,$sq2);
$a_row = @mysqli_fetch_row($result2);
if($a_row[1]==$contimes){
    echo "<script>alert('此次作答已經提交過囉!!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=cognition_finish.php>';
}*/
?> 
<html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script src="library/jquery.min.js"></script>
  <script src="library/svg.min.js"></script>


  <!-- <script type="text/javascript" src="time_2.js"></script> -->
  <script type="text/javascript" src="time_1.js"></script>
  <script src="http://d3js.org/d3.v3.min.js"></script>
  
  <!-- <script type="text/javascript" src="time_4.js"></script>
  <script type="text/javascript" src="time_5.js"></script> -->



  <style type="text/css">
    table,td,th {
      border: 1px solid black;
    }

    table {
      height: 50%;
      width: 60%;
      margin-top: 100px;
      margin-left: auto;
      margin-right: auto;
    }

    body {
      
      margin: 0 auto;
      /* background: #ff8a50; */
      font-family: sans-serif;
    }

    .disable-select {
      -webkit-touch-callout: none; /* iOS Safari */
      -webkit-user-select: none;   /* Chrome/Safari/Opera */
      -khtml-user-select: none;    /* Konqueror */
      -moz-user-select: none;      /* Firefox */
      -ms-user-select: none;       /* Internet Explorer/Edge */
      user-select: none;           /* Non-prefixed version, currently supported by any browser but < IE9 */
    }

  * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}



body,
div,
dl,
dt,
dd,
ul,
ol,
li,
h1,
h2,
h3,
h4,
h5,
h6,
pre,
code,
form,
fieldset,
legend,
input,
button,
textarea,
p,
blockquote,
th,
td {
  margin: 0;
  padding: 0;
}

body {
  background: #fff;
  color: #555;
  font-size: 14px;
  font-family: "Arial", "Microsoft YaHei", "黑体", "宋体", sans-serif;
}

/* td,
th,
caption {
  font-size: 14px;
} */

/* h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: normal;
  font-size: 100%;
} */

/* address,
caption,
cite,
code,
dfn,
em,
strong,
th,
var {
  font-style: normal;
  font-weight: normal;
} */

/* a {
  color: #555;
  text-decoration: none;
} */

/* a:link, a:visited,a:hover ,a:active{
  text-decoration: none;

} */

/* img {
  border: none;
  vertical-align: middle;
} */

ol,
ul,
li {
  list-style: none;
}

input,
textarea,
select,
button {
  font: 14px "Arial", "Microsoft YaHei", "黑体", "宋体", sans-serif;
}

table {
  border-collapse: collapse;
}

html {
  overflow-y: scroll;
}

.clearfix:before,
.clearfix:after {
  content: " ";
  display: inline-block;
  height: 0;
  clear: both;
  visibility: hidden;
}

.clearfix {
  *zoom: 1;
}

/*公共类*/

/* .fl {
  float: left
}

.fr {
  float: right
}

.al {
  text-align: left
}

.ac {
  text-align: center
}

.ar {
  text-align: right
} */

.hide {
  display: none
}
* {
    box-sizing: border-box
}

html,
body {
    height: 100%;
    background: #f5f5f5;
}

.container {
    margin: 0 auto;
    max-width: 960px;
    height: 100%;
    background: #fff;
}

.draw-container {
    position: relative;
    height: 800px;
    background: #fff;
}

.draw-container ul {
    margin-top: 80px;
}

.data-list {
    position: absolute;
}

.question-list {
    left: 50px;
}

.answer-list {
    right: 50px;
    top:25%;
}

 .data-list li {
    margin: 15px;
    padding: 0 10px;
    /* width: 100%;
    height: 30%; */
    background: #ecf5ff;
    line-height: 30px;
    font-size: 16px;
    
    border: 1px solid #ecf5ff;
    border-radius: 10px;
    cursor: crosshair;
    text-align: center
}

.ui-btn{
    display: inline !important;
}





/* 
.hover-g {
    cursor: pointer;
    opacity: 1;
    stroke-width: 4;
} */



/* .result-container {
    padding: 20px;
    border-top: 1px solid #333;
} */
/* .result-container li{
    font-size: 16px;
    line-height: 35px;
} */
  
  </style>
</head>
<?php
$cart = array("img/clock_img/p1.png", "img/clock_img/p2.png", "img/clock_img/p3.png",	"img/clock_img/p4.png"); 
shuffle($cart);
$_SESSION['q5pic0'] = $cart[0];
$_SESSION['q5pic1'] = $cart[1];
$_SESSION['q5pic2'] = $cart[2];
$_SESSION['q5pic3'] = $cart[3];






$que = array("img/clock_img/wakeup.jpg", "img/clock_img/breakfast.jpg","img/clock_img/teach.jpg","img/clock_img/sleep.jpg");
$_SESSION['q2pic0'] = $que[0];
$_SESSION['q2pic1'] = $que[1];
$_SESSION['q2pic2'] = $que[2];
$_SESSION['q2pic3'] = $que[3];



$h21 = rand(1,12); //第二題的選項
$h22 = rand(1,12);
$h23 = rand(1,12);
$h24 = rand(1,12);
$_SESSION['h2opt1'] = $h21;
$_SESSION['h2opt2'] = $h22;
$_SESSION['h2opt3'] = $h23;
$_SESSION['h2opt4'] = $h24;


 



 ?>


<body>
  
  <form method="post" action="time_finish.php" data-ajax="false" name = "form1">
    <div data-role="page" id="time1">
    <h3 align="center">請問現在是幾點幾分? 輸入正確時間。</h3>
    
  <table width="50%" style ="text-align:center">
    <tr style="height:280px">
      <td><canvas id="clock1" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
      <td><canvas id="clock2" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
    </tr>
    <tr style="height:40px">
      <td>
        <input type="number" data-role="none" style="width:15%"  name="q1ans1" min="1" max="12" >時<input type="number" data-role="none" style="width:15%"  name="q1ans2" min="00" max="59" step="5" >分
      </td>
        
      <td>
        <input type="number" data-role="none" style="width:15%"  name="q1ans3" min="1" max="12" >時<input type="number" data-role="none" style="width:15%"  name="q1ans4" min="00" max="59" step="5" >分
      </td>
    </tr>
 
    <tr style="height: 280px">
      <td>
        <canvas id="clock3" width="200%" height="200%" style="display:block; margin:auto;"></canvas>
      </td>
      <td>
        <canvas id="clock4" width="200%" height="200%" style="display:block; margin:auto;"></canvas>
      </td>
    </tr>
    <tr style="height: 40px">
      <td>
        <input type="number" data-role="none" style="width:15%"  name="q1ans5" min="1" max="12" >時<input type="number" data-role="none" style="width:15%"  name="q1ans6" min="00" max="59" step="5" >分
      </td>
        
      <td>
        <input type="number" data-role="none" style="width:15%"  name="q1ans7" min="1" max="12" >時<input type="number" data-role="none" style="width:15%"  name="q1ans8" min="00" max="59" step="5" >分
      </td>
    </tr>
  </table>
  <br>
  <div align="center">
    <a href="#" onclick="document.form1.submit();" style="width: 10%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
    <a href="#time2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
  </div>
  </div>


<div data-role="page" id="time2">
<h3 align="center">請選出正常的作息時間。</h3>
<div align="center">
    <div class="container" align="center">
      <div id="problems" class="problems disable-select">
      </div>
    </div>
  </div>
  <table border="1" align="center" >
		<tr>
			<td>
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">AM 7:00</span><input type="radio" value="correct" style="width:30px;height:30px" data-role="none" name="q2ans12">
			  <script>document.write('<img src="<?php echo $que[0] ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" value="wrong" style="width:30px;height:30px" data-role="none" name="q2ans12"><span style="font-family:Impact; font-size: 2.2cm">PM <?php echo $h21 ?>:00</span>
        </div>
      </td>
    </tr>
    
		<tr>
			<td>
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">PM <?php echo $h22 ?>:30</span><input type="radio" value="wrong" style="width:30px;height:30px" data-role="none" name="q2ans13">
				<script>document.write('<img src="<?php echo $que[1] ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" value="correct" style="width:30px;height:30px" data-role="none" name="q2ans13"><span style="font-family:Impact; font-size: 2.2cm">AM 7:30</span>
        </div>
			</td>
    </tr>
    
		<tr>
			<td>
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">AM 10:00</span><input type="radio" value="correct" style="width:30px;height:30px" data-role="none" name="q2ans14">
        <script>document.write('<img src="<?php echo $que[2] ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" value="wrong" style="width:30px;height:30px" data-role="none" name="q2ans14"><span style="font-family:Impact; font-size: 2.2cm">PM <?php echo $h23 ?>:00</span>
        </div>
			</td>
    </tr>
    
		<tr>
			<td>
        <div style="text-align:center">
            <span style="font-family:Impact; font-size: 2.2cm">AM <?php echo $h24 ?>:00</span><input type="radio" value="wrong" style="width:30px;height:30px" data-role="none" name="q2ans15">
        <script>document.write('<img src="<?php echo $que[3] ?>" width="140" height="140" style=" margin:auto;">');</script>
        <input type="radio" value="correct" style="width:30px;height:30px" data-role="none" name="q2ans15"><span style="font-family:Impact; font-size: 2.2cm">PM 10:00</span>
        </div>
			</td>
		</tr>
	
  </table>
<br>
<div align="center">
  <a href="#time1" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
  <a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
  <a href="#time3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
</div>
</div>
    

    <div data-role="page" id="time3">
        <h3 align="center">請連到正確的時間。</h3>
        <div id="draw" class="draw-container">

          <ul class="question-list data-list"></ul>
     

          <ul class="answer-list data-list"></ul>

        </div>
<br>
        <div align="center">
          <a href="#time2" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
          <a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
          <a href="#time4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
        </div>
    </div>
    
<script type="text/javascript">
<?php 

 //php產生第三題的hour跟min

$h5 = rand(1,12);
$h6 = rand(1,12);
$h7 = rand(1,12);
$h8 = rand(1,12);
 
$m5 = rand(1,11)*5;
$m6 = rand(1,11)*5;
$m7 = rand(1,11)*5;
$m8 = rand(1,11)*5;

$h = '點';
$m = '分';

$time1 = $h5.$h.$m5.$m;
$time2 = $h6.$h.$m6.$m;
$time3 = $h7.$h.$m7.$m;
$time4 = $h8.$h.$m8.$m;
$answer = array("$time1","$time2","$time3","$time4");
shuffle($answer);

$_SESSION['q3hour1'] = $h5;
$_SESSION['q3hour2'] = $h6;
$_SESSION['q3hour3'] = $h7;
$_SESSION['q3hour4'] = $h8;
$_SESSION['q3min1'] = $m5;
$_SESSION['q3min2'] = $m6;
$_SESSION['q3min3'] = $m7;
$_SESSION['q3min4'] = $m8;

$_SESSION['time1'] = $answer[0];
$_SESSION['time2'] = $answer[1];
$_SESSION['time3'] = $answer[2];
$_SESSION['time4'] = $answer[3];


 ?>
var h5 = <?php echo $h5 ?>;
var h6 = <?php echo $h6 ?>;
var h7 = <?php echo $h7 ?>;
var h8 = <?php echo $h8 ?>;
var m5 = <?php echo $m5 ?>;
var m6 = <?php echo $m6 ?>;
var m7 = <?php echo $m7 ?>;
var m8 = <?php echo $m8 ?>;






  const line = {
    init: function (questionObj, answerObj) {
        this.draw = SVG('draw').size("100%", "100%");
        this.lineArr = [];
        this.currentInfo = {};
        this.createList(questionObj)
        this.createList(answerObj)
        this.bindBtnEvent()
        this.bindParentsEvent()
        
        
    },
    /* 创建列表 */
    createList: function (obj, callback) {
        let type = obj.type,
            data = obj.data,
            content = [];
        if (type == 'question') {
            $('.question-list').empty()
            data.forEach(element => {
                let item = $('<li class="question-li" data-question=' + element.questionKey + ' data-answer=' + element.answer + '></li>'),
                    obj = {};
                item.append(element.question);
                obj.beginValue = element.questionKey;
                obj.line = this.createLine();
                this.lineArr.push(obj)
                content.push(item);
            });
            // $('.question-list').html(content)
            content.forEach(e => {
              $('.question-list').append(e);
            });
        } else {
            $('.answer-list').empty()
            data.forEach(element => {
                let item = '<li class="answer-li" data-answer=' + element + '>' + element + '</li>';
                content.push(item);
            });
            $('.answer-list').html(content);

        }
        // this.itemForEach(true)
    },
    /* 绑定按钮事件 */
    bindBtnEvent: function () {
        let self = this,
            parentPosition = $('#draw').offset();
        /* 鼠标按下question-list列，调整线条开始位置 */
        $('.question-list').on('mousedown', 'li', function (e) {

            let current = self.lineArr.find(el => {
                return el.beginValue == $(this).attr('data-question');
            });
            current.begin = {};
            current.beginElement = this;
            current.begin.y = $(this).offset().top - parentPosition.top +55 ;
            current.begin.x = $(this).offset().left - parentPosition.left  +150;
            current.line.show();
            current.line.stroke({
                color: "#67C23A",
            });
            current.line.plot(current.begin.x, current.begin.y, current.begin.x, current.begin.y);
            current.end = {};
            /* 如果存在结束位置，删除 */
            if (current.endElement) {
                $(current.endElement).removeClass('selected')
                $(this).removeClass('selected')
            }
            current.endElement = '';
            current.endValue = '';
            self.currentInfo = current;
        })
        /* 鼠标按下answer-list列，调整线条结束位置 */
        $('.answer-list').on('mouseup', 'li', function (e) {
            let current = self.lineArr.find(el => {
                return el.beginValue == self.currentInfo.beginValue;
            });

            current.end.y = $(this).offset().top - parentPosition.top -5;
            current.end.x = $(this).offset().left - parentPosition.left + 10;
            current.endElement = this;
            current.endValue = $(this).attr('data-answer');
            
            current.line.plot(current.begin.x, current.begin.y, current.end.x, current.end.y);
            $(current.beginElement).addClass('selected')
            $(current.beginElement).attr('data-selected', current.endValue)
            $(this).addClass('selected')

            self.currentInfo = '';
        })
        /* 默认答案 */
        $('#j-default').click(function (e) {
            self.itemForEach()
        })
        /* 重置 */
        $('#j-reset').click(function (e) {
            self.lineArr.forEach(el => {
                $(el.beginElement).removeClass("selected");
                $(el.beginElement).attr('data-selected', '')
                $(el.endElement).removeClass("selected");
                el.line.hide()
            })
            $('.result-display').html('')
        })
        /* 确认答案 */
        $('#j-submit').click(function (e) {
            let result = [];
            $('.question-list li').each(function (el) {
                let question = $(this).attr('data-question'),
                    userSelectd = $(this).attr('data-selected');
                if (userSelectd) {
                    let item = `<li>${question} = ${userSelectd}</li>`;
                    result.push(item)
                }

            })
            result.length ? $('.result-display').html(result) : alert('您还未选择！')
        })
    },
    /* 绑定父亲事件事件 */
    bindParentsEvent: function (params) {
        let self = this;

        $(document).mouseup(function (e) {
            if (!$(e.target).is(".answer-li") && self.currentInfo.line) {
                self.currentInfo.line.hide();
                $("#draw")
                    .find(".question-li")
                    .removeClass("display-block-hover");
            }
        })
        $('#draw').mousemove(function (e) {
            e.preventDefault();
            if (Object.keys(self.currentInfo).length != 0) {
                let end = {}
                end.x = self.getMousePos(event).x - $("#draw").offset().left;
                end.y = self.getMousePos(event).y - $("#draw").offset().top;
                self.currentInfo.line.plot(self.currentInfo.begin.x, self.currentInfo.begin.y, end.x, end.y);
            }
        })
    },
    /* 创建线条 */
    createLine: function () {
        let self = this,
            line = self.draw.line();
        line.stroke({
            color: "#67C23A",
            width: 2,
            opacity: 0.6,
            linecap: "round"
        });
        line.hide()
        line.click(function () {
            let current = self.lineArr.find(el => {
                return el.line == this;
            });
            $(current.beginElement).removeClass("selected");
            $(current.endElement).removeClass("selected");
            $(current.beginElement).attr('data-selected', '')

            current.endValue = "";
            current.endElement = "";
            current.end = "";

            this.hide();
        });
        line.mouseover(function () {
            let current = self.lineArr.find(el => {
                return el.line == this;
            });
            if (current.endValue) {
                let left, top;
                left =
                    (current.end.x + current.begin.x - 20) / 2 + "px";
                top =
                    (current.end.y + current.begin.y - 20) / 2 + "px";
                $('.remove-btn').css({
                    'left': left,
                    'top': top
                }).show()
                this.addClass("hover-g");
            }
        });
        line.mouseout(function () {
            $('.remove-btn').hide();
            this.removeClass("hover-g");
        });
        /* line.marker("end", 8, 8, function (add) {
            add.polyline([
                [1, 0],
                [1, 8],
                [7, 4],
                [1, 0]
            ]);
            this.fill("#67C23A");
            this.stroke({
                color: "#67C23A",
                opacity: 0.6,
                width: 1
            });
        }); */
        return line;
    },
    /* 遍历question-list，存在默认answer，就去answer-list找到，进行连接 */
    itemForEach: function (flag) {
        let self = this,
            parentPosition = $('#draw').offset();

        if ($('.question-list li').length && $('.answer-list li').length) {

            $('li').removeClass('selected')
            $('.question-list li').each(function (params) {
                let obj = {},
                    _this = $(this),
                    beginValue = _this.attr('data-question'),
                    endValue = _this.attr('data-answer');

                obj = self.lineArr.find(el => el.beginValue == beginValue);
                obj.beginElement = this;
                obj.begin = {};
                obj.begin.y = _this.offset().top - parentPosition.top - 200;
                obj.begin.x = _this.offset().left - parentPosition.left - 100;
                $(this).attr('data-selected', '');
                $('.result-display').html('');
                // obj.line.plot(obj.begin.x, obj.begin.y, obj.begin.x, obj.begin.y)
                //判断是否存在初始答案
                if (endValue && !flag) {
                    $('.answer-list li').each(function (params) {
                        if ($(this).html() == endValue) {
                            obj.end = {};

                            obj.end.y = $(this).offset().top - parentPosition.top + 30;
                            obj.end.x = $(this).offset().left - parentPosition.left - 20;
                            obj.endElement = this;
                            obj.endValue = endValue;
                            obj.line.stroke({
                                color: "#E6A23C",
                            });
                            obj.line.plot(obj.begin.x, obj.begin.y, obj.end.x, obj.end.y);
                            obj.line.show()
                            $(this).addClass("selected")
                            _this.addClass("selected")
                        }
                    })


                }




            })
        }
    },
    /* 获取鼠标的坐标 */
    getMousePos: function (event) {
        var e = event || window.event;
        var scrollX =
            document.documentElement.scrollLeft || document.body.scrollLeft;
        var scrollY =
            document.documentElement.scrollTop || document.body.scrollTop;
        var x = e.pageX || e.clientX + scrollX  ;
        var y = e.pageY || e.clientY + scrollY;
        //alert('x: ' + x + '\ny: ' + y);
        return {
            x: x,
            y: y
        };
    },
}

const question = [{
            question: $('<canvas id="clock5" width="150%" height="150%" style="display:block; margin:auto;"></canvas>'),
            questionKey: '123',
            answer: 2
        },
        {
            question: $('<canvas id="clock6" width="150%" height="150%" style="display:block; margin:auto;"></canvas>'),
            questionKey: '2+2',
            answer: 4
        },
        {
            question: $('<canvas id="clock7" width="150%" height="150%" style="display:block; margin:auto;"></canvas>'),
            questionKey: '3+3',
            answer: 5
        },
        {
            question: $('<canvas id="clock8" width="150%" height="150%" style="display:block; margin:auto;"></canvas>'),
            questionKey: '4+4',
            answer: 1
        }
    ];
    
    var answer = new Array('<?php echo $answer[0] ?>','<?php echo $answer[1] ?>','<?php echo $answer[2] ?>','<?php echo $answer[3] ?>');

    

    
    
     
  
let questionObj = {
        data: question,
        type: 'question'
    },
    answerObj = {
        data: answer,
        type: 'answer'
    }
line.init(questionObj, answerObj)




drawclock("clock5",h5,m5);  //第三題的時鐘            
drawclock("clock6",h6,m6);
drawclock("clock7",h7,m7);
drawclock("clock8",h8,m8);
</script>


    <div data-role="page" id="time4">
        <h3 align="center">請判斷經過多少時間?</h3>
        <table border="1" width="50%" align="center">
            <tr style="height:280px">
              <td><canvas id="clock9" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="10%" style="text-align: center;">經過<input type="number" name="q4ans1" data-role="none" max="60" min="0" step="5">分</td>
              <td><canvas id="clock10" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="10%" style="text-align: center;">經過<input type="number" name="q4ans2" data-role="none" max="60" min="0" step="5">分</td>
              <td><canvas id="clock11" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>

            </tr>
         </table>

         <table border="1" width="50%" align="center">
            <tr style="height: 280px">
              <td><canvas id="clock12" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="10%" style="text-align: center;">經過<input type="number" name="q4ans3" data-role="none" max="60" min="0" step="5">分</td>
              <td><canvas id="clock13" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
              <td width="10%" style="text-align: center;">經過<input type="number" name="q4ans4" data-role="none" max="60" min="0" step="5">分</td>
              <td><canvas id="clock14" width="200%" height="200%" style="display:block; margin:auto;"></canvas></td>
            </tr>
         </table>
         <br>
         <div align="center">
             <a href="#time3" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
             <a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
             <a href="#time5" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right" style="width: 10%;" data-transition="slide">下一題</a>
         </div>
    </div>

    <div data-role="page" id="time5">
      <h3 align="center">請依作息判斷排序?</h3>

      <table style="width:50%" align="center">
        <tr style="height: 280px">
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $cart[0] ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $cart[1] ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
          </tr>
          <tr style="height:  40px">
            
          <th><div style="margin: 0px auto; width: 90px;"><input type="number"  name="q5ans1" min="1" max="4"></div></th>
          <th><div style="margin: 0px auto; width: 90px;"><input type="number"  name="q5ans2" min="1" max="4"></div></th>      
          </tr>
              
            
      
          <tr style="height: 280px">
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $cart[2] ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
      
            <th style="width: 380px" ><script>document.write('<img src="<?php echo $cart[3] ?>"width="280" height="280" style="display:block; margin:auto;">');</script></th>
      
          </tr>
      
          <tr style="height: 40px">
              <th><div style="margin: 0px auto; width: 90px;"><input type="number"  name="q5ans3" min="1" max="4"></div></th>
              <th><div style="margin: 0px auto; width: 90px;"><input type="number"  name="q5ans4" min="1" max="4"></div></th>        
          </tr>
      
    </table>
    <br>
    <div align="center">
        <a href="#time4" class="ui-btn ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-left" style="width: 10%;" data-transition="slide" data-direction="reverse">上一題</a>
        <a href="#" onclick="document.form1.submit();" style="width: 5%;" data-transition="slide" class="ui-btn ui-corner-all ui-shadow ui-icon-action ui-btn-icon-left">結束作答</a>
    </div>
    </div>


  </form>
  
  <script>

<?php

$h1 = rand(1,12);
$h2 = rand(1,12);
$h3 = rand(1,12);
$h4 = rand(1,12);
 
$m1 = rand(1,11)*5;
$m2 = rand(1,11)*5;
$m3 = rand(1,11)*5;
$m4 = rand(1,11)*5;

$_SESSION['q1ans1'] = $h1;
$_SESSION['q1ans2'] = $m1;
$_SESSION['q1ans3'] = $h2;
$_SESSION['q1ans4'] = $m2;
$_SESSION['q1ans5'] = $h3;
$_SESSION['q1ans6'] = $m3;
$_SESSION['q1ans7'] = $h4;
$_SESSION['q1ans8'] = $m4;






$h9 = rand(1,12);  
$m9 = rand(1,11)*5;  
$h10 = $h9;
$m10 = $m9 + rand(1,11)*5; 
if($m10>60){
  $m10 -= 60;
  $h10 += 1;
}
if($m10==60){
  $m10 = 0;
  $h10 += 1;
}
$h11 = $h10;
$m11 = $m10 + rand(1,11)*5;
if($m11>60){
  $m11 -= 60;
  $h11 += 1;
}
if($m11==60){
  $m11 = 0;
  $h11 += 1;
}

$h12 = rand(1,12);
$m12 = rand(1,11)*5;
$h13 = $h12;
$m13 = $m12 + rand(1,11)*5;
if($m13>60){
  $m13 -= 60;
  $h13 += 1;
}
if($m13==60){
  $m13 = 0;
  $h13 += 1;
}
$h14 = $h13;
$m14 = $m13 + rand(1,11)*5;
if($m14>60){
  $m14 -= 60;
  $h14 += 1;
}
if($m14==60){
  $m14  =0;
  $h14 += 1;
}

$_SESSION['q4hour1'] = $h9;
$_SESSION['q4hour2'] = $h10;
$_SESSION['q4hour3'] = $h11;
$_SESSION['q4hour4'] = $h12;
$_SESSION['q4hour5'] = $h13;
$_SESSION['q4hour6'] = $h14;
$_SESSION['q4min1'] = $m9;
$_SESSION['q4min2'] = $m10;
$_SESSION['q4min3'] = $m11;
$_SESSION['q4min4'] = $m12;
$_SESSION['q4min5'] = $m13;
$_SESSION['q4min6'] = $m14;


?>

var h1 = <?php echo $h1 ?>;
var h2 = <?php echo $h2 ?>;
var h3 = <?php echo $h3 ?>;
var h4 = <?php echo $h4 ?>;
var m1 = <?php echo $m1 ?>;
var m2 = <?php echo $m2 ?>;
var m3 = <?php echo $m3 ?>;
var m4 = <?php echo $m4 ?>;


drawclock("clock1",h1,m1);  //第一題的時鐘            
drawclock("clock2",h2,m2);
drawclock("clock3",h3,m3);
drawclock("clock4",h4,m4);




var h9 = <?php echo $h9 ?>;
var h10 = <?php echo $h10 ?>;
var h11 = <?php echo $h11 ?>;
var h12 = <?php echo $h12 ?>;
var h13 = <?php echo $h13 ?>;
var h14 = <?php echo $h14 ?>;
var m9 = <?php echo $m9 ?>;
var m10 = <?php echo $m10 ?>;
var m11 = <?php echo $m11 ?>;
var m12 = <?php echo $m12 ?>;
var m13 = <?php echo $m13 ?>;
var m14 = <?php echo $m14 ?>;




  drawclock("clock9",h9,m9);  //第四題的時鐘           
  drawclock("clock10",h10,m10);
  drawclock("clock11",h11,m11);
  drawclock("clock12",h12,m12);
  drawclock("clock13",h13,m13);
  drawclock("clock14",h14,m14);

</script>

</body>

</html>
