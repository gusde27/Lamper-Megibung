<?php 

include 'koneksi.php';

$id = $_GET['NAME_TAMU'];
mysqli_query($koneksi, "DELETE FROM tamu WHERE NAME_TAMU='$id'");
 
header("location:admin.php?pesan=hapus");
?>