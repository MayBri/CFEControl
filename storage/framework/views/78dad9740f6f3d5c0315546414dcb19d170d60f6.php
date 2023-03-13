

<?php $__env->startSection('title', 'Nuevo Equipo'); ?>

<?php $__env->startSection('content'); ?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Registo de un nuevo equipo</h3>
            <hr>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Administrador / Nuevo equipo</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?php echo e(route('admin.create')); ?>" id="equipo" method="post" class="needs-validation" enctype="multipart/form-data">
                         <?php echo csrf_field(); ?>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre del equipo*</label>
                                    <input class="form-control py-4" id="nombre" name="nombre" type="text" placeholder="Ingresa el nombre del equipo" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="serie">Numero de serie</label>
                                    <input class="form-control py-4" id="serie" name="serie" type="number" placeholder="Ingresa numero de serie" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="salida">Sucursal:</label>
                                    <select class="form-control" id="salida" name="salida" type="text" required>
                                        <option value="">¿Lugar de estancia?</option>
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
                                    <label for="estado">Estado del equipo</label>
                                    <textarea class="form-control" id="estado" name="estado" placeholder="Ingresa las caracteristicas, su estado y  N-serie" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha">Fecha de adquisición</label>
                                    <input class="form-control py-4" id="fecha" name="fecha" type="date" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="venta">Comprado en:</label>
                                    <select class="form-control" id="venta" name="venta" type="text" required>
                                        <option value="">¿Donde lo compraron o como se entero?</option>
                                        <option value="Directo">Directo</option>
                                        <option value="Pagina Web">Pagina Web</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Recomendación">Recomendación</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                                <!-- Tipo de viaje-->
                                <!--div class="form-group mb-4">
                                    <Label>Tipo del recorrido</Label><br>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recorrido" id="radio1" value="compartido" selected required >
                                    <label class="form-check-label" for="radio1">Tour Compartido</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recorrido" id="radio2" value="privado" disabled>
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
                                </div-->

                        <hr>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="costo">Costo de pago(opcional)</label>
                                    <input class="form-control py-4" id="costo" name="costo" type="text" placeholder="Ingresa costo" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usuario">Usuario de equipo (opcional)</label>
                                    <input class="form-control py-4" id="usuario" name="usuario" type="text" placeholder="Ingresar usuario de equipo" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                                <label for="descripcion">Descripcion breve del equipo (opcional)</label>
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
                                <label class="custom-control-label" for="customCheck">Acepto los <a href="/aviso" target="_blank">Aviso de Privacidad</a></label>
                            </div>
                        </div>

                        <div class="form-group text-center mb-3">
                            <button type="submit" class="btn btn-primary btn-user ">
                                Guardar
                            </button>
                            <a href="#" class="btn btn-secondary btn-user ">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
    </div >
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.controlad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CFEControl\resources\views/admin/pages/equipos/nuevoEquipo.blade.php ENDPATH**/ ?>