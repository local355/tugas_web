<?php 
$a = [
	'a'=>1,
	'b'=>2,
	'c'=>3,
	'd'=>4,
	'e'=>5,
	'f'=>6,
	'g'=>7,
	'h'=>8,
	'i'=>9
];

$f = [];
$v = [];
$a['h'] = 'walidi';
foreach($a as $fs => $vs){
	$f[] = "`".$fs."`";
	$v[] = "'".$vs."'";
}
//var_dump($a);
echo implode(",", $f);
echo implode(",", $v); 


 ?>