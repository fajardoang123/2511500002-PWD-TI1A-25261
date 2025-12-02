<?php
function bersihkan($str)
{
    return htmlspecialchars(trim($str));
}

function tidakKosong($str)
{
    return strlen(trim($str)) > 0;
}

function formatTanggal($tgl)
{
    return date("d M Y", strtotime($tgl));
}

function tampilkanBiodata($conf, $arr)
{
    $html = "";
    foreach ($conf as $k => $v) {
        $label = $v["label"];
        $nilai = bersihkan($arr[$k] ?? '');
        $suffix = $v["suffix"];

        $html .= "<p><strong>{$label}</strong> {$nilai}{$suffix}</p>";
    }
    return $html;
}

function tampilkanUser($var, $array)
{
    $kontak = "";
    foreach ($var as $kunci => $value) {
        $p = $value["label"];
        $isi = bersihkan($array[$kunci] ?? '');
        $s = $value["suffix"];

        $kontak .= "<label><span>{$p}</span> {$isi}{$s}</label>";
    }
    return $kontak;
}
?>