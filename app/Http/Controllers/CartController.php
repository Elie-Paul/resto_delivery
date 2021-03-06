<?php

namespace App\Http\Controllers;

use App\Article;
use App\Restaurant;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Restaurant $restaurant)
    {
        $cart = \Cart::getContent();
        return view('cart.index',[
            'data' => $cart,
            'restaurant' => $restaurant
        ]);
    }

    public function jsonCart()
    {
        $cart = \Cart::getContent();
        return Response()->json($cart);
    }

    public function addItem(Request $request, Restaurant $restaurant)
    {
        $article = Article::find($request->get('id'));
        $cart = \Cart::add(array(
            'id' => $article->id,
            'name' => $article->nom,
            'price' => $article->prix,
            'quantity' => 1,
            //'attributes' => array()
        ));

        /*return view('cart.index',[
            'data' => \Cart::getContent(),
            'restaurant' => $restaurant
        ]);*/
        return Response()->json($cart);
    }

    public function updateItem(Request $request)
    {
        $id = $request->get('id');
        $qty = $request->get('qte');
        \Cart::update($id,array(
            'quantity' => $qty
        ));
        return back();
    }

    public function removeItem(Article $article)
    {
        \Cart::remove($article->id);
        return back();
    }
}
