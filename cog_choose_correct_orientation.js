	function cog_choose_correct_orientation_pictures(x){
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
	function cog_choose_correct_orientation_set_question_name(x){
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
	function cog_choose_correct_orientation_write_direction(x,y){
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