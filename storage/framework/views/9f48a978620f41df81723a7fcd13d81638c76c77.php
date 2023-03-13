<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('aida.name', 'A-ida')); ?></title>



  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="<?php echo e(asset('aida/plugins/bootstrap/bootstrap.min.css')); ?>" rel="stylesheet">
  <!-- themify icon -->
  <link rel="stylesheet" href="<?php echo e(asset('aida/plugins/themify-icons/themify-icons.css')); ?>">
  <!-- Slick Carousel -->
  <link href="<?php echo e(asset('aida/plugins/slick/slick.css')); ?>" rel="stylesheet">
  <!-- Slick Carousel Theme -->
  <link href="<?php echo e(asset('aida/plugins/slick/slick-theme.css')); ?>" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="<?php echo e(asset('aida/css/style.css')); ?>" rel="stylesheet">
  <!-- FAVICON -->
  <link href="<?php echo e(asset('aida/images/favicon.png')); ?>" rel="shortcut icon">

</head>
<body  class="body-wrapper">
    <div id="app">

        <nav class="navbar main-nav fixed-top navbar-expand-lg large">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('img/aida.png')); ?>" style="width:100px" alt="footer-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    <!-- Link de menu -->
                            <li class="nav-item">
                              <a class="nav-link scrollTo" href="#home">Inicio</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link scrollTo" href="#about">Nosotros</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link scrollTo" href="#feature">Características</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link scrollTo" href="#pricing">Precios</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link scrollTo" href="#team">Equipo</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link scrollTo" href="#contact">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary  text-white" href="<?php echo e(route('admin')); ?>"><?php echo e(__('Inicio de Sesion')); ?></a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>




<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mr-auto">
          <div class="footer-logo">
            <img src="<?php echo e(asset('img/aida2.png')); ?>" style="width:300px" alt="footer-logo">
          </div>
          <div class="copyright">
            <p>@2022  Todos los derechos reservados | Diseñado y desarrollado por : <a href="!#"
                target="_blank">@felicianos137</a>
             <br>
                       Distribuido por : <a href="!#" target="_blank">A-IDA ApplicationSystem</a>
            </p>
          </div>
        </div>
        <div class="col-lg-6 text-lg-right">
          <!-- Social Icons -->
          <ul class="social-icons list-inline">
            <li class="list-inline-item">
              <a target="_blank" href="https://facebook.com/themefisher"><i class="text-primary ti-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a target="_blank" href="https://twitter.com/themefisher"><i class="text-primary ti-twitter-alt"></i></a>
            </li>
            <li class="list-inline-item">
              <a target="_blank" href="https://github.com/themefisher"><i class="text-primary ti-linkedin"></i></a>
            </li>
            <li class="list-inline-item">
              <a target="_blank" href="https://instagram.com/themefisher"><i class="text-primary ti-instagram"></i></a>
            </li>
          </ul>
          <!-- Footer Links -->
          <ul class="footer-links list-inline">
            <li class="list-inline-item">
              <a class="scrollTo" href="#about">Nosotros</a>
            </li>
            <li class="list-inline-item">
              <a class="scrollTo" href="#team">Equipo</a>
            </li>
            <li class="list-inline-item">
              <a class="scrollTo" href="#contact">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <!-- JAVASCRIPTS -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA" async defer></script>

  <script src="<?php echo e(asset('aida/plugins/jquery/jquery.js')); ?>"></script>
  <script src="<?php echo e(asset('aida/plugins/bootstrap/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('aida/plugins/slick/slick.min.js')); ?>"></script>
  <script src="<?php echo e(asset('aida/js/custom.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\LibViajes-viejo\resources\views/layouts/aida.blade.php ENDPATH**/ ?>