@extends('layouts.app')

<!--@section('title', 'Inicio se sesión')-->
@section('content')
<head>
    <!-- Favicon icon -->
    <link rel="icon" type="image/lo.png" sizes="16x16" href="{{ asset('img/lo2.png') }}">
    <title>Registro de Usuario</title>
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
            <img src="acfe/Historia.png" data-aos="flip-left" data-aos-duration="1500"  style="border-radius: 1rem 0 0 1rem; "alt="AvengersEndgame">

        <div class="col-md-6" data-aos="fade-down" data-aos-duration="1500" >
            <div class="card col-md-0">
                <div class="card-header btn btn-primary" stryle="background-color: ;" data-aos="fade-down" data-aos-duration="1500" ><center><b>{{ __('Ingresar datos de registro')}}</b></center></div>
                
                <div class="card-body" style="background-color:">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"  class="mt-4 needs-validation" novalidate>
                        @csrf

                        <div class="col-lg-12">
                            <label for="name" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b>{{ __('Nombre de usuario') }}</b></label>
                            <center><div class="col-md-8">
                                <input id="name" data-aos="fade-down" data-aos-duration="1500"  type="name" class="form-control @error('name') is-invalid @enderror" name="name" pattern="[A-Za-z áéíóúÁÉÍÓÚñÑ]+" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Escribir su nombre de usuario">
                                <div class="valid-feedback">El nombre es valido</div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ 'Escribe su nombre(Solo letras)'}}</strong>
                                    </span>
                                @enderror
                            </div></center>
                        </div>

                        <div class="col-lg-12">
                            <label for="rpe" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b>{{ __('RPE del usuario') }}</b></label>
                            <center><div class="col-md-8">
                                <input id="rpe" data-aos="fade-down" data-aos-duration="1500"  type="rpe" class="form-control @error('rpe') is-invalid @enderror" name="rpe" pattern="[A-Z 0-9]" value="{{ old('rpe') }}" required autocomplete="rpe" autofocus placeholder="Escribir su RPE">
                                <div class="valid-feedback"> El RPE es valido</div>
                                @error('rpe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ 'Ingresar RPE correctamente' }}</strong>
                                    </span>
                                @enderror
                            </div></center>
                        </div>


                        <div class="col-lg-12">
                            <label for="email" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b>{{ __('Correo electronico') }}</b></label>
                            <center><div class="col-md-8">
                                <input id="email" data-aos="fade-down" data-aos-duration="1500"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Escribe tu correo electronico">
                                <div class="valid-feedback"> El correo electronico es valido</div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{'El correo ingresado es incorrecto'}}</strong>
                                    </span>
                                @enderror
                            </div></center>
                        </div>

                        <br>
                        <div class="col-lg-12">
                            <label for="password" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b>{{ __('Contraseña') }}</b></label>
                            <center><div class="col-md-8">
                                <li class="list-inline-item">
                                    <input id="password" data-aos="fade-down" data-aos-duration="1500"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Escribir su contraseña">
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

                        <div class="col-lg-12">
                            <label for="password-confirm" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b>{{ __('Confirmar su contraseña') }}</b></label>
                            <center><div class="col-md-8">
                                <li class="list-inline-item">
                                    <input id="password-confirm" data-aos="fade-down" data-aos-duration="1500"  type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma su contraceña">
                                </li>
                                <li class="list-inline-item">
                                    <a onclick="mostrarPassword2()"><i class="text-primary ti-eye" data-aos="fade-down" data-aos-duration="1500"></i></a>
                                </li>
                                <div class="valid-feedback"> Contraseña valido</div>
                                @error('password-confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ 'La contraseña no coinciden verificar' }}</strong>
                                    </span>
                                @enderror
                            </div></center>

                            <center><div class="row md-0">
                                <div class="col-md-12" data-aos="fade-down" data-aos-duration="1500">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Aceptar los ') }}<a href="{{ route('pages.aviso') }}">aviso de Privacidad</a>
                                    </label>
                                </div>
                            </div></center>
                            
                        </div>
                                
                            </div>
                        
                        <div class="col-lg-12">
                            <center><div class="col-md-12">
                                <button data-aos="fade-down" data-aos-duration="1500" type="submit" class="btn btn-primary">
                                    {{__('Registrar')}}
                                </button>
                            </div></center>

                            <center><div class="col-md-12">
                            <a class="btn" data-aos="fade-down" data-aos-duration="1500"  href="{{ route('admin') }}"></a>
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
<!-- ============= PASSWORD VALIDACION FRONTEND ==================== -->
        <script type="text/javascript">
            var politicaContrasenna = /^(?=(?:.*\d){2})(?=.*[A-Z])(?=.*[a-z])(?!.{0,4}(.)(?:.*\1){3})\S{8,50}$/,
                inpClave = document.getElementById('password'),
                inpOk = document.getElementById('ok');
            inpClave.addEventListener(
                'input',
                function (evt) {
                    if (politicaContrasenna.test(inpClave.value)) {
                        inpOk.innerHTML = '<p style="color: green;">Valido</p>';
                    } else {
                        inpOk.innerHTML = '<p style="color: red;">8 Dígitos, minúsculas y mayúsculas</p>';
                    }
                }
            );
        </script>


<!-- ============= PASSWORD VALIDACION FRONTEND ==================== -->
<script type="text/javascript">
            var politicaContrasenna = /^(?=(?:.*\d){2})(?=.*[A-Z])(?=.*[a-z])(?!.{0,4}(.)(?:.*\1){3})\S{8,50}$/,
                inpClave = document.getElementById('password'),
                inpOk = document.getElementById('ok');
            inpClave.addEventListener(
                'input',
                function (evt) {
                    if (politicaContrasenna.test(inpClave.value)) {
                        inpOk.innerHTML = '<p style="color: green;">Valido</p>';
                    } else {
                        inpOk.innerHTML = '<p style="color: red;">8 Dígitos, minúsculas y mayúsculas</p>';
                    }
                }
            );
        </script>

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
        function mostrarPassword2() {
            var cambio = document.getElementById("password-confirm");
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
