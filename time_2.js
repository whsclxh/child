
let BreakException = {};

function add_listener(element, event_name, handler) {
  if (element.addEventListener) {
    element.addEventListener(event_name, handler, false);
  } else if (element.attachEvent) {
    element.attachEvent('on' + event_name, handler);
  } else {
    element['on' + event_name] = handler;
  }
}

function remove_listener(element, event_name, handler) {
  if (element.addEventListener) {
    element.removeEventListener(event_name, handler, false);
  } else if (element.detachEvent) {
    element.detachEvent('on' + event_name, handler);
  } else {
    element['on' + event_name] = null;
  }
}

function random_int(max) {
  return Math.floor(Math.random() * max);
}

(function (win) {
  function DrawClock(options) {
    this.canvas = options.el;
    this.hour = options.hour;
    this.minute = options.minute;
    this.ctx = this.canvas.getContext('2d'); //方法返回一個用於在畫布上繪圖的環境
    this.width = this.ctx.canvas.width;
    this.height = this.ctx.canvas.height;
    this.r = this.width / 2;
    this.rem = this.width / 200;
    this.digits = [3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 1, 2];

    this.init();
  }

  DrawClock.prototype = {
    init: function () {
      var ctx = this.ctx;
      ctx.clearRect(0, 0, this.width, this.height); //在給定的矩形內清除指定的畫素

      this.drawBackground();
      this.drawHour();
      this.drawMinute();
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
      ctx.fillStyle = "#fff";
      ctx.fill();
      ctx.stroke();
      ctx.font = 16 * this.rem + "px Arial"; //設定或返回文字內容的當前字型屬性
      ctx.textAlign = "center"; //設定或返回文字內容的當前對齊方式
      ctx.textBaseline = "middle"; //設定或返回在繪製文字時使用的當前文字基線
      ctx.fillStyle = "#000";
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
    drawHour: function () {
      var ctx = this.ctx;
      ctx.save();
      ctx.beginPath();
      var hRad = 2 * Math.PI / 12 * this.hour;
      var mRad = 2 * Math.PI / 12 / 60 * this.minute;
      ctx.rotate(hRad + mRad);
      ctx.lineWidth = 6 * this.rem;
      ctx.lineCap = "round"; //設定或返回線條的結束端點樣式
      ctx.moveTo(0, 10 * this.rem);
      ctx.lineTo(0, -this.r / 2);
      ctx.stroke();
      ctx.restore();
    },
    drawMinute: function () {
      var ctx = this.ctx;
      ctx.save();
      ctx.beginPath();
      var rad = 2 * Math.PI / 60 * this.minute;
      ctx.rotate(rad);
      ctx.lineWidth = 3 * this.rem;
      ctx.lineCap = "round";
      ctx.moveTo(0, 10 * this.rem);
      ctx.lineTo(0, -this.r + 26 * this.rem);
      ctx.stroke();
      ctx.restore();
    },
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

(function (win) {
  function Problem(options) {
    this.problem_element = document.createElement('div');
    this.clock_canvas = document.createElement('canvas');
    this.dot_clock = document.createElement('span');
    this.dot_answer = document.createElement('span');
    this.answer = document.createElement('span');
    this.group_left = document.createElement('div');
    this.group_right = document.createElement('div');

    this.id = options.id;
    this.left_onclick = options.left_onclick;
    this.right_onclick = options.right_onclick;
    this.clock_hour = options.clock_hour;
    this.clock_minute = options.clock_minute;
    this.answer_hour = options.answer_hour;
    this.answer_minute = options.answer_minute;
    this.get_dragging_info = options.get_dragging_info;
    this.set_dragging_info = options.set_dragging_info;

    this.group_left.classList.add('problem-group');
    this.group_right.classList.add('problem-left');
    this.group_left.appendChild(this.clock_canvas);
    this.group_left.appendChild(this.dot_clock);
    this.group_right.appendChild(this.dot_answer);
    this.group_right.appendChild(this.answer);

    this.problem_element.classList.add('problem');
    this.problem_element.appendChild(this.group_left);
    this.problem_element.appendChild(this.group_right);

    this.clock_canvas.classList.add('clock');
    this.clock_canvas.setAttribute('width', '200%');
    this.clock_canvas.setAttribute('height', '200%');

    this.dot_clock.classList.add('dot');
    this.dot_answer.classList.add('dot');
    this.answer.classList.add('time-text');

    this.updateClock();
    this.updateAnswer();
  }
  Problem.prototype = {
    updateClock: function () {
      new DrawClock({
        el: this.clock_canvas,
        hour: this.clock_hour,
        minute: this.clock_minute
      });
    },
    updateAnswer: function () {
      this.answer.innerHTML = this.answer_hour + ':' +
        (this.answer_minute < 10 ? '0' : '') + this.answer_minute;
    },
    set left_onclick(handler) {
      let problem_this = this;
      add_listener(this.dot_clock, 'mousedown', function(event) {
        event.stopPropagation();
        problem_this.set_dragging_info(true, true);
        handler(problem_this.id);
      });
      add_listener(this.dot_clock, 'mouseup', function(event) {
        event.stopPropagation();
        let dragging_info = problem_this.get_dragging_info();
        if (dragging_info.is_dragging &&
            !dragging_info.is_left) {
          problem_this.set_dragging_info(false);
          handler(problem_this.id);
        }
      });
    },
    set right_onclick(handler) {
      let problem_this = this;
      add_listener(this.dot_answer, 'mousedown', function(event) {
        event.stopPropagation();
        problem_this.set_dragging_info(true, false);
        handler(problem_this.id);
      });
      add_listener(this.dot_answer, 'mouseup', function(event) {
        event.stopPropagation();
        let dragging_info = problem_this.get_dragging_info();
        if (dragging_info.is_dragging &&
            dragging_info.is_left) {
          problem_this.set_dragging_info(false);
          handler(problem_this.id);
        }
      });
    },
    set clock_hour(hour) {
      this.ch = hour;
      this.updateClock();
    },
    get clock_hour() {
      return this.ch;
    },
    set clock_minute(minute) {
      this.cm = minute;
      this.updateClock();
    },
    get clock_minute() {
      return this.cm;
    },
    set answer_hour(hour) {
      this.ah = hour;
      this.updateAnswer();
    },
    get answer_hour() {
      return this.ah;
    },
    set answer_minute(minute) {
      this.am = minute;
      this.updateAnswer();
    },
    get answer_minute() {
      return this.am;
    },
    set dot_clock_color(color) {
      this.dcc = color;
      this.dot_clock.style.background = color;
    },
    get dot_clock_color() {
      return this.dcc;
    },
    dot_clock_reset_color: function() {
      this.dot_clock_color = "";
    },
    set dot_answer_color(color) {
      this.dac = color;
      this.dot_answer.style.background = color;
    },
    get dot_answer_color() {
      return this.dac;
    },
    dot_answer_reset_color: function() {
      this.dot_answer_color = "";
    }
  };
  win.Problem = Problem;
})(window);

(function (win) {
  function Line(options) {
    this.parent = options.parent;
    this.element = document.createElement('span');
    this.element.classList.add('line');
    this.height = this.element.style.height;
  }
  Line.prototype = {
    set start_x(x) {
      this.sx = x;
      this.update();
    },
    set start_y(y) {
      this.sy = y;
      this.update();
    },
    set end_x(x) {
      this.ex = x;
      this.update();
    },
    set end_y(y) {
      this.ey = y;
      this.update();
    },
    set color(color) {
      this.c = color;
      this.element.style.background = color;
    },
    get color() {
      return this.c;
    },
    reset_color: function() {
      this.color = "";
    },
    end_xy: function(x, y) {
      this.ex = x;
      this.ey = y;
      this.update();
    },
    on_element: function(element) {
      this.connect_elements(element, element);
    },
    connect_elements: function(e1, e2) {
      this.e1 = e1;
      this.e2 = e2;
      this.update_coordinate();
    },
    update_coordinate: function() {
      if (this.is_displaying) {
        if (this.e1 != undefined && this.e2 != undefined) {
          let a = this.sy, b = this.sx, c = this.ey, d = this.ex;
          this.sy = this.e1.offsetTop + this.e1.offsetHeight / 2;
          this.sx = this.e1.offsetLeft + this.e1.offsetWidth / 2;
          this.ey = this.e2.offsetTop + this.e2.offsetHeight / 2;
          this.ex = this.e2.offsetLeft + this.e2.offsetWidth / 2;
          if (a != this.sy || b != this.sx || c != this.ey || d != this.ex) {
            this.update();
          }
        }
      }
    },
    update: function() {
      if (this.is_displaying) {
        let opposite = this.ey - this.sy;
        let adjacent = this.ex - this.sx;
        let hypotenuse = Math.sqrt(opposite * opposite + adjacent * adjacent);
        var angle = 180 / Math.PI * Math.acos(adjacent / hypotenuse);
        if (opposite < 0) angle *= -1;
        this.element.style.top = (this.sy + opposite / 2 -
                                  this.element.offsetHeight / 2) + 'px';
        this.element.style.left = (this.sx + adjacent / 2 -
                                   hypotenuse / 2) + 'px';
        this.element.style.width = hypotenuse + 'px';
        this.element.style["-webkit-transform"] = 'rotate('+ angle +'deg)';
        this.element.style["-moz-transform"] = 'rotate('+ angle +'deg)';
        this.element.style["-ms-transform"] = 'rotate('+ angle +'deg)';
        this.element.style["-o-transform"] = 'rotate('+ angle +'deg)';
        this.element.style["-transform"] = 'rotate('+ angle +'deg)';
      }
    },
    remove: function() {
      this.is_displaying = false;
      this.element.remove();
    },
    append_to_parent: function() {
      this.is_displaying = true;
      this.parent.appendChild(this.element);
    },
  };
  win.Line = Line;
})(window);

(function() {
  const color_list = new Array(
    "#ff1744",
    "#d500f9",
    "#651fff",
    "#2979ff",
    "#00b0ff",
    "#00e5ff",
    "#1de9b6",
    "#00e676",
    "#76ff03",
    "#c6ff00",
    "#ffea00",
    "#ffc400",
    //"#ff9100",
    "#ff3d00",
  );
  let colors_used = new Array();
  let colors_unused = color_list.slice();
  let num_of_problems = 4;
  let questions = new Array();
  let answers = new Array();
  let user_answers_lr = new Array();
  let user_answers_rl = new Array();
  let problems_element = document.getElementById('problems');
  let check_answer_button = document.getElementById('check-answer-button');
  let displays = new Array();
  let lines = new Array();
  let line_on_mouse = new Line({parent: problems_element});

  var clicked_left = undefined;
  var clicked_right = undefined;
  var current_color = undefined;

  var dragging_info = {};

  function get_dragging_info() {
    return dragging_info;
  }

  function set_dragging_info(is_dragging, is_left) {
    dragging_info = {
      is_dragging: is_dragging,
      is_left: is_left,
    };
  }

  line_on_mouse.parent = problems_element;

  function get_color() {
    let index = random_int(colors_unused.length);
    let color = colors_unused[index];
    colors_unused.splice(index, 1);
    colors_used.push(color);
    return color;
  }

  function put_color(color) {
    let index = colors_used.indexOf(color);
    if (index > -1) {
      colors_used.splice(index, 1);
      colors_unused.push(color);
    }
  }

  function set_current_color(color) {
    current_color = color;
    line_on_mouse.color = color;
  }

  function reset_current_color() {
    current_color = undefined;
    line_on_mouse.color = "";
  }

  function remove_line(left) {
    let right = user_answers_lr[left];
    user_answers_lr[left] = undefined;
    user_answers_rl[right] = undefined;
    put_color(lines[left].color);
    lines[left].remove();
    displays[left].dot_clock_reset_color();
    displays[right].dot_answer_reset_color();
  }

  function link_dots(left, right) {
    user_answers_lr[left] = right;
    user_answers_rl[right] = left;
    clicked_left = undefined;
    clicked_right = undefined;
    lines[left].append_to_parent();
    lines[left].connect_elements(displays[left].dot_clock,
                                 displays[right].dot_answer);
    line_on_mouse.remove();
    lines[left].color = current_color;
    displays[left].dot_clock_color = current_color;
    displays[right].dot_answer_color = current_color;
    reset_current_color();
  }

  function cancel_linking_left(id) {
    clicked_left = undefined;
    line_on_mouse.remove();
    put_color(current_color);
    reset_current_color();
    displays[id].dot_clock_reset_color();
  }

  function cancel_linking_right(id) {
    clicked_right = undefined;
    line_on_mouse.remove();
    put_color(current_color);
    reset_current_color();
    displays[id].dot_answer_reset_color();
  }

  function left_onclick(id) {
    if (user_answers_lr[id] != undefined) {
      remove_line(id);
      check_answer();
    }
    if (clicked_right != undefined) {
      link_dots(id, clicked_right);
      check_answer();
    } else if (clicked_left == id) {
      cancel_linking_left(id);
      check_answer();
    } else {
      if (clicked_left != undefined) {
        displays[clicked_left].dot_clock_reset_color();
      }
      clicked_left = id;
      line_on_mouse.append_to_parent();
      line_on_mouse.on_element(displays[id].dot_clock);
      let color = get_color();
      set_current_color(color);
      displays[id].dot_clock_color = color;
    }
  }

  function right_onclick(id) {
    if ((left = user_answers_rl[id]) != undefined) {
      remove_line(left);
      check_answer();
    }
    if ((left = clicked_left) != undefined) {
      link_dots(clicked_left, id);
      check_answer();
    } else if (clicked_right == id) {
      cancel_linking_right(id);
      check_answer();
    } else {
      if (clicked_right != undefined) {
        displays[clicked_right].dot_answer_reset_color();
      }
      clicked_right = id;
      line_on_mouse.append_to_parent();
      line_on_mouse.on_element(displays[id].dot_answer);
      let color = get_color();
      set_current_color(color);
      displays[id].dot_answer_color = color;
    }
  }

  function verify_answer() {
    for (var i = 0; i < num_of_problems; ++i) {
      if (answers[i] != user_answers_rl[i]) {
        return false;
      }
    }
    return true;
  }

  function set_clear() {
    check_answer_button.innerHTML = "Clear!!";
    check_answer_button.classList.add("check-answer-button-clear");
  }

  function unset_clear() {
    check_answer_button.innerHTML = "Check";
    check_answer_button.classList.remove("check-answer-button-clear");
  }

  function check_answer() {
    if (verify_answer()) {
      set_clear();
    } else {
      unset_clear();
    }
  }

  for (var i = 0; i < num_of_problems; ++i) {
    user_answers_lr[i] = undefined;
    user_answers_rl[i] = undefined;

    lines.push(new Line({parent: problems_element}));

    var exist = false;
    var hour = 0, minute = 0;
    do {
      exist = false;
      hour = random_int(13);
      minute = random_int(12) * 5;
      try {
        questions.forEach(function(element) {
          if (element.hour === hour && element.minute === minute) {
            exist = true;
            throw BreakException;
          }
        });
      } catch (e) { }
    } while (exist);

    questions.push({
      hour: hour,
      minute: minute
    });
    answers.push(i);
  }
  // answer = [0, 1, 2, 3]
  for (var i = 0; i < num_of_problems; ++i) {
    let j = random_int(num_of_problems);
    let tmp = answers[i];
    answers[i] = answers[j];
    answers[j] = tmp;
  }
  // answer = [3, 1, 0, 2]
  for (var i = 0; i < num_of_problems; ++i) {
    displays[i] = new Problem({
      id: i,
      left_onclick: left_onclick,
      right_onclick: right_onclick,
      clock_hour: questions[i].hour,
      clock_minute: questions[i].minute,
      answer_hour: questions[answers[i]].hour,
      answer_minute: questions[answers[i]].minute,
      get_dragging_info: get_dragging_info,
      set_dragging_info: set_dragging_info,
    });
    problems_element.appendChild(displays[i].problem_element);
  }

  add_listener(check_answer_button, 'click', function() {
    if (this.last_timeout != undefined) {
      clearTimeout(this.last_timeout);
    }
    if (verify_answer()) {
      set_clear();
    } else {
      unset_clear();
      check_answer_button.innerHTML = "Wrong!";
      check_answer_button.classList.add("check-answer-button-wrong");
      this.last_timeout = setTimeout(function() {
        check_answer_button.classList.remove("check-answer-button-wrong");
        if (!verify_answer()) {
          unset_clear();
        }
      }, 1000);
    }
  });

  add_listener(problems_element, 'mousemove', function(event) {
    let x = event.clientX - problems_element.offsetLeft + (window.pageXOffset || document.documentElement.scrollLeft) - (document.documentElement.clientLeft || 0);
    let y = event.clientY - problems_element.offsetTop + (window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0);
    line_on_mouse.end_xy(x, y);
  });

  add_listener(problems_element, 'mousedown', function(event) {
    if (clicked_left != undefined) {
      cancel_linking_left(clicked_left);
    }
    if (clicked_right != undefined) {
      cancel_linking_right(clicked_right);
    }
  });

  function update_lines() {
    for (var i = 0; i < num_of_problems; ++i) {
      lines[i].update_coordinate();
    }
  }

  add_listener(window, 'resize', update_lines);
  setInterval(update_lines, 100);
})();
