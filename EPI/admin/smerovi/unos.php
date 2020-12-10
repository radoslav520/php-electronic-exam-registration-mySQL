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
    <td><h1 align="center" class="heading">Unos smera</h1>
      <p align="center">&nbsp;</p>
      <form id="form1" name="form1" method="get" action="unos1.php">
        <table align="center" width="291" border="0">
          <tr>
            <td width="129"><strong>Naziv Smera:</strong></td>
            <td width="152"><label>
              <input type="text" name="ime_smera" id="textfield" />
            </label></td>
          </tr>
        </table>
        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Unesi" />
          </label>
        </p>
        <p align="center"><a href="./">Nazad</a></p>
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