<?php
$kalimat = "STITEK Bontang adalah kampus IT terbaik";
$kalimat_uppercase = strtoupper($kalimat); // Mengubah semua huruf menjadi kapital

echo "Kalimat asli: " . $kalimat . "<br>";
echo "Panjang kalimat: " . strlen($kalimat) . "<br>";
echo "Jumlah kata: " . str_word_count($kalimat) . "<br>";
echo "Mengganti kata: " . str_replace("terbaik", "favorit", $kalimat) . "<br><br>";
echo "Versi uppercase: " . $kalimat_uppercase;
?>