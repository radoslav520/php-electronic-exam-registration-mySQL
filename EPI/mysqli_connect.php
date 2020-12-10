<?php # konekcija sa bazom podataka

// Definisanje parametara za pristup bazi podataka
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'mydb');

// Uspostavljanje konekcije
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Definisanje jezickog koda rasporeda znakova
mysqli_set_charset($dbc, 'utf8');
