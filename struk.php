<?php
// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {

    echo "<h3>Struk Pesanan</h3>";
    echo "Nama: " . $_SESSION["nama"] . "<br>";
    echo "Menu: " . $_SESSION["menu"] . "<br>";
    echo "Jumlah: " . $_SESSION["jumlah"] . "<br>";
    echo "Kategori: " . $_SESSION["kategori"] . "<br>";
    echo "Total: Rp " . number_format($_SESSION["total"], 0, ',', '.') . "<br><br>";

    echo "<b>Status Pengambilan:</b><br>";
    for ($i = 1; $i <= $_SESSION["jumlah"]; $i++) {
        echo "Porsi ke-$i: Siap diambil<br>";
    }
}

