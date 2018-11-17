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
    <title>Home</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
  </head>
  <body>
    <?php 
        if ('<?php echo($loginStatus) ?>' == 'GAGAL') alert('Username atau password anda salah!');
    ?>
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
            <li class="nav-item"> <a class="nav-link" href="#">Custom</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Stock</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">About Us</a></li>
          </ul>
          <ul class="navbar-nav" style="padding-right: 10px; ">
            <?php if (login_hak() == 'ADMIN' ) { ?>
            <li class="nav-item" > <a class="nav-link" href="pageadmin.php">Page Admin</a></li>
            <?php
             } else if (login_hak() == 'REGULAR') { 
            ?>
            <li class="nav-item" > <a class="nav-link" href="profile.php">Profile</a></li>
            <?php } ?>
            <?php if (login_check() == 0) {?>
            <li class="nav-item" > <a class="nav-link" href="Login.php">Login</a></li>
            <?php } ?>
            <?php if (login_check() == 1) {?>
            <li class="nav-item" > <a class="nav-link" href="proseslogout.php">Logout</a></li>
            <?php } ?>
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
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/living-heading-1920x500.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Make the living room more comfortable</h5>
                  <p>By buying our furniture</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/gite-entree-1920x500.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>A good house has high quality furniture</h5>
                  <p>&nbsp;</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/Sadova-Gdansk009.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Make a comfortable place to gather</h5>
                  <p>By buying our furniture&nbsp;</p>
                </div>
              </div>
            </div>
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
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/freeshippingicn.png"></div>
            <div class="col-10 ml-1 col-lg-7">
              <h4>Free Shipping</h4>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/FRicon.png"></div>
            <div class="col-10 ml-1 col-lg-7">
              <h4>Free Returns</h4>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/Lpicon.jpg"></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4>Low Prices</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <h2 class="text-center">CATEGORIES</h2>
    <hr>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
			<div class="gallery">
				<div class="gallery-image">  
           			 <img src="images/thumb_chair.jpg" alt="Card image cap" width="200" height="199" class="card-img-top rounded img-fluid">
					<div class="gallery-text col-lg-12">
						<a href="index.html">Chair<a>
					</div>  
				</div>
			</div>
          
          </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <div class="gallery">
            <div class="gallery-image"> <img src="images/thum_table.jpg" alt="Card image cap" width="200" height="200" class="card-img-top rounded img-fluid">
              <div class="gallery-text col-lg-12"> <a href="index.html">Table<a> </div>
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <div class="gallery">
              <div class="gallery-image"> <img src="images/thumb_cupboard.jpg" alt="Card image cap" width="400" height="200" class="card-img-top rounded img-fluid">
                <div class="gallery-text col-lg-12"> <a href="index.html">Cupboard<a> </div>
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
              <div class="gallery-text col-lg-12"> <a href="index.html">Shelf<a></div>
            </div>
          </div>
        </div>
      </div>
<div class="col-md-4 pb-1 pb-md-0">
      <div class="card">
          <div class="gallery">
            <div class="gallery-image"> <img class="card-img-top rounded img-fluid" src="images/thumb_bed.jpg" alt="Card image cap">
              <div class="gallery-text col-lg-12"> <a href="index.html">Bed<a></div>
            </div>
          </div>
      </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <div class="gallery">
            <div class="gallery-image"> <img class="card-img-top rounded img-fluid" src="images/thumb_set.jpg" alt="Card image cap">
              <div class="gallery-text col-lg-12"> <a href="index.html">Furniture Set<a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
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