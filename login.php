
<?php
include'sambungan.php';

session_start();

if(isset($_POST['userid'])){
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	$sql = "select * from pelajar ;";
	$result = mysqli_query($sambungan,$sql);
	$jumpa= FALSE;
	
	while($pelajar = mysqli_fetch_array($result)){
		if ($pelajar['idpelajar'] ==$userid && $pelajar["password"]== $password){
			$jumpa = TRUE;
			$_SESSION['username']=$pelajar['idpelajar'];
			$_SESSION['nama']=$pelajar['namapelajar'];
			$_SESSION['status'] = 'pelajar';
			break;
			}

		}


if ($jumpa == FALSE){
	$sql = "select * from guru;";
	$result = mysqli_query($sambungan,$sql);

	while($guru = mysqli_fetch_array($result)){
		if ($guru['idguru'] ==$userid && $guru["password"]== $password){
			$jumpa = TRUE;
			$_SESSION['username']=$guru['idguru'];
			$_SESSION['nama']=$guru['namaguru'];
			$_SESSION['status'] = 'guru';
			break;
			}

		}
}

if ($jumpa == TRUE){
	header("Location:utama.html");
}
else{
	echo "<script>alert('kesalahan pada username atau password'); 
	window.location='login.php';</script>" ;}

	}
?>

<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<body background = 'wood.jpg'>

	<center>
		<img src="tajuk1.png"><br><img src="tajuk2.png">
	</center>
	<h3 class='pendek'> SIGN IN </h3>
	<form class = "pendek" action="login.php" method="post" class="login">
		<table>
			<tr>
				<td> <img src="user.png"></td>
				<td><input type="text" name="userid" placeholder=" Masukkan idpengguna " ></td>
			</tr>
			<tr>
				<td><img src="lock.png"> </td>
				<td><input type="password" name="password" placeholder=" Masukkan password "></td>
			</tr>
		</table>
		<button class = "login" type="submit" > Login </button>
		<button class="signup" type="button" onclick="window.location='pelajar_insert.html' "> Sign Up </button>
</form>
</body>