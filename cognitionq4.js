
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
