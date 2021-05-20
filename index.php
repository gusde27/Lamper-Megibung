<?php 
include 'koneksi.php';
include 'head.php'; 
include 'slide.php';
?> 

<body>

<?php include 'nav.php'; ?>

<div class="container" style="margin-top:50px">
  <div class="row" align="center">

    <div class="col-sm-3">
       <a href="waterfall.php">
       <img src="foto/penting/waterfall.jpg" class="rounded-circle" height="200" width="200"> 
       </a>      
      <h3>Waterfall</h3>

    </div>
    <div class="col-sm-3">
      <a href="beach.php">
      <img src="foto/penting/pantai.jpg" class="rounded-circle" height="200" width="200">
      </a>
      <h3>Beach</h3>

    </div>
    <div class="col-sm-3">
      <a href="mountain.php">
      <img src="foto/penting/gunung.jpg" class="rounded-circle" height="200" width="200">
      </a>
      <h3>Mountain</h3>
    
    </div>
    <div class="col-sm-3">
      <a href="forest.php">
      <img src="foto/penting/hutan.jpg" class="rounded-circle" height="200" width="200">
      </a>
      <h3>Forest</h3>
    
    </div>
  </div>
</div>

<div class="container" style="margin-top:100px">
  <div class="row">
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
    <div class="col-sm-8">
      <h2>Wonderfull Lombok</h2>
      <h5>A little snippet about Wonderfull of Lombok</h5>
      <video width="100%" height="420" controls="controls">
        <source src="video/Video.mp4" type="video/mp4">
      </video>
      <p>Lombok Island</p>
      <p>Lombok is an island in West Nusa Tenggara province, Indonesia. It forms part of the chain of the Lesser Sunda Islands, with the Lombok Strait separating it from Bali to the west and the Alas Strait between it and Sumbawa to the east. It is roughly circular, with a "tail" (Sekotong Peninsula) to the southwest, about 70 kilometres (43 miles) across and a total area of about 4,514 square kilometres (1,743 square miles). The provincial capital and largest city on the island is Mataram.
      </br></br>
      Lombok is somewhat similar in size and density, and shares some cultural heritage with the neighboring island of Bali to the west. However, it is administratively part of West Nusa Tenggara, along with the larger and more sparsely populated island of Sumbawa to the east. Lombok is surrounded by a number of smaller islands locally called Gili.

      The island is home to some 3.35 million Indonesians as recorded in the decennial 2014 census.</p>
      </br>
      <img src="foto/penting/giliair.jpg" width="100%" height="400">
      </br></br>
      <h5>Geography</h5>
      <p>The island is to the immediate east of the Lombok Strait which marks the biogeographical division between the fauna of the Indomalayan ecozone and the distinctly different fauna of Australasia; this distinction, known as the "Wallace Line" (or "Wallace's Line") takes its name from Alfred Russel Wallace (1823–1913). Wallace was the first person to comment on the division between the two regions, as well as on the abrupt boundary between the two biomes.</p>
      <p>
      To the east of Lombok lies the Alas Strait, a narrow body of water separating the island of Lombok from the nearby island of Sumbawa.</p>
      <p>
      The highlands of Lombok are forest-clad and mostly undeveloped. The lowlands are highly cultivated. Rice, soybeans, coffee, tobacco, cotton, cinnamon, cacao, cloves, cassava, corn, coconuts, copra, bananas and vanilla are the major crops grown in the fertile soils of the island. The southern part of the island is fertile but drier, especially toward the southern coastline. </p>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>