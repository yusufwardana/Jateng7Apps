<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$url = "https://spreadsheets.google.com/feeds/list/1Md5Q7S0pTMF0Ftb9U-Wor_ywQdL5HsuB2fryXUPwZ-8/5/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];

echo '<div class="main-container">
            <div class="container mb-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="mb-0">Rating Pencapaian Area (OH)</h6>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <ul class="list-group list-group-flush">';
foreach($jsondata as $key => $value){
	      $area = $value['gsx$area']['$t'];
	      $plan = $value['gsx$plan']['$t'];
	      $ohdisb = $value['gsx$ohdisb']['$t'];
	     $ohnoa = $value['gsx$ohnoa']['$t'];
	      $acv = $value['gsx$acv']['$t'];
	      $rating = $value['gsx$rt']['$t'];
	      if($rating < 10){
	      	$iconrating = "filter_".$rating;
	      }else{
	      	
	      	$iconrating = "filter_9_plus";
	      }
echo '                         
		<li class="list-group-item">
       <div class="row align-items-center">
           <div class="col-auto pr-0">
             <div class="avatar avatar-50 bg-default-secondary rounded">
              <span class="material-icons">'.$iconrating.'</span>
             </div>
           </div>
           <div class="col align-self-center pr-0">
               <h6 class="font-weight-normal mb-1"><a href=/?bm='.strtolower(str_replace(' ','',$area)).'>'.$area.'</a></h6>
               <p class="small text-secondary">'.$ohnoa.'NOA/'.$ohdisb.'DISB</p>
           </div>
           <div class="col-auto">
               <h6 class="text-success">'.$acv.'</h6>
           </div>
       </div>
    </li>';
        
    }  
    
echo '
                        </ul>
                    </div>
                </div>
            </div>
           </div>';
  
?>
