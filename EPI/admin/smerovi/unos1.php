<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unos smera</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Unos smera</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled smerova</a></h3>
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
	 $ime_smera=$_REQUEST['ime_smera']; 

	 if($ime_smera === ""){
		echo "<center><h2>Greska ne sme biti prazan string !</h2>";
	 }
	 else{
		$link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
		
		$query="INSERT INTO smer (ime_smera) values('".$ime_smera."')";
		   
			 if(!mysqli_query($link,$query) )
			 {die ("Doslo je do greške!");}
			 else
			{
			 echo "<center><h2>Uspešno ste upisali smer!</h2>";}

	 }
	 
		 
	 
	 ?>




<h1 align="center" class="heading">&nbsp;</h1>
</div>


<?php
include ('../includes/footer.html');
?>

</body>
</html>