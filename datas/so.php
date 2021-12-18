<?php
include "co.php";
$no  = str_replace(" ","",strtoupper($_POST["no_seri"]));
$nm  = strtoupper($_POST["nama"]);
$tp  = strtoupper($_POST["tipe"]);
$kat = strtoupper($_POST["kategori"]);
$jen = strtoupper($_POST["jenis"]);
$icd = strtoupper($_POST["included"]);
$des = $_POST["descriptions"];
$pf = $_FILES["doc"];

if($pf ["type"] == "application/pdf"){
	$fdes = "files/";
	$fol = $fdes . $pf["name"];
	$newn = "files/$no.pdf";
	$fi = move_uploaded_file($_FILES["doc"]["tmp_name"], $fol );
	
	if ($fi){
		if(!rename("$fol", $newn)){
			echo "rename failure";
		}
		$trem = $pf ["name"];
		mysqli_query($cp,"insert into del (dih) value ('$trem')");
		$di = mysqli_query($cp,"insert into datas (ns, nm, typ, ktgr, jns, incd, des, dir) value ('$no', '$nm', '$tp', '$kat', '$jen', '$icd',  '$des', '$newn')");
		if(!$di){
			echo "inserting to database faliure";
		}
		
		
	}
	else{
		echo "upload move filed";
	}

	if ($di && $fi){
		
		header("Location: " . $_SERVER["HTTP_REFERER"]);
	}
	else if($di){
		echo "data is inserted to database";
	}
	else if($fi){
		echo "file is inserted to $fol";
	}else{
		echo "something is wrong";
	}
}
else{
	echo "file is not a <b>pdf</b> file<br>";
	echo "<a href='../datas/'><b color='blue'>Back</b></a>";
}
?>