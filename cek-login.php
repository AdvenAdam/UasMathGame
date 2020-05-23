<?php
include 'koneksi/koneksi.php';
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$sql = mysql_query("SELECT * FROM tbl_identitas where Nama='$name' and Email='$email'");
    $data = mysql_fetch_array($sql);
    $namacek = $data['Nama'];
	$emailcek = $data['Email'];
	
	
	if (strtolower($name)==strtolower($namacek) && strtolower($email)==strtolower($emailcek) ) {
		session_start();
		$_SESSION['lives']=5;
		$_SESSION['score']=0;
		$_SESSION['name']=$namacek;
		$_SESSION['email']=$emailcek;
		echo "<script>alert('Anda berhasil Log In. Sebagai : $namacek');</script>";
            echo "<meta http-equiv='refresh' content='0; url=tampilanuserlama.php'>";
		
	} else {
		session_start();
			$_SESSION['lives']=5;
			$_SESSION['score']=0;
			$_SESSION['name']=$_POST['name'];
			$_SESSION['email']=$_POST['email'];
			echo "<meta http-equiv='refresh' content='0; url=soal.php'>";
	}
	
	
}

?>