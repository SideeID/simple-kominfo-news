<!DOCTYPE html>
 <!--  _____ _     __        ________ 
      / ___/(_)___/ /__     /  _/ __ \
      \__ \/ / __  / _ \    / // / / /
     ___/ / / /_/ /  __/  _/ // /_/ / 
    /____/_/\__,_/\___/  /___/_____/  
  --> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .center-card {
            margin: 20px auto;
        }
        .card-title {
            font-size: 24px;
            font-weight: bold;
        }
        .card-text {
            font-size: 18px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mb-4">Berita</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto center-card">
                <?php
                require_once "koneksi.php";

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    $query = "SELECT * FROM home WHERE id_home = $id";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);

                        echo '<div class="card">';
                        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['gambar']) . '" class="card-img-top" alt="Gambar">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $row['judul'] . '</h5>';
                        echo '<p class="card-text">' . $row['text'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo '<p class="mt-4">Berita tidak ditemukan.</p>';
                    }
                } else {
                    echo '<p class="mt-4">ID berita tidak valid.</p>';
                }
                ?>
            </div>
        </div>
    </div>

    <div class="footer">
        Created by Dimas Fajar
    </div>

    <?php
    mysqli_close($conn);
    ?>

</body>
</html>
