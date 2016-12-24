<?php
error_reporting(E_ALL ^ E_NOTICE);
include ("config.php");

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$angka = $_POST['angka'];
$huruf = $_POST['huruf'];
$predikat = $_POST['predikat'];
$deskripsi = $_POST['deskripsi'];
$id_mapel = $_POST['id_mapel'];
$no_induk = $_POST['no_induk'];

// perintah SQL
//$query="INSERT INTO nilai2 (angka,huruf,predikat,deskripsi,id_mapel,no_induk) VALUES ('$angka',' $huruf','$predikat',$deskripsi','$id_mapel',$no_induk')" ;
$query="INSERT INTO nilai VALUES ('$angka','$huruf','$predikat','$deskripsi','$id_mapel','$no_induk')";
$hasil=mysql_query($query);

if ($hasil){
//header ('location:nilai.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= nilai.php'/>  ";
} else { echo "Data gagal disimpan
 <meta http-equiv='refresh' content='2; url= tambahnilai.php'/> ";
}
?>