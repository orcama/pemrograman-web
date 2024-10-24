<?php
$tinggi = 5; // Mengatur tinggi segitiga

for ($i = 1; $i <= $tinggi; $i++) {
    // Membuat spasi
    for ($j = $tinggi; $j > $i; $j--) {
        echo " ";
    }
    // Mencetak bintang
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "\n"; // Ganti baris
}
?>
