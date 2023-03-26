<form method="get" action="">
  <input type="text" name="nama">
  <input type="submit" value="Kirim">
</form>

<?php
if (isset($_GET['nama'])) {
  $nama = $_GET['nama'];
  echo "Halo, $nama!";
}
// get bisa di ganti dengan post caranya tinggal diganti saja di form methodnya //
// dan $_ juga diganti bukan get tpi post //
?>
