<?php

namespace App\Http\Controllers;

use App\Drink;
use App\Http\Resources\Drink as DrinkResource;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return DrinkResource|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->exists('q')){
            $search = $request->q;
            $drinks = Drink::query()->orWhere('name','LIKE',"%{$search}%")
                ->orWhere('category','LIKE',"%{$search}%")
                ->orWhere('alcoholic','LIKE',"%{$search}%")
                ->orWhere('glass','LIKE',"%{$search}%")
                ->orWhere('instructions','LIKE',"%{$search}%")
                ->orWhere('ingredient1','LIKE',"%{$search}%")
                ->orWhere('ingredient2','LIKE',"%{$search}%")
                ->orWhere('ingredient3','LIKE',"%{$search}%")
                ->orWhere('ingredient4','LIKE',"%{$search}%")
                ->orWhere('ingredient5','LIKE',"%{$search}%")
                ->orWhere('ingredient6','LIKE',"%{$search}%")
                ->paginate(10);
        }
        else{
            $drinks = Drink::paginate(10);
        }

        return $drinks;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $drink = Drink::create($request->all());
        return $drink;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $drink)
    {
        return Drink::find($drink->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drink $drink)
    {
        $drink = Drink::find($drink->id)->update($request->all());
        return $drink;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $drink)
    {
        $drink = Drink::find($drink->id);
        $drink->delete();
        return $drink;
    }
}
