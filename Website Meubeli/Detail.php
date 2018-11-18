<?php 
include('koneksi.php');
include('proseslogin.php');
echo login_nama();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail_Product</title>
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
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="#">Custom</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Stock</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item"> <a class="nav-link" href="Login.html">Login</a></li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container mt-3">
      <?php
        $id = $_GET['id'];
      ?>
      <div class="row">
			<div class="col-lg-6">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <?php
                $query = mysqli_query($conn, "SELECT * FROM gambar WHERE id_meubel = '$id'");
                $count = 0;
                while($data = mysqli_fetch_array($query)){
                  if($count == 0){
                    echo '<li data-target="#carouselExampleControls" data-slide-to="'.$count.'" class="active"></li>';
                  }
                  else{
                    echo '<li data-target="#carouselExampleControls" data-slide-to="'.$count.'"></li>';
                  }
                  $count++;
                }
              ?>
            </ol>
            <div class="carousel-inner">
              <?php
              $query = mysqli_query($conn, "SELECT * FROM gambar WHERE id_meubel = '$id'");
                $count = 0;
                while($data = mysqli_fetch_array($query)){
                if($count == 0){
                  echo '<div class="carousel-item active">';
                }
                else{
                  echo '<div class="carousel-item">';
                }
                echo '<img class="d-block w-99" src="images/'.$data['gambar'].'"></div>';
                $count++;
              }
              ?>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        </div>					
        <div class="col-lg-6" id="detail-desc">
        <?php
          $query = mysqli_query($conn, "SELECT * FROM meubel WHERE id_meubel = '$id'");
          while($data = mysqli_fetch_array($query)){
        ?>
				<h4><?php echo $data['nama_meubel'] ?></h4>
				<p></p>
				<p class="detail-harga"><strong>Rp. <?php echo $data['harga_meubel'] ?></strong></p>
				<p>Deskripsi :<br> 
          <?php echo $data['kategori_meubel'] ?><br>
          <?php echo $data['jenis_meubel'] ?>
				  </p>
        <?php
          }
        ?>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<form action="" method="post">
						<input type="hidden" name="addtocart" value="1" />
						<input type="hidden" name="pid" value="" />
						<input type="hidden" name="pnama" value="" />
						<input type="hidden" name="pharga" value="" />
						<div class="alert alert-success alert-dismissible" role="alert">
							Barang sudah ditambahkan ke cart!
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div><br />
						<button type="submit" class="btn btn-default" id="buy"><img src="images/FRicon.png" width:30px>Tambahkan ke keranjang</button>
					</form>
			</div>	
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