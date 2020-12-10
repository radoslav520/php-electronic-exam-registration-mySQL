<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pregled prijavljenih ispita</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Pregled prijavljenih ispita</h1>
<p></p>
<h3><a href=\"pregled1.php\"> Pregled prijavljenih ispita po ispitnom roku</a></h3>
<p></p>
<h3><a href=\"pregled2.php\"> Pregled prijavljenih ispita po ispitnom roku i profesoru</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>";
?>


<div id="main1">
<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="750" border="0">
  <tr>
    <td><h1 align="center" class="heading">Pregled prijave ispita</h1>
</p>
   </td>
  </tr> -->


   <?php 
 
    
	
	$link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
		
	 $query="
	
	 SELECT * FROM predmeti AS p
	 
	 INNER JOIN profesori AS pr 
	 ON p.profesori_id_prof=pr.id_prof 
	
		 
	 ";
		
		  $resource=mysqli_query($link,$query);

   echo "
		<table align=\"center\" border=\"1\" width=\"100%\">
		<tr>
		 <td><b>ID predmeta</b></td> <td><b>Naziv predmeta</b></td> <td><b>Sifra predmeta</b></td> <td><b>ID prof.</b></td> <td><b>Ime</b></td> 
		 <td><b>Prezime</b></td> 
</tr> ";
while($result=mysqli_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td> <td>".$result[3]."</td><td>".$result[5]."</td> <td>".$result[6]."</td> 
	
		
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