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
    <title>Custom</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
  </head>
  <body>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo2-12.png" width="200" height="58" alt=""/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item"><a class="nav-link" href="index.php">Home </a></li>
            <li class="nav-item active"><a class="nav-link" href="#">Custom <span class="sr-only">(current)</span></a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Stock</a></li>
            <li class="nav-item"> <a class="nav-link" href="About.html">About Us</a></li>
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
            <li class="nav-item active"> <a class="nav-link" href="Signup.php">Sign up</a></li>
            <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
		<div class="container" style="margin: 5%;">
			 <div class="card text-center col-lg-7 offset-md-3 col-lg-7">
      <div class="card-header bg-dark" style="color: white"> <h3> CUSTOM </h3></div>
      <div class="card-body">
        <form>
			<table>
				<tr>
					<td>Jenis Meubel</td>
					<td style="width: 30%"> : </td>
					<td>
						<select style="width: 100%">
							<option value="kursi"> Kursi</option>
							<option value="meja">Meja</option>
							<option value="almari">Almari</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Bahan</td>
					<td style="width: 30%"> : </td>
					<td>
						<select style="width: 100%">
							<option value="kayu1"> Kayu Solid</option>
							<option value="kayu2">Kayu Ramin</option>
							<option value="kayu3">Kayu Cedar</option>
							<option value="kayu4">Kayu Pinus</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Ukuran</td>
					<td style="width: 30%"> : </td>
					<td>
						<select style="width: 100%">
							<option value="dewasa"> Dewasa</option>
							<option value="anak">Kayu Anak-anak</option>
							<option value="bayi">Bayi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Warna</td>
					<td style="width: 30%"> : </td>
					<td>
						<select style="width: 100%">
							<option value="red1"> Red Mahogany</option>
							<option value="red2"> Red Oak</option>
							<option value="brown1"> Walnut Brown</option>
							<option value="brown2"> Rotan Brown</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td style="width: 30%"> : </td>
					<td>
						<select style="width: 100%">
							<option value="1"> 1 </option>
							<option value="1"> 2 </option>
							<option value="1"> 3 </option>
							<option value="1"> 4 </option>
							<option value="1"> 5 </option>
							<option value="1"> 6 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Deskripsi Tambahan</td>
					<td style="width: 30%"> : </td>
					<td><textarea></textarea></td>
				</tr>
			</table>
		</form>
</div>
      <button type="submit" class="btn btn-primary bg-dark">Add to Cart</button>
<div class="card-footer text-muted">
  Copyright © Meubeli. All rights reserved. </div>
</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.0.0.js"></script>
</body>
</html>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="file:///C|/Users/ASUS/AppData/Roaming/Adobe/Dreamweaver CC 2018/en_US/Configuration/Temp/Assets/eam7C2F.tmp/js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="file:///C|/Users/ASUS/AppData/Roaming/Adobe/Dreamweaver CC 2018/en_US/Configuration/Temp/Assets/eam7C2F.tmp/js/popper.min.js"></script>
    <script src="file:///C|/Users/ASUS/AppData/Roaming/Adobe/Dreamweaver CC 2018/en_US/Configuration/Temp/Assets/eam7C2F.tmp/js/bootstrap-4.0.0.js"></script>
  </body>
</html>
