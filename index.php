<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home-BPSDMP</title>
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/corecss.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"/>
  <link rel="stylesheet" id="roboto-subset.css-css" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5" type="text/css" media="all"/>
  <style>
    .card-img-top {
      max-width: 100%;
      max-height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand me-2" href="https://www.kominfo.go.id/">
        <img src="img/logo BPSDMP.png" height="30" alt="" loading="lazy" style="margin-top: -1px"/>
      </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <div class="d-flex align-items-center">
          <button type="button" class="btn btn-primary me-3" onclick="window.location.href = 'login.php';">Login</button>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div>
      <h1>Berita</h1>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
      require_once "koneksi.php";

      $query = "SELECT * FROM home ORDER BY id_home DESC";
      $result = mysqli_query($conn, $query);

      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="col">';
          echo '<div class="card shadow-sm">';
          echo '<img src="data:image/jpeg;base64,' . base64_encode($row['gambar']) . '" class="card-img-top" alt="Gambar">';
          echo '<div class="card-body">';
          echo '<p class="card-text">' . $row['judul'] . '</p>';
          echo '<div class="d-flex justify-content-between align-items-center">';
          echo '<div class="btn-group">';
          echo '<a href="berita.php?id=' . $row['id_home'] . '" class="btn btn-sm btn-outline-secondary">Lihat</a>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
        }
      } else {
        echo "Error fetching data: " . mysqli_error($conn);
      }

      mysqli_close($conn);
      ?>
    </div>
  </div>

  <section class="footer">
    <div class="credite text-center">
      Created By
      <a href="https:/www.instagram.com/side__id/">Dimas fajar</a>
    </div>
  </section>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
