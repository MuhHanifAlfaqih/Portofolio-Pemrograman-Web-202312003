<?php
$umur = 20;                   // Diubah menjadi 20 (≥17)
$sudah_punya_sim = true;      // Diubah menjadi true
if ($umur >= 17 && $sudah_punya_sim == true) {
    echo "Anda boleh mengemudi.";
} else {
    echo "Anda tidak boleh mengemudi.";
}
?>