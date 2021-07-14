<html>
<head>
    <title>Whildan Fajar||103||B</title>
    <link rel="stylesheet" href="index.css">
    <title>Whildan Fajar||103||B</title>
</head>
<body>
 
	<center>
 
		<h2>DATA KARYAWAN</h2>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
 <table cellspacing = "0">
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>NO.KTP</th>
                <th>NO.TELP</th>
                <th>Tahun Masuk</th>
            </tr>
            <?php
                $sql = mysqli_query($connect,"SELECT * FROM karyawan ORDER BY id_karyawan DESC");
                if(mysqli_num_rows($sql) != 0){
                    while($row = mysqli_fetch_assoc($sql)){
                        echo '
                        <tr>
                            <td>'.$row["id_karyawan"].'</td>
                            <td>'.$row["nama"].'</td>
                            <td>'.$row["ktp"].'</td>
                            <td>'.$row["telp"].'</td>
                            <td>'.$row["tahunmasuk"].'</td>
                        </tr>';
                    }
                }
            ?>
        </table>
	<script>
		window.print();
	</script>
 
</body>
</html>