<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$h = "localhost";
$u = "root";
$p = "";
$d = "raport_db";
mysql_connect($h,$u,$p);
mysql_select_db($d);
?>