<?php 

// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
if ($_POST) {
	$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi,"update daftar set nim='$nim', nama='$nama', kelamin='$kelamin', alamat='$alamat'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
}


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
		<div class="collapse navbar-collapse container" id="navbarSupportedContent ">
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

<br><br><br>

<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from daftar where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

		<form method="post" action="update.php">
			<table align="center" width="700px" cellpadding="10">
				<tr>
					<td>NIM</td>
					<td>
						<input type="number" name="nim" value="<?php echo $d['nim']; ?>" style="width: 80%">
					</td>
				</tr>

				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>"style="width: 80%">
					</td>
				</tr>

				<tr>
					<td>kelamin</td>
					<td><input type="text" name="kelamin" value="<?php echo $d['kelamin']; ?>"style="width: 80%"></td>
				</tr>

				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"style="width: 80%"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>	
					
			</table>
		</form>
		<?php 
	}
	?>
	<br><br><br>

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