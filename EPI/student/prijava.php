<?php #  loggedin.php
// The user is redirected here from login.php.

// If no cookie is present, redirect the user:
if (!isset($_COOKIE['id_student'])) {

	// Need the functions:
	require ('includes/login_functions.inc.php');
	redirect_user();	

}

// Set the page title and include the HTML header:
$page_title = 'Uspešno ste prijavljeni';
include ('includes/header.html');

// Print a customized message:
echo "<h1>Dobrodošli!</h1>
<p>Prijavljeni ste kao {$_COOKIE['ime']} {$_COOKIE['prezime']}. </p>
<p></p>
<h3><a href=\"pregled.php\"> Pregled ispita</a></h3>
<h3><a href=\"logout.php\"> Odjavite se</a></h3>";
?>
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading">Prijava ispita</h1>
      <p align="center">&nbsp;</p>
      <form id="form1" name="form1" method="get" action="prijava1.php">
        <table align="center" width="291" border="0">
          
          <tr>
            <td><strong>Predmet:</strong></td>
           <td><!-- <input type="text" name="sifra" id="sifra" />--> 
<?PHP 
	 	 $link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");



$result = mysqli_query($link,"select id_predmet,ime_pred,sifra from predmeti ORDER BY  ime_pred ASC"); 

echo '<select name="id_predmet"><OPTION>'; 
echo "Izaberite predmet</OPTION>"; 
while ($row = mysqli_fetch_array($result)){

$ime_pred= $row["ime_pred"]; 
$id_predmet= $row["id_predmet"];
$sifra= $row["sifra"]; 
 
echo "<OPTION value=\"$id_predmet\">$ime_pred, $sifra 
</OPTION>"; 
} 
echo '</SELECT>';
?>
</td>
</tr>
 	  <tr>
 	    <td><strong>Ispitni rok</strong>: </td>
 	    <td>
  <?PHP 

$link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");


$result = mysqli_query($link,"select id_ir,naziv_ir from ispitni_rok ORDER BY  id_ir ASC"); 

echo '<select name="id_ir"><OPTION>'; 
echo "Ispitni rok</OPTION>"; 
while ($row = mysqli_fetch_array($result)){

$naziv_ir= $row["naziv_ir"]; 
$id_ir= $row["id_ir"];

echo "<OPTION 
value=\"$id_ir\">$naziv_ir
</OPTION>"; 
 
} 
echo '</SELECT>';
?>        
 	      </td>
 	    </tr>
 	    </table>



        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Prijavi" />
          </label>
        </p>
        <!--
        <p align="center"><a href="../">Nazad</a></p> -->
      </form></td>
  </tr>
</table>

<?php
include ('includes/footer.html');
?>