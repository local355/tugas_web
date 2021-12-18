<?php
include "config.php";
session_start();
$data = get('users');
foreach ($data as $list) {
	//echo $list['user_name'] . $list['password'];
	echo "<br>";
if (isset($_SESSION['id'])){
	echo "set\n";
}else{
	echo "no:\n";
}
if ($list['user_name'] == $_POST["username"] && $list['password']){
	$_SESSION['id'] = $list['user_name'];
	$s = $_SESSION['id'];

	echo "halo $s anda berhasil login";
	///header("location:index.php");
	break;
}}
//var_dump($list);
//die();
//echo $_SESSION['id'];
//var_dump($_SESSION = array( ));
?>