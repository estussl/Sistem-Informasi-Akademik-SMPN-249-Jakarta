<?php
require("koneksi.php");
$sql=mysql_query("select * from  tbl_user where username='$_POST[username]' and 
password='".md5($_POST['password'])."'") or die(mysql_error());
if(mysql_num_rows($sql) != 0){
$r = mysql_fetch_array($sql);

	if ($sql){
		if ($r['role']=='admin')
		header("location:admin/");
		//echo "<script> window.location ='admin/index.php'</script>";
	
		else if ($r['role']=='guru')
		header("location:guru/");
		//echo "<script> window.location ='guru/index.php'</script>";
	
		else if ($r['role']=='siswa')
		header("location:siswa/");
		//echo "<script> window.location ='siswa/index.php'</script>";
			
		$_SESSION['role'] = $r['role'];
		$_SESSION['username']=$r['username'];
		$_SESSION['login'] = true;
		
		
		}
	}
	else { 
	?>
	<script language="JavaScript">
    alert('Username atau Password yang anda masukan salah');
    document.location='index.php';
    </script>
	<?php
}

?>