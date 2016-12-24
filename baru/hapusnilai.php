<?php
include "config.php";
$hapus = mysql_query("delete from nilai");
if($hapus)
{
    echo "<div align='center'><h3>berhasil terhapus nilainya</h3></div>"; 

}
else
{
    echo "<div align='center'><h3>gagal terhapus nilainya</h3></div>"; 

}
echo "<meta http-equiv='refresh' content='2; url =showdata.php'>";
?>