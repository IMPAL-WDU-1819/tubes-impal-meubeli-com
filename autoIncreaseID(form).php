<!DOCTYPE html>
<html>
<head>
	<title>Coba</title>
</head>
<body>
	<form action="coba.php" method="post">
		<input type="submit" name="sub" value="Tambah">
	</form>
	<br>
	<table>
		<tr>
			<th>ID Coba</th>
		</tr>
		<?php
			$conn = mysqli_connect("localhost", "root", "", "crypt") or die("No connection");
			$query = mysqli_query($conn, "SELECT * FROM coba");
			if(mysqli_num_rows($query) > 0){
				while($data = mysqli_fetch_array($query)){
		?>
		<tr>
			<td>
				<?php
						echo $data["id_coba"];
				?>
			</td>
		</tr>
		<?php
				}
			}
			else{
		?>
		<tr>
			<td>
				<?php echo "Empty" ?>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>