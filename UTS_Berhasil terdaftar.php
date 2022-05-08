<!DOCTYPE html>
<html>
<head>
	<title>Setelah Terdaftar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="bdterdaftar"></div>
	<div class="container">
		<p class="lembaga">Lembaga Pendidikan Taman Kanak-Kanak</p>
		<?php 
			include "UTSkoneksi.php";

			$nama = $_POST["nama_murid"];
			$tglLahir = $_POST["tgl_lahir_murid"];
			$namaAyah = $_POST["nama_ayah"];
			$namaIbu = $_POST["nama_ibu"];
			$notlp = $_POST["nomor_tlp_ortu"];
			$alamat = $_POST["alamat"];
			$kelas = $_POST["kelas"];

			$sql = "INSERT INTO data_murid VALUES ( null, '$nama', '$tglLahir', '$namaAyah', '$namaIbu', '$notlp', '$alamat', '$kelas')";
			$hasil = mysqli_query($koneksi, $sql);
			if (!$hasil) {
			?>
			<div class="kotakberhasil">
				<p style="font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 30px;line-height: 36px; text-align: center; color: #FFFFFF;">Maaf Anak Anda Gagal Terdaftar</p>
			</div>
			<button class="btterdaftar"><a href="UTS_Home user.php" style="text-decoration: none; color: black; font-size: 30px;">Back To Home</a></button>
			<img src="gambar3.png" class="gambar3">
		 <?php 
		 }
		 else {
		 ?>
		 <div class="kotakberhasil">
			<p style="font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 30px;line-height: 36px; text-align: center; color: #FFFFFF;">Selamat Anak Anda Berhasil Terdaftar</p>
			<p style="font-family: 'Inter'; font-style: normal; font-weight: 400; font-size: 20px;line-height: 24px; text-align: center; color: #FFFFFF;">Pengumpulan dokumen hardfile silahkan datang ke sekolah TK Dharma Wanita Desa Balongrejo</p>
		</div>
		<button class="btterdaftar"><a href="UTS_Home user.php" style="text-decoration: none; color: black; font-size: 30px;">Back To Home</a></button>
		<img src="gambar3.png" class="gambar3">
		<?php } 
		?>
	</div>
</body>
</html>