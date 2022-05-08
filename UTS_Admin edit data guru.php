<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Guru</title>
		<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body>
	<div style="position: absolute;width: 1440px;height: 778px;left: 0px;top: 0px;background: linear-gradient(180deg, #B483C0 -56.1%, rgba(255, 255, 255, 0) 82.76%);"></div>
	<p class="lembaga">Lembaga Pendidikan Taman Kanak-Kanak</p>
	<a href="UTS_Home Admin.php" class="home" style="text-decoration: none; position: absolute;width: 151px;height: 50px;left: 950px;top: 39px;font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">Home</a>
	<a href="UTS_Admin data guru.php" class="home" style="text-decoration: none; position: absolute;width: 151px;height: 50px;left: 1050px;top: 39px;font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">Data Guru</a>
	<a href="UTS_login admin.php" class="home" style="text-decoration: none; position: absolute;width: 151px;height: 50px;left: 1200px;top: 39px;font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">Logout</a>
	<div style="position: absolute;width: 681px;height: 599px;left: 110px;top: 150px;background: #FFFFFF;box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.25);border-radius: 30px 30px 0px 0px;">
		<p style="position: absolute;left: 40px;top: 10px;font-family: sans-serif;font-style: normal;font-weight: 700;font-size: 40px;line-height: 48px;color: #000000;">Edit Data Guru</p>
		<?php 
			include "UTSkoneksi.php";

			$id = $_GET["id_guru"];

			$sql = "SELECT * FROM data_guru WHERE id_guru = $id";
			$hasil = mysqli_query($koneksi,$sql);
			if (!$hasil) {
				echo "Edit gagal";
			}
			while ($row = mysqli_fetch_array($hasil)) {
		?>
		<form action="UTS_Alert edit data guru.php" method="POST">
			<input type="hidden" name="id_guru" value="<?php echo $row["id_guru"]?>">
			<label style="position: absolute;left: 40px;top: 150px;font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">Nama Lengkap</label>
			<input type="text" name="nama_guru" style="position: absolute;width: 344px;height: 39px;left: 275px;top: 150px;border: 1px solid #C4C4C4;box-sizing: border-box;border-radius: 10px;" value="<?php echo $row["nama_guru"]?>">

			<label style="position: absolute;left: 40px;top: 200px;font-family: sans-serif; font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">NIP</label>
			<input type="text" name="nip" style="position: absolute;width: 344px;height: 39px;left: 275px;top: 200px;border: 1px solid #C4C4C4;box-sizing: border-box;border-radius: 10px;" value="<?php echo $row["nip"]?>">

			<label style="position: absolute;left: 40px;top: 250px;font-family: sans-serif; font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">No Telpon</label>
			<input type="text" name="nomor_tlp_guru" style="position: absolute;width: 344px;height: 39px;left: 275px;top: 250px;border: 1px solid #C4C4C4;box-sizing: border-box;border-radius: 10px;" value="<?php echo $row["nomor_tlp_guru"]?>">

			<label style="position: absolute;left: 40px;top: 300px;font-family: sans-serif; font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">Alamat</label>
			<input type="textarea" name="alamat" style="position: absolute;width: 344px;height: 39px;left: 275px;top: 300px;border: 1px solid #C4C4C4;box-sizing: border-box;border-radius: 10px;" value="<?php echo $row["alamat"]?>">

			<label style="position: absolute;left: 40px;top: 350px;font-family: sans-serif; font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">Kelas</label>
			<select style="position: absolute;width: 344px;height: 39px;left: 275px;top: 350px;border: 1px solid #C4C4C4;box-sizing: border-box;border-radius: 10px;"name="kelas" value="<?php echo $row["kelas"]?>">
				<option>A</option>
				<option>B</option>
			</select>
			<button style="position: absolute; width: 580px;height: 62px;left: 40px;top: 450px;background: #B37EC1; border-radius: 10px;" type="submit">
				<p style="position: absolute;width: 130px;height: 37.99px;left: 250px;top: -20px;font-family: sans-serif;font-style: normal;font-weight: 700;font-size: 30px;line-height: 36px;color: white;">Edit</p>
			</button>
		</form>
	<?php } ?>
	</div>
</body>
</html>