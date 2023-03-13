@extends('layouts.libviajes')
@section('title', 'Equipo')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Vista de equipo</h3>
            <hr>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Administrador / Equipo / Ver</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                 <div id="fechayhora">Hoy</div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container-fluid">
    <div class="col-12 col-md-12">
        <div class="row text-center">
            <div class="col-lg-3">
                <a class="btn btn-block btn-warning" href="{{route('admin.servicio.modificar', $equipo->id)}}" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Editar Cliente">
                    <i class="fas fa-edit"></i> Editar
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{ route('admin.tour.catalogo', $equipo->id)}}" class="btn btn-block btn-secondary"> + Agregar mas servicios</a>
            </div>
            <div class="col-lg-3">
                <a class="btn btn-block btn-success" href="{{route('admin.pagos.pagoServicio', $equipo->id)}}" title="Ir a metodos de pago">
                    <i class="far fa-money-bill-alt"></i> Cobrar ahora
                </a>
            </div>
            <div class="col-lg-3 align-self-end">
                <ul class="navbar-nav">
                    <!-- ============================================================== -->
                    <!-- Boton Imprimir -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="btn btn-block bg-primary text-white" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                                <i class="fas fa-file-pdf"></i>  Descargar  <i data-feather="chevron-down" class="svg-icon"></i>
                        </a>
                        <div class="dropdown-menu animated flipInY btn btn-block">
                            <a class="dropdown-item" href="{{route('reporte.equipo', $equipo->id)}}" target="_black">
                                <i class="far fa-handshake"></i>&nbsp;&nbsp;Cotización
                            </a>
                            <a class="dropdown-item" href="{{route('admin.reporte.equipo')}}" target="_black">
                                <i class="far fa-file-pdf"></i>&nbsp;&nbsp;Comprobante
                            </a>
                            <a class="dropdown-item" href="#!" target="_black">
                                <i class="far fa-file-alt"></i>&nbsp;&nbsp;Agencia
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center mt-5 mb-50">
        <div class="row">
            <div class="col-md-12">
                <div class="card" id="invoice">
                    <div class="card-header bg-transparent header-elements-inline">
                        <h6 class="card-title text-primary"><img src="{{ asset('img/logotipo.png') }}" width="100px" /></h6>
                        <span class="text-muted text-sm-right">Fecha de expedición: 22/02/2022 05:08 p. m.</span>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="mb-4 pull-left">
                                    <ul class="list list-unstyled mb-0 text-left">
                                        <li>
                                            <h5 class="card-title"><b>Nombre: {{$equipo->nombre}} {{$equipo->apellidos}}</b></h5>
                                        </li>
                                        <li><b>Telefono:</b> {{$equipo->telefono}}</li>
                                        <li><b>Correo:</b> {{$equipo->email}}</li>
                                        <li><b>Direccion:</b> {{$equipo->direccion}}</li>
                                        <li><b>Nota:</b> {{$equipo->descripcion}}</li>
                                        <li>{{$equipo->ciudad}} - {{$equipo->estado}} - {{$equipo->pais}}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dotos de la empresa -->
                            <div class="col-sm-5">
                                <div class="text-sm-right">
                                    <ul class="list list-unstyled mb-0 text-left">
                                        <li>
                                            <h4 class="card-title text-primary"> Nombre de la agencia</h4>
                                        </li>
                                        <li><a href="#" data-abc="true"> Barrio Centro, Ocosingo, Chiapas.</a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=+529981428125" data-abc="true">Whats: 998 142 8125</a> /
                                            <a href="tel:9191623995" data-abc="true">Tel: 9981428125</a>
                                        </li>
                                        <li><a href="mailto:nombrempresa@gmail.com" data-abc="true"> nombrempresa@gmail.com</a></li>
                                        <li><a href="www.nombrempresa.com" data-abc="true"> www.nombrempresa.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive text-center">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No. equipo</th>
                                    <th>No. Personas</th>
                                    <th>No. Adultos</th>
                                    <th>No. Menores</th>
                                    <th>No. Noches</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>AXC-2022-{{$equipo->id}}</td>
                                    <td>{{$equipo->personas}} Persona(s)</td>
                                    <td>{{$equipo->adultos}} Adulto(s)</td>
                                    <td>{{$equipo->ninos}} Niñ@s</td>
                                    <td>{{$dias = floor(abs((strtotime($equipo->fecha_inicio) - strtotime($equipo->fecha_fin)) / 86400)) + 1;}} día(s)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-info">
                                <tr>
                                    <th>Check-in</th>
                                    <th>Check-out</th>
                                    <th>Descripción</th>
                                    <th class="text-right">Costo</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($servicios as $servicio)
                                <tr>
                                    <td>{{date_format(date_create($servicio->check_in), 'd M Y')}}</td>
                                    <td>{{date_format(date_create('2022-01-22'), 'd M Y')}}</td>
                                    <td>
                                        <h5 class="mb-0">{{$servicio->tipo}}: {{$servicio->descripcion}}</h5>
                                        <span class="text-muted">Salida en: {{$servicio->hospedaje}}</span><br>
                                        <span class="text-muted">Termina en: {{$servicio->hospedaje}}</span>
                                    </td>
                                    <td class="text-right"><span class="font-weight-semibold ">{{$servicio->precio}}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="justify-content-end">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <ul style="font-size:14px;" class="list list-unstyled text-muted text-left">
                                                        <li class="font-weight-bold">Transferencia Nacional
                                                        </li>
                                                        <li>Banco: BanCoppel</li>
                                                        <li>4169-1603-0323-2418</li>
                                                        <li>CLABE: 137920102036618650</li>
                                                        <li>Titular: Feliciano Sánchez Hernández</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul style="font-size:14px;" class="list list-unstyled text-muted text-left">
                                                        <li class="font-weight-bold">Internacional
                                                        </li>
                                                        <li> Banco: Santander</li>
                                                        <li>SWIFT: BMSXMXMM</li>
                                                        <li> Clave: 0000000000000000</li>
                                                        <li>Titular: Felipe de Jesús Méndez E</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="table-responsive">
                                    <table class="table  table-sm table-light">
                                        <tbody>
                                            <tr>
                                                <th class="text-left">SubTotal:</th>
                                                <td class="text-right">$ {{number_format($equipo->total,2)}}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">IVA 16%:</th>
                                                <td class="text-right">$ {{number_format($equipo->iva,2)}}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left font-weight-bold">TOTAL:</th>
                                                <td class="text-right  font-weight-bold">$ {{number_format($equipo->total,2)}}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Reservó con: <span class="font-weight-normal">(50%)</span></th>
                                                <td class="text-right">$ {{number_format($equipo->anticipo,2)}}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Saldo pendiente:</th>
                                                <td class="text-right text-primary">
                                                    <h5 class="font-weight-bold">$ {{number_format($equipo->faltante,2)}}</h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="table-responsive text-center">
                                    <span style="font-size:12px;" class="text-muted"><br><br><img src="{{ asset('img/libviajes.png') }}" width="100px" /><br>
                                        Feliciano Sanchez H.
                                        <br>Asesor de Ventas y reservaciones</span>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="table-responsive">
                                    <div style="font-size:10px; text-align: justify;"> <span class="text-muted">
                                            <br>POLITICA DE RESERVACIONES Y CANCELACIONES
                                            <br>• Todos nuestros servicios requieren previa reservación y están sujetos a disponibilidad.
                                            <br>• Cualquier cambio o cancelación a su reservación deberá solicitarla al <a href="tel:9981428125" data-abc="true">998 142 8125</a> o <a href="tel:9981428125" data-abc="true">998 142 8125 </a>(36 horas antes de la actividad).
                                            <br>• Niños a partir de 3 años se la cobra el 80% del costo total del viaje.
                                            <br>• Toda reserva deberá ser garantizada con un 50% del costo total a pagar, en una cuenta bancaria que se proporcione en el momento de contratar los servicios, en caso de que dicha reserva no se garantice, la empresa no estará obligado a respetar la reservación. El otro 50% liquidaría en la fecha de su llegada, en efectivo para garantizar al 100% de su viaje.
                                            <br>• En caso de fuerza mayor (Bloqueos, desastres naturales y otros, la empresa no hace responsable del reembolso.
                                            <br>• Si cancela el mismo día de su fecha de la actividad, se le aplicará un cargo del 100% del costo total.
                                            <br><a href="https://nombrempresa.com" data-abc="true"> Apasionado X Chiapas </a> más información a:
                                            <a href="https://facebook.com/nombrempresa" data-abc="true"> Facebook </a> |
                                            <a href="mailto:info@nombrempresa.com" data-abc="true"> Correo </a> |
                                            <a href="https://nombrempresa.com" data-abc="true"> Pagina web </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
