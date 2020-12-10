<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unos ispitnog roka</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Unos ispitnog rokovi</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled ispitnih rokova</a></h3>
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
	 $naziv_ir=$_REQUEST['naziv_ir']; 
		 
	 $link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
	
	 
	 $sql="INSERT INTO ispitni_rok (naziv_ir) values('".$naziv_ir."')";

	 if($naziv_ir === ""){
		 echo "<center><h2>Polja ne mogu biti prazna!</h2>";
	 }else{
		if(!mysqli_query($link,$sql))
		{die ("Došlo je do greške!");}
		else
	   {
		echo "<center><h2>Uspešno ste upisali ispitni rok!</h2>";}
	 }
		
		 
	 ?>



<h1 align="center" class="heading">&nbsp;</h1>
</div>


<?php
include ('../includes/footer.html');
?>

</body>
</html>