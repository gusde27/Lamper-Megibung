<?php 
include 'koneksi.php';
include 'head.php'; 
?> 

<body>

<?php
session_start();
$ex = $_SESSION['USERNAME'];
$data = mysqli_query($koneksi,"SELECT * FROM user WHERE USERNAME = '$ex' and LEVEL = 2");
$isi = mysqli_fetch_array($data);

?> 

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="logout.php"><img src="foto/penting/logo.png" height="50px" width="90px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Posting</button>

        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <center><h4 class="modal-title">Post Produk</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
              <form method="POST" action="posting-produk.php" enctype="multipart/form-data">
                  <b>Uploud Foto</b></br>
                  <small>Harus Gambar Landscape Jpg/Png</small></br>   
                  <input type="file" name="gambar"></br></br>
                   <div class="form-group">
                    <input type="text" class="form-control" id="nama_a" name="nama_a" placeholder="Product Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                  </div>
                  <input type="text" name="user" value="<?php echo $isi['USERNAME']; ?>" hidden="true">
                  <button type="submit" class="btn btn-success">Post</button>
                </form>

              </div>

            </div>
          </div>
        </div>
      <!-- Tutup Modal-->
      &nbsp;
      <a href="logout.php">
        <button type="button" class="btn btn-danger btn-sm">Logout</button>
        </a>
    
  </div>  
</nav>


<div class="container" style="margin-top:25px">
  <div class="row">
    <div class="alert alert-success">
      Selamat Datang <strong><?php echo $isi['NAME']; ?> </strong>
    </div>
    <div class="col-sm-12">
       
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Biodata</h4>
      
      <!-- form biodata -->      
      <form action="update-bio-agent.php" method="POST">
        
        <div class="row">
          <div class="col-md-6">
          <b>Company Name</b>
          <input type="text" class="form-control form-control-sm" name="nama" id="nama" placeholder="<?php echo $isi['NAME'] ?>" value="<?php echo $isi['NAME'] ?>"></br>
          <b>Description</b>
          <input type="text" class="form-control form-control-sm" name="nick" id="nick" placeholder="<?php echo $isi['NICKNAME'] ?>" value="<?php echo $isi['NICKNAME'] ?>">
          <b>Address</b>
            <div class="form-group">
              <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $isi['ALAMAT']; ?>" placeholder="<?php echo $isi['ALAMAT']; ?>">
            </div>
          <b>Company Genre</b>
            <div class="form-group">
              <input type="text" class="form-control" name="jk" id="jk" value="<?php echo $isi['JK']; ?>" placeholder="<?php echo $isi['JK']; ?>">
            </div>   
          <b>Telp/WA Number</b>
          <input type="text" class="form-control form-control-sm" name="telp" id="telp" placeholder="<?php echo $isi['NO_TELP'] ?>" value="<?php echo $isi['NO_TELP'] ?>"></br>

          <button type="submit" class="btn btn-primary btn-sm">Save</button></br>
      </form>
          </div> <!-- row tutup -->

          <div class="row">
              <div class="col-md-6">
                
                <form action="update-foto-agent.php" method="POST" enctype="multipart/form-data">
                  <img src="foto/agent/<?php echo $isi['FOTO']; ?>" height="300" widht="300">
                  <b>Uploud Foto</b></br>   
                  <small>Gambar Jpg/png.</small></br>
                  <input type="file" name="gambar">
                  <button type="submit" name="upload" class="btn btn-primary btn-sm">Upload</button></br>
                </form>

              </div>
          </div> <!-- row tutup -->  
        </div><!-- tutup -->
          
    <!-- tutup biodata -->

          </div>
        </div>


    </div>
  </div>
</div>


<?php include 'footer.php'; ?>