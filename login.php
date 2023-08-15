<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="assets/style.css" />
  <link rel="stylesheet" href="assets/corecss.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <link rel="stylesheet" id="roboto-subset.css-css" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5" type="text/css" media="all" />
</head>
<body>
  <section class="h-100 gradient-form" style="background-color: #eee">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                    <img src="img/logo BPSDMP.png" style="width: 140px" alt="logo" />
                    <h4 class="mt-1 mb-5 pb-1">BPSDMP Kominfo</h4>
                  </div>

                  <form action="process_login.php" method="post">
                    <p>Silakan masuk ke akun Anda</p>
                    <div class="form-outline mb-4">
                      <input type="text" id="" name="username" class="form-control" placeholder="Username" />
                      <label class="form-label" for="form2Example11" style="margin-left: 0px">Username</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px"></div>
                        <div class="form-notch-middle" style="width: 66.4px"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" id="" name="password" class="form-control" placeholder="Password" />
                      <label class="form-label" for="form2Example22" style="margin-left: 0px">Password</label>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px"></div>
                        <div class="form-notch-middle" style="width: 64.8px"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="login_submit">Masuk</button>
                      <a class="text-muted" href="#!">Lupa kata sandi?</a>
                    </div>
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Belum punya akun?</p>
                      <button type="button" class="btn btn-outline-danger" onclick="window.location.href = 'ops.php';">Buat akun baru</button>
                    </div>
                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">BPSDMP Kominfo Surabaya</h4>
                  <p class="small mb-0">
                    BPSDMP Kominfo Surabaya adalah singkatan dari Balai
                    Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi
                    dan Informatika Surabaya.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>