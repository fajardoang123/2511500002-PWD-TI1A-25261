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
?>