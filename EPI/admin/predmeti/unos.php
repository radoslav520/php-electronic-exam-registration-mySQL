<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unos predmeta</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Predmeti</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled predmeta</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>";
?>


<div id="main1">
<br />
<br />
<br />

<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="750" border="0">
  <tr>
    <td><h1 align="center" class="heading">Unos predmeta</h1>
      <p align="center">&nbsp;</p>
<form id="form1" name="form1" method="get" action="unos1.php">
        <table align="center" width="291" border="0">
          <tr>
            <td width="129"><strong>Naziv predmeta:</strong></td>
            <td width="152"><label>
              <input type="text" name="ime_pred" id="ime_pred" />
            </label></td>
          </tr>
          <tr>
            <td><strong>Šifra predmeta:</strong></td>
            <td><input type="text" name="sifra" id="sifra" /></td>
          </tr>
          
 	  	<tr>
            <td><strong>Profesor</strong>:</td>
            <td>
        <?PHP 
$link = mysqli_connect("localhost","root","","mydb");


$result = mysqli_query($link,"select id_prof,ime,prezime from profesori ORDER BY  prezime ASC"); 

echo '<select name="id_prof"><OPTION>'; 
echo "Dodelite profesora</OPTION>"; 
while ($row = mysqli_fetch_array($result)){

$prezime= $row["prezime"]; 
$ime= $row["ime"]; 
$id_prof= $row["id_prof"];

echo "<OPTION 
value=\"$id_prof\">$prezime, $ime, $id_prof
</OPTION>"; 
 
} 
echo '</SELECT>';
?>
            
            
            </td>
          </tr>
 	 </table>



        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Unesi" />
          </label>
        </p>
        <p></p>
      </form>


<?php
include ('../includes/footer.html');
?>

</body>
</html>