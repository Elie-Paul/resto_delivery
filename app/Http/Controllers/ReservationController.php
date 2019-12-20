<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index(Restaurant $restaurant)
    {

        return view('resto.reserv', compact('restaurant'));
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $restaurant->reservation = true;
        $restaurant->save();
        return Response()->json("true");
    }

    public function jsonDate(Request $request)
    {
        $resto = Restaurant::find($request->get('id'));
        $restoHeure = DB::table('business_hours')
                    ->join('business_hours_restaurant', function($join) use($resto){
                        $join->on('business_hours.id','business_hours_restaurant.article_id')
                        ->where('business_hours_restaurant.restaurant_id','=',1);
                    })->get();

        //$art = DB::table('restaurant')->join('business_hours_restaurant','restaurant.id','business_hours_restaurant.restaurant_id')->get();
        return Response()->json($restoHeure);
    }
}
