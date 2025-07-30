<?php
function sapa($nama, $waktu) {
    return "Selamat $waktu, $nama!";
}

// Contoh penggunaan fungsi
$pesan = sapa("Hanif", "Pagi");
echo $pesan . "<br>";

// Contoh lain dengan waktu berbeda
echo sapa("Zul", "Siang") . "<br>";
echo sapa("Agus", "Malam");
?>