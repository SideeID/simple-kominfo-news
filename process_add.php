<?php
require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = $_FILES["image"];
    $text = $_POST["text"];
    $judul = $_POST["judul"];

    $imageData = addslashes(file_get_contents($image["tmp_name"]));
    $imageType = $image["type"];

    $query = "INSERT INTO home (gambar, text, judul) VALUES ('$imageData', '$text', '$judul')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: admin.php");
    } else {
        echo "Error adding data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
