<?php
// Indexed array berisi nama teman sekelas
$teman_sekelas = ["Zul", "Sopyan", "Agus", "Naufal", "Wandi"];

// Menampilkan daftar nama menggunakan foreach
echo "Daftar Teman Sekelas:<br>";
foreach ($teman_sekelas as $index => $nama) {
    echo ($index + 1) . ". " . $nama . "<br>";
}
?>