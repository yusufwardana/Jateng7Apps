<?php

function erDebug($var, $title='', $return=false) {
	if ($return) return highlight_string($title.': '.print_r($var, true), true);
	highlight_string($title.': '.print_r($var, true));
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'centrumt_jt7';
$DATABASE_PASS = '1@$21%jXXfVv';
$DATABASE_NAME = 'centrumt_jt7';
// Try and connect using the info above.
$link = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


// baca tanggal sekarang
$tglNow = date("d");
 
// baca bulan sekarang
$blnNow = date("m");
 
// baca tahun-bulan-tanggal sekarang
$now = date("Y-m-d");
$data = "1994-03-07";

// Procedural style

if ($stmt = mysqli_query($link, "SELECT * FROM accounts WHERE DAY(tglLahir) = '$tglNow' AND MONTH(tglLahir) = '$blnNow'")) {

// tampilkan query
while ($row=mysqli_fetch_array($stmt,MYSQLI_ASSOC))
{
   echo $row['nik']." ".$row['nama']." ".$row['birthday']." ";
   echo $row['mms']." ".$row['area'];
   echo "<br />";
}
    mysqli_stmt_close($stmt);
	
}

/* close connection */
mysqli_close($link);
?>