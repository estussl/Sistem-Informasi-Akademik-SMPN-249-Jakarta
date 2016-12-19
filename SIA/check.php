<?php
	require("koneksi.php");
	if(isset($_SESSION['login']) && $_SESSION['login'] == true){
	
	}
	else {
		echo "<script>window.location='../index.php';</script>";
		header("location:../error.php");
	}
?>