<?php

namespace App\Http\Livewire;

use App\Drink;
use App\Http\Resources\Drink as DrinkResource;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDrinks extends Component
{
    public $search = '';

    public function render()
    {
        $search_results = [];

        if (strlen($this->search) > 2) {
//            $drinks= Drink::query()->where('name', 'LIKE', "%{$this->search}%")->get();
//
//            $search_results = new DrinkResource($drinks);
            $search_results = Http::get('http://localhost:8001/api/drinks?q=' . $this->search)
                ->json();
            $search_results = $search_results["data"];

        }


        return view('livewire.search-drinks',[
            'search_results' => collect($search_results)->take(7),
        ]);
    }
}
