<?php
date_default_timezone_set("Asia/Bangkok");

require("config.php");
require("auth.php");
require("func.php");
//$csrftoken = '<meta name="csrf-token" content="'.$_SESSION['csrf_token'].'">';
//$cssextra = '<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">';

function pageheader($ur){
echo '<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jateng7Apss">
    <meta name="author" content="YusufWardana">
    <meta name="generator" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json">';
    if($ur["title"]) echo '<title>'.$ur["title"].'</title>';
echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="'.$ur['blog_dir'].'vendor/swiper/css/swiper.min.css" rel="stylesheet">
    <link href="'.$ur['blog_dir'].'css/j7apps.css?'.time().'" rel="stylesheet" id="style">
    <link href="'.$ur['blog_dir'].'css/timeline.css?'.time().'" rel="stylesheet" id="style">';


echo '</head>';
if($ur["datapage"]){ 
    echo '<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="'.$ur["datapage"].'">';
	}else{
	echo '<body class="body-scroll d-flex flex-column h-100 menu-overlay">';
	}

if($ur["screenloader"]===1){
    echo '<div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <div class="icon icon-100 mb-4 rounded-circle">
                        <img src="img/jateng7.gif" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
      </div>';
    }else{


    }
 
if(isset($_GET["inp"]) || isset($_GET["page"]) || isset($_GET["bm"])){

	echo '<main class="flex-shrink-0 main">';


	
	//$ur["footer"] = "";
}else{

	echo '
    <main class="flex-shrink-0 main has-footer">';

//navbar($ur);
	
}

echo '<div class="backdrop"></div>';
}

function headbirthday(){
echo '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Happy Birthday!!! :)</title>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" href="css/birth.css?'.time().'">
</head>

<body>';	
	
	
}
//echo erDebug($ur);
