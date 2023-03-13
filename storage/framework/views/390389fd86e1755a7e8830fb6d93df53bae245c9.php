<?php $__env->startSection('content'); ?>
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
                <div class="card-header" style=""><img src="<?php echo e(asset('img/lo2.png')); ?>" alt="login form" clas="img-fluid" style="heigh: 27px; width:10%;">
                <b><center><h5><?php echo e(__('Restablecer la contraseña')); ?></h5></center></b></div>
            </div>
            <div class="card-body" style="background-color: #64B289;">
                <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                    <?php echo e('Correo enviado'); ?></div>
                <?php endif; ?>
            <form action="<?php echo e(route('password.email')); ?>" method="POST" ></form>
                <?php echo csrf_field(); ?>

                <center><div class="row mb-12">
                            <label for="email" class="col-md-12 col-form-label text-white"><b><?php echo e(__('Correo electronico:')); ?></b></label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Ingrese su correo electronico">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e('Ingrese un correo electronico valido'); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div></center>
                <br>
                <center><div class=" row mb-3">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-secondary">
                            <?php echo e(__('Enviar enlace')); ?>

                        </button>
                    </div>
                </div></center>
            </div>
        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CFEControl\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>