<div style="margin-left:20px"> Anda masuk sebagai  <strong>
<?php 
$sql = mysql_query("SELECT * FROM tbl_user WHERE username='$_SESSION[username]'");
$jkl = mysql_fetch_array($sql);
		if($jkl['role']=='admin'){
			echo "Administrator Sistem Informasi Akademik";
		}
		elseif($jkl['role']=='guru'){
			echo "Guru SMP Negeri 249 Jakarta";
		}
		elseif($jkl['role']=='siswa'){
			echo "Siswa SMP Negeri 249 Jakarta";
		}
					
									
?>
</strong>
</div>