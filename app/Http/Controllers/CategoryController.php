<?php

namespace App\Http\Controllers;

use App\Category;
use App\Restaurant;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index(Restaurant $restaurant)
    {
        $categories = DB::table('categories')->where('restaurant_id', $restaurant->id)->get();
        return view('category.index', compact('categories'), compact('restaurant'));
    }

    public function store(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'nom' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image']
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        $image = Image::make(public_path("/storage/{$imagePath}"))->fit(250,190);
        $image->save();

        $category = new Category([
            'nom' => $request->get('nom'),
            'description' => $request->get('description'),
            //'image' => $request->get('image') style="width: 250px; heigth: 190px",
            'image' => $imagePath,
            'restaurant_id' => $restaurant->id
        ]);
        //dd($category);
        //dd($restaurant);
        $category->save();
        $category->restaurant()->associate($restaurant);
        //return Response()->json($category);
        return back();
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function destroy($id)
    {
        DB::table('articles')->where('category_id', $id)->delete();

        $category = Category::find($id);
        $category->delete();

        return back();
    }
}
