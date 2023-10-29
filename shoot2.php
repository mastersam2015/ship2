
<?

//echo "<br><br>".$point;

$zapis=$_GET["s"];
if(!empty($zapis)){
	
	$plik2 = fopen('shoot2.txt','r');
$shoot2=fgets($plik2, 10000);
$shoot2=$shoot2."b".$zapis;
fclose($plik2);

$plik2 = fopen('shoot2.txt','w');
fputs($plik2, $shoot2);
fclose($plik2);
header('Location: server2.php');
}
?>