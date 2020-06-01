<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cocktails') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <livewire:styles/>
</head>
<body class="bg-orange-500 h-screen antialiased leading-none" style="background: rgb(237,137,54);
background: radial-gradient(circle, rgba(237,137,54,1) 0%, rgba(209,85,44,1) 100%);">
<div id="app">
    <div class="flex h-screen overflow-y-hidden">
        <div
            class="sidebar flex flex-col bg-white shadow-2xl w-1/8 font-semibold border-r-8 border-teal-100 justify-center rounded-r-full overflow-hidden">
            <a href="/" class="py-6 px-5 hover:text-orange-500 hover:bg-gray-100"><i class="fas fa-home mr-5"></i> Home</a>
            <a href="/home" class="py-6 px-5 hover:text-orange-500 hover:bg-gray-100"><i class="far fa-compass mr-5"></i>
                Explore</a>
            <a href="#" class="py-6 px-5 hover:text-orange-500 hover:bg-gray-100"><i class="fas fa-history mr-5"></i>
                History</a>
            <a href="#" class="py-6 px-5 hover:text-orange-500 hover:bg-gray-100"><i class="far fa-heart mr-5"></i>
                Favourites</a>
            <hr>
            <a href="https://github.com/alexander-gekov" class="py-6 px-5 text-sm hover:text-orange-500 hover:bg-gray-100"><i
                    class="fab fa-github mr-5"></i> GitHub</a>
            <a href="https://www.instagram.com/alexander.gekov/" class="py-6 px-5 text-sm hover:text-orange-500 hover:bg-gray-100"><i
                    class="fab fa-instagram mr-5"></i> Instagram</a>
            <a href="https://www.linkedin.com/in/aleksandar-gekov-b43ba919a/" class="py-6 px-5 text-sm hover:text-orange-500 hover:bg-gray-100"><i
                    class="fab fa-linkedin mr-5"></i> LinkedIn</a>
        </div>
        <div class="content flex flex-1 flex-col">
            <div class="relative z-20 flex py-2 justify-end">
                <div class="flex items-center text-right text-white font-semibold text-lg uppercase px-6">
                    @guest
                        <a class="no-underline hover:text-gray-300 p-3"
                           href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:text-gray-300 p-3"
                               href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <img width="35" class="rounded-full mr-4" src="{{ Auth::user()->avatar }}" alt="">
                        <span class="pr-4">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:text-gray-300 p-3"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i
                                class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</div>
<livewire:scripts/>
</body>
</html>




