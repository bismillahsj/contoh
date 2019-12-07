<?php
session_start();
	$nim = $_POST ['Pengguna'];
	$pass = $_POST ['Password'];

	

	if( $nim == "admin" && $pass == "admin") {
		header("location:home.php");
	}

?>
