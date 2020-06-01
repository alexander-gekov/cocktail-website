@extends('layouts.app')

@section('content')
    <div class="relative h-full w-full overflow-y-auto z-20">
        <img class="absolute px-40 -mt-12 z-0" src="/img/energizer.svg" alt="">
        <div class="relative z-20 flex flex-col flex-1 w-1/2 mx-auto items-center mt-48">
            <h1 class="text-white font-semibold text-6xl mb-10 font-display pr-16">Cocktails</h1>
{{--            @livewire('search-drinks')--}}
            <div class="relative flex">
                <input class="bg-gray-100 rounded-full w-100 pr-40 pl-12 py-2 shadow-lg focus:outline-none" placeholder="Search"
                       type="text">
                <button
                    class="ml-3 bg-orange-400 hover:bg-gray-800 hover:text-gray-200 focus:outline-none shadow-lg rounded-full py-2 px-3">
                    <i class="fas fa-plus mr-1"></i> Add New
                </button>
                <div class="absolute top-0">
                    <i class="fas fa-search mt-3 ml-4 text-gray-700"></i>
                </div>
                <div class="absolute bg-gray-100 rounded w-full mt-12">
                    <ul>
                        <li class="border-b border-gray">
                            <a href="" class="block hover:bg-gray-300 px-3 py-4">Royal Flush</a>
                        </li>
                        <li class="border-b border-gray">
                            <a href="" class="block hover:bg-gray-300 px-3 py-4">Royal Flush</a>
                        </li>
                        <li class="border-b border-gray">
                            <a href="" class="block hover:bg-gray-300 px-3 py-4">Royal Flush</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

@endsection
