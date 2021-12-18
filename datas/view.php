<html>
<head>
		<title></title>
	
	</head>
	<body>
	<?php
		include "co.php";
		$query = "SELECT dir FROM datas";
		$hasil = mysqli_query($cp, $query);
		$limits = mysqli_num_rows($hasil);
		$list[] = 0;
		while ($data = mysqli_fetch_array($hasil)){
			$list[] = $data[0];
		}
		//var_dump($list);

		$i = 1;
		if(isset($_POST['kirim'])){
			if($_POST['t'] == $_POST['t']){
				$i =  $_POST['t'] + 1;
			}
		}
		if(isset($_POST['dikirim'])){
			if($_POST['t'] == $_POST['t']){
				$i =  $_POST['t'] - 1 ;
			}
		}
		echo "<br>";
		//echo $list[$i];
	?>
	<span>
	<div id="">
		<form method="POST" name="" action="">
			
			<?php
				if ($i > 1 and $i < $limits){
					echo '<input type="submit" name="dikirim" value="sebelumnya" />';
					echo '<input type="submit" name="kirim" value="selanjutnya" />';
				}
				else if ($i == 1){
					echo '<input type="submit" name="kirim" value="selanjutnya" />';
				}
				else if ($i == $limits){
					echo '<input type="submit" name="dikirim" value="sebelumnya" />';
				}
				else{
					header("Location: view.php");
				}
			?>
			<input type="text" name="t" value="<?php echo $i;?>" />
			
		</form>
	</div>
	<div id="" style="border:2px solid red; width:95%; text-align:center;">
		<iframe src="<?php echo $list[$i];?>" width="100%" height="100%">jgjgjgj</iframe>
	</div>
	</span>
	</body>
</html>

