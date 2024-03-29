<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300;400;500&family=Noto+Sans+Zanabazar+Square&family=Tillana:wght@400;800&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/front/sass/app.scss', 'resources/front/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front-orders') }}">My orders</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        
                        @endguest
                        <li class="nav-item">
                            <div class="top-cart --top--cart" data-url="{{route('cart-mini-cart')}}">
                                <a href="{{route('cart-show')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 511.997 511.997">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M34.133,281.598c0,4.71,3.814,8.533,8.533,8.533h29.867c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533
                                                        H42.667C37.948,273.065,34.133,276.888,34.133,281.598z"/>
                                                    <path d="M153.6,426.665c-18.825,0-34.133,15.309-34.133,34.133c0,18.825,15.309,34.133,34.133,34.133
                                                        c18.825,0,34.133-15.309,34.133-34.133C187.733,441.974,172.425,426.665,153.6,426.665z M153.6,477.865
                                                        c-9.412,0-17.067-7.654-17.067-17.067c0-9.412,7.654-17.067,17.067-17.067c9.412,0,17.067,7.654,17.067,17.067
                                                        C170.667,470.211,163.012,477.865,153.6,477.865z"/>
                                                    <path d="M68.267,230.398c0-4.71-3.814-8.533-8.533-8.533h-51.2c-4.719,0-8.533,3.823-8.533,8.533c0,4.71,3.814,8.533,8.533,8.533
                                                        h51.2C64.452,238.932,68.267,235.109,68.267,230.398z"/>
                                                    <path d="M85.333,324.265H25.6c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h59.733c4.719,0,8.533-3.823,8.533-8.533
                                                        S90.052,324.265,85.333,324.265z"/>
                                                    <path d="M409.6,426.665c-18.825,0-34.133,15.309-34.133,34.133c0,18.825,15.309,34.133,34.133,34.133
                                                        c18.825,0,34.133-15.309,34.133-34.133C443.733,441.974,428.425,426.665,409.6,426.665z M409.6,477.865
                                                        c-9.412,0-17.067-7.654-17.067-17.067c0-9.412,7.654-17.067,17.067-17.067c9.412,0,17.067,7.654,17.067,17.067
                                                        C426.667,470.211,419.012,477.865,409.6,477.865z"/>
                                                    <path d="M125.867,213.332c0,4.71,3.814,8.533,8.533,8.533h59.264l5.12,51.2h-53.717c-4.719,0-8.533,3.823-8.533,8.533
                                                        s3.814,8.533,8.533,8.533h55.424l4.352,43.52c0.444,4.395,4.147,7.68,8.482,7.68c0.282,0,0.563-0.008,0.862-0.043
                                                        c4.685-0.469,8.107-4.651,7.637-9.344l-4.181-41.813h72.491v42.667c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533
                                                        v-42.667h72.491l-4.181,41.813c-0.469,4.693,2.953,8.875,7.637,9.344c0.299,0.034,0.58,0.043,0.862,0.043
                                                        c4.335,0,8.038-3.285,8.482-7.68l4.352-43.52h42.624c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-40.917
                                                        l5.12-51.2h48.597c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-46.891l4.181-41.813
                                                        c0.469-4.693-2.953-8.875-7.637-9.344c-4.762-0.486-8.866,2.953-9.344,7.637l-4.352,43.52H307.2v-42.667
                                                        c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533v42.667h-81.024l-4.352-43.52c-0.469-4.685-4.54-8.115-9.344-7.637
                                                        c-4.685,0.469-8.107,4.651-7.637,9.344l4.181,41.813H134.4C129.681,204.798,125.867,208.621,125.867,213.332z M307.2,221.865
                                                        h79.317l-5.12,51.2H307.2V221.865z M290.133,221.865v51.2h-74.197l-5.12-51.2H290.133z"/>
                                                    <path d="M510.02,122.529c-1.621-1.937-4.019-3.063-6.554-3.063h-384c-4.719,0-8.533,3.823-8.533,8.533
                                                        c0,4.71,3.814,8.533,8.533,8.533h373.769c-12.271,67.046-34.261,183.287-40.525,202.103
                                                        c-6.417,19.243-25.301,19.755-26.044,19.763H162.133c-16.802,0-24.098-8.772-25.993-11.537L85.205,49.756
                                                        c-0.06-0.427-0.171-0.845-0.316-1.254c-1.067-3.217-11.119-31.437-33.69-31.437H25.6c-10.291,0-25.6,6.818-25.6,25.6
                                                        c0,18.782,15.309,25.6,25.6,25.6h17.067c4.719,0,8.533-3.823,8.533-8.533c0-4.71-3.814-8.533-8.533-8.533H25.702
                                                        c-3.942-0.102-8.636-1.664-8.636-8.533c0-6.869,4.693-8.431,8.533-8.533h25.6c8.516,0,15.3,13.679,17.306,19.209l51.089,297.967
                                                        c0.137,0.828,0.401,1.621,0.768,2.372c0.444,0.888,11.247,21.786,41.771,21.786h264.533c10.982,0,33.946-6.571,42.223-31.437
                                                        c8.636-25.873,41.574-206.814,42.965-214.502C512.316,127.034,511.642,124.474,510.02,122.529z"/>
                                                    <path d="M435.2,392.532H196.267c-12.809,0-22.144,16.674-24.704,21.786c-2.108,4.207-0.393,9.327,3.814,11.435
                                                        c1.22,0.614,2.534,0.913,3.814,0.913c3.123,0,6.135-1.732,7.637-4.702c2.825-5.606,7.689-11.75,9.438-12.365H435.2
                                                        c4.719,0,8.533-3.823,8.533-8.533S439.919,392.532,435.2,392.532z"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <div class="cart-info --cart-info" style="opacity: 0;">
                                    <div class="count --count"></div>
                                    <div class="total"><span class="--total"></span> eur</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>