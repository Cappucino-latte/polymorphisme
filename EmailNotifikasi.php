<?php
require_once 'Notifikasi.php';

class EmailNotifikasi extends Notifikasi {
    public function kirim($pesan) {
        echo "Mengirim Email: $pesan";
    }
}
