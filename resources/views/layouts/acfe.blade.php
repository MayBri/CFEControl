<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('img/lo2.png') }}">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('acfe.name', 'CFEControl') }}</title>



  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="{{ asset('acfe/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <!-- themify icon -->
  <link rel="stylesheet" href="{{ asset('acfe/plugins/themify-icons/themify-icons.css') }}">
  <!-- Slick Carousel -->
  <link href="{{ asset('acfe/plugins/slick/slick.css') }}" rel="stylesheet">
  <!-- Slick Carousel Theme -->
  <link href="{{ asset('acfe/plugins/slick/slick-theme.css') }}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ asset('acfe/css/style.css') }}" rel="stylesheet">
  <!-- FAVICON -->
  <link href="{{ asset('acfe/images/favicon.png') }}" rel="shortcut icon">

</head>

<!--=====================================
=            Head logo, seccion         =
======================================-->

<body  class="body-wrapper">
    <div id="app">
       
        <nav class="navbar main-nav fixed-top navbar-expand-lg large">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logoCFE.png') }}" style="width:100px" alt="footer-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    <!-- Link de menu -->
                            <li class="nav-item">
                              <a class="nav-link scrollTo" href="{{ route('admin') }}">Contacto</a>
                            </li>
                            <li class="nav-item">
                             <!--   <a class="nav-link btn btn-primary  text-white" href="{{ url('/') }}">{{ __('Inicio de Sesion') }}</a> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link  btn btn-primary  text-white" href="{{ route('login') }}">{{ __('Inicio de Sesion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link  btn btn-secondary  text-white" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link btn btn-primary  text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('sesion iniciada') }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Mi sesion') }}</a>
                                    <hr>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
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
            <img src="{{ asset('img/lo.png') }}" style="width:300px" alt="footer-logo">
          </div>
          <div class="copyright">
            <p>@2023 Todos los derechos reservados | Diseñado y desarrollado por : <a href="#home"
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
            <a href="{{ route('pages.aviso') }}">Aviso de Privacidad</a>
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

  <script src="{{ asset('aida/plugins/jquery/jquery.js') }}"></script>
  <script src="{{ asset('aida/plugins/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('aida/plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset('aida/js/custom.js') }}"></script>

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
