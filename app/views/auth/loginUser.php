<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= getenv('APP_NAME') ?></title>

    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?= base_url('public/vendors/iconic-fonts/font-awesome/css/all.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/vendors/iconic-fonts/flat-icons/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/vendors/iconic-fonts/cryptocoins/cryptocoins.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') ?>">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="<?= base_url('public/css/jquery-ui.min.css') ?>" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="<?= base_url('public/css/slick.css') ?>" rel="stylesheet">
    <!-- Mystic styles -->
    <link href="<?= base_url('public/css/style.css') ?>" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('public/favicon.ico') ?>">
</head>

<body class="ms-body ms-primary-theme">
    <!-- Main Content -->
    <main class="body-content">

        <!-- Body Content Wrapper -->
        <div class="container d-flex justify-content-center">

            <div class="ms-auth-container">
                <div class="mx-auto">
                    <!-- Logo -->
                    <div class="text-center mt-5">
                        <img class="mb-4" src="<?= base_url('public/img/logo_grau.png') ?>" width="200" height="230" id="logo">
                    </div>

                    <div class="card shadow-lg border-0 rounded-lg mt-4">
                        <!--<div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>-->
                        <div class="card-header text-center">
                            <h3>Bienvenido(a)</h3>
                            <p class="font-weight-light my-4 mt-0 mb-0">Ingresa tu usuario y contraseña para iniciar sesión</p>
                        </div>

                        <div class="card-body pt-3 pb-3">
                            <?php if ($this->session->flashdata('flashSuccess')) : ?>
                                <p class='alert alert-success'> <?= $this->session->flashdata('flashSuccess') ?> </p>
                            <?php endif ?>

                            <?php if ($this->session->flashdata('flashError')) : ?>
                                <p class='alert alert-danger'> <?= $this->session->flashdata('flashError') ?> </p>
                            <?php endif ?>

                            <?php if ($this->session->flashdata('flashInfo')) : ?>
                                <p class='alert alert-info'> <?= $this->session->flashdata('flashInfo') ?> </p>
                            <?php endif ?>

                            <?php if ($this->session->flashdata('flashWarning')) : ?>
                                <p class='alert alert-warning'> <?= $this->session->flashdata('flashWarning') ?> </p>
                            <?php endif ?>

                            <?= form_open('authcontroller/loginUser') ?>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="username" name="username" type="text" placeholder="Usuario" value="<?= set_value('username') ?>" size="50" required />
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" value="<?= set_value('password') ?>" size="50" required />
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                <a class="btn btn-warning" href="<?= base_url() ?>">Regresar</a>&nbsp;&nbsp;
                                <input class="btn btn-primary" id="btnLogin" type="submit" value="Ingresar"></input>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="<?= base_url('public/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= base_url('public/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('public/js/perfect-scrollbar.js') ?>"> </script>
    <script src="<?= base_url('public/js/jquery-ui.min.js') ?>"> </script>
    <!-- Global Required Scripts End -->

    <!-- Mystic core JavaScript -->
    <script src="<?= base_url('public/js/framework.js') ?>"></script>

    <!-- Settings -->
    <script src="<?= base_url('public/js/settings.js') ?>"></script>
</body>

</html>