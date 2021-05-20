<?php
// Load file koneksi.php
include "koneksi.php";
include "head.php";

?>

<body>
	<div class="countainer">

<?php

$user = $_POST['user'];
$tipe = $_POST['tipe'];
$deskripsi = $_POST['deskripsi'];
$nama_t = $_POST['nama_t'];

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$nama_file2 = $_FILES['gambar2']['name'];
$ukuran_file2 = $_FILES['gambar2']['size'];
$tipe_file2 = $_FILES['gambar2']['type'];
$tmp_file2 = $_FILES['gambar2']['tmp_name'];

$nama_file3 = $_FILES['gambar3']['name'];
$ukuran_file3 = $_FILES['gambar3']['size'];
$tipe_file3 = $_FILES['gambar3']['type'];
$tmp_file3 = $_FILES['gambar3']['tmp_name'];

$nama_file4 = $_FILES['gambar4']['name'];
$ukuran_file4 = $_FILES['gambar4']['size'];
$tipe_file4 = $_FILES['gambar4']['type'];
$tmp_file4 = $_FILES['gambar4']['tmp_name'];

$nama_file5 = $_FILES['gambar5']['name'];
$ukuran_file5 = $_FILES['gambar5']['size'];
$tipe_file5 = $_FILES['gambar5']['type'];
$tmp_file5 = $_FILES['gambar5']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "foto/".$nama_file;
$path2 = "foto/".$nama_file2;
$path3 = "foto/".$nama_file3;
$path4 = "foto/".$nama_file4;
$path5 = "foto/".$nama_file5;

if(	$tipe_file == "image/jpeg" || $tipe_file == "image/png" && 
	$tipe_file2 == "image/jpeg" || $tipe_file2 == "image/png" && 
	$tipe_file3 == "image/jpeg" || $tipe_file3 == "image/png" && 
	$tipe_file4 == "image/jpeg" || $tipe_file4 == "image/png" && 
	$tipe_file5 == "image/jpeg" || $tipe_file5 == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 10000000 && 
  	 $ukuran_file2 <= 10000000 && 
  	 $ukuran_file3 <= 10000000 && 
  	 $ukuran_file4 <= 10000000 &&
  	 $ukuran_file5 <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
	// Proses upload
 	if(	move_uploaded_file($tmp_file, $path) &&
 		move_uploaded_file($tmp_file2, $path2) &&
 		move_uploaded_file($tmp_file3, $path3) &&
 		move_uploaded_file($tmp_file4, $path4) &&
 		move_uploaded_file($tmp_file5, $path5)
 		){ 
 	  // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :   
      // Proses simpan ke Database
    $query = "INSERT INTO postingan (USER, FOTO_T, FOTO_T2, FOTO_T3, FOTO_T4, FOTO_T5, TIPE, NAMA_T, DESKRIPSI) VALUES ('$user', '$nama_file', '$nama_file2', '$nama_file3', '$nama_file4', '$nama_file5', '$tipe', '$nama_t', '$deskripsi')";

    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan dari vael $query
         
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: guide.php"); // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
          ?>
          <div class="alert alert-danger">
    		<strong>Danger!</strong> Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.
  			
  		<?php
        echo "<br><a href='guide.php'>Kembali Ke Form</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
    	?>
    	</div>
          <div class="alert alert-danger">
    		<strong>Danger!</strong> Maaf, Gambar gagal untuk diupload.
  			
  		<?php
      echo "<br><a href='guide.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    	?>
          </div>
          <div class="alert alert-danger">
    		<strong>Danger!</strong> Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 10MB
  			
  		<?php
    echo "<br><a href='guide.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
		?>
		</div>
          <div class="alert alert-danger">
    		<strong>Danger!</strong> Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.
  			
  		<?php
  echo "<br><a href='guide.php'>Kembali Ke Form</a>";
}

?>
			</div>
</div>
<body>
</html>