<?php
	require("koneksi.php");
	$_SESSION['login'] = false;
	$_SESSION['id'] = null;
	session_destroy();
	
	echo "<script>window.location='../';</script>"
?>