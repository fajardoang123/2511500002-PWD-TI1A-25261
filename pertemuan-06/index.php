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
                $sksMatkul1 = "8";
                echo $sksMatkul1;
                ?>
            </p>

            <p>
                <strong>Kehadiran :</strong>
                <?php
                $nilaiHadir1 = "100";
                echo $nilaiHadir1;
                ?>
            </p>

            <p>
                <strong>Tugas :</strong>
                <?php
                $nilaiTugas1 = "100";
                echo $nilaiTugas1;
                ?>
            </p>

            <p>
                <strong>UTS :</strong>
                <?php
                $nilaiUTS1 = "100";
                echo $nilaiUTS1;
                ?>
            </p>

            <p>
                <strong>UAS :</strong>
                <?php
                $nilaiUAS1 = "100";
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
                    $mutu1 = "4.00";
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
                $sksMatkul2 = "5";
                echo $sksMatkul2;
                ?>
            </p>

            <p>
                <strong>Kehadiran :</strong>
                <?php
                $nilaiHadir2 = "75";
                echo $nilaiHadir2;
                ?>
            </p>

            <p>
                <strong>Tugas :</strong>
                <?php
                $nilaiTugas2 = "65";
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
                    $mutu2 = "4.00";
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
                echo $bobot2;
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
                $namaMatkul3 = "Konsep Basis Data";
                echo $namaMatkul3;
                ?>
            </p>

            <p>
                <strong>SKS :</strong>
                <?php
                $sksMatkul3 = "4";
                echo $sksMatkul3;
                ?>
            </p>

            <p>
                <strong>Kehadiran :</strong>
                <?php
                $nilaiHadir3 = "60";
                echo $nilaiHadir3;
                ?>
            </p>

            <p>
                <strong>Tugas :</strong>
                <?php
                $nilaiTugas3 = "90";
                echo $nilaiTugas3;
                ?>
            </p>

            <p>
                <strong>UTS :</strong>
                <?php
                $nilaiUTS3 = "80";
                echo $nilaiUTS3;
                ?>
            </p>

            <p>
                <strong>UAS :</strong>
                <?php
                $nilaiUAS3 = "85";
                echo $nilaiUAS3;
                ?>
            </p>

            <p>
                <strong>Nilai Akhir :</strong>
                <?php
                $nilaiAkhir3 = (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3);
                echo $nilaiAkhir3;
                ?>
            </p>

            <p>
                <strong>Grade :</strong>
                <?php
                if ($nilaiHadir3 < 70) {
                    $grade3 = "E";
                } elseif ($nilaiAkhir3 >= 91) {
                    $grade3 = "A";
                } elseif ($nilaiAkhir3 >= 81) {
                    $grade3 = "A-";
                } elseif ($nilaiAkhir3 >= 76) {
                    $grade3 = "B+";
                } elseif ($nilaiAkhir3 >= 71) {
                    $grade3 = "B";
                } elseif ($nilaiAkhir3 >= 66) {
                    $grade3 = "B-";
                } elseif ($nilaiAkhir3 >= 61) {
                    $grade3 = "C+";
                } elseif ($nilaiAkhir3 >= 56) {
                    $grade3 = "C";
                } elseif ($nilaiAkhir3 >= 51) {
                    $grade3 = "C-";
                } elseif ($nilaiAkhir3 >= 36) {
                    $grade3 = "D";
                } else {
                    $grade3 = "E";
                }
                echo $grade3;
                ?>
            </p>

            <p>
                <strong>Angka Mutu :</strong>
                <?php
                if ($nilaiHadir3 < 70) {
                    $mutu3 = "0.00";
                } elseif ($nilaiAkhir3 >= 91) {
                    $mutu3 = "4.00";
                } elseif ($nilaiAkhir3 >= 81) {
                    $mutu3 = "3.70";
                } elseif ($nilaiAkhir3 >= 76) {
                    $mutu3 = "3.30";
                } elseif ($nilaiAkhir3 >= 71) {
                    $mutu3 = "3.00";
                } elseif ($nilaiAkhir3 >= 66) {
                    $mutu3 = "2.70";
                } elseif ($nilaiAkhir3 >= 61) {
                    $mutu3 = "2.30";
                } elseif ($nilaiAkhir3 >= 56) {
                    $mutu3 = "2.00";
                } elseif ($nilaiAkhir3 >= 51) {
                    $mutu3 = "1.70";
                } elseif ($nilaiAkhir3 >= 36) {
                    $mutu3 = "1.00";
                } else {
                    $mutu3 = "0.00";
                }
                echo $mutu3;
                ?>
            </p>

            <p>
                <strong>Bobot :</strong>
                <?php
                $bobot3 = $mutu3 * $sksMatkul3;
                echo $bobot3;
                ?>
            </p>

            <p>
                <strong>Status :</strong>
                <?php
                if ($grade3 == "A") {
                    $status3 = "LULUS";
                } elseif ($grade3 == "A-") {
                    $status3 = "LULUS";
                } elseif ($grade3 == "B+") {
                    $status3 = "LULUS";
                } elseif ($grade3 == "B") {
                    $status3 = "LULUS";
                } elseif ($grade3 == "B-") {
                    $status3 = "LULUS";
                } elseif ($grade3 == "C+") {
                    $status3 = "LULUS";
                } elseif ($grade3 == "C") {
                    $status3 = "LULUS";
                } elseif ($grade3 == "C-") {
                    $status3 = "LULUS";
                } else {
                    $status3 = "GAGAL";
                }
                echo $status3;
                ?>
            </p>
            <!-- MATKUIL 3 END -->
            <hr>
            <!-- MATKUL 4 -->
            <p>
                <strong>Nama Matakuliah 4 :</strong>
                <?php
                $namaMatkul4 = "Aplikasi Perkantoran";
                echo $namaMatkul4;
                ?>
            </p>

            <p>
                <strong>SKS :</strong>
                <?php
                $sksMatkul4 = "6";
                echo $sksMatkul4;
                ?>
            </p>

            <p>
                <strong>Kehadiran :</strong>
                <?php
                $nilaiHadir4 = "70";
                echo $nilaiHadir4;
                ?>
            </p>

            <p>
                <strong>Tugas :</strong>
                <?php
                $nilaiTugas4 = "55";
                echo $nilaiTugas4;
                ?>
            </p>

            <p>
                <strong>UTS :</strong>
                <?php
                $nilaiUTS4 = "40";
                echo $nilaiUTS4;
                ?>
            </p>

            <p>
                <strong>UAS :</strong>
                <?php
                $nilaiUAS4 = "50";
                echo $nilaiUAS4;
                ?>
            </p>

            <p>
                <strong>Nilai Akhir :</strong>
                <?php
                $nilaiAkhir4 = (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4);
                echo $nilaiAkhir4;
                ?>
            </p>

            <p>
                <strong>Grade :</strong>
                <?php
                if ($nilaiHadir4 < 70) {
                    $grade4 = "E";
                } elseif ($nilaiAkhir4 >= 91) {
                    $grade4 = "A";
                } elseif ($nilaiAkhir4 >= 81) {
                    $grade4 = "A-";
                } elseif ($nilaiAkhir4 >= 76) {
                    $grade4 = "B+";
                } elseif ($nilaiAkhir4 >= 71) {
                    $grade4 = "B";
                } elseif ($nilaiAkhir4 >= 66) {
                    $grade4 = "B-";
                } elseif ($nilaiAkhir4 >= 61) {
                    $grade4 = "C+";
                } elseif ($nilaiAkhir4 >= 56) {
                    $grade4 = "C";
                } elseif ($nilaiAkhir4 >= 51) {
                    $grade4 = "C-";
                } elseif ($nilaiAkhir4 >= 36) {
                    $grade4 = "D";
                } else {
                    $grade4 = "E";
                }
                echo $grade4;
                ?>
            </p>

            <p>
                <strong>Angka Mutu :</strong>
                <?php
                if ($nilaiHadir4 < 70) {
                    $mutu4 = "0.00";
                } elseif ($nilaiAkhir4 >= 91) {
                    $mutu4 = "4.00";
                } elseif ($nilaiAkhir4 >= 81) {
                    $mutu4 = "3.70";
                } elseif ($nilaiAkhir4 >= 76) {
                    $mutu4 = "3.30";
                } elseif ($nilaiAkhir4 >= 71) {
                    $mutu4 = "3.00";
                } elseif ($nilaiAkhir4 >= 66) {
                    $mutu4 = "2.70";
                } elseif ($nilaiAkhir4 >= 61) {
                    $mutu4 = "2.30";
                } elseif ($nilaiAkhir4 >= 56) {
                    $mutu4 = "2.00";
                } elseif ($nilaiAkhir4 >= 51) {
                    $mutu4 = "1.70";
                } elseif ($nilaiAkhir4 >= 36) {
                    $mutu4 = "1.00";
                } else {
                    $mutu4 = "0.00";
                }
                echo $mutu4;
                ?>
            </p>

            <p>
                <strong>Bobot :</strong>
                <?php
                $bobot4 = $mutu4 * $sksMatkul4;
                echo $bobot4;
                ?>
            </p>

            <p>
                <strong>Status :</strong>
                <?php
                if ($grade4 == "A") {
                    $status4 = "LULUS";
                } elseif ($grade4 == "A-") {
                    $status4 = "LULUS";
                } elseif ($grade4 == "B+") {
                    $status4 = "LULUS";
                } elseif ($grade4 == "B") {
                    $status4 = "LULUS";
                } elseif ($grade4 == "B-") {
                    $status4 = "LULUS";
                } elseif ($grade4 == "C+") {
                    $status4 = "LULUS";
                } elseif ($grade4 == "C") {
                    $status4 = "LULUS";
                } elseif ($grade4 == "C-") {
                    $status4 = "LULUS";
                } else {
                    $status4 = "GAGAL";
                }
                echo $status4;
                ?>
            </p>
            <!-- MATKUL 4 END -->
            <hr>
            <!-- MATKUL 5 -->
            <p>
                <strong>Nama Matakuliah 5 :</strong>
                <?php
                $namaMatkul5 = "Kalkulus";
                echo $namaMatkul5;
                ?>
            </p>

            <p>
                <strong>SKS :</strong>
                <?php
                $sksMatkul5 = "6";
                echo $sksMatkul5;
                ?>
            </p>

            <p>
                <strong>Kehadiran :</strong>
                <?php
                $nilaiHadir5 = "90";
                echo $nilaiHadir5;
                ?>
            </p>

            <p>
                <strong>Tugas :</strong>
                <?php
                $nilaiTugas5 = "95";
                echo $nilaiTugas5;
                ?>
            </p>

            <p>
                <strong>UTS :</strong>
                <?php
                $nilaiUTS5 = "90";
                echo $nilaiUTS5;
                ?>
            </p>

            <p>
                <strong>UAS :</strong>
                <?php
                $nilaiUAS5 = "85";
                echo $nilaiUAS5;
                ?>
            </p>

            <p>
                <strong>Nilai Akhir :</strong>
                <?php
                $nilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);
                echo $nilaiAkhir5;
                ?>
            </p>

            <p>
                <strong>Grade :</strong>
                <?php
                if ($nilaiHadir5 < 70) {
                    $grade5 = "E";
                } elseif ($nilaiAkhir5 >= 91) {
                    $grade5 = "A";
                } elseif ($nilaiAkhir5 >= 81) {
                    $grade5 = "A-";
                } elseif ($nilaiAkhir5 >= 76) {
                    $grade5 = "B+";
                } elseif ($nilaiAkhir5 >= 71) {
                    $grade5 = "B";
                } elseif ($nilaiAkhir5 >= 66) {
                    $grade5 = "B-";
                } elseif ($nilaiAkhir5 >= 61) {
                    $grade5 = "C+";
                } elseif ($nilaiAkhir5 >= 56) {
                    $grade5 = "C";
                } elseif ($nilaiAkhir5 >= 51) {
                    $grade5 = "C-";
                } elseif ($nilaiAkhir5 >= 36) {
                    $grade5 = "D";
                } else {
                    $grade5 = "E";
                }
                echo $grade5;
                ?>
            </p>

            <p>
                <strong>Angka Mutu :</strong>
                <?php
                if ($nilaiHadir5 < 70) {
                    $mutu5 = "0.00";
                } elseif ($nilaiAkhir5 >= 91) {
                    $mutu5 = "4.00";
                } elseif ($nilaiAkhir5 >= 81) {
                    $mutu5 = "3.70";
                } elseif ($nilaiAkhir5 >= 76) {
                    $mutu5 = "3.30";
                } elseif ($nilaiAkhir5 >= 71) {
                    $mutu5 = "3.00";
                } elseif ($nilaiAkhir5 >= 66) {
                    $mutu5 = "2.70";
                } elseif ($nilaiAkhir5 >= 61) {
                    $mutu5 = "2.30";
                } elseif ($nilaiAkhir5 >= 56) {
                    $mutu5 = "2.00";
                } elseif ($nilaiAkhir5 >= 51) {
                    $mutu5 = "1.70";
                } elseif ($nilaiAkhir5 >= 36) {
                    $mutu5 = "1.00";
                } else {
                    $mutu5 = "0.00";
                }
                echo $mutu5;
                ?>
            </p>

            <p>
                <strong>Bobot :</strong>
                <?php
                $bobot5 = $mutu5 * $sksMatkul5;
                echo $bobot5;
                ?>
            </p>

            <p>
                <strong>Status :</strong>
                <?php
                if ($grade5 == "A") {
                    $status5 = "LULUS";
                } elseif ($grade5 == "A-") {
                    $status5 = "LULUS";
                } elseif ($grade5 == "B+") {
                    $status5 = "LULUS";
                } elseif ($grade5 == "B") {
                    $status5 = "LULUS";
                } elseif ($grade5 == "B-") {
                    $status5 = "LULUS";
                } elseif ($grade5 == "C+") {
                    $status5 = "LULUS";
                } elseif ($grade5 == "C") {
                    $status5 = "LULUS";
                } elseif ($grade5 == "C-") {
                    $status5 = "LULUS";
                } else {
                    $status5 = "GAGAL";
                }
                echo $status5;
                ?>
            </p>
            <!-- MATKUL 5 END -->
            <hr>
            <p>
                <strong>Total Bobot :</strong>
                <?php
                    $totalBobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
                    echo $totalBobot;
                ?>
            </p>

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