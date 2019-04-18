function anw_math_add_sub_question_pictures(w,x,y,z){
    var imgurl=[
      'img/fruit/apple.png',
      'img/fruit/banana.png',
      'img/fruit/kiwi.png',
      'img/fruit/melon.png',
      'img/fruit/orange.png',
      'img/fruit/peach.png',
      'img/fruit/pear.png',
      'img/fruit/pear2.png',
      'img/fruit/pepper.png',
      'img/fruit/persimmon.png',
      'img/fruit/strawberry.png',
      'img/fruit/tomato.png',
  ];
    for(var i=1;i<=w;i++){
      document.write('<img src="'+imgurl[y]+'" width="50px"; height="50px";>');
    }
    for(var i=1;i<=x;i++){
      document.write('<img src="'+imgurl[z]+'" width="50px"; height="50px";>');
    }
  }
  function anw_math_add_sub_pictures(x){
    var imgurl=[
      'img/fruit/apple.png',
      'img/fruit/banana.png',
      'img/fruit/kiwi.png',
      'img/fruit/melon.png',
      'img/fruit/orange.png',
      'img/fruit/peach.png',
      'img/fruit/pear.png',
      'img/fruit/pear2.png',
      'img/fruit/pepper.png',
      'img/fruit/persimmon.png',
      'img/fruit/strawberry.png',
      'img/fruit/tomato.png',
  ];
      document.write('<img src="'+imgurl[x]+'" width="50px" height="50px" vertical-align : middle;>');
  }
  function anw_math_add_sub_sign(x){
  	var am=[' 總共 ',
  			' 相差 ',];
  	document.write(am[x]);
  }