<?php

namespace App\Http\Controllers;

use App\Cuisine;
use App\Restaurant;
use Illuminate\Http\Request;

class CuisineController extends Controller
{
    public function index(Restaurant $restaurant)
    {
        $cuisines = Cuisine::all();
        return view('resto.cuisine', compact('cuisines'), compact('restaurant'));
    }

    public function store(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'libelle' => ['string']
        ]);

        $cuisine = new Cuisine([
            'libelle' => $request->get('libelle')
        ]);

        $cuisine->save();

        // Jouter dans la table d'association cuisine_restauarant
        $restaurant->cuisines()->attach($cuisine->id);

        return Response()->json($cuisine);
    }

    public function delete(Restaurant $restaurant, Cuisine $cuisine)
    {
        $restaurant->cuisines()->detach($cuisine);

        return redirect()->route('resto.cuisine', compact('restaurant'));
    }

    public function ajouter(Restaurant $restaurant)
    {
        $id = request()->get('id'); // 'id' représente les paramètre envoyé par ajax

        $restaurant->cuisines()->attach($id);
        return redirect()->route('resto.cuisine', compact('restaurant'));
    }
}
