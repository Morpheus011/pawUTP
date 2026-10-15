<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini
if ($jumlah <= 0) {
    echo "Pesanan gagal jumlah porsi minimal 1";
} else {
    $harga = 25000; 
    $subtotal = $harga * $jumlah;
    if ($jumlah >= 4) {
        $diskon = $subtotal * 0.15;
        $total = $subtotal - $diskon;
        echo "Total tagihan untuk $jumlah porsi setelah diskon 15%: Rp".number_format($total, 0, ',', '.');
    } else {
        $total = $subtotal;
        echo "Total tagihan untuk $jumlah porsi harga normal: Rp" . number_format($total, 0, ',', '.');
    }
}

// cek valid
$valid = true;
$pesan = "";
