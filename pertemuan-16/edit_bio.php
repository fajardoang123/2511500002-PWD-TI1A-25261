<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

$KID = filter_input(INPUT_GET, 'KID', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
]);

if (!$KID) {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read_bio.php');
}


$stmt = mysqli_prepare($conn, "SELECT KID, KD_DOSEN, NM_DOSEN, ALMT, TGL, JJA, PRODI, NO_HP, PASANGAN, ANAK, ILMU
                                    FROM tbl_dosen WHERE KID = ? LIMIT 1");
if (!$stmt) {
    $_SESSION['flash_error'] = 'Query tidak benar.';
    redirect_ke('read_bio.php');
}

mysqli_stmt_bind_param($stmt, "i", $KID);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($res);
mysqli_stmt_close($stmt);

if (!$row) {
    $_SESSION['flash_error'] = 'Record tidak ditemukan.';
    redirect_ke('read_bio.php');
}

#Nilai awal (prefill form)
$kode  = $row['KD_DOSEN'] ?? '';
$nama = $row['NM_DOSEN'] ?? '';
$almt = $row['ALMT'] ?? '';
$tgl = $row['TGL'] ?? '';
$jja = $row['JJA'] ?? '';
$prodi = $row['PRODI'] ?? '';
$hp = $row['NO_HP'] ?? '';
$pasangan = $row['PASANGAN'] ?? '';
$anak = $row['ANAK'] ?? '';
$ilmu = $row['ILMU'] ?? '';


#Ambil error dan nilai old input kalau ada
$flash_error = $_SESSION['flash_error'] ?? '';
$old = $_SESSION['old'] ?? [];
unset($_SESSION['flash_error'], $_SESSION['old']);
if (!empty($old)) {
    $nama = $old['NM_DOSEN'] ?? $nama;
    $almt = $old['ALMT'] ?? $almt;
    $tgl = $old['TGL'] ?? $tgl;
    $jja = $old['JJA'] ?? $jja;
    $prodi = $old['PRODI'] ?? $prodi;
    $hp = $old['NO_HP'] ?? $hp;
    $pasangan = $old['PASANGAN'] ?? $pasangan;
    $anak = $old['ANAK'] ?? $anak;
    $ilmu = $old['ILMU'] ?? $ilmu;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="biodata">
            <h2>Edit data dosen</h2>
            <?php if (!empty($flash_error)): ?>
                <div style="padding:10px; margin-bottom:10px; 
            background:#f8d7da; color:#721c24; border-radius:6px;">
                    <?= $flash_error; ?>
                </div>
            <?php endif; ?>

            <form action="update_bio.php" method="POST">
                <input type="text" name="KID" value="<?= (int)$KID; ?>">
                <label for="txtKodeDos"><span>Kode Dosen:</span>
                    <input type="text" id="txtKodeDos" name="txtKodeDos" placeholder="Masukkan Kode Dosen" required>
                </label>

                <label for="txtNmDosen"><span>Nama Dosen:</span>
                    <input type="text" id="txtNmDosen" name="txtNmDosen" placeholder="Masukkan Nama Dosen" required>
                </label>

                <label for="txtAlRmh"><span>Alamat Rumah:</span>
                    <input type="text" id="txtAlRmh" name="txtAlRmh" placeholder="Masukkan Alamat Rumah" required>
                </label>

                <label for="txtTglDosen"><span>Tanggal Jadi Dosen:</span>
                    <input type="text" id="txtTglDosen" name="txtTglDosen" placeholder="Masukkan Tanggal Jadi Dosen" required>
                </label>

                <label for="txtJJA"><span>JJA Dosen:</span>
                    <input type="text" id="txtJJA" name="txtJJA" placeholder="Masukkan JJA Dosen" required>
                </label>

                <label for="txtProdi"><span>Homebase Prodi:</span>
                    <input type="text" id="txtProdi" name="txtProdi" placeholder="Masukkan Homebase Prodi" required>
                </label>

                <label for="txtNoHP"><span>Nomor HP:</span>
                    <input type="text" id="txtNoHP" name="txtNoHP" placeholder="Masukkan Nomor HP" required>
                </label>

                <label for="txNamaPasangan"><span>Nama Pasangan:</span>
                    <input type="text" id="txNamaPasangan" name="txNamaPasangan" placeholder="Masukkan Nama Pasangan" required>
                </label>

                <label for="txtNmAnak"><span>Nama Anak:</span>
                    <input type="text" id="txtNmAnak" name="txtNmAnak" placeholder="Masukkan Nama Anak" required>
                </label>

                <label for="txtBidangIlmu"><span>Bidang Ilmu Dosen:</span>
                    <input type="text" id="txtBidangIlmu" name="txtBidangIlmu" placeholder="Masukkan Bidang Ilmu Dosen" required>
                </label>
            </form>

            <button type="submit">Kirim</button>
            <button type="reset">Batal</button>
        </section>
    </main>

    <script src="script.js"></script>
</body>

</html>