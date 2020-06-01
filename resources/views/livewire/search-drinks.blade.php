<div class="relative flex">
    <input wire:model.debounce.300ms="search"
           class="bg-gray-100 rounded-full w-100 pr-48 pl-12 py-2 shadow-lg focus:outline-none" placeholder="Search"
           type="text">
    <div wire:loading class="spinner -ml-5 mr-4"></div>
    <button
        class="ml-3 bg-orange-400 hover:bg-gray-800 hover:text-gray-200 focus:outline-none shadow-lg rounded-full py-2 px-3">
        <i class="fas fa-plus mr-1"></i> Add New
    </button>
    <div class="absolute top-0">
        <i class="fas fa-search mt-3 ml-4 text-gray-700"></i>
    </div>
    @if(strlen($search) >= 2)
        <div class="absolute bg-gray-100 rounded w-full mt-12">
            @if($search_results->count() > 0)
                <ul>
                    @foreach($search_results as $result)
                        <li class="border-b border-gray ">
                            <a href="#" class="block hover:bg-gray-300 px-3 py-3 flex items-center justify-between">
                                <div class="flex items-center">
                                    <img class="rounded-full" width="10%" src="{{$result["image"]}}" alt="">
                                    <div class="ml-4">{{$result["name"]}}</div>
                                    <div class="mx-2">‧</div>
                                    <div class="font-light text-gray-700 text-sm mr-4 flex-shrink-0"> {{$result["alcoholic"]}}</div>
                                </div>
                                <div class="flex justify-end">
                                    <div class="font-light text-sm tracking-wide bg-orange-400 rounded-full py-2 px-2 text-gray-900 mr-4 flex-shrink-0">{{$result["category"]}}</div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-4">No results for "{{$search}}"</div>
            @endif
        </div>
    @endif
</div>
