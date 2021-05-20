<?php 
include 'koneksi.php';
include 'head.php'; 
include 'slide-hal.php';
?> 

<body>

<?php include 'nav.php'; ?>

<div class="container" style="margin-top:30px">

  <div class="alert alert-success text-center">
  <strong>WELCOME TO EVENTS PAGE!</strong> You can see our Ceremony and Culture in Lamper Village and Daily Life.
  </div>

  <div class="row">
    <div class="col-sm-8">
      <h3>Events</h3>
      
          <table class="table table-bordered">
            
            <?php 

  $halaman = 5;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM event");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $event = mysqli_query($koneksi,"SELECT * FROM event LIMIT $mulai, $halaman");
                      
  while($e = mysqli_fetch_array($event)){
            ?>
            <tbody>
            <tr>
              <td>
                <h2 class="card-title"><?php echo $e['NAMA_E']; ?></h2>
                <h5 class="card-text">Date : <?php echo $e['TANGGAL_E']; ?></h5>
                <p class="card-text"><?php echo $e['DESKRIPSI']; ?></p>
              </td>
              <td>
                <img src="foto/anggota/<?php echo $e['FOTO_E']; ?>" widht="300" height="250">
              </td>
            </tr>
            </tbody>
          
          <?php } ?>
          </table>

<ul class="pagination">
 <li class="page-item"><a class="page-link" href="#">Page</a></li>
 <?php for ($i=1; $i<=$pages ; $i++){ ?>
 <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
 <?php } ?>
</ul>
      

    </div>
    <div class="col-sm-4">
      <div id="bg-samping">
      <h5>Location</h5>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d986.0954533763548!2d116.16522288678588!3d-8.655188896672321!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfcddc2c8349f172d!2sLamper+Megibung!5e0!3m2!1sid!2sid!4v1564994830004!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
      </br></br>
      <p>Social Share</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://lampermegibung.com">Email</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.facebook.com/sharer.php?u=https://lampermegibung.com">Facebook</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://plus.google.com/share?url=https://dumetschool.com">Google+</a>
        </li>
      </ul>
      <hr class="d-sm-none">


      </div>
    </div>
      
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>