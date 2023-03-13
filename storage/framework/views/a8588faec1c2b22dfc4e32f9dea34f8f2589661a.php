<?php $__env->startSection('title', '404'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('includes.breadcrumb', ['breadcrumbs' => [ 'Error404' => '']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <!-- error 404 -->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <h1 class="text-center mt-4">UPPS!</h1>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <hr>
                                    <div class="text-center">
                                        <h2 class="h3 text-gray-900 mb-4">Error 404</h2>
                                        <p class="lead text-gray-800 mb-4">Página no encontrada</p>
                                        <p class="lead text-gray-600 mb-5">Parece que encontraste un error en la matriz ... </p>
                                        <a href="javascript:history.back()" class="btn btn-block btn-rounded btn-light">&larr; Volver atras</a>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-5  mt-3">
                                <div style="width: 26rem;">
                                    <div class="card-body">
                                        <br>
                                        <div class="box">
                                            <img src="<?php echo e(asset('assets/images/big/404.png')); ?>" class="card-img-top rounded img-responsive" alt="...">
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CFEControl\resources\views/errors/404.blade.php ENDPATH**/ ?>