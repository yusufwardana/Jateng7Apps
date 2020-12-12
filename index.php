<?php

//session_start();
require("header.php");
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		

		switch ($page) {
			case 'perf':
			  $ur['title'] = "Report Daily Perform";
			  $ur['active1'] = "";
			  $ur['active2'] = "";
			  $ur['active3'] = "";
        $gForm = 'https://docs.google.com/forms/d/e/1FAIpQLSfLZQtAkMDXPtKNpMRQrc3zrfZjrm0c6HP92Lu7kz1azu6Ikw/viewform';
				pageheader($ur);
				include "performance.php";
				break;
			case 'rank':
			  $ur['title'] = "Rating Perform";
			  $ur['active1'] = "";
			  $ur['active2'] = "active";
			  $ur['active3'] = "";
			  include 'header.php';
				include "ranking.php";
				include'footer.php';
				break;
			case 'calltree':
			  $ur['title'] = "Report Call Tree";
			  $ur['active1'] = "";
			  $ur['active2'] = "";
			  $ur['active3'] = "";
			  //$gForm = $gCalltree;
			  $gForm = 'https://docs.google.com/forms/d/e/1FAIpQLScn2FxRQJZ17mzMlSmGFRIxatfoyS3VQRlaZinIo9-geQURzw/viewform?usp=sf_link';
			  include 'header.php';
				include "formdaily.php";
				include'footer.php';
				break;
			case 'backdate':
			  $ur[title] = "Report Backdate";
			  $ur['active1'] = "";
			  $ur['active2'] = "";
			  $ur['active3'] = "";
			  $gForm = 'https://docs.google.com/forms/d/e/1FAIpQLScful8ROlCdlwxn3psQYNkSqFfGbqlJ8iHbM_rdGGXNrt-bCg/viewform?usp=sf_link';
			  include 'header.php';
				include "formdaily.php";
				include'footer.php';
				break;
			case 'target':
			  $ur[title] = "Report Backdate";
			  $ur['active1'] = "";
			  $ur['active2'] = "";
			  $ur['active3'] = "";
			  $gForm = 'https://docs.google.com/forms/d/e/1FAIpQLSdM0HXV7PsHWu9ALIBpkTHW7IUCcXeEhwwlv5xY_j7OAI_vvg/viewform?usp=sf_link';
			  include 'header.php';
				include "formdaily.php";
				include'footer.php';
				break;
		  case 'calc':
			  $ur['title'] = "RR Adjusted";
			  //$ur['active1'] = "";
			  //$ur['active2'] = "";
			  //$ur['active3'] = "";
			  pageheader($ur);
				include "calc.php";
				
				break;								
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}

	}
	if(isset($_GET['inp'])){
		$inp = $_GET['inp'];
			switch ($inp) {
			case 'perf':
			  $ur['title'] = "Report Daily Perform";
			  $ur['active1'] = "";
			  $ur['active2'] = "";
			  $ur['active3'] = "";
        $gForm = 'https://docs.google.com/forms/d/e/1FAIpQLSfLZQtAkMDXPtKNpMRQrc3zrfZjrm0c6HP92Lu7kz1azu6Ikw/viewform';
				pageheader($ur);
				include "formdaily.php";
				break;
						default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
				
			}
		}
	
if(!isset($_GET['page']) AND !isset($_GET['inp'])){
		$ur['title'] = "Jateng7Apps";
		$ur['active1'] = "active";
		$ur['active2'] = "";
		$ur['active3'] = "";
		pageheader($ur);
		include "main.php";

	}
require("footer.php");


?>