<html>
<head>
		<title></title>
	
	</head>
	<body>
	<?php
		
		$a = scandir("../files/");
		//echo var_dump($a);
		$i = 0;
		if(isset($_POST['kirim'])){
			//echo $_POST['t'];
			if($_POST['t'] == $_POST['t']){
				$i =  $_POST['t'] + 1;
				//echo $_POST['t'];
				
			}
		}
		if(isset($_POST['dikirim'])){
			//echo $_POST['t'];
			if($_POST['t'] == $_POST['t']){
				$i =  $_POST['t'] - 1 ;
				//echo $_POST['t'];
				
			}
		}
		$link = "localhost/datas/files/";
		echo $link.$a[$i + 1];
	?>
	<span>
	<div id="">
	
		<h1><?php echo $i;?></h1>
		<form method="POST" name="" action="">
			<input type="hidden" name="t" value="<?php echo $i;?>" />
			<input type="submit" name="dikirim" value="sebelumnya" />
			<input type="submit" name="kirim" value="selanjutnya" />
		</form>
	</div>
	<div id="" style="border:2px solid red; width:95%; text-align:center;">
		<iframe src="../files/<?php echo $a[$i + 1];?>" width="100%" height="100%">jgjgjgj</iframe>
	</div>
	</span>
	</body>
</html>

