<?php
session_start();
if (isset($_SESSION['id'])){
    echo "_SESSION set";
}else{
    header("Location: login.php");
}
var_dump($_SESSION['id']);
echo session_save_path();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>index</title>
 </head>
 <body>
 <h1>halaman index</h1>
 </body>
 </html>