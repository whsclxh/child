<?php session_start(); ?>
<?php
include("mysql_connect.php"); 
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
?>
<style type="text/css">
	body{
		background: url(img/blackbored.png) no-repeat;
		background-size: cover;
	}
    .all{
    	width: 100%;
    	height: 100%;
    	background: url(img/b-frame.png) no-repeat;
    	background-size: cover;
    }
    .pen{
    	position: absolute;
    	bottom: 400px;
    	right: 37px;
    }
    .ruler{
    	position: absolute;
    	top: 32px;
    	right: 40px;    	
    }
    .book{
    	position: absolute;
    	top: 33px;
    	left: 40px;
    }
    .note{
    	position: absolute;
    	bottom: 0px;
    	right: 37px;
    }
    .pencil{
    	position: absolute;
    	bottom: 0px;
    	left: 37px;
    }
    .math{
    	position: absolute;
    	top: 300px;
    	right: 500px;
    }
    .chinese{
    	position: absolute;
    	top: 200px;
    	left: 350px;
    }
    .cognition{
    	position: absolute;
    	bottom: 200px;
    	left: 500px;
    }
    .time{
    	position: absolute;
    	bottom: 150px;
    	right: 300px;
    }
</style>
<div class="all">
<div class="pen"><img src="img/b-pen.png" width="200px" height="200px"></div>
<div class="ruler"><img src="img/b-ruler.png" width="200px" height="200px"></div>
<div class="book"><img src="img/b-book.png" width="420px" height="270px"></div>
<div class="note"><img src="img/b-note.png" width="210px" height="350px"></div>
<div class="pencil"><img src="img/b-pencil.png"></div>
<div class="math"><input type="image" src="img/chalk123.png" onClick="javascript:location.href='math_record.php'" width="240px" height="150px;"></div>
<div class="chinese"><input type="image" src="img/chalkchinese.png" onClick="javascript:location.href='chinese_record.php'" width="350px" height="150px;"></div>
<div class="cognition"><input type="image" src="img/chalkcog.png" onClick="javascript:location.href='cognition_record.php'" width="315px" height="150px;"></div>
<div class="time"><input type="image" src="img/chalktime.png" onClick="javascript:location.href='time_record.php'" width="300px" height="150px;"></div>
</div>