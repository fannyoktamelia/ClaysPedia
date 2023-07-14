@extends('layout')
@section('title')
    Etalase
@endsection
@section('keywords')
@endsection
@section('description')
@endsection
@section('content')
    {{-- </div> --}}
    <div style="background-color:#EEDDCC">
        <br>
        @php
            $Products = App\Models\Products::where('status', '=', '1')->get();
        @endphp
        <!-- Products Starts Here -->
        <section id="Products" align="center" class="px-5 wow animated fadeInUpBig fast"
            style=" font-family: 'Balsamiq Sans', cursive; background:#EEDDCC">

            <h1 align="center" class="black-text" style="font-weight:bold;">Etalase</h1>
            <div align="center">
                <p class="col-md-2" style=" border-bottom: 2px solid #003399;"></p>
            </div>
            <div class="row my-4 px-4 " style="width:100%;">
                @foreach ($Products as $item)
                    <div class="col-md-3 px-4 my-5">
                        <a href="{{ url('Shop/' . $item->url) }}">
                            <img src=" {{ asset('Uploads/Products/' . $item->image1) }}" alt="" class="img-fluid">
                        </a>
                        <div class="py-2 px-3" style="background:white;">
                            <span class="black-text my-3"
                                style="font-weight:bold; font-family: 'Balsamiq Sans', cursive;">{{ $item->name }}</span>
                            <br>
                            {{-- Rp {{ $item->price }} --}}
                            Rp{{ number_format($item->price, 0, ',', '.') }}
                            <br>
                            @if ($item->rating == 1)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            @elseif($item->rating == 2)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            @elseif($item->rating == 3)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            @elseif($item->rating == 4)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            @else
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            @endif

                            <br>

                            <a href="Shop/{{ $item->url }}" class="btn  btn-primary    "> Belanja Sekarang</a>

                        </div>
                    </div>
                @endforeach

            </div>

            <hr class="col-md-6">
        </section>
    @endsection
</div>
