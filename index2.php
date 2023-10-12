<?
ob_start();


?>
<script type="text/javascript" src="jquery.js"></script>
<style>
td{width:20;height:20;}

</style>
<script>
var tab= new Array();
var dodaj=0;
var p1=0;
var p2=0;
var p3=0;
var p4=0;
var p5=0;
var p6=0;
var p7=0;
var p8=0;
var p9=0;
var p10=0;
var kurs=0;
var calosc="";
$(document).mousemove(function(event){
//$("#kursor").html("1");
//$("#kursor").show();
    $("#kursor").css("margin-left", event.pageX);
	$("#kursor").css("margin-top", event.pageY);
}); 



function licz(x){
tab=x.split("a");
	if(p6==0){
$("#"+tab[0]+"a"+tab[1]).html("x");	
calosc=calosc+"b"+x;
	}
	dodaj=dodaj+1;

	

		
				if(p1==0){
		$("#kursor").html("1");
		if(dodaj==1){
			dodaj=1;
			p1=6;
		}
		
	}
	
	
	
	
	
		if(p6==0){
		$("#kursor").html("6");
		if(dodaj==7){
			dodaj=0;
			p6=6;
			$("#kursor").html("ok");
			window.location ='index2.php?calosc='+calosc;
			//alert(calosc);
		}
		
	}
	
	
		if(p5==0){
		$("#kursor").html("5");
		if(dodaj==5){
			dodaj=0;
			p5=6;
		}
		
	}
	
	
		if(p4==0){
		$("#kursor").html("4");
		if(dodaj==4){
			dodaj=0;
			p4=6;
		}
		
	}
	
	
		if(p3==0){
		$("#kursor").html("3");
		if(dodaj==3){
			dodaj=0;
			p3=6;
		}
		
	}
	
		if(p2==0){
		$("#kursor").html("2");
		if(dodaj==2){
			dodaj=0;
			p2=6;
		}
		
	}
	
	
		if(p1==0){
		$("#kursor").html("1");
		if(dodaj==1){
			dodaj=1;
			p1=6;
		}
		
	}
}

</script>


<div id="kursor" style="position:absolute;"></div>
<center>
stand up you ship<br><br>
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

<script>

$("#kursor").html("1");
</script>

<?
$calosc=$_GET["calosc"];
if(!empty($calosc)){
$plik2 = fopen('xy2.txt','w');
fputs($plik2, $calosc);
fclose($plik2);
header('Location: server2.php');
}

?>