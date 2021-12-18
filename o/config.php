<?php
$cp = mysqli_connect('localhost', 'root','','file_upload');

function get($tabel){
	global $cp;
	$data = mysqli_query($cp, "select * from $tabel");
	return $data;
}