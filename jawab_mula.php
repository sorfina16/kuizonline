<?php
	
	include('sambungan.php');
	session_start();
	$idpelajar =$_SESSION['username'];
	if(isset($_POST['idtopik'])){
		$idtopik = $_POST['idtopik'];
		$sql = "select * from kuiz join soalan on kuiz.idsoalan = soalan.idsoalan 
		where idpelajar = '".$idpelajar."' and soalan.idtopik = '".$idtopik." ' ";
		$data = mysqli_query($sambungan,$sql);

		//semak samada pelajar dha jawab belum

		if(mysqli_num_rows($data)>0)
			header("Location: jawab_ulangkaji.php? idtopik=$idtopik ");
		else
			header("Location: jawab_soalan.php? idtopik=$idtopik ");
	}
?>

<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<h3 class="panjang"> SILA PILIH TOPIK </h3>
<form class="panjang" action="jawab_mula.php" method="POST">
	<table>
		<td> Topik </td>
		<td>
			<select class="topik" name="idtopik">
				<?php
				$sql ="select * from topik ";
				$data = mysqli_query($sambungan,$sql);
				while ($topik = mysqli_fetch_array($data)){
					echo "<option value = '$topik[idtopik]'> $topik[namatopik]</option>";
				}
				?>
			</select>
		</td>
	</table>
	<button class="tambah" type="submit" > MULA </button>
</form>