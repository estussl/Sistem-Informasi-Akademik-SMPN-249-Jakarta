<?php 
		if(isset($_SESSION['role']) && $_SESSION['role'] != "siswa"){
		header("location:../error.php");
		}
			
?>