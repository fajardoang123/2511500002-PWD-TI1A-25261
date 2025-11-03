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
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Ini contoh paragraf HTML</p>
        </section>

        <section id="about">
            <?php
            $nama = "Fajar Agus Setiawan &#128526";
            $nim = "2511500002";
            $tempat_lahir = "Sungailiat";
            $tanggal_lahir = "14 Agustus 2007";
            $hobi = "Bermain Game";
            $pasangan = "HTS (Hubungan Tahap Serius) &hearts;";
            $pekerjaan = "Mahasiswa di ISB Atma Luhur &copy; 2025";
            $orang_tua = "Bapak Abdurrahman dan Ibu Yasimah";
            $kakak = "-";
            $adik = "Mauralia Nurhasanah";
            ?>
            <h2>Tentang Saya </h2>
            <p>
                <strong>Nama :</strong>
                <?php
                echo "$nama";
                ?>
            </p>

            <p>
                <strong>NIM :</strong>
                <?php
                echo "$nim";
                ?>
            </p>

            <p>
                <strong>Tempat Lahir :</strong>
                <?php
                echo "$tempat_lahir";
                ?>
            </p>

            <p>
                <strong>Tanggal Lahir :</strong>
                <?php
                echo "$tanggal_lahir";
                ?>
            </p>

            <p>
                <strong>Hobi :</strong>
                <?php
                echo "$hobi";
                ?>
            </p>

            <p>
                <strong>Pasangan :</strong>
                <?php
                echo "$pasangan";
                ?>
            </p>

            <p>
                <strong>Pekerjaan :</strong>
                <?php
                echo "$pekerjaan";
                ?>
            </p>

            <p>
                <strong>Nama Orang Tua :</strong>
                <?php
                echo "$orang_tua";
                ?>
            </p>

            <p>
                <strong>Nama Kakak :</strong>
                <?php
                echo "$kakak";
                ?>
            </p>

            <p>
                <strong>Name Adik :</strong>
                <?php
                echo "$adik";
                ?>
            </p>
        </section>

        <section id="ipk">
            <?php

            // variabel matkul 3
            $namaMatkul3 = "Konsep Basis Data";
            $sksMatkul3 = "3";
            $nilaiHadir3 = "75";
            $nilaiTugas3 = "60";
            $nilaiUTS3 = "70";
            $nilaiUAS3 = "65";
            $nilaiAkhir3 = "";
            $grade3 = "";
            $mutu3 = "";
            $bobot3 = "";
            $status3 = "";

            // variabel matkul 4
            $namaMatkul4 = "Aplikasi Perkantoran";
            $sksMatkul4 = "7";
            $nilaiHadir4 = "70";
            $nilaiTugas4 = "50";
            $nilaiUTS4 = "60";
            $nilaiUAS4 = "80";
            $nilaiAkhir4 = "";
            $grade4 = "";
            $mutu4 = "";
            $bobot4 = "";
            $status4 = "";

            // variabel matkul 5
            $namaMatkul5 = "Kalkulus";
            $sksMatkul5 = "6";
            $nilaiHadir5 = "70";
            $nilaiTugas5 = "75";
            $nilaiUTS5 = "70";
            $nilaiUAS5 = "60";
            $nilaiAkhir5 = "";
            $grade5 = "";
            $mutu5 = "";
            $bobot5 = "";
            $status5 = "";

            ?>
            <h2>Nilai saya</h2>
            <!-- MATKUL 1 -->
            <p>
                <strong>Nama Matakuliah 1 :</strong>
                <?php
                $namaMatkul1 = "Pemrograman Web Dasar";
                echo $namaMatkul1;
                ?>
            </p>

            <p>
                <strong>SKS :</strong>
                <?php
                $sksMatkul1 = "4";
                echo $sksMatkul1;
                ?>
            </p>

            <p>
                <strong>Kehadiran :</strong>
                <?php
                $nilaiHadir1 = "70";
                echo $nilaiHadir1;
                ?>
            </p>

            <p>
                <strong>Tugas :</strong>
                <?php
                $nilaiTugas1 = "40";
                echo $nilaiTugas1;
                ?>
            </p>

            <p>
                <strong>UTS :</strong>
                <?php
                $nilaiUTS1 = "40";
                echo $nilaiUTS1;
                ?>
            </p>

            <p>
                <strong>UAS :</strong>
                <?php
                $nilaiUAS1 = "40";
                echo $nilaiUAS1;
                ?>
            </p>

            <p>
                <strong>Nilai Akhir :</strong>
                <?php
                $nilaiAkhir1 = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);
                echo $nilaiAkhir1;
                ?>
            </p>

            <p>
                <strong>Grade :</strong>
                <?php
                if ($nilaiHadir1 < 70) {
                    $grade1 = "E";
                } elseif ($nilaiAkhir1 >= 91) {
                    $grade1 = "A";
                } elseif ($nilaiAkhir1 >= 81) {
                    $grade1 = "A-";
                } elseif ($nilaiAkhir1 >= 76) {
                    $grade1 = "B+";
                } elseif ($nilaiAkhir1 >= 71) {
                    $grade1 = "B";
                } elseif ($nilaiAkhir1 >= 66) {
                    $grade1 = "B-";
                } elseif ($nilaiAkhir1 >= 61) {
                    $grade1 = "C+";
                } elseif ($nilaiAkhir1 >= 56) {
                    $grade1 = "C";
                } elseif ($nilaiAkhir1 >= 51) {
                    $grade1 = "C-";
                } elseif ($nilaiAkhir1 >= 36) {
                    $grade1 = "D";
                } else {
                    $grade1 = "E";
                }
                echo $grade1;
                ?>
            </p>

            <p>
                <strong>Angka Mutu :</strong>
                <?php
                if ($nilaiHadir1 < 70) {
                    $mutu1 = "0.00";
                } elseif ($nilaiAkhir1 >= 91) {
                    $mutu1 = "4,00";
                } elseif ($nilaiAkhir1 >= 81) {
                    $mutu1 = "3.70";
                } elseif ($nilaiAkhir1 >= 76) {
                    $mutu1 = "3.30";
                } elseif ($nilaiAkhir1 >= 71) {
                    $mutu1 = "3.00";
                } elseif ($nilaiAkhir1 >= 66) {
                    $mutu1 = "2.70";
                } elseif ($nilaiAkhir1 >= 61) {
                    $mutu1 = "2.30";
                } elseif ($nilaiAkhir1 >= 56) {
                    $mutu1 = "2.00";
                } elseif ($nilaiAkhir1 >= 51) {
                    $mutu1 = "1.70";
                } elseif ($nilaiAkhir1 >= 36) {
                    $mutu1 = "1.00";
                } else {
                    $mutu1 = "0.00";
                }
                echo $mutu1;
                ?>
            </p>

            <p>
                <strong>Bobot :</strong>
                <?php
                $bobot1 = $mutu1 * $sksMatkul1;
                echo $bobot1;
                ?>
            </p>

            <p>
                <strong>Status :</strong>
                <?php
                if ($grade1 == "A") {
                    $status1 = "LULUS";
                } elseif ($grade1 == "A-") {
                    $status1 = "LULUS";
                } elseif ($grade1 == "B+") {
                    $status1 = "LULUS";
                } elseif ($grade1 == "B") {
                    $status1 = "LULUS";
                } elseif ($grade1 == "B-") {
                    $status1 = "LULUS";
                } elseif ($grade1 == "C+") {
                    $status1 = "LULUS";
                } elseif ($grade1 == "C") {
                    $status1 = "LULUS";
                } elseif ($grade1 == "C-") {
                    $status1 = "LULUS";
                } else {
                    $status1 = "GAGAL";
                }
                echo $status1;
                ?>
            </p>
            <!-- MATKUL 1 END -->
            <hr>
            <!-- MATKUL 2 -->
            <p>
                <strong>Nama Matakuliah 2 :</strong>
                <?php
                $namaMatkul2 = "Logika Informatika";
                echo $namaMatkul2
                    ?>
            </p>

            <p>
                <strong>SKS :</strong>
                <?php
                $sksMatkul2 = "7";
                echo $sksMatkul2;
                ?>
            </p>

            <p>
                <strong>Kehadiran :</strong>
                <?php
                $nilaiHadir2 = "80";
                echo $nilaiHadir2;
                ?>
            </p>

            <p>
                <strong>Tugas :</strong>
                <?php
                $nilaiTugas2 = "75";
                echo $nilaiTugas2;
                ?>
            </p>

            <p>
                <strong>UTS :</strong>
                <?php
                $nilaiUTS2 = "90";
                echo $nilaiUTS2;
                ?>
            </p>

            <p>
                <strong>UAS :</strong>
                <?php
                $nilaiUAS2 = "85";
                echo $nilaiUAS2;
                ?>
            </p>

            <p>
                <strong>Nilai Akhir :</strong>
                <?php
                $nilaiAkhir2 = (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
                echo $nilaiAkhir2;
                ?>
            </p>
            
            <p>
                <strong>Grade :</strong>
                <?php
                if ($nilaiHadir2 < 70) {
                    $grade2 = "E";
                } elseif ($nilaiAkhir2 >= 91) {
                    $grade2 = "A";
                } elseif ($nilaiAkhir2 >= 81) {
                    $grade2 = "A-";
                } elseif ($nilaiAkhir2 >= 76) {
                    $grade2 = "B+";
                } elseif ($nilaiAkhir2 >= 71) {
                    $grade2 = "B";
                } elseif ($nilaiAkhir2 >= 66) {
                    $grade2 = "B-";
                } elseif ($nilaiAkhir2 >= 61) {
                    $grade2 = "C+";
                } elseif ($nilaiAkhir2 >= 56) {
                    $grade2 = "C";
                } elseif ($nilaiAkhir2 >= 51) {
                    $grade2 = "C-";
                } elseif ($nilaiAkhir2 >= 36) {
                    $grade2 = "D";
                } else {
                    $grade2 = "E";
                }
                echo $grade2;
                ?>
            </p>

            <p>
                <strong>Angka Mutu :</strong>
                <?php
                if ($nilaiHadir2 < 70) {
                    $mutu2 = "0.00";
                } elseif ($nilaiAkhir2 >= 91) {
                    $mutu2 = "4,00";
                } elseif ($nilaiAkhir2 >= 81) {
                    $mutu2 = "3.70";
                } elseif ($nilaiAkhir2 >= 76) {
                    $mutu2 = "3.30";
                } elseif ($nilaiAkhir2 >= 71) {
                    $mutu2 = "3.00";
                } elseif ($nilaiAkhir2 >= 66) {
                    $mutu2 = "2.70";
                } elseif ($nilaiAkhir2 >= 61) {
                    $mutu2 = "2.30";
                } elseif ($nilaiAkhir2 >= 56) {
                    $mutu2 = "2.00";
                } elseif ($nilaiAkhir2 >= 51) {
                    $mutu2 = "1.70";
                } elseif ($nilaiAkhir2 >= 36) {
                    $mutu2 = "1.00";
                } else {
                    $mutu2 = "0.00";
                }
                echo $mutu2;
                ?>
            </p>

            <p>
                <strong>Bobot :</strong>
                <?php
                $bobot2 = $mutu2 * $sksMatkul2;
                echo $bobot1;
                ?>
            </p>

            <p>
                <strong>Status :</strong>
                <?php
                if ($grade2 == "A") {
                    $status2 = "LULUS";
                } elseif ($grade2 == "A-") {
                    $status2 = "LULUS";
                } elseif ($grade2 == "B+") {
                    $status2 = "LULUS";
                } elseif ($grade2 == "B") {
                    $status2 = "LULUS";
                } elseif ($grade2 == "B-") {
                    $status2 = "LULUS";
                } elseif ($grade2 == "C+") {
                    $status2 = "LULUS";
                } elseif ($grade2 == "C") {
                    $status2 = "LULUS";
                } elseif ($grade2 == "C-") {
                    $status2 = "LULUS";
                } else {
                    $status2 = "GAGAL";
                }
                echo $status2;
                ?>
            </p>
            <!-- MATKUL 2 END -->
            <hr>
            <!-- MATKUL 3 -->
            <p>
                <strong>Nama Matakuliah 3 :</strong>
                <?php
                echo $namaMatkul3;
                ?>
            </p>

            <p>
                <strong>SKS :</strong>
                <?php
                echo $sksMatkul3;
                ?>
            </p>

            <p>
                <strong>Kehadiran :</strong>
                <?php
                echo $nilaiHadir3;
                ?>
            </p>

            <p>
                <strong>Tugas :</strong>
                <?php
                echo $nilaiTugas3;
                ?>
            </p>

            <p>
                <strong>UTS :</strong>
                <?php
                echo $nilaiUTS3;
                ?>
            </p>

            <p>
                <strong>UAS :</strong>
                <?php
                echo $nilaiUAS3;
                ?>
            </p>

            <p><strong>Nilai Akhir :</strong></p>
            <p><strong>Grade :</strong></p>
            <p><strong>Angka Mutu :</strong></p>
            <p><strong>Bobot :</strong></p>
            <p><strong>Status :</strong></p>
            <hr>
            <p>
                <strong>Nama Matakuliah 4 :</strong>
                <?php
                echo $namaMatkul4;
                ?>
            </p>

            <p>
                <strong>SKS :</strong>
                <?php
                echo $sksMatkul4;
                ?>
            </p>

            <p>
                <strong>Kehadiran :</strong>
                <?php
                echo $nilaiHadir4;
                ?>
            </p>

            <p>
                <strong>Tugas :</strong>
                <?php
                echo $nilaiTugas4;
                ?>
            </p>

            <p>
                <strong>UTS :</strong>
                <?php
                echo $nilaiUTS4;
                ?>
            </p>

            <p>
                <strong>UAS :</strong>
                <?php
                echo $nilaiUAS4;
                ?>
            </p>

            <p><strong>Nilai Akhir :</strong></p>
            <p><strong>Grade :</strong></p>
            <p><strong>Angka Mutu :</strong></p>
            <p><strong>Bobot :</strong></p>
            <p><strong>Status :</strong></p>
            <hr>
            <p>
                <strong>Nama Matakuliah 5 :</strong>
                <?php
                echo $namaMatkul5;
                ?>
            </p>

            <p>
                <strong>SKS :</strong>
                <?php
                echo $sksMatkul5;
                ?>
            </p>

            <p>
                <strong>Kehadiran :</strong>
                <?php
                echo $nilaiHadir5;
                ?>
            </p>

            <p>
                <strong>Tugas :</strong>
                <?php
                echo $nilaiTugas5;
                ?>
            </p>

            <p>
                <strong>UTS :</strong>
                <?php
                echo $nilaiUTS5;
                ?>
            </p>

            <p>
                <strong>UAS :</strong>
                <?php
                echo $nilaiUAS5;
                ?>
            </p>

            <p><strong>Nilai Akhir :</strong></p>
            <p><strong>Grade :</strong></p>
            <p><strong>Angka Mutu :</strong></p>
            <p><strong>Bobot :</strong></p>
            <p><strong>Status :</strong></p>
            <hr>
            <p><strong>Total Bobot :</strong></p>
            <p><strong>Total SKS :</strong></p>
            <p><strong>IPK :</strong></p>
        </section>

        <section id="contact">
            <h2>Kontak Kami</h2>
            <form action="" method="get">
                <label for="txtNama"><span>Nama :</span>
                    <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required
                        autocomplete="name">
                </label>

                <label for="txtEmail"><span>Email :</span>
                    <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required
                        autocomplete="email">
                </label>

                <label for="txtPesan"><span>Pesan :</span>
                    <textarea name="txtPesan" id="txtPesan" rows="4" placeholder="Tulis pesan anda..."
                        required></textarea>
                    <small id="charCount">0/200 karakter</small>
                </label>

                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 FAJAR AGUS SETIAWAN (2511500002)</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>