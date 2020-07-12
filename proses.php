<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		background-image: url(dota2.jpg);
	}
	.home{
		text-align: center;
		margin-top: 260px;
		color:white;
	}
	</style>
</head>
<body>
<div class="home">
	<?php
	echo "<head><title>Peserta eSport Dota 2</head></title>";
	$fp = fopen("daftar_peserta.txt", "a+");

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$status = $_POST['status'];
	$pendidikan = $_POST['pendidikan'];
	$motivasi = $_POST['motivasi'];


	fputs($fp,"$nama|$alamat|$email|$nohp|$status|$pendidikan|$motivasi\n");
	fclose($fp);

	echo "<h1>Terima Kasih Atas Partisipasi Anda Mengikuti Kompetisi</h1> <br>";
	?>
	<button class="tombol"><a align="center" href="lihat_list.php">Lihat List Pendaftaran</a></button>

	
</div>
</body>
</html>
