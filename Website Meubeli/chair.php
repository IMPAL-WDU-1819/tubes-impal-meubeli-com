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
    <title>Chair</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
  <style type="text/css">
    .img-card {
      width: 300px;
      height: 299px;
      position: relative;
      text-align: center;
      color: white;
    }
    .name-card {
      font-size: 19pt;
      font-weight: bold;
      position: absolute;
      top: 80%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .price-card {
      font-size: 17pt;
      color: rgb(230, 230, 230);
      position: absolute;
      top: 90%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
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
      <div class="row">
<!--     Judul-->
    <hr>
    <h2 class="text-center">CHAIRS</h2>
    <hr>
  <div class="container">
    <div class="row text-center">
      <?php
        $chair = mysqli_query($conn, "SELECT * FROM meubel WHERE kategori_meubel = 'kursi'");
        while($data = mysqli_fetch_array($chair)){

      ?>
      <a href="Detail.php?id=<?php echo $data['id_meubel'] ?>">
        <div class="col-md-4">
          <div class="img-card">
            <img src="images/thumb_chair.jpg" alt="Card image cap" class="img-fluid">
            <div class="name-card">
              <?php echo $data["nama_meubel"] ?>
            </div>
            <div class="price-card">
              Rp. <?php echo $data["harga_meubel"] ?>
            </div>
          </div>
          </div>
      </a>
      <?php
        }
      ?>
      <!--<div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <div class="gallery">
            <div class="gallery-image"> <img src="images/thum_table.jpg" alt="Card image cap" width="200" height="200" class="card-img-top rounded img-fluid">
              <div class="gallery-text col-lg-12"> <a href="index.html">Table</a> </div>
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <div class="gallery">
              <div class="gallery-image"> <img src="images/thumb_cupboard.jpg" alt="Card image cap" width="400" height="200" class="card-img-top rounded img-fluid">
                <div class="gallery-text col-lg-12"> <a href="index.html">Cupboard</a> </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <section>&nbsp;</section>
    <div class="row text-center">
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <div class="gallery">
            <div class="gallery-image"> <img src="images/thumb_shelf.jpg" alt="Card image cap" width="200" height="200" class="card-img-top rounded img-fluid">
              <div class="gallery-text col-lg-12"> <a href="index.html">Shelf</a></div>
            </div>
          </div>
        </div>
      </div>
<div class="col-md-4 pb-1 pb-md-0">
      <div class="card">
          <div class="gallery">
            <div class="gallery-image"> <img class="card-img-top rounded img-fluid" src="images/thumb_bed.jpg" alt="Card image cap">
              <div class="gallery-text col-lg-12"> <a href="index.html">Bed</a></div>
            </div>
          </div>
      </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <div class="gallery">
            <div class="gallery-image"> <img class="card-img-top rounded img-fluid" src="images/thumb_set.jpg" alt="Card image cap">
              <div class="gallery-text col-lg-12"> <a href="index.html">Furniture Set</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
  </div>
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