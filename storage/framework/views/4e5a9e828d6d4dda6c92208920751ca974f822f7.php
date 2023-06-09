<?php $__env->startSection('title'); ?>
Login - ClaysPedia
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
Login in ClaysPedia, signin

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
Login  dan Belajar Bersama ClaysPedia

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div align="center" class="container-fluid my-3 animated bounceIn">
<br><br><br>
    <div class="col-md-10">
        <a href="/">
            <img src="<?php echo e(asset('assets/img/logoclaysped.webp')); ?>" class="img-fluid" style="width:200px;">
        </a>
    </div>
   <h5 class="my-2" >Login</h5>
    <div class="row justify-content-center">
        <div class="col-md-7">
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row justify-content-center">

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required  placeholder="<?php echo e(__('Alamat Email')); ?>" autocomplete="email"  autofocus>

                                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required  placeholder="<?php echo e(__('Password')); ?>" autocomplete="current-password">

                                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="form-group row ">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-check" align="left">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                        <label class="form-check-label" for="remember">
                                            <?php echo e(__('Ingat Saya')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0 justify-content-center">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btaobtn btaobtn-dark px-5 py-2">
                                        <?php echo e(__('Login')); ?>

                                    </button>

                                        <?php if(Route::has('password.request')): ?>
                                            <a class="btn btn-link col-md-12" href="<?php echo e(route('password.request')); ?>">
                                                <?php echo e(__('Lupa Kata Sandi?')); ?>

                                            </a>
                                        <?php endif; ?>
                                 <strong>Belum punya akun? <br>Ayo <a href="register" ><u>Buat Akun Baru</u></a></strong>
                                </div>
                                 <div class="col-md-12 ">
                                   <p class="my-2">
                                          <a class="black-text" href="/">
                                               <i class="fas fa-arrow-left"></i>
                                           <u>Kembali</u>
                                           </a>
                                   </p>
                                 </div>
                            </div>
                        </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cpedia\resources\views/auth/login.blade.php ENDPATH**/ ?>