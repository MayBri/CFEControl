@extends('layouts.libviajes')

@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="card-title">Lista de los Equipos recientes</h2>
            <hr>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Administrador/ Lista de equipos</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                    <option selected>Julio 2022</option>
                    <option value="1">Agosto 2022</option>
                    <option value="2">Septiembre 2022</option>
            </select>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Salida</th>
                            <th scope="col">Personas</th>
                            <th scope="col">Comprobante</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lista as $equipos)
                            <tr>
                                <th scope="row">{{$equipos->id}}</th>
                                <td>{{$equipos->nombre}}</td>
                                <td>{{$equipos->telefono}}</td>
                                <td>{{$equipos->salida}}</td>
                                <td>{{$equipos->personas}}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{route('admin.reporte.cliente', $equipos->id)}}" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Cotización" target="_black">
                                        <i class="far fa-file-pdf"></i>
                                    </a>
                                    <a class="btn btn-primary" href="#!" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Comprobante Cliente" target="_black">
                                        <i class="far fa-file-pdf"></i>
                                    </a>
                                    <a class="btn btn-warning" href="#!" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Reporte Gastos" target="_black">
                                        <i class="far fa-file-pdf"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('admin.cliente.ver', $equipos->id)}}" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Ver Cliente">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning" href="{{route('admin.servicio.modificar', $equipos->id)}}" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Editar Cliente">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td  style="width: 5%">
                                    <form action="{{route('admin.destroy', $equipos->id)}}" class="eliminar" method="get">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar este cliente">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a>
                        {{$lista->links()}}
                </a>

            </div>

        </div>

    </div>
</div>

        <script>
             const terms = document.createElement('svg');
             terms.setAttribute('id','1');
        </script>


    <!-- script para mostrar mensaje de confirmacion de elimianar -->
    <script>
        $('.eliminar').submit(function(e){
            e.preventDefault();
            Swal.fire({
            title: '¿Está seguro en eliminar?',
            text: "¡No podrás recuperar este tour!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e02d1b',
            cancelButtonColor: '#64a19d',
            confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
            })
        })
    </script>
    <!-- script para mostrar un modal -->
         <script>
            $(document).ready(function(){
                $('#exampleVaryingModal1').on('show.bs.modal', function (event) {
                   var button = $(event.relatedTarget) // Button that triggered the modal
                   var recipient = button.data('whatever') // Extract info from data-* attributes
                   // We are jquery here to update the modal's content
                   var modal = $(this)
                   modal.find('.modal-body textarea').val(recipient)
                })
             });
          </script>
@endsection
