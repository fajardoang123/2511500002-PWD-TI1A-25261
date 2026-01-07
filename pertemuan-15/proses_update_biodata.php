<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

#cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('index.php#biodata');
}

#ambil dan bersihkan nilai dari form
$nim = bersihkan($_POST['txtNim'] ?? '');
$nama_lengkap = bersihkan($_POST['txtNmLengkap'] ?? '');
$tempat  = bersihkan($_POST['txtT4Lhr']  ?? '');
$tanggal = bersihkan($_POST['txtTglLhr'] ?? '');
$hobi = bersihkan($_POST['txtHobi'] ?? '');
$pasangan = bersihkan($_POST['txtPasangan'] ?? '');
$pekerjaan = bersihkan($_POST['txtKerja'] ?? '');
$ortu = bersihkan($_POST['txtNmOrtu'] ?? '');
$kakak = bersihkan($_POST['txtNmKakak'] ?? '');
$adik = bersihkan($_POST['txtNmAdik'] ?? '');
$captcha = bersihkan($_POST['txtCaptcha'] ?? '');

#Validasi sederhana
$errors = []; 

if ($nim === '') {
  $errors[] = 'Nim wajib diisi.';
}
if ($nama_lengkap === '') {
  $errors[] = 'Nama lengkap wajib diisi.';
}
if ($tempat === '') {
  $errors[] = 'Tempat wajib diisi.';
}
if ($tanggal === '') {
  $errors[] = 'Tanggal wajib diisi.';
}
if ($hobi === '') {
  $errors[] = 'Hobi wajib diisi.';
}
if ($pasangan === '') {
  $errors[] = 'Pasangan wajib diisi.';
}
if ($pekerjaan === '') {
  $errors[] = 'Pekerjaan wajib diisi.';
}
if ($ortu === '') {
  $errors[] = 'Orang tua wajib diisi.';
}
if ($kakak === '') {
  $errors[] = 'Kakak wajib diisi.';
}
if ($adik === '') {
  $errors[] = 'Adik wajib diisi.';
}
if ($captcha!=="10") {
  $errors[] = 'Jawaban '. $captcha.' captcha salah.';
}

/*
kondisi di bawah ini hanya dikerjakan jika ada error, 
simpan nilai lama dan pesan error, lalu redirect (konsep PRG)
*/
if (!empty($errors)) {
  $_SESSION['old'] = [
    'nim'  => $nim,
    'nama' => $nama_lengkap,
    'tempat' => $tempat,
    'tanggal' => $tanggal,
    'hobi' => $hobi,
    'pasangan' => $pasangan,
    'pekerjaan' => $pekerjaan,
    'ortu' => $ortu,
    'kakak' => $kakak,
    'adik' => $adik,
    'captcha' => $captcha,
  ];

  $_SESSION['flash_error'] = implode('<br>', $errors);
  redirect_ke('update_biodata.php?nmr'.(int)$nmr);
}

#menyiapkan query INSERT dengan prepared statement
$sql = "INSERT INTO tbl_about (nim, nama, tempat_lahir,tanggal_lahir,hobi,pasangan,pekerjaan,nama_ortu,kakak,adik) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  #jika gagal prepare, kirim pesan error ke pengguna 
  $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
  redirect_ke('update_biodata.php?nmr'.(int)$nmr);
}

mysqli_stmt_bind_param($stmt, "ssssssssss", $nim, $nama_lengkap, $tempat, $tanggal, $hobi, $pasangan, $pekerjaan, $ortu, $kakak, $adik);

if (mysqli_stmt_execute($stmt)) { 
  unset($_SESSION['old']);
  $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah tersimpan.';
  redirect_ke('read_biodata'); 
} else { 
  $_SESSION['old'] = [
    'nim'  => $nim,
    'nama' => $nama_lengkap,
    'tempat' => $tempat,
    'tanggal' => $tanggal,
    'hobi' => $hobi,
    'pasangan' => $pasangan,
    'pekerjaan' => $pekerjaan,
    'ortu' => $ortu,
    'kakak' => $kakak,
    'adik' => $adik,
    'captcha' => $captcha,
  ];
  $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
  redirect_ke('update_biodata.php?nmr'.(int)$nmr);
}

mysqli_stmt_close($stmt);

redirect_ke('update_biodata.php?nmr'.(int)$nmr);
