<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Favicon icon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/lo2.png')); ?>">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('acfe.name', 'CFEControl')); ?></title>



  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="<?php echo e(asset('acfe/plugins/bootstrap/bootstrap.min.css')); ?>" rel="stylesheet">
  <!-- themify icon -->
  <link rel="stylesheet" href="<?php echo e(asset('acfe/plugins/themify-icons/themify-icons.css')); ?>">
  <!-- Slick Carousel -->
  <link href="<?php echo e(asset('acfe/plugins/slick/slick.css')); ?>" rel="stylesheet">
  <!-- Slick Carousel Theme -->
  <link href="<?php echo e(asset('acfe/plugins/slick/slick-theme.css')); ?>" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="<?php echo e(asset('acfe/css/style.css')); ?>" rel="stylesheet">
  <!-- FAVICON -->
  <link href="<?php echo e(asset('acfe/images/favicon.png')); ?>" rel="shortcut icon">

</head>

<!--=====================================
=            Head logo, seccion         =
======================================-->

<body  class="body-wrapper">
    <div id="app">
       
        <nav class="navbar main-nav fixed-top navbar-expand-lg large">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo e(asset('img/logoCFE.png')); ?>" style="width:100px" alt="footer-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    <!-- Link de menu -->
                            <li class="nav-item">
                              <a class="nav-link scrollTo" href="<?php echo e(route('admin')); ?>">Contacto</a>
                            </li>
                            <li class="nav-item">
                             <!--   <a class="nav-link btn btn-primary  text-white" href="<?php echo e(url('/')); ?>"><?php echo e(__('Inicio de Sesion')); ?></a> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link  btn btn-primary  text-white" href="<?php echo e(route('login')); ?>"><?php echo e(__('Inicio de Sesion')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link  btn btn-secondary  text-white" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrarse')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link btn btn-primary  text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(__('sesion iniciada')); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('login')); ?>"><?php echo e(__('Mi sesion')); ?></a>
                                    <hr>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Cerrar Sesion')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
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
        <div class="col-lg-8 mr-auto">
          <div class="footer-logo">
            <img src="<?php echo e(asset('img/lo.png')); ?>" style="width:300px" alt="footer-logo">
          </div>
          <div class="copyright">
            <p>@2023  Todos los derechos reservados | Diseñado y desarrollado por : <a href="#home"
                class="list-inline-item">@mairym123</a>
             <br>
                       Distribuido por : <a href="#" class="list-inline-item">M-BPG proyectosUTS</a>
            </p>
          </div>
        </div>
        <div class="col-lg-4 text-lg-right">
          <!-- Social Icons -->
          <ul class="social-icons list-inline">
            <p>Redes Sociales | Oficiales</p>
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
      
          <ul class="footer-links list-inline">
            <li class="list-inline-item">
            <a href="<?php echo e(route('pages.aviso')); ?>">Aviso de Privacidad</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



      <!-- Scroll to Top Button-->
      <a class="btn btn-primary btn-back-to-top scrollTo" id="btn-back-to-top" href="#app">
            <i class="ti-arrow-up"></i>
        </a>
    <!-- JAVASCRIPTS -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA" async defer></script>

  <script src="<?php echo e(asset('aida/plugins/jquery/jquery.js')); ?>"></script>
  <script src="<?php echo e(asset('aida/plugins/bootstrap/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('aida/plugins/slick/slick.min.js')); ?>"></script>
  <script src="<?php echo e(asset('aida/js/custom.js')); ?>"></script>

  <script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
    scrollFunction();
    };

    function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }
  </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\CFEControl\resources\views/layouts/acfe.blade.php ENDPATH**/ ?>