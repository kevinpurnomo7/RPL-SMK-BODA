  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMK BOPKRI 2 YOGKARTA</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/bootswatch.min.css">
    <script type="text/javascript" async="" src="./js/ga.js"></script>
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootswatch.js"></script>
	<div class="container">
		<?php include('session.php');
?>

    <title>Data nilai</title>
</head>
<body>

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
	echo '<tr><td>'.$n.'</td><td>'.$r["id_mapel"].'</td><td>'.$r["angka"].'</td><td>'.$r["huruf"].'</td><td>'.$r["predikat"].'</td><td>'.$r["deskripsi"].'</td></tr>';
	$n++;
}
?>
<script type="text/javascript">
    function myFunction() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }
</script>  
</script>

  </tr>
</table>
<center>
	<div class="col-md-10">
		<div class="col-md-2">
	
	<input class="btn btn-success" id="printpagebutton" type="button" value="Print this page" onclick="myFunction()"/></center>
	</div>
</div>
</div>
</body>
</html>