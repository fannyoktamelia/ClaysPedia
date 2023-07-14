@extends('layout')
@section('title') ClaysPedia - FAQ'S @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<style>
    #body
    {
        background:#f2f2f2;
    }
    @media (max-width: 768px)
    {
          .contactwidth
        {
            width:100%;
        }
    }
     @media (min-width: 768px)
    {
        .contactwidth
        {
            width:60%;
        }
    }
</style>
<!-- ======= Contact Section Starts Here ======= -->

<section id="contact" class="contact">
    <div class="container contactwidth"  >

      <div class="section-title">

        <h2>Kontak</h2>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div align="left" class="info">
            <div class="address" >
              <i class="fas fa-map-marker-alt"></i>
                <h4>Lokasin:</h4>
                <p>  DI Yogyakarta</p>
              </div>

              <div class="email">
              <i class="fas fa-envelope"></i>
                <h4>Email:</h4>
                <p>admincpedia@gmail.com</p>
              </div>

              <div class="phone">
              <i class="fas fa-phone"></i>
                <h4>No. Telepon :</h4>
                <p>Nadila : +62 887643467<br></p>
              </div>

            
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="send-email" method="post" role="form" class="php-email-form">
              @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subjek</label>
              <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="name">Pesan</label>
              <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form>
        </div>

      </div>

    </div>
</section>

<!-- ======= Contact Section Ends Here ======= -->


   @if (session('status'))

        <script>
            $(document).ready(function () {

        $('#centralModalSuccess').modal('show');

        });
        </script>
@endif

@if($errors->any())

        <script>
            $(document).ready(function () {

        $('#centralModaldanger').modal('show');

        });
        </script>
@endif


 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Berhasil</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>{{session('status')}} </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">

         <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Tutup</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->

 <!-- Central Modal Medium Danger -->
 <div class="modal fade" id="centralModaldanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-danger" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Formulir Tidak Diserahkan </p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">

           <i class="fas fa-exclamation fa-4x mb-3 animated rotateIn"></i>
           <p>@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">

         <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Danger-->

@endsection
