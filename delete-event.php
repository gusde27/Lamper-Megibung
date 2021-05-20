<?php 

include 'koneksi.php';

$id = $_GET['FOTO_E'];
mysqli_query($koneksi, "DELETE FROM event WHERE FOTO_E='$id' ");
 
header("location:admin.php?pesan=hapus");
?>