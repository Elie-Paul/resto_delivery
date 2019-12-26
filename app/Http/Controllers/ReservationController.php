<?php

namespace App\Http\Controllers;

use App\Client;
use App\Reservation;
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

    public function store(Request $request,Restaurant $restaurant)
    {
        $client = new Client([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'adresse' => $request->get('adresse'),
            'email' => $request->get('email'),
            'telephone' => $request->get('telephone'),
        ]);
        $client->save();

        $reservation = new Reservation([
            'client_id' => $client->id,
            'restaurant_id' => $request->get('restoId'),
            'date' => $request->get('date'),
            'heure' => $request->get('heure'),
            'nombre_personnes' => $request->get('nbrPers'),
            'designiation' => $request->get('designation')
        ]);

        $reservation->save();

        $r = Restaurant::find($request->get('restoId'));

        $client->dateR = $reservation->date;
        $client->heureR = $reservation->heure;
        $client->nbrPers = $reservation->nombre_personnes;
        $client->titre = $reservation->designiation;
        $client->nomResto = $r->nom;
        $client->emailR = $r->email;

        return Response()->json($client);


    }

    public function jsonReserv(Request $request)
    {
        //$clientR = DB::table('clients')->latest()->first();
        $reservation = DB::table('reservations')->latest()->first();
        $reservationClient = DB::table('reservations')->join('clients', function($join){
            $join->on('reservations.client_id','clients.id')->where('reservations.id','=',DB::table('reservations')->latest()->first()->id);
        })->get();
        return Response()->json($reservationClient[0]);
    }

    public function reservConfirm(Request $request)
    {
        return Response()->json("true");
    }
}
