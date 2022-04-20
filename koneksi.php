<?php 
$server     = "localhost"; //sesuaikan dengan nama server
$user       = "root"; //sesuaikan username
$password   = ""; //sesuaikan password
$database   = "innovilage2021"; //sesuaikan target databese

//koneksi ke database
$con = mysqli_connect($server, $user, $password, $database);
if(mysqli_connect_errno()){
    echo "gagal terhubung MySQL : " . mysqli_connect_errno();
}
?>