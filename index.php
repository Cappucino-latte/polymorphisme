<?php

require_once 'EmailNotifikasi.php';
require_once 'SMSNotifikasi.php';
require_once 'PushNotifikasi.php';

function prosesNotifikasi(Notifikasi $n, $pesan) {
    $n->kirim($pesan);
}

echo "<p>";
prosesNotifikasi(new EmailNotifikasi(), "Selamat datang di aplikasi Sistem Management Ormawa!");
echo "</p>";

echo "<p>";
prosesNotifikasi(new SMSNotifikasi(), "Verifikasi akun Anda dengan kode 112223333");
echo "</p>";

echo "<p>";
prosesNotifikasi(new PushNotifikasi(), "Anda memiliki pesan baru");
echo "</p>";
