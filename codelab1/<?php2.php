<?php
$tinggi = 5; // Mengatur tinggi segitiga

for ($i = $tinggi; $i >= 1; $i--) {
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
