<?php 

include 'koneksi.php';

$id = $_GET['FOTO_T'];
mysqli_query($koneksi, "DELETE FROM postingan WHERE FOTO_T='$id' ");
 
header("location:admin.php?pesan=hapus");
?>