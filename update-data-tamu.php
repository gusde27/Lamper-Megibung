<?php 

include 'koneksi.php';

$id = $_POST['DATA_TAMU'];
$nama_hendle = $_POST['nama_hendle'];
$pendapatan = $_POST['pendapatan'];
$datang = $_POST['datang'];

mysqli_query($koneksi, "UPDATE tamu SET NAME='$nama_hendle', PENDAPATAN='$pendapatan', KEDATANGAN='$datang' WHERE EMAIL='$id'");
 
header("location:admin.php?pesan=Update");
?>