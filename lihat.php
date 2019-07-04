<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body background="img/aaa.jpg">

<?php
echo "DATA PESERTA";
$fp = fopen("datapeserta.txt","r");//fopen untuk membuka data di txt dan hanya membaca data
echo "<table border=0>";
while ($isi = fgets($fp,80))//untuk melakukan perulangan dimana data diambil dalam menggunakan fungsi fgets
{
$pisah = explode("|",$isi);//untuk berfungsi sbagai pemisah data 1 dengan data yang lain dimana pemisahnya dengan tanda |
echo "<tr><td>Nama Peserta</td><td>: $pisah[0]</td></tr>"; //menampilkan data index 0
echo "<tr><td>Tanggal Lahir </td><td>: $pisah[1]</td></tr>";//menampilkan data index 1
echo "<tr><td>Alamat </td><td>: $pisah[2]</td></tr>";//menampilkan data index 2
echo "<tr><td>Asal Sekolah</td><td>: $pisah[3]</td></tr>";//menampilkan data index 3
echo "<tr><td>pas foto </td><td>: <img src=img/$pisah[4] width=200 height=200 ></td></tr>";//menampilkan data index 4
}
echo "</table>";
echo "<a class=btn href=buku.html> Isi Buku tamu </a>";
?>
</body>
</html>