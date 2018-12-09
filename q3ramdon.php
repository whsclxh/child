<?php 	
function q3checkoption(){
		$no=array();
		do{	
			$a=true;
			$no=getRandomArray(0,4,5);
				if((in_array(0, $no))&&(in_array(1, $no))&&(in_array(2, $no))&&(in_array(3, $no))&&(in_array(4, $no))) 
					$a=false;
			}while($a);
		return $no;
}
$q3pictureslength=getRandomArray(100,700,10);
$q3questionpicture=q3checkoption();
if(!isset($_COOKIE["q3pic1"])) {
   		setcookie("q3pic1",$q3questionpicture[0],time()+60);
	}
if(!isset($_COOKIE["q3pic2"])) {
   		setcookie("q3pic2",$q3questionpicture[1],time()+60);
	}
if(!isset($_COOKIE["q3pic3"])) {
   		setcookie("q3pic3",$q3questionpicture[2],time()+60);
	}
if(!isset($_COOKIE["q3pic4"])) {
   		setcookie("q3pic4",$q3questionpicture[3],time()+60);
	}
if(!isset($_COOKIE["q3pic5"])) {
   		setcookie("q3pic5",$q3questionpicture[4],time()+60);
	}
if(!isset($_COOKIE["q3len1"])) {
   		setcookie("q3len1",$q3pictureslength[0],time()+60);
	}
if(!isset($_COOKIE["q3len2"])) {
   		setcookie("q3len2",$q3pictureslength[1],time()+60);
	}
if(!isset($_COOKIE["q3len3"])) {
   		setcookie("q3len3",$q3pictureslength[2],time()+60);
	}
if(!isset($_COOKIE["q3len4"])) {
   		setcookie("q3len4",$q3pictureslength[3],time()+60);
	}
if(!isset($_COOKIE["q3len5"])) {
   		setcookie("q3len5",$q3pictureslength[4],time()+60);
	}
if(!isset($_COOKIE["q3len6"])) {
   		setcookie("q3len6",$q3pictureslength[5],time()+60);
	}
if(!isset($_COOKIE["q3len7"])) {
   		setcookie("q3len7",$q3pictureslength[6],time()+60);
	}
if(!isset($_COOKIE["q3len8"])) {
   		setcookie("q3len8",$q3pictureslength[7],time()+60);
	}
if(!isset($_COOKIE["q3len9"])) {
   		setcookie("q3len9",$q3pictureslength[8],time()+60);
	}
if(!isset($_COOKIE["q3len10"])) {
   		setcookie("q3len10",$q3pictureslength[9],time()+60);
	}
if(isset($_COOKIE["q3pic1"])) {
   		$q3pic1=$_COOKIE["q3pic1"];
	}else{
		$q3pic1=$q3questionpicture[0];
}
if(isset($_COOKIE["q3pic2"])) {
   		$q3pic2=$_COOKIE["q3pic2"];
	}else{
		$q3pic2=$q3questionpicture[1];
}
if(isset($_COOKIE["q3pic3"])) {
   		$q3pic3=$_COOKIE["q3pic3"];
	}else{
		$q3pic3=$q3questionpicture[2];
}
if(isset($_COOKIE["q3pic4"])) {
   		$q3pic4=$_COOKIE["q3pic4"];
	}else{
		$q3pic4=$q3questionpicture[3];
}
if(isset($_COOKIE["q3pic5"])) {
   		$q3pic5=$_COOKIE["q3pic5"];
	}else{
		$q3pic5=$q3questionpicture[4];
}
if(isset($_COOKIE["q3len1"])) {
   		$q3len1=$_COOKIE["q3len1"];
	}else{
		$q3len1=$q3pictureslength[0];
}
if(isset($_COOKIE["q3len2"])) {
   		$q3len2=$_COOKIE["q3len2"];
	}else{
		$q3len2=$q3pictureslength[1];
}
if(isset($_COOKIE["q3len3"])) {
   		$q3len3=$_COOKIE["q3len3"];
	}else{
		$q3len3=$q3pictureslength[2];
}
if(isset($_COOKIE["q3len4"])) {
   		$q3len4=$_COOKIE["q3len4"];
	}else{
		$q3len4=$q3pictureslength[3];
}
if(isset($_COOKIE["q3len5"])) {
   		$q3len5=$_COOKIE["q3len5"];
	}else{
		$q3len5=$q3pictureslength[4];
}
if(isset($_COOKIE["q3len6"])) {
   		$q3len6=$_COOKIE["q3len6"];
	}else{
		$q3len6=$q3pictureslength[5];
}
if(isset($_COOKIE["q3len7"])) {
   		$q3len7=$_COOKIE["q3len7"];
	}else{
		$q3len7=$q3pictureslength[6];
}
if(isset($_COOKIE["q3len8"])) {
   		$q3len8=$_COOKIE["q3len8"];
	}else{
		$q3len8=$q3pictureslength[7];
}
if(isset($_COOKIE["q3len9"])) {
   		$q3len9=$_COOKIE["q3len9"];
	}else{
		$q3len9=$q3pictureslength[8];
}
if(isset($_COOKIE["q3len10"])) {
   		$q3len10=$_COOKIE["q3len10"];
	}else{
		$q3len10=$q3pictureslength[9];
}
?>
