<?php


function luas_segitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

// Contoh penggunaan
$luas_segitiga = luas_segitiga(6, 8);
echo "Luas segitiga adalah: " . $luas_segitiga;
