<?php 
require ("../../koneksi.php");

//$id=$_SESSION['id'];
//$pwbaru=$_POST['form-field-1'];
//$pw=md5($pwbaru);


if (isset($_POST['Ganti'])) {
    $id       			= $_SESSION['username'];
    $password_lama    	= $_POST['form-field-1'];
    $password_baru    	= $_POST['form-field-2'];
    $konf_password    	= $_POST['form-field-3'];
	$password_lama_md5  = md5($password_lama);
	$pw=md5($konf_password);
   
    //cek old password
    $query = "SELECT * FROM tbl_user WHERE username='$id' AND password='$password_lama_md5'";
    $sql = mysql_query ($query);
    $hasil = mysql_num_rows ($sql);
    if (! $hasil >= 1) {
        ?>
            <script language="JavaScript">
            alert('Password lama tidak sesuai!, silahkan ulang kembali!');
            document.location='../../index.php';
            </script>
        <?php
            unset($_SESSION['id']);
            unset($_SESSION['role']);
            session_destroy();
    }
    //validasi data data kosong
    else if (empty($_POST['form-field-2']) || empty($_POST['form-field-3'])) {
            ?>
			<script language="JavaScript">
            alert('Ganti Password Gagal! Data Tidak Boleh Kosong.');
            document.location='../ganti-pw.php';
            </script>
			<?php     
    }
        //validasi input konfirm password
    else if (($_POST['form-field-2']) != ($_POST['form-field-3'])) {
            ?> 
			<script language="JavaScript">
            alert('Ganti Password Gagal! Password dan Konfirm Password Harus Sama');
            document.location='../ganti-pw.php';
            </script>
			<?php //echo "<h3><font color=red><center>Ganti Password Gagal! Password dan Konfirm Password Harus Sama.</center></font></h3>";    
    }
    else {
    //update data
    $sql = mysql_query("update tbl_user set password='$pw' WHERE username='$id'" ) or die(mysql_error());
	
	
    //setelah berhasil update
    if ($sql) {
        ?> 
		<script language="JavaScript">
        alert('Ganti Password Berhasil!');
        document.location='../index.php';
        </script>
		<?php //echo "<h3><font color=#8BB2D9><center><blink>Ganti Password Berhasil!</blink></center></font></h3>";    
    } else {
        ?> 
		<script language="JavaScript">
        alert('Ganti Password Gagal');
        document.location='../ganti-pw.php';
        </script>
		<?php //echo "<h3><font color=red><center>Ganti Password Gagal!</center></font></h3>";    
    }
    }
    }



//$sql = mysql_query("update tbl_user set 
//password='$pw' WHERE id='$id'" ) or die(mysql_error());


//echo "<script> window.location ='../ganti-pw.php'</script>";

?>