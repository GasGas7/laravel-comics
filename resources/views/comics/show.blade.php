@extends('layout.app')

{{-- @section('main_content')
    <h1>singolo fumetto</h1>
@endsection --}}


{{-- Main Content --}}
@section('main_content')
    <div class="comics_main">

        <div class="single_comic">
            <div class="container-xl p-0 d-flex flex-wrap">
                <div class="row mt-4">
                    <div class="card_comic">
                        <div class="img_comic_nocut">
                            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <p>{{ $comic['series'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- /Main Content --}}
