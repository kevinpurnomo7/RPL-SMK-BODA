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
<?php 
session_start(); 
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
            <li><a href="logout.php"><b><i>Keluar</i></b></a></li>
            </ul>
        </div>
  </div>
  </div>
  <br>
<center>
<a href="/baru/showdata.php"><img src="picture/Kop_SMK.png" widht="150px" height="150px" alt="Logo SMK"></a>
</center>
<div class="container">
        <div id="page-wrapper">
          <div class="row">
                <div class="col-md-12">
                    <h3 class="page-header"><strong>Data Diri Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Memasukkan Data Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" action="aksi_siswa.php" method="post">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No Induk</label>
                                            <input name="no_induk" class="form-control" placeholder="NIS">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nm_siswa" class="form-control" placeholder="Nama">
                                        </div>
                                        <fieldset>
                                        <div class="form-group">                             
                                        <label>Jenis Kelamin</label><br>
                                        <input type="radio" name="gender"
                                            <?php if (isset($gender) && $gender=="L") echo "checked";?>
                                            value="male">Laki-laki
                                        <input type="radio" name="gender"
                                            <?php if (isset($gender) && $gender=="P") echo "checked";?>
                                            value="female">Perempuan
                                        <!--<div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <textarea name="alamat" class="form-control" placeholder="Alamat" rows="3"></textarea>
                                        </div>-->
                                        </fieldset>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input name="tmpt_lahir" class="form-control" placeholder="Tempat Lahir">
                                        </div>
                                        <fieldset>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label><br>
                                                     <input type="date" name ="tgl_lahir">
                                        </div>
                                        <fieldset>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <dfn>
                                            <select style="
                                                    width: 100%;
                                                    padding: 10px 20px;                                                    
                                                    display: inline-block;
                                                    border: 1px solid #ccc;
                                                    border-radius: 4px;
                                                    box-sizing: border-box;">
                                                <option value="kristen" name="Kristen">Kristen</option>
                                                <option value="katolik"name="Katolik">Katolik</option>
                                                <option value="islam"name="Islam">Islam</option>
                                                <option value="budha"name="Budha">Budha</option>
                                                <option value="hindu"name="Hindu">Hindu</option>
                                            </select>
                                            </dfn>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input name="alamat" class="form-control" placeholder="Alamat">
                                        </div>
                                        <div class="form-group">
                                            <label>Sekolah Asal</label>
                                            <input name="sekolah asal" class="form-control" placeholder="Sekolah Asal">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Sekolah Asal</label>
                                            <input name="almnt_sklh_asl" class="form-control" placeholder="Alamat Sekolah Asal">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Ijazah</label>
                                            <input name="thn_ijazah" class="form-control" placeholder="Tahun Ijazah">
                                        </div>
                                        <div class="form-group">
                                            <label>No Ijazah</label>
                                            <input name="no_ijazah" class="form-control" placeholder="No Ijazah">
                                        </div>
                                        <div class="form-group">
                                            <label>Diterima di Kelas</label>
                                            <input name="kelas_diterima" class="form-control" placeholder="Diterima di Kelas">
                                        </div>
                                        <div class="form-group">
                                            <label>Diterima pada Tanggal</label>
                                            <input name="tgl_diterima" class="form-control" placeholder="Diterima pada Tanggal">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input name="nm_ayah" class="form-control" placeholder="Nama Ayah">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input name="nm_ibu" class="form-control" placeholder="Nama Ibu">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Orang Tua</label>
                                            <input name="almt_ortu" class="form-control" placeholder="Alamat Orang Tua">
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Orang Tua</label>
                                            <input name="kerja_ortu" class="form-control" placeholder="Pekerja Orang Tua">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Wali</label>
                                            <input name="nm_wali" class="form-control" placeholder="Nama Wali">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Wali</label>
                                            <input name="almt_wali" class="form-control" placeholder="Alamat Wali">
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Wali</label>
                                            <input name="kerja_wali" class="form-control" placeholder="pekerjaan Wali">
                                        </div>
                                        <div class="form-group">
                                            <label>id jurusan</label>
                                            <input name="id_jurusan" class="form-control" placeholder="masukan id jurusan">
                                            <p>list jurusan <a href="listjurusan.txt"> lihat </a></p>
                                        </div>                                        
                                       <input type = 'submit' name = 'submit' value = 'Submit' class="btn btn-success"/>
                                       <a href = "showdata.php" type = "button" class="btn btn-warning"> back </a>
</div>
      
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                    </form>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                      
           
           </div>
                   </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>





</body>