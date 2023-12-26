<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Material Pro is powerful and clean admin dashboard template" />
    <meta name="robots" content="noindex,nofollow" />
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

    <script src="<?= base_url('public/tinymce/tinymce.min.js') ?>"></script>
    <script>
        tinymce
            .init({
                selector: 'textarea#detail',
                plugins: "textcolor, lists code",
                toolbar: " undo redo | bold italic | alignleft aligncenter alignright alignjustify \n\
		              | bullist numlist outdent indent | forecolor backcolor table code"
            });
    </script>

</head>

<body class="ms-body ms-primary-theme ms-aside-left-open">

    <!-- Preloader -->
    <div id="preloader-wrap">
        <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
        </div>
    </div>
    <!-- Overlays -->
    <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>

    <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left ps ps--active-y">
        <!-- Logo -->
        <div class="logo-sn ms-d-block-lg">
            <a class="pl-0 ml-0 text-center" href="<?= base_url('/admin') ?>"> <img src="<?= base_url('public/img/logo_grau.png') ?>" alt="logo"> </a>
        </div>
        <!-- Navigation -->
        <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="<?= base_url('/admin') ?>" class="nav-link">
                    <span><i class="material-icons fs-16">dashboard</i>Panel de control </span>
                </a>
            </li>
            <li class="menu-item">
                <a class="nav-link" href="<?= base_url('/admin/estudiantes') ?>">
                    <span><i class="material-icons fs-16">widgets</i>Estudiantes </span>
                </a>
            </li>
            <li class="menu-item">
                <a class="nav-link" href="<?= base_url('/admin/docentes') ?>">
                    <span><i class="material-icons fs-16">assignment_ind</i>Docentes</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="nav-link" href="<?= base_url('/admin/convocatorias') ?>">
                    <span><i class="material-icons fs-16">assessment</i>Convocatorias</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="nav-link" href="<?= base_url('/admin/postulaciones') ?>">
                    <span><i class="material-icons fs-16">filter_list</i>Postulaciones</span>
                </a>
            </li>
            <hr>
            <li class="menu-item">
                <a class="nav-link" href="<?= base_url('/admin/perfil') ?>">
                    <span><i class="material-icons fs-16">input</i>Mi perfil</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="nav-link" href="<?= base_url('/admin/programas') ?>">
                    <span><i class="material-icons fs-16">apps</i>Programas</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="nav-link" href="<?= base_url('/logout') ?>">
                    <span><i class="material-icons fs-16">arrow_back</i>Cerrar sesión</span>
                </a>
            </li>
        </ul>
    </aside>
    <!-- Main Content -->
    <main class="body-content">

        <!-- Navigation Bar -->
        <nav class="navbar ms-navbar">

            <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
            </div>
            <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
                <li class="ms-nav-item ms-nav-user dropdown">
                    <a href="#" class="text-disabled" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <strong><?= $this->session->userdata('user_rol_title') ?></strong>&nbsp;<i class="flaticon-user"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="<?= base_url('/admin/perfil') ?>"><i class="flaticon-information" aria-hidden="true"></i>
                                &nbsp;Mi perfil</a>
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url('/admin/claves') ?>"><i class="flaticon-security" aria-hidden="true"></i>
                                &nbsp;Cambio de clave</a></li>
                        <li class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url('/logout') ?>"><i class="flaticon-shut-down" aria-hidden="true"></i>
                                &nbsp;Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>

            <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
            </div>

        </nav>

        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">

                <div class="col-md-12">
                    <?php $this->load->view($contenido); ?>
                </div>
            </div>
        </div>
    </main>
    <!-- -------------------------------------------------------------- -->
    <!-- End PAge Content -->
    <!-- -------------------------------------------------------------- -->
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                Copyright
                © <script>
                    document.write(new Date().getFullYear())
                </script>
                <?= getenv('APP_NAME') ?>
            </div>
        </div>
    </footer>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Page wrapper  -->
    <!-- -------------------------------------------------------------- -->
    
    <!-- -------------------------------------------------------------- -->
    <!-- End Wrapper -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->



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
            //$.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-outline-primary';
            //$.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-outline-light';
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