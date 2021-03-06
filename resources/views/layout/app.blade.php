<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    {{-- Site_header --}}
    <header id="site_header">
        {{-- Nav bars --}}
        <div class="blue_nav">
            <div class="container-xl d-flex justify-content-end">
                <p class="m-0 d-flex">
                    <span class="mr-4 d-flex align-items-start">
                        DC POWER&trade;VISA&reg;
                    </span>
                    <span class="d-flex align-items-center">
                        ADDITIONAL DC SITES <i class="pl-1 fas fa-sort-down"></i>
                    </span>
                </p>
            </div>
        </div>
        {{-- dd({{if(Route::currentRouteName() === $item['text']."/".$index){ echo '<p> hello </p>'}else{ echo '<p> byebyebeybyebye </p>'}}}) --}} <nav class="logo_navbar">
            <div class="container-xl">
                <div class="links_img d-flex align-items-center justify-content-between">
                    <img class="py-2" src="{{ asset('img/dc-logo.png') }}" alt="">
                    <ul>
                        @foreach (config('menu') as $index => $item)
                            <li>
                                <a href="{{ $item['href'] }}"
                                    class="{{ Route::currentRouteName() === $item['text'] || Route::currentRouteName() === $item['singlePage'] ? 'active' : '' }}">
                                    {{ $item['text'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>                   
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </nav>
        {{-- /Nav bars --}}
    </header>
    {{-- /Site_header --}}

    {{-- Site_main --}}
    <main id="site_main">
        @yield('main_content')
    </main>
    {{-- /Site_main --}}

    {{-- Site_footer --}}
    <footer id="site_footer">





    </footer>
    {{-- /Site_footer --}}
</body>

</html>
