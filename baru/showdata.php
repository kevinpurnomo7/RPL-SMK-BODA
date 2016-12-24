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
<div class="container">
  <div class="col-md-12" >
    <h2><strong>Data Siswa</strong></h2> <br>
    <a href="addsiswa.php" class="btn btn-primary">Tambah Siswa</a>
    <a href="tambahnilai.php" class="btn btn-primary">tambah nilai</a>
    <!--cara hapus yang bener??-->
    <!--???-->
    <!--???-->
    <a href="index.php?page=hapus" class="btn btn-danger">Hapus Semua Data Siswa</a>
    <a href="hapusnilai.php" class="btn btn-warning"> hapus nilai </a> &nbsp
    <div>
      <br>
    </div>
    <div class="well">
      <fieldset>
        <center>
          <table class="table table-striped table-hover">
            <thead>
              <th>No</th>
              <th>No Induk</th>
              <th>Nama</th>
              <th>kelas</th>
              <th>Jurusan</th>  
              <tr>
          </thead>
            <?php
            include('config.php');
            $q = mysql_query("select * from siswa inner join jurusan using (id_jurusan)");    
            $n = 1;
            while($r = mysql_fetch_array($q))
            {
              echo '<tbody><tr class="info"><td>'.$n.'</td><td>'.$r["no_induk"].'</td><td>'.$r["nm_siswa"].'</td><td>'.$r["kelas_diterima"].'</td><td>'.$r["nm_jurusan"].'</td>
                <td><a href="lihatnilai.php?no_induk='.$r{'no_induk'}.'" class="btn btn-success">lihat nilai</a> &nbsp <a href="print_pdf.php?no_induk='.$r{'no_induk'}.'" class="btn btn-warning">PRINT</a></td>
                </tbody>';
              $n++;
            }
            ?>
        </table>
      </center>
    </div>
  </fieldset>
</div>
</body>	