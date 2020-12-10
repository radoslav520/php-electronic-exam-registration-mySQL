<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Izmena studenta</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Izmena studenta</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled studenata</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>
<p></p>";
?>

  <?php 
     $id=$_REQUEST['id'];
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
		
	 $query="UPDATE studenti SET ime='".$ime."', prezime='".$prezime."', br_indeksa='".$br_indeksa."', adresa='".$adresa."', mesto='".$mesto."', datum_rodj='".$datum_rodj."', email='".$email."', pass='".$sifra."', tel1='".$tel1."', tel2='".$tel2."' WHERE id_student='".$id."'";
	 if($ime==="" || $prezime===""  || $br_indeksa==="" || $adresa==="" || $mesto===""  || $datum_rodj==="" ||  $email==="" || $sifra==="" || $tel1==="" || $tel2===""){
		echo "<center><h2>Doslo je do greske polja ne mogu biti prazna.</h2>";
	 }else{
		if(!mysqli_query($link,$query))
		{die ("An unexpected error occured while saving the record, Please try again!");}
		else
	   {
		echo "<center><h2>Uspešno promenjeni podaci o studentu</h2>";}
	 }
		  
	 ?>
<?php 
include ('../includes/footer.html');
?>

</body>
</html>