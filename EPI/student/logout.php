<?php # Script 12.6 - logout.php
// This page lets the user logout.

// If no cookie is present, redirect the user:
if (!isset($_COOKIE['id_student'])) {

	// Need the function:
	require ('includes/login_functions.inc.php');
	redirect_user();	
	
} else { // Delete the cookies:
	setcookie ('id_student', '', time()-3600, '/', '', 0, 0);
	setcookie ('ime', '', time()-3600, '/', '', 0, 0);
	setcookie ('prezime', '', time()-3600, '/', '', 0, 0);
}

// Set the page title and include the HTML header:
$page_title = 'Odjavljeni ste!';
include ('includes/header.html');

// Print a customized message:
echo "<h3><a href=\"login.php\"> Početna strana/Prijava</a></h3>
<h1>Odjavljeni ste!</h1>
<p>Odjavljeni ste, {$_COOKIE['ime']}!</p>
";


include ('includes/footer.html');
?>