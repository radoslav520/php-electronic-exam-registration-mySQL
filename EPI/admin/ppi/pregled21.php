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
    <td><h1 align="center" class="heading">Pregled prijavljenih ispita po roku/profesoru</h1>
</p>
   </td>
  </tr> 
    <?php 
   
    $id_ir=$_REQUEST['id_ir'];
	$id_prof=$_REQUEST['id_prof'];
		
	
	$link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
		
	 $query="
	
	 SELECT * FROM prijava AS p
	 	 
	 INNER JOIN predmeti AS pr 
	 ON p.predmeti_id_predmet=pr.id_predmet 
	
	 INNER JOIN profesori AS prof 
	 ON pr.profesori_id_prof=prof.id_prof
	 
	 INNER JOIN ispitni_rok AS isr 
	 ON isr.id_ir=p.ispitni_rok_id_ir
	 
	 INNER JOIN studenti AS stud 
	 ON stud.id_student=p.studenti_id_student
	 
	 WHERE p.ispitni_rok_id_ir=$id_ir AND pr.profesori_id_prof=$id_prof
	 ";

	 if(!mysqli_query($link,$query))
		{die ("<center><h2>Greska, niste izabrali ispitni rok ili profesora!</h2>");}
		else
	   {
		$resource=mysqli_query($link,$query);
		echo "
	 <table align=\"center\" border=\"1\" width=\"100%\">
	 <tr><td>Izabrani ispitni rok: $id_ir </td> <td><b>Student</b></td> <td></td> <td></td> <td><b>Profesor</b></td>
	 </tr>
	 <tr>
	 <td><b>Ispitni rok</b></td> <td><b>Ime</b></td> <td><b>Prezime</b></td> <td><b>Naziv predmeta</b></td>  
	   <td><b>Ime</b></td> <td><b>Prezime</b></td> <td><b>ID Prijave</b></td> 
</tr> ";
while($result=mysqli_fetch_array($resource))
 { 
 echo "<tr><td>".$result[14]."</td><td>".$result[16]."</td><td>".$result[17]."</td><td>".$result[5]."</td>  <td>".$result[9]."</td> <td>".$result[10]."</td><td>".$result[0]."</td>

	 
	 
	 </tr>";
 }
	   }
		
		   echo "</table>";
	 ?>

</table>
<h1 align="center" class="heading">&nbsp;</h1>
</div>


<?php
include ('../includes/footer.html');
?>

</body>
</html>