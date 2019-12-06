<?php

namespace App\Http\Controllers;

use App\Client;
use App\Commande;
use App\Mail\SendClient;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class RestaurateurController extends Controller
{
    public function login()
    {
        return view('restaurateur.login');
    }

    public function connexion(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string'],
            'email' => ['required', 'string']
        ]);

        $resto = DB::table('restaurants')->where([
            ['email',$request->get('email')],
            ['nom',$request->get('nom')]
        ])->get();

        if ($resto) {
            return redirect()->route('restaurateur.acceuil');
        } else {
            dd("error");
        }

    }

    public function acceuil()
    {
        $commande = DB::table('commandes')->latest()->first();
        $client = DB::table('clients')->latest()->first();
        return view('restaurateur.acceuil',compact('commande','client'));
    }

    public function sendMail(Client $client)
    {
        Mail::to($client)->send(new SendClient);
        return back();
    }
    /** POUR LA COMMANDE */
    public function addClient(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string'],
            'prenom' => ['required', 'string'],
            'adresse' => ['required', 'string'],
            'email' => ['required', 'string'],
        ]);

        $client = new Client([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'adresse' => $request->get('adresse'),
            'email' => $request->get('email'),
        ]);

        $client->save();
        return back();
    }
}
