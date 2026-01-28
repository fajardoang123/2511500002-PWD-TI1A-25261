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
  redirect_ke('index.php#biodata');
}

$sql = "INSERT INTO tbl_dosen (KD_DOSEN, NM_DOSEN, ALMT, TGL, JJA, PRODI, NO_HP, PASANGAN, ANAK, ILMU) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if (mysqli_stmt_execute($stmt)) { 
  unset($_SESSION['old']);
  $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah tersimpan.';
  redirect_ke('index.php#biodata'); 
} else { 
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
  $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
  redirect_ke('index.php#contact');
}
mysqli_stmt_close($stmt);

$arrBiodata = [
  "kodedos" => $_POST["txtKodeDos"] ?? "",
  "nama" => $_POST["txtNmDosen"] ?? "",
  "alamat" => $_POST["txtAlRmh"] ?? "",
  "tanggal" => $_POST["txtTglDosen"] ?? "",
  "jja" => $_POST["txtJJA"] ?? "",
  "prodi" => $_POST["txtProdi"] ?? "",
  "nohp" => $_POST["txtNoHP"] ?? "",
  "pasangan" => $_POST["txNamaPasangan"] ?? "",
  "anak" => $_POST["txtNmAnak"] ?? "",
  "ilmu" => $_POST["txtBidangIlmu"] ?? ""
];
$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#biodata");
?>