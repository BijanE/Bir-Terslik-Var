<?php
session_start();
$vt_sunucu="localhost";
$vt_kullanici="285524";
$vt_sifre="123456";
$vt_adi="285524";
$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);
if ($baglan -> connect_errno)
{
    echo("BAĞLANAMADI!");
    exit;
}
?>