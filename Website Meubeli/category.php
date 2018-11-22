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
    <title>Kategori</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
  <style type="text/css">
    .link-card{
      color: white;
      font-size: 20pt;
    }
    .link-card:hover{
      color: white;
      font-size: 20pt;
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
      <div class="row">
<!--     Judul-->
    <hr>
    <?php
      $cat = $_GET["cat"];
      if($cat == "chair"){
        $title = "CHAIRS";
        $search = "kursi";
      }
      else if($cat == "table"){
        $title = "TABLES";
        $search = "meja";
      }
      else if($cat == "cupboard"){
        $title = "CUPBOARDS";
        $search = "lemari";
      }
      else if($cat == "shelf"){
        $title = "SHELVES";
        $search = "rak";
      }
      else if($cat == "bed"){
        $title = "BEDS";
        $search = "kasur";
      }
      else if($cat == "set"){
        $title = "FURNITURE SETS";
        $search = "set furniture";
      }
    ?>
    <h2 class="text-center"><?php echo $title ?></h2>
    <hr>
  <div class="container">
    <div class="row text-center">
      <?php
        $query = mysqli_query($conn, "SELECT * FROM meubel WHERE kategori_meubel = '$search'");
        while($data = mysqli_fetch_array($query)){
          $queryPic = mysqli_query($conn, "SELECT * FROM gambar WHERE id_meubel = '".$data["id_meubel"]."' GROUP BY id_meubel");
      ?>
      <div class="col-md-4 pb-1 pb-md-0">
        <a class="link-card" href="Detail.php?id=<?php echo $data['id_meubel'] ?>">
      <?php while($dataPic = mysqli_fetch_array($queryPic)){ ?>
          <div class="card img-fluid" alt="Card image cap">
          <img style="width: 340px; height: 340px" src="images/<?php echo $dataPic['gambar'] ?>" alt="Card image cap" class="card-img-top rounded img-fluid">
			  
      <?php
        }
      ?>
    
		<div class="card-body">
                  <h4 style="color: rgb(41, 47, 53)" class="card-title"><?php echo $data["nama_meubel"] ?></h4>
                  <a href="Detail.php?id=<?php echo $data['id_meubel'] ?>" class="btn btn-primary">Rp. <?php echo $data["harga_meubel"] ?></a>

	</div>
  </div>
  </a>
  </div>
      <?php
        }
      ?>
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