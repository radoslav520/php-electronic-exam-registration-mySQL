<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Brisanje smera</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />

</head>
<body>
<?php 
include ('../includes/header.html');

echo "<h1>Brisanje smera</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled smera</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>";
?>
<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading">Brisanje smera</h1>
  <p align="center">
    <?php 
	 $id=$_REQUEST['id']; 
	 
	 $link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
	
	
	 $query="DELETE FROM smer WHERE id_smer='".$id."'";
		
		  if(!mysqli_query($link,$query))
		  {die ("Došlo je do greške!");}
		  else
		 {
		  echo "Smer ".$id." uspesno je obrisan!";}
	 ?>

      </p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
<?php
include ('../includes/footer.html');
?>
</body>
</html>