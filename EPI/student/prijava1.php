<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prijava ispita</title>
</head>
<body>
<?php 
if (!isset($_COOKIE['id_student'])) {

	require ('includes/login_functions.inc.php');
	redirect_user();	

}

include ('includes/header.html');

echo "<h1>Prijava ispita</h1>
<p>Prijavljeni ste kao, {$_COOKIE['ime']} {$_COOKIE['prezime']}. </p>
<p></p>
<h3><a href=\"pregled.php\"> Pregled prijavljenih ispita</a></h3>
<h3><a href=\"prijava.php\"> Prijava ispita</a></h3>
<h3><a href=\"logout.php\"> Odjavite se</a></h3>";
?>

<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading">Prijava ispita</h1>
  <p align="center">
    <?php 

	 $id_student=$_COOKIE['id_student'];
	 $id_predmet=$_REQUEST['id_predmet']; 
	 $id_ir=$_REQUEST['id_ir'];
	 
	 
	 $link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");

	
	
	 $query="INSERT INTO prijava (studenti_id_student, predmeti_id_predmet, ispitni_rok_id_ir) 
values('".$id_student."', '".$id_predmet."', '".$id_ir."')";
		
		  if(!mysqli_query($link,$query))
		  {die ("<center><h2>Greska, niste izabrali ispitni rok ili predmet!</h2>");}
		  else
		 {
		  echo "<h2>Uspešno ste prijavili ispit</h2>";}
	 ?>

      </p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
<?php
include ('includes/footer.html');
?>
</body>
</html>