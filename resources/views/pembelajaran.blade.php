@extends('layout')
@section('title')
    Pembelajaran
@endsection
@section('keywords')
@endsection
@section('description')
@endsection
@section('content')
    </div>
    <div style="background-color:#EEDDCC">
    <br>
    <div align="center" class="col-md-11 wow animated flash slow">
        <br>
        <h1 class="black-text" style="font-weight:bold; margin-left:210px">Video Pembelajaran</h1>
    {{-- <h1 class="black-text" style="font-weight:bold; margin-left:210px text-align:center;">Mengapa ClaysPedia?</h1> --}}
    {{-- <br> --}}
    <div class="row my-5" style="font-size:30px; font-family: 'Balsamiq Sans', cursive;">
        <div class="row" style="margin-left:100px">
            <div class="col-md-4">
                <div class="card mb-2">
                    <div class="card-body">
                        <p style="text-align:center;">
                            {{-- <img src="{{ asset('assets/img/value/belajar.png') }}" style="width:100px;"> --}}
                            <iframe width="320" height="320" src="https://www.youtube.com/embed/Nb7CayXr9hQ">
                            </iframe>
                        </p>
                        <p style="text-align:center;"><span style="font-weight:bold; font-size:24px">Membuat Tempat Aksesoris</span></p>
                        <p style="font-size:12px;">Video tutorial: Membuat tempat aksesoris kreatif dari clay. Praktis, inspiratif, dan mudah diikuti.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <div class="card-body">
                        <p style="text-align:center;">
                            {{-- <img src="{{ asset('assets/img/value/belajar.png') }}" style="width:100px;"> --}}
                            <iframe width="320" height="320" src="https://www.youtube.com/embed/JzE3g9KrdOQ">
                            </iframe>
                        </p>
                        <p style="text-align:center;"><span style="font-weight:bold; font-size:24px">Air Dry Clay Tutorial</span></p>
                        <p style="font-size:12px;">Video tutorial: Membuat mug unik dari clay. Kreatif, mudah diikuti, hasil menakjubkan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <div class="card-body">
                        <p style="text-align:center;">
                            {{-- <img src="{{ asset('assets/img/value/belajar.png') }}" style="width:100px;"> --}}
                            <iframe width="320" height="320" src="https://www.youtube.com/embed/ie5NdWCXK3A">
                            </iframe>
                        </p>
                        <p style="text-align:center;"><span style="font-weight:bold; font-size:24px">Membuat Cup Gelas</span></p>
                        <p style="font-size:12px;">Video tutorial: Membuat cup gelas unik dari clay. Kreatif, detail, dan panduan langkah demi langkah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        {{-- <p  align="left" class="mx-5" style="margin-top:-30px; font-family: 'Balsamiq Sans', cursive;">
  <a href="{{url('about')}}"  target="_blank" class="btn btn-dark">Know More</a>
  </p> --}}

    </div>

@endsection
</div>
