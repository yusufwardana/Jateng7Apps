<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'centrumt_jt7';
$DATABASE_PASS = 'E$4}C9}MyV*F';
$DATABASE_NAME = 'centrumt_jt7';
// Try and connect using the info above.
$connect = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>