<!DOCTYPE html>
<html>
<head>
	<title>Data Lengkap Murid</title>
		<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body>
	<div style="position: absolute;width: 1440px;height: 778px;left: 0px;top: 0px;background: linear-gradient(180deg, #EA86AB -56.1%, rgba(255, 255, 255, 0) 82.76%);"></div>
	<p class="lembaga">Lembaga Pendidikan Taman Kanak-Kanak</p>
	<a href="UTS_Home Admin.php" class="home" style="text-decoration: none; position: absolute;width: 151px;height: 50px;left: 950px;top: 39px;font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">Home</a>
	<a href="UTS_Admin data murid.php" class="home" style="text-decoration: none; position: absolute;width: 151px;height: 50px;left: 1050px;top: 39px;font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">Data Murid</a>
	<a href="UTS_login admin.php" class="home" style="text-decoration: none; position: absolute;width: 151px;height: 50px;left: 1200px;top: 39px;font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">Logout</a>
	<?php 
		include "UTSkoneksi.php";
		
		if(isset($_GET['id_murid'])){
	        $id_murid    =$_GET['id_murid'];
	    }
	    else {
	        die ("Error. No ID Selected!");    
	    }
	   
	    $query    =mysqli_query($koneksi, "SELECT * FROM data_murid WHERE id_murid='$id_murid'");
	    $result    =mysqli_fetch_array($query);
	?>
	<div style="position: absolute;width: 760px;height: 648px;left: 340px;top: 130px;background: #FFFFFF;box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.25);border-radius: 30px 30px 0px 0px;">
		<p style="position: absolute;left: 200px;top: 10px;font-family: sans-serif;font-style: normal;font-weight: 700;font-size: 40px;line-height: 48px;color: #000000;">Data Murid Lengkap</p>
		<div style="position: absolute;width: 680px;height: 0px;left: 40px;top: 150px;border: 1px solid #000000;transform: matrix(1, 0, 0, 1, 0, 0);"></div>
		<div style="position: absolute;width: 651px;height: 306.7px;left: 40px;top: 150px;font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;">
			<table cellspacing="20">
				<tr>
					<td>Nama</td>
					<td> : <?=$result["nama_murid"];?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td> : <?=$result["tgl_lahir_murid"];?></td>
				</tr>
				<tr>
					<td>Nama Ayah</td>
					<td> : <?=$result["nama_ayah"];?></td>
				</tr>
				<tr>
					<td>Nama Ibu</td>
					<td> : <?=$result["nama_ibu"];?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td> : <?=$result["alamat"];?></td>
				</tr>
				<tr>
					<td>No. Telpon Ortu</td>
					<td> : <?=$result["nomor_tlp_ortu"];?></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>