<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="bgpendaftaran"></div>
	<div class="container">
		<p class="lembaga"><b>Lembaga Pendidikan Taman Kanak-Kanak</b></p>
		<a href="UTS_Home user.php" class="home" style="text-decoration: none;" class="home">Home</a>
		<a href="UTS_Eksplore.php" class="eksplore" style="text-decoration: none;" class="home">Eksplore</a>
		<a href="UTS_contact.php" class="contact" style="text-decoration: none;" class="home">Contact</a>
		<img src="gambar2.png" class="gambar2">
		<p class="formulir">Formulir Pendaftaran Peserta Didik Baru TK Dharma Wanita Desa Balongrejo</p>
		<form action="UTS_Berhasil terdaftar.php" method="POST">
			<label class="namapendaftaran">Nama Lengkap</label>
			<input type="text" name="nama_murid" class="inputnamapendaftaran" class="form-control" required>

			<label class="tglpendaftaran">Tanggal Lahir</label>
			<input type="text" name="tgl_lahir_murid" class="inputtglpendaftaran">

			<label class="namaayahpendaftaran">Nama Ayah</label>
			<input type="text" name="nama_ayah" class="inputnamaayahpendaftaran">

			<label class="namaibupendaftaran">Nama Ibu</label>
			<input type="text" name="nama_ibu" class="inputnamaibupendaftaran">

			<label class="notlppendaftaran">No Telpon Orang Tua</label>
			<input type="text" name="nomor_tlp_ortu" class="inputnotlppendaftaran">

			<label class="alamatpendaftaran">Alamat</label>
			<input type="textarea" name="alamat" class="inputalamatpendaftaran">

			<label class="kelaspendaftaran">Kelas</label>
			<select class="inputnopendaftaran" name="kelas">
				<option>A</option>
				<option>B</option>
			</select>
			<button style="position: absolute;width: 614px;height: 47.11px;left: 110px;top: 600px;background: #02A8A8;border-radius: 10px;" type="submit"><p style="position: absolute;width: 130px;height: 37.99px;left: 250px;top: 5px;font-family: sans-serif;font-style: normal;font-weight: 700;font-size: 30px;line-height: 36px;color: white;">Daftar</p></button>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>