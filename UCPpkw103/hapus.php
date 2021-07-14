<?php

include_once("koneksi.php");

  $id = $_GET['id_karyawan'];

  $q = mysqli_query($connect,"DELETE FROM karyawan WHERE id_karyawan='$id'");

  header('Location:index.php');
?>