<div class="container my-5">



    <h3 class="py-2 px-5">My Orders</h3>
   <div class="row px-5">

       <div class="col-md-12">
               <div class="card">
                   <div class="card-body table-responsive">
                       <table class="table table-striped table-bordered ">
                           <thead>
                               <th>ID Pesanan</th>
                               <th>Detail Order</th>
                               <th>Alamat Pengiriman</th>
                               <th>Harga Total (IDR)</th>


                               <th>Action</th>


                           </thead>
                           <?php
                           $email= Auth::user()->email;
                           $Orders=App\Models\Order::where('Customer_Emailid','=',$email)->get();
                         ?>
                           <tbody>
                               <?php $__currentLoopData = $Orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>

                               <td><?php echo e($item->id); ?></td>
                               <td><?php echo $item->Order_Details?></td>
                               <td><?php echo $item->Delivery_Address ?></td>
                               <td>Rp<?php echo e(number_format($item->Amount, 0,',','.')); ?></td>

                               <td>
                                   <a href="<?php echo e(url('Order-Status/'.$item->id.'')); ?>" class="badge btaobtn btaobtn-primary px-2 py-2 ">Check Status</a>




                                 <?php if($item->Delivery_Status!='pending' || $item->Order_Cancel_Status==1): ?>
                                  <a href="<?php echo e(url('Order-Status/'.$item->id.'')); ?>"    class="badge btaobtn btaobtn-danger px-2 py-2 disabled">Cancel Order</a>
                                  <?php else: ?>
                                      <a href="<?php echo e(url('Order-Cancel/'.$item->id.'')); ?>" class="badge btaobtn btaobtn-danger px-2 py-2">Cancel Order</a>

                                 <?php endif; ?>


                               </td>





                               </td>
                           </tr>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                           </tbody>

                       </table>
                   </div>
               </div>
       </div>
   </div>
</div>
   <br>

<?php /**PATH C:\laragon\www\cpedia\resources\views/components/user/ordersindesktopmode.blade.php ENDPATH**/ ?>