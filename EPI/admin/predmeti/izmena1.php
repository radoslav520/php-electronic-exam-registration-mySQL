<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Izmena predmeta</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Izmena predmeta</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled predmetaa</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>
<p></p>";
?>

  <?php 
  	 $id=$_REQUEST['id'];
	 $ime_pred=$_REQUEST['ime_pred']; 
	 $sifra=$_REQUEST['sifra']; 
	 $id_prof=$_REQUEST['id_prof']; 
	 
	 $link=mysqli_connect("localhost","root","",'mydb') or die("Cannot Connect to the database!");
	
	
/*	 $query="UPDATE studenti SET ime='".$ime."', prezime='".$prezime."', br_indeksa='".$br_indeksa."', adresa='".$adresa."', mesto='".$mesto."', datum_rodj='".$datum_rodj."', email='".$email."', pass='".$sifra."', tel1='".$tel1."', tel2='".$tel2."' WHERE id_student='".$id."'";
*/
	 $query="UPDATE predmeti SET ime_pred='".$ime_pred."', sifra='".$sifra."', profesori_id_prof= '".$id_prof."' WHERE id_predmet='".$id."'";

	 if($ime_pred==="" || $sifra==="" ){
		echo "<center><h2>Greska, polja ne mogu biti prazna!</h2>";
	 }else{
		if(!mysqli_query($link,$query))
		{die ("<center><h2>Molim Vas izaberite profesora.</h2>");}
		else
	   {
		echo "<center><h2>Uspešno promenjeni podaci o predmetu</h2>";}
	 }
		 
	 ?>
<?php 
include ('../includes/footer.html');
?>

</body>
</html>