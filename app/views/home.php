<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= getenv('APP_NAME') ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro is powerful and clean admin dashboard template">
    <meta name="robots" content="noindex,nofollow">
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
        <!--<div class="ms-content-wrapper">-->
        <div class="container text-center">
            <!-- Logo -->
            <div class="mx-5">
                <a class="pl-0 ml-0 text-center" href="index.html"> <img class="my-5" style="height: 250px; width: 250px;"  src="<?= base_url('public/img/logo_grau.png') ?>" alt="logo"> </a>
            </div>

            <div class="container-fluid">
                <h1 class="jumbotron-heading">Conoce nuestra Bolsa Laboral</h1>
                <p class="lead text-muted">Los estudiantes y egresados podrán acceder a las oportunidades de trabajo que presentan las empresas a nivel nacional y así lograr ubicarse en un puesto de acuerdo a su profesión.</p>
            </div>
            <div class="row mt-5">
                <div class="col-xs-12 col-md-6 col-xl-4 mb-4">
                    <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                        <img class="card-img-top" src="<?= base_url('public/img/students.jpg') ?>" alt="Estudiantes/Egresados" width="200" height="260">
                        <div class="card-body d-grid gap-2 col-12 w-100 pt-1 pb-3">
                            <a class="btn btn-large btn-primary btn-block" href="<?= base_url('/wp-login') ?>"><strong>Estudiantes y egresados</strong></a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-xl-4 mb-4">
                    <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                        <img class="card-img-top" src="<?= base_url('public/img/teacher.jpg') ?>" alt="Docentes" width="200" height="260">
                        <div class="card-body d-grid gap-2 col-12 w-100 pt-1 pb-3">
                            <a class="btn btn-large btn-success btn-block" href="<?= base_url('/wp-login') ?>"><strong>Docentes</strong></a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-xl-4 mb-4">
                    <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                        <img class="card-img-top" src="<?= base_url('public/img/img-2.jpg') ?>" alt="Administrador" width="200" height="260">
                        <div class="card-body d-grid gap-2 col-12 w-100 pt-1 pb-3">
                            <a class="btn btn-large btn-warning btn-block" href="<?= base_url('/wp-admin') ?>"><strong>Administrador</strong></a>
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