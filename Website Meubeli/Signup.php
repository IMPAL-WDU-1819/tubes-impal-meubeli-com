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
    <title>Sign Up</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
    <!-- Start of Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo2-12.png" width="200" height="58" alt=""/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="index.php" >Home </a></li>
            <li class="nav-item"><a class="nav-link" href="Custom.php">Custom</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Stock</a></li>
            <li class="nav-item "> <a class="nav-link" href="About.html">About Us</a></li>
          </ul>
          <ul class="navbar-nav ">
            <?php
              if(login_check()){
                if(login_hak() == 'ADMIN'){
            ?>
            <li class="nav-item acive"><a class="nav-link" href="pageadmin.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            </li>
            <?php
                }
                else if(login_hak() == 'BASIC'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="pageuser.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
            </li>
            <?php
                }
                else if(login_hak() == 'SUPPLIER'){
            ?>
            <li class="nav-item active"><a class="nav-link" href="pageuser.php"> Selamat Datang, <?php echo $_SESSION['nama'] ?></a>
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
            <li class="nav-item active"> <a class="nav-link" href="#">Sign up</a></li>
            <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="margin: 4%; margin-right: auto; margin-left: auto;">
      <div class="card text-center col-md-4 offset-lg-4 col-lg-4">
        <div class="card-header"> Sign up</div>
        <div class="card-body">
          <form action="prosessignup.php" method="post">
            <div class="form-group">
            <input type="name" class="form-control" id="nama" name="nama" placeholder="Enter your name">
            </div>
            <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small></div>
            <div class="form-group">
            <input type="text" class="form-control" id="uname" name="uname" placeholder="Username">
            </div>
            <div class="form-group">
            <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Password">
            </div>
            <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
          </form>
        </div>

        <div class="card-footer text-muted"> Copyright © Meubeli. All rights reserved. </div>
      </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script> <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>
