<?php
session_start();
$_SESSION["nama"] = $_POST["txtNama"];
$_SESSION["email"] = $_POST["txtEmail"];
$_SESSION["pesan"] = $_POST["txtPesan"];
$_SESSION["nama lengkap"] = $_POST["nama_lengkap"];
$_SESSION["nim"] = $_POST["nim"];
$_SESSION["tempat lahir"] = $_POST["tempat_lahir"];
$_SESSION["tanggal lahir"] = $_POST["tanggal_lahir"];
$_SESSION["hobi"] = $_POST["hobi"];
$_SESSION["pasangan"] = $_POST["pasangan"];
$_SESSION["pekerjaan"] = $_POST["pekerjaan"];
$_SESSION["nama orang tua"] = $_POST["orang_tua"];
$_SESSION["nama kakak"] = $_POST["kakak"];
$_SESSION["nama adik"] = $_POST["adik"];
header("location: index.php");
?>