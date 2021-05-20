<?php
// Load file koneksi.php
include "koneksi.php";
include "head.php";

?>

<body>
	<div class="countainer">

<?php

$user = $_POST['user'];
$deskripsi = $_POST['deskripsi'];
$nama_a = $_POST['nama_a'];

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "foto/produk/".$nama_file;

if(	$tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG

  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
	// Proses upload
 	if(	move_uploaded_file($tmp_file, $path)){ 
 	  // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :   
      // Proses simpan ke Database
    $query = "INSERT INTO produk (USER, NAMA_A, DESKRIPSI, FOTO_A) VALUES ('$user', '$nama_a', '$deskripsi', '$nama_file')";

    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan dari vael $query
         
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location:agent.php"); // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
          ?>
          <div class="alert alert-danger">
    		<strong>Danger!</strong> Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.
  			
  		<?php
        echo "<br><a href='agent.php'>Kembali Ke Form</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
    	?>
    	</div>
          <div class="alert alert-danger">
    		<strong>Danger!</strong> Maaf, Gambar gagal untuk diupload.
  			
  		<?php
      echo "<br><a href='agent.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    	?>
          </div>
          <div class="alert alert-danger">
    		<strong>Danger!</strong> Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 10MB
  			
  		<?php
    echo "<br><a href='agent.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
		?>
		</div>
          <div class="alert alert-danger">
    		<strong>Danger!</strong> Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.
  			
  		<?php
  echo "<br><a href='agent.php'>Kembali Ke Form</a>";
}

?>
			</div>
</div>

<body>
</html>