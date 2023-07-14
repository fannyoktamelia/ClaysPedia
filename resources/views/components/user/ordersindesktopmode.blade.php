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
                           @php
                           $email= Auth::user()->email;
                           $Orders=App\Models\Order::where('Customer_Emailid','=',$email)->get();
                         @endphp
                           <tbody>
                               @foreach ($Orders as $item)
                           <tr>

                               <td>{{$item->id}}</td>
                               <td><?php echo $item->Order_Details?></td>
                               <td><?php echo $item->Delivery_Address ?></td>
                               <td>Rp{{number_format($item->Amount, 0,',','.')}}</td>

                               <td>
                                   <a href="{{url('Order-Status/'.$item->id.'')}}" class="badge btaobtn btaobtn-primary px-2 py-2 ">Check Status</a>




                                 @if($item->Delivery_Status!='pending' || $item->Order_Cancel_Status==1)
                                  <a href="{{url('Order-Status/'.$item->id.'')}}"    class="badge btaobtn btaobtn-danger px-2 py-2 disabled">Cancel Order</a>
                                  @else
                                      <a href="{{url('Order-Cancel/'.$item->id.'')}}" class="badge btaobtn btaobtn-danger px-2 py-2">Cancel Order</a>

                                 @endif


                               </td>





                               </td>
                           </tr>
                               @endforeach

                           </tbody>

                       </table>
                   </div>
               </div>
       </div>
   </div>
</div>
   <br>

