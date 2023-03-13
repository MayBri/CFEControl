<!--<?php $__env->startSection('title', 'Inicio se sesión'); ?>-->
<?php $__env->startSection('content'); ?>
<head>
    <!-- Favicon icon -->
    <link rel="icon" type="image/lo.png" sizes="16x16" href="<?php echo e(asset('img/lo2.png')); ?>">
    <title>Registro de Usuario</title>
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
            <img src="acfe/Historia.png" data-aos="flip-left" data-aos-duration="1500"  style="border-radius: 1rem 0 0 1rem; "alt="AvengersEndgame">

        <div class="col-md-6" data-aos="fade-down" data-aos-duration="1500" >
            <div class="card col-md-0">
                <div class="card-header btn btn-primary" stryle="background-color: ;" data-aos="fade-down" data-aos-duration="1500" ><center><b><?php echo e(__('Ingresar datos de registro')); ?></b></center></div>
                
                <div class="card-body" style="background-color:">
                    <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data"  class="mt-4 needs-validation" novalidate>
                        <?php echo csrf_field(); ?>

                        <div class="col-lg-12">
                            <label for="name" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b><?php echo e(__('Nombre de usuario')); ?></b></label>
                            <center><div class="col-md-8">
                                <input id="name" data-aos="fade-down" data-aos-duration="1500"  type="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" pattern="[A-Za-z áéíóúÁÉÍÓÚñÑ]+" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Escribir su nombre de usuario">
                                <div class="valid-feedback">El nombre es valido</div>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e('Escribe su nombre(Solo letras)'); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div></center>
                        </div>

                        <div class="col-lg-12">
                            <label for="rpe" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b><?php echo e(__('RPE del usuario')); ?></b></label>
                            <center><div class="col-md-8">
                                <input id="rpe" data-aos="fade-down" data-aos-duration="1500"  type="rpe" class="form-control <?php $__errorArgs = ['rpe'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="rpe" pattern="[A-Z 0-9]" value="<?php echo e(old('rpe')); ?>" required autocomplete="rpe" autofocus placeholder="Escribir su RPE">
                                <div class="valid-feedback"> El RPE es valido</div>
                                <?php $__errorArgs = ['rpe'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e('Ingresar RPE correctamente'); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div></center>
                        </div>


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
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Escribe tu correo electronico">
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

                        <br>
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
unset($__errorArgs, $__bag); ?>" name="password" value="<?php echo e(old('password')); ?>" required autocomplete="password" autofocus placeholder="Escribir su contraseña">
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

                        <div class="col-lg-12">
                            <label for="password-confirm" data-aos="fade-down" data-aos-duration="1500"  class="col-md-12 col-form-label text-center"><b><?php echo e(__('Confirmar su contraseña')); ?></b></label>
                            <center><div class="col-md-8">
                                <li class="list-inline-item">
                                    <input id="password-confirm" data-aos="fade-down" data-aos-duration="1500"  type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma su contraceña">
                                </li>
                                <li class="list-inline-item">
                                    <a onclick="mostrarPassword2()"><i class="text-primary ti-eye" data-aos="fade-down" data-aos-duration="1500"></i></a>
                                </li>
                                <div class="valid-feedback"> Contraseña valido</div>
                                <?php $__errorArgs = ['password-confirm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e('La contraseña no coinciden verificar'); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div></center>

                            <center><div class="row md-0">
                                <div class="col-md-12" data-aos="fade-down" data-aos-duration="1500">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> required>
                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Aceptar los ')); ?><a href="<?php echo e(route('pages.aviso')); ?>">aviso de Privacidad</a>
                                    </label>
                                </div>
                            </div></center>
                            
                        </div>
                                
                            </div>
                        
                        <div class="col-lg-12">
                            <center><div class="col-md-12">
                                <button data-aos="fade-down" data-aos-duration="1500" type="submit" class="btn btn-primary">
                                    <?php echo e(__('Registrar')); ?>

                                </button>
                            </div></center>

                            <center><div class="col-md-12">
                            <a class="btn" data-aos="fade-down" data-aos-duration="1500"  href="<?php echo e(route('admin')); ?>"></a>
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
<!-- ============= PASSWORD VALIDACION FRONTEND ==================== -->
        <script type="text/javascript">
            var politicaContrasenna = /^(?=(?:.*\d){2})(?=.*[A-Z])(?=.*[a-z])(?!.{0,4}(.)(?:.*\1){3})\S{8,50}$/,
                inpClave = document.getElementById('password'),
                inpOk = document.getElementById('ok');
            inpClave.addEventListener(
                'input',
                function (evt) {
                    if (politicaContrasenna.test(inpClave.value)) {
                        inpOk.innerHTML = '<p style="color: green;">Valido</p>';
                    } else {
                        inpOk.innerHTML = '<p style="color: red;">8 Dígitos, minúsculas y mayúsculas</p>';
                    }
                }
            );
        </script>


<!-- ============= PASSWORD VALIDACION FRONTEND ==================== -->
<script type="text/javascript">
            var politicaContrasenna = /^(?=(?:.*\d){2})(?=.*[A-Z])(?=.*[a-z])(?!.{0,4}(.)(?:.*\1){3})\S{8,50}$/,
                inpClave = document.getElementById('password'),
                inpOk = document.getElementById('ok');
            inpClave.addEventListener(
                'input',
                function (evt) {
                    if (politicaContrasenna.test(inpClave.value)) {
                        inpOk.innerHTML = '<p style="color: green;">Valido</p>';
                    } else {
                        inpOk.innerHTML = '<p style="color: red;">8 Dígitos, minúsculas y mayúsculas</p>';
                    }
                }
            );
        </script>

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
        function mostrarPassword2() {
            var cambio = document.getElementById("password-confirm");
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CFEControl\resources\views/auth/register.blade.php ENDPATH**/ ?>