<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.welcome', 'Login') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/back/sass/app.scss', 'resources/back/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.Wlcome', 'Welcome') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Categories
                            </a>

                            <div class="bg-transp dropdown-menu dropdown-menu-black dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('cats-index')}}">
                                    Categories list
                                </a>
                                <a class="dropdown-item" href="{{route('cats-create')}}">
                                    New Category
                                </a>
                                
                            </div>

                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Products
                            </a>

                            <div class="bg-transp dropdown-menu dropdown-menu-black dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('products-index')}}">
                                    Products list
                                </a>
                                <a class="dropdown-item" href="{{route('products-create')}}">
                                    New Product
                                </a>
                                
                            </div>

                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Orders
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('orders-index') }}">
                                    Orders list
                                </a>
                            </div>
                        </li>
                    </ul>
                    <a class="nav-link dropdown-item" href="">
                        Home
                    </a>
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="bg-transp dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        {{-- @include('layouts.errors')
        @include('layouts.messages')
        @include('layouts.delete') --}}
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
