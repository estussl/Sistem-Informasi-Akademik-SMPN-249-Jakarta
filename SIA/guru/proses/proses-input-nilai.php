<?php 
require ("../../koneksi.php");

$tahun=$_POST['form-field-tahun'];
$semester=$_POST['form-field-semester'];

$mapel=$_POST['form-field-mapel'];
$kelas=$_POST['form-field-00'];
$nisn=$_POST['form-field-1'];

$ulangan1=$_POST['form-field-2'];
$remed1=$_POST['form-field-3'];

$ulangan2=$_POST['form-field-4'];
$remed2=$_POST['form-field-5'];

$ulangan3=$_POST['form-field-6'];
$remed3=$_POST['form-field-7'];

$ulangan4=$_POST['form-field-8'];
$remed4=$_POST['form-field-9'];

$mid=$_POST['form-field-10'];
$uas=$_POST['form-field-11'];

if($ulangan1 >100.0|| $ulangan2 >100.0|| $ulangan3 >100.0|| $ulangan4 >100.0|| $remed1>100.0 || $remed2>100.0||$remed3>100.0||$remed4>100.0||$mid>100.0||$uas>100.0)
{
	echo"<script>alert('Nilai tidak boleh lebih dari 100 !');window.location ='../input-nilai.php';</script>";
}
else
{

if($ulangan1>$remed1){
	$nilai1=$ulangan1;
	}
	else
	$nilai1=$remed1;
	
if($ulangan2>$remed2){
	$nilai2=$ulangan2;
	}
	else
	$nilai2=$remed2;

if($ulangan3>$remed3){
	$nilai3=$ulangan3;
	}
	else
	$nilai3=$remed3;
	
if($ulangan4>$remed4){
	$nilai4=$ulangan4;
	}
	else
	$nilai4=$remed4;
	
$total=(70/100*(($nilai1+$nilai2+$nilai3+$nilai4)/4))+(20/100*$mid)+(10/100*$uas);

/*$sql1 = mysql_query("SELECT * FROM tbl_nilai WHERE id_siswa='$nisn' AND id_mapel='$mapel' AND id_tahun='$tahun' AND semester='$semester'") or die(mysql_error());
$sql = mysql_query("update tbl_nilai set 

id_siswa='$nisn',
id_mapel='$mapel',
id_tahun='$tahun',
semester='$semester',
ulangan1='$ulangan1',
ulangan2='$ulangan2',
ulangan3='$ulangan3',
ulangan4='$ulangan4',
remed1='$remed1',
remed2='$remed2',
remed3='$remed3',
remed4='$remed4',
mid='$mid',
uas='$uas',
tot_nilai='$total'

WHERE id_siswa='$nisn' AND id_mapel='$mapel' AND id_tahun='$tahun' AND semester='$semester'" ) or die(mysql_error());
*/
	
$sql = mysql_query("DELETE FROM tbl_nilai WHERE id_siswa='$nisn' AND id_mapel='$mapel' AND id_tahun='$tahun' AND semester='$semester'") or die(mysql_error());
	
$sql = mysql_query("INSERT INTO tbl_nilai
(id_siswa,id_mapel, ulangan1, ulangan2, ulangan3, ulangan4, remed1, remed2, remed3, remed4, mid, uas, tot_nilai, id_tahun, semester) VALUES
('$nisn','$mapel','$ulangan1','$ulangan2','$ulangan3','$ulangan4','$remed1','$remed2','$remed3','$remed4','$mid','$uas','$total','$tahun','$semester')") or die(mysql_error());





echo"<script>alert('Proses berhasil !');</script>";
echo "<script> window.location ='../input-nilai.php'</script>";
}
?>