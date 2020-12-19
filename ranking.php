<?php



$url = "https://spreadsheets.google.com/feeds/list/11WuhyrUNisxM483HPrkkv8-vTN_Rsa2M36Da3B6bDFo/7/public/full?alt=json";
//$url = "https://spreadsheets.google.com/feeds/list/1hAJCJKWtiukmhXsjImuqT0LEV6vzR-MQvWkErJYNyqA/2/public/full?alt=json";
$data = file_get_contents($url);
//$json = json_decode($data,true);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];

//echo erDebug($jsondata);

echo '<div class="main-container">
<div class="container"><div class="row">
<div class="col"><div class="card mb-4">
<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
		
			<td>AREA</td>
			<td>PLAN</td>
			<td>OH ALL</td>
			
			<td>ACV</td>
		</tr>
	</thead>';
foreach($jsondata as $key => $value){
	      //echo erDebug($value);
	     // $nomer = $value['gsx$_cn6ca']['$t'];  
	      $area = $value['gsx$area']['$t'];
	      $plan = $value['gsx$plan']['$t'];
	      $ohalldisb = $value['gsx$ohalldisb']['$t'];
	     // $growth = $value['gsx$growthtoday']['$t'];
	      $acv = $value['gsx$acv']['$t'];
	     
	      
	 
echo '<tr>
			
			<td><a href=resume.php?id='.strtolower(str_replace(' ','',$area)).'>'.$area.'</a></td>
			<td>'.$plan.'</td>
			<td>'.$ohalldisb.'</td>
			
			<td>'.$acv.'</td>
		</tr>';
        
    }  
echo '</table></div></div></div></div></div></div>';
  
?>