@extends('layouts.auth')

@section('content')
    <div class="mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                    <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                        {{ __('Login') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email"
                                   class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                   class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                                   required>

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex mb-6">
                            <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                <input type="checkbox" name="remember" id="remember"
                                       class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember Me') }}</span>
                            </label>
                        </div>

                        <div class="flex flex-wrap items-center">
                            <button type="submit"
                                    class="bg-blue-500 border border-blue-700 border-b-2 shadow-xl rounded-lg hover:bg-blue-600 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto"
                                   href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="flex flex-col mt-4 items-center">
                            <p class="text-gray-700 text-center">OR</p>
                            <a class="p-2 px-6 w-10/12 bg-blue-700 border border-blue-900 border-b-4 shadow-xl rounded-lg hover:bg-blue-800 text-white mt-4"
                               href="login/facebook"><i class="fab fa-facebook-f pr-4"></i> Login with Facebook</a>
                            <a class="p-2 px-6 w-10/12 bg-gray-200 border border-gray-700 border-b-4 shadow-xl rounded-lg hover:bg-gray-400 mt-2"
                               href="login/google"><i class="fab fa-google pr-4"></i> Login with Google</a>

                            @if (Route::has('register'))
                                <p class="w-full text-xs text-center text-gray-700 mt-6 -mb-4">
                                    {{ __("Don't have an account?") }}
                                    <a class="text-blue-500 hover:text-blue-700 no-underline"
                                       href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                                </p>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <img src="public/img/nazdrave1.svg" width="100%" alt="">
    </div>
@endsection
