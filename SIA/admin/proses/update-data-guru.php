<?php 
require ("../../koneksi.php");

$id = $_POST['id'];
$nip=$_POST['form-field-1'];
$nama=$_POST['form-field-2'];
$nrk=$_POST['form-field-3'];
$tmp=$_POST['form-field-4'];
$tgl=$_POST['form-field-5'];
$alamat=$_POST['form-field-6'];
$tlp=$_POST['form-field-7'];
$email=$_POST['form-field-8'];
$mp=$_POST['form-field-9'];



$role="guru";
$pw=md5($nip);

echo $id;
$sql1 = mysql_query("SELECT * FROM tbl_guru WHERE NIP='$id'") or die(mysql_error());

$sql = mysql_query("update tbl_guru set 
NIP='$nip',
nama_lengkap='$nama',
nrk='$nrk',
tempat_lahir='$tmp',
tgl_lahir='$tgl',
alamat='$alamat',
tlpn='$tlp',
id_mapel='$mp',
email='$email' WHERE NIP='$id'" ) or die(mysql_error());

$sql = mysql_query("update tbl_user set 
nama_admin='$nama'
WHERE username='$id'" ) or die(mysql_error());


/*echo "<script> window.location ='../data-guru.php'</script>";*/

echo "<script> window.location ='../edit-data-guru.php?id=$nip'</script>";

?>