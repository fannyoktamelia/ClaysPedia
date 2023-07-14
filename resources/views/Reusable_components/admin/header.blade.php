    <!-- ======= Header ======= -->
    <header id="header" >
        <div class="container d-flex" >

          <div class="logo mr-auto" >
            <!--  <h1 class="text-light"><a href="/">CompanYName</a></h1>  -->
            <a href="/"><img src="{{ asset('assets/img/logoclaysped.webp') }}" alt="" class="img-fluid" ></a>

          </div>
          <p class="mobile-nav-toggle"><i class="fas fa-bars"></i> </p>
          <nav class="nav-menu d-none d-lg-block contentfont" >
            <ul style="margin-top:5px">
              <li class="active"><a href="/">Beranda</a></li>
              <li><a href="/t">Tentang Kami</a></li>
              {{-- <li><a href="/etalase">Etalase</a></li> --}}

              <li><a href="/#Startups">Tim</a></li>

              <li><a href="/help"><i class="fas fa-headset"  ></i> Bantuan</a></li>

                @if (Route::has('login'))

                @auth
                  <li class="drop-down"><a href="#">Dashboard <i class="fas fa-angle-down"></i></a>
                       <ul>
                            <li><a href="{{url('admin-all-users')}}" >Pengguna Terdaftar</a></li>
                            <li><a href="{{url('admin-Orders')}}" >Pesanan</a></li>
                            <li><a href="{{url('admin-Transactions')}}" >Detail Transaksi</a></li>
                            <li><a href="{{url('admin-products')}}" >Produk</a></li>
                            <a   href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
                        </ul>
                  </li>

                @else
                <li> <a href="{{ route('login') }}">Login</a> </li>

                    @if (Route::has('register'))
                    <li> <a href="{{ route('register') }}">Register</a> </li>
                    @endif
                @endauth

                @endif



             {{-- <li><a href="/#Startups" style="margin-left:15px;">   <i class="fas fa-shopping-cart fa-2x"></i></a></li> --}}

            </ul>

          </nav><!-- .nav-menu -->

        </div>
      </header><!-- End Header -->
