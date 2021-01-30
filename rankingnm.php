<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$url = "https://spreadsheets.google.com/feeds/list/1m8ktv6Vr7X_zn2g0RBo2RpxaQrpFgEeRlYGZ5c2oiCM/3/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];

echo '<div class="main-container">
            <div class="container">
                <div class="card mb-4">
                    <div class="card-header border-0 bg-none">
                        <div class="row">
                            <div class="col align-self-center">
                                <h6 class="mb-0">XDAY Perform</h6>
                            </div>
                            <div class="col-auto align-self-center">
                            <form action="/exportnm.php" method="get">
                                <button class="btn btn-default btn-sm rounded">
                                    Export
                                </button>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="all font-weight-medium">NO</th>
                                    <th class="min-tablet font-weight-medium">NAMA CO</th>
                                    <th class=" font-weight-medium">XDAYS</th>
                                </tr>
                            </thead><tbody>';
foreach($jsondata as $key => $value){
$co=$value['gsx$co']['$t'];
$dropmtd=$value['gsx$dropmtd']['$t'];
$droptoday=$value['gsx$droptoday']['$t'];
$jnm=$value['gsx$jnm']['$t'];
$no=$value['gsx$no']['$t'];
$noanpf=$value['gsx$noanpf']['$t'];
$noasm=$value['gsx$noasm']['$t'];
$noasmtonpf=$value['gsx$noasmtonpf']['$t'];
$noaxday=$value['gsx$noaxday']['$t'];
$os=$value['gsx$os']['$t'];
$osnpf=$value['gsx$osnpf']['$t'];
$ossm=$value['gsx$ossm']['$t'];
$ossmtonpf=$value['gsx$ossmtonpf']['$t'];
$osxday=$value['gsx$osxday']['$t'];

	      if($no < 10){
	      	$iconrating = "filter_".$no;
	      }else{
	      	
	      	$iconrating = "filter_9_plus";
	      }
echo '
          <tr>
              <td>'.$no.'</td>
              <td>
                  <div class="media">
                      <figure class="mb-0 avatar avatar-40 mr-2 rounded-circle">
                          <div class="background">
                              <img src="img/user1.png" alt="">
                          </div>
                      </figure>
                      <div class="media-body">
                          <p class="mb-0">'.$co.'</p>
                          <p class="text-secondary small">'.$jnm.' noa ,'.$os.'</p>
                      </div>
                  </div>
              </td>
              <td>
                  <div class="btn-danger btn btn-sm btn-30 rounded">'.$noaxday.'</div>
              </td>
          </tr>';
        
    }  
    
echo '</tbody>
                        </table>
                    </div>
                </div>
            </div>
           </div>';
  
?>
