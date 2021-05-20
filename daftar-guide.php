<?php 
include 'koneksi.php';
include 'head.php'; 
include 'slide-hal.php';
?> 

<body>

<?php include 'nav.php'; ?>

<div class="container" style="margin-top:30px">

  <div class="alert alert-success text-center">
  <strong>WELCOME TO GUIDES PAGE!</strong> You can see our guides profile
  </div>

  <div class="row">
    <div class="col-sm-8">
      <h3>Our Guide</h3>
      
          <table class="table table-bordered">
            
            <?php
            $data = mysqli_query($koneksi,"SELECT * FROM user WHERE LEVEL = 0 ");
                      
            while($d = mysqli_fetch_array($data)){
            ?>
            <tbody>
            <tr>
              <td>
                <img src="foto/anggota/<?php echo $d['FOTO']; ?>" widht="200" height="200">
              </td>
              <td>
                <h3 class="card-title"><?php echo $d['NAME']; ?></h3>
                <h5 class="card-text"><?php echo $d['NICKNAME']; ?></h5>
                <p class="card-text"><?php echo $d['JK']; ?></p>
                <a href="https://api.whatsapp.com/send?phone=62<?php echo $d['NO_TELP']; ?>">
                <b><p class="card-text"><?php echo $d['NO_TELP']; ?></p></b>
                </a>
                <p class="card-text"><?php echo $d['ALAMAT']; ?></p>
              </td>
            </tr>
            </tbody>
          
          <?php } ?>
          </table>
      

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
        <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/share?url=https://dumetschool.com&text=Simple%20Share%20Buttons&hashtags=simplesharebuttons">Twitter</a>
        </li>
      </ul>
      <hr class="d-sm-none">
      </div>
    </div>
      
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>