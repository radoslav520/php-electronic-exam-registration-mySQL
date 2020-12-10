<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unos predmeta</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Unos predmeta</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled predmeta</a></h3>
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

	 $ime_pred=$_REQUEST['ime_pred']; 
	 $sifra=$_REQUEST['sifra']; 
	 $id_prof=$_REQUEST['id_prof']; 
	 
	 $link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
	
	 
	 $query="INSERT INTO predmeti (ime_pred, sifra, profesori_id_prof) 
values('".$ime_pred."', '".$sifra."', '".$id_prof."')";

if($ime_pred==="" || $sifra==="" ){
	echo "<center><h2>Polja ne mogu biti prazna!</h2>";

}else{
	if(!mysqli_query($link,$query))
	{die ("<center><h2>Greska! Izaberite profesora</h2>");}
	else
   {
	echo "<center><h2>Uspešno ste upisali predmet!</h2>";}
}
		
		
	 ?>
<?php
include ('../includes/footer.html');
?>

</body>
</html>