<?php 
include "co.php";
$q = "E:/0001/ELEKTRONIKA/DATASHEET/";
$t = "TRANSISTOR/";
$d = "DIODE/";
$ic = "INTEGRATEDCIRCUIT/";
$o = "o/";

$hasil = mysqli_query($cp, "select * from del");
while($data = mysqli_fetch_array($hasil)){
if(true){
	$dir = $q.$ic.$data[0];
	$des = $q.$ic.$o.$data[0];
	rename($dir, $des);
}
if(true){
	$dir = $q.$d.$data[0];
	$des = $q.$d.$o.$data[0];
	rename($dir, $des);
}
if(true){
	$dir = $q.$t.$data[0];
	$des = $q.$t.$o.$data[0];
	rename($dir, $des);
}
}
header("Location: " . $_SERVER["HTTP_REFERER"]);

?>