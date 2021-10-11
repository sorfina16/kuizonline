<html>
<body>
<?php
	include('sambungan.php');

	if(isset($_POST['idpelajar'])){

		$idpelajar = $_POST["idpelajar"];
		$namapelajar = $_POST["namapelajar"];
		$idkelas = $_POST["idkelas"];
		$password = $_POST["password"];

		$sql = "insert into pelajar values('$idpelajar','$namapelajar','$idkelas','$password');";
		$result = mysqli_query($sambungan,$sql);
		if ($result)
			echo "<script> alert('Berjaya Signup')</script>";
		else
			echo "<script> alert('Tidak Berjaya Signup')</script>";

		echo "<script> window.location='login.php'</script> ";
	}
?>

<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<body background="">
	<center>
		<img src="tajuk1.png">
		<img src="tajuk2.png">
	</center>

	<h3 class = "panjang"> SIGN UP </h3>
	<form action= "signup.php" class="panjang" method="post">
		<table>
			<tr>
				<td> ID Pelajar </td>
				<td><input type="text" name="idpelajar" placeholder="P001 max 4 char "></td>
			</tr>
			<tr>
				<td> Nama </td>
				<td><input type="text" name="namapelajar" placeholder = "Sila masukkan nama sebenar "></td>
			</tr>
			<tr>
				<td> Password </td>
				<td><input type="text" name="password" placeholder="max: 8 char"></td>
			</tr>
			<tr>
				<td> Kelas </td>
				<td>
					<select name="idkelas">
						<?php 
						$sql="select * from kelas ;";
						$data = mysqli_query($sambungan,$sql);
						while ($kelas = mysqli_fetch_array($data)){
							echo"<option value = '$kelas[idkelas]'>$kelas[namakelas]</option>";
						}
						?>
					</select>
				</td>
			</tr>
		</table>
		<button class="tambah" type="submit"> Daftar </button>
		<button class="padam" type="button" onclick="window.location='login.php"> Batal </button>
	</form>
	</body>
	</html>