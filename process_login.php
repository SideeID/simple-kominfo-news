<?php
require_once "koneksi.php";

if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $storedPassword = $row['password'];
            
            if ($password === $storedPassword) {
                header("Location: admin.php");
                exit();
            } else {
                echo "Password salah";
            }
        } else {
            echo "Username tidak ditemukan";
        }
    } else {
        echo "Terjadi kesalahan saat mengambil data dari database: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>