<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pregled prijavljenih ispita</title>
<link href="../style1.css" rel="stylesheet">
</head>
<body>

<?php 
if (!isset($_COOKIE['id_student'])) {

	require ('includes/login_functions.inc.php');
	redirect_user();	

}

$page_title = 'Pregled ispita';
include ('includes/header.html');

echo "<h1>Pregled prijavljenih ispita</h1>
<p>Prijavljeni ste kao, {$_COOKIE['ime']} {$_COOKIE['prezime']}. </p>
<p></p>
<h3><a href=\"prijava.php\"> Prijava ispita</a></h3>
<h3><a href=\"logout.php\"> Odjavite se</a></h3>";
?>


<div id="main1">
<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading">Pregled prijavljenih ispita</h1>
         <p align="center"><a href="javascript:history.back()"> Povratak </a>
</p>
   </td>
  </tr>



   <?php 
   
    $id_ir=$_REQUEST['id_ir'];
	$id_student=$_COOKIE['id_student'];	
	
	$link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
	
	 
	 $query="
	 SELECT * FROM prijava AS p 
	 INNER JOIN predmeti AS pr 
	 ON p.predmeti_id_predmet=pr.id_predmet 
	 INNER JOIN profesori AS prof
	 ON pr.profesori_id_prof=prof.id_prof
	 WHERE p.ispitni_rok_id_ir=$id_ir AND p.studenti_id_student=$id_student
	
	 ";

	 if(!mysqli_query($link,$query))
		{die ("<center><h2>Greska, niste izabrali ispitni rok!</h2>");}
		else
	   {
		$resource=mysqli_query($link,$query);
		echo "
			 <table align=\"center\" border=\"1\" width=\"100%\">
			 <tr><td>
			 Ispitni rok: $id_ir </td>
			 </tr>
			 <tr>
			 <td><b>ID prijave</b></td> <td><b>ID Studenta</b></td>  <td><b>ID predmeta</b></td>  <td><b>Naziv predmeta</b></td>  
			  <td><b>ID prof.</b></td> <td><b>Ime</b></td> <td><b>Prezime</b></td> <td><b>Brisanje</b></td>
	 </tr> ";
	 while($result=mysqli_fetch_array($resource))
		 { 
		 echo "<tr><td>".$result[0]."</td><td>".$result[3]."</td><td>".$result[2]."</td><td>".$result[5]."</td>  <td>".$result[7]."</td> <td>".$result[9]."</td> <td>".$result[10]."</td>
	 <td> <a href=\"brisati.php?id=".$result[0]."\"> Brisanje </a> 
		 </td>
			 
			 
			 </tr>";
		 }
	   }
		
 echo "</table>";
	 ?>

</table>
<h1 align="center" class="heading">&nbsp;</h1>
</div>


<?php
include ('includes/footer.html');
?>

</body>
</html>