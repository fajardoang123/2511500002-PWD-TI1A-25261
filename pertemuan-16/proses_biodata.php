<?php 
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('index.php#biodata');
}

$kd_dosen = bersihkan($_POST['txtKodeDos'] ?? '');
$nm_dosen = bersihkan($_POST['txtNmDosen'] ?? '');
$almt = bersihkan($_POST['txtAlRmh'] ?? '');
$tgl = bersihkan($_POST['txtTglDosen'] ?? '');
$jja = bersihkan($_POST['txtJJA'] ?? '');
$prodi = bersihkan($_POST['txtProdi'] ?? '');
$hp = bersihkan($_POST['txtNoHP'] ?? '');
$pasangan = bersihkan($_POST['txNamaPasangan'] ?? '');
$anak = bersihkan($_POST['txtNmAnak'] ?? '');
$ilmu = bersihkan($_POST['txtBidangIlmu'] ?? '');

$errors = [];

if ($kd_dosen === '') {
    $errors[] = 'Kode wajib diisi';
}

?>