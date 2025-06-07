<?php
require_once 'Notifikasi.php';

class SMSNotifikasi extends Notifikasi {
    public function kirim($pesan) {
        echo "Mengirim SMS: $pesan";
    }
}
