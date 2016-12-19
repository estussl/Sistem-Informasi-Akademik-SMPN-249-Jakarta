<?php 
require ("../../koneksi.php");

$nisn=$_POST['form-field-1'];
$nama=$_POST['form-field-2'];
$tmp=$_POST['form-field-3'];
$tgl=$_POST['form-field-4'];
$ayah=$_POST['form-field-5'];
$ibu=$_POST['form-field-6'];
$tlp=$_POST['form-field-7'];
$email=$_POST['form-field-8'];
$alamat=$_POST['form-field-9'];


$sql1 = mysql_query("SELECT * FROM tbl_siswa WHERE NISN='$nisn'") or die(mysql_error());

$sql = mysql_query("update tbl_siswa set 
NISN='$nisn',
nama='$nama',
tempat='$tmp',
tgl='$tgl',
nama_ayah='$ayah',
nama_ibu='$ibu',
tlpn='$tlp',
email='$email',
alamat='$alamat'
WHERE NISN='$nisn'" ) or die(mysql_error());

$sql = mysql_query("update tbl_user set 
nama_admin='$nama'
WHERE username='$nisn'" ) or die(mysql_error());


echo"<script>alert('Proses berhasil !');</script>";
echo "<script> window.location ='../profil.php'</script>";

?>