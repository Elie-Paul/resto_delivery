<?php

namespace App\Http\Controllers;

use App\Category;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function menu(Restaurant $restaurant)
    {
        $categories = DB::table('categories')->where('restaurant_id', $restaurant->id)->get();
        $cart = \Cart::getContent();
        return view('restaurant.menu', compact('restaurant'),compact('categories'), ['data'=>$cart]);
    }

    public function menuArticle(Category $category)
    {
        $articles = DB::table('articles')->where('category_id', $category->id)->get();
        return view('restaurant.article', compact('category','articles'));
    }
}
