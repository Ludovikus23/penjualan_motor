<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register - Penjualan Motor</title>
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/ruang-admin.min.css') ?>" rel="stylesheet">
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
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>

                                    <!-- Form Register -->
                                    <form action="<?= base_url('auth/save') ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="first_name" value="<?= old('first_name'); ?>" placeholder="Enter First Name" required>
                                            <div class="invalid-feedback">
                                                <?= isset($validation) ? $validation->getError('first_name') : ''; ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="last_name" value="<?= old('last_name'); ?>" placeholder="Enter Last Name" required>
                                            <div class="invalid-feedback">
                                                <?= isset($validation) ? $validation->getError('last_name') : ''; ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="<?= old('email'); ?>" placeholder="Enter Email Address" required>
                                            <div class="invalid-feedback">
                                                <?= isset($validation) ? $validation->getError('email') : ''; ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            <div class="invalid-feedback">
                                                <?= isset($validation) ? $validation->getError('password') : ''; ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password_repeat" placeholder="Repeat Password" required>
                                            <div class="invalid-feedback">
                                                <?= isset($validation) ? $validation->getError('password_repeat') : ''; ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a href="<?= base_url('auth/login') ?>" class="font-weight-bold small">Already have an account? Login here</a>
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
</body>
</html>
