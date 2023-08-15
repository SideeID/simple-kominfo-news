<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "131_dimas_fajar";
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
 ?>