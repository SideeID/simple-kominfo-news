<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand me-2" href="admin.php">Admin Page</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add.php">Tambah data</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-primary me-3" onclick="logoutWithConfirmation()">Logout</button>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2>Data List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Gambar</th>
                <th>Isi</th>
                <th>Judul</th>
                <th>Fungsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "koneksi.php";

            $query = "SELECT * FROM home";
            $result = mysqli_query($conn, $query);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_home'] . "</td>";
                    echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['gambar']) . "' alt='Image' style='max-width: 100px;'></td>";
                    echo "<td>" . $row['text'] . "</td>";
                    echo "<td>" . $row['judul'] . "</td>";
                    echo "<td>
                            <a href='edit.php?id=" . $row['id_home'] . "' class='btn btn-primary'>Edit</a>
                            <a href='process_delete.php?id=" . $row['id_home'] . "' class='btn btn-danger' onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini?')\">Delete</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "Error fetching data: " . mysqli_error($conn);
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>

<script>
function logoutWithConfirmation() {
    if (confirm("Apakah Anda yakin ingin keluar?")) {
        window.location.href = 'index.php';
    }
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
