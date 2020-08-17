<?php

namespace App\Http\Controllers;

use App\Drink;
use App\Http\Resources\Drink as DrinkResource;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return DrinkResource|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->exists('q')) {
            $search = $request->q;
            $drinks = Drink::query()->orWhere('name', 'LIKE', "%{$search}%")
                ->orWhere('category', 'LIKE', "%{$search}%")
                ->orWhere('alcoholic', 'LIKE', "%{$search}%")
                ->orWhere('glass', 'LIKE', "%{$search}%")
                ->orWhere('instructions', 'LIKE', "%{$search}%")
                ->orWhere('ingredient1', 'LIKE', "%{$search}%")
                ->orWhere('ingredient2', 'LIKE', "%{$search}%")
                ->orWhere('ingredient3', 'LIKE', "%{$search}%")
                ->orWhere('ingredient4', 'LIKE', "%{$search}%")
                ->orWhere('ingredient5', 'LIKE', "%{$search}%")
                ->orWhere('ingredient6', 'LIKE', "%{$search}%")
                ->paginate(10);
        } else {
            $drinks = Drink::paginate(10);
        }

        return $drinks;
    }

    public function create(){
        return view('drink.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $imagePath = $request->image->store('uploads', 'public');
//
//        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
//        $image->save();
//
//        $drink = Drink::create($request->all());
//        $drink->image = $imagePath;
//        return view('home')->with('success','Drink Added.');
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('img'), $imageName);

        $drink = Drink::create($request->all());
        $image_resize = Image::make(public_path().'/img/'.$imageName);
        $image_resize->fit(300, 300);
        $drink->image = $imageName;
        $drink->save();

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Drink $drink
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $drink)
    {
        return Drink::find($drink->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Drink $drink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drink $drink)
    {
        $drink = Drink::find($drink->id);
        $drink->update($request->all());
        return $drink;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Drink $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $drink)
    {
        $drink = Drink::find($drink->id);
        $drink->delete();
        return $drink;
    }
}
