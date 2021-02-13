<?php

$ur = array();
$ur["screenloader"] = 1;



$ur['blog_dir']=str_replace('\\','/',dirname($_SERVER['SCRIPT_NAME']));
if($ur['blog_dir']!='/') $ur['blog_dir']=$ur['blog_dir'].'/';

function erDebug($var, $title='', $return=false) {
	if ($return) return highlight_string($title.': '.print_r($var, true), true);
	highlight_string($title.': '.print_r($var, true));
}
function resumeNIK($nik){
$url = "https://spreadsheets.google.com/feeds/list/1PGEl82nfwTA0iUoV5OGZBCQ-SF0vb80MvhoZ7Tg0FDk/4/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];
//echo erDebug($jsondata);
$search = $nik;
$jsondata2 = array_filter($jsondata, function ($var) use ($search) {
    if (stripos($var['gsx$nik']['$t'], $search) !== false) {
        return true;
    }
    return false;
});

foreach($jsondata2 as $key => $value){
	      //echo erDebug($value);
       $area=$value['gsx$area']['$t'];
       $mms=$value['gsx$mms']['$t'];
       $co=$value['gsx$co']['$t'];
       $ohnoajn=$value['gsx$ohnoajn']['$t'];
       $ohdisbjn=$value['gsx$ohdisbjn']['$t'];
       $ohnoasl=$value['gsx$ohnoasl']['$t'];
       $ohdisbsl=$value['gsx$ohdisbsl']['$t'];
       $ohnoawbc=$value['gsx$ohnoawbc']['$t'];
       $ohdisbwbc=$value['gsx$ohdisbwbc']['$t'];
       $ohnoatu=$value['gsx$ohnoatu']['$t'];
       $ohdisbtu=$value['gsx$ohdisbtu']['$t'];
       $ininoajn=$value['gsx$ininoajn']['$t'];
       $inidisbjn=$value['gsx$inidisbjn']['$t'];
       $ininoasl=$value['gsx$ininoasl']['$t'];
       $inidisbsl=$value['gsx$inidisbsl']['$t'];
       $ininoawbc=$value['gsx$ininoawbc']['$t'];
       $inidisbwbc=$value['gsx$inidisbwbc']['$t'];
       $ininoatu=$value['gsx$ininoatu']['$t'];
       $inidisbtu=$value['gsx$inidisbtu']['$t'];
       $noadisbtoday=$value['gsx$noadisbtoday']['$t'];
       $disbdisbtoday=$value['gsx$disbdisbtoday']['$t'];
       $noadisbmtd=$value['gsx$noadisbmtd']['$t'];
       $disbdisbmtd=$value['gsx$disbdisbmtd']['$t'];
       $noapipeline=$value['gsx$noapipeline']['$t'];
       $disbpipeline=$value['gsx$disbpipeline']['$t'];
       $noablminput=$value['gsx$noablminput']['$t'];
       $disbblminput=$value['gsx$disbblminput']['$t'];
       $noatotaloh=$value['gsx$noatotaloh']['$t'];
       $disbtotaloh=$value['gsx$disbtotaloh']['$t'];
       $noatotalini=$value['gsx$noatotalini']['$t'];
       $disbtotalini=$value['gsx$disbtotalini']['$t'];
       $tohnoa=$value['gsx$noagrowth']['$t'];
       $tohdisb=$value['gsx$disbgrowth']['$t'];
echo '<div class="row"><div class="col"><div class="card mb-4">
<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<td>'.$co.'</td>
			<td>NOA</td>
			<td>DISB</td>
		</tr>
	</thead>
	';
echo '
<tr><td>OH JN</td><td>'.$ohnoajn.'</td><td>'.$ohdisbjn.'</td></tr>
<tr><td>OH WBC</td><td>'.$ohnoawbc.'</td><td>'.$ohdisbwbc.'</td></tr>
<tr><td>OH SL</td><td>'.$ohnoasl.'</td><td>'.$ohdisbsl.'</td></tr>
<tr><td>OH TU</td><td>'.$ohnoatu.'</td><td>'.$ohdisbtu.'</td></tr>
<tr><td>TOTAL OH</td><td>'.$noatotaloh.'</td><td>'.$disbtotaloh.'</td></tr>
<tr><td>INISIATIF JN</td><td>'.$ininoajn.'</td><td>'.$inidisbjn.'</td></tr>
<tr><td>INISISATIF WBC</td><td>'.$ininoawbc.'</td><td>'.$inidisbwbc.'</td></tr>
<tr><td>INISIATIF SL</td><td>'.$ininoasl.'</td><td>'.$inidisbsl.'</td></tr>
<tr><td>INISIATIF TU</td><td>'.$ininoatu.'</td><td>'.$inidisbtu.'</td></tr>
<tr><td>TOTAL INISIATIF</td><td>'.$noatotalini.'</td><td>'.$disbtotalini.'</td></tr>
<tr><td>DISB TODAY</td><td>'.$noadisbtoday.'</td><td>'.$disbdisbtoday.'</td></tr>
<tr><td>DISB MTD</td><td>'.$noadisbmtd.'</td><td>'.$disbdisbmtd.'</td></tr>
<tr><td>OH BLM DISB</td><td>'.$noapipeline.'</td><td>'.$disbpipeline.'</td></tr>
<tr><td>ONHAND ALL</td><td>'.$tohnoa.'</td><td>'.$tohdisb.'</td></tr>


';
    }  

}
function resumeProfile($nik){
$url = "https://spreadsheets.google.com/feeds/list/1Md5Q7S0pTMF0Ftb9U-Wor_ywQdL5HsuB2fryXUPwZ-8/1/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];
//echo erDebug($jsondata);
$search = $nik;
$jsondata2 = array_filter($jsondata, function ($var) use ($search) {
    if (stripos($var['gsx$nik']['$t'], $search) !== false) {
        return true;
    }
    return false;
});

foreach($jsondata2 as $key => $value){
	      //echo erDebug($value);
       $area=$value['gsx$area']['$t'];
       $mms=$value['gsx$mms']['$t'];
       $co=$value['gsx$co']['$t'];
       $ohnoajn=$value['gsx$ohnoajn']['$t'];
       $ohdisbjn=$value['gsx$ohdisbjn']['$t'];
       $ohnoasl=$value['gsx$ohnoasl']['$t'];
       $ohdisbsl=$value['gsx$ohdisbsl']['$t'];
       $ohnoawbc=$value['gsx$ohnoawbc']['$t'];
       $ohdisbwbc=$value['gsx$ohdisbwbc']['$t'];
       $ohnoatu=$value['gsx$ohnoatu']['$t'];
       $ohdisbtu=$value['gsx$ohdisbtu']['$t'];
       $ininoajn=$value['gsx$ininoajn']['$t'];
       $inidisbjn=$value['gsx$inidisbjn']['$t'];
       $ininoasl=$value['gsx$ininoasl']['$t'];
       $inidisbsl=$value['gsx$inidisbsl']['$t'];
       $ininoawbc=$value['gsx$ininoawbc']['$t'];
       $inidisbwbc=$value['gsx$inidisbwbc']['$t'];
       $ininoatu=$value['gsx$ininoatu']['$t'];
       $inidisbtu=$value['gsx$inidisbtu']['$t'];
       $noadisbtoday=$value['gsx$noadisbtoday']['$t'];
       $disbdisbtoday=$value['gsx$disbdisbtoday']['$t'];
       $noadisbmtd=$value['gsx$noadisbmtd']['$t'];
       $disbdisbmtd=$value['gsx$disbdisbmtd']['$t'];
       $noapipeline=$value['gsx$noapipeline']['$t'];
       $disbpipeline=$value['gsx$disbpipeline']['$t'];
       $noablminput=$value['gsx$noablminput']['$t'];
       $disbblminput=$value['gsx$disbblminput']['$t'];
       $noatotaloh=$value['gsx$noatotaloh']['$t'];
       $disbtotaloh=$value['gsx$disbtotaloh']['$t'];
       $noatotalini=$value['gsx$noatotalini']['$t'];
       $disbtotalini=$value['gsx$disbtotalini']['$t'];
       $tohnoa=$value['gsx$noaohall']['$t'];
       $tohdisb=$value['gsx$disbohall']['$t'];
echo'
          <div class="container mb-4">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="mb-1">Perform Bulan ini: Rp '.$tohdisb.'</h6>
                                        <p class="text-secondary">Currently Monthly Achieved: <span class="text-success">20%</span></p>

                                    </div>
                                </div>
                                <div class="progress h-5 mt-3">
                                    <div class="progress-bar bg-default" role="progressbar" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
            
            <div class="container mb-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="mb-0">ONHAND</h6>
                        <p class="text-secondary">Currently monthly : <span class="text-success">'.$noatotaloh.' Noa, '.$disbtotaloh.'</span></p>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/jn.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Nasabah Baru</h6>
                                        <p class="small text-secondary">'.$ohnoajn.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$ohdisbjn.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/wbc.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">WBC</h6>
                                        <p class="small text-secondary">'.$ohnoawbc.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$ohdisbwbc.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/sl.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Siklus Lanjutan</h6>
                                        <p class="small text-secondary">'.$ohnoasl.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$ohdisbsl.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/tu.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Top Up</h6>
                                        <p class="small text-secondary">'.$ohnoatu.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$ohdisbtu.'</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="container mb-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="mb-0">INISIATIF</h6>
                        <p class="text-secondary">Currently monthly : <span class="text-success">'.$noatotalini.' Noa, '.$disbtotalini.'</span></p>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/jn.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">New JN</h6>
                                        <p class="small text-secondary">'.$ininoajn.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$inidisbjn.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/wbc.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">WBC</h6>
                                        <p class="small text-secondary">'.$ininoawbc.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$inidisbwbc.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/sl.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Siklus Lanjutan</h6>
                                        <p class="small text-secondary">'.$ininoasl.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$inidisbsl.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/tu.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Top Up</h6>
                                        <p class="small text-secondary">'.$ininoatu.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-danger">'.$inidisbtu.'</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>           
            ';
            
    }  

}
function namadepan($str){
	$pecah=explode(" ",$str);
	$nama = $pecah[0];
	return $nama;
}
//Ambil Detail dari Ranking CO
function resumeviewProfile($nik){
$url = "https://spreadsheets.google.com/feeds/list/1Md5Q7S0pTMF0Ftb9U-Wor_ywQdL5HsuB2fryXUPwZ-8/1/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];
//echo erDebug($jsondata);
$search = $nik;
$jsondata2 = array_filter($jsondata, function ($var) use ($search) {
    if (stripos($var['gsx$nik']['$t'], $search) !== false) {
        return true;
    }
    return false;
});

foreach($jsondata2 as $key => $value){
	      //echo erDebug($value);
       $area=$value['gsx$area']['$t'];
       $mms=$value['gsx$mms']['$t'];
       $co=$value['gsx$co']['$t'];
       $ohnoajn=$value['gsx$ohnoajn']['$t'];
       $ohdisbjn=$value['gsx$ohdisbjn']['$t'];
       $ohnoasl=$value['gsx$ohnoasl']['$t'];
       $ohdisbsl=$value['gsx$ohdisbsl']['$t'];
       $ohnoawbc=$value['gsx$ohnoawbc']['$t'];
       $ohdisbwbc=$value['gsx$ohdisbwbc']['$t'];
       $ohnoatu=$value['gsx$ohnoatu']['$t'];
       $ohdisbtu=$value['gsx$ohdisbtu']['$t'];
       $ininoajn=$value['gsx$ininoajn']['$t'];
       $inidisbjn=$value['gsx$inidisbjn']['$t'];
       $ininoasl=$value['gsx$ininoasl']['$t'];
       $inidisbsl=$value['gsx$inidisbsl']['$t'];
       $ininoawbc=$value['gsx$ininoawbc']['$t'];
       $inidisbwbc=$value['gsx$inidisbwbc']['$t'];
       $ininoatu=$value['gsx$ininoatu']['$t'];
       $inidisbtu=$value['gsx$inidisbtu']['$t'];
       $noadisbtoday=$value['gsx$noadisbtoday']['$t'];
       $disbdisbtoday=$value['gsx$disbdisbtoday']['$t'];
       $noadisbmtd=$value['gsx$noadisbmtd']['$t'];
       $disbdisbmtd=$value['gsx$disbdisbmtd']['$t'];
       $noapipeline=$value['gsx$noapipeline']['$t'];
       $disbpipeline=$value['gsx$disbpipeline']['$t'];
       $noablminput=$value['gsx$noablminput']['$t'];
       $disbblminput=$value['gsx$disbblminput']['$t'];
       $noatotaloh=$value['gsx$noatotaloh']['$t'];
       $disbtotaloh=$value['gsx$disbtotaloh']['$t'];
       $noatotalini=$value['gsx$noatotalini']['$t'];
       $disbtotalini=$value['gsx$disbtotalini']['$t'];
       $tohnoa=$value['gsx$noaohall']['$t'];
       $tohdisb=$value['gsx$disbohall']['$t'];
echo'
        <!-- page content start -->
        <div class="container-fluid px-0">
            <div class="card overflow-hidden">
                            <div class="card bg-pf text-primary">
                                <div class="background opacity-30">
                                    <img src="img/image11.png" alt="">
                                </div>
                                <div class="card-body text-white">
                                     
                                    <p class="text-mute"><h5>'.greeting().'</h5></p><br><br>
                                    <div class="text-right">
                                        <div class="btn btn-sm btn-default rounded">JATENG7</div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
        <div class="container-fluid top-70 text-center mb-4">
            <div class="avatar avatar-140 rounded-circle mx-auto shadow">
                <div class="background">
                    <img src="img/user1.png" alt="">
                </div>
            </div>
        </div>

       <div class="container mb-4 text-center text-white">
            <h5 class="mb-1">'.$co.'</h5>
            <p>'.$mms.'</p>
            <p class="mb-1">'.$area.'</p>
        </div>



          <div class="container mb-4">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="mb-1">Perform Bulan ini: Rp '.$tohdisb.'</h6>
                                        <p class="text-secondary">Currently Monthly Achieved: <span class="text-success">20%</span></p>

                                    </div>
                                </div>
                                <div class="progress h-5 mt-3">
                                    <div class="progress-bar bg-default" role="progressbar" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
            
            <div class="container mb-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="mb-0">ONHAND</h6>
                        <p class="text-secondary">Currently monthly : <span class="text-success">'.$noatotaloh.' Noa, '.$disbtotaloh.'</span></p>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/jn.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Nasabah Baru</h6>
                                        <p class="small text-secondary">'.$ohnoajn.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$ohdisbjn.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/wbc.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">WBC</h6>
                                        <p class="small text-secondary">'.$ohnoawbc.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$ohdisbwbc.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/sl.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Siklus Lanjutan</h6>
                                        <p class="small text-secondary">'.$ohnoasl.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$ohdisbsl.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/tu.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Top Up</h6>
                                        <p class="small text-secondary">'.$ohnoatu.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$ohdisbtu.'</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="container mb-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="mb-0">INISIATIF</h6>
                        <p class="text-secondary">Currently monthly : <span class="text-success">'.$noatotalini.' Noa, '.$disbtotalini.'</span></p>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/jn.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">New JN</h6>
                                        <p class="small text-secondary">'.$ininoajn.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$inidisbjn.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/wbc.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">WBC</h6>
                                        <p class="small text-secondary">'.$ininoawbc.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$inidisbwbc.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/sl.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Siklus Lanjutan</h6>
                                        <p class="small text-secondary">'.$ininoasl.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$inidisbsl.'</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background">
                                                <img src="img/tu.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">Top Up</h6>
                                        <p class="small text-secondary">'.$ininoatu.' Noa</p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-danger">'.$inidisbtu.'</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>           
            ';
            
    }  

}

//Ambil Ranking CO
function resumeData(){
$url = "https://spreadsheets.google.com/feeds/list/1Md5Q7S0pTMF0Ftb9U-Wor_ywQdL5HsuB2fryXUPwZ-8/1/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];
//echo erDebug($jsondata);
echo '<div class="main-container">
<div class="container mb-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="mb-0">Rating Produktivitas</h6>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <ul class="list-group list-group-flush">';
        foreach($jsondata as $key => $value){
	      $namaco = $value['gsx$co']['$t'];
	      $disb = $value['gsx$disbtotaloh']['$t'];
	      $nik = $value['gsx$nik']['$t'];
	      $mms = $value['gsx$mms']['$t'];                        
                   
                      echo '<li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-40 rounded">
                                            <div class="background" style="background-image: url(&quot;img/user2.png&quot;);">
                                                <img src="img/user2.png" alt="" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">'.$namaco.'</h6>
                                        <p class="small text-secondary">'.$mms.', <a href="?page=rankco&id='.$nik.'">Detail</a></p>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-success">'.$disb.'</h6>
                                    </div>
                                </div>
                            </li>';
        }
                       echo'                                
                        </ul>
                    </div>
                </div>
            </div>

</div>';
}

function uniID($url){
	$urlData = parse_url($url); 
	$parameters = array();
	foreach($urlData as $parameter) {
		$param = explode("/", $parameter);
		}
  return $param[7];
}
function summaryCO($id){
$url = "https://spreadsheets.google.com/feeds/list/1PGEl82nfwTA0iUoV5OGZBCQ-SF0vb80MvhoZ7Tg0FDk/4/public/full/".$id."?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$value = $json['entry'];
echo erDebug($value);
echo '<div class="row"><div class="col"><div class="card mb-4">
<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<td>#</td>
			<td>NOA</td>
			<td>DISB</td>
		</tr>
	</thead>
	';

       $area=$value['gsx$area']['$t'];
       $mms=$value['gsx$mms']['$t'];
       $co=$value['gsx$co']['$t'];
       $ohnoajn=$value['gsx$ohnoajn']['$t'];
       $ohdisbjn=$value['gsx$ohdisbjn']['$t'];
       $ohnoasl=$value['gsx$ohnoasl']['$t'];
       $ohdisbsl=$value['gsx$ohdisbsl']['$t'];
       $ohnoawbc=$value['gsx$ohnoawbc']['$t'];
       $ohdisbwbc=$value['gsx$ohdisbwbc']['$t'];
       $ohnoatu=$value['gsx$ohnoatu']['$t'];
       $ohdisbtu=$value['gsx$ohdisbtu']['$t'];
       $ininoajn=$value['gsx$ininoajn']['$t'];
       $inidisbjn=$value['gsx$inidisbjn']['$t'];
       $ininoasl=$value['gsx$ininoasl']['$t'];
       $inidisbsl=$value['gsx$inidisbsl']['$t'];
       $ininoawbc=$value['gsx$ininoawbc']['$t'];
       $inidisbwbc=$value['gsx$inidisbwbc']['$t'];
       $ininoatu=$value['gsx$ininoatu']['$t'];
       $inidisbtu=$value['gsx$inidisbtu']['$t'];
       $noadisbtoday=$value['gsx$noadisbtoday']['$t'];
       $disbdisbtoday=$value['gsx$disbdisbtoday']['$t'];
       $noadisbmtd=$value['gsx$noadisbmtd']['$t'];
       $disbdisbmtd=$value['gsx$disbdisbmtd']['$t'];
       $noapipeline=$value['gsx$noapipeline']['$t'];
       $disbpipeline=$value['gsx$disbpipeline']['$t'];
       $noablminput=$value['gsx$noablminput']['$t'];
       $disbblminput=$value['gsx$disbblminput']['$t'];
       $noatotaloh=$value['gsx$noatotaloh']['$t'];
       $disbtotaloh=$value['gsx$disbtotaloh']['$t'];
       $noatotalini=$value['gsx$noatotalini']['$t'];
       $disbtotalini=$value['gsx$disbtotalini']['$t'];
       $tohnoa=$value['gsx$noagrowth']['$t'];
       $tohdisb=$value['gsx$disbgrowth']['$t'];
echo '
<tr><td>OH JN</td><td>'.$ohnoajn.'</td><td>'.$ohdisbjn.'</td></tr>
<tr><td>OH WBC</td><td>'.$ohnoawbc.'</td><td>'.$ohdisbwbc.'</td></tr>
<tr><td>OH SL</td><td>'.$ohnoasl.'</td><td>'.$ohdisbsl.'</td></tr>
<tr><td>OH TU</td><td>'.$ohnoatu.'</td><td>'.$ohdisbtu.'</td></tr>
<tr><td>TOTAL OH</td><td>'.$noatotaloh.'</td><td>'.$disbtotaloh.'</td></tr>
<tr><td>INISIATIF JN</td><td>'.$ininoajn.'</td><td>'.$inidisbjn.'</td></tr>
<tr><td>INISISATIF WBC</td><td>'.$ininoawbc.'</td><td>'.$inidisbwbc.'</td></tr>
<tr><td>INISIATIF SL</td><td>'.$ininoasl.'</td><td>'.$inidisbsl.'</td></tr>
<tr><td>INISIATIF TU</td><td>'.$ininoatu.'</td><td>'.$inidisbtu.'</td></tr>
<tr><td>TOTAL INISIATIF</td><td>'.$noatotalini.'</td><td>'.$disbtotalini.'</td></tr>
<tr><td>DISB TODAY</td><td>'.$noadisbtoday.'</td><td>'.$disbdisbtoday.'</td></tr>
<tr><td>DISB MTD</td><td>'.$noadisbmtd.'</td><td>'.$disbdisbmtd.'</td></tr>
<tr><td>OH BLM DISB</td><td>'.$noapipeline.'</td><td>'.$disbpipeline.'</td></tr>
<tr><td>ONHAND ALL</td><td>'.$tohnoa.'</td><td>'.$tohdisb.'</td></tr>


';
        
   
echo '</table></div></div></div></div>';
} 

function greeting($return=false){

$jam = date('H:i');
if ($jam > '05:30' && $jam < '10:00') {
    $salam = 'Morning..';
} elseif ($jam >= '10:00' && $jam < '15:00') {
    $salam = 'Afternoon..';
} elseif ($jam < '18:00') {
    $salam = 'Evening..';
} else {
    $salam = 'Night..';
}

//tampilkan pesan
$ucapan = 'Good '.$salam;
return $ucapan;
}

function resumeArea($area){
$url = "https://spreadsheets.google.com/feeds/list/1hAJCJKWtiukmhXsjImuqT0LEV6vzR-MQvWkErJYNyqA/".$area."/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];
echo '<div class="row"><div class="col-12 col-md-6"><div class="card mb-4">
<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<td>#</td>
			<td>NOA</td>
			<td>DISB</td>
		</tr>
	</thead>';
foreach($jsondata as $key => $value){
       $param=$value['gsx$summary']['$t'];
       $noa=$value['gsx$noa']['$t'];
       $disb=$value['gsx$disb']['$t'];
       
	
echo '<tr>
			<td>'.$param.'</td>
			<td>'.$noa.'</td>
			<td>'.$disb.'</td>
		</tr>';
        
    }  
echo '</table></div></div></div></div>';
}
  

function navbar($ur){
	echo '<div class="main-menu">
        <div class="row mb-4 no-gutters">
            <div class="col-auto"><button class="btn btn-link btn-40 btn-close text-white"><span class="material-icons">chevron_left</span></button></div>
            <div class="col-auto">
                <div class="avatar avatar-30 rounded-circle position-relative">
                    <figure class="background">
                        <img src="img/TEPAT.gif" alt="">
                    </figure>
                </div>
            </div>
            <div class="col pl-3 text-left align-self-center">
                <h5 class="mb-1">BTPN Syariah</h5>
                <p class="small text-default-secondary">JATENG 7</p>
            </div>
        </div>
        <div class="menu-container">


            <ul class="nav nav-pills flex-column ">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div>
                            <span class="material-icons icon">account_balance</span>
                            About
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div>
                            <span class="material-icons icon">insert_chart</span>
                            Help
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div>
                            <span class="material-icons icon">perm_contact_calendar</span>
                            Contact us
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <div class="text-center">
                   <a href="/logout.php" class="mb-2 btn btn-default">Sign out</a>
                </div>
            </ul>

        </div>
    </div>';
	
	
}
function footermenu($ur){
$t = microtime(true);
//$data = cache_get(‘my_key’);
//echo microtime(true) - $t;
// 0.00013017654418945
//$t = microtime(true);
//$data = apc_fetch(‘my_key’);
// 0.061056137084961
	echo'
    <div class="footer">
        <div class="row no-gutters justify-content-center">
            <div class="col-auto">
                <a href="/" class="">
                    <i class="material-icons">home</i>
                    <p>Home</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="/?page=rank" class="">
                    <i class="material-icons">insert_chart_outline</i>
                    <p>Analytics</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="/?page=rankco" class="">
                    <i class="material-icons">elevator</i>
                    <p>Rating</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="/?page=profile" class="">
                    <i class="material-icons">account_circle</i>
                    <p>Profile</p>
                </a>
            </div>
        </div>
    </div>';
	
	
}

function bagi($disb,$noa){
	$rata=($disb!=0)?($disb/$noa):0;
	$rata=number_format($rata,0);
	return $rata;	
}
function insentif($jn,$sl,$wbc,$tu,$grade){
	
	
	
}
function jsonArea($param,$sheet){
$url = "https://spreadsheets.google.com/feeds/list/1Md5Q7S0pTMF0Ftb9U-Wor_ywQdL5HsuB2fryXUPwZ-8/".$sheet."/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];

$search = $param;
$jsondata2 = array_filter($jsondata, function ($var) use ($search) {
    if (stripos($var['gsx$area']['$t'], $search) !== false) {
        return true;   
  }
    return false;
});

foreach($jsondata2 as $key => $value){
$updated = date('d/m/Y h:i A', strtotime($value['updated']['$t']));
$area=$value['gsx$area']['$t'];
//$cluster=$value['gsx$cluster']['$t'];
$cluster = ($sheet!=1)?($value['gsx$cluster']['$t']):($value['gsx$area']['$t']);
$disbblminput=(int)$value['gsx$disbblminput']['$t'];
$disbdisbmtd=(int)$value['gsx$disbdisbmtd']['$t'];
$disbdisbtoday=(int)$value['gsx$disbdisbtoday']['$t'];
$disbgrowth=(int)$value['gsx$disbgrowth']['$t'];
$disbohall=(int)$value['gsx$disbohall']['$t'];
$disbpipeline=(int)$value['gsx$disbpipeline']['$t'];
$disbtotalini=(int)$value['gsx$disbtotalini']['$t'];
$disbtotaloh=(int)$value['gsx$disbtotaloh']['$t'];
$gap=(int)$value['gsx$gap']['$t'];
$inidisbjn=(int)$value['gsx$inidisbjn']['$t'];
$inidisbsl=(int)$value['gsx$inidisbsl']['$t'];
$inidisbtu=(int)$value['gsx$inidisbtu']['$t'];
$inidisbwbc=(int)$value['gsx$inidisbwbc']['$t'];
$ininoajn=(int)$value['gsx$ininoajn']['$t'];
$ininoasl=(int)$value['gsx$ininoasl']['$t'];
$ininoatu=(int)$value['gsx$ininoatu']['$t'];
$ininoawbc=(int)$value['gsx$ininoawbc']['$t'];
$noablminput=(int)$value['gsx$noablminput']['$t'];
$noadisbmtd=(int)$value['gsx$noadisbmtd']['$t'];
$noadisbtoday=(int)$value['gsx$noadisbtoday']['$t'];
$noagrowth=(int)$value['gsx$noagrowth']['$t'];
$noaohall=(int)$value['gsx$noaohall']['$t'];
$noapipeline=(int)$value['gsx$noapipeline']['$t'];
$noatotalini=(int)$value['gsx$noatotalini']['$t'];
$noatotaloh=(int)$value['gsx$noatotaloh']['$t'];
$ohdisbjn=(int)$value['gsx$ohdisbjn']['$t'];
$ohdisbsl=(int)$value['gsx$ohdisbsl']['$t'];
$ohdisbtu=(int)$value['gsx$ohdisbtu']['$t'];
$ohdisbwbc=(int)$value['gsx$ohdisbwbc']['$t'];
$ohnoajn= (int)$value['gsx$ohnoajn']['$t'];
$ohnoasl=(int)$value['gsx$ohnoasl']['$t'];
$ohnoatu=(int)$value['gsx$ohnoatu']['$t'];
$ohnoawbc=(int)$value['gsx$ohnoawbc']['$t'];
$target=(int)$value['gsx$target']['$t'];
$rank=(int)$value['gsx$rank']['$t'];
$acvoh=$value['gsx$acvoh']['$t'];
$acvohini=$value['gsx$acvohini']['$t'];
$gapall=$value['gsx$gapall']['$t'];


?>

<!-- Swiper -->
<div class="container mb-4">
    <div class="row mb-3">
        <div class="col">
            <h6 class="subtitle mb-0">Perform Report </h6>
        </div>
    </div>
    <div class="swiper-container swiper-users ">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                               <div class="avatar avatar-60 bg-default-secondary rounded-circle">
                                 <i class="material-icons">cloud_upload</i>
                               </div>
                            </div>
                            <div class="col pl-0">
                                <p class="text-secondary mb-0"><small>Disburse Today</small></p>
                                <p class="mb-1"><?php echo number_format($disbdisbtoday,0); ?><small class="text-success"><span class="material-icons small">flash_on</span></small></p>
                                <p class="text-secondary small"><?php echo $noadisbtoday.' 	NOA'; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                               <div class="avatar avatar-60 bg-default-secondary rounded-circle">
                                 <i class="material-icons">cloud_done</i>
                               </div>
                            </div>
                            <div class="col pl-0">
                                <p class="text-secondary mb-0"><small>Disburse MTD</small></p>
                                <p class="mb-1"><?php echo number_format($disbdisbmtd,0); ?><small class="text-success"><span class="material-icons small">flash_on</span></small></p>
                                <p class="text-secondary small"><?php echo $noadisbmtd.' 	NOA'; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                               <div class="avatar avatar-60 bg-default-secondary rounded-circle">
                                 <i class="material-icons">cloud_queue</i>
                               </div>
                            </div>
                            <div class="col pl-0">
                                <p class="text-secondary mb-0"><small>Belum Cair</small></p>
                                <p class="mb-1"><?php echo number_format($disbpipeline,0); ?><small class="text-success"><span class="material-icons small">flash_on</span></small></p>
                                <p class="text-secondary small"><?php echo $noapipeline.' 	NOA'; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                               <div class="avatar avatar-60 bg-default-secondary rounded-circle">
                                 <i class="material-icons">create_new_folder</i>
                               </div>
                            </div>
                            <div class="col pl-0">
                                <p class="text-secondary mb-0"><small>Growth Today</small></p>
                                <p class="mb-1"><?php echo number_format($disbgrowth,0); ?><small class="text-success"><span class="material-icons small">flash_on</span></small></p>
                                <p class="text-secondary small"><?php echo $noagrowth.' 	NOA'; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Progress -->
<div class="container mb-3">
    <div class="row mb-3">
        <div class="col">
            <h6 class="subtitle mb-0">Progress </h6>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <h4 class="mb-1"><?php echo 'OH = '.number_format($disbtotaloh,0); ?> </h4>
                            <p class="text-secondary small"><?php echo number_format($gap,0).' to achieve plan .'.number_format($target,0); ?></p>

                        </div>
                        <div class="col-auto pl-0">
                            <button class="btn btn-40 bg-default-light text-default rounded-circle">
                                <i class="material-icons">local_atm</i>
                            </button>
                        </div>
                    </div>
                    <div class="progress mb-2">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width:<?php echo trim($acvoh); ?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?php echo $acvoh; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <h4 class="mb-1"><?php echo 'ALL = '.number_format($disbohall,0); ?> </h4>
                            <p class="text-secondary small"><?php echo number_format($gapall,0).' to achieve plan .'.number_format($target,0); ?></p>

                        </div>
                        <div class="col-auto pl-0">
                            <button class="btn btn-40 bg-default-light text-default rounded-circle">
                                <i class="material-icons">local_atm</i>
                            </button>
                        </div>
                    </div>
                    <div class="progress mb-2">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:<?php echo trim($acvohini); ?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?php echo $acvohini; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pipeline -->
<div class="container">
    <div class="row mb-3">
        <div class="col">
            <h6 class="subtitle mb-0">Act + Pipeline </h6>
        </div>
    </div>
   <div class="card mb-3">
            <div class="card-header border-bottom">
                <div class="row">
                    <div class="col-auto">
                        <div class="avatar avatar-50 bg-default-light text-default rounded">
                            <span class="material-icons">local_mall</span>
                        </div>
                    </div>
                    <div class="col align-self-center pl-0">
                        <h4 class="mb-1">ONHAND</h4>
                        <p class="text-secondary small">Updated @ <?php echo $updated; ?> </p>
                    </div>
                    <div class="col-auto pr-1">
                        <button type="button" class="badge badge-warning font-weight-bold vm" data-toggle="modal" data-target="#exampleModalCenter">Track</button>
                        <i class="material-icons vm">keyboard_arrow_right</i>
                    </div>                           
                </div>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">queue</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">NEW JN</h6>
                        <p class="small text-secondary"><?php echo $ohnoajn; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($ohdisbjn,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($ohdisbjn,$ohnoajn); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">library_add_check</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">SIKLUS</h6>
                        <p class="small text-secondary"><?php echo $ohnoasl; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($ohdisbsl,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($ohdisbsl,$ohnoasl); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">library_books</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">WBC</h6>
                        <p class="small text-secondary"><?php echo $ohnoawbc; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($ohdisbwbc,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($ohdisbwbc,$ohnoawbc); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">collections_bookmark</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">TOP UP</h6>
                        <p class="small text-secondary"><?php echo $ohnoatu; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($ohdisbtu,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($ohdisbtu,$ohnoatu); ?></p>
                    </div>
                </div>                          
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <h6 class="mb-1"><?php echo 'Σ OH = '.number_format($disbtotaloh,0); ?></h6>
                        <p class="small text-secondary"><?php echo $noatotaloh.' NOA'; ?></p>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-default btn-40 rounded-circle"><i class="material-icons">repeat</i></button>
                        <button class="btn btn-warning btn-40 rounded-circle ml-2 text-white"><i class="material-icons">star</i></button>
                    </div>
                </div>
            </div>
   </div>
</div>       
<div class="container">
   <div class="card mb-3">
            <div class="card-header border-bottom">
                <div class="row">
                    <div class="col-auto">
                        <div class="avatar avatar-50 bg-default-light text-default rounded">
                            <span class="material-icons">local_offer</span>
                        </div>
                    </div>
                    <div class="col align-self-center pl-0">
                        <h4 class="mb-1">INISIATIF</h4>
                        <p class="text-secondary small">Updated @ <?php echo $updated; ?> </p>
                    </div>                          
                </div>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">queue</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">NEW JN</h6>
                        <p class="small text-secondary"><?php echo $ininoajn; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($inidisbjn,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($inidisbjn,$ininoajn); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">library_add_check</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">SIKLUS</h6>
                        <p class="small text-secondary"><?php echo $ininoasl; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($inidisbsl,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($inidisbsl,$ininoasl); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">library_books</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">WBC</h6>
                        <p class="small text-secondary"><?php echo $ininoawbc; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($inidisbwbc,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($inidisbwbc,$ininoawbc); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">collections_bookmark</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">TOP UP</h6>
                        <p class="small text-secondary"><?php echo $ininoatu; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($inidisbtu,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($inidisbtu,$ininoatu); ?></p>
                    </div>
                </div>                          
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <h6 class="mb-1"><?php echo 'Σ INISIATIF = '.number_format($disbtotalini,0); ?></h6>
                        <p class="small text-secondary"><?php echo $noatotalini.' NOA'; ?></p>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-default btn-40 rounded-circle"><i class="material-icons">repeat</i></button>
                        <button class="btn btn-warning btn-40 rounded-circle ml-2 text-white"><i class="material-icons">star</i></button>
                    </div>
                </div>
            </div>
   </div>
</div> 
    <!-- Modals  -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Insentif dibayarkan 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>          
<?php

}  

//echo erDebug($jsondata);

}
function jsonCO($param,$sheet){
$url = "https://spreadsheets.google.com/feeds/list/1Md5Q7S0pTMF0Ftb9U-Wor_ywQdL5HsuB2fryXUPwZ-8/".$sheet."/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];
$search = $param;
$jsondata2 = array_filter($jsondata, function ($var) use ($search) {
    if (stripos($var['gsx$co']['$t'], $search) !== false) {
        return true;   
  }
    return false;
});

foreach($jsondata2 as $key => $value){
$updated = date('d/m/Y h:i A', strtotime($value['updated']['$t']));
$nik=$value['gsx$nik']['$t'];
$area=$value['gsx$area']['$t'];
$mms=$value['gsx$mms']['$t'];
$co=$value['gsx$co']['$t'];
$ohnoajn=(int)$value['gsx$ohnoajn']['$t'];
$ohdisbjn=(int)$value['gsx$ohdisbjn']['$t'];
$ohnoasl=(int)$value['gsx$ohnoasl']['$t'];
$ohdisbsl=(int)$value['gsx$ohdisbsl']['$t'];
$ohnoawbc=(int)$value['gsx$ohnoawbc']['$t'];
$ohdisbwbc=(int)$value['gsx$ohdisbwbc']['$t'];
$ohnoatu=(int)$value['gsx$ohnoatu']['$t'];
$ohdisbtu=(int)$value['gsx$ohdisbtu']['$t'];
$ininoajn=(int)$value['gsx$ininoajn']['$t'];
$inidisbjn=(int)$value['gsx$inidisbjn']['$t'];
$ininoasl=(int)$value['gsx$ininoasl']['$t'];
$inidisbsl=(int)$value['gsx$inidisbsl']['$t'];
$ininoawbc=(int)$value['gsx$ininoawbc']['$t'];
$inidisbwbc=(int)$value['gsx$inidisbwbc']['$t'];
$ininoatu=(int)$value['gsx$ininoatu']['$t'];
$inidisbtu=(int)$value['gsx$inidisbtu']['$t'];
$noadisbtoday=(int)$value['gsx$noadisbtoday']['$t'];
$disbdisbtoday=(int)$value['gsx$disbdisbtoday']['$t'];
$noadisbmtd=(int)$value['gsx$noadisbmtd']['$t'];
$disbdisbmtd=(int)$value['gsx$disbdisbmtd']['$t'];
$noapipeline=(int)$value['gsx$noapipeline']['$t'];
$disbpipeline=(int)$value['gsx$disbpipeline']['$t'];
$noablminput=(int)$value['gsx$noablminput']['$t'];
$disbblminput=(int)$value['gsx$disbblminput']['$t'];
$noatotaloh=(int)$value['gsx$noatotaloh']['$t'];
$disbtotaloh=(int)$value['gsx$disbtotaloh']['$t'];
$noatotalini=(int)$value['gsx$noatotalini']['$t'];
$disbtotalini=(int)$value['gsx$disbtotalini']['$t'];
$noaohall=(int)$value['gsx$noaohall']['$t'];
$disbohall=(int)$value['gsx$disbohall']['$t'];
$noagrowth=(int)$value['gsx$noagrowth']['$t'];
$disbgrowth=(int)$value['gsx$disbgrowth']['$t'];
$targetjn=(int)$value['gsx$targetjn']['$t'];
$targetwbc=(int)$value['gsx$targetwbc']['$t'];
$targetsl=(int)$value['gsx$targetsl']['$t'];
$gapjn=(int)$value['gsx$gapjn']['$t'];
$gapwbc=(int)$value['gsx$gapwbc']['$t'];
$gapsl=(int)$value['gsx$gapsl']['$t'];
$gapalljn=(int)$value['gsx$gapalljn']['$t'];
$gapallwbc=(int)$value['gsx$gapallwbc']['$t'];
$gapallsl=(int)$value['gsx$gapallsl']['$t'];
$acvohprod=$value['gsx$acvohprod']['$t'];
$acvohnoc=$value['gsx$acvohnoc']['$t'];
$acvohallprod=$value['gsx$acvohallprod']['$t'];
$acvohallnoc=$value['gsx$acvohallnoc']['$t'];
$ratingprod=(int)$value['gsx$ratingprod']['$t'];
$ratingnoc=(int)$value['gsx$ratingnoc']['$t'];


//$gapall = ($gapall!=0)?($gapall):0;
$target = $targetjn+$targetwbc+$targetsl;
$gap = $gapjn+$gapsl+$gapwbc;
$gapall = $gapalljn+$gapallwbc+$gapallwbc;
?>

<!-- Swiper -->
<div class="container mb-4">
    <div class="row mb-3">
        <div class="col">
            <h6 class="subtitle mb-0">Perform Report </h6>
        </div>
    </div>
    <div class="swiper-container swiper-users ">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                               <div class="avatar avatar-60 bg-default-secondary rounded-circle">
                                 <i class="material-icons">cloud_upload</i>
                               </div>
                            </div>
                            <div class="col pl-0">
                                <p class="text-secondary mb-0"><small>Disburse Today</small></p>
                                <p class="mb-1"><?php echo number_format($disbdisbtoday,0); ?><small class="text-success"><span class="material-icons small">flash_on</span></small></p>
                                <p class="text-secondary small"><?php echo $noadisbtoday.' 	NOA'; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                               <div class="avatar avatar-60 bg-default-secondary rounded-circle">
                                 <i class="material-icons">cloud_done</i>
                               </div>
                            </div>
                            <div class="col pl-0">
                                <p class="text-secondary mb-0"><small>Disburse MTD</small></p>
                                <p class="mb-1"><?php echo number_format($disbdisbmtd,0); ?><small class="text-success"><span class="material-icons small">flash_on</span></small></p>
                                <p class="text-secondary small"><?php echo $noadisbmtd.' 	NOA'; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                               <div class="avatar avatar-60 bg-default-secondary rounded-circle">
                                 <i class="material-icons">cloud_queue</i>
                               </div>
                            </div>
                            <div class="col pl-0">
                                <p class="text-secondary mb-0"><small>Belum Cair</small></p>
                                <p class="mb-1"><?php echo number_format($disbpipeline,0); ?><small class="text-success"><span class="material-icons small">flash_on</span></small></p>
                                <p class="text-secondary small"><?php echo $noapipeline.' 	NOA'; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                               <div class="avatar avatar-60 bg-default-secondary rounded-circle">
                                 <i class="material-icons">create_new_folder</i>
                               </div>
                            </div>
                            <div class="col pl-0">
                                <p class="text-secondary mb-0"><small>Growth Today</small></p>
                                <p class="mb-1"><?php echo number_format($disbgrowth,0); ?><small class="text-success"><span class="material-icons small">flash_on</span></small></p>
                                <p class="text-secondary small"><?php echo $noagrowth.' 	NOA'; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Progress -->
<div class="container mb-3">
    <div class="row mb-3">
        <div class="col">
            <h6 class="subtitle mb-0">Progress </h6>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <h4 class="mb-1"><?php echo 'OH = '.number_format($disbtotaloh,0); ?> </h4>
                            <p class="text-secondary small"><?php echo number_format($gap,0).' to achieve plan .'.number_format($target,0); ?></p>

                        </div>
                        <div class="col-auto pl-0">
                            <button class="btn btn-40 bg-default-light text-default rounded-circle">
                                <i class="material-icons">local_atm</i>
                            </button>
                        </div>
                    </div>
                    <div class="progress mb-2">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width:<?php echo trim($acvohnoc); ?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?php echo $acvohnoc; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <h4 class="mb-1"><?php echo 'ALL = '.number_format($disbohall,0); ?> </h4>
                            <p class="text-secondary small"><?php echo number_format($gapall,0).' to achieve plan .'.number_format($target,0); ?></p>

                        </div>
                        <div class="col-auto pl-0">
                            <button class="btn btn-40 bg-default-light text-default rounded-circle">
                                <i class="material-icons">local_atm</i>
                            </button>
                        </div>
                    </div>
                    <div class="progress mb-2">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:<?php echo trim($acvohallnoc); ?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?php echo $acvohallnoc; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pipeline -->
<div class="container">
    <div class="row mb-3">
        <div class="col">
            <h6 class="subtitle mb-0">Act + Pipeline </h6>
        </div>
    </div>
   <div class="card mb-3">
            <div class="card-header border-bottom">
                <div class="row">
                    <div class="col-auto">
                        <div class="avatar avatar-50 bg-default-light text-default rounded">
                            <span class="material-icons">local_mall</span>
                        </div>
                    </div>
                    <div class="col align-self-center pl-0">
                        <h4 class="mb-1">ONHAND</h4>
                        <p class="text-secondary small">Updated @ <?php echo $updated; ?> </p>
                    </div>
                    <div class="col-auto pr-1">
                        <button type="button" class="badge badge-warning font-weight-bold vm" data-toggle="modal" data-target="#exampleModalCenter">Track</button>
                        <i class="material-icons vm">keyboard_arrow_right</i>
                    </div>                           
                </div>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">queue</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">NEW JN</h6>
                        <p class="small text-secondary"><?php echo $ohnoajn; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($ohdisbjn,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($ohdisbjn,$ohnoajn); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">library_add_check</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">SIKLUS</h6>
                        <p class="small text-secondary"><?php echo $ohnoasl; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($ohdisbsl,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($ohdisbsl,$ohnoasl); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">library_books</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">WBC</h6>
                        <p class="small text-secondary"><?php echo $ohnoawbc; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($ohdisbwbc,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($ohdisbwbc,$ohnoawbc); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">collections_bookmark</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">TOP UP</h6>
                        <p class="small text-secondary"><?php echo $ohnoatu; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($ohdisbtu,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($ohdisbtu,$ohnoatu); ?></p>
                    </div>
                </div>                          
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <h6 class="mb-1"><?php echo 'Σ OH = '.number_format($disbtotaloh,0); ?></h6>
                        <p class="small text-secondary"><?php echo $noatotaloh.' NOA'; ?></p>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-default btn-40 rounded-circle"><i class="material-icons">repeat</i></button>
                        <button class="btn btn-warning btn-40 rounded-circle ml-2 text-white"><i class="material-icons">star</i></button>
                    </div>
                </div>
            </div>
   </div>
</div>       
<div class="container">
   <div class="card mb-3">
            <div class="card-header border-bottom">
                <div class="row">
                    <div class="col-auto">
                        <div class="avatar avatar-50 bg-default-light text-default rounded">
                            <span class="material-icons">local_offer</span>
                        </div>
                    </div>
                    <div class="col align-self-center pl-0">
                        <h4 class="mb-1">INISIATIF</h4>
                        <p class="text-secondary small">Updated @ <?php echo $updated; ?> </p>
                    </div>
                    <div class="col-auto pr-1">
                        <div class="badge badge-secondary font-weight-normal vm">Track</div>
                        <i class="material-icons vm">keyboard_arrow_right</i>
                    </div>                           
                </div>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">queue</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">NEW JN</h6>
                        <p class="small text-secondary"><?php echo $ininoajn; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($inidisbjn,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($inidisbjn,$ininoajn); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">library_add_check</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">SIKLUS</h6>
                        <p class="small text-secondary"><?php echo $ininoasl; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($inidisbsl,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($inidisbsl,$ininoasl); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">library_books</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">WBC</h6>
                        <p class="small text-secondary"><?php echo $ininoawbc; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($inidisbwbc,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($inidisbwbc,$ininoawbc); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                            <i class="material-icons vm text-template">collections_bookmark</i>
                        </div>
                    </div>
                    <div class="col-4 align-self-center">
                        <h6 class="mb-1">TOP UP</h6>
                        <p class="small text-secondary"><?php echo $ininoatu; ?> NOA</p>
                    </div>
                    <div class="col-auto align-self-center border-left">
                        <h6 class="mb-1"><?php echo number_format($inidisbtu,0); ?></h6>
                        <p class="small text-secondary">Ticket Size : <?php echo bagi($inidisbtu,$ininoatu); ?></p>
                    </div>
                </div>                          
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <h6 class="mb-1"><?php echo 'Σ INISIATIF = '.number_format($disbtotalini,0); ?></h6>
                        <p class="small text-secondary"><?php echo $noatotalini.' NOA'; ?></p>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-default btn-40 rounded-circle"><i class="material-icons">repeat</i></button>
                        <button class="btn btn-warning btn-40 rounded-circle ml-2 text-white"><i class="material-icons">star</i></button>
                    </div>
                </div>
            </div>
   </div>
</div> 
    <!-- Modals  -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Insentif dibayarkan 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>          
<?php

}  

//echo erDebug($jsondata);

}



?>