<?php
    
$server = "localhost";
$user = "ppdbsmp";
$password = "0KITTfxcCs7faJjr";
$nama_database = "ppdbsmp";

$koneksi = mysqli_connect($server, $user, $password, $nama_database);

if( !$koneksi ){
    die("Gagal terhubung dengan database: " .mysqli_connect_error());
}

?>