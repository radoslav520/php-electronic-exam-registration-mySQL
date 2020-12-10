<?php #  loggedin.php
/*
// The user is redirected here from login.php.

// If no cookie is present, redirect the user:
if (!isset($_COOKIE['id_student'])) {

	// Need the functions:
	require ('includes/login_functions.inc.php');
	redirect_user();	

}

// Set the page title and include the HTML header:
*/
$page_title = 'SINGIDUNUM - Elektronska Prijava Ispita';
include ('includes/header.html');

// Print a customized message:
echo "<h1>Administracija</h1>
<p></p>
<p></p>
<h3><a href=\"ispitnirok/index.php\"> Ispitni rokovi</a></h3>
<h3><a href=\"profesori/index.php\"> Profesori</a></h3>
<h3><a href=\"smerovi/index.php\"> Smerovi</a></h3>
<h3><a href=\"studenti/index.php\"> Studenti</a></h3>
<h3><a href=\"predmeti/index.php\"> Predmeti</a></h3>
<h3><a href=\"ppi/index.php\"> Pregled prijavljenih ispita</a></h3>";
?>


<?php
include ('includes/footer.html');
?>