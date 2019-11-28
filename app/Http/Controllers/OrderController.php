<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $cart = \Cart::getContent();
        return view('order.index',[
            'data' => $cart
        ]);
    }
}
