<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Penjualan Motor - Login</title>
  <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('css/ruang-admin.min.css') ?>" rel="stylesheet">
  <?= $this->renderSection('css'); ?>
  <style>
    .back-to-home:hover {
      color: #007bff;
      text-decoration: underline;
      transition: all 0.3s ease;
    }
  </style>
</head>

<body class="bg-gradient-login">
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form action="<?= base_url('dashboard') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="<?= base_url('auth/register') ?>">Create an Account!</a>
                  </div>
                  <div class="text-center mt-3">
                    <a class="font-weight-bold small text-primary" href="<?= base_url('public/home') ?>" style="text-decoration: none;">
                      <i class="fas fa-home"></i> Back to Home
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('js/ruang-admin.min.js') ?>"></script>
  <?= $this->renderSection('js'); ?>
</body>

</html>
