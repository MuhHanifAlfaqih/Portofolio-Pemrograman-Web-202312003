<?php
$ukuran_baju = "M"; // Anda bisa mengganti nilai ini ("S", "M", "L", "XL")

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran Small - Cocok untuk tubuh kecil";
        break;
    case "M":
        echo "Ukuran Medium - Ukuran standar dewasa";
        break;
    case "L":
        echo "Ukuran Large - Untuk postur tubuh besar";
        break;
    case "XL":
        echo "Ukuran Extra Large - Untuk postur sangat besar";
        break;
    default:
        echo "Ukuran tidak tersedia dalam sistem";
}
?>