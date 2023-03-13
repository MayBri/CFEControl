<?php $__env->startSection('content'); ?>
<head>
    <!-- Favicon icon -->
    <link rel="icon" type="image/lo.png" sizes="16x16" href="<?php echo e(asset('img/lo2.png')); ?>">
    <title>Nuevo cliente</title>
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

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card mb-4">

                <div class="card-body">

                    <form action="<?php echo e(route('admin.create')); ?>" id="cliente" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        <?php echo csrf_field(); ?>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombres">Nombre*</label>
                                    <input class="form-control" id="nombres" name="nombre" type="text" placeholder="Ingresa su nombre del cliente" autocomplete="off" pattern="[A-Z a-záéíóúÁÉÍÓÚñÑ]{3,50}" title="Solo letras" data-sb-validations="required" required />
                                    <div class="valid-feedback">El nombre es Valido</div>
                                    <div class="invalid-feedback">Requerimos el Nombre del cliente (Solo letras).</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos*</label>
                                    <input class="form-control py-4" id="apellidos" name="apellidos" type="text" placeholder="Ingresa su apellido completo del cliente" autocomplete="off" pattern="[A-Z a-záéíóúÁÉÍÓÚñÑ]{3,50}" title="Solo letras" data-sb-validations="required" required />
                                    <div class="valid-feedback">El apellido es Valido</div>
                                    <div class="invalid-feedback">Requerimos el Apellido del cliente (Solo letras).</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefono">Numero de Telefono</label>
                                    <input class="form-control py-4" id="telefono" name="telefono" type="number" placeholder="Ingresa su telefono" placeholder="Numero de Teléfono Ej:9981428125" data-sb-validations="required" autocomplete="off" pattern="[0-9]{10}" title="Solo numeros" required>
                                    <div class="invalid-feedback" data-sb-feedback="telefono:required">Requerimos su numero de telefono (Solo 10 numeros).</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Correo (opcional)</label>
                                    <input class="form-control py-4" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="Escribe tu Correo electronico: Ej:correo@gmail.com" data-sb-validations="required,email" autocomplete="off"/>
                                    <div class="valid-feedback">El correo es Valido</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Requerimos su correo electronico.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Correo no valido.</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="adultos">Número de adultos</label>
                                    <input class="form-control py-4" id="adultos" name="adultos" type="number" placeholder="Ingresa el numero de adultos" data-toggle="tooltip" data-placement="top" title="Puedes dejar el valor en (0)" data-sb-validations="required" autocomplete="off" pattern="[0-9]{10}" title="Solo numeros" required>
                                    <div class="invalid-feedback" data-sb-feedback="adultos:required">Requerimos el numero de adultos (Solo numeros).</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ninos">Número de niños</label>
                                    <input class="form-control py-4" id="ninos" name="ninos" type="number" placeholder="Ingresa el numero de niños" data-toggle="tooltip" data-placement="top" title="Puedes dejar el valor en (0)"  data-sb-validations="required" autocomplete="off" pattern="[0-9]{10}" title="Solo numeros" required>
                                    <div class="invalid-feedback" data-sb-feedback="ninos:required">Requerimos el número de adultos (Solo numeros).</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="salida">Saliendo desde:</label>
                                    <select class="form-control" id="salida" name="salida" type="text" required>
                                        <option value="">¿Dónde lo recogemos?</option>
                                        <option value="Tuxtla Gutierrez">Tuxtla Gutierrez</option>
                                        <option value="San Cristobal">San Cristobal de las Casas</option>
                                        <option value="Ocosingo">Ocosingo</option>
                                        <option value="Palenque">Palenque</option>
                                        <option value="Comitan">Comitan</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    <div class="invalid-feedback">Selecciona el lugar de salida del cliente.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="direccion">Dirección de salida</label>
                                    <textarea class="form-control" id="direccion" name="direccion" placeholder="Ingresa el nombre del lugar de salida" data-toggle="tooltip" data-placement="top" title="Si aun no tienes decidido puedes escribir (indefinido)"  required></textarea>
                                    <div class="valid-feedback">Los datos son validos</div>
                                    <div class="invalid-feedback">Escribe la direccion del cliente a recoger.</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_inicio">Fecha de inicio del viaje</label>
                                    <input class="form-control py-4" id="fecha_inicio" name="fecha_inicio" type="date" onchange="mostrar()" required />
                                    <div class="invalid-feedback">Selecciona una fecha del viaje.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_fin">Fecha de final del viaje</label>
                                    <input class="form-control py-4" id="fecha_fin" name="fecha_fin" type="date" required />
                                    <div class="invalid-feedback">Selecciona una fecha del viaje.</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="venta">¿Cómo se entero?:</label>
                                    <select class="form-control" id="venta" name="venta" type="text" required>
                                        <option value="">¿Dónde lo vendío o cómo se entero?</option>
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
                                    <div class="invalid-feedback">Selecciona cómo se entero el cliente de nosotros</div>
                                </div>
                            </div>
                        </div>

                                <!-- Tipo de viaje-->
                                <div class="form-group mb-4">
                                    <Label>Tipo del recorrido</Label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="recorrido" id="radio1" value="compartido" selected required >
                                        <label class="form-check-label" for="radio1">Tour Compartido</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="recorrido" id="radio2" value="privado">
                                        <label class="form-check-label" for="radio2">Tour Privado</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="recorrido" id="radio3" value="hospedaje" disabled>
                                        <label class="form-check-label" for="radio3">Hospedaje</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="recorrido" id="radio4" value="paquete" disabled>
                                        <label class="form-check-label" for="radio4">Paquete</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="recorrido" id="radio5" value="vuelos" disabled>
                                        <label class="form-check-label" for="radio5">Vuelos</label>
                                    </div>
                                </div>

                        <hr>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Ciudad (opcional)</label>
                                    <input class="form-control py-4" id="ciudad" name="ciudad" type="text" placeholder="Ingresa ciudad" autocomplete="off" pattern="[A-Z a-záéíóúÁÉÍÓÚñÑ]{3,50}" title="Solo letras" data-sb-validations="required"/>
                                    <div class="valid-feedback">Datos validos</div>
                                    <div class="invalid-feedback">Selecciona la ciudad del cliente</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Estado (opcional)</label>
                                    <input class="form-control py-4" id="estado" name="estado" type="text" placeholder="Ingresa estado" autocomplete="off" pattern="[A-Z a-záéíóúÁÉÍÓÚñÑ]{3,50}" title="Solo letras" data-sb-validations="required"/>
                                    <div class="valid-feedback">Datos validos</div>
                                    <div class="invalid-feedback">Selecciona la estado del cliente</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pais">Pais (opcional)</label>
                                    <input class="form-control py-4" id="pais" name="pais" type="text" aria-describedby="emailHelp" placeholder="Ingresa su Pais de origen" autocomplete="off" pattern="[A-Z a-záéíóúÁÉÍÓÚñÑ]{3,50}" title="Solo letras" data-sb-validations="required"/>
                                    <div class="valid-feedback">Datos validos</div>
                                    <div class="invalid-feedback">Selecciona la pais del cliente</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>

                        <div class="col-md-12">
                                <label for="descripcion">Descripción breve del cliente (opcional)</label>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Escriba aqui la descripcion..."></textarea>
                                    </div>
                                </div>
                        </div>

                        <hr>
                        <div class="form-group  text-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" required>
                                <label class="custom-control-label" for="customCheck">Acepto los <a href="/terminos" target="_blank">Términos y condiciones</a></label>
                                    <div class="valid-feedback">Aceptado</div>
                                    <div class="invalid-feedback">Para continuar deberas aceptar los Términos y condiciones</div>
                            </div>
                        </div>

                        <div class="form-group text-center mb-3">
                            <button type="submit" class="btn btn-primary btn-user "> Guardar </button>
                            <a href="javascript:history.back()" class="btn btn-secondary btn-user ">  Cancelar </a>
                        </div>
                    </form>
                </div>
            </div>
    </div >
</div>


<script text="text/javascript">
//funcion asincrona de informacion
    function mostrar(){
var fecha_inicio = document.getElementById("fecha_inicio").value;
document.getElementById("fecha_fin").value=fecha_inicio;
//document.getElementById("fecha_fin").style.color = "blue";
    }
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.controlad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CFEControl\resources\views/admin/pages/clientes/nuevoCliente.blade.php ENDPATH**/ ?>