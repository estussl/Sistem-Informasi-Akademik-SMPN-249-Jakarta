<?php 
require ("../../koneksi.php");


//deklarasi variabel
$tglsekarang = date("Y-m-d");

$nis=$_POST['form-field-1'];
$nama=$_POST['form-field-2'];
$tmp=$_POST['form-field-3'];
$tgl=$_POST['form-field-4'];
$alamat=$_POST['form-field-5'];
$ayah=$_POST['form-field-6'];
$ibu=$_POST['form-field-7'];
$tlp=$_POST['form-field-8'];
$email=$_POST['form-field-9'];
$kelas=$_POST['form-field-10'];

$role="siswa";
$pw=md5($nis);

$sql = mysql_query("insert into tbl_foto (id_user) Values ('$nis')");

$sql1 = mysql_query("SELECT * FROM tbl_user WHERE username='$nis'");
if(mysql_num_rows($sql1) == 0) {

$sql = mysql_query("insert into tbl_siswa (NISN,nama,tempat,tgl,alamat,nama_ayah,nama_ibu,tlpn,email,kelas) VALUES('$nis','$nama','$tmp','$tgl','$alamat','$ayah','$ibu','$tlp','$email','$kelas')") ;

$sql = mysql_query("insert into tbl_user (username, password, nama_admin, role, join_date) 
VALUES('$nis','$pw','$nama','$role','$tglsekarang')") or die(mysql_error());

//Tampilkan pesan
echo"<script>alert('Data Berhasil Disimpan!');</script>";
echo "<script> window.location ='../data-siswa.php'</script>";
}
else {
	echo "<script> window.location ='../nip-ganda.php'</script>";
}
?>