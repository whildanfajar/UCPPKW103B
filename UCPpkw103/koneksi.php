<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "ucppabd";

$connect = mysqli_connect("$server", "$username","$password","$database");

if(mysqli_connect_errno()){
    echo 'Gagal menghubungkan ke database : ' .mysqli_connect_error();
}
?>