<?php

namespace App\Http\Controllers;

use App\BusinessHours;
use App\Restaurant;
use Illuminate\Http\Request;

class BusinessHoursController extends Controller
{
    public function store(Restaurant $restaurant, Request $request)
    {
        /*$request->validate([
            'jours' => ['integer'],
            'open_time' => ['time'],
            'close_time' => ['time'],
        ]);*/

        $business_hours = new BusinessHours([
            'jours' => $request->get('jours'),
            'open_time' => $request->get('open_time'),
            'close_time' => $request->get('close_time'),
        ]);

        $business_hours->save();

        // Ajouter dans la table d'association cuisine_restauarant
        $restaurant->businesshours()->attach($business_hours->id);

        return Response()->json($business_hours);
    }
}
