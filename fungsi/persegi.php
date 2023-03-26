<?php



function luas_persegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}

// Contoh penggunaan
$luas_persegi = luas_persegi(4);
echo "Luas persegi adalah: " . $luas_persegi;
