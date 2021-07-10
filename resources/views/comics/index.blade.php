@extends('layout.app')

{{-- Main Content --}}
@section('main_content')
    <div class="comics_main">

        <div class="comics_list">
            
            <div class="container-xl p-0 d-flex flex-wrap pos_rel_container">
                <div class="button_top">CURRENT SERIES</div>
                <div class="row">
                    @foreach ($comics as $index => $comic)
                            <div class="card_comic col-2 p-2">
                                <div class="img_comic">
                                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="">
                                </div>
                                <a href="{{route('comic',['id' => $index])}}">
                                    <p>{{ $comic['series'] }}</p>
                                </a>
                            </div> 
                    @endforeach
                    <a class="button_a_bottom">LOAD MORE</a>
                </div>
            </div>
        </div>
    </div>

@endsection
{{-- /Main Content --}}
