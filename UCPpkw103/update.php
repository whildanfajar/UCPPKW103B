<?php

include_once("koneksi.php");

if (isset($_POST['submit'])) {
    $id_karyawan = $_POST['id_karyawan'];
    $nama = $_POST['nama'];
    $ktp = $_POST['ktp'];
    $telp = $_POST['telp'];
    $tahunmasuk = $_POST['tahunmasuk'];

  $q = mysqli_query($connect,"UPDATE karyawan SET nama = '$nama', ktp = '$ktp', telp = '$telp', tahunmasuk = '$tahunmasuk' WHERE id_karyawan = $id_karyawan");
  
}
    header('Location: index.php');
?>