<?php
            
function erDebug($var, $title='', $return=false) {
	if ($return) return highlight_string($title.': '.print_r($var, true), true);
	highlight_string($title.': '.print_r($var, true));
}
$url = "https://spreadsheets.google.com/feeds/list/1PGEl82nfwTA0iUoV5OGZBCQ-SF0vb80MvhoZ7Tg0FDk/2/public/full?alt=json";
$jsonco = "https://spreadsheets.google.com/feeds/list/1PGEl82nfwTA0iUoV5OGZBCQ-SF0vb80MvhoZ7Tg0FDk/1/public/full/cokwr?alt=json";

function parsingData($ur){
$data = file_get_contents($ur);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];
return $jsondata;

}

function parsingDataCO($ur){
$data = file_get_contents($ur);
$json = json_decode($data,true);
$jsondata = $json['entry'];
return $jsondata;

}
function parsingXML($xml){
$data = file_get_contents($xml);
$dataXML = simplexml_load_string($data);
foreach($dataXML as $key=>$value){
	$content = $value['content'];
	echo $content;
}

}


$data = parsingData($url);


function resumeData($url){
//$url = "https://spreadsheets.google.com/feeds/list/1hAJCJKWtiukmhXsjImuqT0LEV6vzR-MQvWkErJYNyqA/".$area."/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];

// fixed nama
// $jsondata = array_filter($jsondata, function($var) {
//   return $var['gsx$namaco']['$t'] === 'SITI MUNAWAROH';
// });

//search tanggal,nama
//$search = '10/11/2020';
$search = 'WAHYU';
$jsondata = array_filter($jsondata, function ($var) use ($search) {
    if (stripos($var['gsx$namaco']['$t'], $search) !== false) {
        return true;
    } elseif (stripos($var['gsx$tanggal']['$t'], $search) !== false) {
        return true;
    }
    return false;
});

echo '<div class="row"><div class="col-12 col-md-6"><div class="card mb-4">
<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<td>TGL</td>
			<td>NAMA CO</td>
			<td>DISB MTD</td>
		</tr>
	</thead>';
foreach($jsondata as $key => $value){
	      //echo erDebug($value);
	      $tgl = $value['gsx$tanggal']['$t'];  
	      $namaco = $value['gsx$namaco']['$t'];
	      $disbMTD = $value['gsx$noadisbursemtd']['$t'];
echo '<tr>
			<td>'.$tgl.'</td>
			<td>'.$namaco.'</td>
			<td>'.$disbMTD.'</td>
		</tr>';
    }  

}




//echo erDebug(parsingDataCO($jsonco));
echo erDebug(parsingData($url));
//echo parsingXML($url2);
//echo parsingXML($url2);

?>