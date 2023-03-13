<?php $__env->startSection('content'); ?>
<head>
    <!-- Favicon icon -->
    <link rel="icon" type="image/lo.png" sizes="16x16" href="<?php echo e(asset('img/lo2.png')); ?>">
    <title>Modificar cliente</title>
</head>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Registo de un nuevo cliente</h3>
            <hr>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Administrador / Nuevo Cliente</a>
                        </li>
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

    <div class="progress mb-2">
        <div class="progress-bar progress-bar-striped progress-bar-animated"
            role="progressbar" aria-valuenow="75" aria-valuemin="0"
            aria-valuemax="100" style="width: 75%"> 75
        </div>
    </div>

<div class="container-fluid">
    <!--Llenado de los datos del cliente -->
    <div class="col-12 col-md-12">
        <div class="row">
            <!-- Datos del cliente-->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                    <h3 class="text-primary">Datos del cliente</h3>
                    <form action="<?php echo e(route('admin.cliente.update', $cliente)); ?>" id="cliente" method="POST" class="needs-validation" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre*</label>
                                    <input class="form-control py-4" id="nombre" name="nombre" type="text" value="<?php echo e($cliente->nombre); ?>" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos*</label>
                                    <input class="form-control py-4" id="apellidos" name="apellidos" type="text" value="<?php echo e($cliente->apellidos); ?>" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefono">Numero de Telefono</label>
                                    <input class="form-control py-4" id="telefono" name="telefono" type="number" value="<?php echo e($cliente->telefono); ?>" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Correo (opcional)</label>
                                    <input class="form-control py-4" id="email" name="email" type="email" aria-describedby="emailHelp" value="<?php echo e($cliente->email); ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="adultos">Numero de adultos</label>
                                    <input class="form-control py-4" id="adultos" name="adultos" type="number" value="<?php echo e($cliente->adultos); ?>" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ninos">Numero de niños</label>
                                    <input class="form-control py-4" id="ninos" name="ninos" type="number" value="<?php echo e($cliente->ninos); ?>" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="salida">Saliendo desde:</label>
                                    <select class="form-control" id="salida" name="salida" type="text" required>
                                        <option value="<?php echo e($cliente->salida); ?>"><?php echo e($cliente->salida); ?></option>
                                        <option value="Tuxtla Gutierrez">Tuxtla Gutierrez</option>
                                        <option value="San Cristobal">San Cristobal de las Casas</option>
                                        <option value="Ocosingo">Ocosingo</option>
                                        <option value="Palenque">Palenque</option>
                                        <option value="Comitan">Comitan</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="direccion">Dirreción del hospedaje</label>
                                    <textarea class="form-control" id="direccion" name="direccion"><?php echo e($cliente->direccion); ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_inicio">Fecha de inicio del viaje</label>
                                    <input class="form-control py-4" id="fecha_inicio" name="fecha_inicio" type="date" value="<?php echo e($cliente->fecha_inicio); ?>"  required />
                                    <div class="invalid-feedback">Selecciona una fecha del viaje.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_fin">Fecha de final del viaje</label>
                                    <input class="form-control py-4" id="fecha_fin" name="fecha_fin" type="date" value="<?php echo e($cliente->fecha_fin); ?>" required />
                                    <div class="invalid-feedback">Selecciona una fecha del viaje.</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="venta">Vendio en:</label>
                                    <select class="form-control" id="venta" name="venta" type="text" required>
                                        <option value="<?php echo e($cliente->venta); ?>"><?php echo e($cliente->venta); ?>?</option>
                                        <option value="Directo">Directo</option>
                                        <option value="Pagina Web">Pagina Web</option>
                                        <option value="Publicidad">Publicidad</option>
                                        <option value="Booking">Booking</option>
                                        <option value="Airbnb">Airbnb</option>
                                        <option value="Expedia">Expedia</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="TripAdvisor">TripAdvisor</option>
                                        <option value="Recomendación">Recomendación</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Ciudad (opcional)</label>
                                    <input class="form-control py-4" id="ciudad" name="ciudad" type="text" value="<?php echo e($cliente->ciudad); ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Estado (opcional)</label>
                                    <input class="form-control py-4" id="estado" name="estado" type="text" value="<?php echo e($cliente->estado); ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pais">Pais (opcional)</label>
                                    <input class="form-control py-4" id="pais" name="pais" type="text" aria-describedby="emailHelp" value="pais"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>

                        <div class="col-md-12">
                                <label for="descripcion">Descripcion breve del cliente (opcional)</label>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3"><?php echo e($cliente->descripcion); ?></textarea>
                                    </div>
                                </div>
                        </div>

                        <div class="form-group text-center mb-3">
                            <a href="javascript:history.back()" class="btn btn-secondary btn-user ">  <- Atras</a>
                            <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> Guardar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- Datos de su pago del cliente-->
            <div class="col-md-3">
                <div class="card">
                    <a class="btn btn-block btn-primary" href="<?php echo e(route('admin.cliente.ver', $cliente->id)); ?>" title="Comprobante">
                    <i class="fas fa-eye"></i> Comprobante cliente
                    </a>
                    <div class="card-body">
                        <h3 class="text-primary mt-3">Pagos</h3>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group"> <strong>Subtotal:</strong> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group text-right"> $ <?php echo e($cliente->total); ?> </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group"> <strong>IVA: </strong> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group text-right"> $ <?php echo e($cliente->iva); ?></p> </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group"><strong>Anticipado: </strong></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group text-right">$ <?php echo e($cliente->anticipo); ?></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group"><strong>Total a deber:</strong></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group text-right">$ <?php echo e($cliente->faltante); ?></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group"><strong>Total:</strong></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group text-right">$ <?php echo e($cliente->total); ?></div>
                                </div>
                            </div>
                    </div>
                    <a class="btn btn-block btn-success" href="<?php echo e(route('admin.pagos.pagoServicio', $cliente->id)); ?>" title="Ir a metodos de pago">
                    Cobrar ahora
                    </a>
                </div>
            </div>
        </div>
    </div >
    <!-- Listado de tour seleccionado - cliente-->

    <div class="form-group text-center mb-4">
        <a href="<?php echo e(route('admin.tour.catalogo', $cliente->id)); ?>" class="btn btn-primary"> + Agregar mas servicios</a>
    </div><br>

    <div class="col-12 col-md-12">
        <h3 class="text-primary mb-4">Tours seleccionado</h3>
        <?php $__currentLoopData = $servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <!-- column -->
            <div class="card">
                <!------------espacio para llenar y formalarios-------------->
                <form action="<?php echo e(route('admin.servicio.update', $servicio)); ?>" id="tours" method="post" class="needs-validation"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="card-body form-row">
                        <div class="col-md-4">
                            <div class="card" style="margin-right: 12px;">
                                <div class="box">
                                    <img class="card-img-top rounded img-responsive" src="<?php echo e(asset($servicio->tour->imagen)); ?>" alt="#">
                                </div>
                                <hr>
                                <Label>Pagos y cobros <?php echo e($servicio->id); ?></Label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Gastos: $</span>
                                    <input type="text" id="costo" name="costo" class="form-control" value="<?php echo e($servicio->costo); ?>"/>
                                    <span class="input-group-text">.00</span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Precio: $</span>
                                    <input type="text" id="precio" name="precio" class="form-control" value="<?php echo e($servicio->precio); ?>" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-row col-12">
                                <Label>Nombre del tour</Label>
                                <input class="form-control py-4" name="descripcion" id="descripcion" type="text" value="<?php echo e($servicio->descripcion); ?>"/>
                            </div>
                            <div class="form-group">
                                <Label>Salida desde:</Label>
                                <select class="form-control" id="lugar_salida" name="lugar_salida" type="text">
                                    <option value="<?php echo e($servicio->recepcion); ?>"><?php echo e($servicio->recepcion); ?></option>
                                    <option value="Tuxtla Gutierrez">Tuxtla Gutierrez</option>
                                    <option value="San cristobal">San Cristobal de las Casas</option>
                                    <option value="Ocosingo">Ocosingo</option>
                                    <option value="Palenque">Palenque</option>
                                    <option value="Comitan">Comitan</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <Label for="lugar_fin">Finaliza en:</Label>
                                <select class="form-control" id="lugar_fin" name="lugar_fin" type="text">
                                    <option value="<?php echo e($servicio->recepcion); ?>"><?php echo e($servicio->recepcion); ?></option>
                                    <option value="Tuxtla Gutierrez">Tuxtla Gutierrez</option>
                                    <option value="San cristobal">San Cristobal de las Casas</option>
                                    <option value="Ocosingo">Ocosingo</option>
                                    <option value="Palenque">Palenque</option>
                                    <option value="Comitan">Comitan</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>

                            <!-- Tag del blog-->
                            <div class="form-group mb-4">
                                <Label>Tipo del recorrido</Label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recorrido" id="radio1" value="<?php echo e($servicio->tipo); ?>" checked>
                                    <label class="form-check-label" for="radio1"><?php echo e($servicio->tipo); ?></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recorrido" id="radio1" value="Compartido">
                                    <label class="form-check-label" for="radio1">Compartido</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recorrido" id="radio2" value="Privado">
                                    <label class="form-check-label" for="radio2">Privado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recorrido" id="radio3" value="Indefinido">
                                    <label class="form-check-label" for="radio3">Indefinido</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recorrido" id="radio4" value="Otro">
                                    <label class="form-check-label" for="radio4">Otro</label>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <Label for="hora_salida">Hora del inicio del tour</Label>
                                        <input class="form-control py-4" name="fecha_salida" type="date" value="<?php echo e($servicio->check_in); ?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <Label for="hora_retorno">Hora aprox. del fin del tour</Label>
                                        <input class="form-control py-4" name="fecha_retorno" type="date" value="<?php echo e($servicio->check_out); ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <Label for="hora_salida">Hora del inicio del tour</Label>
                                        <input class="form-control py-4" name="hora_salida" type="time" value="<?php echo e($servicio->hora_inicio); ?>"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <Label for="hora_retorno">Hora aprox. del fin del tour</Label>
                                        <input class="form-control py-4" name="hora_retorno" type="time" value="<?php echo e($servicio->hora_fin); ?>"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> Modificar Tour</button>
                        </div>
                </form>
                        <div class="form-group text-center mb-3">
                            <form action="<?php echo e(route('admin.servicio.destroy', $servicio)); ?>" class="eliminar" method="get">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar Tour</button>
                            </form>
                        </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div >

    <div class="col-12 col-md-12">
        <hr>
        <div class="row text-center md-4">
            <div class="col-lg-3">
                    <a href="#!" class="btn btn-secondary"><i class="far fa-file-pdf"></i> Cotización</a>
            </div>
            <div class="col-lg-3">
                    <a href="#!" class="btn btn-primary"><i class="far fa-file-pdf"></i> Comprobante Cliente</a>
            </div>
            <div class="col-lg-3">
                    <a href="#!" class="btn btn-warning"><i class="far fa-file-pdf"></i> Compronte Agencia</a>
            </div>
            <div class="col-lg-3 align-self-end">
            <form action="<?php echo e(route('admin.destroy', $cliente)); ?>" class="eliminar" method="get">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar Cliente</button>
            </form>
            </div>
        </div>
    </div>
</div>



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

<script text="text/javascript">
//funcion asincrona de informacion
    function mostrar(){
var fecha_inicio = document.getElementById("fecha_inicio").value;
document.getElementById("fecha_fin").value=fecha_inicio;
//document.getElementById("fecha_fin").style.color = "blue";
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.controlad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CFEControl\resources\views/admin/pages/clientes/modificarCliente.blade.php ENDPATH**/ ?>