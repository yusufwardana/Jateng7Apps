<?php
//Membuat Token Keamanan Ajax Request (Csrf Token)
session_start();
/*if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}*/
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 604800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
//CEK LOGIN USER JIKA ADA TAMBAHKAN DIBAWAH INI
if (!isset($_SESSION['loggedin'])) {
	
	header('Location: /landing.php');
	exit;
}
?>