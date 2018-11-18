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
          <div class="card img-fluid">
          <img style="width: 349px; height: 349px" src="images/<?php echo $dataPic['gambar'] ?>" alt="Card image cap" class="card-img-top rounded img-fluid">
      <?php
        }
      ?>
    <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
      <p style="opacity: 0.8; color: rgb(41, 47, 53); background-color: rgb(248, 249, 250)" class="card-text"><?php echo $data["nama_meubel"] ?><br>Rp. <?php echo $data["harga_meubel"] ?></p>
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