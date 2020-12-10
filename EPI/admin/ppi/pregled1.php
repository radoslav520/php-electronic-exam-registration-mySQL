<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pregled prijavljenih ispita po ispitnom roku</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Pregled prijavljenih ispita</h1>
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
    <td><h3 align="center" class="heading">Izaberite ispitni rok</h3>
</p>
   </td>
  </tr> 
<form id="form1" name="form1" method="get" action="pregled11.php">
        <table align="center" width="291" border="0">
          <tr>
            <td width="129"><strong>Ispitni rok</strong>:</td>
          
<td width="152">
<?PHP 
$link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
	

$result = mysqli_query($link,"select id_ir, naziv_ir from ispitni_rok ORDER BY  id_ir DESC"); 

echo '<select name="id_ir"><OPTION>'; 
echo "Izaberite ispitni rok</OPTION>"; 
while ($row = mysqli_fetch_array($result)){
  

$naziv_ir= $row["naziv_ir"]; 
$id_ir= $row["id_ir"]; 
echo "<OPTION value=\"$id_ir\">$naziv_ir</OPTION>"; 
} 
echo '</SELECT>';
?>
</td>
          </tr>
 	 </table>



        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Dalje" />
          </label>
        </p>
      </form>

</table>
<h1 align="center" class="heading">&nbsp;</h1>
</div>


<?php
include ('../includes/footer.html');
?>

</body>
</html>