<?php
include("sambungan.php");

$idguru = $_POST["idguru"];
$namaguru = $_POST["namaguru"];
$password = $_POST["password"];

$sql = "insert into guru values('$idguru','$namaguru', '$password') ";
$result = mysqli_query($sambungan,$sql);
if($result == true)
	echo "<script> alert(' Berjaya tambah Rekod Guru Baharu')</script>";
else
	echo "<script> alert(' Tidak berjaya tambah Rekod Guru Baharu')</script>";
	echo "Ralat: $sql <br>".mysqli_error($sambungan);
?>