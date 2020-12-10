<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pregled predmeta</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Predmeti</h1>
<p></p>
<h3><a href=\"unos.php\"> Unos predmeta</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>";
?>


<div id="main1">
<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="750" border="0">
  <tr>
    <td><h1 align="center" class="heading">Pregled predmeta</h1>
</p>
   </td>
  </tr>
    <?php 
/*	 	 $link=mysql_connect("localhost","root","davor021") or die("Cannot Connect to the database!");
	
	 mysql_select_db("mydb",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM predmeti";
		
		  $resource=mysql_query($query,$link);
		  echo "
		<table align=\"center\" border=\"0\" width=\"100%\">
		<tr>
		<td><b>ID Predmeta</b></td> <td><b>Naziv Predmeta</b></td><td><b>Sifra</b></td>  <td><b>Profesor ID</b></td> <td><b>Smer ID</b></td> <td><b>Izmeniti</b></td> <td><b>Brisati</b></td>
</tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td> <td>".$result[6]."</td> <td>".$result[7]."</td> <td> <a href=\"izmena.php?id=".$result[0]."\">Izmeniti</a></td> <td> <a href=\"brisati.php?id=".$result[0]."\">Brisati</a> </tr>";
	} echo "</table>";
*/	 ?>

   <?php 
/*   
    $id_ir=$_REQUEST['id_ir'];
	$id_prof=$_REQUEST['id_prof'];
*/		
	
	 	 $link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
	
	 
	 $sql="
	
	 SELECT * FROM predmeti AS p
	 
	 INNER JOIN profesori AS pr 
	 ON p.profesori_id_prof=pr.id_prof 
	
		 
	 ";
		
		  $resource=mysqli_query($link,$sql);

   echo "
		<table align=\"center\" border=\"1\" width=\"100%\">
		<tr>
		 <td><b>ID predmeta</b></td> <td><b>Naziv predmeta</b></td> <td><b>Sifra predmeta</b></td> <td><b>ID prof.</b></td> <td><b>Ime</b></td> 
		 <td><b>Prezime</b></td> <td><b>Izmeniti</b></td> <td><b>Brisati</b></td> 
</tr> ";
while($result=mysqli_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td> <td>".$result[3]."</td><td>".$result[5]."</td> <td>".$result[6]."</td> 
	<td> <a href=\"izmena.php?id=".$result[0]."\">Izmeniti</a></td> <td> <a href=\"brisati.php?id=".$result[0]."\">Brisati</a>
		
		</tr>";
	} echo "</table>";
	 ?>

</table>
<h1 align="center" class="heading">&nbsp;</h1>
</div>


<?php
include ('../includes/footer.html');
?>

</body>
</html>