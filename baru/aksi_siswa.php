<?php
error_reporting(E_ALL ^ E_NOTICE);
include ("config.php");

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$no_induk = $_POST['no_induk'];
$nm_siswa = $_POST['nm_siswa'];
$alamat = $_POST['alamat'];
$tmpt_lahir = $_POST['tmpt_lahir'];
$id_jurusan = $_POST['id_jurusan'];
$kelas_diterima = $_POST['kelas_diterima']
// perintah SQL
//$query="INSERT INTO nilai2 (angka,huruf,predikat,deskripsi,id_mapel,no_induk) VALUES ('$angka',' $huruf','$predikat',$deskripsi','$id_mapel',$no_induk')" ;
$query="INSERT INTO siswa (no_induk,nm_siswa,alamat,tmpt_lahir,kelas_diterima,id_jurusan) VALUES ('$no_induk','$nm_siswa','$alamat','$tmpt_lahir','$kelas_diterima','$id_jurusan')";
$hasil=mysql_query($query);

if ($hasil){
//header ('location:nilai.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= showdata.php'/>  ";
} else { echo "Data gagal disimpan
 <meta http-equiv='refresh' content='2; url= aksi_siswa.php'/> ";
}
?>