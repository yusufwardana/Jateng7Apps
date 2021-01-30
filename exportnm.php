<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=xdaysjateng7.xls");
?>

<h3>Data Xdays</h3>
    
<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>NAMA CO</th>
    <th>NOA XDAY</th>
    <th>OS XDAY</th>
    <th>DROP TODAY</th>
    <th>DROP MTD</th>
  </tr>
  <?php
$url = "https://spreadsheets.google.com/feeds/list/1m8ktv6Vr7X_zn2g0RBo2RpxaQrpFgEeRlYGZ5c2oiCM/3/public/full?alt=json";
$data = file_get_contents($url);
$json = json_decode($data,true);
$jsondata = $json['feed']['entry']; 
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
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$co."</td>";
    echo "<td>".$noaxday."</td>";
    echo "<td>".$osxday."</td>";
    echo "<td>".$droptoday."</td>";
    echo "<td>".$dropmtd."</td>";
    echo "</tr>";

}
  ?>
</table>