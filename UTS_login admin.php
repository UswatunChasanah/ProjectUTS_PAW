<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body>
	<?php
 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo '<script type ="text/JavaScript">';  
			echo 'alert("Login gagal! username dan password salah!")';  
			echo '</script>'; 
		}
	}
	?>
	<div class="bgloginadmin">
		<div class="container">
			<p class="lembaga">Lembaga Pendidikan Taman Kanak-Kanak</p>
    </div>
			<div class="rectlogin">
				<p class="signin">Sign In</p>
				<div class="linelogin"></div>
				<br>
				<form action="cek_login.php" method="POST">
					<label style="position: absolute;width: 129px;height: 28px;left: 10px;font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;" for="username">UserName</label>
					<br>
					<input type="text" name="username" id="username" style="position: absolute; width: 291.01px; height: 34.37px; left: 10px; top: 170px;background: rgba(252, 156, 44, 0.15);border-radius: 10px;" placeholder="Masukkan username">
					<label style="position: absolute;width: 129px;height: 28px;left: 10px; top: 240px; font-family: sans-serif;font-style: normal;font-weight: 400;font-size: 25px;line-height: 30px;color: #000000;" for="password">Password</label>
					<input type="password" name="password" id="password" style="position: absolute; width: 291.01px; height: 34.37px; left: 10px; top: 270px;background: rgba(252, 156, 44, 0.15);border-radius: 10px;" placeholder="Masukkan password">
					<br><br><br><br><br><br>
					<button style="position: absolute;width: 108px;height: 41px;left: 100px;top: 350px;background: #FC9C2C;border-radius: 10px;" type="submit" value="LOGIN"><p style="position: absolute;width: 130px;height: 37.99px;left: -15px;top: -30px;font-family: sans-serif;font-style: normal;font-weight: 700;font-size: 30px;line-height: 36px;color: white;">Login</p></button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>