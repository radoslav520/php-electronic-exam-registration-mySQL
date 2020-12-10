<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unos profesora</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Unos profesora</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled profesora</a></h3>
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
	 $email=$_REQUEST['email']; 
	 $tel=$_REQUEST['tel']; 
	 
	 $link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
		
	 $query="INSERT INTO profesori (ime, prezime, email, tel) 
values('".$ime."', '".$prezime."', '".$email."', '".$tel."')";
		
		if($ime ==="" ||  $prezime==="" || $email==="" || $tel===""){
			echo "<center><h2>Polja ne mogu biti prazna</h2>";
		}else{
			if(!mysqli_query($link,$query))
			{die ("Doslo je do greške!");}
			else
		   {
			
			echo "<center><h2>Uspešno ste upisali profesora!</h2>";}
			
		}
		 
	 ?>



<h1 align="center" class="heading">&nbsp;</h1>
</div>


<?php
include ('../includes/footer.html');
?>

</body>
</html>