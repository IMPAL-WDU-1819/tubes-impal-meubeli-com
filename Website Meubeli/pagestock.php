<?php 
	include 'koneksi.php';
	include 'proseslogin.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stock</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker3.css" rel="stylesheet">
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
            <li class="nav-item"><a class="nav-link" href="Custom.html">Custom</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Stock</a></li>
            <li class="nav-item "> <a class="nav-link" href="About.html">About Us</a></li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container" style="margin: 4%; margin-right: auto; margin-left: auto;">
      <div class="card text-center col-md-4 offset-lg-4 col-lg-4">
        <div class="card-header"> REQUEST STOCK SPAREPART MEUBEL </div>
        <div class="card-body">
          <form action="prosesstock.php" method="POST" id="stock_form">
            <div class="form-group">
              TANGGAL REQUEST
              <input class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" type="text"/>
            </div>
            <div class="form-group">
            FORM REQUEST <br />
            <textarea form="stock_form" style="width: 100%; height: 225px;" name="req"></textarea>
            </div>
            <button type="submit" name="stock" class="btn btn-primary">Submit</button>
          </form>
        </div>

        <div class="card-footer text-muted"> Copyright © Meubeli. All rights reserved. </div>
      </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script> <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
  </body>
</html>
