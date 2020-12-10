<?php # Prijava na sajt - login

// Proveravanje da li je formular popunjen
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('includes/login_functions.inc.php');
	require ('../mysqli_connect.php');
	list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);
	
	if ($check) { // Ako je sve u redu
		
		// Postavljanje cookie-ja 
		setcookie ('id_student', $data['id_student']);
		setcookie ('ime', $data['ime']);
		setcookie ('prezime', $data['prezime']);
		
		// Redirekcija na sledecu stranicu
		redirect_user('loggedin.php');
			
	} else { // Ako je prijava neuspesna

		// Assign $data to $errors for error reporting
		// in the login_page.inc.php file.
		$errors = $data;

	}
		
	mysqli_close($dbc); // Zatvaranje konekcije prema bazi podataka

} // Zavrsavanje uslova

// Kreiranje stranice
include ('includes/login_page.inc.php');
?>