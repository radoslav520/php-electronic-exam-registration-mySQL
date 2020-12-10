<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unos ispitnog roka</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Unos ispitnog roka</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled ispitnih rokova</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>";
?>


<div id="main1">
<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading">Unos ispitnog roka</h1>
         
   </td>
  </tr>

<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td>
      <p align="center">&nbsp;</p>
      <form id="form1" name="form1" method="get" action="unos_ir1.php">
        <table align="center" width="291" border="0">
          <tr>
            <td width="129"><strong>Naziv Ispitnog roka:</strong></td>
            <td width="152">

            <!-- <select  name="naziv_ir" type="text" id="textfield" >
            <option value="Januarski">JANUARSKI ISPITNI ROK 2020</option>
    <option value="Februarski">FEBRUARSKI ISPITNI ROK 2020</option>
    <option value="Aprilski">APRILSKI ISPITNI ROK 2020</option>
    <option value="Junski">JUNSKI ISPITNI ROK 2020</option>
    <option value="Julski">JULSKI ISPITNI ROK 2020</option>
    <option value="Septembarski">SEPTEMBARSKI ISPITNI ROK 2020</option>

            </select> -->
            <input type="text" name="naziv_ir" id="textfield" />
             </td>
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