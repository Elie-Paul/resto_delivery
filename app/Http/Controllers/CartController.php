<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = \Cart::getContent();
        return view('cart.index',[
            'data' => $cart
        ]);
    }
    public function addItem(Article $article)
    {
        Article::find($article->id);
        $cart = \Cart::add(array(
            'id' => $article->id,
            'name' => $article->nom,
            'price' => $article->prix,
            'quantity' => 1,
            //'attributes' => array()
        ));

        return view('cart.index',[
            'data' => \Cart::getContent()
        ]);
    }
}
