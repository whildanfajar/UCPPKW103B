<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Whildan Fajar||103||B</title>
  </head>
  <body>
    <div class="sidebar">
      <header>Menu</header>
      <a href="index.php" class="active">
        <span>Detial Karyawan</span>
      </a>
      <a href="login.php">
        <span>Logout</span>
      </a>
      
    </div>
    <div class="main">
        
    <?php
    include 'koneksi.php';
    $id = $_GET['id_karyawan'];
    $karyawan = mysqli_query($connect, "select * from karyawan where id_karyawan='$id'");
    while ($data = mysqli_fetch_assoc($karyawan)) {
        $tahun_masuk = $data['tahunmasuk'];
                        $lama = new DateTime($tahun_masuk);
                        $sekarang = new DateTime();
                        $masa_kerja = $sekarang->diff($lama);
    ?>
        <div class="container mt-5">
            <p><a class="back" href="index.php">Home</a>/ Detail Karyawan / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card-body">   
                <div class="card-header">
                    <h3 class="title">Profil Karyawan</h3>
                </div>
                    <table class="box">
                        <tr>
                            <td>Nama</td>
                            <td>: <?php echo $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>No. KTP</td>
                            <td>: <?php echo $data['ktp'] ?></td>
                        </tr>
                        <tr>
                            <td>No. Telp</td>
                            <td>: <?php echo $data['telp'] ?></td>
                        </tr>
                        <tr>
                            <td>Tahun Masuk</td>
                            <td>: <?php echo $data['tahunmasuk'] ?></td>
                        </tr>
                        <tr>
                            <td>Masa Kerja</td>
                            <td>: <?php echo $masa_kerja->y . "&nbsp" . "Tahun" ?></td>
                        </tr>
                        <tr>
                            <a href="index.php?id=<?php echo $data['id_karyawan']; ?>" class="btn btn-primary btn-sm text-white">HOME</a>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
        </table>
    </div>
</body>
</html>

