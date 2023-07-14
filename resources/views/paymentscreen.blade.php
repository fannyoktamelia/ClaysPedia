@extends('layout')
@section('title') ClaysPedia @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')

<div class="px-5 py-2" style="background:#EEDDCC;margin-top:5px;" >
  <h5 class="my-2">  <a href="/" class="black-text">Home</a> <strong class="black-text"> > <a href="{{url('cart')}}" class="black-text" >Cart </a> > <a href="" class="white-text" >Check out </a> </strong> </h5>

</div>
<h2 align="center" id="writetitle" class="black-text py-3" style="font-weight:bold;">Pembayaran</h2>
<script>
    function Continue()
    {
      event.preventDefault();
      const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
        url:"Shipping_Payment_Screen",
        type:"get",
        data:{
          CSRF_TOKEN
        },
        success:function (data)
        {
          window.scroll({    top: 0, left: 0,    behavior: 'smooth'  });
          //console.log(data)
          $('#dynamic_content').html(data)

          $('#writetitle').html('Detail Pengiriman & Pembayaran')


        }
      })
    }

</script>
@if (session('invalid'))

      <script>
          $(document).ready(function () {
           alertify.set('notifier','position','top-right');


                alertify.alert("Reponse","You Entered Invalid Promo Code");
          });
     </script>

@endif
@if (session('valid'))

      <script>
          $(document).ready(function () {
           alertify.set('notifier','position','top-right');


                alertify.success("Promo Code Applied Succesfully");
          });
     </script>

@endif

     <section  class="container py-4">
         <div class="row">
             <div id="dynamic_content" class="col-md-12">
                <div class="col-md-6" id="order_summary" style="text-align: center" >

                        <ul  class="card    p-3"  style=" list-style: none;">
                            <ul>
                                <li>
                                    <strong>ShopeePay:</strong> Transfer ke ShopeePay ID: <b> 0895414841086</b>
                                </li>
                                <li>
                                    <strong>Dana:</strong> Transfer ke Dana ID: <b> 0895414841086</b>
                                </li>
                                <li>
                                    <strong>Transfer Bank BCA:</strong> Transfer ke No. Rek <b>3030699437<b> a/n [Fanny O]
                                </li>
                            </ul>
                            
                            <p>Setelah pembayaran selesai, silakan konfirmasi melalui WhatsApp:</p>
                            
                            <?php
                            $whatsappNumber = '0895414841086'; // Nomor WhatsApp tujuan untuk konfirmasi
                            $message = 'Halo, saya sudah melakukan pembayaran. Berikut detailnya: [tambahkan detail pembayaran]';
                            
                            // Membuat link WhatsApp dengan nomor tujuan dan pesan
                            $whatsappLink = 'https://api.whatsapp.com/send?phone=0895414841086' . $whatsappNumber . '&text=' . urlencode($message);
                            ?>
                            
                            <a href="<?php echo $whatsappLink; ?>" target="_blank">Klik disini untuk mengirim konfirmasi WhatsApp</a>
                        </ul>

                </div>
             </div>
         </div>





</section>




      <!--Modal: modalDiscount-->
      <div class="modal fade right" id="modalDiscount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <p class="heading">Have a Promo Code
                <strong></strong>
              </p>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>
  <form method="POST" action="apply-promocode">
      @csrf
            <!--Body-->
            <div class="modal-body">

              <div class="row">
                <div class="col-12">
                  <p></p>
                  <p class="text-center">
                    <i class="fas fa-gift fa-4x"></i>
                  </p>
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="promo_code" placeholder="Enter Promo Code ">

                </div>
              </div>
            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
              <button type="submit" class="btn btn-danger">Apply
                <i class="far fa-gem ml-1 white-text"></i>
              </button>
              <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
            </div>
  </form>
          </div>
          <!--/.Content-->
        </div>
      </div>
      <!--Modal: modalDiscount-->






   @if ($errors->any())
          <script>
        $(document).ready(function () {

      $('#centralModalfailure').modal('show');

      });
      </script>

@endif









  <!-- Central Modal Medium Failure -->
  <div class="modal fade" id="centralModalfailure" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Error</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <i class="fas fa-exclamation-circle fa-4x mb-3 animated rotateIn"></i>
          <h3 style="color: red"> Some Errors are Found! </h3>
         <ul align="left"  >
           @foreach ($errors->all() as $error)

                             <li  class="text-danger">{{ $error }}</li>







            @endforeach


            </ul>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
          <p   class="close" data-dismiss="modal" aria-label="Close"  >
        <button  class="btaobtn btaobtn-danger">Try Again<i class="far fa-gem ml-1 text-white"></i></button>
        </p>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Failure-->







@endsection
