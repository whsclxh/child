<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript">
	//q1
	function q1pictures(x,y){
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
		for(var i=1;i<=x;i++){
			document.write('<img src="'+imgurl[y]+'" width=50px; height=50px;>');
		}
	}
	//q2
	function q2pictures(x){
		var imgurl=[
    	'img/animal/bear.png',
    	'img/animal/crocodile.png',
    	'img/animal/elephant.png',
    	'img/animal/giraffe.png',
    	'img/animal/gorilla.png',
    	'img/animal/hedgehog.png',
    	'img/animal/kangaroo.png',
    	'img/animal/koala.png',
    	'img/animal/monkey.png',
    	'img/animal/lion.png',
    	'img/animal/owl.png',
    	'img/animal/penguin.png',
	];
		document.write('<img src="'+imgurl[x]+'" width=80px; height=80px;>');
	}
	function setquestionname(x){
		var fruitsname=[
			'熊',
			'鱷魚',
			'大象',
			'長頸鹿',
			'大猩猩',
			'刺蝟',
			'袋鼠',
			'無尾熊',
			'猴子',
			'獅子',
			'貓頭鷹',
			'企鵝',
		];
		document.write(fruitsname[x]);
	}
	function writedirection(x,y){
		if(x==0){
			var direction=[
			'下面',
			'右邊',];
			document.write(direction[y]);
		}else if(x==1){
			var direction=[
			'下面',
			'左邊',
			'右邊',];
			document.write(direction[y]);
		}else if(x==2){
			var direction=[
			'下面',
			'左邊',];
			document.write(direction[y]);
		}else if(x==3){
			var direction=[
			'上面',
			'下面',
			'右邊',];
			document.write(direction[y]);
		}else if(x==4){
			var direction=[
			'上面',
			'下面',
			'左邊',
			'右邊',];
			document.write(direction[y]);
		}else if(x==5){
			var direction=[
			'上面',
			'下面',
			'左邊',];
			document.write(direction[y]);
		}else if(x==6){
			var direction=[
			'上面',
			'右邊',];
			document.write(direction[y]);
		}else if(x==7){
			var direction=[
			'上面',
			'左邊',
			'右邊',];
			document.write(direction[y]);
		}else{
			var direction=[
			'上面',
			'左邊',];
			document.write(direction[y]);
		}
	}
	//q3
	function q3pictures(x,y){
		var imgurl=[
    	'img/longshort/c1.png',
    	'img/longshort/r1.png',
    	'img/longshort/p1.png',
    	'img/longshort/p3.png',
    	'img/longshort/p5.png',
	];
		document.write('<img src="'+imgurl[x]+'" width='+y+'px height=50px;>');
	}
	//q4
	function q4pictures(x){
		var imgurl=[
    	'img/animal/bear.png',
    	'img/animal/crocodile.png',
    	'img/animal/elephant.png',
    	'img/animal/giraffe.png',
    	'img/animal/gorilla.png',
    	'img/animal/hedgehog.png',
    	'img/animal/kangaroo.png',
    	'img/animal/koala.png',
    	'img/animal/monkey.png',
    	'img/animal/lion.png',
    	'img/animal/owl.png',
    	'img/animal/penguin.png',
    	'img/animal/tiger.png',
	];
		document.write('<img src="'+imgurl[x]+'" align="absmiddle">');
	}
	function direction(x){
		var dd=['左邊','右邊',];
		document.write(dd[x]);
	}
	function w(x){
		document.write(x+1);
	}
	function ww(x){
		document.write(x);
	}
	//q5
	function questionpictures(x) {
		if(x==0){
		document.write('<img src="img/shape/circle0.png" width="100px"; height="100px";>');
		}else if(x==1){
		document.write('<img src="img/shape/squre0.png" width="100px"; height="100px";>');
		}else if(x==2){
		document.write('<img src="img/shape/rectangle0.png" width="100px"; height="100px";>');
		}else{
		document.write('<img src="img/shape/triangle0.png" width="100px"; height="100px";>');
		}
	}
	function insertp1(x,y,z){
		if(x==0){
			var view=[
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else if(x==1){
			var view=[			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else if(x==2){
			var view=[
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else{
			var view=[
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}
	}
	function insertp2(x,y,z){
		if(x==0){
			var view=[
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else if(x==1){
			var view=[			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else if(x==2){
			var view=[
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else{
			var view=[
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}
	}
	function insertp3(x,y,z){
		if(x==0){
			var view=[
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else if(x==1){
			var view=[			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else if(x==2){
			var view=[
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else{
			var view=[
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}
	}
	function insertp4(x,y,z){
		if(x==0){
			var view=[
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else if(x==1){
			var view=[			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else if(x==2){
			var view=[
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}else{
			var view=[
			'img/shape/triangle/triangle1.png',
			'img/shape/triangle/triangle2.png',
			'img/shape/triangle/triangle3.png',
			'img/shape/triangle/triangle4.png',
			'img/shape/triangle/triangle5.png',
			'img/shape/triangle/triangle6.png',
			'img/shape/triangle/triangle7.png',
			'img/shape/triangle/triangle8.png',
			'img/shape/triangle/triangle9.png',
			'img/shape/triangle/triangle10.png',
			'img/shape/rectangle/rectangle1.png',
			'img/shape/rectangle/rectangle2.png',
			'img/shape/rectangle/rectangle3.png',
			'img/shape/rectangle/rectangle4.png',
			'img/shape/rectangle/rectangle5.png',
			'img/shape/rectangle/rectangle6.png',
			'img/shape/rectangle/rectangle7.png',
			'img/shape/rectangle/rectangle8.png',
			'img/shape/rectangle/rectangle9.png',
			'img/shape/rectangle/rectangle10.png',			
			'img/shape/squre/squre1.png',
			'img/shape/squre/squre2.png',
			'img/shape/squre/squre3.png',
			'img/shape/squre/squre4.png',
			'img/shape/squre/squre5.png',
			'img/shape/squre/squre6.png',
			'img/shape/squre/squre7.png',
			'img/shape/squre/squre8.png',
			'img/shape/squre/squre9.png',
			'img/shape/squre/squre10.png',
			'img/shape/circle/circle1.png',
			'img/shape/circle/circle2.png',
			'img/shape/circle/circle3.png',
			'img/shape/circle/circle4.png',
			'img/shape/circle/circle5.png',
			'img/shape/circle/circle6.png',
			'img/shape/circle/circle7.png',
			'img/shape/circle/circle8.png',
			'img/shape/circle/circle9.png',
			'img/shape/circle/circle10.png',
			];
			if(y==1){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else if(y==2){
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}else{
				document.write('<img src="'+view[z]+'" width="100px"; height="100px";>');
			}
		}
	}

</script>
<?php
//q1參數
@$q1q11 = $_POST['q1question11'];
@$q1q12 = $_POST['q1question12'];
@$q1q21 = $_POST['q1question21'];
@$q1q22 = $_POST['q1question22'];
@$q1q31 = $_POST['q1question31'];
@$q1q32 = $_POST['q1question32'];
@$q1q41 = $_POST['q1question41'];
@$q1q42 = $_POST['q1question42'];
@$q1q51 = $_POST['q1question51'];
@$q1q52 = $_POST['q1question52'];
@$q1q1 = $_POST['q1question1'];
@$q1q2 = $_POST['q1question2']; 
@$q1q3 = $_POST['q1question3']; 
@$q1q4 = $_POST['q1question4']; 
@$q1q5 = $_POST['q1question5'];
$q1anw1 = $_POST['anwser1'];
$q1anw2 = $_POST['anwser2'];
$q1anw3 = $_POST['anwser3'];
$q1anw4 = $_POST['anwser4'];
$q1anw5 = $_POST['anwser5'];
$q1anw6 = $_POST['anwser6'];
$q1anw7 = $_POST['anwser7'];
$q1anw8 = $_POST['anwser8'];
$q1anw9 = $_POST['anwser9'];
$q1anw10 = $_POST['anwser10'];
$q1pic1 = $_POST['q1picture1'];
$q1pic2 = $_POST['q1picture2'];
$q1pic3 = $_POST['q1picture3'];
$q1pic4 = $_POST['q1picture4'];
$q1pic5 = $_POST['q1picture5'];
$q1pic6 = $_POST['q1picture6'];
$q1pic7 = $_POST['q1picture7'];
$q1pic8 = $_POST['q1picture8'];
$q1pic9 = $_POST['q1picture9'];
$q1pic10 = $_POST['q1picture10'];
$q1score=0;
//q1對答案
if(($q1q11)==($q1anw1)){
	$q1score=$q1score+1;
}
if(($q1q12)==($q1anw2)){
	$q1score=$q1score+1;
}
if(($q1q21)==($q1anw3)){
	$q1score=$q1score+1;
}
if(($q1q22)==($q1anw4)){
	$q1score=$q1score+1;
}
if(($q1q31)==($q1anw5)){
	$q1score=$q1score+1;
}
if(($q1q32)==($q1anw6)){
	$q1score=$q1score+1;
}
if(($q1q41)==($q1anw7)){
	$q1score=$q1score+1;
}
if(($q1q42)==($q1anw8)){
	$q1score=$q1score+1;
}
if(($q1q51)==($q1anw9)){
	$q1score=$q1score+1;
}
if(($q1q52)==($q1anw10)){
	$q1score=$q1score+1;
}
if(($q1anw1)>($q1anw2)){
	if(($q1q1)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q1)==2){
		$q1score=$q1score+2;
	}
}
if(($q1anw3)>($q1anw4)){
	if(($q1q2)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q2)==2){
		$q1score=$q1score+2;
	}
}
if(($q1anw5)>($q1anw6)){
	if(($q1q3)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q3)==2){
		$q1score=$q1score+2;
	}
}
if(($q1anw7)>($q1anw8)){
	if(($q1q4)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q4)==2){
		$q1score=$q1score+2;
	}
}
if(($q1anw9)>($q1anw10)){
	if(($q1q5)==1){
		$q1score=$q1score+2;
	}
}else{
	if(($q1q5)==2){
		$q1score=$q1score+2;
	}
}
//q2參數
@$q2q1 = $_POST['q2question1'];   //作答者的答案
@$q2q2 = $_POST['q2question2'];
@$q2q3 = $_POST['q2question3'];
@$q2q4 = $_POST['q2question4'];
$q2anw1 = $_POST['q2anwser1'];  //正確答案
$q2anw2 = $_POST['q2anwser2'];
$q2anw3 = $_POST['q2anwser3'];
$q2anw4 = $_POST['q2anwser4'];
$q2pic0 = $_POST['picture0'];	//9宮格題目
$q2pic1 = $_POST['picture1'];
$q2pic2 = $_POST['picture2'];
$q2pic3 = $_POST['picture3'];
$q2pic4 = $_POST['picture4'];
$q2pic5 = $_POST['picture5'];
$q2pic6 = $_POST['picture6'];
$q2pic7 = $_POST['picture7'];
$q2pic8 = $_POST['picture8'];
$qf1 = $_POST['questionfruit1'];  //題目的水果
$qf2 = $_POST['questionfruit2'];
$qf3 = $_POST['questionfruit3'];
$qf4 = $_POST['questionfruit4'];
$q2qd1 = $_POST['q2questiondirection1']; //題目的方向
$q2qd2 = $_POST['q2questiondirection2'];
$q2qd3 = $_POST['q2questiondirection3'];
$q2qd4 = $_POST['q2questiondirection4'];
$qo11 = $_POST['questionoption11'];  //題目的選項
$qo12 = $_POST['questionoption12'];
$qo13 = $_POST['questionoption13'];
$qo14 = $_POST['questionoption14'];
$qo21 = $_POST['questionoption21'];
$qo22 = $_POST['questionoption22'];
$qo23 = $_POST['questionoption23'];
$qo24 = $_POST['questionoption24'];
$qo31 = $_POST['questionoption31'];
$qo32 = $_POST['questionoption32'];
$qo33 = $_POST['questionoption33'];
$qo34 = $_POST['questionoption34'];
$qo41 = $_POST['questionoption41'];
$qo42 = $_POST['questionoption42'];
$qo43 = $_POST['questionoption43'];
$qo44 = $_POST['questionoption44'];
//q2對答案
$q2score=0;
if(($q2q1)==($q2anw1)){
	$q2score=$q2score+5;
}
if(($q2q2)==($q2anw2)){
	$q2score=$q2score+5;
}
if(($q2q3)==($q2anw3)){
	$q2score=$q2score+5;
}
if(($q2q4)==($q2anw4)){
	$q2score=$q2score+5;
}
$a=array($q2pic0,$q2pic1,$q2pic2,$q2pic3,$q2pic4,$q2pic5,$q2pic6,$q2pic7,$q2pic8);
$d=array($q2qd1,$q2qd2,$q2qd3,$q2qd4);
//q3參數
@$q3q1 = $_POST['q3question1'];
@$q3q2 = $_POST['q3question2']; 
@$q3q3 = $_POST['q3question3']; 
@$q3q4 = $_POST['q3question4']; 
@$q3q5 = $_POST['q3question5'];
$q3piclen1 = $_POST['q3picturelength1'];
$q3piclen2 = $_POST['q3picturelength2'];
$q3piclen3 = $_POST['q3picturelength3'];
$q3piclen4 = $_POST['q3picturelength4'];
$q3piclen5 = $_POST['q3picturelength5'];
$q3piclen6 = $_POST['q3picturelength6'];
$q3piclen7 = $_POST['q3picturelength7'];
$q3piclen8 = $_POST['q3picturelength8'];
$q3piclen9 = $_POST['q3picturelength9'];
$q3piclen10 = $_POST['q3picturelength10'];
$q3pic1 = $_POST['q3picture1'];
$q3pic2 = $_POST['q3picture2'];
$q3pic3 = $_POST['q3picture3'];
$q3pic4 = $_POST['q3picture4'];
$q3pic5 = $_POST['q3picture5'];
$q3score=0;
//q3對答案
if($q3piclen1>$q3piclen2){
	if($q3q1==$q3piclen1){
		$q3score=$q3score+4;
	}
}else{
	if($q3q1==$q3piclen2){
		$q3score=$q3score+4;
	}
}
if($q3piclen3>$q3piclen4){
	if($q3q2==$q3piclen3){
		$q3score=$q3score+4;
	}
}else{
	if($q3q2==$q3piclen4){
		$q3score=$q3score+4;
	}
}
if($q3piclen5>$q3piclen6){
	if($q3q3==$q3piclen5){
		$q3score=$q3score+4;
	}
}else{
	if($q3q3==$q3piclen6){
		$q3score=$q3score+4;
	}
}
if($q3piclen7>$q3piclen9){
	if($q3q4==$q3piclen7){
		$q3score=$q3score+4;
	}
}else{
	if($q3q4==$q3piclen8){
		$q3score=$q3score+4;
	}
}
if($q3piclen9>$q3piclen10){
	if($q3q5==$q3piclen9){
		$q3score=$q3score+4;
	}
}else{
	if($q3q5==$q3piclen10){
		$q3score=$q3score+4;
	}
}
//q4參數
@$anw1=$_POST['q4anwser1'];
@$anw2=$_POST['q4anwser2'];
@$anw3=$_POST['q4anwser3'];
@$anw4=$_POST['q4anwser4'];
$tp1=$_POST['topicpictures1'];
$tp2=$_POST['topicpictures2'];
$tp3=$_POST['topicpictures3'];
$tp4=$_POST['topicpictures4'];
$tp5=$_POST['topicpictures5'];
$tp6=$_POST['topicpictures6'];
$tp7=$_POST['topicpictures7'];
$tp8=$_POST['topicpictures8'];
$qd1=$_POST['questiondirection1'];
$qd2=$_POST['questiondirection2'];
$qd31=$_POST['questiondirection31'];
$qd32=$_POST['questiondirection32'];
$qp1=$_POST['questionpicture1'];
$qp2=$_POST['questionpicture2'];
$qp3=$_POST['questionpicture3'];
$qp21=$_POST['questionpicture21'];
$qp22=$_POST['questionpicture22'];
$qp23=$_POST['questionpicture23'];
//q4對答案
$q4score=0;
$q4a=array($tp1,$tp2,$tp3,$tp4,$tp5,$tp6,$tp7,$tp8);
$ca1=0;
$ca2=0;
$ca3=0;
$ca4=0;
if($qd1==0){
	if(($anw1==$qp1+1)&&($anw1!=null))$q4score=$q4score+5;
	$ca1=$qp1+1;
}else{
	if(($anw1==8-$qp1)&&($anw1!=null))$q4score=$q4score+5;
	$ca1=8-$qp1;
}
if($qd2==0){
	if(($anw2==$qp2)&&($anw2!=null))$q4score=$q4score+5;
	$ca2=$qp2;
}else{
	if(($anw2==7-$qp2)&&($anw2!=null))$q4score=$q4score+5;
	$ca2=7-$qp2;
}
if($qd31==0){
	if(($anw3==$qp3+1)&&($anw3!=null))$q4score=$q4score+5;
	$ca3=$qp3+1;
}else{
	if(($anw3==8-$qp3)&&($anw3!=null))$q4score=$q4score+5;
	$ca3=8-$qp3;
}
if($qd32==0){
	if(($anw4==$qp3+1)&&($anw4!=null))$q4score=$q4score+5;
	$ca4=$qp3+1;
}else{
	if(($anw4==8-$qp3)&&($anw4!=null))$q4score=$q4score+5;
	$ca4=8-$qp3;
}
//q5參數
$sp1 = $_POST['shape1'];
$sp2 = $_POST['shape2'];
$sp3 = $_POST['shape3'];
$sp4 = $_POST['shape4'];
$q5qo11 = $_POST['q5questionoption11'];
$q5qo12 = $_POST['q5questionoption12'];
$q5qo13 = $_POST['q5questionoption13'];
$q5qo21 = $_POST['q5questionoption21'];
$q5qo22 = $_POST['q5questionoption22'];
$q5qo23 = $_POST['q5questionoption23'];
$q5qo31 = $_POST['q5questionoption31'];
$q5qo32 = $_POST['q5questionoption32'];
$q5qo33 = $_POST['q5questionoption33'];
$q5qo41 = $_POST['q5questionoption41'];
$q5qo42 = $_POST['q5questionoption42'];
$q5qo43 = $_POST['q5questionoption43'];
@$q5anw1 = $_POST['q5question1'];
@$q5anw2 = $_POST['q5question2'];
@$q5anw3 = $_POST['q5question3'];
@$q5anw4 = $_POST['q5question4'];
$q5score=0;
$q5qquestion1=array($q5qo11,$q5qo12,$q5qo13);
$q5qquestion2=array($q5qo21,$q5qo22,$q5qo23);
$q5qquestion3=array($q5qo31,$q5qo32,$q5qo33);
$q5qquestion4=array($q5qo41,$q5qo42,$q5qo43);
//q5對答案
if($q5anw1<10&&$q5anw1!=null)$q5score=$q5score+5;
if($q5anw2<10&&$q5anw2!=null)$q5score=$q5score+5;
if($q5anw3<10&&$q5anw3!=null)$q5score=$q5score+5;
if($q5anw4<10&&$q5anw4!=null)$q5score=$q5score+5;
//總分
$totalscore=$q1score+$q2score+$q3score+$q4score+$q5score;
?>
<form name="form1" method="post">
	<div data-role="page" id="anwser">
	<div align="center" valign="middle">
		<h3 align="center" style="color: red">本次作答拿了<?php echo "$totalscore"; ?>/100分</h3>
		<a href="#cognition_anwser1" class="ui-btn" style="width: 10%;" data-transition="slide">來對答案吧!</a>
		</div>	
	</div>
	<div data-role="page" id="cognition_anwser1">
		<h3 align="center" style="color: red">拿了<?php echo "$q1score"; ?>/20分</h3>
		<table border="1" width="60%" align="center">
			<tr>
				<th style="text-align: center; width:90%" >圖</th>
				<th style="text-align: center;" width="5%">原作答</th>
				<th style="text-align: center;" width="5%">原作答</th>
				<th style="text-align: center;" width="5%">正確答案</th>
				<th style="text-align: center;" width="5%">正確答案</th>
			</tr>
			<tr>
				<?php echo "<td width=\"80%\"><script>q1pictures($q1anw1,$q1pic1);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center; \"><input type=\"number\" id=\"q1q11\" name=\"q1question11\"  data-role=\"none\" value=\"$q1q11\" disabled></td>"; ?>
				<td width="%" style="text-align: center;"><input id="q1qq1" name="q1question1" type="radio" value="1" data-role="none" disabled <?php if($q1q1=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq11\" name=\"q1question11\"  data-role=\"none\" value=\"$q1anw1\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq1" name="q1qquestion1" type="radio" disabled data-role="none" <?php if($q1anw1>$q1anw2) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1anw2,$q1pic2);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q12\" name=\"q1question12\" data-role=\"none\" value=\"$q1q12\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq2" name="q1question1" type="radio" value="2" data-role="none" disabled <?php if($q1q1=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qqq12\" name=\"q1question12\"data-role=\"none\" value=\"$q1anw2\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq2" name="q1qquestion1" type="radio" disabled data-role="none"<?php if($q1anw2>$q1anw1) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1anw3,$q1pic3);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q21\" name=\"q1question21\" data-role=\"none\" value=\"$q1q21\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq3" name="q1question2" value="1" type="radio" disabled data-role="none" <?php if($q1q2=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq21\" name=\"q1question21\" data-role=\"none\" value=\"$q1anw3\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq3" name="q1qquestion2" type="radio" disabled data-role="none" <?php if($q1anw3>$q1anw4) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1anw4,$q1pic4);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q22\" name=\"q1question22\" data-role=\"none\" value=\"$q1q22\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq4" name="q1question2" type="radio" value="2" disabled data-role="none" <?php if($q1q2=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq22\" name=\"q1question22\" data-role=\"none\" value=\"$q1anw4\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qqq4" name="q1qquestion2" type="radio" disabled data-role="none" <?php if($q1anw4>$q1anw3) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1anw5,$q1pic5);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q31\" name=\"q1question31\" data-role=\"none\" value=\"$q1q31\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq5" name="q1question3" type="radio" value="1" disabled data-role="none" <?php if($q1q3=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq31\" name=\"q1question31\" data-role=\"none\" value=\"$q1anw5\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qqq5" name="q1qquestion3" type="radio" disabled data-role="none" <?php if($q1anw5>$q1anw6) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1anw6,$q1pic6);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q32\" name=\"q1question32\" data-role=\"none\" value=\"$q1q32\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq6" name="q1question3" type="radio" value="2" disabled data-role="none" <?php if($q1q3=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq32\" name=\"q1question32\" data-role=\"none\" value=\"$q1anw6\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq6" name="q1qquestion3" type="radio" disabled data-role="none" <?php if($q1anw6>$q1anw5) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1anw7,$q1pic7);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q41\" name=\"q1question41\" data-role=\"none\" value=\"$q1q41\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq7" name="q1question4" type="radio" value="1" disabled data-role="none" <?php if($q1q4=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq41\" name=\"q1question41\" data-role=\"none\" value=\"$q1anw7\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq7" name="q1qquestion4" type="radio" disabled data-role="none" <?php if($q1anw7>$q1anw8) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1anw8,$q1pic8);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q42\" name=\"q1question42\" data-role=\"none\" value=\"$q1q42\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq8" name="q1question4" type="radio" value="2" disabled data-role="none" <?php if($q1q4=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq42\" name=\"q1question42\" data-role=\"none\" value=\"$q1anw8\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq8" name="q1qquestion4" type="radio" disabled data-role="none" <?php if($q1anw8>$q1anw7) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1anw9,$q1pic9);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q51\" name=\"q1question51\" data-role=\"none\" value=\"$q1q51\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq9" name="q1question5" type="radio" value="1" disabled data-role="none" <?php if($q1q5=="1") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq51\" name=\"q1question51\" data-role=\"none\" value=\"$q1anw9\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq9" name="q1qquestion5" type="radio" disabled data-role="none" <?php if($q1anw9>$q1anw10) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q1pictures($q1anw10,$q1pic10);</script></td>"; ?>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1q52\" name=\"q1question52\" data-role=\"none\" value=\"$q1q52\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qq10" name="q1question5" type="radio" value="2" disabled data-role="none" <?php if($q1q5=="2") echo "checked=checked" ?>></td>
				<?php echo "<td width=\"5%\" style=\"text-align: center;\"><input type=\"number\" id=\"q1qq52\" name=\"q1question52\" data-role=\"none\" value=\"$q1anw10\" disabled></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="q1qqq10" name="q1qquestion5" type="radio" disabled data-role="none" <?php if($q1anw10>$q1anw9) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<div align="center">
			<a href="#cognition_anwser2" class="ui-btn" style="width: 5%;" data-transition="slide">下一題</a>
		</div>
		</div>

		<div data-role="page" id="cognition_anwser2">
		<h3 align="center" style="color: red">拿了<?php echo "$q2score"; ?>/20分</h3>
		<table border="1" style="margin: auto;">
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic0);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic1);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic2);</script></td>";?>
		</tr>
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic3);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic4);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic5);</script></td>";?>
		</tr>
		<tr>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic6);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic7);</script></td>";?>
			<?php echo "<td style=\"text-align: center;\"><script>q2pictures($q2pic8);</script></td>";?>
		</tr>
	</table>
	<table border="1" style="margin: auto;">
		<tr>
			<th style="text-align: center;">題目</th>
			<th style="text-align: center;">原作答</th>
			<th style="text-align: center;">正確答案</th>
		</tr>
		<tr>
			<td>
				<?php echo "1.在<script>setquestionname($a[$qf1])</script>的<script>writedirection($qf1,$d[0])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q1" name="question55" disabled="disabled" data-role="none" <?php if($q2q1=="$qo11") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo11]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q2" name="question55" disabled="disabled" data-role="none" <?php if($q2q1=="$qo12") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo12]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q3" name="question55" disabled="disabled" data-role="none" <?php if($q2q1=="$qo13") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo13]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q4" name="question55" disabled="disabled" data-role="none" <?php if($q2q1=="$qo14") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo14]);</script>"; ?></label></div>
			</td>
			<td>
					<div style="float: left;"><label><input type="radio" id="q11" name="question1" disabled="disabled" data-role="none" <?php if($q2anw1=="$qo11") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo11]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q12" name="question1" disabled="disabled" data-role="none" <?php if($q2anw1=="$qo12") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo12]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q13" name="question1" disabled="disabled" data-role="none" <?php if($q2anw1=="$qo13") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo13]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q14" name="question1" disabled="disabled" data-role="none" <?php if($q2anw1=="$qo14") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo14]);</script>"; ?></label></div>
				
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "2.在<script>setquestionname($a[$qf2])</script>的<script>writedirection($qf2,$d[1])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q5" name="question33" disabled="disabled" data-role="none" <?php if($q2q2=="$qo21") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo21]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q6" name="question33" disabled="disabled" data-role="none" <?php if($q2q2=="$qo22") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo22]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q7" name="question33" disabled="disabled" data-role="none" <?php if($q2q2=="$qo23") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo23]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q8" name="question33" disabled="disabled" data-role="none" <?php if($q2q2=="$qo24") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo24]);</script>"; ?></label></div>
			</td>
			<td>				
					<div style="float: left;"><label><input type="radio" id="q21" name="question2" disabled="disabled" data-role="none" <?php if($q2anw2=="$qo21") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo21]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q22" name="question2" disabled="disabled" data-role="none" <?php if($q2anw2=="$qo22") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo22]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q23" name="question2" disabled="disabled" data-role="none" <?php if($q2anw2=="$qo23") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo23]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q24" name="question2" disabled="disabled" data-role="none" <?php if($q2anw2=="$qo24") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo24]);</script>"; ?></label></div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "3.在<script>setquestionname($a[$qf3])</script>的<script>writedirection($qf3,$d[2])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q9" name="question22" disabled="disabled" data-role="none" <?php if($q2q3=="$qo31") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo31]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q10" name="question22" disabled="disabled" data-role="none" <?php if($q2q3=="$qo32") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo32]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q11" name="question22" disabled="disabled" data-role="none" <?php if($q2q3=="$qo33") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo33]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q12" name="question22" disabled="disabled" data-role="none" <?php if($q2q3=="$qo34") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo34]);</script>"; ?></label></div>
			</td>
			<td>
					<div style="float: left;"><label><input type="radio" id="q31" name="question3" disabled="disabled" data-role="none" <?php if($q2anw3=="$qo31") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo31]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q32" name="question3" disabled="disabled" data-role="none" <?php if($q2anw3=="$qo32") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo32]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q33" name="question3" disabled="disabled" data-role="none" <?php if($q2anw3=="$qo33") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo33]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q34" name="question3" disabled="disabled" data-role="none" <?php if($q2anw3=="$qo34") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo34]);</script>"; ?></label></div>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "4.在<script>setquestionname($a[$qf4])</script>的<script>writedirection($qf4,$d[3])</script>是";?>
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="q13" name="question44" disabled="disabled" data-role="none" <?php if($q2q4=="$qo41") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo41]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q14" name="question44" disabled="disabled" data-role="none" <?php if($q2q4=="$qo42") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo42]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q15" name="question44" disabled="disabled" data-role="none" <?php if($q2q4=="$qo43") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo43]);</script>"; ?></label></div>
				<div style="float: left;"><label><input type="radio" id="q16" name="question44" disabled="disabled" data-role="none" <?php if($q2q4=="$qo44") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo44]);</script>"; ?></label></div>
			</td>
			<td>
					<div style="float: left;"><label><input type="radio" id="q41" name="question4" disabled="disabled" data-role="none" <?php if($q2anw4=="$qo41") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo41]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q42" name="question4" disabled="disabled" data-role="none" <?php if($q2anw4=="$qo42") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo42]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q43" name="question4" disabled="disabled" data-role="none" <?php if($q2anw4=="$qo43") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo43]);</script>"; ?></label></div>
					<div style="float: left;"><label><input type="radio" id="q44" name="question4" disabled="disabled" data-role="none" <?php if($q2anw4=="$qo44") echo "checked=checked" ?>><?php echo "<script>q2pictures($a[$qo44]);</script>"; ?></label></div>
			</td>
		</tr>
	</table>
	<div align="center">
		<a href="#cognition_anwser1" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
		<a href="#cognition_anwser3" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
	</div>
	</div>
	<div data-role="page" id="cognition_anwser3">
		<h3 align="center" style="color: red">拿了<?php echo "$q3score"; ?>/20分</h3>
		<table border="1" width="60%" align="center">
			<tr>
				<th style="text-align: center;">圖</th>
				<th style="text-align: center;">原作答</th>
				<th style="text-align: center;">正確答案</th>
			</tr>
			<tr>
				<?php echo "<td width=\"60%\"><script>q3pictures($q3pic1,$q3piclen1);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq1" name="question11" type="radio" value="1" disabled data-role="none" <?php if($q3q1=="$q3piclen1") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq1" name="qquestion1" type="radio" disabled data-role="none" <?php if($q3piclen1>$q3piclen2) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic1,$q3piclen2);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq2" name="question21" type="radio" value="2" disabled data-role="none" <?php if($q3q1=="$q3piclen2") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq2" name="qquestion1" type="radio" disabled data-role="none" <?php if($q3piclen2>$q3piclen1) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic2,$q3piclen3);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq3" name="question22" value="1" type="radio" disabled data-role="none" <?php if($q3q2=="$q3piclen3") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq3" name="qquestion2" type="radio" disabled data-role="none" <?php if($q3piclen3>$q3piclen4) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic2,$q3piclen4);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq4" name="question22" type="radio" value="2" disabled data-role="none" <?php if($q3q2=="$q3piclen4") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq4" name="qquestion2" type="radio" disabled data-role="none" <?php if($q3piclen4>$q3piclen3) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic3,$q3piclen5);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq5" name="question33" type="radio" value="1" disabled data-role="none" <?php if($q3q3=="$q3piclen5") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq5" name="qquestion3" type="radio" disabled data-role="none" <?php if($q3piclen5>$q3piclen6) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic3,$q3piclen6);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq6" name="question33" type="radio" value="2" disabled data-role="none" <?php if($q3q3=="$q3piclen6") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq6" name="qquestion3" type="radio" disabled data-role="none" <?php if($q3piclen6>$q3piclen5) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic4,$q3piclen7);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq7" name="question34" type="radio" value="1" disabled data-role="none" <?php if($q3q4=="$q3piclen7") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq7" name="qquestion4" type="radio" disabled data-role="none" <?php if($q3piclen7>$q3piclen8) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic4,$q3piclen8);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq8" name="question34" type="radio" value="2" disabled data-role="none" <?php if($q3q4=="$q3piclen8") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq8" name="qquestion4" type="radio" disabled data-role="none" <?php if($q3piclen8>$q3piclen7) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<br/>
		<table border="1" width="60%" align="center">
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic5,$q3piclen9);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq9" name="question55" type="radio" value="1" disabled data-role="none" <?php if($q3q5=="$q3piclen9") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq9" name="qquestion5" type="radio" disabled data-role="none" <?php if($q3piclen9>$q3piclen10) echo "checked=checked" ?>></td>
			</tr>
			<tr>
				<?php echo "<td width=\"90%\"><script>q3pictures($q3pic5,$q3piclen10);</script></td>"; ?>
				<td width="5%" style="text-align: center;"><input id="qq10" name="question55" type="radio" value="2" disabled data-role="none" <?php if($q3q5=="$q3piclen10") echo "checked=checked" ?>></td>
				<td width="5%" style="text-align: center;"><input id="qqq10" name="qquestion5" type="radio" disabled data-role="none" <?php if($q3piclen10>$q3piclen9) echo "checked=checked" ?>></td>
			</tr>
		</table>
		<div align="center">
		<a href="#cognition_anwser2" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
		<a href="#cognition_anwser4" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
	</div>
	</div>
	<div data-role="page" id="cognition_anwser4">
		<h3 align="center" style="color: red">拿了<?php echo "$q4score"; ?>/20分</h3>
		<div align="center">
	<table border="1">
		<tr>
			<td>
				<?php echo "<script>
					q4pictures($tp1);
		        	q4pictures($tp2);
					q4pictures($tp3);
					q4pictures($tp4);
					q4pictures($tp5);
					q4pictures($tp6);
					q4pictures($tp7);
					q4pictures($tp8);
				</script>";?>
			</td>
		</tr>
	</table>
</div>
<div align="center">
	<table border="1" width="70%">
		<tr>
			<th width="50%">原作答</th>
			<th width="50%">正解</th>
		</tr>
	</table>
	<table border="1" width="70%">
		<tr>
			<td colspan="2">
				(1)從<?php echo "<script>direction($qd1);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$qp1]);</script>";?>排在第
						<input type="number" id="aa1" name="aanwser1" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$anw1'";?>>個。
			</td>
			<td colspan="2">
				(1)從<?php echo "<script>direction($qd1);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$qp1]);</script>";?>排在第
						<input type="number" id="aa1" name="aanwser1" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$ca1'";?>>個。
			</td>
		</tr>
		<tr>
			<td>
				(2)從<?php echo "<script>direction($qd2);</script>";?>數起,第<?php echo "<script>w($qp2);</script>";?>個是
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="aa21" name="aaanwser2" disabled data-role="none" <?php if($anw2=="$qp21") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$qp21]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa22" name="aaanwser2" disabled data-role="none" <?php if($anw2=="$qp22") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$qp22]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa23" name="aaanwser2" disabled data-role="none" <?php if($anw2=="$qp23") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$qp23]);</script>";?></label></div>。
			</td>
			<td>
				(2)從<?php echo "<script>direction($qd2);</script>";?>數起,第<?php echo "<script>w($qp2);</script>";?>個是
			</td>
			<td>
				<div style="float: left;"><label><input type="radio" id="aa21" name="aanwser2" disabled data-role="none" <?php if($ca2=="$qp21") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$qp21]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa22" name="aanwser2" disabled data-role="none" <?php if($ca2=="$qp22") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$qp22]);</script>";?></label></div>
				<div style="float: left;"><label><input type="radio" id="aa23" name="aanwser2" disabled data-role="none" <?php if($ca2=="$qp23") echo "checked=checked" ?>><?php echo "<script>q4pictures($q4a[$qp23]);</script>";?></label></div>。
			</td>
		</tr>
		<tr>
			<td colspan="2">
				(3)從<?php echo "<script>direction($qd31);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$qp3]);</script>";?>排在第
				<input type="number" id="aa3" name="aanwser3" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$anw3'";?>>個,也可說是從<?php echo "<script>direction($qd32);</script>";?>數起第
				<input type="number" id="aa4" name="aanwser4" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$anw4'";?>>個。
			</td>
			<td colspan="2">
				(3)從<?php echo "<script>direction($qd31);</script>";?>數起,<?php echo "<script>q4pictures($q4a[$qp3]);</script>";?>排在第
				<input type="number" id="aa3" name="aanwser3" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$ca3'";?>>個,也可說是從<?php echo "<script>direction($qd32);</script>";?>數起第
				<input type="number" id="aa4" name="aanwser4" style="width: 50px; height: 50px; font-size: 30px;" disabled data-role="none" <?php echo "value='$ca4'";?>>個。
			</td>
		</tr>
	</table>
</div>
	<div align="center">
		<a href="#cognition_anwser3" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
		<a href="#cognition_anwser5" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide">下一題</a>
	</div>
	</div>
	<div data-role="page" id="cognition_anwser5">
	<h3 align="center" style="color: red">拿了<?php echo "$q5score"; ?>/20分</h3>
	<table border="1" align="center">
	<tr>
		<th>題目</th>
		<th>原作答</th>
		<th>正確答案</th>
	</tr>
	<tr>
		<?php echo "<td><script>questionpictures($sp1);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q11" name="qquestion12" disabled data-role="none" <?php echo "value=\"$q5qo11\"";?><?php if($q5anw1=="$q5qo11") echo "checked=checked";?>><?php echo "<script>insertp1($sp1,1,$q5qquestion1[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q12" name="qquestion12" disabled data-role="none" <?php echo "value=\"$q5qo12\"";?><?php if($q5anw1=="$q5qo12") echo "checked=checked";?>><?php echo "<script>insertp1($sp1,2,$q5qquestion1[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q13" name="qquestion12" disabled data-role="none" <?php echo "value=\"$q5qo13\"";?><?php if($q5anw1=="$q5qo13") echo "checked=checked";?>><?php echo "<script>insertp1($sp1,3,$q5qquestion1[2]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q11" name="qquestion11" disabled data-role="none" <?php echo "value=\"$q5qo11\"";?><?php if($q5qo11<10) echo "checked=checked";?>><?php echo "<script>insertp1($sp1,1,$q5qquestion1[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q12" name="qquestion11" disabled data-role="none" <?php echo "value=\"$q5qo12\"";?><?php if($q5qo12<10) echo "checked=checked";?>><?php echo "<script>insertp1($sp1,2,$q5qquestion1[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q13" name="qquestion11" disabled data-role="none" <?php echo "value=\"$q5qo13\"";?><?php if($q5qo13<10) echo "checked=checked";?>><?php echo "<script>insertp1($sp1,3,$q5qquestion1[2]);</script>"; ?></label></div>
		</td>	
	</tr>
	<tr>
		<?php echo "<td><script>questionpictures($sp2);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q21" name="qquestion21" disabled data-role="none" <?php echo "value=\"$q5qo21\"";?><?php if($q5anw2=="$q5qo21") echo "checked=checked";?>><?php echo "<script>insertp2($sp2,1,$q5qquestion2[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q22" name="qquestion21" disabled data-role="none" <?php echo "value=\"$q5qo22\"";?><?php if($q5anw2=="$q5qo22") echo "checked=checked";?>><?php echo "<script>insertp2($sp2,2,$q5qquestion2[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q23" name="qquestion21" disabled data-role="none" <?php echo "value=\"$q5qo23\"";?><?php if($q5anw2=="$q5qo23") echo "checked=checked";?>><?php echo "<script>insertp2($sp2,3,$q5qquestion2[2]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q21" name="qquestion22" disabled data-role="none" <?php echo "value=\"$q5qo21\"";?><?php if($q5qo21<10) echo "checked=checked";?>><?php echo "<script>insertp2($sp2,1,$q5qquestion2[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q22" name="qquestion22" disabled data-role="none" <?php echo "value=\"$q5qo22\"";?><?php if($q5qo22<10) echo "checked=checked";?>><?php echo "<script>insertp2($sp2,2,$q5qquestion2[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q23" name="qquestion22" disabled data-role="none" <?php echo "value=\"$q5qo23\"";?><?php if($q5qo23<10) echo "checked=checked";?>><?php echo "<script>insertp2($sp2,3,$q5qquestion2[2]);</script>"; ?></label></div>
		</td>	
	</tr>
	<tr>
		<?php echo "<td><script>questionpictures($sp3);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q31" name="qquestion31" disabled data-role="none" <?php echo "value=\"$q5qo31\"";?><?php if($q5anw3=="$q5qo31") echo "checked=checked";?>><?php echo "<script>insertp3($sp3,1,$q5qquestion3[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q32" name="qquestion31" disabled data-role="none" <?php echo "value=\"$q5qo32\"";?><?php if($q5anw3=="$q5qo32") echo "checked=checked";?>><?php echo "<script>insertp3($sp3,2,$q5qquestion3[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q33" name="qquestion31" disabled data-role="none" <?php echo "value=\"$q5qo33\"";?><?php if($q5anw3=="$q5qo33") echo "checked=checked";?>><?php echo "<script>insertp3($sp3,3,$q5qquestion3[2]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q31" name="qquestion33" disabled data-role="none" <?php echo "value=\"$q5qo31\"";?><?php if($q5qo31<10) echo "checked=checked";?>><?php echo "<script>insertp3($sp3,1,$q5qquestion3[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q32" name="qquestion33" disabled data-role="none" <?php echo "value=\"$q5qo32\"";?><?php if($q5qo32<10) echo "checked=checked";?>><?php echo "<script>insertp3($sp3,2,$q5qquestion3[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q33" name="qquestion33" disabled data-role="none" <?php echo "value=\"$q5qo33\"";?><?php if($q5qo33<10) echo "checked=checked";?>><?php echo "<script>insertp3($sp3,3,$q5qquestion3[2]);</script>"; ?></label></div>
		</td>	
	</tr>
	<tr>
		<?php echo "<td><script>questionpictures($sp4);</script></td>";?>
		<td>
			<div style="float: left;"><label><input type="radio" id="q41" name="qquestion41" disabled data-role="none" <?php echo "value=\"$q5qo41\"";?><?php if($q5anw4=="$q5qo41") echo "checked=checked";?>><?php echo "<script>insertp4($sp4,1,$q5qquestion4[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q42" name="qquestion41" disabled data-role="none" <?php echo "value=\"$q5qo42\"";?><?php if($q5anw4=="$q5qo42") echo "checked=checked";?>><?php echo "<script>insertp4($sp4,2,$q5qquestion4[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q43" name="qquestion41" disabled data-role="none" <?php echo "value=\"$q5qo43\"";?><?php if($q5anw4=="$q5qo43") echo "checked=checked";?>><?php echo "<script>insertp4($sp4,3,$q5qquestion4[2]);</script>"; ?></label></div>
		</td>
		<td>
			<div style="float: left;"><label><input type="radio" id="q41" name="qquestion44" disabled data-role="none" <?php echo "value=\"$q5qo41\"";?><?php if($q5qo41<10) echo "checked=checked";?>><?php echo "<script>insertp4($sp4,1,$q5qquestion4[0]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q42" name="qquestion44" disabled data-role="none" <?php echo "value=\"$q5qo42\"";?><?php if($q5qo42<10) echo "checked=checked";?>><?php echo "<script>insertp4($sp4,2,$q5qquestion4[1]);</script>"; ?></label></div>
			<div style="float: left;"><label><input type="radio" id="q43" name="qquestion44" disabled data-role="none" <?php echo "value=\"$q5qo43\"";?><?php if($q5qo43<10) echo "checked=checked";?>><?php echo "<script>insertp4($sp4,3,$q5qquestion4[2]);</script>"; ?></label></div>
		</td>	
	</tr>
	</table>
		<div align="center">
			<a href="#cognition_anwser4" class="ui-btn" style="width: 5%; display: inline-block" data-transition="slide" data-direction="reverse">上一題</a>
			<a href="Topic.php" class="ui-btn" style="width: 5%; display: inline-block">回到首頁</a>
		</div>
	</div>
	</form>