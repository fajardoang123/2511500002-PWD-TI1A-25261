<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

$nmr = filter_input(INPUT_GET, 'nmr', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
]);

if (!$nmr) {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read_biodata.php');
}


$stmt = mysqli_prepare($conn, "SELECT nmr, nim, nama, tempat_lahir,tanggal_lahir,hobi,pasangan,pekerjaan,nama_ortu,kakak,adik
                                    FROM tbl_about WHERE nmr = ? LIMIT 1");
if (!$stmt) {
    $_SESSION['flash_error'] = 'Query tidak benar.';
    redirect_ke('read_biodata.php');
}

mysqli_stmt_bind_param($stmt, "i", $nmr);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($res);
mysqli_stmt_close($stmt);

if (!$row) {
    $_SESSION['flash_error'] = 'Record tidak ditemukan.';
    redirect_ke('read_biodata.php');
}

#Nilai awal 
$nim = $row['nim'] ?? "";
$nama_lengkap = $row['nama'] ?? "";
$tempat  = $row['tempat_lahir'] ?? "";
$tanggal = $row['tanggal_lahir'] ?? "";
$hobi = $row['hobi'] ?? "";
$pasangan = $row['pasangan'] ?? "";
$pekerjaan = $row['pekerjaan'] ?? "";
$ortu = $row['nama_ortu'] ?? "";
$kakak = $row['kakak'] ?? "";
$adik = $row['adik'] ?? "";

#Ambil error dan nilai old input 
$flash_error = $_SESSION['flash_error'] ?? '';
$old = $_SESSION['old'] ?? [];
unset($_SESSION['flash_error'], $_SESSION['old']);
if (!empty($old)) {
    $nim = $old['nim'] ?? $nim;
    $nama_lengkap = $old['nama'] ?? $nama_lengkap;
    $tempat  = $old['tempat_lahir'] ?? $tempat;
    $tanggal = $old['tanggal_lahir'] ?? $tanggal;
    $hobi = $old['hobi'] ?? $hobi;
    $pasangan = $old['pasangan'] ?? $pasangan;
    $pekerjaan = $old['pekerjaan'] ?? $pekerjaan;
    $ortu = $old['nama_ortu'] ?? $ortu;
    $kakak = $old['kakak'] ?? $kakak;
    $adik = $old['adik'] ?? $adik;
}
?>
<?php
session_start();
require_once __DIR__ . '/fungsi.php';
?>

<!DOCTYPE html>
<html lang="en">

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
            <h2>Edit Biodata Mahasiswa</h2>
            <?php if (!empty($flash_error)): ?>
                <div style="padding:10px; margin-bottom:10px; background:#f8d7da; color:#721c24; border-radius:6px;">
                    <?= $flash_error; ?>
                </div>
            <?php endif; ?>
            <form action="proses_update_biodata.php" method="POST">
                <input type="text" name="nmr" value="<?= (int)$nmr; ?>">

                <label for="txtNim"><span>NIM:</span>
                    <input type="text" id="txtNim" name="txtNimEd" placeholder="Masukkan NIM" required value="<?= !empty($nim) ? $nim : '' ?>">
                </label>

                <label for="txtNmLengkap"><span>Nama Lengkap:</span>
                    <input type="text" id="txtNmLengkap" name="txtNmLengkapEd" placeholder="Masukkan Nama Lengkap" required value="<?= !empty($nama_lengkap) ? $nama_lengkap : '' ?>">
                </label>

                <label for="txtT4Lhr"><span>Tempat Lahir:</span>
                    <input type="text" id="txtT4Lhr" name="txtT4LhrEd" placeholder="Masukkan Tempat Lahir" required value="<?= !empty($tempat) ? $tempat : '' ?>">
                </label>

                <label for="txtTglLhr"><span>Tanggal Lahir:</span>
                    <input type="text" id="txtTglLhr" name="txtTglLhrEd" placeholder="Masukkan Tanggal Lahir" required value="<?= !empty($tanggal) ? $tanggal : '' ?>">
                </label>

                <label for="txtHobi"><span>Hobi:</span>
                    <input type="text" id="txtHobi" name="txtHobiEd" placeholder="Masukkan Hobi" required value="<?= !empty($hobi) ? $hobi : '' ?>">
                </label>

                <label for="txtPasangan"><span>Pasangan:</span>
                    <input type="text" id="txtPasangan" name="txtPasanganEd" placeholder="Masukkan Pasangan" required value="<?= !empty($pasangan) ? $pasangan : '' ?>">
                </label>

                <label for="txtKerja"><span>Pekerjaan:</span>
                    <input type="text" id="txtKerja" name="txtKerjaEd" placeholder="Masukkan Pekerjaan" required value="<?= !empty($pekerjaan) ? $pekerjaan : '' ?>">
                </label>

                <label for="txtNmOrtu"><span>Nama Orang Tua:</span>
                    <input type="text" id="txtNmOrtu" name="txtNmOrtuEd" placeholder="Masukkan Nama Orang Tua" required value="<?= !empty($ortu) ? $ortu : '' ?>">
                </label>

                <label for="txtNmKakak"><span>Nama Kakak:</span>
                    <input type="text" id="txtNmKakak" name="txtNmKakakEd" placeholder="Masukkan Nama Kakak" required value="<?= !empty($kakak) ? $kakak : '' ?>">
                </label>

                <label for="txtNmAdik"><span>Nama Adik:</span>
                    <input type="text" id="txtNmAdik" name="txtNmAdikEd" placeholder="Masukkan Nama Adik" required value="<?= !empty($adik) ? $adik : '' ?>">
                </label>

                <label for="txtCaptcha"><span>Captcha 2 x 5 = ?</span>
                    <input type="number" id="txtCaptcha" name="txtCaptcha" placeholder="Jawab Pertanyaan..." required>
                </label>

                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
                <a href="read_biodata.php" class="reset">Kembali</a>
            </form>
        </section>
    </main>

    <script src="script.js"></script>
</body>

</html>