@extends('layout.app')



{{-- Header Content --}}
@section('header_content')
    {{-- Blue nav bar --}}
    <div class="blue_nav">
        <div class="container-xl d-flex justify-content-end">
            <p class="m-0 d-flex">
                <span class="mr-4 d-flex align-items-start">
                    DC POWER VISA<i class="mt-1 fas fa-trademark"></i>
                </span>
                <span class="d-flex align-items-center">
                    ADDITIONAL DC SITES <i class="pl-1 fas fa-sort-down"></i>
                </span>
            </p>
        </div>
    </div>

    <nav class="logo_navbar">
        <div class="container-xl">
            <div class="links_img d-flex align-items-center justify-content-between">
                <img src="{{ asset('img/dc-logo.png') }}" alt="">
                <a href="#">CHARACTERS</a>
                <a href="{{ route('comics') }}"
                    class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">COMICS</a>
                <a href="#">MOVIES</a>
                <a href="#">TV</a>
                <a href="#">GAMES</a>
                <a href="#">COLLECTIBLES</a>
                <a href="#">VIDEOS</a>
                <a href="#">FANS</a>
                <a href="#">NEWS</a>
                <a href="#">SHOP</a>
                <div class="search">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
    </nav>
    {{-- /Blue nav bar --}}
@endsection
{{-- /Header Content --}}


{{-- Main Content --}}
@section('main_content')
    <div class="comics_main">

        <div class="comics_list">
            <div class="container-xl p-0 d-flex flex-wrap">
                @foreach ($comics as $comic)
                    
                        <div class="card_comic col-2 p-2">
                            <div class="img_comic">
                                <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="">
                            </div>
                            <h6>{{ $comic['title'] }}</h6>
                        </div>        

                @endforeach
            </div>
        </div>
    </div>

@endsection
{{-- /Main Content --}}


{{-- Footer Content --}}
@section('footer_content')





@endsection
{{-- /Footer Content --}}
