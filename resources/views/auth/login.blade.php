@extends('layouts.app')

<!--@section('title', 'Inicio se sesión')-->
@section('content')
<head>
    <!-- Favicon icon -->
    <link rel="icon" type="image/lo.png" sizes="16x16" href="{{ asset('img/lo2.png') }}">
    <title>Inicio de sesión</title>
</head>
<br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row justify-content-center">
    <div class="row justify-content-center col-md-12 col-sm-12 row-cols-md-12 row-cols-sm-3" >
    <!--LIBRERIA PARA EL MOVIMIENTO DE LAS IMAGENES-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <img src="acfe/servicio-tecnico.png" data-aos="flip-left" data-aos-duration="1500"  style="border-radius: 1rem 0 0 1rem; "alt="AvengersEndgame">

        <div class="col-md-6" data-aos="fade-down" data-aos-duration="1500" >
            <div class="card col-md-0">
                <div class="card-header btn btn-primary" stryle="background-color: ;" data-aos="fade-down" data-aos-duration="1500" ><center><b>{{ __('Inicio de sesión')}}</b></center></div>
                
                <div class="card-body" style="background-color:">
                    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data"  class="mt-4 needs-validation" novalidate>
                        @csrf

                        <div class="col-lg-12">
                            <label for="email" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b>{{ __('Correo electronico') }}</b></label>
                            <center><div class="col-md-8">
                                <input id="email" data-aos="fade-down" data-aos-duration="1500"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingresar correo electronico">
                                <div class="valid-feedback"> El correo electronico es valido</div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{'El correo ingresado es incorrecto'}}</strong>
                                    </span>
                                @enderror
                            </div></center>
                        </div>

                        <div class="col-lg-12">
                            <label for="password" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b>{{ __('Contraseña') }}</b></label>
                            <center><div class="col-md-8">
                                <li class="list-inline-item">
                                    <input id="password" data-aos="fade-down" data-aos-duration="1500"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Ingresar contraseña">
                                </li>
                                <li class="list-inline-item">
                                    <a onclick="mostrarPassword()"><i class="text-primary ti-eye" data-aos="fade-down" data-aos-duration="1500"></i></a>
                                </li>
                                <div class="valid-feedback"> Contraseña valido</div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ 'Contraseña incorrecta verificar' }}</strong>
                                    </span>
                                @enderror
                            </div></center>
                        </div>
                                
                            </div>
                        <br>
                        
                        <div class="col-lg-12">
                            <center><div class="col-md-12">
                                <button data-aos="fade-down" data-aos-duration="1500" type="submit" class="btn btn-primary">
                                    {{__('Acceder')}}
                                </button>
                            </div></center>

                            <!--center><div class="col-md-12">
                            <a class="btn" data-aos="fade-down" data-aos-duration="1500"  href="{{ route('register') }}"></a>
                            </div></center-->

                            <center><div class="row md-0">
                                <div class="col-md-12" data-aos="fade-down" data-aos-duration="1500">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember"> 
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div></center>
                            <center><div class="col-md-12"  data-aos="fade-down" data-aos-duration="1500">
                                @if (Route::has('password.request'))
                                    <a class="col-md-12 col-form-label text-center" class="btn btn-link" href="{{ route('password.request') }}" >
                                        <p style="color:#21252985;">¿Olvidaste tu contraseña?</p>
                                    </a>
                                @endif
                            </div></center>
                            
                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </div>
</div>

<br>
<!-- ============= PASSWORD VISUALIZAR Y OCULTAR OJO ==================== -->
<script type="text/javascript">
        function mostrarPassword() {
            var cambio = document.getElementById("password");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            } else {
                cambio.type = "password";
                $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        }
        $(document).ready(function() {
            //CheckBox mostrar contraseña
            $('#ShowPassword').click(function() {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
            $('#ShowPassword2').click(function() {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
        });
    </script>


@endsection
