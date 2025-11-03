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
                // variabel matkul 1
                $namaMatkul1 = "Pemrograman Web Dasar";
                $sksMatkul1 = "4";
                $nilaiHadir1 = "90";
                $nilaiTugas1 = "60";
                $nilaiUTS1 = "80";
                $nilaiUAS1 = "70";
                $nilaiAkhir1 = "";
                $grade1 = "";
                $mutu1 = "";
                $bobot1 = "";
                $status = "";

                // varibel matkul2
                $namaMatkul2 = "Logika Informatika";
                $sksMatkul2 = "3";
                $nilaiHadir2 = "80";
                $nilaiTugas2 = "75";
                $nilaiUTS2 = "90";
                $nilaiUAS2 = "85";
                $nilaiAkhir2 = "";
                $grade2 = "";
                $mutu2 = "";
                $bobot2 = "";
                $status2 = ""; 

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
                $nilaiUTS5 = "40";
                $nilaiUAS5 = "60";
                $nilaiAkhir5 = "";
                $grade5 = "";
                $mutu5 = "";
                $bobot5 = "";
                $status5 = "";
                
            ?>
            <h2>Nilai saya</h2>
            <p><strong>Nama Matakuliah 1 :</strong></p>
            <p><strong>SKS :</strong></p>
            <p><strong>Kehadiran :</strong></p>
            <p><strong>Tugas :</strong></p>
            <p><strong>UTS :</strong></p>
            <p><strong>UAS :</strong></p>
            <p><strong>Nilai Akhir :</strong></p>
            <p><strong>Grade :</strong></p>
            <p><strong>Angka Mutu :</strong></p>
            <p><strong>Bobot :</strong></p>
            <p><strong>Status :</strong></p>
            <hr>
            <p><strong>Nama Matakuliah 2 :</strong></p>
            <p><strong>SKS :</strong></p>
            <p><strong>Kehadiran :</strong></p>
            <p><strong>Tugas :</strong></p>
            <p><strong>UTS :</strong></p>
            <p><strong>UAS :</strong></p>
            <p><strong>Nilai Akhir :</strong></p>
            <p><strong>Grade :</strong></p>
            <p><strong>Angka Mutu :</strong></p>
            <p><strong>Bobot :</strong></p>
            <p><strong>Status :</strong></p>
            <hr>
            <p><strong>Nama Matakuliah 3 :</strong></p>
            <p><strong>SKS :</strong></p>
            <p><strong>Kehadiran :</strong></p>
            <p><strong>Tugas :</strong></p>
            <p><strong>UTS :</strong></p>
            <p><strong>UAS :</strong></p>
            <p><strong>Nilai Akhir :</strong></p>
            <p><strong>Grade :</strong></p>
            <p><strong>Angka Mutu :</strong></p>
            <p><strong>Bobot :</strong></p>
            <p><strong>Status :</strong></p>
            <hr>
            <p><strong>Nama Matakuliah 4 :</strong></p>
            <p><strong>SKS :</strong></p>
            <p><strong>Kehadiran :</strong></p>
            <p><strong>Tugas :</strong></p>
            <p><strong>UTS :</strong></p>
            <p><strong>UAS :</strong></p>
            <p><strong>Nilai Akhir :</strong></p>
            <p><strong>Grade :</strong></p>
            <p><strong>Angka Mutu :</strong></p>
            <p><strong>Bobot :</strong></p>
            <p><strong>Status :</strong></p>
            <hr>
            <p><strong>Nama Matakuliah 5 :</strong></p>
            <p><strong>SKS :</strong></p>
            <p><strong>Kehadiran :</strong></p>
            <p><strong>Tugas :</strong></p>
            <p><strong>UTS :</strong></p>
            <p><strong>UAS :</strong></p>
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