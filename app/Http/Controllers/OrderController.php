<?php

namespace App\Http\Controllers;

use App\Commande;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Restaurant $restaurant)
    {
        $cart = \Cart::getContent();
        return view('order.index', [
            'data' => $cart,
            'restaurant' => $restaurant
        ]);
    }

    public function add(Request $request)
    {
        $client = DB::table('clients')->latest()->first();
        $restaurant = DB::table('restaurants')->latest()->first();
        $cmd = Commande::createOrder($client->id,$restaurant->id);
        \Cart::clear();
        return Response()->json($cmd);
    }
}
