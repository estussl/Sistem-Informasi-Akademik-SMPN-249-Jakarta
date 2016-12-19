<?php
 
require ("../koneksi.php");

$_GET['id'];
$sql=mysql_query("delete from tbl_guru where NIP='$_GET[id]'") or die(mysql_error()) ;

$sql=mysql_query("delete from tbl_user where NIP='$_GET[id]'");
?>