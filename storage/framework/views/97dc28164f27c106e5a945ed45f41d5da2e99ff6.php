<?php $__env->startSection('title'); ?>
Reset Your Password - Lento Prints
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?> 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
You Can Reset you password

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
 <div align="center" class="container-fluid py-5 my-5 animated bounceIn">

    <div class="col-md-2" >
        <a href="/">
            <img src="<?php echo e(asset('assets/img/Logo-Square.webp')); ?>" class="img-fluid px-2 py-2" style="width:200px;">
        </a>
    </div>
   <h5 class="my-2" >Reset Your Password</h5>
   <div class="row justify-content-center">
        <div class="col-md-7">
             <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div  align="left" class="col-md-6  p-2">
                             
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="<?php echo e(__('E-Mail Address')); ?>">

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

                        
                            <div class="col-md-12">
                                <button type="submit" class="btaobtn btaobtn-dark px-5 py-2">
                                    <?php echo e(__('Send Password Reset Link')); ?>

                                </button>
                            </div>
                         
                    </form>
                    <div class="col-md-12 ">
                        or
                                   <p class="my-2"> 
                                          <a class="black-text" href="/">
                                               <i class="fas fa-arrow-left"></i>
                                           <u>Back to Gainloe</u>
                                           </a>
                                   </p> 
                                </div>
                                             <div class="col-md-12">
                                                 <div class="card-body">
                                                         <?php if(session('status')): ?>
                                                         <div class="alert alert-success" role="alert">
                                                             <strong><?php echo e(session('status')); ?></strong>
                                                        </div>
                                                         <?php endif; ?>
                                                    </div>
                                                    
                                             </div>
        </div>
    </div> 
</div>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cpedia\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>