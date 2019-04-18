    function anw_math_choose_pictures(x,y){
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
        for(var i=1;i<=y;i++){
            document.write('<img src="'+imgurl[x]+'" width="65px"; height="65px";>');
        }
    }

    function anw_math_choose_write(x){
        document.write(x);
    }