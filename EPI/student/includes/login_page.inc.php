<?php # login stranica

// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

// Include the header:
$page_title = 'Prijavljivanje';
include ('includes/header.html');

// Print any error messages, if they exist:
if (isset($errors) && !empty($errors)) {
	echo '<h1>Greška!</h1>
	<p class="error">Pojavile su se sledeće greške:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Molimo Vas pokušajte ponovo.</p>';
}

// Formular
?><h1>Prijava</h1>
<form action="login.php" method="post">
	<p>E-mail: <input type="text" name="email" size="20" maxlength="60" /> </p>
	<p>Šifra: <input style="margin-left: 10px;" type="password" name="pass" size="20" maxlength="20" /></p>
	<p><input type="submit" name="submit" value="Prijava" /></p>
</form>

<?php include ('includes/footer.html'); ?>