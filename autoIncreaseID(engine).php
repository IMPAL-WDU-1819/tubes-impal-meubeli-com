<?php
	$conn = mysqli_connect("localhost", "root", "", "crypt") or die("No connection");

	if(isset($_POST["sub"])){
		$query = mysqli_query($conn, "SELECT MAX(id_coba) AS last FROM coba WHERE id_coba LIKE 'ic%'");	
		$data = mysqli_fetch_array($query);
		$last = $data["last"];
		$inr = (int)substr($last, 2);
		if($inr < 999){
			$inr++;
			$id = "ic".sprintf("%03s", $inr);
			$insert = mysqli_query($conn, "INSERT INTO coba(id_coba) VALUES ('$id')");
			header("location:coba_form.php");
		}
		else{
			header("location:coba_form.php");
			echo "<script>alert('Max ID possible')</script>";
		}
	}
	//line 5 : query id_coba terakhir (terbesar)
	//line 8 : convert sisa substring setelah substring ke-2 ke integer, terus simpen integer hasil convertnya ke inr
	//line 11 : setelah inr ditambah di line sebelumnya (max 999), id nyimpen string "ic"+inr (contoh : ic009), kalo inr-nya kurang dari 3 digit, otomatis didepannya ditambahin 0 pake syntax sprintf()
?>