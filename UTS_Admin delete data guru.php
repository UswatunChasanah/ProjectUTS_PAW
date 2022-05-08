<!DOCTYPE html>
<html>
<head>
	<title>Delete Data Guru</title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body>
	<div style="position: absolute;width: 1440px;height: 778px;left: 0px;top: 0px;background: linear-gradient(181.47deg, #02A8A8 -81.78%, rgba(2, 168, 168, 0) 49.96%);"></div>
	<p class="lembaga">Lembaga Pendidikan Taman Kanak-Kanak</p>
	<?php 	
	include "UTSkoneksi.php";

	$id = $_GET["id_guru"];
	
	$sql = "DELETE FROM data_guru WHERE id_guru = $id";
	$hasil = mysqli_query($koneksi,$sql);
	if (!$hasil) { ?>
		<div style="position: absolute;width: 665px;height: 125px;left: 379px;top: 144px;background: rgba(2, 168, 168, 0.75);border-radius: 10px;">
			<p style="position: absolute;width: 616px;height: 47px;left: 404px;top: 160px;font-family: 'Inter';font-style: normal;font-weight: 700;font-size: 30px;line-height: 36px;text-align: center;color: #FFFFFF;">Data Guru Gagal Dihapus</p>
		</div>
	<?php } else { ?>
		<div style="position: absolute;width: 665px;height: 125px;left: 379px;top: 144px;background: rgba(2, 168, 168, 0.75);border-radius: 10px;">
			<p style="position: absolute;left: 150px;top: -20px;font-family: sans-serif;font-style: normal;font-weight: 700;font-size: 30px;line-height: 36px;text-align: center;color: #FFFFFF;">Data Guru Berhasil Dihapus</p>
			<button style="position: absolute;width: 247px;height: 50px;left: 220px;top: 60px;background: #02A8A8;border: 5px solid #FFFFFF;box-sizing: border-box;border-radius: 10px;"><a href="UTS_Admin data guru.php" style="text-decoration: none; color: white; font-size: 30px;">Lihat Data Guru</a></button>
		</div>
		<img src="gambar4.png" style="position: absolute;width: 500px;height: 328px;left: 474px;top: 450px;">
	<?php } ?>	
</body>
</html>