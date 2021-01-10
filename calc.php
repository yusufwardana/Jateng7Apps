<?php

include 'header.php';
$ur['title'] = "RR Adjusted Calc";
$ur["datapage"] = "wallet";
pageheader($ur);
?>

<div class="row">
	<div class="col col-md-12">
		<div class="card mb-4">
			<div class="card-header">
        <h6>RR Adjusted Area</h6>
      </div>
      <div class="card-body">
           <form>
           	<label>Total OS :</label>
           	<div class="input-group mb-3">
           		<div class="input-group-prepend">
           			<span class="input-group-text">Rp</span>
              </div>
              <input type="number" name="a" value="<?php echo @$_GET['a'] ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
              	<span class="input-group-text">.000</span>
              </div>
            </div>
            <label>Total OS KOL1 (Seluruh OS lancar, termasuk OS yang masih gesang):</label>
           	<div class="input-group mb-3">
           		<div class="input-group-prepend">
           			<span class="input-group-text">Rp</span>
              </div>
              <input type="number" name="b" value="<?php echo @$_GET['b'] ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
              	<span class="input-group-text">.000</span>
              </div>
            </div>
            <label>Total OS KOL1 Gesang (OS Nasabah Gesang dan Pernah Gesang):</label>
           	<div class="input-group mb-3">
           		<div class="input-group-prepend">
           			<span class="input-group-text">Rp</span>
              </div>
              <input type="number" name="c" value="<?php echo @$_GET['c'] ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
              	<span class="input-group-text">.000</span>
              </div>
            </div>
            <label>Total OS KOL1 Gesang Setor Tab (Nasabah Gesang yang melakukan setor tabungan minim 1x angsuran):</label>
           	<div class="input-group mb-3">
           		<div class="input-group-prepend">
           			<span class="input-group-text">Rp</span>
              </div>
              <input type="number" name="d" value="<?php echo @$_GET['d'] ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
              	<span class="input-group-text">.000</span>
              </div>
            </div>
            <label>Total OS KOL1 Gesang Setor Angs (Nasabah yang Pernah Gesang dan saat ini statusnya lancar) :</label>
           	<div class="input-group mb-3">
           		<div class="input-group-prepend">
           			<span class="input-group-text">Rp</span>
              </div>
              <input type="number" name="e" value="<?php echo @$_GET['e'] ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
              	<span class="input-group-text">.000</span>
              </div>
            </div>
               <div style="margin-top: 1rem">
                   <button type="button" onclick="location.href = '?'" class="mb-2 btn btn-warning">Clear</button>
                   <button type="submit" class="mb-2 btn btn-default">Hitung</button>
               </div>
           </form>  
        <?php
        if ($_GET):
        $a = (double) @$_GET['a'];
        $b = (double) @$_GET['b'];
        $c = (double) @$_GET['c'];
        $d = (double) @$_GET['d'];
        $e = (double) @$_GET['e'];
       // $operator = @$_GET['operator'];
       $hasil1 = $b - $c;
       $hasil2 = $hasil1 + $d + $e;
       $hasilakhir = $hasil2/$a;
       $rradj = round($hasilakhir*100,2);
    
       $gapvalue = round($hasilakhir,2) - 0.85;
       if($gapvalue < 0){
       	$gap = "Dibutuhkan growth " .($gapvalue*-100)."% untuk mencapai 85%";
       	$ins = "Insentif : Rp 50.000/per karyawan";
       }else{
       	$gap = 'Awesome <span class="text-danger">❤</span>';
       	$ins = "Insentif : Rp 800/per nasabah per periode PRS";
       }
       ?>

        
        
      </div>
              
      <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="mb-1"><?php echo($rradj."%") ?></h5>
                        
                        
                        
                        <p class="text-secondary"><?php echo($ins) ?></p>
                        <p class="text-secondary small"><?php echo($gap) ?></p>

                    </div>
                    <div class="col-auto pl-0">
                        <button class="btn btn-40 bg-default-light text-default rounded-circle">
                            <i class="material-icons">local_atm</i>
                        </button>
                    </div>
                </div>

               <div class="progress mb-3">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: <?php echo($rradj."%") ?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?php echo($rradj."%") ?></div>
                </div> 
      </div>
       <?php endif; ?>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>