<?php 
include 'koneksi.php';

$email = $_POST['email'];
$nama_tamu = $_POST['nama_tamu'];
$sosial = $_POST['sosial'];
$js = $_POST['js'];
$negara = $_POST['negara'];
$datang = $_POST['datang'];

$query = "INSERT INTO tamu (EMAIL, NAME_TAMU, SOCIAL, JENIS_S, NEGARA, KEDATANGAN) VALUES ('$email','$nama_tamu','$sosial','$js','$negara','$datang')";

mysqli_query($koneksi, $query);

header("location:index.php")

?>