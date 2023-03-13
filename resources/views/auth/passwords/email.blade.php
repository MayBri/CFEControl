@extends('layouts.app')

@section('content')
<head>
    <title>Restaurar contraseña</title>
</head>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style=""><img src="{{ asset('img/lo2.png') }}" alt="login form" clas="img-fluid" style="heigh: 27px; width:10%;">
                <b><center><h5>{{ __('Restablecer la contraseña')  }}</h5></center></b></div>
            </div>
            <div class="card-body" style="background-color: #64B289;">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{'Correo enviado'}}</div>
                @endif
            <form action="{{ route('password.email') }}" method="POST" ></form>
                @csrf

                <center><div class="row mb-12">
                            <label for="email" class="col-md-12 col-form-label text-white"><b>{{ __('Correo electronico:') }}</b></label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingrese su correo electronico">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ 'Ingrese un correo electronico valido' }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div></center>
                <br>
                <center><div class=" row mb-3">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-secondary">
                            {{ __('Enviar enlace')}}
                        </button>
                    </div>
                </div></center>
            </div>
        </div>

    </div>

</div>
@endsection
