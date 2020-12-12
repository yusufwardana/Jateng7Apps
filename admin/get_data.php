<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = $_POST['id'];
$query = "SELECT * FROM optima WHERE id=? ORDER BY id ASC";
$dewan1 = $db1->prepare($query);
$dewan1->bind_param('i', $id);
$dewan1->execute();
$res1 = $dewan1->get_result();
while ($row = $res1->fetch_assoc()) {
    $h['id'] = $row["ID"];
    $h['nama_mahasiswa'] = $row["NAME"];
    $h['alamat'] = $row["MMS"];
    $h['jurusan'] = $row["AREA"];
    $h['jenis_kelamin'] = $row["CLUSTER"];
    $h['tgl_masuk'] = $row["JABATAN"];
}
echo json_encode($h);

$db1->close();
?>