<?php 
include 'koneksi.php';
include 'head.php'; 
?> 

<body>

<?php
session_start();
$ex = $_SESSION['USERNAME'];
$data = mysqli_query($koneksi,"SELECT * FROM user WHERE USERNAME = '$ex' and LEVEL = 0");
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
                <center><h4 class="modal-title">Place Post</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
              <form method="POST" action="posting.php" enctype="multipart/form-data">
                  <b>Uploud Foto</b></br>
                  <small>Harus Posting 5 Gambar Landscape Jpg/Png</small></br>   
                  <input type="file" name="gambar"></br></br>
                  <input type="file" name="gambar2"></br></br>
                  <input type="file" name="gambar3"></br></br>
                  <input type="file" name="gambar4"></br></br>
                  <input type="file" name="gambar5"></br></br>
                   <div class="form-group">
                    <input type="text" class="form-control" id="nama_t" name="nama_t" placeholder="Place Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                  </div>
                  <div class="form-group">
                    <select name="tipe" id="tipe" class="form-control">
                      <option>Type</option>
                      <option value="Beach" name="tipe">Beach</option>
                      <option value="Waterfall" name="tipe">Waterfall</option>
                      <option value="Mountain" name="tipe">Mountain</option>
                      <option value="Forest" name="tipe">Forest</option>
                    </select>
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
      <!-- Button to Open the Modal 2-->
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal_2">Posting Event</button>

        <!-- The Modal -->
        <div class="modal" id="myModal_2">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <center><h4 class="modal-title">Event Post</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
              <form method="POST" action="posting-event.php" enctype="multipart/form-data">
                  <b>Uploud Foto</b></br>
                  <small>Harus Posting 5 Gambar Landscape Jpg/Png</small></br>   
                  <input type="file" name="gambar"></br></br>
                  <input type="file" name="gambar2"></br></br>
                  <input type="file" name="gambar3"></br></br>
                  <input type="file" name="gambar4"></br></br>
                  <input type="file" name="gambar5"></br></br>
                   <div class="form-group">
                    <input type="text" class="form-control" id="nama_e" name="nama_e" placeholder="Event Name">
                  </div>
                  <div class="form-group">
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Date">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" cols="255" placeholder="Deskripsi"></textarea>
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
      <form action="update-bio-guide.php" method="POST">
        
        <div class="row">
          <div class="col-md-6">
          <b>Full Name</b>
          <input type="text" class="form-control form-control-sm" name="nama" id="nama" placeholder="<?php echo $isi['NAME'] ?>" value="<?php echo $isi['NAME'] ?>"></br>
          <b>Nick Name</b>
          <input type="text" class="form-control form-control-sm" name="nick" id="nick" placeholder="<?php echo $isi['NICKNAME'] ?>" value="<?php echo $isi['NICKNAME'] ?>">
          <b>Address</b>
              <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $isi['ALAMAT']; ?>" placeholder="<?php echo $isi['ALAMAT']; ?>">
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
                
                <form action="update-foto-guide.php" method="POST" enctype="multipart/form-data">
                  <img src="foto/anggota/<?php echo $isi['FOTO']; ?>" height="300" widht="300">
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


        <div id="accordion">
          <div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                Tamu
              </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
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
                    
                    </thead>
                    <tbody>
                    <?php 
                      
                      $no = 1;
                      $tamu = mysqli_query($koneksi,"SELECT * FROM user NATURAL JOIN tamu WHERE   USERNAME = '$ex' AND user.NAME=tamu.NAME");
                      
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
                          <td>  
                              <?php
                                  echo $t['NAME'];
                                ?>
                          </td>
                          <td>  
                              <?php
                                  echo $t['KEDATANGAN'];
                                ?>
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

        </div> 

    </div>
  </div>
</div>


<?php include 'footer.php'; ?>