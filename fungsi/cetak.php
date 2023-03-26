<?php

function cetakDataSiswa($nis, $nama, $rayon, $rombel) {
  echo "NIS: " . $nis . "<br>";
  echo "Nama: " . $nama . "<br>";
  echo "Rayon: " . $rayon . "<br>";
  echo "Rombel: " . $rombel . "<br><br>";
}

// data siswa 1
$cetakSiswa1 = cetakDataSiswa("001", "Syahrul", "Cicurug 3", "PPLG");

// data siswa 2
$cetakSiswa2 = cetakDataSiswa("002", "Budi", "Ciawi 2", "TJKT");

// data siswa 3
$cetakSiswa3 = cetakDataSiswa("003", "Citra", "Tajur 1", "DKV");

?>
