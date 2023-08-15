<?php
require_once "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM home WHERE id_home = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: admin.php");
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>