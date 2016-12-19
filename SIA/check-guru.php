<?php 
		if(isset($_SESSION['role']) && $_SESSION['role'] != "guru"){
		header("location:../error.php");
		}
			
?>