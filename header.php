<?php
require("config.php");
require("auth.php");
require("func.php");
$csrftoken = '<meta name="csrf-token" content="'.$_SESSION['csrf_token'].'">';
$cssextra = '<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">';

function pageheader($ur){
echo '<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jateng7Apss">
    <meta name="author" content="YusufWardana">
    <meta name="generator" content="">';
    if($ur["title"]) echo '<title>'.$ur["title"].'</title>';
echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="'.$ur['blog_dir'].'vendor/swiper/css/swiper.min.css" rel="stylesheet">
    <link href="'.$ur['blog_dir'].'css/j7apps.css" rel="stylesheet" id="style">';
    //echo $csrftoken; 
   // echo $cssextra;
echo '</head>';
if($ur["datapage"]){ 
	echo '
	<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="'.$ur["datapage"].'">';
	}else{
	echo '<body class="body-scroll d-flex flex-column h-100 menu-overlay">';
	}
if($ur["screenloader"])echo '<div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <div class="icon icon-100 mb-4 rounded-circle">
                        <img src="img/TEPAT.gif" alt="" class="w-50">
                    </div>
                    <h6 class="text-default">Jateng7</h6>
                    <div class="loader-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
if(isset($_GET["inp"]) xor isset($_GET["page"])){

	echo '<main class="flex-shrink-0 main">';
		echo '<header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="menu-btn btn btn-40 btn-link back-btn" type="button">
                        <span class="material-icons">keyboard_arrow_left</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                    <a class="navbar-brand" href="#">';
        if($ur["title"]) echo '<h5 class="mb-0">'.$ur["title"].'</h5>';
        echo '</a>
        </div>
        </div>
     </header>';

	
	//$ur["footer"] = "";
}else{

	echo '
    <main class="flex-shrink-0 main">';
    	echo '<header class="header">
        <div class="row">
        <div class="col-auto px-0">
        <button class="menu-btn btn btn-40 btn-link" type="button">
        <span class="material-icons">menu</span>
        </button>
        </div>
        <div class="text-left col align-self-center">
        <a class="navbar-brand" href="#">';
        if($ur["title"]) echo '<h5 class="mb-0">'.$ur["title"].'</h5>';
        echo '</a>
        </div>
        </div>
     </header>';
navbar($ur);
	
}
    




echo '<div class="backdrop"></div>';
}


//echo erDebug($ur);
