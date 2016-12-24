  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Sistem Informasi Kelulusan</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/bootswatch.min.css">
    <script type="text/javascript" async="" src="./js/ga.js"></script>
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootswatch.js"></script>
    <div class="container">
    <title>Data nilai</title>
</head>
<body>
<?php include('session.php');
?>
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
           <a href="showdata.php" class="navbar-brand">Halaman awal</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">          
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a><?php echo $_SESSION['login_wali']; ?></a>
              </li>
            <li><a href="logout.php"><b><i>Keluar</i></b></a></li>
            </ul>
        </div>
  </div>
  </div>
  <br>
<center>
<a href="#"><img src="picture/Kop_SMK.png" widht="150px" height="150px" alt="Logo SMK"></a>
</center>

<h3>Data Nilai Siswa</h3>
<?php
include('config.php');
$noinduk = $_GET['no_induk'];
$q = mysql_query("SELECT * FROM Siswa where no_induk = '$noinduk'");
while($r = mysql_fetch_array($q))
{
  echo 'Nama : '.$r['nm_siswa'].' <br>';
  echo 'No : '.$r['no_induk'].' <br>';
  echo 'Jurusan : '.$r['id_jurusan'].' <br>';  
}
?>
<br>
<table class="table table-striped table-hover" border="1" cellpadding="5" cellspacing="0">
<tr class="info"><td>No.<td>id mapel</td><td>Angka</td><td>huruf</td><td>predikat</td><td>deskripsi</td></tr>    
<?php
include('config.php');
$no_induk = $_GET['no_induk'];
$q = mysql_query("SELECT * FROM siswa INNER JOIN nilai ON siswa.no_induk=nilai.no_induk where nilai.no_induk = '$no_induk'");
$n = 1;
while($r = mysql_fetch_array($q))
{
	echo '<tr><td>'.$n.'</td><td>'.$r["id_mapel"].'</td><td>'.$r["angka"].'</td><td>'.$r["huruf"].'</td><td>'.$r["predikat"].'</td><td>'.$r["deskripsi"].'</td>
  </tr>';
	$n++;
 
}

?>


  </tr>
</table>

<a href="showdata.php" class="btn btn-primary"><< Kembali ke Daftar Nama</a>
</div>
</body>
</html>