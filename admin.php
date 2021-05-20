<?php 
include 'koneksi.php';
include 'head.php'; 

session_start();
$ex = $_SESSION['USERNAME'];
?> 

<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="logout.php"><img src="foto/penting/logo.png" height="50px" width="90px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Tambah Guide</button>
        &nbsp;
        <a href="logout.php">
        <button type="button" class="btn btn-danger btn-sm">Logout</button>
        </a>

        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <center><h4 class="modal-title">Tambah Guide</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                <form method="POST" action="tambah-guide.php">
                   <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                  </div>   
                  <button type="submit" class="btn btn-success">Tambah</button>
                </form>

              </div>

            </div>
          </div>
        </div>
      <!-- Tutup Modal-->
      &nbsp;
      

  </div>  
</nav>

<?php

$data = mysqli_query($koneksi,"SELECT * FROM user WHERE USERNAME = '$ex' and LEVEL = 1");
$isi = mysqli_fetch_array($data);

?>

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
      <form action="update-bio.php" method="POST">
        
        <div class="row">
          <div class="col-md-6">
          <b>Full Name</b>
          <input type="text" class="form-control form-control-sm" name="nama" id="nama" placeholder="<?php echo $isi['NAME'] ?>" value="<?php echo $isi['NAME'] ?>"></br>
          <b>Nick Name</b>
          <input type="text" class="form-control form-control-sm" name="nick" id="nick" placeholder="<?php echo $isi['NICKNAME'] ?>" value="<?php echo $isi['NICKNAME'] ?>">
          <b>Address</b>
            <div class="form-group">
              <textarea class="form-control" name="alamat" id="alamat" rows="3" cols="100" value="<?php echo $isi['ALAMAT']; ?>" placeholder="<?php echo $isi['ALAMAT']; ?>"></textarea>
            </div>
          <b>Genre</b>
            <div class="form-group">
              <select name="jk" id="jk" class="form-control">
                <option value="<?php echo $isi['JK'] ?>"><?php echo $isi['JK'] ?></option>
                <option value="Male" name="jk">Male</option>
                <option value="Female" name="jk">Female</option>
              </select>
            </div>   
          <b>Telp/WA Number</b>
          <input type="text" class="form-control form-control-sm" name="telp" id="telp" placeholder="<?php echo $isi['NO_TELP'] ?>" value="<?php echo $isi['NO_TELP'] ?>"></br>
          
          <button type="submit" class="btn btn-primary btn-sm">Save</button></br>
      </form>
          </div> <!-- row tutup -->

          <div class="row">
              <div class="col-md-6">
                  <img src="foto/anggota/<?php echo $isi['FOTO'] ?>" height="300px" widht="300px">
                <form method="POST" action="update-foto.php" enctype="multipart/form-data">
                  <b>Uploud Foto</b></br>
                  <small>Gambar Jpg/png.</small></br>   
                  <input type="file" name="gambar"></br>
                  <button type="submit" name="upload" class="btn btn-primary btn-sm">Upload</button></br>
                </form>
              </div>
          </div> <!-- row tutup -->  
        </div><!-- tutup -->
          
    <!-- tutup biodata -->

          </div>
        </div>

        <!-- awal -->
        <div id="accordion">
          <!-- awal -->
          <div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                Daftar Guide
              </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="card-body">
<!-- awal -->
<table class="table table-bordered">
                    
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telp/WA</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Hapus</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                    <?php 
                      
                      $no = 1;
                      $data = mysqli_query($koneksi,"SELECT * FROM user WHERE LEVEL = 0 ");
                      
                      while($d = mysqli_fetch_array($data)){
                    ?>

                      <tr>
                        <th scope="row"> <?php echo $no++; ?> </th>
                            <td>
                                <?php
                                  echo $d['USERNAME'];
                                ?>
                            </td>
                            <td>
                                <?php
                                  echo $d['PASSWORD'];
                                ?>
                            </td>
                          <td>  
                              <?php
                                  echo $d['NAME'];
                                ?>
                          </td>
                          <td>  
                              <?php
                                  echo $d['ALAMAT'];
                                ?>
                          </td>
                          <td>  
                              <?php
                                  echo $d['NO_TELP'];
                                ?>
                          </td>
                          <td>  
                              <?php
                                  echo $d['JK'];
                                ?>
                          </td>

                          <td>
              <a href="delete-akun.php?NAME=<?php echo $d['NAME']; ?>"><button class="btn btn-danger">Hapus</button></a>
                          </td>
                      </tr>
                    
                    <?php
                    }
                    ?>

                    </tbody>
                  </table>
<!-- akhir -->
              </div>
            </div>
          </div>
<!-- akhir -->

          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                Daftar Tamu
              </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body">
<!-- awal -->
<table class="table table-bordered">
                    
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama Tamu</th>
                        <th scope="col">Nama Sosmed</th>
                        <th scope="col">Jenis Sosmed</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Pendapatan</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                    <?php 
                      
                      $no = 1;
                      $tamu = mysqli_query($koneksi,"SELECT * FROM tamu");
                      
                      while($t = mysqli_fetch_array($tamu)){
                    ?>

                      <tr>
                        <th scope="row"> <?php echo $no++; ?> </th>
                            <td>
                                <?php
                                  echo $t['EMAIL'];
                                ?>
                            </td>
                            <td>
                                <?php
                                  echo $t['NAME_TAMU'];
                                ?>
                            </td>
                          <td>  
                              <?php
                                  echo $t['SOCIAL'];
                                ?>
                          </td>
                          <td>  
                              <?php
                                  echo $t['JENIS_S'];
                                ?>
                          </td>
                          <td>  
                              <?php
                                  echo $t['NEGARA'];
                                ?>
                          </td>
                          <form action="update-data-tamu.php" method="POST">
                          <td>  
                            <input type="text" class="form-control form-control-sm" name="nama_hendle" id="nama_hendle" placeholder="<?php echo $t['NAME']; ?>" value="<?php echo $t['NAME']; ?>">
                          </td>
                          <td>  
                            <input type="text" class="form-control form-control-sm" name="datang" id="datang" placeholder="<?php echo $t['KEDATANGAN']; ?>" value="<?php echo $t['KEDATANGAN']; ?>">
                          </td>
                          <td>  
                            <input type="text" class="form-control form-control-sm" name="pendapatan" id="pendapatan" placeholder="<?php echo $t['PENDAPATAN']; ?>" value="<?php echo $t['PENDAPATAN']; ?>">
                          </td>
                          <td>  
                            <input type="text" name="DATA_TAMU" id="DATA_TAMU" value="<?php echo $t['EMAIL']; ?>" hidden="true" >
                            <button class="btn btn-success" type="submit">Save</button>
                          </td>
                          </form>
                          <td>
                            <a href="delete-tamu.php?NAME_TAMU=<?php echo $t['NAME_TAMU']; ?>"><button class="btn btn-danger">Hapus</button></a>
                          </td>
                      </tr>
                    
                    <?php
                    }
                    ?>

                    </tbody>
                  </table>
<!-- akhir -->
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                Daftar Postingan
              </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
<!-- awal -->
  <table class="table table-bordered">
    
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">User</th>
                        <th scope="col">Foto 1</th>
                        <th scope="col">Foto 2</th>
                        <th scope="col">Foto 3</th>
                        <th scope="col">Foto 4</th>
                        <th scope="col">Foto 5</th>
                        <th scope="col">Nama Tempat</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                    <?php 
                      
                      $no = 1;
                      $post = mysqli_query($koneksi,"SELECT * FROM postingan");
                      
                      while($p = mysqli_fetch_array($post)){
                    ?>

                      <tr>
                        <th scope="row"> <?php echo $no++; ?> </th>
                            <td>
                                <?php
                                  echo $p['USER'];
                                ?>
                            </td>
                            <!--awal-->
                            <form action="update-post.php" method="POST">
                            <td>
                                <img src="foto/<?php echo $p['FOTO_T']; ?>" width="50" height="50">
                            </td>
                            <td>
                                <img src="foto/<?php echo $p['FOTO_T2']; ?>" width="50" height="50">
                            </td>
                            <td>
                                <img src="foto/<?php echo $p['FOTO_T3']; ?>" width="50" height="50">
                            </td>
                            <td>
                                <img src="foto/<?php echo $p['FOTO_T4']; ?>" width="50" height="50">
                            </td>
                            <td>
                                <img src="foto/<?php echo $p['FOTO_T5']; ?>" width="50" height="50">
                            </td>
                            <td>  
                            <input type="text" class="form-control form-control-sm" name="nama_t" id="nama_t" placeholder="<?php echo $p['NAMA_T']; ?>" value="<?php echo $p['NAMA_T']; ?>">
                            </td>
                          <td>  
                            <input type="text" class="form-control form-control-sm" name="tipe" id="tipe" placeholder="<?php echo $p['TIPE']; ?>" value="<?php echo $p['TIPE']; ?>">
                          </td>
                          <td>  
                            <input type="text" class="form-control form-control-sm" name="deskripsi" id="deskripsi" placeholder="<?php echo $p['DESKRIPSI']; ?>" value="<?php echo $p['DESKRIPSI']; ?>">
                          </td>
                          <td>  
                            <input type="text" name="DATA_T" id="DATA_T" value="<?php echo $p['FOTO_T']; ?>" hidden="true" >
                            <button class="btn btn-success" type="submit">Save</button>
                          </td>
                          </form>
                          <!--tutup-->
                          <td>
                            <a href="delete-post.php?FOTO_T=<?php echo $p['FOTO_T']; ?>"><button class="btn btn-danger">Hapus</button></a>
                          </td>
                      </tr>
                    
                    <?php
                    }
                    ?>

                    </tbody>
                  </table>
<!-- akhir -->
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                Daftar Event
              </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
              <div class="card-body">
<!-- awal -->
  <table class="table table-bordered">
    
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">User</th>
                        <th scope="col">Foto 1</th>
                        <th scope="col">Foto 2</th>
                        <th scope="col">Foto 3</th>
                        <th scope="col">Foto 4</th>
                        <th scope="col">Foto 5</th>
                        <th scope="col">Nama Event</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                    <?php 
                      
                      $no = 1;
                      $event = mysqli_query($koneksi,"SELECT * FROM event");
                      
                      while($e = mysqli_fetch_array($event)){
                    ?>

                      <tr>
                        <th scope="row"> <?php echo $no++; ?> </th>
                            <td>
                                <?php
                                  echo $e['USER'];
                                ?>
                            </td>
                            <!--awal-->
                            <form action="update-event.php" method="POST">
                            <td>
                                <img src="foto/<?php echo $e['FOTO_E']; ?>" width="50" height="50">
                            </td>
                            <td>
                                <img src="foto/<?php echo $e['FOTO_E2']; ?>" width="50" height="50">
                            </td>
                            <td>
                                <img src="foto/<?php echo $e['FOTO_E3']; ?>" width="50" height="50">
                            </td>
                            <td>
                                <img src="foto/<?php echo $e['FOTO_E4']; ?>" width="50" height="50">
                            </td>
                            <td>
                                <img src="foto/<?php echo $e['FOTO_E5']; ?>" width="50" height="50">
                            </td>
                            <td>  
                            <input type="text" class="form-control form-control-sm" name="nama_e" id="nama_e" placeholder="<?php echo $e['NAMA_E']; ?>" value="<?php echo $e['NAMA_E']; ?>">
                            </td>
                          <td>  
                            <input type="text" class="form-control form-control-sm" name="tanggal" id="tanggal" placeholder="<?php echo $e['TANGGAL_E']; ?>" value="<?php echo $e['TANGGAL_E']; ?>">
                          </td>
                          <td>  
                            <input type="text" class="form-control form-control-sm" name="deskripsi" id="deskripsi" placeholder="<?php echo $e['DESKRIPSI']; ?>" value="<?php echo $e['DESKRIPSI']; ?>">
                          </td>
                          <td>  
                            <input type="text" name="DATA_E" id="DATA_E" value="<?php echo $e['FOTO_E']; ?>" hidden="true" >
                            <button class="btn btn-success" type="submit">Save</button>
                          </td>
                          </form>
                          <!--tutup-->
                          <td>
                            <a href="delete-event.php?FOTO_E=<?php echo $e['FOTO_E']; ?>"><button class="btn btn-danger">Hapus</button></a>
                          </td>
                      </tr>
                    
                    <?php
                    }
                    ?>

                    </tbody>
                  </table>
<!-- akhir -->
              </div>
            </div>
          </div>
          <!-- akhir -->


          <!-- awal -->
          <div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseFive">
                Daftar Agent
              </a>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordion">
              <div class="card-body">
<!-- awal -->
<table class="table table-bordered">
                    
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Deskripsi Perusahaan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telp/WA</th>
                        <th scope="col">Jenis Perusahaan</th>
                        <th scope="col">Hapus</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                    <?php 
                      
                      $no = 1;
                      $agent = mysqli_query($koneksi,"SELECT * FROM user WHERE LEVEL = 2 ");
                      
                      while($a = mysqli_fetch_array($agent)){
                    ?>

                      <tr>
                        <th scope="row"> <?php echo $no++; ?> </th>
                            <td>
                                <?php
                                  echo $a['USERNAME'];
                                ?>
                            </td>
                            <td>
                                <?php
                                  echo $a['PASSWORD'];
                                ?>
                            </td>
                          <td>  
                              <?php
                                  echo $a['NAME'];
                                ?>
                          </td>
                          <td>  
                              <?php
                                  echo $a['NICKNAME'];
                                ?>
                          </td>
                          <td>  
                              <?php
                                  echo $a['ALAMAT'];
                                ?>
                          </td>
                          <td>  
                              <?php
                                  echo $a['NO_TELP'];
                                ?>
                          </td>
                          <td>  
                              <?php
                                  echo $a['JK'];
                                ?>
                          </td>

                          <td>
              <a href="delete-agent.php?NAME=<?php echo $a['NAME']; ?>"><button class="btn btn-danger">Hapus</button></a>
                          </td>
                      </tr>
                    
                    <?php
                    }
                    ?>

                    </tbody>
                  </table>
<!-- akhir -->
              </div>
            </div>
          </div>
<!-- akhir -->

          <!-- awal -->
          <div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseSix">
                Daftar Produk
              </a>
            </div>
            <div id="collapseSix" class="collapse" data-parent="#accordion">
              <div class="card-body">
<!-- awal -->
<table class="table table-bordered">
                    
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi Produk</th>
                        <th scope="col">Hapus</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                    <?php 
                      
                      $no = 1;
                      $produk = mysqli_query($koneksi,"SELECT * FROM produk");
                      
                      while($pro = mysqli_fetch_array($produk)){
                    ?>

                      <tr>
                        <th scope="row"> <?php echo $no++; ?> </th>
                            <td>
                                <?php
                                  echo $pro['FOTO_A'];
                                ?>
                            </td>
                            <td>
                                <?php
                                  echo $pro['NAMA_A'];
                                ?>
                            </td>
                          <td>  
                              <?php
                                  echo $pro['DESKRIPSI_P'];
                                ?>
                          </td>

                          <td>
              <a href="delete-produk.php?NAME=<?php echo $pro['NAMA_A']; ?>"><button class="btn btn-danger">Hapus</button></a>
                          </td>
                      </tr>
                    
                    <?php
                    }
                    ?>

                    </tbody>
                  </table>
<!-- akhir -->
              </div>
            </div>
          </div>
<!-- akhir -->


        </div> 

    </div>
  </div>
</div>

<?php include 'footer.php'; ?>


