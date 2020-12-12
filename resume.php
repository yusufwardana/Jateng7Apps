<?php
$ur['title'] = "SUMMARY OF &nbsp;".strtoupper($_GET['id']);
include 'header2.php';

            
            


	if(isset($_GET['id'])){
		$page = $_GET['id'];
		
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

    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";


	   }
	   

include 'footer2.php';
?>