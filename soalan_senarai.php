<?php
include('sambungan.php');
?>
<link rel = "stylesheet" href = "senarai.css">
<table>
	<caption> SENARAI NAMA PELAJAR </caption>
	<tr>
		<th> ID Soalan</th>
		<th> Nama Soalan </th>
		<th> Pilihan A</th>
		<th> Pilihan B</th>
		<th> Pilihan C</th>
		<th> Jawapan </th>
		<th> ID Guru</th>
		<th> ID Topik</th>
	</tr>

<?php
	 
	$sql = 'select * from soalan';
	$result = mysqli_query($sambungan,$sql);

	while($soalan = mysqli_fetch_array($result)){
		echo '<tr> 
		<td>'.$soalan["idsoalan"].'</td>
		<td>'.$soalan["namasoalan"].'</td>
		<td>'.$soalan["pilihana"].'</td>
		<td>'.$soalan["pilihanb"].'</td>
		<td>'.$soalan["pilihanc"].'</td>
		<td>'.$soalan["jawapan"].'</td>
		<td>'.$soalan["idguru"].'</td>
		<td>'.$soalan["idtopik"].'</td>
		</tr>';
	}
?>
</table>