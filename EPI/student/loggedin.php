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
<h3><a href=\"pregled.php\"> Pregled prijavljenih ispita</a></h3>
<h3><a href=\"prijava.php\"> Prijava ispita</a></h3>
<h3><a href=\"logout.php\"> Odjavite se</a></h3>";
?>


<?php
include ('includes/footer.html');
?>