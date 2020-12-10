<?php # Script 12.4 - loggedin.php
// The user is redirected here from login.php.

// If no cookie is present, redirect the user:
if (!isset($_COOKIE['id_student'])) {

	// Need the functions:
	require ('includes/login_functions.inc.php');
	redirect_user();	

}

// Set the page title and include the HTML header:
$page_title = 'Pregled ispita';
include ('includes/header.html');

// Print a customized message:
echo "<h1>Pregled prijavljenih ispita</h1>
<p>Prijavljeni ste kao, {$_COOKIE['ime']} {$_COOKIE['prezime']}. </p>
<p></p>
<h3><a href=\"loggedin.php\"> Početna strana</a></h3>
<h3><a href=\"prijava.php\"> Prijava ispita</a></h3>
<h3><a href=\"logout.php\"> Odjavite se</a></h3>";
?>
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading"> Izaberite ispitni rok</h1>
      <p align="center">&nbsp;</p>
      <form id="form1" name="form1" method="get" action="pregled1.php">
        <table align="center" width="291" border="0">
          <tr>
            <td width="129"><strong>Ispitni rok</strong>:</td>
          
<td width="152">
<!-- <input type="text" name="email" id="textfield3" />
-->
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
        
      </form></td>
  </tr>
</table>

<?php
include ('includes/footer.html');
?>