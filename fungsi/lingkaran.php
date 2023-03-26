<?php



function luas_lingkaran($jari_jari) {
    $luas = 3.14 * $jari_jari * $jari_jari;
    return $luas;
}

// Contoh penggunaan
$luas_lingkaran = luas_lingkaran(5);
echo "Luas lingkaran adalah: " . $luas_lingkaran;
