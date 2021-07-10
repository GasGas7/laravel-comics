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
                            <a href="{{ route('comic', ['id' => $index]) }}">
                                <p>{{ $comic['series'] }}</p>
                            </a>
                        </div>
                    @endforeach
                    <a class="button_a_bottom">LOAD MORE</a>
                </div>


            </div>
            <div class="container-xl">

                <div class="row">
                    <div class="dc_links d-flex justify-content-between mt-3 mb-3 " style="width: 100%;">
                        @foreach (config('links_dc') as $item)
                            <div class="d-flex justify-content-around align-items-center">
                                <img src="{{ $item['path_image'] }}" style="height:70%" alt="">
                                <p style="color: green">{{ $item['link'] }}</p>
                            </div>

                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
{{-- /Main Content --}}
