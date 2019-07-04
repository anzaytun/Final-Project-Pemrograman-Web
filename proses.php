<html>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body background="img/aaa.jpg">
<div class="jumbotron">

<?php
echo "<head><title>DATA PESERTA</head></title>";
$fp = fopen("datapeserta.txt","a+"); //fopen untuk membuka data di txt
$nama_peserta = $_POST['nama'];//untuk menampung data nama kedalam variabel nama peserta
$tanggal = $_POST['tanggal'];//untuk menampung tanggal kedalam variabel tanggal
$alamat= $_POST['alamat'];//untuk menampung alamat kedalam variabel alamat
$asal_sekolah = $_POST['asal'];//untuk menampung asal sekolah kedalam variabel asal sekolah
$file = $_FILES["file"]["name"];//variabel untuk mengecek nama variabel untuk upload file
$tmp_name = $_FILES["file"]["tmp_name"];//variabel untuk mengecek lokasi tempat file upload
move_uploaded_file($tmp_name, "img/".$file);//fungsi untuk mengupload file dalam folder img

fputs($fp,"$nama_peserta|$tanggal|$alamat|$asal_sekolah|$file\n");//untuk memasukan semua nama variabel dalam notepad
fclose($fp);//fclose untuk menutup data di txt
echo " Terima Kasih Atas Partisipasi Anda Mengisi Pembayaran<br>";
echo "<a class=btn href=lihat.php> Lihat Data </a><br>";
?>
</div>
</body>
</html>