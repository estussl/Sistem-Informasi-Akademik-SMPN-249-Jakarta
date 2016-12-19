<?php 
require ("../../koneksi.php");


//deklarasi foto foto
$file_max_weight = 1000; //limit the maximum size of file allowed (20Mb)
$ok_ext = 'jpg';
$upload_path="../../img/";
$fileName = $_FILES['image']['name'];
$extension=end((explode(".",$fileName)));
$newfilename="img-".$_SESSION['username'].".".$extension;
	
	if($extension== $ok_ext){
		if($_FILES['image']['size'] > 1000)
		{
			//$sql = mysql_query("update tbl_foto set path='$email' WHERE id_user='$id'" ) or die(mysql_error());
			
			$sql = mysql_query("DELETE FROM tbl_foto WHERE id_user='$_SESSION[username]'") or die(mysql_error());
			$sql = mysql_query("INSERT INTO tbl_foto (id_user, path) VALUES('$_SESSION[username]','$newfilename')") or die(mysql_error());
			
						 
			// Simpan di Folder Gambar	 
			move_uploaded_file($_FILES['image']['tmp_name'], $upload_path. $newfilename);
			
			echo"<script>alert('Foto Berhasi Di Ganti');</script>";
			echo "<script> window.location ='../profil.php'</script>";
			
		}
		else
		{
			echo"<script>alert('File tidak boleh lebih dari 1MB !');history.go(-1);</script>";
		}
	
	}
	else
	{
		echo"<script>alert('File Harus Berformat JPG');history.go(-1);</script>";
	}

?>