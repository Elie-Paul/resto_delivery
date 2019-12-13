<?php

namespace App\Http\Controllers;

use App\Article;
use App\Client;
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
        if (\Cart::isEmpty()) {
            return Response()->json("error");
        } else {
            $client = new Client([
                'nom' => $request->get('nom'),
                'prenom' => $request->get('prenom'),
                'adresse' => $request->get('adresse'),
                'email' => $request->get('email'),
            ]);

            $client->save();

            //$client = DB::table('clients')->latest()->first();
            $restaurant = DB::table('restaurants')->latest()->first();
            $cmd = Commande::createOrder($client->id,$restaurant->id);
            \Cart::clear();
            return Response()->json($cmd);
        }
    }

    public function jsonCmd(Request $request)
    {
        //$client = Client::find($request->get('client_id'));
        //$ds = DB::table('article_commande')->where('commande_id',$request->get('id'))->get();
        //$art = DB::table('articles')->join('article_commande','articles.id','article_commande.article_id')->get();*/
        /*$art = DB::table('articles')
                    ->join('article_commande', function ($join,Request $request) {
                        $join->on('articles.id', '=', 'article_commande.article_id')
                            ->where('commande_id', '=', $request->get('id'));
                    })
                    ->get();*/
        $cmd = DB::table('commandes')->latest()->first();
        $ds = DB::table('article_commande')->where('commande_id',$cmd->id)->get();
        $commandeDetail = DB::table('articles')
                    ->Join('article_commande', 'articles.id','article_commande.article_id')
                    ->join('commandes', function($join){
                        $join->on('article_commande.commande_id','commandes.id')
                            ->where('commandes.id',DB::table('commandes')->latest()->first()->id);
                    })->join('clients', function($join){
                        $join->on('commandes.client_id','clients.id')
                            ->where('clients.id',DB::table('clients')->latest()->first()->id);
                    })->get();
        return Response()->json($commandeDetail);
    }






    /*public function jsonCmd()
    {
        //$client = Client::find($request->get('client_id'));
        //$ds = DB::table('article_commande')->where('commande_id',$request->get('id'))->get();
        $cmd = DB::table('commandes')->latest()->first();
        return Response()->json($cmd);
    }*/
}
