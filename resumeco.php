<?php
if(isset($_GET['id'])){
	$ur['title'] = "SUMMARY OF &nbsp;".strtoupper($_GET['id']);
}else{
	$ur['title'] = "CO Rating";
}


include 'header.php';

            
            


//$dataur = "https://spreadsheets.google.com/feeds/list/1PGEl82nfwTA0iUoV5OGZBCQ-SF0vb80MvhoZ7Tg0FDk/3/public/full/cpzh4";
//echo uniID($dataur);


	if(isset($_GET['id'])){
		 $page = $_GET['id'];
     resumeviewProfile($page);
     }else{
     resumeData();
     }
	   

include 'footer.php';
?>