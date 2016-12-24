<?php
include('config.php');
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_wali'];
// Ambil nama user berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql = mysql_query("select nip from user where nip='$user_check'");
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['nip'];
if(!isset($login_session))
{
    mysql_close();
	header('Location: index.php'); // Mengarahkan ke Home Page
}
?>