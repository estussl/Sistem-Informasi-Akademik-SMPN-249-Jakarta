<?php 
require ("../../koneksi.php");


$id = $_POST['id'];
$nis=$_POST['form-field-1'];
$nama=$_POST['form-field-2'];
$tmp=$_POST['form-field-3'];
$tgl=$_POST['form-field-4'];
$alamat=$_POST['form-field-5'];
$ayah=$_POST['form-field-6'];
$ibu=$_POST['form-field-7'];
$tlpn=$_POST['form-field-8'];
$email=$_POST['form-field-9'];	
$kelas=$_POST['form-field-10'];

	

$role="siswa";
$pw=md5($nis);

echo $id;
$sql1 = mysql_query("SELECT * FROM tbl_siswa WHERE NISN='$id'") or die(mysql_error());

$sql = mysql_query("update tbl_siswa set 

nama='$nama',
tempat='$tmp',
tgl='$tgl',
alamat='$alamat',
nama_ayah='$ayah',
nama_ibu='$ibu',
tlpn='$tlpn',
email='$email',
kelas='$kelas'
WHERE NISN='$id'" ) or die(mysql_error());

$sql = mysql_query("update tbl_user set 
nama_admin='$nama'
WHERE username='$id'" ) or die(mysql_error());

echo "<script> window.location ='../data-siswa.php'</script>";
?>
