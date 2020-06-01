@extends('layouts.app')

@section('content')
    <div class="relative h-full w-full overflow-y-auto z-20">
        <img class="absolute px-40 -mt-12 z-0" src="/img/energizer.svg" alt="">
        <div class="relative z-20 flex flex-col flex-1 w-1/2 mx-auto items-center mt-48">
            <h1 class="text-white font-semibold text-6xl mb-10 font-display pr-16">Cocktails</h1>
            @livewire('search-drinks')
        </div>
    </div>

@endsection
