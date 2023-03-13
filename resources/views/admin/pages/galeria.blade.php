@extends('layouts.libviajes')

@section('title', 'Galeria')
@section('content')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-10 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Galeria</h3>
            <hr>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Administrador / Tours / Ver</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right"></div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card text-center">
                    <!-- Example of a form that Dropzone can take over -->
                    <form action="{{ route('admin.imagen')}}" class="dropzone" id="my-great-dropzone" method="POST"></form>
                </div>
                <form action="{{ route('admin.imagenes')}}" method="POST" enctype="multipart/form-data">
                <div class="card-group col-md-12">
                    <!-- Llenado de datos del post -->
                    @foreach ($files as $galerias)
                        <!-- Button trigger modal -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card" style="width: 18rem;">
                                <label  class="box">
                                    <div class="alinearderecha btn btn-circle btn-light">
                                        <input type="checkbox" name="countries[]" id="myCheckbox{{$id = $galerias->id}}" Onchange="mostrar({{$id}})" value="{{$id}}">
                                    </div>
                                    <img  id="imagen{{$id}}" src="{{ asset($galerias->link)}}" class="card-img-top rounded-lg img-responsive shadow-lg">
                                </label>
                                <!-- boton -->
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$id}}">Ver {{$id}}</a>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-xl" id="exampleModal{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                <div class="modal-content text-white bg-dark">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">{{$galerias->nombre}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset($galerias->link) }}" class="card-img-top rounded img-responsive">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <a href="javascript:history.back()" class="btn btn-secondary btn-user">  Cancelar </a>
                        <button type="submit" class="btn btn-primary btn-user" name="idcliente"> Siguiente </button>
                </div>
                </form>
            </div>
            <!--
            <div class="card" style="width: 18rem;">
                <div class="box">
                        <img id="preview" src="{{ asset('img/imagen-no-disponible.jpg') }}" class="card-img-top rounded img-fluid shadow-sm p-3">
                    <input id="galeria" name="galeria" type="hidden" value="">
                </div>
            </div>

            <div class="card col-4">
                <-- Subir solo 1 imagen--
                <Label>Imagen</Label>
                <div class="input-group mb-3">
                    <input type="file" class="custom-file-input" name="file" id="imagenunico" accept="image/*">
                    <label class="custom-file-label" for="imagenunico">Subir imagen</label>
                </div>
            </div>
        -->
        </div>
    </div>
</div>



<!----------------    Previsualizacion de imagen Seleccionada     -------------------->
<script text="text/javascript">
    function mostrar(num) {
        var x = document.getElementById("imagen"+num).src;
        if (event.currentTarget.checked) {
            document.getElementById("preview").src=x;
            document.getElementById("galeria").value=x;
        } else {
            document.getElementById("preview").src="{{ asset('img/imagen-no-disponible.jpg') }}";
        }
    }
</script>
 <!----------------     Subir imagenes con Dropzone     -------------------->
    <script>
    Dropzone.options.myGreatDropzone = {
        headers:{
            'X-CSRF-TOKEN' : "{{csrf_token()}}"
        },
        dictDefaultMessage: "Arraste una imagen al recuadro para subir",
        acceptedFiles: "image/*",
        maxFilessize: 2,
        maxFiles: 10,
        createImageThumbnails: true,
    };
    </script>

 <!----------------     Previsualizacion imagen al subir    -------------------->
    <script>
        imagenunico.onchange = evt => {
            const [file] = imagenunico.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>


@endsection
