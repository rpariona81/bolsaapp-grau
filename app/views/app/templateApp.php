<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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
    <!-- Page Specific Css (Datatables.css) -->
    <!--<link href="<?= base_url('public/css/datatables.min.css') ?>" rel="stylesheet">-->
    <!-- DataTables -->
    <link href="<?= base_url('public/datatable/css/datatables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('public/datatable/css/buttons.bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('public/datatable/css/buttons.dataTables.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="<?= base_url('public/datatable/css/responsive.datatables.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- Mystic styles -->
    <link href="<?= base_url('public/css/style.css') ?>" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('public/favicon.ico') ?>">

    

    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="<?= base_url('public/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= base_url('public/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('public/js/perfect-scrollbar.js') ?>"> </script>
    <script src="<?= base_url('public/js/jquery-ui.min.js') ?>"> </script>

</head>

<body class="ms-body ms-primary-theme">
    <main class="body-content">
        <!-- Navigation Bar -->
        <nav class="navbar ms-navbar">
            <div class="mx-5">
                <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="<?= base_url('/users') ?>">
                    <img class="mb-1" style="height: 100px; width: 100px;" src="<?= base_url('public/img/logo_grau.png') ?>" width="100" height="100" id="logo" />
                    &nbsp;&nbsp<?= getenv('APP_NAME') ? getenv('APP_NAME') : 'Bolsa Laboral' ?>
                </a>
            </div>
            <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
                <li class="ms-nav-item dropdown">
                    <a class="text-disabled dropdown-link" aria-current="page" href="<?= base_url('/users') ?>">
                        <i class="fa fa-window-restore"></i>
                        Convocatorias
                    </a>
                </li>
                <?php
                if ($this->session->userdata('user_rol') == 'estudiante') {
                    echo '<li class="ms-nav-item dropdown">';
                    echo '<a class="text-disabled dropdown-link" aria-current="page" href="' . base_url('/users/postulaciones') . '">';
                    echo '   <i class="fa fa-check-square"></i>';
                    echo '    Mis postulaciones';
                    echo '</a>';
                    echo '</li>';

                    echo '<li class="ms-nav-item dropdown">';
                    echo '<a class="text-disabled dropdown-link" href="' . base_url('/users/perfil') . '">';
                    echo '    <i class="fa fa-id-badge"></i>';
                    echo '    Mi perfil</a>';
                    echo '</li>';

                    echo '<li class="ms-nav-item dropdown">';
                    echo '<a class="text-disabled dropdown-link" href="' . base_url('/users/descarga_cv') . '">';
                    echo '    <i class="fa fa-file-word"></i>';
                    echo '    Modelo CV</a>';
                    echo '</li>';
                } else {
                }
                ?>
                <li class="ms-nav-item dropdown show">
                    <a class="text-disabled ms-nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <strong><?= $this->session->userdata('user_rol_title') . ' ' . $this->session->userdata('user_name') . ' ' . $this->session->userdata('user_paterno') ?></strong><i class="fa fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                        <li class="ms-dropdown-list"><a class="media fs-14 p-2" href="<?= base_url('/users/credenciales') ?>">
                                <font color="black"><i class="flaticon-security mr-2"></i>Cambiar clave</font>
                            </a></li>
                        <li class="dropdown-divider"></li>
                        <li class="ms-dropdown-list"><a class="media fs-14 p-2" href="<?= base_url('/logout') ?>">
                                <font color="black"><i class="flaticon-shut-down mr-2"></i>Cerrar sesión</font>
                            </a></li>
                        <!-- Boton salir-->
                        <!--<form class="text-center ml-2" action="<?= base_url('/logout') ?>">
                            <input class="btn btn-primary" id="btnLogout" type="submit" value="Cerrar sesión"></input>
                        </form>-->

                    </ul>
                </li>
            </ul>
            <!--<form class="d-flex" action="/logout">
                        <input class="btn btn-small btn-warning" type="submit" value="Cerrar sesión de&nbsp;<?= strtoupper($this->session->userdata('user_rol_title')); ?>&nbsp;<?= strtoupper($this->session->userdata('user_login')); ?>">
                    </form>-->
            </div>
            <!--/.navbar-collapse -->
            </div>

            <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
            </div>

        </nav>


        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="ms-panel">
                        <?php $this->load->view($pagina); ?>
                    </div>
                </div>
            </div>

        </div>
    </main>


    <!--==========================
    Footer
  ============================-->

    <footer class="footer pt-3 mt-2 mb-4">
        <div class="container px-4">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-2">
                    <div class="copyright text-center text-xs text-muted text-lg-start">
                        Copyright
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <?= getenv('APP_NAME') ?>
                    </div>
                </div>
    </footer>
    </main>


    <!-- Global Required Scripts End -->

    <!-- Page Specific Scripts Start -->
    <script src="<?= base_url('public/datatable/js/jquery.datatables.min.js') ?>"> </script>
    <script src="<?= base_url('public/datatable/js/datatables.bootstrap4.min.js') ?>"> </script>
    <script src="<?= base_url('public/datatable/js/dataTables.buttons.min.js') ?>"> </script>
    <script src="<?= base_url('public/datatable/js/datatables.responsive.min.js') ?>"> </script>
    <script src="<?= base_url('public/datatable/js/pdfmake.min.js') ?>"> </script>
    <script src="<?= base_url('public/datatable/js/jszip.min.js') ?>"> </script>
    <script src="<?= base_url('public/datatable/js/buttons.flash.min.js') ?>"> </script>
    <script src="<?= base_url('public/datatable/js/buttons.print.min.js') ?>"> </script>
    <script src="<?= base_url('public/datatable/js/vfs_fonts.js') ?>"> </script>
    <script src="<?= base_url('public/datatable/js/buttons.html5.min.js') ?>"> </script>
    
    <!-- Mystic core JavaScript -->
    <script src="<?= base_url('public/js/framework.js') ?>"></script>

    <!-- Settings -->
    <script src="<?= base_url('public/js/settings.js') ?>"></script>

    <script>
        $(document).ready(function() {
            //$.noConflict();
            $('#datatablesSimple').DataTable({
                pageLength: 7,
                order: [],
                //responsive: true,
                scrollX: true,
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json",
                    "paginate": {
                        "previous": "<<",
                        "next": ">>",
                        "first": "<",
                        "last": ">"
                    },
                },
                dom: 'Bfrtip',
                buttons: ['copy', 'pdf',
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        customize: function(xlsx) {
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            //Para ver los estilos de formato https://datatables.net/reference/button/excelHtml5
                            $('row c[r^="B"]', sheet).attr('s', '57');
                            //Para que la columna se muestre como texto https://datatables.net/forums/discussion/73814/export-to-excel-with-format-text-for-column-b-c-and-d
                            $('row c[r^="C"]', sheet).attr('s', '50');
                        }
                    }
                ]
            });
        });
    </script>


</body>

</html>