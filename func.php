<?php

$ur = array();
$ur["screenloader"] = TRUE;
$ur["datapage"] = "homepage";


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
function resumeviewProfile($nik){
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
function resumeData(){
$url = "https://spreadsheets.google.com/feeds/list/1PGEl82nfwTA0iUoV5OGZBCQ-SF0vb80MvhoZ7Tg0FDk/4/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];
//echo erDebug($jsondata);
echo '<div class="row"><div class="col"><div class="card mb-4">
<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			
			<td>NAMA</td>
			<td>OH DISB</td>
			
		</tr>
	</thead>';
foreach($jsondata as $key => $value){
	      //echo erDebug($value);
	      //$mms = $value['gsx$mms']['$t'];  
	      $namaco = $value['gsx$co']['$t'];
	      $disb = $value['gsx$disbtotaloh']['$t'];
	      $nik = $value['gsx$nik']['$t'];
	      //$idx = uniID($value['id']['$t']);
echo '<tr>
			
			<td><a href="resumeco.php?id='.$nik.'">'.$namaco.'</a></td>
			<td>'.$disb.'</td>
			
		</tr>';
        
    }  
echo '</table></div></div></div></div>';
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
                <a href="/resumeco.php" class="">
                    <i class="material-icons">elevator</i>
                    <p>Rating</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="/profile.php" class="">
                    <i class="material-icons">account_circle</i>
                    <p>Profile</p>
                </a>
            </div>
        </div>
    </div>';
	
	
}

?>