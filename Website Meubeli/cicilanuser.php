<?php 
include('koneksi.php');
include('proseslogin.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bayar Cicilan</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo2-12.png" width="200" height="58" alt=""/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="custom.php">Custom</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Stock</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">About Us</a></li>

          </ul>
          <ul class="navbar-nav ">
            <?php
              if(login_check()){
                if(login_hak() == 'ADMIN'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="#"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            <li class="nav-item"><a class="nav-link" href="pageadmin.php">Manage User</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="managetransaksi.php">Manage Transaksi</a>
            </li>
            <?php
                }
                else if(login_hak() == 'BASIC'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="#"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="transaksiuser.php">Transaksi-ku</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="cicilanuser.php">Cicilan-ku</a>
            </li>
            <?php
                }
                else if(login_hak() == 'SUPPLIER'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="pagesupplier.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="proseslogout.php">Logout</a></li>
            <?php
                }
            ?>
            <li class="nav-item"> <a class="nav-link" href="proseslogout.php">Logout</a></li>
            <?php
              }
              else{
            ?>
            <li class="nav-item active"> <a class="nav-link" href="login.php">Login</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">atau</a></li>
            <li class="nav-item active"> <a class="nav-link" href="Signup.php">Sign up</a></li>
            <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <h2 class="text-center">CICILAN-KU</h2>
<br />
<div class="container">
  <form action="transaksi.php" method="post">
    <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">ID Transaksi</th>
        <th scope="col">Nominal Transaksi</th>
        <th scope="col">Total Terbayar</th>
        <th scope="col">Sisa Pembayaran</th>
        <th scope="col">Cicilan Ke</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      //sini belom
        $query = mysqli_query($conn, "SELECT * FROM cicilan RIGHT JOIN transaksi ON cicilan.id_transaksi = transaksi.id_transaksi RIGHT JOIN meubel ON transaksi.id_meubel = mubel.id_meubel WHERE transaksi.status = ");
      ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $data['id_transaksi']; ?></td>
          <td><?php echo $data1['harga_meubel']; ?></td>
          <td><?php echo $data2['cicilan']; ?></td>
          <td>
            <?php echo $data1['harga_meubel']-$data2['cicilan']; ?>
          </td>
          <input type="hidden" name="id_m" value="<?php echo $id_t; ?>">
          <td><input type="submit" name="del_t" onclick="return confirm('Lunasi Cicilan ini?')" class="btn btn-primary" value="Batal"></td>
        </tr>
      <?php 
        }
      }
    }
      ?>  
    </tbody>
  </table>
  </form>
</div>
	<br>
	<script>
		var slideidx = 1;
		showDivs(slideidx);

		function plusDivs(n){
			showDivs(slideidx += n);
		}

		function showDivs(n){
			var i;
			var x = document.getElementsByClassName("show");
			if (n > x.length){
				slideidx = 1;
			}
			if (n < 1){
				slideidx = x.length;
			}
			for (i = 0; i < x.length; i++){
				x[i].style.display = "none";
			}
			x[slideidx-1].style.display= "block";
		}
	</script>
        
<hr>
    <div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          <div class="row text-center">
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
                <li class="btn-link"> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address>
          <strong>MyStoreFront, Inc.</strong><br>
MEUBELI<br>
Quitman, WA, 99110-0219<br>
<abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
          <address>
          <strong>CEO</strong><br>
          <a href="mailto:#">ceo@gmail.com</a>
          </address>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © Meubeli. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>