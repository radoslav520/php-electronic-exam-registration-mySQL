<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unos studenta</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Unos studenta</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled studenata</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>";
?>


<div id="main1">
<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td>
</p>
   </td>
  </tr>
</table>
 <?php 

	 $ime=$_REQUEST['ime']; 
	 $prezime=$_REQUEST['prezime']; 
	 $br_indeksa=$_REQUEST['br_indeksa']; 
	 $adresa=$_REQUEST['adresa']; 
	 $mesto=$_REQUEST['mesto']; 
	 $datum_rodj=$_REQUEST['datum_rodj']; 
	 $email=$_REQUEST['email']; 
	 $sifra=$_REQUEST['sifra']; 
	 $tel1=$_REQUEST['tel1']; 
	 $tel2=$_REQUEST['tel2']; 
	 
	 $link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
		
	 $query="INSERT INTO studenti (ime, prezime, br_indeksa, adresa, mesto, datum_rodj, email, pass, tel1, tel2) 
values('".$ime."', '".$prezime."', '".$br_indeksa."', '".$adresa."', '".$mesto."', '".$datum_rodj."', '".$email."', '".$sifra."', '".$tel1."', '".$tel2."')";

if($ime==="" || $prezime===""  || $br_indeksa==="" || $adresa==="" || $mesto===""  || $datum_rodj==="" ||  $email==="" || $sifra==="" || $tel1==="" || $tel2===""){
	echo "<center><h2>Doslo je do greske polja ne mogu biti prazna.</h2>";
}else{
	if(!mysqli_query($link,$query))
	{die ("Došlo je do greške!");}
	else
   {
	echo "<center><h2>Uspešno ste upisali studenta!</h2>";}
}		  
	 ?>
<?php
include ('../includes/footer.html');
?>

</body>
</html>