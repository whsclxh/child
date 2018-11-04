<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
</style>
<script src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">

    // function correction(){
	// document.getElementById( "aa1" ).style.display = "";
	// document.getElementById( "aa2" ).style.display = "";
	// document.getElementById( "aa3" ).style.display = "";
	// document.getElementById( "aa4" ).style.display = "";
    // document.getElementById( "aa5" ).style.display = "";
    // document.getElementById( "aa6" ).style.display = "";
	// document.getElementById( "aa7" ).style.display = "";
	// document.getElementById( "aa8" ).style.display = "";
    // }
    
</script>



<?php
$h0 = $_POST['ans0'];
$h1 = $_POST['ans1'];
$h2 = $_POST['ans2'];
$h3 = $_POST['ans3'];



$anw1 = $_POST['anwser1'];
$anw2 = $_POST['anwser2'];
$anw3 = $_POST['anwser3'];
$anw4 = $_POST['anwser4'];



$score = 0;
if(($h0)==($anw1)){
    $score=$score+5;
}
if(($h1)==($anw2)){
    $score=$score+5;
}
if(($h2)==($anw3)){
    $score=$score+5;
}
if(($h3)==($anw4)){
    $score=$score+5;
}

?>
<?php  echo "<h1>得分為:$score 分!</h1>";?>