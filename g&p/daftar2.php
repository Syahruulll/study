
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nama = $_POST["nama"];
	$jenis_kelamin = $_POST["jenis_kelamin"];
	$asal_sekolah = $_POST["asal_sekolah"];
	$no_telpon = $_POST["no_telpon"];

	// Tampilkan hasil
	echo "<h2>Hasil Pendaftaran:</h2>";
	echo "Nama Siswa: " . $nama . "<br>";
	echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
	echo "Asal Sekolah: " . $asal_sekolah . "<br>";
	echo "No. Telpon: " . $no_telpon . "<br>";
}
?>