<?php 
    require ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Whildan Fajar || 103 || B</title>
  </head>
  <body>
    <div class="sidebar">
      <header>Menu</header>
      <a href="#" class="active">
        <span>DAFTAR KARYAWAN</span>
      </a>
      <a href="login.php">
        <span>Logout</span>
      </a>
      
    </div>
    <div class="main">
        <h3 class="title">Daftar Karyawan</h3>
        <a class="btn" href="#example2">Tambah Data</a>
        <a class="btn" href="cetak.php" target="_blank">Cetak Data</a>
        <div class="cssmodal dialog" id="example2">
        <a href="#" class="veil"></a>
            <figure>
                <h2>Input Data</h2>
                <form method="post" action="tambah.php">
                    <label>nama karyawan</label>
                    <input type="text" id="input" class="Input-text" name="nama" placeholder="Nama Karyawan">
                    <label>No.Ktp</label>
                    <input type="text" id="input" class="Input-text" name="ktp" placeholder="No ktp">
                    <label>No Telepon</label>
                    <input type="text" id="input" class="Input-text" name="telp" placeholder="No telp">
                    <label>Tahun Masuk</label>
                    <input type="date" id="input" class="Input-text" name="tahunmasuk" placeholder="Tahun Masuk">
                    <input type="submit" id="input" class="btn2" name="submit" value="Tambah Data">
                </form>
            </figure>
        </div>
        <table cellspacing = "0">
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>No.Ktp</th>
                <th>No Telp</th>
                <th>Tahun Masuk</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
                $sql = mysqli_query($connect,"SELECT * FROM karyawan ORDER BY id_karyawan DESC");
                if(mysqli_num_rows($sql) != 0){
                    while
                    ($row = mysqli_fetch_assoc($sql)){
                      $no = 1;
                        echo '
                        <tr>
                            <td>'.$row["id_karyawan"].'</td>
                            <td>'.$row["nama"].'</td>
                            <td>'.$row["ktp"].'</td>
                            <td>'.$row["telp"].'</td>
                            <td>'.$row["tahunmasuk"].'</td>
                            <td><a href="detail.php?id_karyawan='.$row["id_karyawan"].'"><i class="fas fa-info-circle""></i></a></td>
                            <td><a href="hapus.php?id_karyawan='.$row["id_karyawan"].'"><i class="fas fa-trash"></i></a></td>
                            <td><a href="#example3" onclick="return confirm("Anda yakin akan menghapus data ini?")><i class="fas fa-edit"></i></a></td>
                            <div class="cssmodal dialog" id="example3">
                            <a href="#" class="veil"></a>
                                <figure>
                                    <h2>Input Data</h2>
                                    <form action="update.php" method="post">
                                        <input type="hidden" id_karyawan="input" class="Input-text" name="id_karyawan" value="'.$row['id_karyawan'].' ">
                                        <label>nama</label>
                                        <input type="text" id_karyawan="input" class="Input-text" name="nama" value="'.$row['nama'].' ">
                                        <label>ktp</label>
                                        <input type="text" id_karyawan="input" class="Input-text" name="ktp" value="'. $row['ktp'] .'">
                                        <label>telp</label>
                                        <input type="text" id_karyawan="input" class="Input-text" name="telp" value="'.$row['telp'].'">
                                        <label>tahunmasuk</label>
                                        <input type="date" id_karyawan="input" class="Input-text" name="tahunmasuk" value="'.$row['tahunmasuk'].'">
                                        <input type="submit" id_karyawan="input" class="btn2" name="submit" value="Update Data">                
                                    </form>
                                </figure>
                            </div>
                        </tr>';
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>