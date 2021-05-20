<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php"><img src="foto/penting/logo.png" height="50px" width="90px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="daftar-guide.php">Guide</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="us.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="daftar-agent.php">Agent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.php">Event at Lamper</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="index.php" id="navbardrop" data-toggle="dropdown">
        Destination
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="waterfall.php">Waterfall</a>
        <a class="dropdown-item" href="mountain.php">Mountain</a>
        <a class="dropdown-item" href="forest.php">Forest</a>
        <a class="dropdown-item" href="beach.php">Beach</a>
      </div>
      </li>
    </ul>
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
          Registration
        </button>

        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <center><h4 class="modal-title">Registration For Guest</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                <form method="POST" action="tambah-tamu.php" onSubmit="validasi_tamu()">
                   <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <select name="js" id="js" class="form-control">
                      <option>Social Media Genre</option>
                      <option value="Instagram" name="js">Instagram</option>
                      <option value="Facebook" name="js">Facebook</option>
                      <option value="Line" name="js">Line</option>
                      <option value="Whatsapp" name="js">Whatsapp</option>
                      <option value="Telegram" name="js">Telegram</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="sosial" name="sosial" placeholder="Social Media Account Name">
                  </div> 
                  <div class="form-group">
                    <input type="text" class="form-control" id="negara" name="negara" placeholder="Your Country">
                  </div>
                  <div class="form-group">
                    <input type="date" class="form-control" id="datang" name="datang">
                  </div>
                  <button type="submit" class="btn btn-success">Register</button>
                </form>

              </div>

            </div>
          </div>
        </div>
      <!-- Tutup Modal-->
&nbsp;&nbsp;
    <!-- Login -->

    <form method="POST" action="cek_login.php" class="form-inline">
      <table><tr></td>
      <div class="form-group">  
      <input type="text" class="form-control" id="username" name="username" placeholder="Username for Guide">          
      </div>&nbsp;
      <div class="form-group">           
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
      </div>&nbsp;           
      <button type="submit" class="btn btn-success">Login</button></p>
      </td></tr></table>
    </form>
    
    <!-- Tutup Login-->


<script type="text/javascript">
  function validasi_tamu() {
    var nama = document.getElementById("nama_tamu").value;
    var email = document.getElementById("email").value;
    var js = document.getElementById("js").value;
    var sosial = document.getElementById("sosial").value;
    var negara = document.getElementById("negara").value;
    var datang = document.getElementById("datang").value;
    if (nama_tamu != "" && email!="" && js !="" && sosial !="" && negara !="" && datang !="") {
      
      alert('Thanks for Join With Us, Wait Your Confirmation From us');
      return true;
    }else{
      alert('Please Complate Your Form!');
      return false;
    }
  }
</script>
    

  </div>  
</nav>