<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="simple-line-icons/css/simple-line-icons.min.css">
</head>
<body>

	<div align="center" style="font-size: 20px">
		<!-- cek pesan notifikasi -->
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "Login gagal! username dan password salah!";
			}else if($_GET['pesan'] == "logout"){
				echo "Anda telah berhasil logout";
			}else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login untuk mengakses halaman admin";
			}
		}
		?>
	</div>
	<br/>
	<br/>
	<form method="post" action="login_proses.php">
		<table align="center" cellpadding="5">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</div>

</body>
</html>