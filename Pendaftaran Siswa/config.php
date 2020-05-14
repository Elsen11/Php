<?php

$server = "localhost";
$user = "root";
$password = "123456";
$nama_database = "sekolah";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}


?>