<?php 
require ("../../koneksi.php");

$id = $_POST['id'];
$nip=$_POST['form-field-1'];
$nama=$_POST['form-field-2'];
$kelas_ajar = "";


$i = 0;
while($i < count($_POST['form-field-10'])){
	$kelas_ajar = $kelas_ajar.$_POST['form-field-10'][$i].",";
	$i++;
}

$role="guru";
$pw=md5($nip);

$slq2=mysql_query("DELETE kelas FROM tbl_guru WHERE NIP='$id'"); 

$sql1 = mysql_query("SELECT * FROM tbl_guru WHERE NIP='$id'") or die(mysql_error());

$sql = mysql_query("update tbl_guru set 
kelas='$kelas_ajar'
WHERE NIP='$id'" ) or die(mysql_error());


echo "<script> window.location ='../detil-data-guru.php?id=$nip'</script>";

?>