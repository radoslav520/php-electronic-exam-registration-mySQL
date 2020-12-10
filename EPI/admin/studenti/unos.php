<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unos studenata</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Unos studenata</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled studenata</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>";
?>


<div id="main1">
<br />
<br />
<br />

<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="750" border="0">
  <tr>
    <td><h1 align="center" class="heading">Unos studenata</h1>
      <p align="center">&nbsp;</p>
<form id="form1" name="form1" method="get" action="unos1.php">
        <table align="center" width="291" border="0">
          <tr>
            <td width="129"><strong>Ime:</strong></td>
            <td width="152"><label>
              <input type="text" name="ime" id="textfield" />
            </label></td>
          </tr>
          <tr>
            <td><strong>Prezime:</strong></td>
            <td><input type="text" name="prezime" id="textfield2" /></td>
          </tr>
          <tr>
            <td><strong>Broj Indeksa:</strong></td>
            <td><input type="text" name="br_indeksa" id="textfield3" /></td>
          </tr>
          <tr>
            <td><strong>Adresa</strong>:</td>
            <td><input type="text" name="adresa" id="textfield4" /></td>
          </tr>
 	   <tr>
            <td><strong>Mesto</strong>:</td>
            <td><input type="text" name="mesto" id="textfield5" /></td>
          </tr>
 	   <tr>
            <td><strong>Datum rodjenja</strong>:</td>
            <td><input type="text" name="datum_rodj" id="textfield6" /></td>
          </tr>
 	   <tr>
            <td><strong>E-mail adresa</strong>:</td>
            <td><input type="text" name="email" id="textfield7" /></td>
          </tr>
 	   <tr>
            <td><strong>Password</strong>:</td>
            <td><input type="text" name="sifra" id="textfield8" /></td>
          </tr>
 	   <tr>
            <td><strong>Telefon 1</strong>:</td>
            <td><input type="text" name="tel1" id="textfield9" /></td>
          </tr>
 	   <tr>
            <td><strong>Telefon 2</strong>:</td>
            <td><input type="text" name="tel2" id="textfield10" /></td>
          </tr>
        </table>



        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Unesi" />
          </label>
        </p>
      </form></td>
  </tr>
</table>



</table>
<h1 align="center" class="heading">&nbsp;</h1>
</div>


<?php
include ('../includes/footer.html');
?>

</body>
</html>