

<?php $__env->startSection('content'); ?>

<div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Lista cliente</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html">Administrador/ Paquetes / Lista ciente</a>
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
    <h1>Listado de clientes</h1>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.controlad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CFEControl\resources\views/admin/pages/paquetes/cliente.blade.php ENDPATH**/ ?>