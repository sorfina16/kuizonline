<?php
	include('sambungan.php');
?>

<link rel = "stylesheet" href="senarai.css">
<table>
	<caption> SENARAI GURU </caption>
	<tr> 
		<th> ID </th>
		<th> NAMA </th>
		<th> PASSWORD </th>
	</tr>
	<?php
		$sql = ' select * from guru';
		$result = mysqli_query($sambungan,$sql);
		while($guru=mysqli_fetch_array($result)){
			echo '<tr><td>'.$guru["idguru"].'</td>
					  <td>'.$guru["namaguru"].'</td>
					  <td>'.$guru["password"].'</td
				  </tr>';
		}
	?>
</table>