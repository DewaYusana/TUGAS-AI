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
	<div align="center">
		<button class="btn btn-danger"><a href="input_foto.php" style="color: white;">Tambah Foto Mahasiswa</a></button>
	</div>
	<br>


	<div>
		<div class="container">
		<div class="row">
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from gallery");
		while ($d = mysqli_fetch_array($data)){
			?>


	
			<div class="col-md-4">
			<h4 align="center"><?= $no++; ?></h4>
			<div class="card">
				<img src="foto/<?= $d['foto']; ?>">
			<div class="card-body">
				<p class="card-title" align="center"> <?= $d['nama']; ?></p>
			</div>
				<button class="btn btn-danger my-2 my-sm-0" ><a href="hapus_foto.php?id=<?= $d['id']; ?>" style="color: white">Hapus</a></button>
			</div>
			</div>
		
			<?php
		}
		?>
</div>
	</div>
	</div>
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
</body>
</html>