<?php 
require ("../../koneksi.php");

//deklarasi variabel
$tglsekarang = date("Y-m-d");

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

$kelas_ajar = "";		
$i = 0;
while($i < count($_POST['form-field-10'])){
	$kelas_ajar = $kelas_ajar.$_POST['form-field-10'][$i].",";
	$i++;
}

if($kelas_ajar==NULL){
	echo "<script> history.back()</script>";
	echo"<script>alert('Kelas Harus Disisi!');</script>";
	
}
else {
$sql1 = mysql_query("SELECT * FROM tbl_user WHERE username='$nip'");


if(mysql_num_rows($sql1) == 0) {
	
	
			// Simpan ke Database
			$sql = mysql_query("insert into tbl_foto (id_user) Values ('$nip')");
			
			$sql = mysql_query("insert into tbl_guru (NIP,nama_lengkap,nrk,tempat_lahir,tgl_lahir,alamat,tlpn,id_mapel,email,kelas) 			VALUES('$nip','$nama','$nrk','$tmp','$tgl','$alamat','$tlp','$mp','$email','$kelas_ajar')") ;

$sql = mysql_query("insert into tbl_user (username, password, nama_admin, role,join_date) 
VALUES('$nip','$pw','$nama','$role','$tglsekarang')") or die(mysql_error());
	
	//Tampilkan pesan
	echo"<script>alert('Data Berhasil Disimpan!');</script>";
	echo "<script> window.location ='../data-guru.php'</script>";	
	
}
else {
	//username double
	echo "<script> window.location ='../nip-ganda.php'</script>";

}}

?>