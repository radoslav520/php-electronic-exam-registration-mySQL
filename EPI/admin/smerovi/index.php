<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pregled smerova</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Smerovi</h1>
<p></p>
<h3><a href=\"unos.php\"> Unos smera</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>";
?>


<div id="main1">
<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading">Pregled smerova</h1>
</p>
   </td>
  </tr>
<?php 
$link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
		
	 $query="SELECT * FROM smer";
		
		  $resource=mysqli_query($link,$query);
		  echo "
		<table align=\"center\" border=\"0\" width=\"100%\">
		<tr>
		<td><b>ID Smera</b></td> <td><b>Naziv Smera</b></td> <td><b>Izmeniti</b></td> <td><b>Brisati</b></td>
		
		</tr> ";
while($result=mysqli_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td><td> <a href=\"izmena.php?id=".$result[0]."\">Izmeniti</a></td> <td> <a href=\"brisati.php?id=".$result[0]."\">Brisati</a> </tr>";
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