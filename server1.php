<?
ob_start();


?>


<script type="text/javascript" src="jquery.js"></script>
<style>
td{width:30;height:30;padding: 0px;}
body{
color:ffffff;
background: url(tlo.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<script>
var petla=0;
var szoty;
function ready(){

$('#yready').val('ready');
$.get("ready1.php", { 'key' : '1' },  function(data) {

});



}


function odswierzanie(){

$.get("ready2.php", {  },  function(data) {
if(data=="666"){
$('#licz').val('1');
$('#eready').val('ready');
}
});



}


function liczz(){
if($('#yready').val()=='ready'){
if ($('#licz').val()==1){
petla++;

}
if(petla==3){
location.href ='server1.php';
}
}
}
window.setInterval('liczz();',1000);
window.setInterval('odswierzanie();',1000);

function licz(x){
	
	
	
$.get("shoot1.php", { s : x  },  function(data) {

});
	
	
	ready();
	szoty=x;
	
}

</script>

<center>
<table border="0"><tr><td id="lewy">
<center>
you ship<br>

<table border="1">

<tr>

<td onclick="licza('1a1')" id="c1a1"></td>
<td onclick="licza('1a2')" id="c1a2"></td>
<td onclick="licza('1a3')" id="c1a3"></td>
<td onclick="licza('1a4')" id="c1a4"></td>
<td onclick="licza('1a5')" id="c1a5"></td>
<td onclick="licza('1a6')" id="c1a6"></td>
<td onclick="licza('1a7')" id="c1a7"></td>
<td onclick="licza('1a8')" id="c1a8"></td>
<td onclick="licza('1a9')" id="c1a9"></td>
<td onclick="licza('1a10')" id="c1a10"></td>

</tr>



<tr>

<td onclick="licza('2a1')" id="c2a1"></td>
<td onclick="licza('2a2')" id="c2a2"></td>
<td onclick="licza('2a3')" id="c2a3"></td>
<td onclick="licza('2a4')" id="c2a4"></td>
<td onclick="licza('2a5')" id="c2a5"></td>
<td onclick="licza('2a6')" id="c2a6"></td>
<td onclick="licza('2a7')" id="c2a7"></td>
<td onclick="licza('2a8')" id="c2a8"></td>
<td onclick="licza('2a9')" id="c2a9"></td>
<td onclick="licza('2a10')" id="c2a10"></td>

</tr>

<tr>

<td onclick="licza('3a1')" id="c3a1"></td>
<td onclick="licza('3a2')" id="c3a2"></td>
<td onclick="licza('3a3')" id="c3a3"></td>
<td onclick="licza('3a4')" id="c3a4"></td>
<td onclick="licza('3a5')" id="c3a5"></td>
<td onclick="licza('3a6')" id="c3a6"></td>
<td onclick="licza('3a7')" id="c3a7"></td>
<td onclick="licza('3a8')" id="c3a8"></td>
<td onclick="licza('3a9')" id="c3a9"></td>
<td onclick="licza('3a10')" id="c3a10"></td>

</tr>

<tr>

<td onclick="licza('4a1')" id="c4a1"></td>
<td onclick="licza('4a2')" id="c4a2"></td>
<td onclick="licza('4a3')" id="c4a3"></td>
<td onclick="licza('4a4')" id="c4a4"></td>
<td onclick="licza('4a5')" id="c4a5"></td>
<td onclick="licza('4a6')" id="c4a6"></td>
<td onclick="licza('4a7')" id="c4a7"></td>
<td onclick="licza('4a8')" id="c4a8"></td>
<td onclick="licza('4a9')" id="c4a9"></td>
<td onclick="licza('4a10')" id="c4a10"></td>

</tr>



<tr>

<td onclick="licza('5a1')" id="c5a1"></td>
<td onclick="licza('5a2')" id="c5a2"></td>
<td onclick="licza('5a3')" id="c5a3"></td>
<td onclick="licza('5a4')" id="c5a4"></td>
<td onclick="licza('5a5')" id="c5a5"></td>
<td onclick="licza('5a6')" id="c5a6"></td>
<td onclick="licza('5a7')" id="c5a7"></td>
<td onclick="licza('5a8')" id="c5a8"></td>
<td onclick="licza('5a9')" id="c5a9"></td>
<td onclick="licza('5a10')" id="c5a10"></td>

</tr>


<tr>

<td onclick="licza('6a1')" id="c6a1"></td>
<td onclick="licza('6a2')" id="c6a2"></td>
<td onclick="licza('6a3')" id="c6a3"></td>
<td onclick="licza('6a4')" id="c6a4"></td>
<td onclick="licza('6a5')" id="c6a5"></td>
<td onclick="licza('6a6')" id="c6a6"></td>
<td onclick="licza('6a7')" id="c6a7"></td>
<td onclick="licza('6a8')" id="c6a8"></td>
<td onclick="licza('6a9')" id="c6a9"></td>
<td onclick="licza('6a10')" id="c6a10"></td>

</tr>



<tr>

<td onclick="licza('7a1')" id="c7a1"></td>
<td onclick="licza('7a2')" id="c7a2"></td>
<td onclick="licza('7a3')" id="c7a3"></td>
<td onclick="licza('7a4')" id="c7a4"></td>
<td onclick="licza('7a5')" id="c7a5"></td>
<td onclick="licza('7a6')" id="c7a6"></td>
<td onclick="licza('7a7')" id="c7a7"></td>
<td onclick="licza('7a8')" id="c7a8"></td>
<td onclick="licza('7a9')" id="c7a9"></td>
<td onclick="licza('7a10')" id="c7a10"></td>

</tr>


<tr>

<td onclick="licza('8a1')" id="c8a1"></td>
<td onclick="licza('8a2')" id="c8a2"></td>
<td onclick="licza('8a3')" id="c8a3"></td>
<td onclick="licza('8a4')" id="c8a4"></td>
<td onclick="licza('8a5')" id="c8a5"></td>
<td onclick="licza('8a6')" id="c8a6"></td>
<td onclick="licza('8a7')" id="c8a7"></td>
<td onclick="licza('8a8')" id="c8a8"></td>
<td onclick="licza('8a9')" id="c8a9"></td>
<td onclick="licza('8a10')" id="c8a10"></td>

</tr>


<tr>

<td onclick="licza('9a1')" id="c9a1"></td>
<td onclick="licza('9a2')" id="c9a2"></td>
<td onclick="licza('9a3')" id="c9a3"></td>
<td onclick="licza('9a4')" id="c9a4"></td>
<td onclick="licza('9a5')" id="c9a5"></td>
<td onclick="licza('9a6')" id="c9a6"></td>
<td onclick="licza('9a7')" id="c9a7"></td>
<td onclick="licza('9a8')" id="c9a8"></td>
<td onclick="licza('9a9')" id="c9a9"></td>
<td onclick="licza('9a10')" id="c9a10"></td>

</tr>


<tr>

<td onclick="licza('10a1')" id="c10a1"></td>
<td onclick="licza('10a2')" id="c10a2"></td>
<td onclick="licza('10a3')" id="c10a3"></td>
<td onclick="licza('10a4')" id="c10a4"></td>
<td onclick="licza('10a5')" id="c10a5"></td>
<td onclick="licza('10a6')" id="c10a6"></td>
<td onclick="licza('10a7')" id="c10a7"></td>
<td onclick="licza('10a8')" id="c10a8"></td>
<td onclick="licza('10a9')" id="c10a9"></td>
<td onclick="licza('10a10')" id="c10a10"></td>

</tr>

</table>
</td><td id="prawy">
<center>
you shoot<br>
<table border="1">

<tr>

<td onclick="licz('1a1')" id="1a1"></td>
<td onclick="licz('1a2')" id="1a2"></td>
<td onclick="licz('1a3')" id="1a3"></td>
<td onclick="licz('1a4')" id="1a4"></td>
<td onclick="licz('1a5')" id="1a5"></td>
<td onclick="licz('1a6')" id="1a6"></td>
<td onclick="licz('1a7')" id="1a7"></td>
<td onclick="licz('1a8')" id="1a8"></td>
<td onclick="licz('1a9')" id="1a9"></td>
<td onclick="licz('1a10')" id="1a10"></td>

</tr>



<tr>

<td onclick="licz('2a1')" id="2a1"></td>
<td onclick="licz('2a2')" id="2a2"></td>
<td onclick="licz('2a3')" id="2a3"></td>
<td onclick="licz('2a4')" id="2a4"></td>
<td onclick="licz('2a5')" id="2a5"></td>
<td onclick="licz('2a6')" id="2a6"></td>
<td onclick="licz('2a7')" id="2a7"></td>
<td onclick="licz('2a8')" id="2a8"></td>
<td onclick="licz('2a9')" id="2a9"></td>
<td onclick="licz('2a10')" id="2a10"></td>

</tr>

<tr>

<td onclick="licz('3a1')" id="3a1"></td>
<td onclick="licz('3a2')" id="3a2"></td>
<td onclick="licz('3a3')" id="3a3"></td>
<td onclick="licz('3a4')" id="3a4"></td>
<td onclick="licz('3a5')" id="3a5"></td>
<td onclick="licz('3a6')" id="3a6"></td>
<td onclick="licz('3a7')" id="3a7"></td>
<td onclick="licz('3a8')" id="3a8"></td>
<td onclick="licz('3a9')" id="3a9"></td>
<td onclick="licz('3a10')" id="3a10"></td>

</tr>

<tr>

<td onclick="licz('4a1')" id="4a1"></td>
<td onclick="licz('4a2')" id="4a2"></td>
<td onclick="licz('4a3')" id="4a3"></td>
<td onclick="licz('4a4')" id="4a4"></td>
<td onclick="licz('4a5')" id="4a5"></td>
<td onclick="licz('4a6')" id="4a6"></td>
<td onclick="licz('4a7')" id="4a7"></td>
<td onclick="licz('4a8')" id="4a8"></td>
<td onclick="licz('4a9')" id="4a9"></td>
<td onclick="licz('4a10')" id="4a10"></td>

</tr>



<tr>

<td onclick="licz('5a1')" id="5a1"></td>
<td onclick="licz('5a2')" id="5a2"></td>
<td onclick="licz('5a3')" id="5a3"></td>
<td onclick="licz('5a4')" id="5a4"></td>
<td onclick="licz('5a5')" id="5a5"></td>
<td onclick="licz('5a6')" id="5a6"></td>
<td onclick="licz('5a7')" id="5a7"></td>
<td onclick="licz('5a8')" id="5a8"></td>
<td onclick="licz('5a9')" id="5a9"></td>
<td onclick="licz('5a10')" id="5a10"></td>

</tr>


<tr>

<td onclick="licz('6a1')" id="6a1"></td>
<td onclick="licz('6a2')" id="6a2"></td>
<td onclick="licz('6a3')" id="6a3"></td>
<td onclick="licz('6a4')" id="6a4"></td>
<td onclick="licz('6a5')" id="6a5"></td>
<td onclick="licz('6a6')" id="6a6"></td>
<td onclick="licz('6a7')" id="6a7"></td>
<td onclick="licz('6a8')" id="6a8"></td>
<td onclick="licz('6a9')" id="6a9"></td>
<td onclick="licz('6a10')" id="6a10"></td>

</tr>



<tr>

<td onclick="licz('7a1')" id="7a1"></td>
<td onclick="licz('7a2')" id="7a2"></td>
<td onclick="licz('7a3')" id="7a3"></td>
<td onclick="licz('7a4')" id="7a4"></td>
<td onclick="licz('7a5')" id="7a5"></td>
<td onclick="licz('7a6')" id="7a6"></td>
<td onclick="licz('7a7')" id="7a7"></td>
<td onclick="licz('7a8')" id="7a8"></td>
<td onclick="licz('7a9')" id="7a9"></td>
<td onclick="licz('7a10')" id="7a10"></td>

</tr>


<tr>

<td onclick="licz('8a1')" id="8a1"></td>
<td onclick="licz('8a2')" id="8a2"></td>
<td onclick="licz('8a3')" id="8a3"></td>
<td onclick="licz('8a4')" id="8a4"></td>
<td onclick="licz('8a5')" id="8a5"></td>
<td onclick="licz('8a6')" id="8a6"></td>
<td onclick="licz('8a7')" id="8a7"></td>
<td onclick="licz('8a8')" id="8a8"></td>
<td onclick="licz('8a9')" id="8a9"></td>
<td onclick="licz('8a10')" id="8a10"></td>

</tr>


<tr>

<td onclick="licz('9a1')" id="9a1"></td>
<td onclick="licz('9a2')" id="9a2"></td>
<td onclick="licz('9a3')" id="9a3"></td>
<td onclick="licz('9a4')" id="9a4"></td>
<td onclick="licz('9a5')" id="9a5"></td>
<td onclick="licz('9a6')" id="9a6"></td>
<td onclick="licz('9a7')" id="9a7"></td>
<td onclick="licz('9a8')" id="9a8"></td>
<td onclick="licz('9a9')" id="9a9"></td>
<td onclick="licz('9a10')" id="9a10"></td>

</tr>


<tr>

<td onclick="licz('10a1')" id="10a1"></td>
<td onclick="licz('10a2')" id="10a2"></td>
<td onclick="licz('10a3')" id="10a3"></td>
<td onclick="licz('10a4')" id="10a4"></td>
<td onclick="licz('10a5')" id="10a5"></td>
<td onclick="licz('10a6')" id="10a6"></td>
<td onclick="licz('10a7')" id="10a7"></td>
<td onclick="licz('10a8')" id="10a8"></td>
<td onclick="licz('10a9')" id="10a9"></td>
<td onclick="licz('10a10')" id="10a10"></td>

</tr>

</table>



</td></tr></table>

<br><br>
<font color="ffffff"><br>

my points<input type="text" id="mypoints" value="6"><br>
enemy points<input type="text" id="punktacja" value="6"><br>
you ready<input type="text" id="yready" value=""><br>
enemy ready<input type="text" id="eready" value=""><br></font>
<input type="hidden" id="licz">



<script>
<?

$plik2 = fopen('xy1.txt','r');
$shoot2=fgets($plik2, 10000);
$shoot2tab = explode("b", $shoot2);

foreach ($shoot2tab as $key){
	
	$shoot2tab2 = explode("a", $key);
	//var_dump($shoot2tab2);
	
		
		echo "$('#c".$shoot2tab2[0]."a".$shoot2tab2[1]."').css('background-color','#0000ff');";
		
		
	
	
}
fclose($plik2);
//-----------------------

$plik2 = fopen('shoot1.txt','r');
$shoot2=fgets($plik2, 10000);
$shoot2tab = explode("b", $shoot2);

foreach ($shoot2tab as $key){
	
	$shoot2tab2 = explode("a", $key);
	//var_dump($shoot2tab2);
	
		
		echo "$('#".$shoot2tab2[0]."a".$shoot2tab2[1]."').css('background-color','#000000');";
		
		
	
	
}
fclose($plik2);

//----------------------------------------------------------shooty wroga

$plik2 = fopen('shoot2.txt','r');
$shoot2=fgets($plik2, 10000);
$shoot2tab = explode("b", $shoot2);


$plik3 = fopen('xy1.txt','r');
$shoot3=fgets($plik3, 10000);
$shoot3tab = explode("b", $shoot3);
foreach ($shoot2tab as $key){
	
	$shoot2tab2 = explode("a", $key);
	//var_dump($shoot2tab2);
	
		foreach ($shoot3tab as $key3){
			
			$shoot3tab3 = explode("a", $key3);
			
			if($shoot3tab3[0]==$shoot2tab2[0] and $shoot3tab3[1]==$shoot2tab2[1]){
				
				echo "$('#c".$shoot2tab2[0]."a".$shoot2tab2[1]."').css('background-color','#ff0000');";
				$point=$point+1;
				//echo "alert('p');";
				
			}
			
		}
		//echo "$('#".$shoot2tab2[0]."a".$shoot2tab2[1]."').css('background-color','#000000');";
		
		
	
	
}
fclose($plik2);
fclose($plik3);


//----------------------------------------------------------shooty swoje

$plik2 = fopen('shoot1.txt','r');
$shoot2=fgets($plik2, 10000);
$shoot2tab = explode("b", $shoot2);


$plik3 = fopen('xy2.txt','r');
$shoot3=fgets($plik3, 10000);
$shoot3tab = explode("b", $shoot3);
foreach ($shoot2tab as $key){
	
	$shoot2tab2 = explode("a", $key);
	//var_dump($shoot2tab2);
	
		foreach ($shoot3tab as $key3){
			
			$shoot3tab3 = explode("a", $key3);
			
			if($shoot3tab3[0]==$shoot2tab2[0] and $shoot3tab3[1]==$shoot2tab2[1]){
				
				echo "$('#".$shoot2tab2[0]."a".$shoot2tab2[1]."').css('background-color','#00ff00');";
				$point2=$point2+1;
				//echo "alert('p');";
				
			}
			
		}
		//echo "$('#".$shoot2tab2[0]."a".$shoot2tab2[1]."').css('background-color','#000000');";
		
		
	
	
}
fclose($plik2);
fclose($plik3);

?>


$("#punktacja").val("<? echo $point-1; ?>");

$("#mypoints").val("<? echo $point2-1; ?>");


$("#lewy").css('width',500);
$("#prawy").css('width',500);

$.get("ready1.php", { 'key' : '777' },  function(data) {
});
$.get("ready2.php", { 'key' : '777' },  function(data) {
});
</script>

