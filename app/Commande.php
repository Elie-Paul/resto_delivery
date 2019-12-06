<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $guarded = [] ;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prix_total',
        'nombre_article',
        'client_id',
        'restaurant_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class)->using('App\Article_Commande')
                                                    ->withPivot([
                                                        'article_id',
                                                        'commande_id'
                                                    ]);
    }

    public static function createOrder($idCl, $idR)
    {
        $prix_total = \Cart::getTotal();
        $nbr_article = \Cart::getTotalQuantity();

        $cmd = new Commande([
            'prix_total' => $prix_total,
            'nombre_article' => $nbr_article,
            'client_id' => $idCl,
            'restaurant_id' => $idR
        ]);
        $cmd->save(); /// Insert in table order

        // place order and insert data to orders_details
       foreach(\Cart::getContent() as $cData){
        $cmd->articles()->attach($cData->id,[
          'prix_unitaire' => $cData->price,
          'quantite' => $cData->quantity
        ]);
      }

      \Cart::clear(); // make cart empty

      return $cmd;
    }
}
