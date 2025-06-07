<?php
require_once 'Notifikasi.php';

class PushNotifikasi extends Notifikasi {
    public function kirim($pesan) {
        echo "Mengirim Push Notifikasi: $pesan";
    }
}
