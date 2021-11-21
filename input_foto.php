<?php 
include 'koneksi.php';
	if ($_POST) {
		$nama=$_POST['nama'];
		$foto = '';
	if ($_FILES) {
	$folder = 'foto/';
	$foto=$_FILES ['foto']['name'];
	$target = $folder.$foto;
	$tmp = $_FILES['foto']['tmp_name'];
	move_uploaded_file($tmp, $target);
	}
mysqli_query($koneksi,"INSERT INTO `gallery`( `foto`, `nama`) VALUES ('$foto','$nama')");
		header("location:gallery.php");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="simple-line-icons/css/simple-line-icons.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="collapse navbar-collapse container" id="navbarSupportedContent">
			<button class="btn btn-danger" style="margin-right: 40px" ><a href="logout.php" style="color: white;">Logout</a></button>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php" style="color: white; font-size: 30px;">Home</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="gallery.php" style="color: white; font-size: 30px">gallery</a>
				</li>
				<li>
					<a class="nav-link" href="tambah.php" style="color: white; font-size: 30px">Daftar</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-light my-2 my-sm-0"type="submit">Search</button>
			</form>	
		</div>
	</nav>
	<br>
	<br>
	<br>

<form method="POST" action="" enctype="multipart/form-data">
	<table align="center" cellpadding="10"> 
		<tr>
			<td></td>
			<td>Foto Berukuran 3x4</td>
		</tr>
		<tr>
			<td>FOTO :</td>
			
			<td><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td>Nama :</td>
			
			<td><input type="text" name="nama" placeholder="masukan nama anda" class="form-control"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit"> kirim</button></td>
		</tr>
	</table>
	<br>
	<br>


	<footer class="bg-dark">
		<br>
		<div>
		</h3>
	</div>
	<div class="container" style="color: white;">
		<div class="row">
			<div class="col-md-4">
				<h5 align="center">Social Media</h5>
				<ul>
					<li><i class="icon-social-instagram"> : @rosita </i></li>
					<li><i class="icon-social-facebook"> : rosita01 </i></li>
				</ul>
			</div>
			<div class="col-md-4">
				<h5 align="center">Contact</h5>
				<ul>
					<li><i class="icon icon-phone"> : 081234567 </i></li>
					<li><i class="icon icon-envelope-open"> : rosita@gmail.com </i></li>
				</ul>
			</div>
			<div class="col-md-4">
				<h5 align="center">Addres</h5>
				<ul>
					<li><i class="icon icon-map"> : Jalan margapati kerambitan tabanan </i></li>
				</ul>
			</div>
		</div>
	</div>
	<br>
</footer>
</form>
</body>
</html>