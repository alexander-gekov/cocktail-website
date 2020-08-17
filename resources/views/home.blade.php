@extends('layouts.app')

@section('content')
    <div class="relative h-full w-full overflow-y-auto z-20">
        <img class="absolute px-40 -mt-12 z-0" src="/img/energizer.svg" alt="">
        <div class="relative z-20 flex flex-col flex-1 w-1/2 mx-auto items-center mt-48">
            <h1 class="text-white font-semibold text-6xl mb-10 font-display pr-16">Cocktails</h1>
            <div class="flex">
                @livewire('search-drinks')
                {{--                <button--}}
                {{--                    class="ml-3 bg-orange-400 hover:bg-gray-800 hover:text-gray-200 focus:outline-none shadow-lg rounded-full py-2 px-3"--}}
                {{--                    @click="exampleModalShowing = true">--}}
                {{--                    <i class="fas fa-plus mr-1"></i> Add New--}}
                {{--                </button>--}}
                {{--                <card-modal @close="exampleModalShowing = false" :showing="exampleModalShowing"></card-modal>--}}
                <a
                    class="ml-3 bg-orange-400 hover:bg-gray-800 hover:text-gray-200 focus:outline-none shadow-lg rounded-full py-2 px-3"
                    href="drinks/create">
                    <i class="fas fa-plus mr-1"></i> Add New
                </a>
            </div>
        </div>
    </div>

@endsection
