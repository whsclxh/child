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
	@media screen and (min-width:1200px)  { /*Large devices*/
		.all{
    	width: 100%;
    	height: 100%;
    	background: url(img/b-frame.png) no-repeat;
    	background-size: cover;
    }
    .pen{
		display:none;
    	position: absolute;
    	bottom: 400px;
    	right: 0px;
    }
    .ruler{
		display:none;
    	position: absolute;
    	top: 34px;
    	right: 40px;    	
    }
    .book{
    	position: absolute;
    	top: 33px;
    	left: 40px;
    }
    .note{
		display:none;
    	position: absolute;
    	bottom: 50px;
    	right: 0px;
    }
    .pencil{
    	position: absolute;
    	bottom: 0px;
    	left: 37px;
    }
    .math{
    	position: absolute;
    	top: 300px;
    	right: 400px;
    }
    .chinese{
    	position: absolute;
    	top: 200px;
    	left: 350px;
    }
    .cognition{
    	position: absolute;
    	bottom: 300px;
    	left: 500px;
    }
    .time{
    	position: absolute;
    	bottom: 150px;
    	right: 300px;
	}
	}
</style>
<style>
    .right ul li {
    display:inline;
}
</style>
<div style="width:100%;" style="display:inline">
<div class="right" style="float:right; text-align:center; display:inline" >
  	<ul>
  	<li><a href="Topic.php" data-ajax="false">回到首頁 </a></li>
    </ul>
    </div>
</div>
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