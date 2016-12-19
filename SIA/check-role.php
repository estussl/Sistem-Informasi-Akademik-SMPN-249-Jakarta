<?php
	require("koneksi.php");
	
	if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
		header("location:admin/");
		}
	else if(isset($_SESSION['role']) && $_SESSION['role'] == 'guru'){
		header("location:guru/");
		}
	else if(isset($_SESSION['role']) && $_SESSION['role'] == 'siswa'){
		header("location:siswa/");
		}
	else
		header("location:index.php");
	
?>