

  (function (win) {
    function DrawClock(options) {
      this.hour = options.hour;
      this.minute = options.minute;
      this.canvas = options.el;
      this.ctx = this.canvas.getContext('2d'); //方法返回一個用於在畫布上繪圖的環境
      this.width = this.ctx.canvas.width;
      this.height = this.ctx.canvas.height;  
      this.r = this.width / 2;
      this.rem = this.width / 200;
      this.digits = [3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 1, 2];

      var self = this;
      self.init();
      //setInterval(function(){
      //  self.init();
      //}, 1000);
      //drawClock();
    }

    //  function random_int(max) {
    // return Math.floor(Math.random() * max);
    // }
  

    DrawClock.prototype = {
      init: function () {
        var ctx = this.ctx;
        ctx.clearRect(0, 0, this.width, this.height); //在給定的矩形內清除指定的畫素
        /*            var now = new Date();
                    var hours = now.getHours();
                    var minutes = now.getMinutes();
                    var seconds = now.getSeconds();*/
        var hours = this.hour;
        var minute = this.minute;
        //var seconds = Math.floor(Math.random() * 60);

        var hour = hours >= 12 ? hours - 12 : hours;
        var minutes = minutes;

        this.drawBackground();
        this.drawHour(hour, minute);
        this.drawMinute(minute);
        //this.drawSecond(seconds);
        this.drawDot();
        ctx.restore();
      },
      
      drawBackground: function () {
        var ctx = this.ctx;
        var self = this;
        ctx.save();
        ctx.translate(this.r, this.r); //重新對映畫布上的 (0,0) 位置
        ctx.beginPath();
        ctx.lineWidth = 8 * this.rem;
        ctx.arc(0, 0, this.r - ctx.lineWidth / 2, 0, 2 * Math.PI, false); //建立弧/曲線（用於建立圓形或部分圓）
        ctx.stroke();
        ctx.font = 16 * this.rem + "px Arial"; //設定或返回文字內容的當前字型屬性
        ctx.textAlign = "center"; //設定或返回文字內容的當前對齊方式
        ctx.textBaseline = "middle"; //設定或返回在繪製文字時使用的當前文字基線
        this.digits.forEach(function (number, i) {
          var rad = 2 * Math.PI / 12 * i;
          var x = Math.cos(rad) * (self.r - 33 * self.rem);
          var y = Math.sin(rad) * (self.r - 33 * self.rem);
          ctx.fillText(number, x, y); //在畫布上繪製"被填充的"文字
        });

        //分鐘的刻度，每分鐘轉6deg
       for (var i = 0; i < 60; i++) {
          ctx.save(); //儲存當前環境的狀態
          ctx.rotate(6 * i * Math.PI / 180); //旋轉當前繪圖
          ctx.beginPath(); //起始一條路徑，或重置當前路徑
          ctx.moveTo(0, -82 * this.rem); //把路徑移動到畫布中的指定點，不建立線條
          ctx.lineTo(0, -87 * this.rem); //新增一個新點，然後在畫布中建立從該點到最後指定點的線條
          ctx.closePath(); //建立從當前點回到起始點的路徑
          ctx.strokeStyle = '#000'; //設定或返回用於筆觸的顏色、漸變或模式
          ctx.lineWidth = 1 * this.rem; //設定或返回當前的線條寬度
          ctx.stroke(); //繪製已定義的路徑
          ctx.restore(); //返回之前儲存過的路徑狀態和屬性
        }
        //小時的刻度，每小時轉30deg
        for (var i = 0; i < 12; i++) {
          ctx.save();
          ctx.rotate(30 * i * Math.PI / 180);
          ctx.beginPath();
          ctx.moveTo(0, -79 * this.rem);
          ctx.lineTo(0, -87 * this.rem);
          ctx.closePath();
          ctx.strokeStyle = '#000';
          ctx.lineWidth = 2 * this.rem;
          ctx.stroke();
          ctx.restore();
        }
      },
      drawHour: function (hour, minute) {
        var ctx = this.ctx;
        ctx.save();
        ctx.beginPath();
        var hRad = 2 * Math.PI / 12 * hour;
        var mRad = 2 * Math.PI / 12 / 60 * minute;
        ctx.rotate(hRad + mRad);
        ctx.lineWidth = 6 * this.rem;
        ctx.lineCap = "round"; //設定或返回線條的結束端點樣式
        ctx.moveTo(0, 10 * this.rem);
        ctx.lineTo(0, -this.r / 2);
        ctx.stroke();
        ctx.restore();
      },
      drawMinute: function (minute) {
        var ctx = this.ctx;
        ctx.save();
        ctx.beginPath();
        var rad = 2 * Math.PI / 60 * minute;
        ctx.rotate(rad);
        ctx.lineWidth = 3 * this.rem;
        ctx.lineCap = "round";
        ctx.moveTo(0, 10 * this.rem);
        ctx.lineTo(0, -this.r + 26 * this.rem);
        ctx.stroke();
        ctx.restore();
      },
      //drawSecond: function (second){
      //
      //},

      drawDot: function (minute) {
        var ctx = this.ctx;
        ctx.beginPath();
        ctx.fillStyle = "#fff";
        ctx.arc(0, 0, 3 * this.rem, 0, 2 * Math.PI, false);
        ctx.fill();
      }
    };

win.DrawClock = DrawClock;
})(window);

  var h1 = Math.floor(Math.random() * 12) + 1;
  var m1 = Math.floor(Math.random() * 12) * 5;
  var h2 = Math.floor(Math.random() * 12) + 1;
  var m2 = Math.floor(Math.random() * 12) * 5;
  var h3 = Math.floor(Math.random() * 12) + 1;
  var m3 = Math.floor(Math.random() * 12) * 5;
  var h4 = Math.floor(Math.random() * 12) + 1;
  var m4 = Math.floor(Math.random() * 12) * 5;

  var h5 = Math.floor(Math.random() * 12) + 1;
  var m5 = Math.floor(Math.random() * 12) * 5;
  var h6 = Math.floor(Math.random() * 12) + 1;
  var m6 = Math.floor(Math.random() * 12) * 5;
  var h7 = Math.floor(Math.random() * 12) + 1;
  var m7 = Math.floor(Math.random() * 12) * 5;
  var h8 = Math.floor(Math.random() * 12) + 1;
  var m8 = Math.floor(Math.random() * 12) * 5;

  



  var h15 = Math.floor(Math.random() * 12) + 1;
  var m15 = Math.floor(Math.random() * 12) * 5 ;
  var h16 = Math.floor(Math.random() * 12) + 1;
  var m16 = Math.floor(Math.random() * 12) * 5;
  var h17 = Math.floor(Math.random() * 12) + 1;
  var m17 = Math.floor(Math.random() * 12) * 5;
  var h18 = Math.floor(Math.random() * 12) + 1;
  var m18 = Math.floor(Math.random() * 12) * 5;
  var h19 = Math.floor(Math.random() * 12) + 1;
  var m19 = Math.floor(Math.random() * 12) * 5;
  var h20 = Math.floor(Math.random() * 12) + 1;
  var m20 = Math.floor(Math.random() * 12) * 5;
  var h21 = Math.floor(Math.random() * 12) + 1;
  var m21 = Math.floor(Math.random() * 12) * 5;
  var h22 = Math.floor(Math.random() * 12) + 1;
  var m22 = Math.floor(Math.random() * 12) * 5;
  var h23 = Math.floor(Math.random() * 12) + 1;
  var m23 = Math.floor(Math.random() * 12) * 5;
  var h24 = Math.floor(Math.random() * 12) + 1;
  var m24 = Math.floor(Math.random() * 12) * 5;
  var h25 = Math.floor(Math.random() * 12) + 1;
  var m25 = Math.floor(Math.random() * 12) * 5;
  var h26 = Math.floor(Math.random() * 12) + 1;
  var m26 = Math.floor(Math.random() * 12) * 5;

  
  


  function drawclock(clock,h,m){           //畫時鐘的function
    new DrawClock({
    el: document.getElementById(clock),
        hour: h,
        minute: m
    });
  }


  
 




 



 

  
  
