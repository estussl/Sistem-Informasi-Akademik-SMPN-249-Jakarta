<?php 
require ("../../koneksi.php");

$id=$_POST['form-field-1'];
$nama=$_POST['form-field-2'];
$tlpn=$_POST['form-field-3'];
$email=$_POST['form-field-4'];


$sql1 = mysql_query("SELECT * FROM tbl_admin WHERE id='$id'") or die(mysql_error());

$sql = mysql_query("update tbl_admin set 
nama='$nama',
tlpn='$tlpn',
email='$email' WHERE id='$id'" ) or die(mysql_error());

$sql = mysql_query("update tbl_user set 
nama_admin='$nama'
WHERE username='$id'" ) or die(mysql_error());


echo"<script>alert('Proses berhasil !');</script>";
echo "<script> window.location ='../profil.php'</script>";

?>