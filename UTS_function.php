<?php
	include "UTSkoneksi.php";	
	function registrasi($data){
		$username = strtolower(stripcslashes($data["username"]));
		$password =mysqli_real_escape_string($koneksi, $data["password"]);
		$password2 =mysqli_real_escape_string($koneksi, $data["password2"]);

		if ($password!== $password2) {
			echo "<script>
				alert('konfirmasi password tidak sesuai')
				</script>";
			return false;
		}
	}
?>