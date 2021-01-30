
<?php

$indexbm = array("baturetno"=>"2","bulukerto"=>"3","eramoko"=>"4","jatipurno"=>"5","ngadirojo2"=>"6","pracimantoro"=>"7","banjarsari3"=>"8","bendosari"=>"9","colomadu"=>"10","grogol"=>"11","selogiri"=>"12","kebonarum2"=>"13","klatentengah"=>"14","prambanan"=>"15","pedan"=>"16","trucuk"=>"17","karangpandan"=>"18","karanganyar2"=>"19","pasarkliwon"=>"20","tawangmangu"=>"21","jaten"=>"22");


function erDebug($var, $title='', $return=false) {
	if ($return) return highlight_string($title.': '.print_r($var, true), true);
	highlight_string($title.': '.print_r($var, true));
}

function jsonArea($areabm){
$url = "https://spreadsheets.google.com/feeds/list/1Md5Q7S0pTMF0Ftb9U-Wor_ywQdL5HsuB2fryXUPwZ-8/2/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];

$search = $areabm;
$jsondata2 = array_filter($jsondata, function ($var) use ($search) {
    if (stripos($var['gsx$area']['$t'], $search) !== false) {
        return true;
    }
    return false;
});

foreach($jsondata2 as $key => $value){
	      //echo erDebug($value);
$updated = $value['updated']['$t'];
$area=$value['gsx$area']['$t'];
$cluster=$value['gsx$cluster']['$t'];
$disbblminput=$value['gsx$disbblminput']['$t'];
$disbdisbmtd=$value['gsx$disbdisbmtd']['$t'];
$disbdisbtoday=$value['gsx$disbdisbtoday']['$t'];
$disbgrowth=$value['gsx$disbgrowth']['$t'];
$disbohall=$value['gsx$disbohall']['$t'];
$disbpipeline=$value['gsx$disbpipeline']['$t'];
$disbtotalini=$value['gsx$disbtotalini']['$t'];
$disbtotaloh=$value['gsx$disbtotaloh']['$t'];
$gap=$value['gsx$gap']['$t'];
$inidisbjn=$value['gsx$inidisbjn']['$t'];
$inidisbsl=$value['gsx$inidisbsl']['$t'];
$inidisbtu=$value['gsx$inidisbtu']['$t'];
$inidisbwbc=$value['gsx$inidisbwbc']['$t'];
$ininoajn=$value['gsx$ininoajn']['$t'];
$ininoasl=$value['gsx$ininoasl']['$t'];
$ininoatu=$value['gsx$ininoatu']['$t'];
$ininoawbc=$value['gsx$ininoawbc']['$t'];
$noablminput=$value['gsx$noablminput']['$t'];
$noadisbmtd=$value['gsx$noadisbmtd']['$t'];
$noadisbtoday=$value['gsx$noadisbtoday']['$t'];
$noagrowth=$value['gsx$noagrowth']['$t'];
$noaohall=$value['gsx$noaohall']['$t'];
$noapipeline=$value['gsx$noapipeline']['$t'];
$noatotalini=$value['gsx$noatotalini']['$t'];
$noatotaloh=$value['gsx$noatotaloh']['$t'];
$ohdisbjn=$value['gsx$ohdisbjn']['$t'];
$ohdisbsl=$value['gsx$ohdisbsl']['$t'];
$ohdisbtu=$value['gsx$ohdisbtu']['$t'];
$ohdisbwbc=$value['gsx$ohdisbwbc']['$t'];
$ohnoajn=$value['gsx$ohnoajn']['$t'];
$ohnoasl=$value['gsx$ohnoasl']['$t'];
$ohnoatu=$value['gsx$ohnoatu']['$t'];
$ohnoawbc=$value['gsx$ohnoawbc']['$t'];
$target=$value['gsx$target']['$t'];

            


}  

//echo erDebug($jsondata);

}

?>
