<?php
require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $image = $_FILES["image"];
    $text = $_POST["text"];
    $judul = $_POST["judul"];

    if ($image["name"] != "") {
        $imageData = addslashes(file_get_contents($image["tmp_name"]));
        $imageType = $image["type"];
        $query = "UPDATE home SET gambar='$imageData', judul='$judul', text='$text' WHERE id_home='$id'";
    } else {
        $query = "UPDATE home SET judul='$judul', text='$text' WHERE id_home='$id'";
    }

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: admin.php");
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
