<?php
include 'Printer.php';
$printer = new Printer();
$buku = $printer->cetakBuku('Menyelami Framework Laravel');

include 'Kurir.php';
$kurir = new Kurir();
$kurir->kirim($buku, 'Bandung');
