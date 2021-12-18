<?php
//buat koneksi dengan MySQL
$link=mysqli_connect('localhost','root','','data');
   
//jika koneksi gagal, langsung keluar dari PHP
if (!$link)
{
   die("Koneksi dengan MySQL gagal");
}
   

 
//tampilkan tabel mahasiswa_ilkom
$result=mysqli_query($link,'SELECT * FROM datas');
?>
<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <title>Belajar PHP MySQL</title>
   <style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#fff;
      background-color:#2A72BA;
      border-top:1px black solid;
      border-bottom:1px black solid;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #DFEBF8; }
   </style>
</head>
<body>
   <h3>Penyajian Data MySQL dalam bentuk tabel HTML dengan CSS</h3>
<table>
<tr>
   <th>NIM</th>
   <th>Nama</th>
   <th>Umur</th>
   <th>Tempat Lahir</th>
   <th>IPK</th>
</tr>
<?php
while ($row=mysqli_fetch_array($result))
{
   echo "<tr>";
   echo "<td>".$row['0']."</td>";
   echo "<td>".$row['1']."</td>";
   echo "<td>".$row['2']."</td>";
   echo "<td>".$row['3']."</td>";
   echo "<td>".$row['4']."</td>";   
   echo "</tr>";
}
?>
</table> 
</body>
</html>