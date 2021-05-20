<?php 
include 'koneksi.php';
include 'head.php'; 
include 'slide-hal.php';

$id = $_GET['NAME'];

$data = mysqli_query($koneksi,"SELECT * FROM user NATURAL JOIN produk WHERE USERNAME = '$id' and LEVEL = 2");
$isi = mysqli_fetch_array($data);
?> 

<body>

<?php include 'nav.php'; ?>

<div class="container" style="margin-top:30px">

  <div class="row">
    <div class="col-sm-12">
      <center><img src="foto/agent/<?php echo $isi['FOTO']; ?>" width="300" height="300" bg-color="black">
              
      <h3><?php echo $isi['NAME']; ?></h3>
      <h5><?php echo $isi['JK']; ?></h5>
      <p><?php echo $isi['NICKNAME']; ?></p>
      <a href="https://api.whatsapp.com/send?phone=62<?php echo $d['NO_TELP']; ?>">
      <b><p class="card-text"><?php echo $isi['NO_TELP']; ?></p></b>
      </a>
      <p><?php echo $isi['ALAMAT']; ?></p>
      </center>
      <p><b><?php echo $isi['NAME']; ?> Product</b></p>

      <?php 
      $halaman = 10;
      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $result = mysqli_query($koneksi,"SELECT * FROM produk WHERE USER='$id'");
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halaman);            
      $lol = mysqli_query($koneksi,"SELECT * FROM produk LIMIT $mulai, $halaman");
      $no = 1;
                          
      while($d = mysqli_fetch_array($lol)){
      ?>

    <div class="row">
    <div class="col-sm-4">

      <div class="card">
        <div class="card-body">
        <img src="foto/produk/<?php echo $d['FOTO_A']; ?>" widht="100%" height="200">
        </br></br>
        <h3><?php echo $d['NAMA_A']; ?></h3>
        <p><?php echo $d['DESKRIPSI_P']; ?></p>
        </div>
      </div>

    </div>
  </div>

      <?php } ?>

</br>

<ul class="pagination">
 <li class="page-item"><a class="page-link" href="#">Page</a></li>
 <?php for ($i=1; $i<=$pages ; $i++){ ?>
 <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
 <?php } ?>
</ul>

    </div>
  </div>


  </div>
</div>

<?php include 'footer.php'; ?>