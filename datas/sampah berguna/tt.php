


<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

///chek if image is sctual imagr or fake image
if(isset($_POST["submit"])){
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false){
		//echo "file is an image - " . $check["mime"]. ".";
		$uploadOk = 1;
	}
	else{
		//echo "FILE IS NOT IMAGE";
		$uploadOk = 0;
	}
}
echo 'aas  = '.$target_file;//.$_FILES["fileToUpload"]["name"].'<br>';

// chek if file already exists
if(file_exists($target_file)){
	echo "sorry file alredy exists";
	$uploadOk = 0;
}




//check if $uploadOk is set to 0 by an error
if ($uploadOk == 0){
	echo "sorry ypur file mas not uploaded";
	// if evry thing ok try to upload file
}
else{
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
	echo "the file ". htmlspecialchars(basename($_FILES["fileToUpload"]["tmp_name"]))."has been uploaded";
	}
	else{
		echo "sorry there was an error while uploaing ypur file";
	}
}
?>