<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Raport SMK BOPKRI 2</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/bootswatch.min.css">
    <script type="text/javascript" async="" src="js/ga.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>

<?php
include('config.php');
?>
</head>
<body style = 'margin : 20px; font : 16px arial;'>
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
             <a> <?php echo $_SESSION['login_wali']; ?></a>
              </li>
            <li><a href="logout.php"><b><i>Keluar</i></b></a></li>
            </ul>
        </div>
  </div>
  </div>
  <br>
<div class="container">
    <div class="row">
<div class="col-md-12">
 <center>
     
 <form method = 'POST' action = 'aksi_tambah.php'>
 <table class="table table-striped table-hover">
 <strong>
 <tr>
  <td>No Induk :</td>
  <td width = '5' align = 'center'> : </td>
  <td> <input class="form-control" type = 'text' name = 'no_induk' placeholder='masukan nomor induk' ></textarea>
  <p>list datasiswa <a href="showdata.php"> lihat </a></p> 
  </td>
  
  </tr>
  <tr>
  <td>id mata pelajaran</td>
  <td width = '5' align = 'center'> : </td>
  <td> <input class="form-control" type ='text' name = 'id_mapel' placeholder='masukan id mapel' ></input>
  <p>list mata pelajaran <a href="lihatmapel.txt"> lihat </a></p>
   </td>
  
  </tr>

 <tr>
  <td>Angka</td>
  <td width = '5' align = 'center'> : </td>
  <td> <input class="form-control" type = 'text' placeholder='masukan nila' name = 'angka' /> </td>
  </tr>
 <tr>
  <td>Huruf</td>
  <td align = 'center'> : </td>
  <td> <input class="form-control" type = 'text' placeholder='masukan huruf' name = 'huruf' /> </td>
  </tr>
 <tr>
  <td>Predikat</td>
  <td align = 'center'> : </td>
  <td> <input class="form-control" type = 'text' placeholder='masukan predikat' name = 'predikat' /> </td>
  </tr>
 <tr>
  <td>Deskripsi</td>
  <td width = '5' align = 'center'> : </td>
  <td> <input class="form-control" type='text' name ='deskripsi' 'alamat' placeholder='masukan deskripsi' >  </input> </td>
  </tr>  
 
  
 <tr>
 <td colspan = '3' align = 'center'>
 <input class="btn btn-success" type = 'submit' name = 'submit' value = 'Submit'/>
 <input class="btn btn-danger" type = 'reset' name = 'Reset' value = 'Reset' /> </td>
 </tr>
</table>
<a href = 'showdata.php'> Kembali </a>
</div>
</div>
</div>
</form>
</body>
</html>  