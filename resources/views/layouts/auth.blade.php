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
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="bg-orange-500 h-screen antialiased leading-none" style="background: rgb(233,119,25);
background: radial-gradient(circle, rgba(233,119,25,1) 0%, rgba(242,138,49,1) 75%, rgba(255,167,86,1) 100%);">
<div id="app">
    <div class="flex h-screen overflow-hidden">
        <div class="content flex flex-1 flex-col">
            <div class="flex py-6 justify-end mb-10">
                <div class="text-right text-white font-semibold text-lg uppercase px-6">
                    @guest
                        <a class="no-underline hover:text-gray-300 p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:text-gray-300 p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span class="pr-4">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:text-gray-300 p-3"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
            </div>
            <div class="flex flex-1 overflow-y-auto ">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>




