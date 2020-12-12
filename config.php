<?php
date_default_timezone_set("Asia/Jakarta");
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'jateng7';


$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


$stmt = $con->prepare('SELECT username,nama,birthday,jabatan,mms,area FROM accounts WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($usernik,$nama, $birthday, $jabatan, $mms, $area);
$stmt->fetch();
$stmt->close();

?>

