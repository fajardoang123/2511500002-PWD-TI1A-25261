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
                <strong>Nama:</strong>
                <?php 
                    echo "$nama";
                ?> 
            </p>

            <p>
                <strong>NIM:</strong>
                <?php
                    echo "$nim";
                ?>
            </p>

            <p>
                <strong>Tempat Lahir:</strong>
                <?php
                    echo "$tempat_lahir";
                ?>
            </p>

            <p>
                <strong>Tanggal Lahir:</strong>
                <?php
                    echo "$tanggal_lahir";
                ?>
            </p>

            <p>
                <strong>Hobi:</strong>
                <?php
                    echo "$hobi";
                ?>
            </p>

            <p>
                <strong>Pasangan:</strong>
                <?php
                    echo "$pasangan";
                ?>
            </p>

            <p>
                <strong>Pekerjaan:</strong> 
                <?php
                    echo "$pekerjaan";
                ?>
            </p>

            <p>
                <strong>Nama Orang Tua:</strong>
                <?php
                    echo "$orang_tua";
                ?>
            </p>

            <p>
                <strong>Nama Kakak:</strong>
                <?php
                    echo "$kakak";
                ?>
            </p>

            <p>
                <strong>Name Adik:</strong>
                <?php
                    echo "$adik";
                ?>
            </p>
        </section>

        <section id="contact">
            <h2>Kontak Kami</h2>
            <form action="" method="get">
                <label for="txtNama"><span>Nama:</span>
                    <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required
                        autocomplete="name">
                </label>

                <label for="txtEmail"><span>Email:</span>
                    <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required
                        autocomplete="email">
                </label>

                <label for="txtPesan"><span>Pesan:</span>
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