<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/dist/css/adminlte.min.css">
    <style>
        .button-register {
            border: 2px solid #fd7e14;
            background-color: #fd7e14;
            color: #FFFFFF;
        }

        .button-login {
            border: 2px solid #fd7e14;
            color: #000000;
        }

        .button-register:hover {
            background-color: transparent;
            border: 2px solid #fd7e14;
        }

        .button-login:hover {
            background-color: #fd7e14;
            color: #FFFFFF;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-header text-center">
                <a href="<?= base_url() ?>/public/template/index2.html" class="h1"><b>SnapFoodie</b><br>Login</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?php
                if (!empty(session()->getFlashdata('error'))) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php } ?>

                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <?php foreach ($errors as $key => $value) { ?>
                                <li><?= esc($value) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>

                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-warning" role="alert">';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }

                if (session()->getFlashdata('success')) {
                    echo '<div class="alert alert-success" role="alert">';
                    echo session()->getFlashdata('success');
                    echo '</div>';
                }
                ?>
                <?php echo form_open('login/auth') ?>
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username/Email/Phone Number">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <a href="<?= base_url('register') ?>" class="btn btn-block button-login">
                            Register
                        </a>
                    </div>
                    <!-- /.col -->
                    <div class="col-8">
                        <button type="submit" class="btn btn-block button-register">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
                <?php echo form_close() ?>

                <p class="mt-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/public/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/public/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/public/template/dist/js/adminlte.min.js"></script>
    <!-- Alert Timer -->
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3000);
    </script>
</body>

</html>