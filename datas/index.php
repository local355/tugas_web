<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="icon" href="./imgs/ico.png" type="image/x-icon">

		
		<link rel="stylesheet" type="text/css" href="../datas/sss.css">
		<title>JUDUL</title>
	</head>
	<body>
	<?php include "header.php"?>
	
	<?php 
		$user ="admin";
		if($user == "admin"){
			echo include "input.html";
		}
    ?>
	<?php include "content.php"?> 
	<?php include "footer.php"?>
</body>
</html>