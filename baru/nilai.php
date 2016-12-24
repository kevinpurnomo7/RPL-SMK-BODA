<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Raport SMK BOPKRI 2</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/bootswatch.min.css">
    <script type="text/javascript" async="" src="js/ga.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
</head>

<body>

<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
          <a href="showdata.php" class="navbar-brand">SMK Bopkri 2 Yogyakarta</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><b><i>Keluar</i></b></a></li>
            </ul>
        </div>
  </div>
  </div>
  <br>
<center>
<a href="showdata.php"><img src="picture/Kop_SMK.png" widht="150px" height="150px" alt="Logo SMK"></a>
<div class = "col-md-12">
<h2 align="left"><b>Data Nilai</b></h2>

<div class="well">

<fieldset>
<table class="table table-striped table-hover">
<thead>
<th>No</th>
<th>Mata Pelajaran</th>
<th>Angka</th>
<th>Huruf</th>
<th>Predikat</th>
<th>Deskripsi</th>
</tr>
</thead>
<?php include('session.php');
?>
<?php
include('config.php');
$q = mysql_query("SELECT siswa.nm_siswa,mata_pelajaran.nm_mapel,nilai.angka,nilai.huruf,nilai.predikat,nilai.deskripsi FROM `nilai` inner JOIN siswa on nilai.no_induk = siswa.no_induk INNER JOIN mata_pelajaran on mata_pelajaran.id_mapel = nilai.id_mapel ");
$n = 1;

while($r = mysql_fetch_array($q))
{
	echo '<tbody><tr class="info"><td>'.$n.'</td><td>'.$r["nm_siswa"].'</td><td>'.$r["nm_mapel"].'</td><td>'.$r["angka"].'</td><td>'.$r["huruf"].'</td><td>'.$r["predikat"].'</td><td>'.$r["deskripsi"].'</td>
    </tbody>';
	$n++;
}
?>
</table>
</div>

<right>

<a href="showdata.php" class="btn btn-primary">kembali daftar siswa</a>
</right>
</fieldset>
</div>
</body>	