<?php

namespace App\Http\Controllers;

use App\Restaurant;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('resto.list', compact('restaurants'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'nom' => ['required', 'string'],
            'email' => ['required', 'string']
        ]);

        $data = $request->all();
        $check = Restaurant::insert($data);

        //dd($check);

        $arr = array('msg' => 'Try again', 'status' => 'false');
        if($check)
        {
            $arr = array('msg' => 'Success', 'status' => 'true');
        }

        return Response()->json($arr);
        //return redirect('/admin/resto/list');
    }

    public function populaire()
    {
        return view('resto.pop');
    }

    public function access(Restaurant $restaurant)
    {
        //$restaurant->update($request->only('nom', 'string'));
        //dd($restaurant);
        return view('resto.access', compact('restaurant'));
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'nom'=> 'string',
            'tel1'=> 'string',
            'ville' => 'string',
            'code_postal' => 'string',
            'num_rue' => 'string'
        ]);

        $restaurant->nom = $request->get('nom');
        $restaurant->tel1 = $request->get('tel1');
        //$restaurant->tel2 = $request->get('tel2');
        $restaurant->ville = $request->get('ville');
        $restaurant->code_postal = $request->get('code_postal');
        $restaurant->num_rue = $request->get('num_rue');

        $restaurant->save();

        return Response()->json($restaurant);
        //return redirect()->route('profiles.list');
    }

    public function openhours()
    {
        return view('resto.hours');
    }

    public function menu(Restaurant $restaurant)
    {
        return view('resto.menu', compact('restaurant'));
    }
}
