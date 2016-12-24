<!--<link href="coba.css" rel="stylesheet" type="text/css">-->
<?php
    include('config.php');
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
	if (empty($_POST['nip']) || empty($_POST['password'])) {
			$error = "nip or password is invalid";
	}
	else
	{
		// Variabel username dan password
		$nip=$_POST['nip'];
		$password=$_POST['password'];
		// Mencegah MySQL injection 
		$nip = stripslashes($nip);
		$password = stripslashes($password);
		$nip = mysql_real_escape_string($nip);
		$password = mysql_real_escape_string($password);
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = mysql_query("select * from user where password='$password' AND nip='$nip'");
		//$query_role_admin = mysqli_query($koneksi,"select * from user where password='$password' AND email='$email' AND role='1'");
		$rows = mysql_num_rows($query);
		//$rows_role_admin = mysqli_num_rows($query_role_admin);
			if ($rows == 1) {
				$_SESSION['login_wali']=$nip; // Membuat Sesi/session
				header("Location: showdata.php"); // Mengarahkan ke halaman profil
				//echo "<h1>Login Berhasil !</h1>";
				}
				else 
				{
				//echo "Login gagal!";
				echo "<font color='#FF0000'>Username atau Password belum terdaftar</font>";
				}
				mysql_close(); // Menutup koneksi
	}
}
?>