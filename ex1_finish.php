<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
</style>
<script src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">

    function correction(){
	document.getElementById( "aa1" ).style.display = "";
	document.getElementById( "aa2" ).style.display = "";
	document.getElementById( "aa3" ).style.display = "";
	document.getElementById( "aa4" ).style.display = "";
    document.getElementById( "aa5" ).style.display = "";
    document.getElementById( "aa6" ).style.display = "";
	document.getElementById( "aa7" ).style.display = "";
	document.getElementById( "aa8" ).style.display = "";
    }
    
</script>



<?php
$h1 = $_POST['hour1'];
$h2 = $_POST['hour2'];
$h3 = $_POST['hour3'];
$h4 = $_POST['hour4'];

$m1 = $_POST['minute1'];
$m2 = $_POST['minute2'];
$m3 = $_POST['minute3'];
$m4 = $_POST['minute4'];

$anw1 = $_POST['anwser1'];
$anw2 = $_POST['anwser2'];
$anw3 = $_POST['anwser3'];
$anw4 = $_POST['anwser4'];
$anw5 = $_POST['anwser5'];
$anw6 = $_POST['anwser6'];
$anw7 = $_POST['anwser7'];
$anw8 = $_POST['anwser8'];


$score = 0;
if(($h1)==($anw1)){
    $score=$score+3;
}
if(($m1)==($anw2)){
    $score=$score+3;
}
if(($h2)==($anw3)){
    $score=$score+3;
}
if(($m2)==($anw4)){
    $score=$score+3;
}
if(($h3)==($anw5)){
    $score=$score+3;
}
if(($m3)==($anw6)){
    $score=$score+3;
}
if(($h4)==($anw7)){
    $score=$score+3;
}
if(($m4)==($anw8)){
    $score=$score+3;
}
?>
<?php  echo "<h1>得分為:$score 分!</h1>";?>
<button onclick="correction()">按一下看正確答案!</button>
<form name="form1" method="POST">
<table>
    <tr style="height: 280px">
      <td><canvas id="clock1" width="200px" height="200px" style="display:block; margin:auto;"></canvas></td>
      <td><canvas id="clock2" width="200px" height="200px" style="display:block; margin:auto;"></canvas></td>
    </tr>
    <tr style="height:  40px">
      <td><div style="text-align: center"><label for="appt-time">Answer:</label>
        <input type="number" id="n1" name="hour1" min="1" max="12" required="required" />:<input type="number" id="n2" name="minute1" min="00" max="59" step="5" required="required" ></div></td>
        
      <td><div style="text-align: center"><label for="appt-time">Answer:</label>
        <input type="number" id="n3" name="hour2" min="1" max="12" required="required" />:<input type="number" id="n4" name="minute2" min="00" max="59" step="5" required="required" ></div></td>
    </tr>
    <tr style="height: 40px">
    <td><div id="aa1" style="text-align:center; color:red; display:none;"><?php echo "<script>write($anw1);</script>";?>:<?php echo "<script>write($anw2);</script>";?></div></td>
    <td><div style="text-align:center"><label>正確答案:</label><?php echo "<script>write($anw3);</script>";?>:<?php echo "<script>write($anw4);</script>";?></td>
    </tr>
    <tr style="height: 280px">
      <td>
        <canvas id="clock3" width="200px" height="200px" style="display:block; margin:auto;"></canvas>
      </td>
      <td><canvas id="clock4" width="200px" height="200px" style="display:block; margin:auto;"></canvas></td>
    </tr>
    <tr style="height: 40px">
      <td><div style="text-align: center"><label for="appt-time">Answer:</label>
        <input type="number" id="n5" name="hour3" min="1" max="12" required="required" />:<input type="number" id="n6" name="minute3" min="00" max="59" step="5" required="required" ></div></td>
        
      <td><div style="text-align: center"><label for="appt-time">Answer:</label>
        <input type="number" id="n7" name="hour4" min="1" max="12" required="required" />:<input type="number" id="n8" name="minute4" min="00" max="59" step="5" required="required" ></div></td>
    </tr>
    <tr style="height: 40px">
    <td><div style="text-align:center"><label>正確答案:</label><?php echo "<script>write($anw5);</script>";?>:<?php echo "<script>write($anw6);</script>";?></td>
    <td><div style="text-align:center"><label>正確答案:</label><?php echo "<script>write($anw7);</script>";?>:<?php echo "<script>write($anw8);</script>";?></td>
    </tr>
  </table>
</form>