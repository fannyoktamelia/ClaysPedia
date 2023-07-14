<?php $__env->startSection('title'); ?>
    ClaysPedia
<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>
    Home,About,Contact,Cart
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Write some descripton about the webpage
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .checked {
            color: orange;
        }
    </style>

    <div id="slide_show_in_desktop_mode">
        <?php echo $__env->make('components.desktopslideshow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div id="slide_show_in_mobile_mode">
        <?php echo $__env->make('components.mobileslideshow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- About Starts Here -->
    <script>
        $(document).ready(function() {
            new WOW().init();
            $(".wow").addClass("fadeInLeft");
        });
    </script>
    <div id="About" class="container-fluid" style="background:white;">
        <br>
        <div class="row">
            <div align="center" class="col-md-11 wow animated flash slow">
                <h1 class="black-text" style="font-weight:bold; margin-left:210px">Mengapa ClaysPedia?</h1>
                <div class="col-md-3" style=" border-bottom: 2px solid #003399;"></div>
                <div class="row my-5" style="font-size:30px; font-family: 'Balsamiq Sans', cursive;">
                    <div class="row" style="margin-left:210px">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="float:center;">
                                        <img src="<?php echo e(asset('assets/img/value/belajar.png')); ?>" style="width:100px;">
                                    </p>
                                    <p><span style="font-weight:bold; font-size:24px">Belajar Mandiri</span></p>
                                    <p style="font-size:12px;">Belajar kerajinan tanah liat tidak perlu jauh-jauh dan tidak
                                        dipungut biaya</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="float:center;">
                                        <img src="<?php echo e(asset('assets/img/value/belanja.png')); ?>" style="width:100px;">
                                    </p>
                                    <p><span style="font-weight:bold; font-size:24px">Beli Produk</span></p>
                                    <p style="font-size:12px;">Beli produk dengan harga yang ekonomis dan dapatkan diskonnya
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p style="float:center;">
                                        <img src="<?php echo e(asset('assets/img/value/diskusi.png')); ?>" style="width:100px;">
                                    </p>
                                    <p><span style="font-weight:bold; font-size:24px">Diskusi dengan Ahli</span></p>
                                    <p style="font-size:12px;">Kalian bisa diskusi bareng instruktur pembuatan kerajinan
                                        tanah liat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>

        </div>

        

        <div id="About" class="container-fluid" style="background:white;">
            <br>
            <div class="row" style="margin-left:180px">
                <div class="col-md-5 wow animated zoomIn slow">
                    <img src="<?php echo e(asset('assets\img\galeri.png')); ?>" alt="" class="img-fluid">
                </div>
                <div align="left" class="col-md-7 wow animated flash slow">
                    <h1 class="black-text" style="font-weight:bold; margin-left:40px;">Galeri</h1>
                    <div class="col-md-3" style=" border-bottom: 2px solid #003399;"></div>
                    <div class="row my-5" style="font-size:16px; font-family: 'Balsamiq Sans', cursive;">
                        <div class="col-md-6">
                            <ul align="left" style="list-style:none; color:gray">
                                <p>Cari inspirasimu disini! Dengan melihat galeri kalian bebas berkreasi sesuka hati,
                                    foto-foto ini merupakan hasil karya dari user ClaysPedia Cari inspirasimu disini! Dengan
                                    melihat galeri kalian bebas berkreasi sesuka hati</p>
                            </ul>
                            <p align="left" style="font-family: 'Balsamiq Sans', cursive; margin-left:38px">
                                <a href="<?php echo e(url('galeri')); ?>" target="_blank" class="btn btn-dark">Lihat Semua</a>
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- About completed Here -->

        <?php
            $Products = App\Models\Products::where('status', '=', '1')->get();
        ?>
        <!-- Products Starts Here -->
        <section id="Products" align="center" class="px-5 wow animated fadeInUpBig fast"
            style=" font-family: 'Balsamiq Sans', cursive; background:#EEDDCC">

            <h1 align="center" class="black-text" style="font-weight:bold;">Etalase</h1>
            <div align="center">
                <p class="col-md-2" style=" border-bottom: 2px solid #003399;"></p>
            </div>
            <div class="row my-4 px-4 " style="width:100%;">
                <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 px-4 my-5">
                        <a href="<?php echo e(url('Shop/' . $item->url)); ?>">
                            <img src=" <?php echo e(asset('Uploads/Products/' . $item->image1)); ?>" alt="" class="img-fluid">
                        </a>
                        <div class="py-2 px-3" style="background:white;">
                            <span class="black-text my-3"
                                style="font-weight:bold; font-family: 'Balsamiq Sans', cursive;"><?php echo e($item->name); ?></span>
                            <br>
                            
                            Rp<?php echo e(number_format($item->price, 0, ',', '.')); ?>

                            <br>
                            <?php if($item->rating == 1): ?>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            <?php elseif($item->rating == 2): ?>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            <?php elseif($item->rating == 3): ?>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            <?php elseif($item->rating == 4): ?>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            <?php else: ?>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            <?php endif; ?>

                            <br>

                            <a href="Shop/<?php echo e($item->url); ?>" class="btn  btn-primary    "> Shop Now</a>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <hr class="col-md-6">
        </section>

        
        <div id="About" class="container-fluid" style="background:white;">
            <br>
            
            <div class="row mx-5">
                <div align="left" class="col-md-5 p-5 mx-5">
                    <h1 class="black-text animated fadeInLeft slow " style="font-size:40px; margin-top:120px">Forum Diskusi
                    </h1>
                    <p>Bingung belajar kerajinan tanah liat yang sedang hits? tanyakan saja di clayspedia menyediakan tempat untuk brainstroming atau curah pendapat terhadap masalah yang dianggap perlu pendampingan oleh instruktur handle</p>
                    <a href="<?php echo e(url('pembelajaran')); ?>" target="_blank" class="btn btn-dark">Mulai</a>
                </div>
                <div class="col-md-5 animated fadeInRight slow" style="margin-bottom:50px">
                    <img class="img-fluid slideshowimage" src=" <?php echo e(asset('assets/img/value/discuss.png')); ?>"
                        alt="Slide-1" style="width:100%;">
                </div>
                


            </div>
        </div>


        <!-- Products Ends Here -->
        <section class="slideanim" id="testimonialsdesktopmode" align="center" style="margin-top:-50px;">

            <?php echo $__env->make('components.testimonialsdesktopmode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
        <section class="slideanim" id="testimonialsmobilemode" align="center" style="margin-top:-70px;">

            <?php echo $__env->make('components.testimonialsmobilemode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>

        <!--Team Starts Here-->
        <div id="Team">
            <div id="teaminthedesktopmode" class="container" align="center">
                <?php echo $__env->make('components.teamindesktopmode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div id="teaminthemobilemode" class="container" align="center">
                <?php echo $__env->make('components.teaminmobilemode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <!--Team Ends Here-->
        <!-- ======= Contact Section Starts Here ======= -->

        <section id="contact" class="contact" style="background:white;">
            <div class="container ">

                <div class="section-title">

                    <h2>Kontak Kami</h2>
                    <p style=" font-family: 'Balsamiq Sans', cursive;"> </p>
                </div>

                <div class="row wow animated zoomIn slow">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div align="left" class="info">
                            <div class="address">
                                <i class="fas fa-map-marker-alt"></i>
                                <h4>Lokasi:</h4>
                                <p> DI Yogyakarta</p>
                            </div>

                            <div class="email">
                                <i class="fas fa-envelope"></i>
                                <h4>Email:</h4>
                                <p>clayspedia@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="fas fa-phone"></i>
                                <h4>No. Telepon:</h4>
                                <p>Nadila : +62 81293819191<br>
                                    Dhea : +62 81929883542</p>
                            </div>

                            
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="send-email" method="post" role="form" class="php-email-form">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama Anda</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Email Anda</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subjek</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Pesan</label>
                                <textarea class="form-control" name="message" rows="10" data-rule="required"
                                    data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>

                            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>

        <!-- ======= Contact Section Ends Here ======= -->
        <p align="center" class="py-2"><br>
            <button class="btn btn-dark" data-toggle="modal" data-target="#modalSocial">Berlangganan newsletter kami</button>
        </p>


        <!--Modal: modalSocial-->
        <div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">

                <!--Content-->
                <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header  darken-3 white-text" style="background-color:#40BFD6;">
                        <h4 class="title"><i class="fas fa-users"></i> Berlangganan newsletter kami</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>

                    <!--Body-->
                    <div class="modal-body mb-0 text-center">
                        <form method="POST" action="subscribe-news-letter">
                            <?php echo csrf_field(); ?>
                            <input type="text" class="form-control" name="name" placeholder="Your Name"
                                required><br>
                            <input type="email" class="form-control" name="email" placeholder="Your Email Id"
                                required>
                            <button class="btn" style="background-color:#40BFD6;">Kirim</button>
                        </form>
                    </div>

                </div>
                <!--/.Content-->

            </div>
        </div>
        <!--Modal: modalSocial-->


        <?php if(session('status')): ?>
            <script>
                $(document).ready(function() {

                    $('#centralModalSuccess').modal('show');

                });
            </script>
        <?php endif; ?>


        <?php if($errors->any()): ?>
            <script>
                $(document).ready(function() {

                    $('#centralModaldanger').modal('show');

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
                        <p class="heading lead"> Success</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                            <p><?php echo e(session('status')); ?> </p>
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
                            <p>
                                <?php if($errors->any()): ?>
                                    <?php echo implode('', $errors->all('<div>:message</div>')); ?>

                                <?php endif; ?>
                            </p>
                        </div>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">

                        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Tutup</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!-- Central Modal Medium Danger-->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cpedia\resources\views/welcome.blade.php ENDPATH**/ ?>