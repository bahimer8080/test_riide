<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <div id="app">
        @guest
        @else
        <div class="sidebar" style="background: url('{{ asset('img/bg1.jpg') }}'); background-size: cover ; background-position: center ; ">
            <div class="w-100 d-flex align-items-end" style="height:120px;background: url('@if( Auth::user()->bg_image == null ) {{ asset('img/bg_default.jpg') }} @else {{ asset(Auth::user()->bg_image) }} @endif'); background-size: cover ; background-position: center ;">
                <div class="d-flex">
                    <div class="" style="width: 70px ;height: 70px ;">
                        <img src="@if( Auth::user()->image == null ) {{ asset('img/logo_blue.png') }} @else {{ asset(Auth::user()->image) }} @endif" style="width: 50px ;height: 50px ;border-radius: 50% ;margin: 10px ;" alt="">
                    </div>
                    <div class="text-white d-flex align-items-center pl-2 overflow-hidden text-nowrap" id="title-franchise" style="font-size: 16px ;">
                        {{ Auth::user()->franchise }}
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="" style="width: 70px ;height: 70px ;">
                    <img src="@if( Auth::user()->image == null ) {{ asset('img/logo_blue.png') }} @else {{ asset(Auth::user()->image) }} @endif" style="width: 50px ;height: 50px ;border-radius: 50% ;margin: 10px ;" alt="">
                </div>
                <div class="text-white d-flex align-items-center pl-2 overflow-hidden text-nowrap" id="title-franchise" style="font-size: 16px ;">
                    dfgdf dhfdfhdfh fddfgfd fdhsfdhdfh
                </div>
            </div>
        </div>
        @endguest
        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm px-0 mx-0">
            <!--<div class="sidebar" style="background: url('{{ asset('img/bg1.jpg') }}'); background-size: cover ; background-position: center ; ">
                <div class="w-100 bg-danger" style="height:150px;"></div>
            </div>-->
            <div class="container px-0 mx-0 w-100 mw-100 pls-70">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>
    </div>
</body>
</html>
