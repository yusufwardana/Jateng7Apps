<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'] ,ENT_QUOTES)));
$nama_mahasiswa = stripslashes(strip_tags(htmlspecialchars($_POST['nama_mahasiswa'] ,ENT_QUOTES)));
$jenkel = stripslashes(strip_tags(htmlspecialchars($_POST['jenkel'] ,ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'] ,ENT_QUOTES)));
$jurusan = stripslashes(strip_tags(htmlspecialchars($_POST['jurusan'] ,ENT_QUOTES)));
$tanggal_masuk = stripslashes(strip_tags(htmlspecialchars($_POST['tanggal_masuk'] ,ENT_QUOTES)));

if ($id == "") {
	$query = "INSERT into tbl_mahasiswa (nama_mahasiswa, alamat, jurusan, jenis_kelamin, tgl_masuk) VALUES (?, ?, ?, ?, ?)";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("sssss", $nama_mahasiswa, $alamat, $jurusan, $jenkel, $tanggal_masuk);
	$dewan1->execute();
} else {
	$query = "UPDATE tbl_mahasiswa SET nama_mahasiswa=?, alamat=?, jurusan=?, jenis_kelamin=?, tgl_masuk=? WHERE id=?";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("sssssi", $nama_mahasiswa, $alamat, $jurusan, $jenkel, $tanggal_masuk, $id);
	$dewan1->execute();
}

echo json_encode(['success' => 'Sukses']);

$db1->close();
?>