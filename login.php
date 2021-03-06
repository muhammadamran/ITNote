<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo/rskg.png">
  <link rel="icon" type="image/png" href="assets/img/logo/rskg.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Login | ITNOTE
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta property="image" content="assets/img/logo/rskg.png">
  <meta name="twitter:image" property="og.image" content="assets/img/logo/rskg.png">
  <link rel="shortcut icon" type="image/png" href="assets/img/logo/rskg.png">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body style="background-image: url('assets/img/background/6.jpg'); background-repeat: no-repeat; background-position: center center;background-size: cover;padding: 0; margin-top: 5px">
  <div class="wrapper">
      <section class="login_content">
        <form action="logedin.php" method="POST">
          <div class="text-center">
            <h4>NOTE<br>TEKNOLOGI INFORMASI</h4>
            <hr>
            <!-- <img src="assets/img/logo/rskg.png" alt="Logo ValleryATV" width="200px" style="margin:30px 0;"> -->
          </div>
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="" />
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
          </div>
          <div class="form-group">
            <center>
              <input type="submit" class="btn btn-dark btn-block submit" value="Log in">
            </center>
          </div>
          <hr>
          <div class="clearfix"></div>
          <div class="separator">
            <div class="clearfix"></div>
            <div class="text-center">
              <p>©<?= date('Y') ?> All Rights Reserved. Teknologi Informasi RS. Khusus Ginjal Ny. R.A. Habibie</p>
            </div>
          </div>
        </form>
      </section>
  </div>
  <style>
    body {
      background-color: #f0f0f0;
    }
    .login_content {
      background-color: #fff;
      border-radius: 10px;
      position: absolute;
      top: 100px;
      left: 0;
      right: 0;
      margin: 0 auto;
      width: 400px;
      padding: 10px 30px;
      -webkit-box-shadow: 0px 6px 13px -1px rgba(221,221,221,1);
      -moz-box-shadow: 0px 6px 13px -1px rgba(221,221,221,1);
      box-shadow: 0px 6px 13px -1px rgba(221,221,221,1);
    }
  </style>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
</body>

</html>