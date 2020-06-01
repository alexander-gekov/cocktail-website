<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="h-screen antialiased leading-none" style="background: rgb(233,119,25);
background: linear-gradient(0deg, rgba(233,119,25,1) 0%, rgba(240,152,71,1) 61%, rgba(251,211,141,1) 100%);">
<div class="flex h-screen">
    <div class="flex flex-1">
        <div class="content bg-white w-1/3 rounded-r-full shadow-lg mx-auto h-full flex justify-center items-center">
            <div class="form text-center">
                <h1 class="text-orange-500 font-bold text-4xl mb-8">Cocktails</h1>
                <h3 class="text-gray-600 font-light text-2xl mb-10">Summer is almost here. Have a drink! 🏖️🍹</h3>
                <ul>
                    <li class="mb-6 flex justify-center">
                        <a class="py-3 px-10 bg-none bg-orange-500 shadow-xl rounded-lg border border-orange-700 border-b-2 hover:bg-orange-600 text-white mr-8" href="{{route('login')}}">Login</a>
                        <span class="mr-8 py-3 border-r-2"></span>
                        <a class="py-3 px-6 bg-orange-500 shadow-xl rounded-lg border border-orange-700 border-b-2 hover:bg-orange-600 text-white" href="{{route('register')}}">Register</a>
                    </li>
                    <li class="mb-10">
                        <div class="text-light text-xl">OR</div>
                    </li>
                    <li class="mb-10">
                        <a class="p-2 px-8 bg-blue-700 border border-blue-900 border-b-4 shadow-xl rounded-lg hover:bg-blue-800 text-white" href="login/facebook"><i class="fab fa-facebook-f pr-3"></i> Login with Facebook</a>
                    </li>
                    <li class="mb-6">
                        <a class="p-2 px-8 bg-gray-200 border border-gray-700 border-b-4 shadow-xl rounded-lg hover:bg-gray-400" href="login/google"><i class="fab fa-google pr-3"></i> Login with Google</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar flex flex-1">
            <img src="/img/drink.svg" alt="image">
        </div>
    </div>
</div>
</body>
</html>
