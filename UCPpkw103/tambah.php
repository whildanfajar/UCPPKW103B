<?php

include_once("koneksi.php");

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $ktp = $_POST['ktp'];
  $telp = $_POST['telp'];
  $tahunmasuk = $_POST['tahunmasuk'];

  $q = mysqli_query($connect,"INSERT INTO karyawan (id_karyawan, nama, ktp, telp, tahunmasuk) VALUES ('', '$nama', '$ktp', '$telp', '$tahunmasuk')");
  
}
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
?>