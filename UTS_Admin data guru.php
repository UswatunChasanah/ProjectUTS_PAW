<!DOCTYPE html>
<html>
<head>
	<title>Data Guru</title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div style="position: absolute;width: 1440px;height: 778px;left: 0px;top: 0px;background: linear-gradient(180deg, #CB9AD8 -56.1%, rgba(255, 255, 255, 0) 82.76%);"></div>
	<p class="lembaga">Lembaga Pendidikan Taman Kanak-Kanak</p>
	<a href="UTS_Home Admin.php" class="home" style="text-decoration: none; position: absolute;width: 151px;height: 50px;left: 1100px;top: 39px;font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">Home</a>
	<a href="UTS_login admin.php" class="home" style="text-decoration: none; position: absolute;width: 151px;height: 50px;left: 1200px;top: 39px;font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">Logout</a>
	<div style="position: absolute;width: 1220px;height: 883px;left: 110px;top: 119px;background: #FFFFFF;box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.25);border-radius: 30px 30px 0px 0px;">
		<p style="position: absolute;width: 370px;height: 101.06px;left: 50px; top: 20px; font-family: sans-serif;font-style: normal;font-weight: 700;font-size: 40px;line-height: 48px;color: #000000;">Data Guru</p>
		<br><br><br><br>
		<table class="table" width="80%" style="text-align: center;">
		  <thead>
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">Nama</th>
		      <th scope="col">NIP</th>
		      <th scope="col">No. Telpon</th>
		      <th scope="col">Alamat</th>
		      <th scope="col">Kelas</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 	 
				include "UTSkoneksi.php";
				$sql = "SELECT * FROM data_guru";
				$hasil = mysqli_query($koneksi, $sql);

				while ($row = mysqli_fetch_array($hasil)) 
				{
				?>
		    <tr>
		      <th scope="row"><?=$row["id_guru"];?></th>
		      <td><?=$row["nama_guru"];?></td>
		      <td><?=$row["nip"];?></td>
		      <td><?=$row["nomor_tlp_guru"];?></td>
		      <td><?=$row["alamat"];?></td>
		      <td><?=$row["kelas"];?></td>
		      <td>
		      	<button type="button" class="btn btn-success"><i class="bi bi-backspace"></i><a style="text-decoration: none; color: white;" href="UTS_Admin edit data guru.php?id_guru=<?=$row["id_guru"]?>">Edit</a></button>
				<button type="button" class="btn btn-danger"><a style="text-decoration: none; color: white;" href="UTS_Admin delete data guru.php?id_guru=<?=$row["id_guru"]?>">Delete</a></button>
		      </td>
		    </tr>
		    <?php } ?>
		  </tbody>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>