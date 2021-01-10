<?php
//session_start();
require("header.php");
if(isset($_GET['page'])){
	$page = $_GET['page'];
	switch ($page) {
		case 'perf':
		$ur['title'] = "Performance";
		$ur["datapage"] = "giftcards";
		pageheader($ur);
		require "performance.php";
		break;
		case 'rank':
		$ur['title'] = "Rating Perform";
		$ur["datapage"] = "homepage";
		pageheader($ur);
		require "ranking.php";
		break;
		case 'rankco':
		$ur['title'] = "Rating CO";
		$ur["datapage"] = "homepage";
		pageheader($ur);
		include "resumeco.php";
		break;
		case 'profile':
		$ur['title'] = "Dashboard";
		$ur["datapage"] = "analytics";
		pageheader($ur);
		include "profile.php";
		break;
		case 'timeline':
		$ur['title'] = "Timeline";
		$ur["datapage"] = "wallet";
		pageheader($ur);
		include "timeline.php";
		break;
		case 'thankyou':
		$ur['title'] = "";
		$ur["datapage"] = "thankyou";
		pageheader($ur);
		include "thank.php";
		break;
		case 'calc':
		$ur['title'] = "RR Adjusted";
		pageheader($ur);
		include "calc.php";
		break;
		case 'birthday':
		$ur['title'] = "Birthday";
		$ur["datapage"] = "wallet";
		pageheader($ur);
		include "birthday.php";
		break;
		default:
		echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
		break;
	}
}elseif(isset($_GET['inp'])){
	$inp = $_GET['inp'];
	switch ($inp) {
		case 'perf':
		$ur['title'] = "Report Daily Perform";
		$ur['active1'] = "";
		$ur['active2'] = "";
		$ur['active3'] = "";
		$ur["datapage"] = "wallet";
		$gForm = 'https://docs.google.com/forms/d/e/1FAIpQLSfLZQtAkMDXPtKNpMRQrc3zrfZjrm0c6HP92Lu7kz1azu6Ikw/viewform';
		pageheader($ur);
		include "formdaily.php";
		break;
		case 'datakaryawan':
		$ur['title'] = "Update Karyawan";
		$ur['active1'] = "";
		$ur['active2'] = "";
		$ur['active3'] = "";
		$ur["datapage"] = "wallet";
		$gForm = 'https://docs.google.com/forms/d/e/1FAIpQLSd0QmMlbUpHz7pjQr15ifQzUONhW8FHEz41wRr2DlrAeSp_WA/viewform';
		pageheader($ur);
		include "formdaily.php";
		break;
		default:
		echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
		break;
		}
}elseif(isset($_GET['bm'])){
	$page = $_GET['bm'];
	$ur["datapage"]= "homepage";
	$ur["title"] = $page;
	pageheader($ur);
	switch ($page) {
		case 'baturetno':
		$area = 2;
		echo resumeArea($area);
		break;
		case 'bulukerto':
		$area = 3;
		echo resumeArea($area);
		break;
		case 'eramoko':
		$area = 4;
		echo resumeArea($area);
		break;
		case 'jatipurno':
		$area = 5;
		echo resumeArea($area);
		break;
		case 'ngadirojo2':
		$area = 6;
		echo resumeArea($area);
		break;
		case 'pracimantoro':
		$area = 7;
		echo resumeArea($area);
		break;
		case 'banjarsari3':
		$area = 8;
		echo resumeArea($area);
		break;
		case 'bendosari':
		$area = 9;
		echo resumeArea($area);
		break;
		case 'colomadu':
		$area = 10;
		echo resumeArea($area);
		break;
		case 'grogol':
		$area = 11;
		echo resumeArea($area);
		break;
		case 'selogiri':
		$area = 12;
		echo resumeArea($area);
		break;
		case 'kebonarum2':
		$area = 13;
		echo resumeArea($area);
		break;
		case 'klatentengah':
		$area = 14;
		echo resumeArea($area);
		break;
		case 'prambanan':
		$area = 15;
		echo resumeArea($area);
		break;
		case 'pedan':
		$area = 16;
		echo resumeArea($area);
		break;
		case 'trucuk':
		$area = 17;
		echo resumeArea($area);
		break;
		case 'karangpandan':
		$area = 18;
		echo resumeArea($area);
		break;
		case 'karanganyar2':
		$area = 19;
		echo resumeArea($area);
		break;
		case 'pasarkliwon':
		$area = 20;
		echo resumeArea($area);
		break;
		case 'tawangmangu':
		$area = 21;
		echo resumeArea($area);
		break;
		case 'jaten':
		$area = 22;
		echo resumeArea($area);
		break;
		default:
		echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
		break;
	}
}else{
	$ur['title'] = "Jateng7Apps";
	$ur['active1'] = "active";
	$ur['active2'] = "";
	$ur['active3'] = "";
	$ur["datapage"] = "homepage";
	pageheader($ur);
	include "main.php";
}
require("footer.php");
?>