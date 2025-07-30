<?php
// Array contoh
$buah_buahan = ["Apel", "Mangga", "Jeruk", "Anggur", "Pisang"];

// Perulangan foreach
echo "Daftar Buah-buahan:<br>";
foreach ($buah_buahan as $buah) {
    echo "- " . $buah . "<br>";
}

// Contoh dengan key dan value
$harga_buah = [
    "Apel" => 15000,
    "Mangga" => 20000,
    "Jeruk" => 10000,
    "Anggur" => 30000,
    "Pisang" => 5000
];

echo "<br>Daftar Harga Buah:<br>";
foreach ($harga_buah as $nama => $harga) {
    echo $nama . ": Rp" . number_format($harga, 0, ',', '.') . "<br>";
}
?>