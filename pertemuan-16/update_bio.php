<?php
  session_start();
  require __DIR__ . '/koneksi.php';
  require_once __DIR__ . '/fungsi.php';

  #cek method form, hanya izinkan POST
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read.php');
  }

  #validasi cid wajib angka dan > 0
  $cid = filter_input(INPUT_POST, 'KID', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);

  if (!$KID) {
    $_SESSION['flash_error'] = 'CID Tidak Valid.';
    redirect_ke('edit_bio.php?KID='. (int)$KID);
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

if ($nm_dosen === '') {
    $errors[] = 'Nama dosen wajib diisi';
}

if ($almt === '') {
    $errors[] = 'Alamat dosen wajib diisi';
}

if ($tgl === '') {
    $errors[] = 'Tanggal dosen wajib diisi';
}

if ($jja === '') {
    $errors[] = 'JJA dosen wajib diisi';
}

if ($prodi === '') {
    $errors[] = 'Prodi dosen wajib diisi';
}

if ($hp === '') {
    $errors[] = 'No hp dosen wajib diisi';
}

if ($pasangan === '') {
    $errors[] = 'Nama pasangan dosen wajib diisi';
}

if ($anak === '') {
    $errors[] = 'Nama anak dosen wajib diisi';
}

if ($ilmu === '') {
    $errors[] = 'Ilmu dosen wajib diisi';
}

if (!empty($errors)) {
  $_SESSION['old'] = [
    'kode'  => $kd_dosen,
    'nama' => $nm_dosen,
    'alamat' => $almt,
    'tanggal' => $tgl,
    'jja' => $jja,
    'prodi' => $prodi,
    'noHp' => $hp,
    'pasangan' => $pasangan,
    'anak' => $anak,
    'ilmu' => $ilmu,
  ];
  $_SESSION['flash_error'] = implode('<br>', $errors);
  redirect_ke('edit_bio.php?KID='. (int)$KID);
}
  /*
    Prepared statement untuk anti SQL injection.
    menyiapkan query UPDATE dengan prepared statement 
    (WAJIB WHERE cid = ?)
  */
  $stmt = mysqli_prepare($conn, "UPDATE tbl_dosen
                                SET KD_DOSEN = ?, NM_DOSEN = ?, ALMT = ?, TGL = ?, JJA = ?, PRODI = ?, NO_HP =? , PASANGAN = ?, ANAK = ?, ILMU =?
                                WHERE KID = ?");
  if (!$stmt) {
    #jika gagal prepare, kirim pesan error (tanpa detail sensitif)
    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('edit_bio.php?KID='. (int)$KID);
  }

  #bind parameter dan eksekusi (s = string, i = integer)
  mysqli_stmt_bind_param($stmt, "ssssssssssi", $nama, $email, $pesan, $cid);

  if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value
    unset($_SESSION['old']);
    /*
      Redirect balik ke read.php dan tampilkan info sukses.
    */
    $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah diperbaharui.';
    redirect_ke('read.php'); #pola PRG: kembali ke data dan exit()
  } else { #jika gagal, simpan kembali old value dan tampilkan error umum
    $_SESSION['old'] = [
      'nama'  => $nama,
      'email' => $email,
      'pesan' => $pesan,
    ];
    $_SESSION['flash_error'] = 'Data gagal diperbaharui. Silakan coba lagi.';
    redirect_ke('edit.php?cid='. (int)$cid);
  }
  #tutup statement
  mysqli_stmt_close($stmt);

  redirect_ke('edit.php?cid='. (int)$cid);