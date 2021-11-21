<?php 
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelamin=$_POST['kelamin'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi,"insert into daftar values('','$nim','$nama','$kelamin','$alamat')");
header("location:index.php");

?>