<?php
 
require ("../../koneksi.php");

$_GET['id'];
$sql=mysql_query("delete from tbl_siswa where NISN='$_GET[id]'") or die(mysql_error()) ;

$sql=mysql_query("delete from tbl_user where username='$_GET[id]'");

$sql=mysql_query("SELECT * from tbl_foto WHERE id_user='$_GET[id]' ");
while($ph=mysql_fetch_array($sql)){
	if($ph['path']!=NULL){
		$file="../../img/".$ph['path'];
		
		unlink($file);
	}
}
$sql=mysql_query("delete from tbl_foto where id_user='$_GET[id]'");

echo "<script> alert('Data dihapus'); window.location ='../data-siswa.php?id=0'</script>";
?>