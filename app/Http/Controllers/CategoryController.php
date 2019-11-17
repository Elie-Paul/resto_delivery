<?php

namespace App\Http\Controllers;

use App\Category;
use App\Restaurant;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index(Restaurant $restaurant)
    {
        $categories = Category::all();
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
            'restaurant_id' => $restaurant
        ]);
        $category->save();
        //$category->restaurant()->associate($restaurant);
        return Response()->json($category);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        //return redirect('/admin/category');
        return Response()->json([
            'message' => "reussi"
        ]);
    }
}
