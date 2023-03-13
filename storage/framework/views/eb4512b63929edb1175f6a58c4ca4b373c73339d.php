<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('img/icono.png')); ?>">
    <title>ControlCFE</title>
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('assets/extra-libs/c3/c3.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/libs/chartist/dist/chartist.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/style.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/libs/fullcalendar/dist/fullcalendar.min.css')); ?>" rel="stylesheet" />
</head>

<body onload="loaders()">
    <!--span id="loader-secondary">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-border text-secondary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-border text-success" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </span-->

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <!-- Logo icon -->
                    <a href="/">
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?php echo e(asset('img/logo2.png')); ?>"  style="width:150px" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="<?php echo e(asset('img/logo2.png')); ?>"  style="width:130px" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                    data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                        class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto ml-3 pl-1">

                    <!-- ============================================================== -->
                    <!-- Buscar-->
                    <!-- ============================================================== -->
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link" href="javascript:void(0)">
                            <form>
                                <div class="customize-input">
                                    <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                        type="search" placeholder="Search" aria-label="Search">
                                    <i class="form-control-icon" data-feather="search"></i>
                                </div>
                            </form>
                        </a>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Perfil del usuario -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo e(asset('assets/images/users/profile-pic.jpg')); ?>" alt="user" class="rounded-circle"
                                width="40">
                            <span class="ml-2 d-none d-lg-inline-block"><span>Hola, </span> <span
                                    class="text-dark">Mairym</span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                        </a>
                        <div class="dropdown-menu animated flipInY">
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"  class="svg-icon mr-2 ml-1"></i> Mi perfil</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"  class="svg-icon mr-2 ml-1"></i>  Mensajes</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"  class="svg-icon mr-2 ml-1"></i>  Configuración</a>
                            <div class="dropdown-divider"></div>
                            <div class="pl-4 p-3">
                                <a class="btn btn-sm btn-danger" href="<?php echo e(route('logout')); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i data-feather="log-out" class="feather-icon"></i>
                                        <?php echo e(__(' Cerrar sesión')); ?>

                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link active" href="<?php echo e(url('admin')); ?>"
                            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                class="hide-menu">Inicio</span></a></li>

                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Administración</span></li>


                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo e(url('calendario')); ?>" aria-expanded="false">
                        <i data-feather="calendar" class="feather-icon"></i>
                        <span class="hide-menu">Calendario</span></a></li>
                     <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="grid" class="feather-icon"></i>
                        <span class="hide-menu">Galeria</span></a>
                    </li>
                    
                    <!-- Actividades-->
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                class="hide-menu">Actividades</span></a>

                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link">
                                <span class="hide-menu"> Lista Actividad </span></a>
                            </li>
                            <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                        class="hide-menu">Nueva Actividad
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                        class="hide-menu"> Catalogo
                                    </span></a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Equipos</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo e(route('admin.equipo.lista')); ?>"  aria-expanded="false">
                        <i data-feather="list" class="feather-icon"></i>
                        <span class="hide-menu">Lista equipos</span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo e(route('admin.nuevo')); ?>"  aria-expanded="false">
                        <i data-feather="box" class="feather-icon"></i>
                        <span class="hide-menu">Equipo nuevo</span></a>
                    </li>
                    
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                    <!--li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="javascript:void(0)" aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span
                                class="hide-menu">Registro</span></a></li-->
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                            aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                class="hide-menu">Cerrar sesión</span></a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->



    <?php echo $__env->yieldContent('content'); ?>

        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center text-muted">
            Todos los derechos reservados | Desarrollado por: mairym123 de <a
                href="https://proyectoselva.site">M-BPG</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión
                    actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <?php echo e(__(' Cerrar sesión')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('assets/libs/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/popper.js/dist/umd/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?php echo e(asset('js/app-style-switcher.js')); ?>"></script>
    <script src="<?php echo e(asset('js/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/sidebarmenu.js')); ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo e(asset('js/custom.min.js')); ?>"></script>
    <!--This page JavaScript -->
    <script src="<?php echo e(asset('assets/extra-libs/c3/d3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/extra-libs/c3/c3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/chartist/dist/chartist.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/dashboards/dashboard1.min.js')); ?>"></script>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/extra-libs/taskboard/js/jquery-ui.min.js')); ?>"></script>
    <!--This page JavaScript -->
    <script src="<?php echo e(asset('assets/libs/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/fullcalendar/dist/fullcalendar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/calendar/cal-init.js')); ?>"></script>

    <!-- Tablas con estilo y paginate -->
    <!--This page plugins -->
    <script src="<?php echo e(asset('../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\CFEControl\resources\views/layouts/controlad.blade.php ENDPATH**/ ?>