<?php $__env->startSection('title'); ?> ClaysPedia <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> Home,About,Contact,Car <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Write some descripton about the webpage <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="px-5 py-2" style="background:#EEDDCC;margin-top:5px;" >


 <p class="my-2"> <span class="fas fa-bars fa-1x" style="font-size:20px;cursor:pointer;color:black;" onclick="openNav()"></span> <a href="/" class="black-text">Home></a><a href="<?php echo e(url('dashboard')); ?>" class="black-text">Dashboard></a> <strong class="black-text"> <a href="" class="black-text" >Pesanan </a> </strong> </p>


</div>

<div id="mySidenav" class="sidenav">
    <br><br>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color:white;font-size:30px;margin-left:20px;margin-top:80px;">x</a>
  <a href="<?php echo e(url('dashboard')); ?>"> <i class="fas fa-tachometer-alt"></i>  Dashboard</a>
  <a href="<?php echo e(url('profile')); ?>" > <i class="fas fa-user"></i>   Profile</a>
  <a href="<?php echo e(url('Orders')); ?>"> <i class="fas fa-table"></i>  Orders</a>
  <a href="<?php echo e(url('Payments')); ?>"> <i class="fas fa-receipt"></i>  Payments</a>
     <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fas fa-sign-in-alt"></i> <?php echo e(__('Logout')); ?></a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<!-- Orders Section Starts Here-->
<div id="ordersindesktopmode">
    <?php echo $__env->make('components.user.ordersindesktopmode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<section id="ordersinmobilemode">
      <?php echo $__env->make('components.user.ordersinmobilemode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

 <!-- Orders Section Ends Here-->




<?php if(session('status')): ?>

        <script>
            $(document).ready(function () {

        $('#centralModalSuccess').modal('show');

        });
        </script>
<?php endif; ?>


 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead">Success</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p> <?php echo  session('status') ?></p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         <a href="<?php echo e(url('/')); ?>" class="btn btn-success">SHOP MORE<i class="far fa-gem ml-1 text-white"></i></a>
         <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->


 <?php if(session('Order_Status')): ?>
    <?php echo $__env->make('components.user.orderstatus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        $(document).ready(function ()
        {
            $('#show_Order_Status_Modal').modal('show');
        });
    </script>
 <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cpedia\resources\views/dashboards/user/orders.blade.php ENDPATH**/ ?>