<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "no6";

// buat koneksi
$conn = mysqli_connect($servername,$username,$password,$dbName);

// cek koneksi berhasil atau tidak
if (!$conn){
    die("gak kehubung database,cek lagi di koneksi.php ya " );
} 
?>