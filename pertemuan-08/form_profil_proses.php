<?php
session_start();
$_SESSION["nama"] = $_POST["txtNama"];
$_SESSION["email"] = $_POST["txtEmail"];
$_SESSION["pesan"] = $_POST["txtPesan"];
$_SESSION["NIM"] = $_POST["nim"];
$_SESSION["NamaLengkap"] = $_POST["nama_lengkap"];
$_SESSION["TempatLahir"] = $_POST["tempat_lahir"];
$_SESSION["TanggalLahir"] = $_POST["tanggal_lahir"];
$_SESSION["Hobi"] = $_POST["hobi"];
$_SESSION["Pasangan"] = $_POST["pasangan"];
$_SESSION["Pekerjaan"] = $_POST["pekerjaan"];
$_SESSION["NamaOrangTua"] = $_POST["orang_tua"];
$_SESSION["Kakak"] = $_POST["kakak"];
$_SESSION["Adik"] = $_POST["adik"];
header("location: index.php");
?>