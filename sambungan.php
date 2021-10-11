<?php
 	// session_start();
 	$host = 'localhost';
 	$user = 'root';
 	$password = '';
 	$database = 'kuizonline';

 	$sambungan = mysqli_connect ($host, $user, $password , $database); 
 	if (!$sambungan) {
 		die (" sambungan kepada pangkalan data gagal ".mysqli_connect_error());
 	}
 	else 
 		echo "";
?>