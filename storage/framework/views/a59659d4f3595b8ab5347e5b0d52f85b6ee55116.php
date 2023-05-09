<style>
    @media (min-width: 768px) {
        #Gainaloe_Logo {
            margin-left: -75px;
        }
    }

    #SearchIcon:hover {
        cursor: pointer;
    }
</style>
<script>
    $(document).ready(function() {
        $('#SearchIcon').click(function(e) {
            var searchstring = $('.searchstring').val();
            // window.alert(searchstring);
            if (searchstring == '') {
                window.location.replace("/");
            } else {
                window.location.replace("/Shop/" + searchstring);
            }


        });
    });
</script>
<!-- ======= Header ======= -->
<header id="header" class="z-depth-1" style="position:fixed;top:0px;width:100%;font-family: 'Balsamiq Sans', cursive;">
    <div class="container d-flex">

        <div id="Gainaloe_Logo" class="logo mr-auto">
            <!--  <h1 class="text-light"><a href="/">CompanYName</a></h1>  -->
            <a href="/"><img src=" <?php echo e(asset('assets/img/logoclaysped.webp')); ?>" alt=""
                    class="img-fluid"></a>

        </div>
        
        <p class="mobile-nav-toggle"><i class="fas fa-bars"></i> </p>
        <nav class="nav-menu d-none d-lg-block contentfont">

            <ul style="margin-top:5px;">

                <li class="active"><a href="/">Beranda</a></li>
                <li><a href="/#About">Pembelajaran</a></li>
                <li><a href="/#Products">Galeri</a></li>
                <li><a href="/#Products">Forum</a></li>
                <li><a href="/#Team">Etalase</a></li>

                <li><a href="<?php echo e(url('Help')); ?>"><i class="fas fa-headset"></i> Help</a></li>

                <?php if(Route::has('login')): ?>

                    <?php if(auth()->guard()->check()): ?>
                        <li class="drop-down"><a href="#"> <i class="far fa-user-circle "></i> My Account <i
                                    class="fas fa-angle-down"></i></a>
                            <ul>
                                <li><a href="<?php echo e(url('dashboard')); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                                </li>
                                <li><a href="<?php echo e(url('profile')); ?>"><i class="fas fa-user"></i> Profile</a></li>
                                <li><a href="<?php echo e(url('Orders')); ?>"> <i class="fas fa-table"></i> Orders</a></li>
                                <li><a href="<?php echo e(url('Payments')); ?>"><i class="fas fa-receipt"></i> Transactions</a></li>
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i
                                        class="fas fa-sign-in-alt"></i> <?php echo e(__('Logout')); ?></a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                        </li>
                </ul>
                </li>
            <?php else: ?>
                <li> <a href="<?php echo e(route('login')); ?>"><b>Login<b></a> </li>

                
            <?php endif; ?>

            <?php endif; ?>



            

        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
<br><br><br>
<?php /**PATH C:\laragon\www\cpedia\resources\views/Reusable_components/user/header.blade.php ENDPATH**/ ?>