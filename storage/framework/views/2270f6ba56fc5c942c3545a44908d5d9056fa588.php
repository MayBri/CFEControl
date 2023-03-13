<!--<?php $__env->startSection('title', 'Inicio se sesión'); ?>-->
<?php $__env->startSection('content'); ?>
<head>
    <!-- Favicon icon -->
    <link rel="icon" type="image/lo.png" sizes="16x16" href="<?php echo e(asset('img/lo2.png')); ?>">
    <title>Inicio de sesión</title>
</head>
<br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row justify-content-center">
    <div class="row justify-content-center col-md-12 col-sm-12 row-cols-md-12 row-cols-sm-3" >
    <!--LIBRERIA PARA EL MOVIMIENTO DE LAS IMAGENES-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <img src="acfe/servicio-tecnico.png" data-aos="flip-left" data-aos-duration="1500"  style="border-radius: 1rem 0 0 1rem; "alt="AvengersEndgame">

        <div class="col-md-6" data-aos="fade-down" data-aos-duration="1500" >
            <div class="card col-md-0">
                <div class="card-header btn btn-primary" stryle="background-color: ;" data-aos="fade-down" data-aos-duration="1500" ><center><b><?php echo e(__('Inicio de sesión')); ?></b></center></div>
                
                <div class="card-body" style="background-color:">
                    <form method="POST" action="<?php echo e(route('login')); ?>" enctype="multipart/form-data"  class="mt-4 needs-validation" novalidate>
                        <?php echo csrf_field(); ?>

                        <div class="col-lg-12">
                            <label for="email" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b><?php echo e(__('Correo electronico')); ?></b></label>
                            <center><div class="col-md-8">
                                <input id="email" data-aos="fade-down" data-aos-duration="1500"  type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Ingresar correo electronico">
                                <div class="valid-feedback"> El correo electronico es valido</div>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e('El correo ingresado es incorrecto'); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div></center>
                        </div>

                        <div class="col-lg-12">
                            <label for="password" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b><?php echo e(__('Contraseña')); ?></b></label>
                            <center><div class="col-md-8">
                                <li class="list-inline-item">
                                    <input id="password" data-aos="fade-down" data-aos-duration="1500"  type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" value="<?php echo e(old('password')); ?>" required autocomplete="password" autofocus placeholder="Ingresar contraseña">
                                </li>
                                <li class="list-inline-item">
                                    <a onclick="mostrarPassword()"><i class="text-primary ti-eye" data-aos="fade-down" data-aos-duration="1500"></i></a>
                                </li>
                                <div class="valid-feedback"> Contraseña valido</div>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e('Contraseña incorrecta verificar'); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div></center>
                        </div>
                                
                            </div>
                        <br>
                        
                        <div class="col-lg-12">
                            <center><div class="col-md-12">
                                <button data-aos="fade-down" data-aos-duration="1500" type="submit" class="btn btn-primary">
                                    <?php echo e(__('Acceder')); ?>

                                </button>
                            </div></center>

                            <!--center><div class="col-md-12">
                            <a class="btn" data-aos="fade-down" data-aos-duration="1500"  href="<?php echo e(route('register')); ?>"></a>
                            </div></center-->

                            <center><div class="row md-0">
                                <div class="col-md-12" data-aos="fade-down" data-aos-duration="1500">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="remember"> 
                                        <?php echo e(__('Recordarme')); ?>

                                    </label>
                                </div>
                            </div></center>
                            <center><div class="col-md-12"  data-aos="fade-down" data-aos-duration="1500">
                                <?php if(Route::has('password.request')): ?>
                                    <a class="col-md-12 col-form-label text-center" class="btn btn-link" href="<?php echo e(route('password.request')); ?>" >
                                        <p style="color:#21252985;">¿Olvidaste tu contraseña?</p>
                                    </a>
                                <?php endif; ?>
                            </div></center>
                            
                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </div>
</div>

<br>
<!-- ============= PASSWORD VISUALIZAR Y OCULTAR OJO ==================== -->
<script type="text/javascript">
        function mostrarPassword() {
            var cambio = document.getElementById("password");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            } else {
                cambio.type = "password";
                $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        }
        $(document).ready(function() {
            //CheckBox mostrar contraseña
            $('#ShowPassword').click(function() {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
            $('#ShowPassword2').click(function() {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
        });
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CFEControl\resources\views/auth/login.blade.php ENDPATH**/ ?>