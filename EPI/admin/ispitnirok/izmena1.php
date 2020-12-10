<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Izmena ispitnog roka</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Izmena ispitnog roka</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled ispitnih rokova</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>
<p></p>";
?>

 <?php 
	 $id=$_REQUEST['id'];
	 $sname=$_REQUEST['name']; 
	 
	 $link= @mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
		  
	
	 $sql="UPDATE ispitni_rok SET naziv_ir='".$sname."' WHERE id_ir='".$id."'";

	 if($sname === ""){
		echo "<center><h2>Polja ne mogu biti prazna!</h2>";
	 }else{
		if(!mysqli_query($link,$sql))
		{die ("An unexpected error occured while saving the record, Please try again!");}
		else
	   {
		echo "<center><h2>Uspešno izmenjen ispitni rok</h2>";}
	 }
		
		 
	 ?>


<?php
include ('../includes/footer.html');
?>

</body>
</html>