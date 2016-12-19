<?php 
require ("../../koneksi.php");

//deklarasi variabel
$tglsekarang = date("Y-m-d");

$nama=$_POST['form-field-1'];
$username=$_POST['form-field-2'];
$password=$_POST['form-field-3'];
$tlpn=$_POST['form-field-4'];
$email=$_POST['form-field-5'];
$role="admin";
$pw=md5($password);

$sql1 = mysql_query("SELECT * FROM tbl_user WHERE username='$username'");
if(mysql_num_rows($sql1) == 0) {
	
	$sql = mysql_query("insert into tbl_foto (id_user) Values ('$username')");
	
	$sql = mysql_query("insert into tbl_user (nama_admin, username, password, role, join_date) 
	VALUES('$nama','$username','$pw','$role','$tglsekarang')") or die(mysql_error());
	
	$sql = mysql_query("insert into tbl_admin (id, nama, tlpn, email) 
	VALUES('$username','$nama','tlpn','$email')") or die(mysql_error());
	echo"<script>alert('Admin berhasil ditambahkan!');</script>";
	echo "<script> window.location ='../data-admin.php'</script>";
	}
	
else {
	echo "<script> window.location ='../nip-ganda.php'</script>";
}
?>