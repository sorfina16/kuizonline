<?php
	include("sambungan.php");

	$idsoalan= $_POST["idsoalan"];
	$namasoalan =$_POST["namasoalan"];
	$pilihana =$_POST["pilihana"];
	$pilihanb = $_POST["pilihanb"];
	$pilihanc =$_POST["pilihanc"];
	$jawapan=$_POST["jawapan"];
	$idguru=$_POST["idguru"];
	$idtopik=$_POST["idtopik"];


	$sql = "insert into soalan values('$idsoalan','$namasoalan','$pilihana','$pilihanb','$pilihanc',
	'$jawapan','$idguru','$idtopik');";

	$result= mysqli_query($sambungan,$sql);
	if ($result == true)
		echo "<script> alert(' Berjaya tambah')</script>";
	else
		echo "<script> alert(' Tidak berjaya tambah')</script>";
		echo "Ralat: $sql <br>".mysqli_error($sambungan);
?>