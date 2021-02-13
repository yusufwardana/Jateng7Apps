<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$url = "https://spreadsheets.google.com/feeds/list/1m8ktv6Vr7X_zn2g0RBo2RpxaQrpFgEeRlYGZ5c2oiCM/3/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry'];
$updated = strtotime($json['feed']['updated']['$t']);
$new_date_format = date('Y-m-d H:i:s', $updated);
?>
<div class="main-container">
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
                        <h4 class="mb-1">NM DAILY</h4>
                        <p class="text-secondary small">Updated @ <?php echo $new_date_format; ?> </p>
                    </div>
                    <div class="col-auto">
                        <a href="/exportnm.php">
                        <button class="btn btn-warning btn-40 rounded-circle ml-2 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Export Excel"><i class="material-icons">download</i></button> </a>
                    </div>
                          
                </div>
            </div>
            
            	<ul class="list-group list-group-flush">



<?php

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

                       echo '<li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar avatar-30 bg-info text-white rounded-circle">
                                            <b>'.$no.'</b>
                                        </div>
                                    </div>

                                    <div class="col align-self-center pr-0">
                                        <h6 class="font-weight-normal mb-1">'.ucwords(strtolower($co)).'</h6>
                                        <p class="text-secondary"><small>NOA:</small><small class="text-danger">'.$jnm.' </small><small> - OS:'.$os.' - MTD:</small> <small class="text-danger">'.$dropmtd.'<span class="material-icons small">call_received</span></small></p>
                                    </div>
                                    <div class="col-auto pr-1">
                                        <button class="btn btn-sm btn-light btn-rounded btn-40 rounded-circle text-danger" data-toggle="modal" data-target="#j7modal'.$no.'" data-whatever="'.$co.'"><i class="material-icons mt-0 vm ">loupe</i></button>';
?>
                                        <div class="modal fade" id="j7modal<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="j7modalTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="j7modalTitle"><?php echo $co; ?></h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <div class="container mb-4">
                                                          <div class="row my-3 h6 font-weight-normal">
                                                              <div class="col">XDAYS</div>
                                                              <div class="col text-right text-mute"><?php echo $noaxday.'/'.$osxday; ?></div>
                                                          </div>
                                                          <div class="row my-3 h6 font-weight-normal">
                                                              <div class="col">SM</div>
                                                              <div class="col text-right text-mute"><?php echo $noasm.'/'.$ossm; ?></div>
                                                          </div>
                                                          <div class="row my-3 h6 font-weight-normal">
                                                              <div class="col">SM TO NPF</div>
                                                              <div class="col text-right text-mute"><?php echo $noasmtonpf.'/'.$ossmtonpf; ?></div>
                                                          </div>
                                                          <div class="row my-3 h6 font-weight-normal">
                                                              <div class="col">NPF</div>
                                                              <div class="col text-right text-mute"><?php echo $noanpf.'/'.$osnpf; ?></div>
                                                          </div>
                                                          <hr>
                                                          <div class="row h6 font-weight-bold">
                                                              <div class="col">Total NM</div>
                                                              <div class="col text-right text-mute"><?php echo $jnm.'/'.$os; ?></div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </li>
<?php
          
}  
  
?>
              </ul>
            
            <div class="card-footer">
                <div class="row">

                </div>
            </div>
   </div>
 </div> 
</div>