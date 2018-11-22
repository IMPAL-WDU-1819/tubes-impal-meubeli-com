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
    <title>Bayar</title>
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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="custom.php">Custom</a></li>
            <?php
            if(login_hak() == 'ADMIN'){
            ?>
              <li class="nav-item"> <a class="nav-link" href="pagestock.php">Stock</a></li>
            <?php } ?>
            <li class="nav-item"> <a class="nav-link" href="About.php">About Us</a></li>
          </ul>
          <ul class="navbar-nav ">
            <?php
              if(login_check()){
                if(login_hak() == 'ADMIN'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="pageuser.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            <li class="nav-item"><a class="nav-link" href="pageadmin.php">Manage User</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="managetransaksi.php">Manage Transaksi</a>
            </li>
            <?php
                }
                else if(login_hak() == 'BASIC'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="pageuser.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="transaksiuser.php">Transaksi-ku</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="cicilanuser.php">Cicilan-ku</a>
            </li>
            <?php
                }
                else if(login_hak() == 'SUPPLIER'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="pageuser.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="pagesupplier.php">Stock Request</a></li>
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
    <div class="container mt-3">
    <?php
      if(login_check()){
    ?>
      <div class="row">
			 <div class="col-lg-4">
       </div>
       <div class="col-lg-8">
        <?php
          if(isset($_POST['pc'])){
            $j_m = $_POST['j_m'];
            $bhn = $_POST['bhn'];
            $ukr = $_POST['ukr'];
            $clr = $_POST['clr'];
            $dt = $_POST['dt'];
          }
          if($j_m == 120000){
            $cm = 'Kursi Custom';
          }
          else if($j_m == 150000){
            $cm = 'Meja Custom';
          }
          else if($j_m == 450000) {
            $cm = 'Almari Custom';
          }
          else if($j_m == 400000){
            $cm = 'Kasur Custom';
          }
          else if ($j_m == 1000000) {
            $cm = 'Set Furnitur Custom';
          }
          else if($j_m == 100000){
            $cm = 'Rak Custom';
          }
          if($bhn == 0){
            $bmc = 'Kayu Solid';
          }
          else if($bhn == 13000){
            $bmc = 'Kayu Ramin';
          }
          else if($bhn == 15000){
            $bmc = 'Kayu Cedar';
          }
          else if($bhn == 10000){
            $bmc = 'Kayu Pinus';
          }
          if($ukr == 0){
            $umc = 'Ukuran Bayi';
          }
          else if($ukr == 10000){
            $umc = 'Ukuran Anak-anak';
          }
          else if($ukr == 20000){
            $umc = 'Ukuran Dewasa';
          }
          if($clr == 55000){
            $wmc = 'Red Mahogany';
          }
          else if($clr == 50000){
            $wmc = 'Red Oak';
          }
          else if($clr == 45000){
            $wmc = 'Walnut Brown';
          }
          else if($clr == 40000){
            $wmc = 'Rotan Brown';
          }
        ?>
          <form action="transaksi.php" method="post">
            <div style="font-size: 20pt">
              <?php echo $cm; ?>
            </div>
            <div style="font-size: 18pt; color: rgb(0, 160, 255)">
              Rp. <?php echo $j_m + $bhn + $ukr + $clr; ?>
            </div>
            <div style="font-size: 14pt">
              Deskripsi:<br>
              <?php 
                echo $bmc.', '.$umc.', '.$wmc.'<br>'.$dt;
              ?>
              <input type="hidden" name="id_mc" value="<?php echo 'c'; ?>">
              <input type="hidden" name="id_uc" value="<?php echo $_SESSION['username']; ?>">
              <input type="hidden" name="h_mc" value="<?php echo $j_m + $bhn + $ukr + $clr; ?>">
            </div>
            <br>
            <table>
              <tr>
                <td colspan="3">
                  <p>
                    Silahkan pilih metode pembayaran Anda:
                  </p>
                </td>
              </tr>
              <tr>
                <th style="padding: 5px; text-align: center; border-right: 2px solid gray; border-bottom: 2px solid gray">
                  Batal
                </th>
                <th colspan="2" style="padding: 5px; text-align: center;border-bottom: 2px solid gray">
                  Bayar Pesanan Custom
                </th>
              </tr>
              <tr>
                <td style="padding: 5px; border-right: 2px solid gray">
                  <button class="btn btn-danger" type="button" onclick="location.href='http://localhost/tubes-impal-meubeli-com/Website%20Meubeli/custom.php'">Batalkan Transaksi</button>
                </td>
                <td style="padding: 5px">
                  <input class="btn btn-success" name="cc0" type="submit" value="Bayar Meubel Custom">
                </td>
              </tr>
            </table>   
              </div>
              </div>
            </form>
       </div>
       <?php
        }
        else{
          echo '<script type="text/javascript">
                alert("Anda harus login sebelum bisa membeli meubel custom");
                window.location.href="index.php";
            </script>';
        }
       ?>
		</div>
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
                <li>
                  <h5>Categories</h5>
                </li>
                <li class="btn-link"> <a href="category.php?cat=chair" style="color: dimgrey">Chair</a></li>
                <li class="btn-link"> <a href="category.php?cat=table" style="color: dimgrey">Table</a></li>
                <li class="btn-link"> <a href="category.php?cat=cupboard" style="color: dimgrey">Cupboard</a></li>
                <li class="btn-link"> <a href="category.php?cat=shelf" style="color: dimgrey">Shelf</a></li>
                <li class="btn-link"> <a href="category.php?cat=bed" style="color: dimgrey">Bed</a></li>
                <li class="btn-link"> <a href="category.php?cat=set" style="color: dimgrey">Furniture</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li>
                  <h5>Payment</h5>
                </li>
                <li class="btn-link"> <a style="color: grey">Cash</a></li>
                <li class="btn-link"> <a style="color: grey">Installments</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12"><img src="images/PCI.png" style="width: 160px">
              <ul class="list-unstyled">
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6"><img src="images/logo2-12.png" style="width: 260px">
          <address>
            <strong><a href="index.php">www.Meubeli.com</a></strong><br>
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